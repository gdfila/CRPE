
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
     
    <section class="jpo">
        <div class="container ">
            <div class="row">
                 <?php  // if( the_field('nom_de_la_jpo')!=null || the_field('nom_de_levenement')!=null): ?>
                    <h2 class="h2_tall">Actualité</h2>

                        <div class="col-sm-4">
                            <h3 class="h3_tall"><strong>jusqu'au </strong><strong class="centre_texte_red">
                                <?php  $date=the_field('date_de_la_jpo');
                                            echo $date; ?></strong></h3>
                            <h4 class="h4_tall"><strong><?php the_field('nom_de_la_jpo');?></strong></h4>
                            <p class="text-justify"><?php the_field('presentation_de_la_jpo');?></p>
                            <a href="http://localhost/galien_crpe/?p=151" >s'inscrire</a>

                        </div>

                    <div class="col-sm-4">
                        <h3 class="h3_tall"><strong>jusqu'au </strong><strong class="centre_texte_red"><?php the_field('date_de_levenement');?></strong></h3>
                        <h4 class="h4_tall"><strong><?php the_field('nom_de_levenement');?></strong></h4>
                        <p class="text-justify"><?php the_field('presentation_de_levenement');?></p>
                    
                    </div>
                <?php //endif ?>
            </div>
        </div>
    </section>
   
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
    Section présentant les chiffres de l'école
     --> 
    <section class="statistiques stat_back">
        <div class="container">
                <div class="row">
                    <h1 class="h1_tall">Notre centre en chiffres !</h1>
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter">100</strong><span>%</span>
                            <p>d'intégration en école d'Orthoptiste</p>
                        </div>
                    </div><!-- /col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter">83</strong><span>%</span>
                            <p>reçus aux épreuves d'admissibilité IFSI</p>
                        </div>
                    </div><!-- /col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="cercle-4">
                            <strong class="counter">100</strong>
                            <p>places annuelles</p>
                        </div>
                    </div><!-- /col-sm-4 -->
                </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les témoignages sous slider
     -->
    <section class="temoignages">
        <div class="container">
            <h1 class="h1_medium">Ils ont choisi Galien</h1>
            <div class="row">
                  <div id="carousel-example-generic" class="temoignage_slider slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="col-sm-6">
                          <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rk93EIqVd8g"></iframe>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="temoignage_slider-caption">
                              <h2><a href="#">Antoine<br /></a> 1ere année medecine <br /> </h2><p>Ma marraine me soutient constamment tout au long de mon année et aujourd’hui mes résultats sont probants. Je me sens en confiance, et je garderai un bon souvenir dans ma Prépa.</p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="col-sm-6">
                          <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-fmpxlpgQyM"></iframe>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="temoignage_slider-caption">
                              <h2><a href="#">Alexis<br /></a> 1ere année medecine <br /></h2><p>Les cours Galien ont été très bénéfiques pour moi car ils m’ont apporté de l’aide dans la mise en place d’une méthode de travail ainsi qu’un soutien moral très important durant cette année.
                  La 1ère année de médecine est un cap qu’il est parfois difficile de passer du 1er coup. </p>
                          </div>
                        </div>
                      </div>
                          <div class="item">
                        <div class="col-sm-6">
                          <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2cKztlWH_wE"></iframe>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="temoignage_slider-caption">
                              <h2><a href="#">Joel<br /></a> 2eme année de médecine <br /></h2><p>Les cours Galien ont pour moi été d’une grande aide durant cette année difficile qu’est la Paces.
                  Les cours Galien ont pour moi été d’une grande aide durant cette année difficile qu’est la Paces.
                   </p>
                          </div>
                        </div>
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
                    </div>
                  <div class="controllers col-sm-6 col-xs-12">
                        <!-- Indicators -->
                        <ol class="temoignage_slider-indicators">
                          <li data-target="#temoignage_slider-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#temoignage_slider-example-generic" data-slide-to="1"></li>
                          <li data-target="#temoignage_slider-example-generic" data-slide-to="2"></li>
                        </ol>
                  </div>
                  </div>
            </div><!-- /row -->
        </div><!-- /container -->
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

    <!--
    Formaulaire de contact
     -->
    <?php 

    if (isset($_GET['erreur']))
    {
        echo '<div class="alert">';
     
            switch ($_GET['erreur'])
            {
                case 'telephone' :
                    echo 'Vous devez indiquer un numéro de téléphone pour être rappeler.';
                    break;
     
                case 'courrier' :
                    echo 'Votre adresse pour l\'envoie de la brochure est imcomplete.';
                    break;
                case 'brochure':
                      echo $_GET['mess'];
                    break;
                case 'rappel' :
                      echo $_GET['mess'];
                     break;
     
            }
            echo '</div>';
    }
            if (isset($_GET['sucess']))
            {
                 switch ($_GET['success'])
            {
                case 'brochure' :
                    echo '<div class="alert">';
                     echo 'La demande a bien été enregistré';
                      echo '</div>';
                }
            }
    ?>
    
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 form_right">
                    <form method="post" action="#">
                        <h2 class="h2_medium underline">Contactez-nous</h2>
                        <?php wp_nonce_field('brochure', 'brochure-verif'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" class="form-control" id="exampleInputName1" >
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="exampleInputFirstname" >
                        </div>
                        <div class="form-group">
                            <label for="Email1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
                        <div class="form-group">
                            <label for="telephone">Télephone</label>
                            <input type="tel" name="telephone" class="form-control" placeholder="exemple: 0102030405">
                        </div>  
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="rappel" id='rappel'> Demander à être rappelé
                            </label><br>
                                    <!-- plage horaire -->
                                    
                                        <div class="form-group horaireHidden"  id="horaire" >
                                            <label for="exampleInputPassword1">Plage horaire souhaitée</label>
                                            <select class="form-control input-lg" name="horaire">
                                                 <?php foreach($horaireList as $horaire):  ?>
                                                           <?php foreach($horaire as $heure):  ?>
                                                                <option  value="<?php echo $heure->id; ?>"><?php echo $heure->name; ?></option>
                                                            <?php endforeach ?>
                                                <?php endforeach ?>
                                            </select>
                                       </div>
                            <label>
                                <input type="checkbox"  name="brochure" id="brochure"> Recevoir la brochure par courrier
                            </label>
                        </div>
                        <!--adresse d'envoie-->
                        <div  id="adressEnvoi" class="adrEnvoiHidden">
                                    <div class="form-group">
                                          <label for="adress">Adresse</label>
                                     <input type="text" name="adress" class="form-control" >
                                 </div>
                                 <div class="form-group">
                                     <label for="code postal">Code postal</label>
                                     <input type="number" name="cp" class="form-control"  >
                                 </div>
                                 <div class="form-group">
                                     <label for="ville">Ville</label>
                                     <input type="text" name="ville" class="form-control"  >
                                 </div>
                        </div> 
                             
                        <div class="form-group">
                            <label for="centre">Centre</label>
                            <select class="form-control input-lg" name="centre">
                             
                                <?php foreach($data as $nom):  ?>
                                 
                                <option  value="<?php echo $nom['id']."/".$nom['name']; ?>"><?php echo $nom['name']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        
                        
                        <input type="submit" class="btn btn-lg btn-primary" name="valider" value="Envoyer"><br><br>
                    </form>
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    
<?php endwhile;else :?>
        <p>desolé pas de centres pour l'instant...</p>
<?php endif; ?>

</div><!-- /container-centre -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>