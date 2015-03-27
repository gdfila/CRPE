<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script>(function(){document.documentElement.className='js'})();</script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.2.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/centre.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/concours.css">
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.corr.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/crpe.css">


    <?php wp_head(); ?>
</head>

<body>

<!--NAV-->

    <!--header class="nav_header nav_header_fixed container-fluid"-->
    <header class="nav_header hidden-xs">
        <div class="top_nav">
            <div class="container">
                <p>formation au concours de recrutement de professeur des écoles</p>
            </div>
        </div>
        <div class="content_nav">
            <div class="container">
                <a class="logo_nav" href="/galien_crpe/">
                    <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" />
                </a>
                <nav>
                    <?php
                        wp_nav_menu([ 
                        'theme_location' => 'nav',
                        'container' => 'navbar-header', ]);
                    ?>
                </nav>
            </div>
        </div>
    </header>
    <div id="action">
        <a href="#" data-toggle="modal" data-target="#form">Rappelez-moi</a>
        <a href="/galien_crpe/contact/contact">Contact</a>
        <a href="/galien_crpe/contact/brochure">Brochure</a>
        <a href="http://www.studius.fr">Studius</a>
    </div>
    <!-- 
    Modal : système de pop-up de bootstrap
    -->
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Formulaire de contact</h4>
                </div>
                <div class="modal-body"> 
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

                        <?php
                            $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                            $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                    ?>
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
                        </div>
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
                                     <input type="text" name="adress" class="form-control" >
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
                    <!-- <div class="col-sm-6 form_right">
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
                    </div><br><br><br> -->
            </div>
        </div>
    </div>