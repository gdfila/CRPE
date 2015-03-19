<?php
/*
 * Template Name: contact
 */
?>
<?php get_header(); ?>

<?php
    $post_thumbnail_id = get_post_thumbnail_id($post->ID);
    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>

<div class="content">
    
    <div class="container-fluid content-background" style="background: url(<?php echo $post_thumbnail_url; ?>) no-repeat; background-size: cover;"></div>
    

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
<!--        <div class="container">
            <form>
                <div class="form-group">
                    <label for="exampleInputName1">Nom</label>
                    <input type="name" class="form-control" id="exampleInputName1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Prénom</label>
                    <input type="firstname" class="form-control" id="exampleInputFirstname" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Exemple : votre.email@exemple.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputPhone">Telephone</label>
                    <input type="phone" class="form-control" id="exampleInputPhone" placeholder="exemple : 06 04 03 02 01">
                </div>  
                <div class="form-group">
                    <label for="exampleInputPhone">Message</label>
                    <input type="phone" class="form-control" id="exampleInputPhone" placeholder="Tapez votre message ici">
                </div>  
             
                <div class="form-group">
                    <label for="exampleInputPassword1">Centre</label>
                    <select class="form-control input-lg">truc</select>
                </div>
                <div class="form-group">
                       <label for="exampleInputPassword1">Formule</label>
                    <select class="form-control input-lg"></select>
                </div>
                
                <button type="submit" class="btn btn-lg btn-primary" disabled="disabled">Envoyer</button><br><br>

            </form>
        </div>-->
 <div class="row">
  <div class="col-sm-6 form_left">
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
      <textarea class="form-control" rows="9" placeholder="Votre message"></textarea><br>
  </div>
        <button class="btn  btn-btn  text-uppercase">Envoyez</button>
</form>
<br>
  </div>
  <div class="col-sm-6 form_right">
  <br>
  <div class:"int_form_left">
    <h3>Vous avez une question ?</h3><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptas rerum pariatur eum eos      dolor cum sed aliquam, unde rem enim totam, perspiciatis voluptatem quas eaque. Cum magni, assumenda sint.      </p><br>
    <h3>Vous etes intéressez par un Pack ?</h3><br>
    <div class:"btn_pack_right" >
      <button class="btn  btn-btn  text-uppercase">Pack Training</button>
   
    
      <button class="btn  btn-btn  text-uppercase">Pack Complet</button>
    </div>
    <br><br>
    <h3>Souhaitez vous un rendez vous ?</h3><br>
      <button class="btn  btn-btn  text-uppercase">Candidature</button>
  </div>
  </div><br>


<?php endwhile;else :?>
        <p>desolé pas de centres pour l'instant...</p>
<?php endif; ?>

<?php get_footer(); ?>