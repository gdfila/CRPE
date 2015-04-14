<?php
/*
 * Template Name: brochure
 */
?>
<!--
Récuperation du header
 -->
<?php get_header(); ?>

<div id="container_brochure" class="top_content">

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
                <div class="col-sm-3 hidden-xs hidden-sm picto_title_doc">
                    <h1 class="medium">Téléchargez la brochure d’information Galien</h1>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-6 col-sm-offset-1">
                    <form method="post" action="#">
                        <h2 class="large">Téléchargez la brochure d’information Galien</h2>
                         <?php 
                        //affichage message d'erreur
                        if (!empty($_GET['erreur']))
                        {
                            echo '<div class="alert">';

                                switch ($_GET['erreur'])
                                {
                                    case 'telephone' :
                                         echo '<div class="alert red">';
                                        echo 'Vous devez indiquer un numéro de téléphone pour être rappeler.';
                                        echo '</div>';
                                        break;
                                    case 'courrier' :
                                         echo '<div class="alert red">';
                                        echo 'Votre adresse pour l\'envoie de la brochure est imcomplete.';
                                           echo '</div>';
                                        break;
                                    case 'brochure':
                                         echo '<div class="alert red">';
                                          echo $_GET['mess'];
                                             echo '</div>';
                                        break;
                                    case 'rappel' :
                                         echo '<div class="alert red">';
                                          echo $_GET['mess'];
                                             echo '</div>';
                                         break;
                                      case 'vide' :
                                           echo '<div class="alert red">';
                                        echo 'merci de remplir tous les champs suivie d\'un *';
                                           echo '</div>';
                                        break;
                                    case 'email':
                                         echo '<div class="alert red">';
                                        echo 'L\'adresse e mail est invalide';
                                           echo '</div>';
                                        break;
                                }
                            
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
                        <?php wp_nonce_field('brochure', 'brochure-verif'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
                        <div class="form-group">
                            <label for="nom">Nom *</label>
                            <input type="text" name="nom" class="form-control" id="exampleInputName1" maxlength="100"  value="<?php echo $_POST['nom'] ;?>" required >
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="prenom">Prénom *</label>
                            <input type="text" name="prenom" class="form-control" id="exampleInputFirstname" value="<?php echo $_POST['prenom']; ?>" maxlength="100"required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="Email1">Email *</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $_POST['email']; ?>" maxlength="200" required >
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input type="tel" name="telephone" class="form-control" value="<?php echo $_POST['telephone']; ?>"  placeholder="exemple: 0102030405">
                        </div> <!-- /form-group --> 
                        <div class="checkbox">
                            <p><label>
                                <input type="checkbox" name="rappel" id='rappel'> Demander à être rappelé
                            </label></p>

                            <!-- plage horaire -->
                            <div id="horaire" class="form-group">
                                <label for="horaire">Plage horaire souhaitée</label>
                                <select class="form-control input-lg" name="horaire">
                                     <?php foreach($_SESSION['horaireList'] as $horaire):  ?>
                                               <?php foreach($horaire as $heure):  ?>
                                                    <option  value="<?php echo $heure->id; ?>"><?php echo $heure->name; ?></option>
                                                <?php endforeach ?>
                                    <?php endforeach ?>
                                </select>
                           </div><!-- /horaire -->

                        </div><!-- /checkbox -->
                        <div class="checkbox">
                            <p><label>
                                <input type="checkbox" name="brochure" id="brochure"> Recevoir la brochure par courrier
                            </label></p>

                            <!--adresse d'envoie-->
                            <div id="adressEnvoi">
                                <div class="form-group">
                                    <label for="adress">Adresse</label>
                                    <input type="text" name="adress" class="form-control" >
                                </div><!-- /form-group -->
                                <div class="form-group">
                                    <label for="code postal">Code postal</label>
                                    <input type="number" name="cp" class="form-control"  >
                                </div><!-- /form-group -->
                                <div class="form-group">
                                    <label for="ville">Ville</label>
                                    <input type="text" name="ville" class="form-control"  >
                                </div><!-- /form-group -->
                            </div><!-- /adressEnvoi -->

                        </div><!-- /checkbox -->
                        <div class="form-group">
                            <label for="centre">Centre *</label>
                            <select class="form-control input-lg" name="centre">
                                <?php foreach($_SESSION['centre'] as $nom):  ?>
                                    <option  value="<?php echo $nom['id']."/".$nom['name']; ?>"><?php echo $nom['name']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div><!-- /form-group -->
                        <input type="submit" class="btn btn-primary" name="valider" value="Envoyer"><br><br>
                    </form>
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /contact -->
</div><!-- /container_brochure -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>