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
    <?php
        $dataJPO=false;
        $datJpo="";
            // on recherche l'id du centre dans thalamus
                $name = "Galien " . $post->post_title;
                foreach ($_SESSION['centre'] as $centre)
                {
                    $name = 'Galien ' . $post->post_title;
                    if ($name == $centre['name'])
                    {
                        $idcentre = $centre['id'];
                    }
                }
                $client = $_SESSION['client'];
                // date enregistrer dans wp
                $wpdate = get_field('date_jpo');
                if (get_field('mise_en_ligne_jpo') == '1' && !empty($wpdate))
                {
                    $jpo = $client->call(array("service" => "communication", "method" => "centerInformationMeetingsList", "centerId" => $idcentre));
                    if (!empty($jpo->datas))
                    {
                        foreach ($jpo->datas as $UneJPo)
                        {
                            $dat = explode("/", $UneJPo->startDate);
                            if ($dat[2] . $dat[1] . $dat[0] == $wpdate)
                            {
                                $dataJPO = $UneJPo;
                                $datJpo=$dataJPO->startDate;
                            }
                        }
                    }
                }
                ?>
    
    <!--
    Affiche une image de présentation pour la page
     --> 
    <div class="img_prez img_prez_aplat img_prez_incurve">
        <div class="container">
            <img class="hidden-xs hidden-sm back_img_centre" src="<?php echo $post_thumbnail_url; ?>" alt="">
            <h1 class="x-large text_shadow"><?php the_field('nom_du_centre');?></h1>
            <h2 class="medium text_shadow">Cours Galien</h2>
            <?php   if($dataJPO!=FALSE): ?>
                <div class="min_jpo_container">
                    <div class="min_jpo">
                        <div class="col-sm-6 min_jpo_date">
                                <?php   if ($datJpo!=""): ?>
                                <?php
                                   $mois = array(1=>'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
                                   $dat=explode("/",$datJpo);
                                   echo '<strong>'.intval($dat[0]).' </strong><span>'.$mois[intval($dat[1])].'</span>';
                                ?>
                            <?php endif ?>
                        </div><!-- /col-sm-6 -->
                        <div class="col-sm-6 min_jpo_contact">
                            <a href="http://localhost/galien_crpe/contact/contact/">Contact</a>
                        </div><!-- /col-sm-6 -->
                        <div>
                            <h3 class="small"><strong><?php  echo $dataJPO->title ?></strong></h3>
                            <p class="text-justify"><?php echo $dataJPO->description;?></p>
                            <a class="btn btn-primary" href="#liste_jpo">Lire la suite</a>
                        </div>
                    </div><!-- /min_jpo -->
                </div><!-- /min_jpo_container -->
            <?php endif ?>
        </div><!-- /container -->
    </div><!-- /img_prez -->
    
    <!--
    Affichage de la google map
     -->
    <section class="map">
        <div class="container">
            <h1 class="x-large">Découvrir le centre</h1>
            <h2 class="medium">Cours Galien <?php the_field('nom_du_centre');?>, lieu d'étude, d'échanges et de vie</h2>
            <div class="hidden-xs row">
                <div class="col-sm-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/centre_1.jpg" alt="">
                </div><!-- /col-sm-4 -->
                <div class="col-sm-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/centre_2.jpg" alt="">
                </div><!-- /col-sm-4 -->
                <div class="col-sm-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/centre_3.jpg" alt="">
                </div><!-- /col-sm-4 -->
            </div><!-- /row -->
            <?php
        
            $location = get_field('localisation');
        
            if( !empty($location) ):
            ?>
                <div class="acf-map">
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                </div><!-- /acf-map -->
            <?php endif; ?>
        </div><!-- /container -->
    </section><!-- /map -->

    <!--
    Section présentant le lieu et ses valeurs
     -->
    <section class="descriptif">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 descriptif_detail">
                    <h1 class="large">Cours Galien <?php the_field('nom_du_centre');?></h1>
                    <p><?php the_field('nom_du_centre');?></p>
                    <h2 class="medium">Equipements</h2>
                    <ul>
                        <li>8 salles de cours lumineuses et climatisées, 3 salles d’étude</li>
                        <li>Accès à nos locaux entièrement sécurisés pour permettre à chacun de travailler en toute sérénité.</li>
                        <li>2 salles de détente équipées : micro-ondes, réfrigérateurs,  distributeurs de boissons, en-cas et sandwichs</li>
                        <li>Bibliothèque et fonds documentaire</li>
                        <li>Accès wifi</li>
                    </ul>
                    <h2 class="medium">Infos pratiques</h2>
                    <ul>
                        <li>Situé à moins d’un quart à pied de l’Université Bordeaux II Ségalen  et à 10 min en Tram du centre-ville.</li>
                        <li>Accessible par  le Tram A (Arrêt Gavinies) et la Liane 9 (Arrêt Chaban Delmas).</li>
                        <li>Ouvert de 8h à 22h30 tous les jours  pour vous permettre de réviser seuls ou à plusieurs.</li>
                    </ul>
                </div><!-- /col-sm-8 -->
                <div class="col-sm-4 encart_contact">
                    <h2 class="medium">Contactez-nous !</h2>
                    <p>8h30 - 12h30 et 14h00 à 18h30, du lundi au jeudi 8h30 - 12h30 et 13h30 - 18h00 le vendredi ______</p>
                    <p>Sollicitez votre rendez-vous individuel par mail à bordeaux@cours-galien.fr ou par téléphone au : </p>
                    <h3 class="small"><strong>05 56 48 30 00</strong></h3>
                    <strong>Notre adresse :</strong>
                    <p>Cours Galien Bordeaux<br />190 rue Lecocq<br />33000 Bordeaux</p>
                    <a class="btn btn-primary" href="#"><!-- Faire un lien vers le formulaire brochure avec le centre préselectionné -->Demande d'infos</a>
                </div><!-- /col-sm-4 -->
            </div><!-- /col-sm-8 -->
            <hr><!-- /separation -->
         </div><!-- /container -->
    </section><!-- /descriptif -->

    <!--
    Section journée portes ouverts
     -->
    <?php   if($dataJPO==true || get_field('nom_de_levenement')!=null): ?>
        <section id="liste_jpo" class="jpo">
            <div class="container ">
                <h2 class="large">L'agenda du Cours Galien</h2>
                <div class="row">

                    <!--/*** si il existe une JPO */-->

                    <?php  if($dataJPO==true): ?>

                        <div class="col-sm-12 big_jpo">
                            <div class="col-sm-3 big_jpo_date">
                                <?php
                                  echo '<strong>'.intval($dat[0]).' </strong><br /><span>'.$mois[intval($dat[1])].'</span>';
                                ?>
                            </div><!-- /col-sm-3 -->
                            <div class="col-sm-9">
                                <h3 class="medium"><strong><?php echo $dataJPO->title; ?> </strong>
                                </h3>
                                <p class="text-justify"><?php echo $dataJPO->description;?></p>
                                <a class="btn btn-primary" href="http://localhost/galien_crpe/?p=180&centre=<?php the_field('adresse_-_ville')?>&jpoDate=<?php the_field('date_de_la_jpo')?>" >Inscription</a>      
                            </div><!-- /col-sm-9 -->
                        </div><!-- /col-sm-12 -->
                    <?php endif ?>
                    <!-- si il existe un evenement -->
                    <?php $dateven=get_field('date_de_levenement'); ?>
                    <?php  if ($dateven!=""): ?>
                        <div class="col-sm-12 big_jpo">
                            <div class="col-sm-3  big_jpo_date">
                                <?php
                                    $date = new DateTime($dateven);
                                    $mois = array(1=>'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
                                    echo '<strong>'.$date->format('j').' </strong><br /><span> '.$mois[intval($date->format('n'))].'</span>';
                                ?>
                                
                            </div><!-- /col-sm-4 -->
                            <div class="col-sm-9">
                                <h3 class="medium"><strong><?php  the_field('nom_de_levenement'); ?> </strong>
                                <p class="text-justify"><?php the_field('presentation_de_levenement');?></p>
                            </div><!-- /col-sm-8 -->
                        </div><!-- /col-sm-12 -->
                    <?php endif ?>
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /jpo -->
    <?php endif ?>    

    <?php endwhile;else :?>
            <p>desolé pas de centres pour l'instant...</p>
    <?php endif; ?>

</div><!-- /container_centre -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>