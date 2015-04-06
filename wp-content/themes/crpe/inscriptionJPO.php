<?php
/*
 * Template Name: inscriptionJPO
 */
?>
<!--
Récuperation du header
 -->
<?php get_header(); ?>

<div id="container_jpo" class="top_content">

    <?php
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
    ?>
    <?php
        global $wp_query;
            $centre = 'Galien ' .$wp_query->query_vars['centre'];
            $jpoDate= $wp_query->query_vars['jpoDate'];
          $date = new DateTime($jpoDate);    
    ?>
    <!--
    Affiche une image de présentation pour la page
     --> 
    <div class="img_prez img_prez_aplat img_prez_incurve">
        <!-- <img src="<?php echo $post_thumbnail_url; ?>" /> -->
        <img class="back_img" src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
    </div>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 picto_title_doc">
                    <h1 class="medium">Journée portes ouvertes du <?php echo $date->format('d/m/Y'); ?></h1>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-6 col-sm-offset-1">
                    <form method="post" action="#">
                        <h2 class="large">Journée portes ouvertes du <?php echo $date->format('d/m/Y'); ?></h2>
                       <?php wp_nonce_field('jpo', 'inscriptionJPO'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
                       <input type="text" name="date" value="<?php echo $jpoDate; ?>" hidden>
                        <div class="form-group">
                            <label for="nom">Nom *</label>
                            <input type="text" name="nom" class='form-control' id="firstname" required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="prenom">Prénom *</label>
                            <input type="text" name="prenom" class="form-control" id="exampleInputFirstname" required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="emai1">Email *</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="telephone">Télephone</label>
                            <input type="tel" name="telephone" class="form-control" placeholder="exemple: 0102030405">
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="accompagnants">Nombre d'accompagnants *</label>
                            <input type="text" name="accompagant" class="form-control"  required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="centres">Centre</label>
                            <select class="form-control input-lg" name="centre">

                                <?php foreach($_SESSION['centre'] as $nom):  ?>
                                    <?php if($nom['name']==$centre): ?>
                                        <option  value="<?php echo $nom['id']; ?>" selected><?php echo $nom['name']; ?></option>
                                    <?php else: ?>
                                        <option  value="<?php echo $nom['id']; ?>"><?php echo $nom['name']; ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div><!-- /form-group -->
                        <input type="submit" class="btn btn-lg btn-primary" name="valider" value="Envoyer"><br><br>
                    </form>
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /contact -->
</div><!-- /container_jpo -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>