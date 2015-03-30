<?php
/**
 * Template Name: rappel
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
                <h1>Nous vous rappelons</h1>
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
                <div class="row">
                       <div class="col-sm-6 form_left">
                                <!----------------------------------- formulaire ---------------------------->
                                <form method="post" action="#">
                                       <?php wp_nonce_field('rappel', 'rappel-verif'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
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
                                <input type="email" name="email" class="form-control" id="email" required >
                            </div>
                            <div class="form-group">
                                <label for="telephone">Télephone *</label>
                                <input type="tel" name="telephone" class="form-control" placeholder="exemple: 0102030405" required>
                            </div>  
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
                                    <label for="centres">Centre</label>
                                    <select class="form-control input-lg" name="centre">

                                         <?php foreach($_SESSION['centre'] as $nom):  ?>
                                          <option  value="<?php echo $nom['id']; ?>"><?php echo $nom['name']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                 </div><input type="submit" class="btn btn-lg btn-primary" name="valider" value="Envoyer"><br><br>
                                </form > 
                                <!------------------------- fin form -------->
                       </div>
           </div>
       </div>
  </section>
<?php get_footer(); ?>
