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

<?php get_footer(); ?>