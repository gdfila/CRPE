<?php
/*
 * Template Name: brochure
 */
?>
<?php
include_once "api/Thalamus_init.php";

// Liste des centres
//$centersList = $client->call(array("service" => "center","method" => "centersList"));
$centersList = $client->call(array("service" => "formation","method" => "centersListByFormation","formationId" => 400));
// plage horaire
$horaireList = $client->call(array("service" => "prospect","method" => "callBackTimesList"));

$data=[];
   if(!empty($centersList))
 {
     foreach ($centersList->datas as $centre)
        {
                     if (empty($centre))
                {   
                    break ;
                 }
                    array_push($data, array( "name"=>$centre->name ,"id"=>$centre->id));
           }
 }
 
 ?>
<?php get_header(); ?>

<?php
    $post_thumbnail_id = get_post_thumbnail_id($post->ID);
    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>

<div class="content">
    
    <div class="container-fluid content-background" style="background: url(<?php echo $post_thumbnail_url; ?>) no-repeat; background-size: cover;"></div>
 
 <?php 

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
    
<div class="row">
      <div class="col-sm-6 form_left">
       
            <form method="post" action="#">
                     <?php wp_nonce_field('brochure', 'brochure-verif'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputName1" >
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputFirstname" >
                </div>
                <div class="form-group">
                    <label for="Email1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
                <div class="form-group">
                    <label for="telephone">Télephone</label>
                    <input type="tel" name="telephone" class="form-control" placeholder="exemple: 0102030405">
                </div>  
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rappel" id='rappel'> Demander à être rappelé
                    </label><br>
                            <!-- plage horaire -->
                            
                                <div class="form-group horaireHidden"  id="horaire" >
                                    <label for="exampleInputPassword1">Plage horaire souhaitée</label>
                                    <select class="form-control input-lg" name="horaire">
                                         <?php foreach($horaireList as $horaire):  ?>
                                                   <?php foreach($horaire as $heure):  ?>
                                                        <option  value="<?php echo $heure->id; ?>"><?php echo $heure->name; ?></option>
                                                    <?php endforeach ?>
                                        <?php endforeach ?>
                                    </select>
                               </div>
                    <label>
                        <input type="checkbox"  name="brochure" id="brochure"> Recevoir la brochure par courrier
                   
                </div>
                      <!--adresse d'envoie-->
                    <div  id="adressEnvoi" class="adrEnvoiHidden">
                                <div class="form-group">
                                      <label for="adress">Adresse</label>
                                 <input type="text" name="adress" class="form-control" " >
                             </div>
                             <div class="form-group">
                                 <label for="code postal">Code postal</label>
                                 <input type="number" name="cp" class="form-control"  >
                             </div>
                             <div class="form-group">
                                 <label for="ville">Ville</label>
                                 <input type="text" name="ville" class="form-control"  >
                             </div>
                    </div> 
                     
                <div class="form-group">
                    <label for="centre">Centre</label>
                    <select class="form-control input-lg" name="centre">
                     
                         <?php foreach($data as $nom):  ?>
                         
                     
                        <option  value="<?php echo $nom['id']."/".$nom['name']; ?>"><?php echo $nom['name']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                
                
                <input type="submit" class="btn btn-lg btn-primary" name="valider" value="Envoyer"><br><br>
            </form>
        </div>
</div>

  <div class="col-sm-6 form_right">
  <br>
  <div class:"int_form_left">
    <h3>Vous avez une question ?</h3><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptas rerum pariatur eum eos      dolor cum sed aliquam, unde rem enim totam, perspiciatis voluptatem quas eaque. Cum magni, assumenda sint.      </p><br>
    <h3>Vous etes intéressez par un Pack ?</h3><br>
    <div class:"btn_pack_right" >
      <button class="btn  btn-btn  text-uppercase">Pack Training</button>
   
    
      <button class="btn  btn-btn text-uppercase">Pack Complet</button>
    </div>
    <br><br>
    <h3>Souhaitez vous un rendez vous ?</h3><br>
      <button class="btn  btn-btn  text-uppercase">Candidature</button>
  </div>
  </div><br><br><br>

<?php// endwhile;else :?>
        <!--<p>desolé pas de centres pour l'instant...</p>-->
<?php //endif; ?>

<?php get_footer(); ?>