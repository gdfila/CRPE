<?php
/**
 * Template Name: recrutement
 */
?>
<?php get_header(); ?>
<div id="container_brochure" class="top_content">
  
    <?php
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
    ?>

    <!--
    Affiche une image de présentation pour la page
     --> 
<!--    <div class="hidden-xs hidden-sm img_prez img_prez_aplat img_prez_incurve">
        <img class="back_img" src="<?php echo $post_thumbnail_url; ?>" alt="">
    </div> /img_prez -->
   
     <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs hidden-sm picto_title_doc">
                    <h1 class="medium">Galien recrute</h1>
                </div><!-- /col-sm-3 -->
                 <div class="col-sm-6 col-sm-offset-1">
                    <h2>Envoyer votre candidature </h2>
                    <h3><a href="mailto:recrutement@cours-galien.fr">recrutement@cours-galien.fr</a></h3>
                 </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>

    