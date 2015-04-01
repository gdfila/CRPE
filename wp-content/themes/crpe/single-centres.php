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
        <img src="<?php echo $post_thumbnail_url; ?>">
    </div>

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <h1 class="h1_tall"><?php the_field('adresse_-_ville');?></h1>
            <p>Le centre Galien de Bordeaux a ouvert sa première promotion en 2005, suivie 2 ans plus tard par l’EFSO Bordeaux et son BTS Opticien Lunetier. Depuis, ce sont plus de 900 élèves que nous avons accompagnés ou formés. Certains sont aujourd’hui des professionnels de la santé installés en Aquitaine ou dans les régions limitrophes et interviennent ponctuellement auprès des nos étudiants.</p>
        </div><!-- /container -->
    </section>
    
    <!--
    Section journée portes ouverts
     -->
       <?php   if(get_fields('nom_de_la_jpo')!=null || get_field('nom_de_levenement')!=null): ?>
    <section class="jpo">
        <div class="container ">
            <div class="row">
             
               
                    <h2 class="h2_tall">Actualité</h2>

                        <div class="col-sm-4">
                            <h3 class="h3_tall"><strong>jusqu'au </strong><strong class="centre_texte_red">
                                <?php  
                                    $datJpo=get_field('date_de_la_jpo');
                                    $date = new DateTime($datJpo);
                                    echo $date->format('d/m/Y')
                                   ?>
                                </strong></h3>
                            <h4 class="h4_tall"><strong><?php the_field('nom_de_la_jpo');?></strong></h4>
                            <p class="text-justify"><?php the_field('presentation_de_la_jpo');?></p>
                            <!--<a href="http://localhost/galien_crpe/?p=151" >s'inscrire</a>-->
                            <a href="http://localhost/galien_crpe/?p=151&centre=<?php the_field('adresse_-_ville')?>&jpoDate=<?php the_field('date_de_la_jpo')?>" >Inscription</a>
                        </div>

                    <div class="col-sm-4">
                        <h3 class="h3_tall"><strong class="centre_texte_red">
                            <?php  $date=the_field('date_de_la_jpo');
                                        echo $date; ?></strong></h3>
                        <h4 class="h4_tall"><strong><?php the_field('nom_de_la_jpo');?></strong></h4>
                        <p class="text-justify"><?php the_field('presentation_de_la_jpo');?></p>
                        <a href="http://localhost/galien_crpe/?p=151" >s'inscrire</a>
                    </div>
           
               
            </div>
        </div>
    </section>
        <?php endif ?>
    <!--
    Section présentant le lieu et ses valeurs
     -->
    <section class="echange">
        <div class="container">
            <h1>Lieu d'études, d'échanges et de vie</h1>
            <p>Nos enseignants sont tous des spécialistes de leur discipline et ont l’expérience, pour la plupart, des jurys de concours ou d’examens auxquels ils préparent. Ils sont à la disposition des étudiants pour leur prodiguer des conseils méthodologiques et les aider à organiser leur travail. Des supports de cours et de révisions, actualisés chaque année, sont mis à disposition des étudiants pour faciliter leur travail personnel.</p>
         </div>
    </section> 

    <!--
    Section présentant les équipements du centre
     -->
    <section class="equipement">
       <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div>
                        <h3 class="h3_tall underline"><strong>Equipements</strong></h3>
                        <p>8 salles de cours lumineuses et climatisées, 3 salles d’étude</p>
                        <p>Accès à nos locaux entièrement sécurisés pour permettre à chacun de travailler en toute sérénité.</p>
                        <p>2 salles de détente équipées : micro-ondes, réfrigérateurs,  distributeurs de boissons, en-cas et sandwichs</p>
                        <p>Bibliothèque et fonds documentaire</p>
                        <p>Accès wifi</p>
                    </div>
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6">
                    <div>
                        <h3 class="h3_tall underline"><strong>Infos pratiques</strong></h3>
                        <p>Situé à moins d’un quart à pied de l’Université Bordeaux II Ségalen  et à 10 min en Tram du centre-ville.</p>
                        <p>Accessible par  le Tram A (Arrêt Gavinies) et la Liane 9 (Arrêt Chaban Delmas).</p>
                        <p>Ouvert de 8h à 22h30 tous les jours  pour vous permettre de réviser seuls ou à plusieurs.</p>
                    </div>
                </div><!-- /col-sm-6 -->
              </div>
        </div><br><br><br>
    </section>

    <!--
    Affichage de la google map
     -->
    <section class="map">

        <?php

        $location = get_field('localisation');

        if( !empty($location) ):
        ?>
        <div class="acf-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
        <?php endif; ?>

    </section>

<?php endwhile;else :?>
        <p>desolé pas de centres pour l'instant...</p>
<?php endif; ?>

</div><!-- /container-centre -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>