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
 * formulaire brochure
 */

function traitementFormBrochure() {
     $_GET['erreur']="";
    $_GET['sucess']="";
    $_GET['mess']="";
    
     if (isset($_POST['valider']) && isset($_POST['brochure-verif']))  
   {
            verifform(); // verif formulaire
            
                    include_once "api/Thalamus_init.php";
              //*-----------------  demande d'envoi de documentation --------*/
                    if(empty($_POST['telephone']))
                    { $tel="0000000000"; }
                     else { $tel=$_POST['telephone'] ; }
                 // envoi de brochure par courrier    
              if($_POST['brochure']==true)
              {$documentationRequest = $client->call(array(
                    "service" => "prospect",
                    "method" => "documentationRequest",
                    "centerId" => $_POST['centre'],
                    "formationId" => 400,
                    "callBackTimeId" => 1,
                    "booklet" => True,
                    "callBack" => True,
                    "lastName" => $_POST['nom'],
                    "firstName" => $_POST['prenom'],
                    "email" => $_POST['email'],
                    "phoneNumber" => $tel,
                    "addressStreet" =>$_POST['adress'],
                    "zip" => $_POST['cp'],
                    "city" => $_POST['ville']
                      ));
              }else   // telechargement brochure
              {     $documentationRequest = $client->call(array(
                    "service" => "prospect",
                    "method" => "documentationRequest",
                    "centerId" => $_POST['centre'],
                    "formationId" => 400,
                    "callBackTimeId" => 1,
                    "booklet" => false,
                    "callBack" => True,
                    "lastName" => $_POST['nom'],
                    "firstName" => $_POST['prenom'],
                    "email" => $_POST['email'],
                    "phoneNumber" => $tel,
                     "addressStreet" =>"",
                    "zip" => "",
                    "city" =>""
                ));
            }
               if ($documentationRequest->success!=true)
                    {
                          $_GET['erreur']='brochure';
                          $_GET['mess']=$documentationRequest->errorMessage;
                            require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
                                 exit();
                    }
                    rappel($client) ;// demande de rappel telephonique
              
                      require_once ABSPATH . 'wp-content/themes/crpe/uploadbrochure.php';
                           exit();
          
      }

    }

add_action('template_redirect', 'traitementFormBrochure');


//**----------------------------- verif les champs du formulaire -----------------**/
function verifForm()
{
      if (wp_verify_nonce($_POST['brochure-verif'], 'brochure')) 
     {                /* demande de rappel   */
            if($_POST['rappel']==true && empty($_POST['telephone']))
             {
                 $_GET['erreur']="telephone";
                 require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
                  exit();
              }
     }
              /*  envoie brochure par courrier */
            
        if($_POST['brochure']==true )
         {
                    if (empty($_POST['adress']) || empty($_POST['cp']) || empty($_POST['ville']))
                    {
                               $_GET['erreur']="courrier";        
                               require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
                                 exit();
                    }
           }
     
}
/*------------------------------------------  demande de rappel telephonique --------------------------*/
function rappel($client)
{
     if($_POST['rappel']==true)
               {    
                   $callBack = $client->call(array(
                            "service" => "prospect",
                            "method" => "callBackRequest",
                            "centerId" => $_POST['centre'],
                            "formationId" => 400,
                            "lastName" =>  $_POST['nom'],
                            "firstName" =>  $_POST['prenom'],
                            "email" => $_POST['email'],
                            "phoneNumber" => $_POST['telephone'],
                             "callBackTimeId" => $_POST['horaire']
                        ));
                 
                    if ($callBack->success!=true)   {
                          $_GET['erreur']='rappel';
                          $_GET['mess']=$callBack->errorMessage;
                            require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
                                 exit();
                    }
                 }
}