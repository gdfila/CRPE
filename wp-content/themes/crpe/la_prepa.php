<?php
/*
 * Template Name: le crpe
 */
?>

<!--
Récuperation du header
 -->
<?php get_header(); ?>

<div id="container_prepa" class="top_content">

    <?php
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
    ?>

    <!--
    Affiche une image de présentation pour la page
     --> 
    <div class="img_prez img_prez_aplat img_prez_incurve">
        <img src="<?php echo $post_thumbnail_url; ?>">
    </div>

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <div class="row">
                <h1 class="h1_tall">Adoptez l'esprit Galien !</h1>
                <div class="col-sm-3">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                    <h2 class="h2_small"><strong>Partage</strong></h2>
                    <p>Nos professeurs spécialistes partagent leurs connaissances et vous donnent leurs astuces pour réussir le jour J.</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                    <h2 class="h2_small"><strong>Progression</strong></h2>
                    <p>Elle repose sur trois étapes essentielles qui mènent vers le succès : entraînement, méthode et encadrement.</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                    <h2 class="h2_small"><strong>Cohésion</strong></h2>
                    <p>Il ne peut y avoir de partage sans cohésion. Toutes nos équipes sont focalisées sur un seul objectif : votre réussite.</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                    <h2 class="h2_small"><strong>Réussite</strong></h2>
                    <p>Ultime étape des efforts fournis et pour laquelle nous vous accompagnons chaque jour grâce à une stratégie.</p>
                    </div>
                </div><!-- /col-sm-3 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les témoignages sous slider
     -->
    <section class="temoignages equipe_pedagogique">
        <div class="container">
            <h1 class="h1_medium">Notre équipe pédagogique</h1>
            <div class="row">
                  <div id="carousel-example-generic" class="temoignage_slider slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner temoignage_slider_inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <div class="embed-responsive embed-responsive-16by9 col-sm-9">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="Photo de ...">
                                </div>
                            </div>
                            <div class="col-sm-6 temoignage_back">
                              <div class="temoignage_slider-caption">
                                  <p><strong>Robert</strong></p>
                                  <p>Professeur de mathématique</p>
                                  <p>Ma marraine me soutient constamment tout au long de mon année et aujourd’hui mes résultats sont probants. Je me sens en confiance, et je garderai un bon souvenir dans ma Prépa.</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les préparations
    -->  
    <section class="graduate">
        <div class="container">
            <div class="row">
                <h1 class="h1_medium">Le déroulé des cours</h1>
                <div class="col-sm-6">
                    <div>
                        <h2 class="h2_medium">Préparation aux examens d'admissibilité</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                        <p>1. Postes offerts à la session 2015</p>
                        <div class="info">
                            <p class="button active"><em>En savoir <span>+</span></em></p>
                            <div class="info_sup">
                                <ul>
                                    <li>À la session 2015, 11 960 postes sont offerts</li>
                                    <li>11 281 aux concours externes,</li>
                                    <li>447 au troisième concours,</li>
                                    <li>192 aux seconds concours internes,</li>
                                    <li>40 à l'examen professionnalisé réservé. </li>
                                    <li>De plus, 500 postes sont offerts dans le cadre du recrutement externe supplémentaire pour l'enseignement public, organisé au titre de la session 2015 dans l'académie de Créteil</li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-primary center-block" data-toggle="modal" data-target="#signin_form">Inscrivez-vous</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div>
                        <h2 class="h2_medium">Préparation aux examens d'admission</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/DSC_0191-2.jpg" alt="">
                        <p>1. Postes offerts à la session 2015</p>
                        <div class="info">
                            <p class="button active"><em>En savoir <span>+</span></em></p>
                            <div class="info_sup">
                                <ul>
                                    <li>Pour les concours de l'enseignement privé sous contrat, 1 360 contrats sont offerts :</li>
                                    <li>850 aux concours externes et au troisième concours,</li>
                                    <li>510 à l'examen professionnalisé réservé.</li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-primary center-block" data-toggle="modal" data-target="#form">Inscrivez-vous</button>
                    </div>
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    
<?php get_footer(); ?>
