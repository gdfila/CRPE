<?php
/*
 * Template Name: telechargement_brochure
 */
?>
<!--
Récuperation du header
 -->
<?php get_header(); ?>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 hidden-xs hidden-sm picto_title_doc">
                <h1 class="medium">Telechargement de la brochure Galien</h1>
            </div><!-- /col-sm-3 -->
            <div class="col-sm-6 col-sm-offset-1">
                <?php
                    if(!isset($_GET['centre']) )
                    {
                        wp_redirect( ABSPATH . 'wp-content/themes/crpe/brochure.php' );
                        exit;
                    }
                    $arg=array('name' => $_GET['centre'],'post_type'=>'centres');
                    $query = new WP_Query($arg); 
     
                    if($query->have_posts()) : while($query->have_posts()) : $query->the_post()?>
          
                        <h2 class="large"><a href="<?php the_field('telechargement_brochure') ?>" >Telechargement de la brochure</a></h2>

                <?php endwhile;endif; ?>
            </div><!-- /col-sm-6 -->
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /contact -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>