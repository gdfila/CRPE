<?php
/*
 * Template Name: inscriptionJPO
 */
?>
<?php get_header(); ?>
<div id="container_prepa" class="top_content">

    <?php
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
    ?>
        <section class="accroche">
            <div class="container">
                <h1 class="h1_tall">Inscrire aux journée portes ouvertes</h1>
                 <form method="post" action=#">
                       <?php wp_nonce_field('jpo', 'inscriptionJPO'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" name="nom" class='form-control' id="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom *</label>
                        <input type="text" name="prenom" class="form-control" id="exampleInputFirstname" required>
                    </div>
                    <div class="form-group">
                        <label for="emai1">Email *</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Télephone</label>
                        <input type="tel" name="telephone" class="form-control" placeholder="exemple: 0102030405">
                    </div>  
                       <div class="form-group">
                           <label for="accompagnants">Nombre d'accompagnants *</label>
                           <input type="text" name="accompagant" class="form-control"  required>
                       </div>
                      <div class="form-group">
                        <label for="centres">Centre</label>
                        <select class="form-control input-lg" name="centre">

                             <?php foreach($_SESSION['centre'] as $nom):  ?>
                              <option  value="<?php echo $nom['id']; ?>"><?php echo $nom['name']; ?></option>
                            <?php endforeach ?>
                        </select>
                     </div>
                       <input type="submit" class="btn btn-lg btn-primary" name="valider" value="Envoyer"><br><br>
                </form>
            </div>
        </section>
</div>
<?php get_footer(); ?>
