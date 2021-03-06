<!--
Récuperation du header
 -->
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="accueil" class="top_content">
    <!--
    Affiche un slider automatique sur toute la largeur de la page
     -->
    <div class="container_slider">
        <?php echo do_shortcode('[image-carousel showcaption="true"]'); ?>
    </div><!-- /container_slider -->

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <h1 class="x-large"><?php the_field('titre_general'); ?></h1>
<!--            <p class="medium"><?php the_field('paragraphe_titre_general'); ?></p>-->
            <p class="medium">Rejoindre le Cours Galien, c’est la garantie d’une préparation sérieuse et adaptée, vous permettant d’aborder en toute confiance le Concours de Recrutement de Professeur des Ecoles.</p><br><br><br>
        </div><!-- /container -->
    </section><!-- /accroche -->

    <!--
    Section présentant les valeurs de l'école
     -->
    <section class="valeurs img_prez img_prez_aplat">
        <img class="hidden-xs hidden-sm back_img" src="<?php bloginfo('template_directory'); ?>/img/images/esprit_galien_home.jpg" alt="img valeur de l'ecole">
        <div class="container">
            <div class="row">
                <h1 class="x-large text_shadow"><?php the_field('titre_valeurs_de_lecole'); ?></h1>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="cercle-3">
                        <h2 class="small"><strong><?php the_field('1er_titre_valeurs_de_lecole'); ?></strong></h2>
                        <p><?php the_field('1er_paragraphe_valeurs_de_lecole'); ?></p>
                    </div><!-- /cercle-3 -->
                </div><!-- /col-sm-3 -->
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="cercle-3">
                        <h2 class="small"><strong><?php the_field('2eme_titre_valeurs_de_lecole'); ?></strong></h2>
                        <p><?php the_field('2eme_paragraphe_valeurs_de_lecole'); ?></p>
                    </div><!-- /cercle-3 -->
                </div><!-- /col-sm-3 -->
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="cercle-3">
                        <h2 class="small"><strong><?php the_field('3eme_titre_valeurs_de_lecole'); ?></strong></h2>
                        <p><?php the_field('3eme_paragraphe_valeurs_de_lecole'); ?></p>
                    </div><!-- /cercle-3 -->
                </div><!-- /col-sm-3 -->
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="cercle-3">
                        <h2 class="small"><strong><?php the_field('4eme_titre_valeurs_de_lecole'); ?></strong></h2>
                        <p><?php the_field('4eme_paragraphe_valeurs_de_lecole'); ?></p>
                    </div><!-- /cercle-3 -->
                </div><!-- /col-sm-3 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les témoignages sous slider
     -->

<section>
<div class="container" id="wrapper">
    <h1 class="text-center"><?php the_field('titre_'); ?></h1>
    <!-- Slideshow 4 -->
    <div class="callbacks_container row">
      <ul class="rslides" id="slider4">
        <li>
        <div class="col-sm-6 col-sm-offset-1">
          <img src="<?php the_field('image_1er_etudiant'); ?>" alt="">
        </div>
        <div class="col-sm-5 temoignage_back">
            <p class="small text_slider"><strong><?php the_field('nom_1er_etudiant'); ?></strong></p>
            <p class="text_slider"><?php the_field('niveau_etude_1er_etudiant'); ?><br /><?php the_field('paragraphe_1er_etudiant'); ?></p>
        </div>
        </li>
        <li>
        <div class="col-sm-6 col-sm-offset-1">
          <img src="<?php the_field('image_2eme_etudiant'); ?>" alt="">
        </div>
            <div class="col-sm-5 temoignage_back">
            <p class="small text_slider"><strong><?php the_field('nom_2eme_etudiant'); ?></strong></p>
            <p class="text_slider"><?php the_field('niveau_etude_2eme_etudiant'); ?><br /><?php the_field('paragraphe_2eme_etudiant'); ?></p>
        </div>
        </li>
        <li>
        <div class="col-sm-6 col-sm-offset-1">
          <img src="<?php the_field('image_3eme_etudiant'); ?>" alt="">
        </div>
            <div class="col-sm-5 temoignage_back">
            <p class="small text_slider"><strong><?php the_field('nom_3eme_etudiant'); ?></strong></p>
            <p class="text_slider"><?php the_field('niveau_etude_3eme_etudiant'); ?><br /><?php the_field('paragraphe_3eme_etudiant'); ?></p>
        </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!--  Temoignages video -->

<!--     <section class="temoignages">
        <div class="container">
            <h1 class="large"><?php the_field('titre_'); ?></h1>
            <div class="row">
                <div id="carousel-example-generic" class="temoignage_slider slide" data-ride="carousel"> -->
                    <!-- Wrapper for slides -->
                    <!-- <div class="carousel-inner temoignage_slider_inner">
                        <div class="item active">
                            <div class="col-sm-6 col-sm-offset-1">
                                <div class="embed-responsive embed-responsive-16by9 col-sm-9">
                                    <iframe class="embed-responsive-item" src="<?php the_field('youtube_1er_etudiant'); ?>"></iframe>
                                </div>
                            </div> --><!-- /col-sm-6 -->
                            <!-- <div class="col-sm-5 temoignage_back">
                              <div class="temoignage_slider_caption">
                                  <p class="small"><strong><?php the_field('nom_1er_etudiant'); ?></strong></p>
                                  <p><?php the_field('niveau_etude_1er_etudiant'); ?><br /><?php the_field('paragraphe_1er_etudiant'); ?></p>
                              </div> --><!-- /temoignage_slider_caption -->
                            <!-- </div> --><!-- /col-sm-5 -->
                        <!-- </div>
                        <div class="item">
                            <div class="col-sm-6 col-sm-offset-1">
                                <div class="embed-responsive embed-responsive-16by9 col-sm-9">
                                    <iframe class="embed-responsive-item" src="<?php the_field('youtube_2eme_etudiant'); ?>"></iframe>
                                </div>
                            </div> --><!-- /col-sm-6 -->
                            <!-- <div class="col-sm-5 temoignage_back">
                                <div class="temoignage_slider_caption">
                                    <p class="small"><strong><?php the_field('nom_2eme_etudiant'); ?></strong></p>
                                    <p><?php the_field('niveau_etude_2eme_etudiant'); ?><br /><?php the_field('paragraphe_2eme_etudiant'); ?></p>
                                </div> --><!-- /temoignage_slider_caption -->
                            <!-- </div> --><!-- /col-sm-5 -->
                        <!-- </div>
                        <div class="item">
                            <div class="col-sm-6 col-sm-offset-1">
                                <div class="embed-responsive embed-responsive-16by9 col-sm-9">
                                    <iframe class="embed-responsive-item" src="<?php the_field('youtube_3eme_etudiant'); ?>"></iframe>
                                </div>
                            </div> --><!-- /col-sm-6 -->
                            <!-- <div class="col-sm-5 temoignage_back">
                                <div class="temoignage_slider_caption">
                                    <p class="small"><strong><?php the_field('nom_3eme_etudiant'); ?></strong></p>
                                    <p><?php the_field('niveau_etude_3eme_etudiant'); ?><br /><?php the_field('paragraphe_3eme_etudiant'); ?></p>
                                </div> --><!-- /temoignage_slider_caption -->
                            <!-- </div> --><!-- /col-sm-5 -->
                        <!-- </div>
                    </div>
                    <div class="controllers col-sm-6 col-xs-12"> -->
                        <!-- Controls -->
                       <!--  <a class="left temoignage_slider-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right temoignage_slider-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div> --><!-- /col-sm-6 -->
                    <!-- <div class="controllers col-sm-6 col-xs-12"> -->
                        <!-- Indicators -->
                        <!-- <ol class="temoignage_slider-indicators">
                            <li data-target="#temoignage_slider-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#temoignage_slider-example-generic" data-slide-to="1"></li>
                            <li data-target="#temoignage_slider-example-generic" data-slide-to="2"></li>
                        </ol>
                    </div> --><!-- /temoignage_slider_caption -->
               <!--  </div> --><!-- /temoignage_slider -->
            <!-- </div> --><!-- /row -->
        <!-- </div> --><!-- /container -->
   <!--  </section> --><!-- /temoignages -->

    <!--
    Section présentant les chiffres de l'école
     -->
    <section class="statistiques img_prez img_prez_aplat">
        <img class="hidden-xs hidden-sm back_img" src="<?php bloginfo('template_directory'); ?>/img/images/galien_chiffre.jpg" alt="galien en chiffres">
        <div class="container">
                <div class="row">
                    <h1 class="x-large text_shadow"><?php the_field('titre_chiffre'); ?></h1>
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter"><?php the_field('1er_chiffre'); ?></strong><span>%</span>
                            <p><?php the_field('paragraphe_1er_chiffre'); ?></p>
                        </div><!-- /cercle-4 -->
                    </div><!-- /col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter"><?php the_field('2eme_chiffre'); ?></strong><span>%</span>
                            <p><?php the_field('paragraphe_2eme_chiffre'); ?></p>
                        </div><!-- /cercle-4 --><!-- /cercle-4 -->
                    </div><!-- /col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter"><?php the_field('3eme_chiffre'); ?></strong>
                            <p><?php the_field('paragraphe_3eme_chiffre'); ?></p>
                        </div><!-- /cercle-4 -->
                    </div><!-- /col-sm-4 -->
                </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /statistiques -->

    <!--
    Section présentant les formuless de l'école
    -->
    <section class="formules">
        <div class="container">
            <div class="row">
                <h1 class="large"><?php the_field('titre_formules'); ?></h1>
                <div class="col-sm-6 formules_container">
                    <div>
                        <h2 class="medium"><?php the_field('titre_1ere_formule'); ?></h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                        <p class="presentation-pack"><?php the_field('1ere_formule_description'); ?></p>
                        <p class="tarif"><?php the_field('1ere_formule_prix'); ?></p>
                        <div class="info">
                            <p class="button active"><em>En savoir <span>+</span></em></p>
                            <div class="info_sup">
                                <p><?php the_field('1ere_formule_savoir_+_1er_paragraphe'); ?></p>
                                <p><?php the_field('1ere_formule_savoir_+_2eme_paragraphe'); ?></p>
                                <p><?php the_field('1ere_formule_savoir_+_3eme_paragraphe'); ?></p>
                            </div><!-- /info_sup -->
                        </div><!-- /info -->
                      <a href="/galien_crpe/contact/brochure" class="btn btn-primary">Inscrivez-vous</a>
                    </div>
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6 formules_container">
                    <div>
                        <h2 class="medium"><?php the_field('titre_2eme_formule'); ?></h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/DSC_0191-2.jpg" alt="">
                        <p class="presentation-pack"><?php the_field('2eme_formule_description'); ?></p>
                        <p class="tarif"><?php the_field('2eme_formule_prix'); ?></p>
                        <div class="info">
                            <p class="button active"><em>En savoir <span>+</span></em></p>
                            <div class="info_sup">
                                <p><?php the_field('2eme_formule_savoir_+_1er_paragraphe'); ?></p>
                                <p><?php the_field('2eme_formule_savoir_+_2eme_paragraphe'); ?></p>
                                <p><?php the_field('2eme_formule_savoir_+_3eme_paragraphe'); ?></p>
                                <p><?php the_field('2eme_formule_savoir_+_4eme_paragraphe'); ?></p>
                            </div><!-- /info_sup -->
                        </div><!-- /info -->
                        <!--<button class="btn btn-primary" data-toggle="modal" data-target="#form">Inscrivez-vous</button>-->
                        <a href="/galien_crpe/contact/brochure" class="btn btn-primary">Inscrivez-vous</a>
                    </div>
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /formules -->

    <?php endwhile;else : ?>
        <p>desolé pas de centres pour l'instant...</p>
    <?php endif; ?>

</div><!-- /container_accueil -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>