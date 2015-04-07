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
            <h1 class="x-large">Preparez le concours de recrutement de professeur des écoles</h1>
            <h2 class="medium">Rejoindre le Cours Galien, c’est la garantie d’une préparation sérieuse et adaptée, vous permettant d’aborder en toute confiance le Concours de Recrutement de Professeur des Ecoles.</h2>
        </div><!-- /container -->
    </section><!-- /accroche -->

    <!--
    Section présentant les valeurs de l'école
     -->
    <section class="valeurs img_prez img_prez_aplat">
        <img class="hidden-xs back_img" src="<?php bloginfo('template_directory'); ?>/img/images/index_back_1.jpg" alt="">
        <div class="container">
            <div class="row">
                <h1 class="x-large text_shadow">Adoptez l'esprit Galien !</h1>
                <div class="col-sm-3">
                    <div class="cercle-3">
                        <h2 class="small"><strong>Partage</strong></h2>
                        <p>Nos professeurs spécialistes partagent leurs connaissances et vous donnent leurs astuces pour réussir le jour J.</p>
                    </div><!-- /cercle-3 -->
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3">
                    <div class="cercle-3">
                        <h2 class="small"><strong>Progression</strong></h2>
                        <p>Elle repose sur trois étapes essentielles qui mènent vers le succès : entraînement, méthode et encadrement.</p>
                    </div><!-- /cercle-3 -->
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3">
                    <div class="cercle-3">
                        <h2 class="small"><strong>Cohésion</strong></h2>
                        <p>Il ne peut y avoir de partage sans cohésion. Toutes nos équipes sont focalisées sur un seul objectif : votre réussite.</p>
                    </div><!-- /cercle-3 -->
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3">
                    <div class="cercle-3">
                        <h2 class="small"><strong>Réussite</strong></h2>
                        <p>Ultime étape des efforts fournis et pour laquelle nous vous accompagnons chaque jour grâce à une stratégie de concours précise.</p>
                    </div><!-- /cercle-3 -->
                </div><!-- /col-sm-3 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section> 

    <!--
    Section présentant les témoignages sous slider
     -->
    <section class="temoignages">
        <div class="container">
            <h1 class="large">Ils ont choisi Galien</h1>
            <div class="row">
                <div id="carousel-example-generic" class="temoignage_slider slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner temoignage_slider_inner">
                        <div class="item active">
                            <div class="col-sm-6 col-sm-offset-1">
                                <div class="embed-responsive embed-responsive-16by9 col-sm-9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rk93EIqVd8g"></iframe>
                                </div>
                            </div><!-- /col-sm-6 -->
                            <div class="col-sm-5 temoignage_back">
                              <div class="temoignage_slider_caption">
                                  <p class="small"><strong>Antoine</strong></p>
                                  <p>1ere année medecine</p>
                                  <p>Ma marraine me soutient constamment tout au long de mon année et aujourd’hui mes résultats sont probants. Je me sens en confiance, et je garderai un bon souvenir dans ma Prépa.</p>
                              </div><!-- /temoignage_slider_caption -->
                            </div><!-- /col-sm-5 -->
                        </div>
                        <div class="item">
                            <div class="col-sm-6 col-sm-offset-1">
                                <div class="embed-responsive embed-responsive-16by9 col-sm-9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-fmpxlpgQyM"></iframe>
                                </div>
                            </div><!-- /col-sm-6 -->
                            <div class="col-sm-5 temoignage_back">
                                <div class="temoignage_slider_caption">
                                    <p class="small"><strong>Antoine</strong></p>
                                    <p>1ere année medecine</p>
                                    <p>Ma marraine me soutient constamment tout au long de mon année et aujourd’hui mes résultats sont probants. Je me sens en confiance, et je garderai un bon souvenir dans ma Prépa.</p>
                                </div><!-- /temoignage_slider_caption -->
                            </div><!-- /col-sm-5 -->
                        </div>
                        <div class="item">
                            <div class="col-sm-6 col-sm-offset-1">
                                <div class="embed-responsive embed-responsive-16by9 col-sm-9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2cKztlWH_wE"></iframe>
                                </div>
                            </div><!-- /col-sm-6 -->
                            <div class="col-sm-5 temoignage_back">
                                <div class="temoignage_slider_caption">
                                    <p class="small"><strong>Antoine</strong></p>
                                    <p>1ere année medecine</p>
                                    <p>Ma marraine me soutient constamment tout au long de mon année et aujourd’hui mes résultats sont probants. Je me sens en confiance, et je garderai un bon souvenir dans ma Prépa.</p>
                                </div><!-- /temoignage_slider_caption -->
                            </div><!-- /col-sm-5 -->
                        </div>
                    </div>
                    <div class="controllers col-sm-6 col-xs-12">
                        <!-- Controls -->
                        <a class="left temoignage_slider-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right temoignage_slider-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div><!-- /col-sm-6 -->
                    <div class="controllers col-sm-6 col-xs-12">
                        <!-- Indicators -->
                        <ol class="temoignage_slider-indicators">
                            <li data-target="#temoignage_slider-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#temoignage_slider-example-generic" data-slide-to="1"></li>
                            <li data-target="#temoignage_slider-example-generic" data-slide-to="2"></li>
                        </ol>
                    </div><!-- /temoignage_slider_caption -->
                </div><!-- /temoignage_slider -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /temoignages -->

    <!--
    Section présentant les chiffres de l'école
     --> 
    <section class="statistiques img_prez img_prez_aplat">
        <img class="hidden-xs back_img" src="<?php bloginfo('template_directory'); ?>/img/images/296_MG_9554.jpg" alt="">
        <div class="container">
                <div class="row">
                    <h1 class="x-large text_shadow">Galien en chiffres !</h1>
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter">98</strong><span>%</span>
                            <p>d'étudiants satisfaits de nos formations</p>
                        </div><!-- /cercle-4 -->
                    </div><!-- /col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter">66</strong><span>%</span>
                            <p>de taux de réussite au concours</p>
                        </div><!-- /cercle-4 --><!-- /cercle-4 -->
                    </div><!-- /col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter">900</strong>
                            <p>étudiants préparés à ce concours</p>
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
                <h1 class="large">Decouvrez nos formules</h1>
                <div class="col-sm-6 formules_container">
                    <div>
                        <h2 class="medium">Pack entrainement</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                        <p>4 concours blancs</p>
                        <p><strong>Epreuve</strong><br />en conditions réelles</p>
                        <p>000H/400€</p>
                        <div class="info">
                            <p class="button active"><em>En savoir <span>+</span></em></p>
                            <div class="info_sup">
                                <p>Voila des infos supplémentaires</p>
                            </div><!-- /info_sup -->
                        </div><!-- /info -->
                        <button class="btn btn-primary center-block" data-toggle="modal" data-target="#signin_form">Inscrivez-vous</button>
                    </div>
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6 formules_container">
                    <div>
                        <h2 class="medium">Pack complet</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/DSC_0191-2.jpg" alt="">
                        <p>Préparation aux épreuves</p>
                        <p>4 concours blancs</p>
                        <p><strong>Modules de remise à niveau inclus</strong></p>
                        <p>272H/1950€</p>
                        <div class="info">
                            <p class="button active"><em>En savoir <span>+</span></em></p>
                            <div class="info_sup">
                                <p>Voila des infos supplémentaires</p>
                            </div><!-- /info_sup -->
                        </div><!-- /info -->
                        <button class="btn btn-primary center-block" data-toggle="modal" data-target="#form">Inscrivez-vous</button>
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