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
     
    if (isset($_POST['valider']) && isset($_POST['brochure-verif']))  
   {
            if (wp_verify_nonce($_POST['brochure-verif'], 'brochure')) 
        {
             
              /* demande de rappel   */
            if($_POST['rappel']==true  && isset($_POST['telephone']))
             {
                  $url = add_query_arg('erreur', 'telephone', wp_get_referer());

                  wp_safe_redirect($url);
                  exit();
              }
              /*  envoie brochure par courrier */
            
              if($_POST['brochure']==true )
               {
                  if (isset($_POST['adresse']) || isset($_POST['cp']) || isset($_POST['ville']))
                  {
                     $url = add_query_arg('erreur', 'courrier', wp_get_referer());
                      wp_safe_redirect($url);
                    exit();
                  }
              }
                
         }
     }
}
add_action('template_redirect', 'traitementFormBrochure');