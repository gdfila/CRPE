<?php get_header(); ?>

<div class="centre">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <?php the_post_thumbnail(); ?>


  <section class="centre_nom">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 clearfix"><br><br>
                <h1 class="text-center text-uppercase "><?php the_field('adresse_-_ville');?></h1><br>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium                     architecto, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium architecto,                  reprehenderit quia delectus volupt</p><br><br>
            </div>
        </div>
     </div>
</section>   
    

    <div class=row">
        <div class="col-sm-6 gray text-center"><br>
            <h3 class="text-uppercase"><strong><?php the_field('nom_du_centre'); ?></strong></h3><br>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium                     architecto, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium architecto,                  reprehenderit quia </p><br>
            <p>Mr Batumor....... Lacinia odio sem<p>
            <p>Mr Batumor....... Lacinia odio sem<p>
            <h3><strong><?php the_field('adresse-'); ?>
            <?php the_field('adresse-code_postal'); ?> <?php the_field('adresse_-_ville');?></strong></h3>
            <p><strong><?php the_field('telephone'); ?></strong></p>
            <p><?php the_field('horaires_douvertures');?></p>
        </div>
        <div class="col-sm-6 form-padding">
            <form>
              <div class="form-group">
                <label for="exampleInputNom"></label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="exampleInputPrenom"></label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Prenom">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1"></label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div><br>
              <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Votre message"></textarea>
              </div><br><br>
              <button type="submit" class="btn btn-btn text-uppercase form-margin">Envoyer</button>
            </form>
        </div>
    </div>
<div class="container"></div>
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



  <section class="centre_echange">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 clearfix"><br><br>
                <h1 class="text-center text-uppercase ">LIEU D'ÉCHANGES et DE VIE</h1><br>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium                     architecto, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium architecto,                  reprehenderit quia delectus volupt</p>
            </div>
        </div>
     </div>
</section>   



    <section class="prepa_back_1">      
       
       <div class="container stat">
    
            <div class="row">
                <div class="col-sm-3">

                    <div class="caption post-content index_cercle_back_cc hidden-xs">
                        <span><h2 class="text-center counter">365</h2></span>
                        <p class="text-muted text-center">lorem ipsum</p>
                    </div>
                </div>
                <div class="col-sm-3">
                       <div class="caption post-content index_cercle_back_cc hidden-xs">
                        <span><h2 class="text-center counter">98</h2></span>
                        <p class="text-muted text-center">lorem ipsum</p>
                    </div>
                  
                </div>
                <div class="col-sm-3">
                   <div class="caption post-content index_cercle_back_cc hidden-xs">
                        <h2 class="text-center counter"><strong>69</strong></h2>
                    <p class="text-muted text-center">lorem ipsum</p>
                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="caption post-content index_cercle_back_cc hidden-xs">
                        <h2 class="text-center counter"><strong>1.642</strong></h2>
                        <p class="text-muted text-center">lorem ipsum</p><br><br>
                    </div>
                </div>
            </div>
        </div>
</div
 </section>
             
    


<section class="accueil_logo">
 
       <div class="container">
        <div class="row">
            
            <div class="col-sm-6 clearfix">
                <span class="media-left"><br>
                    <img src="<?php bloginfo('template_directory'); ?>/img/centres/picto_centre.png" class="img-responsive  pull-left  image-padding" alt="">
                </span>
                <div class="media-body picto_text_left">
                    <h3 class="text-uppercase"><strong>equipement</strong></h3>
                      <p class="text-muted image-padding">Lorem ipsum dolor sit amet, consectetur adipisicing                       elit. Ipsam molestiae esse </p>
                      <p class="text-muted image-padding">Lorem ipsum dolor sit amet, consectetur adipisicing                       elit. Ipsam molestiae esse </p>
                      <p class="text-muted image-padding">Lorem ipsum dolor sit amet, consectetur adipisicing                       <p>elit. Ipsam molestiae esse </p>
                      <p>elit. Ipsam molestiae esse </p>
                </div>
              </div>
            <div class="col-sm-6  clearfix">
                <span class="media-left"><br>
                    <img src="<?php bloginfo('template_directory'); ?>/img/centres/picto_centre_2.png" class="img-responsive  pull-left  image-padding" alt="">
                </span>
                <div class="media-body picto_text_right">
                    <h3 class="text-uppercase"><strong>info</strong></h3>
                      <p class="text-muted image-padding">Lorem ipsum dolor sit amet, consectetur adipisicing                       elit. Ipsam molestiae esse </p>
                      <p class="text-muted image-padding">Lorem ipsum dolor sit amet, consectetur adipisicing                       elit. Ipsam molestiae esse </p>
                      <p class="text-muted image-padding">Lorem ipsum dolor sit amet, consectetur adipisicing                       elit. Ipsam molestiae esse </p>
                      <p>elit. Ipsam molestiae esse </p>
                      <p>elit. Ipsam molestiae esse </p>
                </div>
              </div>
          </div>
    </div><br><br><br>
</section>


<section>
<div class="background_centre_1 ">
    <div class="i-container">
      <blockquote>
        <h2  class="text-uppercase formule-text text_fond_1">equipe pedagogique</h2>
      </blockquote>
    </div>
</div><br><br><br>
</section>




<section class="centre_persona">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 image-padding">
                <img src="<?php bloginfo('template_directory'); ?>/img/centres/paul_centre.jpg" class="img-circle center-block" alt="">
                <h3 class="text-center text-uppercase titre-img">Paul h.</h3>
                <h6 class="text-center">Professeur</h6>
                <p class="text-muted text-center text-padding">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aliquid, ipsam accusantium id veniam, nam corporis  </p>
            </div>
            <div class="col-sm-4 image-padding">
                <img src="<?php bloginfo('template_directory'); ?>/img/centres/marie_centre.jpg"" class="img-circle center-block" alt="">
                <h3 class="text-center text-uppercase titre-img">Marie p.</h3>
                <h6 class="text-center">Etudiante</h6>
                <p class="text-muted text-center text-padding">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aliquid, ipsam accusantium id veniam, nam corporis  </p>
            </div>
            <div class="col-sm-4">
                <img src="<?php bloginfo('template_directory'); ?>/img/centres/edouard_centrre.jpg"" class="img-circle center-block" alt="">
                <h3 class="text-center text-uppercase titre-img">Edouard b.</h3>
                <h6 class="text-center">Etudiant</h6>
                <p class="text-muted text-center text-padding">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aliquid, ipsam accusantium id veniam, nam corporis  </p>
            </div>
        </div>
    </div>
    <br><br>

</section>    




    
<section class="centre_temoignage">
    <div class="container">
        <div class="row">
            <h2 class="text-center text-uppercase ">nos témoignages</h2>
            <div class="col-sm-5 col-sm-offset-1">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h3 class="text-uppercase"><strong><?php the_field('prenom_nom_age_');?></strong></h3>
                      <p class=""><?php the_field('description');?></p>
                      <p class="text-justify"><?php the_field('presentation');?></p>
                    </div>
                    <div class="item">
                        <h3  class="text-uppercase"><strong><?php the_field('prenom_nom_age_');?></strong></h3>
                      <p class=""><?php the_field('description');?></p>
                      <p  class="text-justify"><?php the_field('presentation');?></p>
                    </div>
                    <div class="item">
                        <h3  class="text-uppercase"><strong><?php the_field('prenom_nom_age_');?></strong></h3>
                      <p class=""><?php the_field('description');?></p>
                      <p class="text-justify"><?php the_field('presentation');?></p>
                    </div>
                    <div class="item">
                        <h3  class="text-uppercase"><strong><?php the_field('prenom_nom_age_');?></strong></h3>
                      <p class=""><?php the_field('description');?></p>
                      <p class="text-justify"><?php the_field('presentation');?></p>
                    </div>
                  </div>

               
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1"><br>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>


<div class="carousel-inner" role="listbox">
                    <div class="item active embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="100%" height="100%" src="https://www.youtube.com/embed/jJiOCwWxHIQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="item embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item"  width="100%" height="100%" src="https://www.youtube.com/embed/hIYqY4uQ7hA" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="item embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item"  width="100%" height="100%" src="https://www.youtube.com/embed/rk93EIqVd8g" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="item embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item"  width="100%" height="100%" src="https://www.youtube.com/embed/UU9sw-FXBVM" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>

                </div>
            </div>
        </div>
</section>
   
    <div class="background3  border">
            <div class="i-container">
      <blockquote>
        <h1  class="text-uppercase formule-text text_fond_1">actualites</h1>
 </blockquote>
    </div>
    </div>

<section class="centre_actu">
<div class="container ">
    <div class="row">
      
        <div class="col-sm-4">
            <h3  class="text-uppercase"><strong>jusqu'au </strong><strong class="centre_texte_red"><?php the_field('date_de_levenement');?></strong></h3><br>
            <h3  class="actu_h3_2"><strong><?php the_field('nom_de_levenement');?></strong> </h3><br>
            <p  class="text-justify"><?php the_field('presentation_de_levenement');?></p><br>
             <button type="submit" class="btn btn-btn text-uppercase form-margin">infos</button>
            
        </div>
      <div class="col-sm-4">
          <h3  class="text-uppercase"><strong>jusqu'au </strong><strong class="centre_texte_red"><?php the_field('date_de_la_jpo');?></strong></h3><br>
          <h3  class="actu_h3_2"><strong><?php the_field('nom_de_la_jpo');?></strong> </h3><br>
            <p  class="text-justify"><?php the_field('presentation_de_la_jpo');?></p><br>
              <button type="submit" class="btn btn-btn text-uppercase form-margin">infos</button>
            
        </div>
        <div class="col-sm-4">
            <h3  class="text-uppercase"><strong>jusqu'au </strong><strong class="centre_texte_red"><?php the_field('date_de_levenement');?></strong></h3><br>
            <h3  class="actu_h3_2"><strong><?php the_field('nom_de_levenement');?></strong> </h3><br>
            <p  class="text-justify"><?php the_field('presentation_de_levenement');?></p><br>
             <button type="submit" class="btn btn-btn text-uppercase form-margin">infos</button>
            
        </div>
    </div>
</div>
</section>

































<!--

                <div class="col-sm-8">
                    <?php the_content(); ?>
                </div>
                <div class="col-sm-4">
                    <h2><?php the_field('nom_du_centre'); ?></h2><br>
                    <?php the_field('la_prepa_'); ?><br>
                    <?php the_field('horaires_douvertures');?><br>
                    <?php the_field('telephone'); ?><br>
                    <?php the_field('fax'); ?><br>
                    <?php the_field('adresse-'); ?>
                    <?php the_field('adresse-batiment'); ?><br>
                    <?php the_field('adresse-code_postal'); ?>
                    <?php the_field('adresse_-_ville');?><br>


                    <?php the_field('page_facebook'); ?>
                    <?php the_field('page_twitter'); ?>
                    <?php the_field('page_linkedin'); ?>
                    <?php the_field('page_google+'); ?>
                </div>
             </div>



                <div class="row">
                    <div class="col-sm-6">

                        <?php

                        $location = get_field('localisation');

                        if( !empty($location) ):
                        ?>
                        <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                        <?php endif; ?>

                        <h2><?php the_field('prenom_nom_age_');?></h2><br>
                        <h3><?php the_field('description');?></h3><br>
                        <p><?php the_field('presentation');?></p><br>
                    </div>
                    <div class="col-sm-6">
                        <h2><?php the_field('prenom_nom_age_');?></h2><br>
                        <h3><?php the_field('description');?></h3><br>
                        <p><?php the_field('presentation');?></p><br>
                     </div>
                </div>




                <div class="row">
                    <div class="col-sm-4">
                        <h2><?php the_field('nom_de_levenement');?></h2><br>
                        <h3><?php the_field('date_de_levenement');?></h3><br>
                        <p><?php the_field('presentation_de_levenement');?></p><br>
                    </div>
                    <div class="col-sm-4">
                        <h2><?php the_field('nom_de_la_jpo');?></h2><br>
                        <h3><?php the_field('date_de_la_jpo');?></h3><br>
                        <p><?php the_field('presentation_de_la_jpo');?></p><br>
                    </div>
                     <div class="col-sm-4">
                        <h2><?php the_field('nom_de_levenement');?></h2><br>
                        <h3><?php the_field('date_de_levenement');?></h3><br>
                        <p><?php the_field('presentation_de_levenement');?></p><br>
                    </div>
                </div>

</div> -->
     <!--    <?php the_field('localisation'); ?> -->
<?php endwhile;else :?>
        <p>desolé pas de centres pour l'instant...</p>
<?php endif; ?>

</div>
<?php get_footer(); ?>

