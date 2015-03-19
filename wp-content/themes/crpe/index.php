<?php get_header(); ?>
<div class="accueil">
    <div class="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
   
        
        
<div class="container_slider">
<?php echo do_shortcode('[image-carousel]'); ?>
    <div class="carousel-caption hidden-sm"><a href="/galien_crpe/contact/brochure/"><button class="btn  btn-slider  text-uppercase">Candidature</button></a><a href="/galien_crpe/contact/brochure/"><button class="btn  btn-slider  text-uppercase">documentation</button></a></div>
</div>

   

<section class="esprit_galien">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 clearfix"><br><br>
                <h1 class="text-center text-uppercase ">Adoptez l'esprit Galien !</h1><br>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium                     architecto, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium architecto,                  reprehenderit quia delectus volupt</p><br><br>
            </div>
        </div>
     </div>
</section>   
    

<section class="accueil_logo">       
        
     <div class="container">
            <div class="row">
                 <div class="col-sm-6 ">
                    <span class="media-left"><br>
                      <img src="<?php bloginfo('template_directory'); ?>/img/accueil/logo_partage.png" class="                      img-responsive pull-left image-padding" alt="">
                    </span>
                    <div class="media-body">
                      <h3 class="text-uppercase"><strong>Partage</strong></h3>
                      <p class="text-muted image-padding">Lorem ipsum dolor sit amet, consectetur adipisicing                       elit. Ipsam molestiae esse </p>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                    <span class="media-left"><br>
                        <img src="<?php bloginfo('template_directory'); ?>/img/accueil/logo_progression.png" class="img-responsive pull-left  image-padding" alt="">
                    </span>
                    <div class="media-body">
                          <h3 class="text-uppercase"><strong>Progression</strong></h3>
                          <p class="text-muted image-padding">Lorem ipsum dolor sit amet, consectetur                                   adipisicing elit. Ipsam molestiae esse </p>
                    </div>
                </div>
          </div>
     </div>
    
    <div class="container">
        <div class="row">
            
            <div class="col-sm-6 clearfix">
                <span class="media-left"><br>
                    <img src="<?php bloginfo('template_directory'); ?>/img/accueil/logo_cohesion.png" class="img-responsive  pull-left  image-padding" alt="">
                </span>
                <div class="media-body">
                    <h3 class="text-uppercase"><strong>Cohesion</strong></h3>
                      <p class="text-muted image-padding">Lorem ipsum dolor sit amet, consectetur adipisicing                       elit. Ipsam molestiae esse </p>
                </div>
              </div>
            <div class="col-sm-6  clearfix">
                <span class="media-left"><br>
                    <img src="<?php bloginfo('template_directory'); ?>/img/accueil/logo_reussite.png" class="img-responsive  pull-left  image-padding" alt="">
                </span>
                <div class="media-body">
                    <h3 class="text-uppercase"><strong>Reussite</strong></h3>
                      <p class="text-muted image-padding">Lorem ipsum dolor sit amet, consectetur adipisicing                       elit. Ipsam molestiae esse </p>
                </div>
              </div>
          </div>
    </div><br><br><br>
        
  </section>

           <div class="container">
            <div class="row">
                <div class="col-sm-12 center-block ">
                    <a class="" href="/galien_crpe/la-prepa/"><button class="btn  btn-btn center-block text-uppercase ">le crpe</button></a>
                    <br><br>
                </div>
            </div>
        </div>

        
        
<section class="accueil_temoignages">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4 image-padding">
                <img  src ="<?php bloginfo('template_directory'); ?>/img/accueil/paul.png" class="img-circle img-temoin center-block" alt="">
                <h3  class="text-center text-uppercase titre-img"><?php the_field('nom');?></h3>
                <h3 class="text-center"><?php the_field('profession_gauche');?></h3>
                <p class="text-muted text-center text-padding"><?php the_field('texte_gauche');?></p>
            </div>
            <div class="col-sm-4 image-padding">
                <img  src="<?php bloginfo('template_directory'); ?>/img/accueil/marie.png" class="img-circle img-temoin center-block" alt="">
                <h3  class="text-center text-uppercase titre-img"><?php the_field('prenom_centre');?></h3>
                <h3 class="text-center"><?php the_field('profession');?></h3>
                <p class="text-muted text-center text-padding"><?php the_field('texte_centre');?></p>
            </div>
            <div class="col-sm-4">
                 <img src="<?php bloginfo('template_directory'); ?>/img/accueil/edouard.png" class="img-circle img-temoin center-block" alt="">
                <h3 class="text-center text-uppercase titre-img"><?php the_field('prenom_droite');?></h3>
                <h3 class="text-center"><?php the_field('profession_droite');?></h3>
                <p class="text-muted text-center text-padding"><?php the_field('texte_droite');?></p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a class="center-block" href="/galien_crpe/le-concours/"><button class="btn  btn-btn center-block text-uppercase ">Concours</button></a>
                    <br><br>
                </div>
            </div>
        </div>
</section>

    
<section class="accueil_background_1">

<div class="container stat_index">
    
            <div class="row">
                <div class="col-sm-3">

                    <div class="caption post-content index_cercle_back hidden-xs">
                        <span><h2 class="text-center counter">365</h2></span>
                        <p class="text-muted text-center p_stat">lorem ipsum</p>
                    </div>
                </div>
                <div class="col-sm-3">
                       <div class="caption post-content index_cercle_back hidden-xs">
                        <span><h2 class="text-center counter">98</h2></span>
                        <p class="text-muted text-center p_stat">lorem ipsum</p>
                    </div>
                  
                </div>
                <div class="col-sm-3">
                   <div class="caption post-content index_cercle_back hidden-xs">
                        <h2 class="text-center counter"><strong>69</strong></h2>
                    <p class="text-muted text-center p_stat">lorem ipsum</p>
                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="caption post-content index_cercle_back hidden-xs">
                        <h2 class="text-center counter"><strong>1.642</strong></h2>
                      <p class="text-muted text-center p_stat">lorem ipsum</p>
                    </div>
                </div>
            </div>
        </div>
</div

</section>
        
<section class="reseau_nat">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 clearfix">
        <br><br>
        <h1 class="text-center text-uppercase ">Un reseau national</h1><br>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse provident dicta, alias voluptas nihil molestias a sed sequi, possimus asperiores quasi velit veniam ipsa doloremque explicabo molestiae, quis dignissimos doloribus? Lorem ipsum dolor sit amet, consectetur adipisicing elit.?</p><br>
      </div>
    </div>
  </div>
      <div class="container">
            <div class="row">
                <div class="col-sm-12">
                       
                    <button class="btn btn-btn center-block text-uppercase">Nos centres</button>
                    <br><br><br>
                </div>
            </div>
        </div>
</section>

    
    

  <div class="background2">
    <div class="i-container">
      <blockquote>
        <h1  class="text-uppercase formule-text h_back_2">une formule simple</h1>
      </blockquote>
    </div>
  </div>
        
 <section class="accueil_pack">
  <div class="container container-price hidden-xs">
    <div class="row">
      <div class="col-sm-1 col-sm-offset-2 price">
        <h4 class="text-center text-uppercase titre-pack">Pack <strong>training</strong></h4>
          <button class="btn  btn-btn center-block text-uppercase  pack_btn_right">Candidature</button><br>
          <p class="text-center text-muted p-pack">4 concours blanc</p>
          <p class="text-center p-pack"><strong>mathematique + francais</strong></p>
          <p class="text-center p-pack"><strong>Epreuves</strong></p>
           <p class="text-center text-muted p-pack">realiser en conditions réelles,copies corrigés et annotés   de facon personnalisée</p>
          <p class="text-center p-pack"><strong>Parrainage</strong></p>
          <p class="text-center ">telephonique et electronique</p><br>
          <hr class="pack_surlign_left">
          <p class="text-center p-pack"><strong>000h / 400 €</strong></p>
      </div>
      <div class="col-sm-1 col-sm-offset-2 price pack-complet ">
        <h4 class="text-center text-uppercase titre-pack">Pack <strong>complet</strong></h4>
        <button class="btn  btn-btn center-block text-uppercase pack_btn_left ">Candidature</button><br>
          <p class="text-center text-muted p-pack">Preparation aux epreuves </p>
          <p class="text-center p-pack"><strong>d'admisibilités + d'admission</strong></p>
          <p class="text-center text-muted p-pack">4 concours blanc</p>
          <p class="text-center p-pack"><strong>mathematique + francais</strong></p>
          <p class="text-center p-pack"><strong>Modules de remise à niveau inclus</strong></p>
          <p class="text-center p-pack"><strong>Parrainage</strong></p>
          <p class="text-center p-surling_left">telephonique et electronique</p><br>
          <hr class="pack_surlign_right">
          <p class="text-center "><strong>272h / 1950 €</strong></p>
      </div>
    </div>
  </div>
</section>


<section class="formulaire_contact">

  <div class="row">
    <div class="col-sm-12">
        <h1 class="text-center text-uppercase">Contact</h1><br>
    </div>
  </div>


  <div class="row ">
  <div class="col-sm-6 form_left ">
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
<div class="form-group">
                    <label for="exampleInputPassword1">Centre</label>
                    <select class="form-control input-lg">truc</select>
                </div>
  <div class="form-group">
      <textarea class="form-control" rows="9" placeholder="Votre message"></textarea><br><br>
  </div>
        <button class="btn  btn-btn text-uppercase">Envoyez</button>
</form>
<br>
  </div>
  <div class="col-sm-6 form_right ">
  <br>
  <div class:"int_form_left">
    <h3>Vous avez une question ?</h3><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptas rerum pariatur eum eos      dolor cum sed aliquam, unde rem enim totam, perspiciatis voluptatem quas eaque. Cum magni, assumenda sint.      </p><br>
    <h3>Vous etes intéressez par un Pack ?</h3><br>
    <div class:"btn_pack_right" >
      <button class="btn  btn-btn text-uppercase index_btn_training">Pack Training</button>
   
    
      <button class="btn  btn-btn  text-uppercase">Pack Complet</button>
    </div>
    <br><br>
    <h3>Souhaitez vous un rendez vous ?</h3><br>
      <button class="btn  btn-btn  text-uppercase">Candidature</button>
  </div>
  </div>

</section>

 <?php endwhile;else : ?>
    <p>desolé pas de centres pour l'instant...</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>
