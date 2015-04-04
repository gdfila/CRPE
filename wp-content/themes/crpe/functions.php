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
    $horaireList = $client->call(array("service" => "prospect","method" => "callBackTimesList"));
    
      $_SESSION['horaireList']=$horaireList;
      $_SESSION['client']=$client;
     $data=[];
  
  // $results = $client->call(array("service" => "communication","method" => "centerInformationMeetingsList", "centerId" => 11));
 
       if(!empty($centersList))
     {
         foreach ($centersList->datas as $centre)
            {
                         if (empty($centre))
                    {   
                        break ;
                     }
                        array_push($data, array( "name"=>$centre->name ,"id"=>$centre->id));
               } 
     }
     $_SESSION['centre']=$data;
}
add_action('template_redirect', 'remplirListe');




/**
 * --------------------------------------------------------  formulaire brochure----------------------------------------------------------------
 */

//**----------------------------- verif les champs du formulaire brocure-----------------**/
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
           if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']))
              {
                   $_GET['erreur']="vide";
                   require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
                     exit();
              }
     
}
/*      ----------------------------------- traitement formuylaire brochure  ----------------------------------*/
function traitementFormBrochure() {
     $_GET['erreur']="";
    $_GET['sucess']="";
    $_GET['mess']="";
    $_GET['centre']="";
   
     if (isset($_POST['valider']) && isset($_POST['brochure-verif']))  
   {
            verifform(); // verif formulaire
            $client=$_SESSION['client'];
                 //   include_once "api/Thalamus_init.php";
              //*-----------------  demande d'envoi de documentation --------*/
                    if(empty($_POST['telephone']))   { $tel="0000000000"; }
                     else { $tel=$_POST['telephone'] ; }
                   
                     $centre= explode("/",$_POST['centre']);
                      $idcentre=$centre[0];
                     $nomCentre=explode(" ",$centre[1]);
                     $etreRappeler=$_POST['rappel'];
                 // envoi de brochure par courrier    
              if($_POST['brochure']==true)
              {$documentationRequest = $client->call(array(
                    "service" => "prospect",
                    "method" => "documentationRequest",
                    "centerId" => $idcentre,
                    "formationId" => 400,
                    "callBackTimeId" =>$_POST['horaire'],
                    "booklet" => True,  /*  envoi par courrier  */
                    "callBack" => $etreRappeler,
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
                    "centerId" => $idcentre,
                    "formationId" => 400,
                    "callBackTimeId" => $_POST['horaire'],
                    "booklet" => false,
                    "callBack" => $etreRappeler,
                    "lastName" => $_POST['nom'],
                    "firstName" => $_POST['prenom'],
                    "email" => $_POST['email'],
                    "phoneNumber" => $tel,
                     "addressStreet" =>"",
                    "zip" => "",
                    "city" =>""
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
 
     if (isset($_POST['valider']) && isset($_POST['rappel-verif']))  
   {
      if (wp_verify_nonce($_POST['rappel-verif'], 'rappel')) 
     {                /* demande de rappel   */
            if($_POST['rappel']==true && empty($_POST['telephone']))
             {
                 $_GET['erreur']="telephone";
                 require_once ABSPATH . 'wp-content/themes/crpe/rappel.php';
                  exit();
              }
              if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']))
              {
                   $_GET['erreur']="vide";
                 require_once ABSPATH . 'wp-content/themes/crpe/rappel.php';
                  exit();
              }
                include_once "api/Thalamus_init.php";
                     $result=rappel();
                     if ($result==true)
                     { $_GET['erreur']='success'; }
                       
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
                             "callBackTimeId" => $_POST['horaire']
                        ));
                                 
                    if ($callBack->success!=true)   {
                          $_GET['erreur']='rappel';
                          $_GET['mess']=$callBack->errorMessage;
                            require_once ABSPATH . 'wp-content/themes/crpe/brochure.php';
                                 exit();
                    }
                    else
                        {
                
                            return true;
                        }
                   
}




/*----------------------------------------------------------------  formulaire d'inscription jpo ------------------------------------------*/
function inscriptionJPO()
{
     if (isset($_POST['valider']) && isset($_POST['inscriptionJPO']))  
   {
      if (wp_verify_nonce($_POST['inscriptionJPO'], 'jpo')) 
      {
             $client=$_SESSION['client'];
              $results=listAllJPO();
        var_dump($results);
//            $results = $client->call(array("service" => "communication","method" => "centerInformationMeetingsList", "centerId" => 22));
//           var_dump($results->datas);
//          foreach ( $results->datas as $res)
//       {
//           $select[]=array('id'=>$res->id,
//                                        'titre'=>$res->title,
//                                        'date'=>$res->startDate,
//                                        'presentation'=>$res->description
//               );
//       }
//            var_dump($select);
        }
   }
}
add_action('template_redirect', 'inscriptionJPO');




/****------------------------------------------------------------ formulaire de contact ----------------------------------------------****/
function traitementFormContact()
{
     if (isset($_POST['valider']) && isset($_POST['contact-verif']))  
   {
      if (wp_verify_nonce($_POST['contact-verif'], 'contact')) 
      {
//          var_dump($_POST);
//          die();
      }  
   }
            
}
add_action('template_redirect', 'traitementFormContact');


/*-------------------------------------------------------- ACF Centre JPO champ dynamique -------   */

add_action('acf_data_selector/data','champJPO');
 function champJPO($data) 
  {
           //$results=listAllJPO();
   // var_dump($results);
                 
                       $data['jpo_thalamus'] = array(
                   		'label' => 'jpoThalamus',
                                              'data' => array(
                                                                    '101' => array(
				'label' => 'Meeting Room',
				'room_number' => '101',
				'floor' => '1',
				'telephone' => '100'
			),
			'102' => array(
				'label' => 'Stock Room',
				'room_number' => '102',
				'floor' => '1',
				'telephone' => '102'
			),
			'202' => array(
				'label' => 'Manager Room 1',
				'room_number' => '202',
				'floor' => '2',
				'telephone' => '202'
			)
                                                  )
                                                            
		);
     
                 $data['rooms'] = array(
		'label' => 'Rooms',
		'data' => array(
			'101' => array(
				'label' => 'Meeting Room',
				'room_number' => '101',
				'floor' => '1',
				'telephone' => '100'
			),
			'102' => array(
				'label' => 'Stock Room',
				'room_number' => '102',
				'floor' => '1',
				'telephone' => '102'
			),
			'202' => array(
				'label' => 'Manager Room 1',
				'room_number' => '202',
				'floor' => '2',
				'telephone' => '202'
			)
                                                                           
                                                                
		)
	);
              //   var_dump($data);
	return $data;

}


function listAllJPO()
{
      include_once "api/Thalamus_init.php";
        $centersList = $client->call(array("service" => "formation","method" => "centersListByFormation","formationId" => 400));
        $results=[];
        foreach ($centersList->datas as $centre)
        {
                 
            $jpo= $client->call(array("service" => "communication","method" => "centerInformationMeetingsList","centerId" => $centre->id));
              
                 foreach($jpo->datas as $UnJpo)
                 {
                      //  var_dump($UnJpo);
                       $donnee=array($UnJpo->id=>array(  'label'=>$centre->name,
                                                    'id'=>$UnJpo->id,
                                                    'titre'=>$UnJpo->title,
                                                    'date'=>$UnJpo->startDate));
                 //     array_push( $results, $donnee);
                //      array_push($donnee, $UnJpo)                                        
                                               
                     
                 }
                 
        }
        
         return $donnee;
}