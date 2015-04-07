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
    <div class="hidden-xs img_prez img_prez_aplat img_prez_incurve">
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
                case 'courrier' :
                    echo 'Votre adresse pour l\'envoie de la brochure est imcomplete.';
                    break;
                case 'brochure':
                      echo $_GET['mess'];
                    break;
                case 'rappel' :
                      echo $_GET['mess'];
                     break;
                  case 'vide' :
                    echo 'merci de remplir tous les champs suivie d\'un *';
                    break;
            }
            echo '</div>';
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
    
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs hidden-sm picto_title_doc">
                    <h1 class="medium">Téléchargez les brochures d’information Galien</h1>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-6 col-sm-offset-1">
                    <form method="post" action="#">
                        <h2 class="large">Téléchargez les brochures d’information Galien</h2>
                        <?php wp_nonce_field('brochure', 'brochure-verif'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
                        <div class="form-group">
                            <label for="nom">Nom *</label>
                            <input type="text" name="nom" class="form-control" id="exampleInputName1" >
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="prenom">Prénom *</label>
                            <input type="text" name="prenom" class="form-control" id="exampleInputFirstname" >
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="Email1">Email *</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="telephone">Télephone</label>
                            <input type="tel" name="telephone" class="form-control" placeholder="exemple: 0102030405">
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