<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Le concours de recrutement des professeurs des écoles</title>
    <meta name="description" content="Le concours de recrutement des professeurs des écoles">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script>(function(){document.documentElement.className='js'})();</script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.2.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.corr.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/crpe.css">

    <?php wp_head(); ?>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header class="nav_header">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo_nav" href="/galien_crpe/">
                <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" />
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="hidden-xs top_nav">
                <div class="container">
                    <h1 class="x-small">formation au concours de recrutement de professeur des écoles</h1>
                </div><!-- /container -->
            </div><!-- /top_nav -->
            <div class="content_nav">
                <div class="container">
                    <a class="hidden-xs logo_nav" href="/galien_crpe/">
                        <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" />
                    </a>
                    <nav>
                        <?php
                            wp_nav_menu([ 
                            'theme_location' => 'nav',
                            'container' => 'navbar-header', ]);
                        ?>
                    </nav>
                </div><!-- /container -->
            </div><!-- /content_nav -->
        </div>
    </header>
    <ul id="action">
        <li data-toggle="modal" data-target="#modalRappel" data-whatever="rappelez-moi">Rappelez-moi</li>
        <li data-toggle="modal" data-target="#modalContact" data-whatever="contact">Contact</li>
        <li data-toggle="modal" data-target="#modalBrochure" data-whatever="telecharger brochure">Brochure</li>
        <li><a href="http://www.studius.fr" target="_blank">Studius</a></li>
    </ul><!-- /action -->

    <!-- 
    Modal : Pop up rappelez-moi
    -->
   <div class="modal fade" id="modalRappel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Fermer &times;</span></button>
                </div><!-- /modal-header -->
                <div class="modal-body">
                    <?php
                        //affichage message d'erreur
                        if (!empty($_GET['erreur']))
                        {
                            echo '<div class="alert">';
                         
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
                                    case 'success':
                                         echo '<div class="alert">';
                                        echo 'Votre demande a bien été enregistré';
                                         echo '</div>';
                                        break;
                                 }
                                 
                        } ?>
                    <div class="row">
                        <div class="col-sm-3 hidden-xs hidden-sm picto_title_doc">
                        </div><!-- /col-sm-3 -->
                        <form class="col-sm-7 col-sm-offset-1" method="post" action="#">
                            <h2 class="medium" id="exampleModalLabel">Laissez vos coordonnées, Cours Galien vous rappelle</h2>
                            <?php wp_nonce_field('rappel', 'rappel-verif'); ?>   <!--pour verifier que les reponse du formulaire proviennet bien de notre site -->
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

                             <!--plage horaire--> 
                            <label for="plage horaire">Plage horaire souhaitée</label>
                            <select class="form-control input-lg" name="horaire">
                                 <?php foreach($_SESSION['horaireList'] as $horaire):  ?>
                                           <?php  foreach($horaire as $heure):  ?>
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
                            </div>
                            <input type="submit" class="btn btn-lg btn-primary" name="valider" value="Envoyer"><br><br>
                        </form >
                    </div><!-- /row -->
                </div><!-- /modal-body -->
            </div><!-- /modal-content -->
        </div><!-- /modal-dialog -->
    </div><!-- /modal -->

     
    <!--Modal : Pop up contact-->
    
    <div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Fermer &times;</span></button>
                </div><!-- /modal-header -->
                <div class="modal-body">
                    <?php
                     //affichage message d'erreur
                    if (!empty($_GET['erreur']))
                    {
                        switch ($_GET['erreur'])
                            {
                                case 'telephone' :
                                     echo '<div class="alert red">';
                                    echo 'Vous devez indiquer un numéro de téléphone pour être rappeler.';
                                    echo '</div>';
                                    break;
                                case 'rappel' :
                                     echo '<div class="alert red">';
                                    echo $_GET['mess'];
                                    echo '</div>';
                                    break;
                                case 'success':
                                    echo '<div class="alert">';
                                    echo 'Votre demande a bien été enregistré';
                                    echo '</div>';
                                    break;
                            }
                          
                    } ?>
                    <div class="row">
                        <div class="col-sm-3 hidden-xs hidden-sm picto_title_doc">
                        </div><!-- /col-sm-3 -->
                        <form class="col-sm-7 col-sm-offset-1" method="post" action="#">
                            <h2 class="medium" id="exampleModalLabel">Contactez-nous</h2>
                            <?php wp_nonce_field('contact', 'contact-verif'); ?>  <!-- pour verifier que les reponse du formulaire proviennet bien de notre site -->
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
                                <label for="message">Message</label>
                                <textarea name="message"   rows="2" cols="85"></textarea>
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
                        </form > 
                    </div><!-- /row -->
                </div><!-- /modal-body -->
            </div><!-- /modal-content -->
        </div><!-- /modal-dialog -->
    </div><!-- /modal -->

     
    <!--Modal : Pop up brochure-->
    
    <div class="modal fade" id="modalBrochure" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Fermer &times;</span></button>
                </div><!-- /modal-header -->
                <div class="modal-body">
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
                                case 'courrier' :
                                    echo '<div class="alert red">';
                                    echo 'Votre adresse pour l\'envoie de la brochure est incomplete.';
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
                    <div class="row">
                        <div class="col-sm-3 hidden-xs hidden-sm picto_title_doc">
                        </div>
                        <form class="col-sm-7 col-sm-offset-1" method="post" action="#">
                            <h2 class="medium" id="exampleModalLabel">Téléchargez les brochures d’information Galien</h2>
                            <?php wp_nonce_field('brochure', 'brochure-verif'); ?>   pour verifier que les reponse du formulaire proviennet bien de notre site 
                            <div class="form-group">
                                <label for="nom">Nom *</label>
                                <input type="text" name="nom" class="form-control" id="exampleInputName1" >
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom *</label>
                                <input type="text" name="prenom" class="form-control" id="exampleInputFirstname" >
                            </div>
                            <div class="form-group">
                                <label for="Email1">Email *</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div class="form-group">
                                <label for="telephone">Télephone</label>
                                <input type="tel" name="telephone" class="form-control" placeholder="exemple: 0102030405">
                            </div>  
                            <div class="checkbox">
                                <p><label>
                                    <input type="checkbox" name="rappel" id='rappel' class="rappel_effect"> Demander à être rappelé
                                </label></p>

                                 plage horaire 
                                <div id="horaire" class="form-group slide_rappel">
                                    <label for="horaire">Plage horaire souhaitée</label>
                                    <select class="form-control input-lg" name="horaire">
                                         <?php foreach($_SESSION['horaireList'] as $horaire):  ?>
                                                   <?php foreach($horaire as $heure):  ?>
                                                        <option  value="<?php echo $heure->id; ?>"><?php echo $heure->name; ?></option>
                                                    <?php endforeach ?>
                                        <?php endforeach ?>
                                    </select>
                               </div>

                            </div>
                            <div class="checkbox">
                                <p><label>
                                    <input type="checkbox" name="brochure" id="brochure" class="brochure_effect"> Recevoir la brochure par courrier
                                </label></p>

                                adresse d'envoie
                                <div id="adressEnvoi" class=" slide_brochure">
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

                            </div>
                            <div class="form-group">
                                <label for="centre">Centre *</label>
                                <select class="form-control input-lg" name="centre">
                                    <?php foreach($_SESSION['centre'] as $nom):  ?>
                                        <option  value="<?php echo $nom['id']."/".$nom['name']; ?>"><?php echo $nom['name']; ?></option>
                                    <?php   endforeach ?>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" name="valider" value="Envoyer"><br><br>
                        </form>
                    </div><!-- /row -->
                </div><!-- /modal-body -->
            </div><!-- /modal-content -->
        </div><!-- /modal-dialog -->
    </div><!-- /modal -->