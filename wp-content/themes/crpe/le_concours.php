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
    <div class="img_prez img_prez_aplat img_prez_incurve">
        <img src="<?php echo $post_thumbnail_url; ?>">
    </div>

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <h1 class="h1_tall">Le concours</h1>
            <p>En 2015, 11 960 postes d’enseignants du primaire sont à pourvoir au CRPE (Concours de Recrutement de Professeurs des Ecoles) dont 11 281 postes au concours externe.Vous êtes inscrit en première année d’études en vue de l’obtention d’un master (M1) ou vous êtes titulaire d’un master (M2) reconnu par le ministère de l’éducation et vous souhaitez enseigner à l’école primaire … C’est donc le moment de préparer avec sérieux et rigueur le Concours de Recrutement de Professeurs des Ecoles.</p>
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les perspective emploi
    -->  
    <section class="perspective">
        <div class="container">
            <div class="row">
                <h1 class="h1_medium">De nombreuses perspectives</h1>
                <div class="col-sm-6">
                    <div>
                        <h2 class="h2_medium">Dans le public</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                        <h3>11 960 postes</h3>
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
                        <h2 class="h2_medium">Dans le privée</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/DSC_0191-2.jpg" alt="">
                        <h3>1658 postes</h3>
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

    <!--
    Section présentant les conditions d'examen
     -->
    <section class="condition_exam">
        <div class="container">
            <h1 class="h1_medium">Les conditions d'examen</h1>
            <p>Condition de titre ou de diplôme à la date de publication des résultats d'admissibilité L'une de ses 3 conditions remplie permet de se présenter au concours externe : une inscription en M1 en vue de l'obtention d'un master ou d'un titre ou diplôme reconnu équivalent par le ministre chargé de l'éducation, un M2 ou d'un titre ou diplôme reconnu équivalent par le ministre chargé de l'éducation (titre ou diplôme classé au </p>
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="h2_medium">Epreuve d'admissibilité</h2>
                    <p>3 parties - 4 heures d’épreuves</p>
                    <div class="col-sm-6">
                        <div class=" cercle-3">
                            <p><span>40 points</span></p>
                        </div>
                        <p><strong>Français</strong><br />
                        préparation aux 3 épreuves<br />
                        - 11 points -</p>
                        <p>connaissance de la langue<br />
                        - 11 points -</p>
                        <p>analyse d'un dossier<br />
                        - 13 points -</p>
                    </div><!-- /col-sm-3 -->
                    <div class="col-sm-6">
                        <div class="cercle-3">
                            <p><span>40 points</span></p>
                        </div>
                        <p><strong>Mathématique</strong><br />
                        problème sur programme<br />
                        - 13 points -</p>
                        <p>exercices<br />
                        - 13 points -</p>
                        <p>analyse d'un dossier<br />
                        - 14 points -</p>
                    </div><!-- /col-sm-3 -->
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6">
                    <h2 class="h2_medium">Epreuve d'admission</h2>
                    <p>2 parties - 3 heures d’épreuves</p>
                    <div class="col-sm-6">
                        <div class=" cercle-3">
                            <p><span>60 points</span></p>
                        </div>
                        <p><strong>Mise en situation professionnelle</strong><br />
                        présentation du dossier<br />
                        - 20 points -</p>
                        <p>entretien avec un jury<br />
                        - 40 points -</p>
                    </div><!-- /col-sm-3 -->
                    <div class="col-sm-6">
                        <div class="cercle-3">
                            <p><span>100 points</span></p>
                        </div>
                        <p><strong>Entretien à partir d'un dossier</strong><br />
                        activité sportive, artistique<br />
                        - 40 points -</p>
                        <p>situation professionnelle<br />
                        - 60 points -</p>
                    </div><!-- /col-sm-3 -->
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

</div><!-- /container_concours -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>