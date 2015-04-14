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

            $centre='Galien ' .$_GET['centreJPO'];
            $jpoDate=$_GET['jpoDate'];
            $idjpo=$_GET['idjpo'];
            $date = new DateTime($jpoDate);    
      
    ?>
    <!--
    Affiche une image de présentation pour la page
     --> 
    <div class="hidden-xs hidden-sm img_prez img_prez_aplat img_prez_incurve">
        <img class="back_img" src="<?php echo $post_thumbnail_url; ?>" alt="">
    </div>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs hidden-sm picto_title_doc">
                    <h1 class="medium">Journée portes ouvertes du <?php echo $date->format('d/m/Y'); ?></h1>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-6 col-sm-offset-1">
                    <form method="post" action="#">
                        <h2 class="large">Journée portes ouvertes du <?php echo $date->format('d/m/Y'); ?></h2>
                          <?php
                                //affichage message d'erreur
                                if (!empty($_GET['erreur']))
                                {
                                         switch ($_GET['erreur'])
                                        {
                                            case 'divers' :
                                                  echo '<div class="alert red">';
                                                echo $_GET['mess'];
                                                  echo '</div>';
                                                break;
                                            case 'email':
                                                  echo '<div class="alert red">';
                                                echo 'L\'adresse e mail est invalide';
                                                  echo '</div>';
                                                 break;
                                            case 'success':
                                                  echo '<div class="alert">';
                                                echo 'Votre inscription a bien été enregistré';
                                                  echo '</div>';
                                                break;
                                        }
                                       
                                         
                                } ?>
                       <?php wp_nonce_field('jpo', 'inscriptionJPO'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
                       <input type="number" name="idJpo" value="<?php echo $idjpo; ?>" hidden>
                       <input type="text" name="date" value="<?php echo $jpoDate; ?>" hidden>
                        <div class="form-group">
                            <label for="nom">Nom *</label>
                            <input type="text" name="nom" class='form-control' id="firstname" value="<?php echo $_POST['nom'] ;?>"  maxlength="100" required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="prenom">Prénom *</label>
                            <input type="text" name="prenom" class="form-control" id="exampleInputFirstname" value="<?php echo $_POST['prenom'] ;?>"  maxlength="100" required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="emai1">Email *</label>
                            <input type="email" name="email" class="form-control" id="email"  value="<?php echo $_POST['email'] ;?>"  maxlength="200" required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="accompagnants">Nombre d'accompagnants *</label>
                            <input type="text" name="accompagant" class="form-control"  value=0 required>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label for="centres">Centre</label>
                            <select class="form-control input-lg" name="centre" >
                                <?php foreach($_SESSION['centre'] as $nom):  ?>
                               <?php  var_dump($nom['name']);
                                   var_dump($centre); ?>
                                    <?php if($nom['name']==$centre): ?>
                                <option  value="<?php echo $nom['id']; ?>" selected="selected" ><?php echo $nom['name']; ?></option>
                                    <?php else: ?>
                                        <option  value="<?php echo $nom['id']; ?>"disabled="true"><?php echo $nom['name']; ?></option>
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