<?php
/**
 * Template Name: rappel
 */
?>
<!--
Récuperation du header
 -->
<?php get_header(); ?>

<div id="container_rappel" class="top_content">

    <?php
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
    ?>

    <!--
    Affiche une image de présentation pour la page
     --> 
    <div class="hidden-xs hidden-sm img_prez img_prez_aplat img_prez_incurve">
        <img class="back_img" src="<?php echo $post_thumbnail_url; ?>" alt="">
    </div><!-- /img_prez -->
  
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs picto_title_phone">
                    <h1 class="medium">Laissez vos coordonnées, Cours Galien vous rappelle</h1>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-6 col-sm-offset-1">
                    <form method="post" action="#">
                        <h2 class="large">Laissez vos coordonnées, Cours Galien vous rappelle</h2>
                          <?php
                                //affichage message d'erreur
                                if (!empty($_GET['erreur']))
                                {
                                        switch ($_GET['erreur'])
                                        {
                                            case 'telephone' :
                                                echo '<div class="alert red">';
                                                echo 'Vous devez indiquer un numéro de téléphone pour être rappelé.';
                                                echo '</div>';
                                                break;
                                            case 'rappel' :
                                                 echo '<div class="alert red">';
                                                echo $_GET['mess'];
                                                echo '</div>';
                                                break;
                                            case 'vide' :
                                                 echo '<div class="alert red">';
                                                echo 'Merci de remplir tous les champs suivis d\'un *';
                                                echo '</div>';
                                                break;
                                            case 'email':
                                                 echo '<div class="alert red">';
                                                      echo 'L\'adresse e mail est invalide';
                                                      echo '</div>';
                                                     break;
                                            case 'success':
                                                 echo '<div class="alert">';
                                                echo 'Votre demande a bien été enregistré';
                                                echo '</div>';
                                                break;
                                         }
                                          
                                } ?>
                        <?php wp_nonce_field('rappel', 'rappel-verif'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
                        <div class="form-group">
                            <label for="nom">Nom *</label>
                            <input type="text" name="nom" class='form-control' id="firstname" maxlength="100" value="<?php echo $_POST['nom'] ;?>" required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="prenom">Prénom *</label>
                            <input type="text" name="prenom" class="form-control" id="exampleInputFirstname" maxlength="100" value="<?php echo $_POST['prenom'] ;?>" required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="emai1">Email *</label>
                            <input type="email" name="email" class="form-control" id="email"  value="<?php echo $_POST['email'] ;?>" maxlength="200" required >
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="telephone">Télephone *</label>
                            <input type="tel" name="telephone" class="form-control" value="<?php echo $_POST['telephone'] ;?>" placeholder="exemple: 0102030405" required>
                        </div> <!-- /form-group -->

                        <!-- plage horaire -->
                        <label for="plage horaire">Plage horaire souhaitée</label>
                        <select class="form-control input-lg" name="horaire">
                             <?php foreach($_SESSION['horaireList'] as $horaire):  ?>
                                       <?php foreach($horaire as $heure):  ?>
                                            <option  value="<?php echo $heure->id; ?>"><?php echo $heure->name; ?></option>
                                        <?php endforeach ?>
                            <?php endforeach ?>
                        </select>

                        <div class="form-group">
                            <label for="centre">Centre *</label>
                            <select class="form-control input-lg" name="centre">
                                <?php foreach($_SESSION['centre'] as $nom):  ?>
                                    <option  value="<?php echo $nom['id']."/".$nom['name']; ?>"><?php echo $nom['name']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div><!-- /form-group -->
                        <input type="submit" class="btn btn-lg btn-primary" name="valider" value="Envoyer"><br><br>
                    </form > 
                </div><!-- /col-sm-6 -->
           </div><!-- /row -->
       </div><!-- /container -->
  </section><!-- /contact -->
</div><!-- /container_rappel -->
<!--
Récuperation du footer
 -->
<?php get_footer(); ?>