<?php
/*
 * Template Name: contact
 */
?>
<!--
Récuperation du header
 -->
<?php get_header(); ?>

<div id="container_contact" class="top_content">

    <?php
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
    ?>
    
    <!--
    Affiche une image de présentation pour la page
     --> 
    <div class="img_prez img_prez_aplat img_prez_incurve">
        <!-- <img src="<?php echo $post_thumbnail_url; ?>" /> -->
        <img class="back_img" src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
    </div><!-- /img_prez -->
    <?php
    //affichage message d'erreur
    if (isset($_GET['erreur']))
    {
        echo '<div class="alert">';
 
            switch ($_GET['erreur'])
            {
                case 'telephone' :
                    echo 'Vous devez indiquer un numéro de téléphone pour être rappeler.';
                    break;
                case 'rappel' :
                    echo $_GET['mess'];
                    break;
                case 'success':
                    echo 'Votre demande a bien été enregistré';
                    break;
            }
          echo '</div>';
    } ?>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs picto_title_mail">
                    <h1 class="h1_small">Téléchargez les brochures d’information Galien</h1>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-6 col-sm-offset-1">
                    <form method="post" action="#">
                        <h2 class="h2_tall">Téléchargez les brochures d’information Galien</h2>
                        <?php wp_nonce_field('contact', 'contact-verif'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
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
                            <label for="message">Message</label>
                            <textarea name="message"   rows="2" cols="85"></textarea>
                        </div><!-- /form-group -->
              
                        <div class="form-group">
                            <label for="centres">Centre</label>
                            <select class="form-control input-lg" name="centre">
                                <?php foreach($_SESSION['centre'] as $nom):  ?>
                                    <option  value="<?php echo $nom['id']; ?>"><?php echo $nom['name']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div><!-- /form-groupe -->
                        <input type="submit" class="btn btn-lg btn-primary" name="valider" value="Envoyer"><br><br>
                    </form > 
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /contact -->
</div><!-- /container_brochure -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>