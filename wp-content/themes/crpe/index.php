<!--
Récuperation du header
 -->
<?php get_header(); ?>
    
<!-- ??????????? -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="accueil">
    <!--
    Affiche un slider automatique sur toute la largeur de la page
     -->            
    <div class="container_slider">
        <?php echo do_shortcode('[image-carousel]'); ?>
    </div>

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <h1 class="text-center">Preparez le concours de recrutement de professeur des écoles</h1>
            <p class="text-center">Rejoindre le Cours Galien, c’est la garantie d’une préparation sérieuse et adaptée, vous permettant d’aborder en toute confiance le Concours de Recrutement de Professeur des Ecoles.</p>
        </div><!-- /container -->
    </section>  

    <!--
    Section présentant les valeurs de l'école avec un fond "parallax"
    -> Supprimer la classe "valeur_back"
     -->
    <section class="valeurs valeur_back">
        <div class="container">
                <div class="row">
                    <h1 class="text-center">Adoptez l'esprit Galien !</h1>
                    <div class="col-sm-3">
                        <div class=" cercle-3">
                            <strong>Partage</strong>
                            <p>Nos professeurs spécialistes des matières enseignées partagent leurs connaissances et vous donnent leurs astuces pour réussir le jour J.</p>
                        </div>
                    </div><!-- /col-sm-3 -->
                    <div class="col-sm-3">
                        <div class="cercle-3">
                            <strong>Progression</strong>
                            <p>Elle repose sur trois étapes essentielles qui mènent vers le succès : entraînement, méthode et encadrement.</p>
                        </div>
                    </div><!-- /col-sm-3 -->
                    <div class="col-sm-3">
                        <div class="cercle-3">
                            <strong>Cohésion</strong>
                            <p>Il ne peut y avoir de partage sans cohésion. Toutes nos équipes sont focalisées sur un seul objectif : votre réussite.</p>
                        </div>
                    </div><!-- /col-sm-3 -->
                    <div class="col-sm-3">
                        <div class="cercle-3">
                            <strong>Réussite</strong>
                            <p>Ultime étape des efforts fournis et pour laquelle nous vous accompagnons chaque jour grâce à une stratégie de concours précise.</p>
                        </div>
                    </div><!-- /col-sm-3 -->
                </div><!-- /row -->
        </div><!-- /container -->
    </section> 

    <!--
    Section présentant les témoignages sous slider
     -->
    <section class="temoignages">
        <div class="container">
            <h2 class="text-center">Ils ont choisi Galien</h2>
            <div class="row">
                
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les chiffres de l'école avec un fond "parallax"
    -> Supprimer la classe "stat_back"
     --> 
    <section class="statistiques stat_back">
        <div class="container">
                <div class="row">
                    <h1 class="text-center">Galien en chiffres !</h1>
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter">98</strong><span>%</span>
                            <p>d'étudiants satisfaits de nos formations</p>
                        </div>
                    </div><!-- /col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter">66</strong><span>%</span>
                            <p>de taux de réussite au concours</p>
                        </div>
                    </div><!-- /col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter">900</strong>
                            <p>étudiants préparés à ce concours</p>
                        </div>
                    </div><!-- /col-sm-4 -->
                </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les formuless de l'école
    -->  
    <section class="formules">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Decouvrez nos formules</h2>
                <div class="col-sm-6">
                    <div>
                        <h3 class="text-center">Pack entrainement</h3>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                        <p>4 concours blancs</p>
                        <p><strong>Epreuve</strong></p>
                        <p>en conditions réelles</p>
                        <p>000H/400€</p>
                        <p class="button"><em>En savoir +</em></p>
                        <button class="btn btn-primary center-block">Inscrivez-vous</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div>
                        <h3 class="text-center">Pack complete</h3>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/DSC_0191-2.jpg" alt="">
                        <p>Préparation aux épreuves</p>
                        <p>4 concours blancs</p>
                        <p><strong>Modules de remise à niveau inclus</strong></p>
                        <p>272H/1950€</p>
                        <p class="button"><em>En savoir +</em></p>
                        <button class="btn btn-primary center-block">Inscrivez-vous</button>
                    </div>
                    <p></p>
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <?php endwhile;else : ?>
        <p>desolé pas de centres pour l'instant...</p>
    <?php endif; ?>

    <!--
    Récuperation du footer
     -->
    <?php get_footer(); ?>
</div><!-- /container_accueil -->