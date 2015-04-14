<?php

function crpe_theme() {
    //video
    add_theme_support('post-formats', ['video']);
    //img a la une
    add_theme_support('post-thumbnails');
    // menu
    register_nav_menus([
        'nav' => 'nav_header',
    ]);

}
add_action('after_setup_theme', 'crpe_theme');


function my_toolbars( $toolbars )
{
	$toolbars['Very Simple' ] = array();
	$toolbars['Very Simple' ][1] = array('bold' , 'italic' , 'underline' );

	if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false )
	{
	    unset( $toolbars['Full' ][2][$key] );
	}
	// remove the 'Basic' toolbar completely
	unset( $toolbars['Basic' ] );

	// return $toolbars - IMPORTANT!
	return $toolbars;
}

add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );


/**
 *
 * Google Map
 *
 */

function theme_name_scripts() {
    wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false' );
    wp_enqueue_script( 'custom-google-map', get_template_directory_uri() . '/js/gmap.js' );
}

add_action( 'wp_footer', 'theme_name_scripts' );

require_once ABSPATH . 'wp-content/themes/crpe/cpt/crpe_centres.php';

/**
 * parametre de session ->$_session
 */
add_action('init', 'myStartSession', 1);
add_action('wp_logout', 'myEndSession');
add_action('wp_login', 'myEndSession');

function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}

function myEndSession() {
    session_destroy ();
}


/*-------------------------   permet de rajouter des parametre a l'url -------------------------------*/
add_action('init', 'add_my_rewrite');

function add_my_rewrite() {
  global $wp_rewrite;
  add_rewrite_tag('%centre%','([^&]+)');
  add_rewrite_tag('%jpoDate%','([^&]+)');
  $wp_rewrite->add_rule('inscriptionJPO/([^/]+)/([^/]+)/([^/]+)','index.php?p=180&centre=$matches[1]&jpoDate=$matches[2],top');

  $wp_rewrite->flush_rules();
}

/**
 * ----------------------permet de remplir les champs select des differents formulaire-----------------
 */
function remplirListe()
{
     include_once "api/Thalamus_init.php";
  // Liste des centres
  $centersList = $client->call(array("service" => "formation","method" => "centersListByFormation","formationId" => 400));
   //  plage horaire
   $horaireList = $client->call(array("service" => "prospect", "method" => "callBackTimesList"));
    $_SESSION['horaireList'] = $horaireList;
    $_SESSION['client'] = $client;
    $data = [];
    if (!empty($centersList)) {
        foreach ($centersList->datas as $centre) {
            if (empty($centre)) {
                break;
            }
            array_push($data, array("name" => $centre->name, "id" => $centre->id));
        }
    }
    $_SESSION['centre'] = $data;
    }
add_action('template_redirect', 'remplirListe');




/**
 * --------------------------------------------------------  formulaire brochure----------------------------------------------------------------
 */

//**----------------------------- verif les champs du formulaire brocure-----------------**/
    function verifForm()
    {
        if (wp_verify_nonce($_POST['brochure-verif'], 'brochure'))
        { /* demande de rappel   */
            if ($_POST['rappel'] == true && empty($_POST['telephone']))
            {
                $_GET['erreur'] = "telephone";
                require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
                exit();
            }
        }
        /*  envoie brochure par courrier */
        if ($_POST['brochure'] == true)
        {
            if (empty($_POST['adress']) || empty($_POST['cp']) || empty($_POST['ville']))
            {
                $_GET['erreur'] = "courrier";
                require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
                exit();
            }
        }
        if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']))
        {
            $_GET['erreur'] = "vide";
            require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
            exit();
        }
        if (verifEmail() == false)
        {
            $_GET['erreur'] = 'email';
            require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
            exit();
        }
    }

    /* verifie si l'adresse email   */
    function verifEmail()
    {
        if (isset($_POST['email']))
        {
            $email = stripslashes(htmlentities($_POST['email']));
            if (preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i', str_replace('&amp;', '&', $email)))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    /*      ----------------------------------- traitement formulaire brochure  ----------------------------------*/
function traitementFormBrochure() {
     $_GET['erreur']="";
    $_GET['sucess']="";
    $_GET['mess']="";
    $_GET['centre']="";
     if (isset($_POST['valider']) && isset($_POST['brochure-verif']))
     {
            verifform(); // verif formulaire
            $client = $_SESSION['client'];
            //*-----------------  demande d'envoi de documentation --------*/
            if (empty($_POST['telephone']))
            {
                $tel = "0000000000";
            }
            else
            {
                $tel = $_POST['telephone'];
            }
            $centre = explode("/", $_POST['centre']);
            $idcentre = $centre[0];
            $nomCentre = explode(" ", $centre[1]);
            if ($_POST['rappel'] == true)
            {
                $etreRappeler = true;
            }
            else
            {
                $etreRappeler = false;
            }
            $etreRappeler = ($_POST['rappel'] == true) ? true : false;
            // envoi de brochure par courrier
            if ($_POST['brochure'] == true)
            {
                $documentationRequest = $client->call(array(
                    "service" => "prospect",
                    "method" => "documentationRequest",
                    "centerId" => $idcentre,
                    "formationId" => 400,
                    "callBackTimeId" => $_POST['horaire'],
                    "booklet" => True, /*  envoi par courrier  */
                    "callBack" => $etreRappeler,
                    "lastName" => $_POST['nom'],
                    "firstName" => $_POST['prenom'],
                    "email" => $_POST['email'],
                    "phoneNumber" => $tel,
                    "addressStreet" => $_POST['adress'],
                    "zip" => $_POST['cp'],
                    "city" => $_POST['ville']
                ));
            }
            else   // telechargement brochure
            {
                $documentationRequest = $client->call(array(
                    "service" => "prospect",
                    "method" => "documentationRequest",
                    "centerId" => $idcentre,
                    "formationId" => 400,
                    "callBackTimeId" => intval($_POST['horaire']),
                    "booklet" => false,
                    "callBack" => $etreRappeler,
                    "lastName" => $_POST['nom'],
                    "firstName" => $_POST['prenom'],
                    "email" => $_POST['email'],
                    "phoneNumber" => $tel,
                    "addressStreet" => "",
                    "zip" => "",
                    "city" => ""
                ));
            }

            if ($documentationRequest->success !=true)
                    {
                          $_GET['erreur']='brochure';
                          $_GET['mess']=$documentationRequest->errorMessage;
                            require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
                                 exit();
                    }
                  //  rappel($client) ;// demande de rappel telephonique
                    $_GET['centre']=strtolower($nomCentre[1]);

                      require_once ABSPATH . 'wp-content/themes/crpe/telechargement_brochure.php';
                           exit();

      }

    }
add_action('template_redirect', 'traitementFormBrochure');

/**
 * -------------------------------------------------------------- formulaire Rappel  -----------------------------------------------------------------------
 */

/**  verification des champs*/
function traitementFormRappel() {
     $_GET['erreur']="";
    $_GET['sucess']="";
    $_GET['mess']="";
    $_GET['centre']="";

    if (isset($_POST['valider']) && isset($_POST['rappel-verif'])) {
            if (wp_verify_nonce($_POST['rappel-verif'], 'rappel')) { /* demande de rappel   */
                if ($_POST['rappel'] == true && empty($_POST['telephone'])) {
                    $_GET['erreur'] = "telephone";
                    require_once ABSPATH . 'wp-content/themes/crpe/rappel.php';
                    exit();
                }
                if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email'])) {
                    $_GET['erreur'] = "vide";
                    require_once ABSPATH . 'wp-content/themes/crpe/rappel.php';
                    exit();
                }
                if (verifEmail() == false) {
                    $_GET['erreur'] = 'email';
                    require_once ABSPATH . 'wp-content/themes/crpe/rappel.php';
                    exit();
                }
                 $result=rappel();
                 if ($result == true)
                {
                    $_GET['erreur'] = 'success';
                }
                require_once ABSPATH . 'wp-content/themes/crpe/rappel.php';
                exit();
            }

   }

}
add_action('template_redirect', 'traitementFormRappel');



/* demande de rappel telephonique */
function rappel()
{
  
    $client=$_SESSION['client'];
        $centre= explode("/",$_POST['centre']);
       $idcentre=$centre[0];
        $callBack = $client->call(array(
                            "service" => "prospect",
                            "method" => "callBackRequest",
                            "centerId" => $idcentre,
                            "formationId" => 400,
                            "lastName" =>  $_POST['nom'],
                            "firstName" =>  $_POST['prenom'],
                            "email" => $_POST['email'],
                            "phoneNumber" => $_POST['telephone'],
                             "callBackTimeId" => intval($_POST['horaire'])
                        ));
         if ($callBack->success != true)
        {
            $_GET['erreur'] = 'rappel';
            $_GET['mess'] = $callBack->errorMessage;
            require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
            exit();
        }
        else
        {
            return true;
        }
    }

function centreJPO()
{
    //var_dump();

}
add_action('template_redirect', 'centreJPO');

/*----------------------------------------------------------------  formulaire d'inscription jpo ------------------------------------------*/
function inscriptionJPO()
{
        $_GET['erreur'] = '';
        if (isset($_POST['valider']) && isset($_POST['inscriptionJPO'])) {
            if (wp_verify_nonce($_POST['inscriptionJPO'], 'jpo')) {
                if (verifEmail() == false) {
                    $_GET['erreur'] = 'email';
                    require_once ABSPATH . 'wp-content/themes/crpe/inscriptionJPO.php';
                    ;
                }
                $client = $_SESSION['client'];
                $results = $client->call(
                        array("service" => "prospect",
                            "method" => "eventRegistration",
                            "centerId" => $_POST['centre'],
                            "formationId" => 400,
                            "eventId" => $_POST['idJpo'],
                            "eventType" => "informationMeeting",
                            "eventRegistrationOrigin" => "web",
                            "eventAccompanistsNumber" => $_POST['accompagant'],
                            "lastName" => $_POST['nom'],
                            "firstName" => $_POST['prenom'],
                            "email" => $_POST['email']
                ));
                if ($results->success == true) 
                {
                    $_GET['erreur'] = 'success';
                    require_once ABSPATH . 'wp-content/themes/crpe/inscriptionJPO.php';
                    exit();
                }
                else {
                    $_GET['erreur'] = 'divers';
                    $_GET['mess'] = 'Suite à un probleme inantendu,votre inscription n\'a pas été enregistreé';
                    require_once ABSPATH . 'wp-content/themes/crpe/inscriptionJPO.php';
                    exit();
                }
            }
        }
    }

    add_action('template_redirect', 'inscriptionJPO');




    /****------------------------------------------------------------ formulaire de contact ----------------------------------------------****/

//pour envoyer le mail au format html
    add_filter('wp_mail_content_type', 'set_content_type');

    function set_content_type($content_type) {
        return 'text/html';
    }

    function traitementFormContact() 
    {
      
        $_GET['erreur'] = "";
        if (isset($_POST['valider']) && isset($_POST['contact-verif'])) {
            if (wp_verify_nonce($_POST['contact-verif'], 'contact')) {
                if (verifEmail() == false) {
                    $_GET['erreur'] = 'email';
                    require_once ABSPATH . 'wp-content/themes/crpe/contact.php';
                    exit();
                }
                $centretab = explode(" ", $_POST['centre']);
                $centre = $centretab[1];
                $arg = array('name' => $centre, 'post_type' => 'centres');
                $query = new WP_Query($arg);
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                        $destinataire = get_field('email');
                    endwhile;
                endif;
                if (empty($destinataire)) {
                    $_GET['erreur'] = 'rappel';
                    $_GET['mess'] = "L'envoi a été annuler. L'adresse destinantaire n'a pas été trouvé";
                }
                $header = "From: lganne93@gmail.com\n";
                $header .= "Reply-To: " . $_POST['email'] . "\n";
                $objet = 'Formulaire de contact via wordpress pour le CRPE';
                $message = "<html><p>Prospect CRPE<br><strong>Nom : </strong>" . $_POST['nom'] . " <br>"
                        . "<strong>Prénom : </strong>" . $_POST['prenom'] . "<br>"
                        . " <strong>E mail : </strong>" . $_POST['email'] . "<br>"
                        . " <strong>Téléphone : </strong>" . $_POST['telephone'] . "<br>"
                        . "<strong>Centre : </strong>" . $centre . "</p><p><strong> Message : </strong> <br>" . $_POST['message'] . "</p></html>";
                $email = wp_mail($destinataire, $objet, $message);
                if ($email) {
                    $_GET['erreur'] = 'success';
                } else {
                    $_GET['erreur'] = 'rappel';
                    $_GET['mess'] = 'Un probleme est survenu empechant l\'envoi de votre message';
                }
                require_once ABSPATH . 'wp-content/themes/crpe/contact.php';
                exit();
            }
        }
    }

    add_action('template_redirect', 'traitementFormContact');

    /**
 *
 * Breadcrumb
 *
 */

function my_breadcrumbs() {

    /* === OPTIONS === */
    $text['home']     = 'Accueil'; // text for the 'Home' link
    $text['category'] = 'Archive by Category "%s"'; // text for a category page
    $text['404']      = 'Error 404'; // text for the 404 page

    $show_current   = 1; // 1 - show current post/page/category title in breadcrumbs, 0 - don't show
    $show_on_home   = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
    $show_title     = 1; // 1 - show the title for the links, 0 - don't show
    $delimiter      = ' &raquo; '; // delimiter between crumbs
    $before         = '<span class="current">'; // tag before the current crumb
    $after          = '</span>'; // tag after the current crumb
    /* === END OF OPTIONS === */

    global $post;
    $home_link    = home_url('/');
    $link_before  = '<span typeof="v:Breadcrumb">';
    $link_after   = '</span>';
    $link_attr    = ' rel="v:url" property="v:title"';
    $link         = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $parent_id    = $parent_id_2 = $post->post_parent;
    $frontpage_id = get_option('page_on_front');

    if (is_home() || is_front_page()) {

        if ($show_on_home == 1) echo '<div class="breadcrumbs"><a href="' . $home_link . '">' . $text['home'] . '</a></div>';

    } else {

        echo '<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">';
        if ($show_home_link == 1) {
            echo '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $text['home'] . '</a>';
            if ($frontpage_id == 0 || $parent_id != $frontpage_id) echo $delimiter;
        }

        if ( is_category() ) {
            $this_cat = get_category(get_query_var('cat'), false);
            if ($this_cat->parent != 0) {
                $cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
                if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                echo $cats;
            }
            if ($show_current == 1) echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;

        }elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $delimiter);
                if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                echo $cats;
                if ($show_current == 1) echo $before . get_the_title() . $after;
            }

        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;

        } elseif ( is_attachment() ) {
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            $cats = get_category_parents($cat, TRUE, $delimiter);
            $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
            $cats = str_replace('</a>', '</a>' . $link_after, $cats);
            if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
            echo $cats;
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

        } elseif ( is_page() && !$parent_id ) {
            if ($show_current == 1) echo $before . get_the_title() . $after;

        } elseif ( is_page() && $parent_id ) {
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs)-1) echo $delimiter;
                }
            }
            if ($show_current == 1) {
                if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo $delimiter;
                echo $before . get_the_title() . $after;
            }

        } elseif ( is_404() ) {
            echo $before . $text['404'] . $after;
        }

        if ( get_query_var('paged') ) {
            if ( is_category()) echo ' (';
            echo __('Page') . ' ' . get_query_var('paged');
            if ( is_category()) echo ')';
        }

        echo '</div><!-- .breadcrumbs -->';

    }
}




