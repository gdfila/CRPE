<?php
/*
 * Template Name: telechargement_brochure
 */
?>

<?php get_header(); ?>

<div class="row">
      <div class="col-sm-6 form_left">
              <?php
            if(!isset($_GET['centre']) )
            {
                      wp_redirect( ABSPATH . 'wp-content/themes/crpe/brochure.php' );
                        exit;
            }
           $arg=array('name' => $_GET['centre'],'post_type'=>'centres');
          $query = new WP_Query($arg); 
     
 
        if($query->have_posts()) : while($query->have_posts()) : $query->the_post()?>
          
           <h1><a href="<?php the_field('telechargement_brochure') ?>" >telechargement </a></h1>
    
    <?php endwhile;endif; ?>
 
          
    
         
    
      </div>
</div>
<?php get_footer(); ?>