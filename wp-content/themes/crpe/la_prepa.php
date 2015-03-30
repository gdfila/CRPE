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
            <h1 class="h1_tall">Notre expérience</h1>
            <p>Comme tout changement, le passage du lycée à la fac est souvent compliqué (nouvelles méthodes de travail, échéance très rapide des concours, niveau d’études et de connaissances de plus en plus élevé, sélection de plus en plus sévère, etc.). Et ça, Galien l’a bien compris. C’est pourquoi, depuis près de 30 ans, Galien accompagne les étudiants qui souhaitent réussir leur concours. Galien est aujourd’hui LE spécialiste dans la préparation des concours PACES, paramédicaux et sociaux.</p>
            <h2 class="h2_medium">Un cadre propice</h2>
            <p>Les centres Galien sont situés à proximité de votre fac, très accessibles en transport en commun afin de vous faire gagner du temps dans vos révisions. Les horaires de nos cours sont établis en fonction de ceux de votre fac.</p>
            <h2 class="h2_medium">L'encadrement</h2>
            <p>Chaque responsable de centre Galien, secondé par une équipe administrative et pédagogique, est garant de la qualité pédagogique. Il est là pour vous et vos parents tout au long de l’année. Il vous accompagne et répond à vos questions pour que vous ne soyez jamais seul face à vos difficultés.</p>
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
                                    <img src="../img/images/aModifier.jpg" alt="Photo de ...">
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
    Section présentant les cours
     -->
    <section class="classes">
        <div class="container">
            <h1 class="h1_tall">Le déroulé des cours</h1>
            <p>Le programme est élaboré par les enseignants spécialistes de la discipline. Il est conforme aux épreuves du concours et aux préconisations ministérielles inscrites dans le décret n°2013-768 du 23 août 2013.</p>
            <h2 class="h2_medium">Les horaires</h2>
            <p>Nous vous proposons une préparation intensive de 90 heures en deux temps. Les cours ont lieu le samedi en petits effectifs. Votre formation s’étale donc sur 30 semaines, et comprend au total 240 heures de cours en face à face avec des enseignants, auxquelles s’ajoutent 32 heures de concours blancs. </p>
        </div><!-- /container -->
    </section> 
    

    <!--
    Section présentant les épreuves
     -->
    <section class="admission">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="h2_medium">Préparation aux examens d’Admissibilité</h2>
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.</p>
                    <div class="col-sm-6">
                        <div class=" cercle-3">
                            <p>45h</p>
                        </div>
                        <p><strong>Français</strong><br />
                        préparation aux 3 épreuves</p>
                    </div><!-- /col-sm-3 -->
                    <div class="col-sm-6">
                        <div class="cercle-3">
                            <p>45h</p>
                        </div>
                        <p><strong>Mathématiques</strong><br />
                        préparation aux 3 épreuves</p>
                    </div><!-- /col-sm-3 -->
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6">
                    <h2 class="h2_medium">Préparation aux examens d’Admission</h2>
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.</p>
                    <div class="col-sm-6">
                        <div class="cercle-3 demi_cercle-container">
                            <p>30h</p>
                            <p class="demi_cercle">20h</p>
                        </div>
                        <p><strong>Séquence pédagogique</strong><br />
                        système éducatif<br />
                        didactique / pédagogie</p>
                        <p><strong>Système éducatif français</strong><br />
                        système éducatif<br />
                        didactique / pédagogie</p>
                    </div><!-- /col-sm-3 -->
                    <div class="col-sm-6">
                        <div class="cercle-3 demi_cercle-container">
                            <p>20h</p>
                            <p class="demi_cercle">20h</p>
                        </div>
                        <p><strong>Fondements scientifiques</strong><br />
                        apports scientifiques</p>
                        <p><strong>Education physique</strong><br />
                        pratique de la classe</p>
                    </div><!-- /col-sm-3 -->
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section> 

    <!--
    Section présentant les cours
     -->
    <section class="price">
        <div class="container">
            <h1 class="h1_tall">Tarifs</h1>
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
            <h2 class="h2_medium">Financement</h2>
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div><!-- /container -->
    </section>

</div>
    
<?php get_footer(); ?>
