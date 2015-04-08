<?php
/*
 * Template Name: le concours
 */
?>

<!--
Récuperation du header
 -->
<?php get_header(); ?>

<div id="container_concours" class="top_content">

    <?php
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
    ?>

    <!--
    Affiche une image de présentation pour la page
     --> 
    <div class="hidden-xs hidden-sm img_prez img_prez_aplat img_prez_incurve">
        <img class="back_img" src="<?php echo $post_thumbnail_url; ?>" alt="">
    </div><!-- /img_prez -->

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <h1 class="x-large">Le concours</h1>
            <p class="medium">En 2015, 11 960 postes d’enseignants du primaire sont à pourvoir au CRPE (Concours de Recrutement de Professeurs des Ecoles) dont 11 281 postes au concours externe.Vous êtes inscrit en première année d’études en vue de l’obtention d’un master (M1) ou vous êtes titulaire d’un master (M2) reconnu par le ministère de l’éducation et vous souhaitez enseigner à l’école primaire … C’est donc le moment de préparer avec sérieux et rigueur le Concours de Recrutement de Professeurs des Ecoles.</p>
        </div>
    </section><!-- /accroche -->

    <!--
    Section présentant les reperes concours
     -->
    <section class="reperes">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/fotolia_51467210.jpg" alt="">
                    <h2 class="small"><strong>Condition d'accés</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita asperiores sunt voluptatum, aspernatur labore modi voluptates dignissimos dolores nisi, eum cumque ea a, amet perspiciatis, aut saepe eos cupiditate. Consectetur!</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/130783-fotolia-56047028-s-_x450.jpg" alt="">
                    <h2 class="small"><strong>Date</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id officiis nemo eum mollitia a illo harum, incidunt ipsum, quis libero provident consectetur enim et, repudiandae ullam unde vero autem qui.</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/fotolia_54990513.jpg" alt="">
                    <h2 class="small"><strong>Perspective</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quos laboriosam iure numquam, veniam fugit asperiores explicabo, eius tempore, itaque illum impedit! Suscipit numquam recusandae, labore ea quisquam quaerat reprehenderit!</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/fotolia_44583729.jpg" alt="">
                    <h2 class="small"><strong>Lien externes</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur perspiciatis alias praesentium doloribus necessitatibus, officiis tenetur at minima nulla labore rerum, soluta ex. Minima nihil id ipsum consequuntur, illo, libero.</p>
                </div><!-- /col-sm-3 -->
            </div><!-- /row -->
            <hr><!-- /separation -->
        </div><!-- /container -->
    </section><!-- /reperes -->

    <!--
    Section présentant les conditions d'examen
     -->
    <section class="condition_exam">
        <div class="container">
            <h1 class="large">Les modalités d'examen</h1>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="contenu_exam">
                        <div class="coeff_exam">
                            40 points/80
                        </div>
                        <h2 class="small">Français</h2>
                        <strong class="medium">3 épreuves</strong>
                        <p>réponse à une question</p>
                        <span class="x-small"><strong>11 points</strong></span>
                        <p>connaissance de la langue</p>
                        <span class="x-small"><strong>11 points</strong></span>
                        <p>analyse d'un dossier</p>
                        <span class="x-small"><strong>13 points</strong></span>
                    </div><!-- /contenu_exam -->
                </div><!-- /col-sm-3 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="contenu_exam">
                        <div class="coeff_exam">
                            40 points/80
                        </div>
                        <h2 class="small">Mathématique</h2>
                        <strong class="medium">3 épreuves</strong>
                        <p>problème sur programme</p>
                        <span class="x-small"><strong>13 points</strong></span>
                        <p>exercices</p>
                        <span class="x-small"><strong>13 points</strong></span>
                        <p>analyse d'un dossier</p>
                        <span class="x-small"><strong>14 points</strong></span>
                    </div><!-- /contenu_exam -->
                </div><!-- /col-sm-3 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="contenu_exam">
                        <div class="coeff_exam">
                            60 points/160
                        </div>
                        <h2 class="small">Situation professionnelle</h2>
                        <strong class="medium">3 épreuves</strong>
                        <p>présentation du dossier</p>
                        <span class="x-small"><strong>40 points</strong></span>
                        <p>entretien avec le jury</p>
                        <span class="x-small"><strong>20 points</strong></span>
                    </div><!-- /contenu_exam -->
                </div><!-- /col-sm-3 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="contenu_exam">
                        <div class="coeff_exam">
                            100 points/160
                        </div>
                        <h2 class="small">Entretien à partir d'un dossier</h2>
                        <strong class="medium">3 épreuves</strong>
                        <p>activité sportive, artistique</p>
                        <span class="x-small"><strong>40 points</strong></span>
                        <p>situation professionnelle</p>
                        <span class="x-small"><strong>60 points</strong></span>
                    </div><!-- /contenu_exam -->
                </div><!-- /col-sm-3 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /condition_exam -->

</div><!-- /container_concours -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>