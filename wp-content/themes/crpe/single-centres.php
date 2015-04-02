<!--
Récuperation du header
 -->
<?php get_header(); ?>

<div id="container_centre" class="top_content">

    <?php
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
    ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!--
    Affiche une image de présentation pour la page
     --> 
    <div class="img_prez img_prez_aplat img_prez_incurve">
        <div class="container">
            <!-- <img src="<?php echo $post_thumbnail_url; ?>"> -->
            <img class="back_img" src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
            <h1 class="h1_tall"><?php the_field('adresse_-_ville');?></h1>
            <h2 class="h2_medium">Prépa concours bordeaux</h2>
        </div><!-- /container -->
    </div>
    
    <!--
    Affichage de la google map
     -->
    <section class="map">
        <div class="container">
            <h1>Découvrir le centre</h1>
            <h2>Cours Galien <?php the_field('adresse_-_ville');?>, lieu d'études, d'échanges et de vie</h2>
            <?php

            $location = get_field('localisation');

            if( !empty($location) ):
            ?>
                <div class="acf-map">
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!--
    Section présentant le lieu et ses valeurs
     -->
    <section class="descriptif">
        <div class="container">
            <div class="col-sm-8">
                <h1 class="h1_medium">Cours Galien <?php the_field('adresse_-_ville');?></h1>
                <p>Nos enseignants sont tous des spécialistes de leur discipline et ont l’expérience, pour la plupart, des jurys de concours ou d’examens auxquels ils préparent. Ils sont à la disposition des étudiants pour leur prodiguer des conseils méthodologiques et les aider à organiser leur travail. Des supports de cours et de révisions, actualisés chaque année, sont mis à disposition des étudiants pour faciliter leur travail personnel.</p>
                <h2 class="h2_medium">Equipements</h2>
                <ul>
                    <li>8 salles de cours lumineuses et climatisées, 3 salles d’étude</li>
                    <li>Accès à nos locaux entièrement sécurisés pour permettre à chacun de travailler en toute sérénité.</li>
                    <li>2 salles de détente équipées : micro-ondes, réfrigérateurs,  distributeurs de boissons, en-cas et sandwichs</li>
                    <li>Bibliothèque et fonds documentaire</li>
                    <li>Accès wifi</li>
                </ul>
                <h2 class="h2_medium">Infos pratiques</h2>
                <ul>
                    <li>Situé à moins d’un quart à pied de l’Université Bordeaux II Ségalen  et à 10 min en Tram du centre-ville.</li>
                    <li>Accessible par  le Tram A (Arrêt Gavinies) et la Liane 9 (Arrêt Chaban Delmas).</li>
                    <li>Ouvert de 8h à 22h30 tous les jours  pour vous permettre de réviser seuls ou à plusieurs.</li>
                </ul>
            </div><!-- /col-sm-8 -->
            <div class="col-sm-4 encart_contact">
                <h3 class="h3_tall">Contactez-nous !</h3>
                <p>8h30 - 12h30 et 14h00 à 18h30, du lundi au jeudi 8h30 - 12h30 et 13h30 - 18h00 le vendredi ______</p>
                <p>Sollicitez votre rendez-vous individuel par mail à bordeaux@cours-galien.fr ou par téléphone au : </p>
                <p><strong>05 56 48 30 00</strong></p>
                <p><strong>Notre adresse :</strong></p>
                <p>Cours Galien Bordeaux</p>
                <p>190 rue Lecocq  </p>
                <p>33000 Bordeaux</p>
                <a class="button" href="#"><!-- Faire un lien vers le formulaire brochure avec le centre préselectionné -->Demande d'infos</a>
            </div><!-- /col-sm-4 -->
         </div><!-- /container -->
    </section>

    <!--
    Section journée portes ouverts
     -->
    <?php   if(get_fields('nom_de_la_jpo')!=null || get_field('nom_de_levenement')!=null): ?>
        <section class="jpo">
            <div class="container ">
                <div class="row">
                    <h2 class="h2_tall">L'agenda de Prépa concours <?php the_field('adresse_-_ville');?></h2>
                    <!--/*** si il existe une JPO */-->
                    <?php $datJpo=get_field('date_de_la_jpo'); ?>
                    <?php  if ($datJpo!=""): ?>
                        <div class="col-sm-4">
                            <?php
                                $date = new DateTime($datJpo);
                                echo $date->format('d/m/Y');
                            ?>
                        </div>
                        <div class="col-sm-8">
                            <h3 class="h3_tall"><strong>journée portes ouverte </strong>
                                <strong class="centre_texte_red">
                                    <?php
                                        $date = new DateTime($datJpo);
                                        echo $date->format('d/m/Y');
                                    ?>
                                </strong>
                            </h3>
                            <h4 class="h4_tall"><strong><?php the_field('nom_de_la_jpo');?></strong></h4>
                            <p class="text-justify"><?php the_field('presentation_de_la_jpo');?></p>
                            <a href="http://localhost/galien_crpe/?p=180&centre=<?php the_field('adresse_-_ville')?>&jpoDate=<?php the_field('date_de_la_jpo')?>" >Inscription</a>      
                        </div>
                    <?php endif ?>
                    <!-- si il existe un evenement -->
                    <?php $dateven=get_field('date_de_levenement'); ?>
                    <?php  if ($dateven!=""): ?>
                        <div class="col-sm-4">
                            <?php
                                $date = new DateTime($dateven);
                                echo $date->format('d/m/Y');
                            ?>
                        </div>
                        <div class="col-sm-8">
                            <h3 class="h3_tall">
                                <strong class="centre_texte_red">
                                    <?php
                                        $date = new DateTime($dateven);
                                        echo $date->format('d/m/Y');
                                    ?>
                                </strong>
                            </h3>
                            <h4 class="h4_tall"><strong><?php the_field('nom_de_levenement');?></strong></h4>
                            <p class="text-justify"><?php the_field('presentation_de_levenement');?></p>
                        </div>
                    <?php endif ?>
                </div><!-- /row -->
            </div><!-- /container -->
        </section>
    <?php endif ?>    

    <?php endwhile;else :?>
            <p>desolé pas de centres pour l'instant...</p>
    <?php endif; ?>

</div><!-- /container-centre -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>