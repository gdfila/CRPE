<?php
/*
 * Template Name: le crpe
 */
?>

<!--
Récuperation du header
 -->
<?php get_header(); ?>

<div id="container_prepa" class="top_content">

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
            <h1 class="h1_tall">Définition du concours</h1>
            <p>Le concours de recrutement de professeur des écoles (CRPE1), est le concours sur lequel s'appuie en France le Ministère de l'Éducation nationale pour recruter les professeurs des écoles, exerçant dans le primaire (sans distinction dans les écoles maternelles et dans les écoles élémentaires).</p>
            <h2 class="h2_medium">Définition du concours</h2>
            <p>Le concours de recrutement de professeur des écoles (CRPE1), est le concours sur lequel s'appuie en France le Ministère de l'Éducation nationale pour recruter les professeurs des écoles, exerçant dans le primaire (sans distinction dans les écoles maternelles et dans les écoles élémentaires).</p>
        </div><!-- /container -->
    </section>
    
    <section class="prepa_back_1">      
       
       <div class="container stat">
    
            <div class="row">
                <div class="col-sm-3">

                    <div class="caption post-content index_cercle_back_p hidden-xs">
                        <span><h2 class="text-center counter">365</h2></span>
                        <p class="text-muted text-center">lorem ipsum</p>
                    </div>
                </div>
                <div class="col-sm-3">
                       <div class="caption post-content index_cercle_back_p hidden-xs">
                        <span><h2 class="text-center counter">98</h2></span>
                        <p class="text-muted text-center">lorem ipsum</p>
                    </div>
                  
                </div>
                <div class="col-sm-3">
                   <div class="caption post-content index_cercle_back_p hidden-xs">
                        <h2 class="text-center counter"><strong>69</strong></h2>
                    <p class="text-muted text-center">lorem ipsum</p>
                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="caption post-content index_cercle_back_p hidden-xs">
                        <h2 class="text-center counter"><strong>1.642</strong></h2>
                      <p class="text-muted text-center">lorem ipsum</p>
                    </div>
                </div>
            </div>
        </div>
</div
 </section>
             
    
    
    
    
 <section>   
           <div class="container">
        <div class="row">
            <div class="col-sm-12"><br><br>
                <h1 class="text-center text-uppercase ">equipe pedagogique</h1><br>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium architecto Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium architecto, reprehenderit, 
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium architecto, reprehenderit quia delectus volupt</p><br><br>
                
            <button class="btn btn-btn center-block text-uppercase btn_centres">Nos centres</button>
                    <br><br><br></div>
        </div>
     </div>
     
        
</section>    
 
<div class="background_prepa_1">
    <div class="i-container">
      <blockquote>
        <h2  class="text-uppercase formule-text text_fond_2">contenu des epreuves</h2>
           <p class="text-muted image-padding prepa_p_1">orem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam molestiae esse Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam molestiae esse . Ipsam molestiae esse Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam molestiae esse . Ipsam molestiae esse Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam molestiae esse </p>
</p>
      </p>
      </blockquote>
    </div>
</div>
    
<section class="epreuve_prepa">
  
</section>    
    

    

<section class="decoup">
  <div class="background_prepa_3">
    <div class="i-container">
      <blockquote>
        <h2  class="text-uppercase formule-text text_fond_2">une formule simple</h2>
      </blockquote>
    </div>
  </div>
    
    <section class="accueil_pack_2">
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

    
    
 
</div>
    
<?php get_footer(); ?>
