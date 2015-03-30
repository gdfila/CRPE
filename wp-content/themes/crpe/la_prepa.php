<?php
/*
 * Template Name: le crpe
 */
?>

<!--
Récuperation du header
 -->
<?php get_header(); ?>

<div id="container_prepa" class="top_content">

    <?php
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
    ?>

    <!--
    Affiche une image de présentation pour la page
     --> 
    <div class="img_prez img_prez_aplat img_prez_incurve">
        <img src="<?php echo $post_thumbnail_url; ?>">
    </div>

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <h1 class="h1_tall">Notre expérience</h1>
            <p>Comme tout changement, le passage du lycée à la fac est souvent compliqué (nouvelles méthodes de travail, échéance très rapide des concours, niveau d’études et de connaissances de plus en plus élevé, sélection de plus en plus sévère, etc.). Et ça, Galien l’a bien compris. C’est pourquoi, depuis près de 30 ans, Galien accompagne les étudiants qui souhaitent réussir leur concours. Galien est aujourd’hui LE spécialiste dans la préparation des concours PACES, paramédicaux et sociaux.</p>
            <h2 class="h2_medium">Un cadre propice</h2>
            <p>Les centres Galien sont situés à proximité de votre fac, très accessibles en transport en commun afin de vous faire gagner du temps dans vos révisions. Les horaires de nos cours sont établis en fonction de ceux de votre fac.</p>
            <h2 class="h2_medium">L'encadrement</h2>
            <p>Chaque responsable de centre Galien, secondé par une équipe administrative et pédagogique, est garant de la qualité pédagogique. Il est là pour vous et vos parents tout au long de l’année. Il vous accompagne et répond à vos questions pour que vous ne soyez jamais seul face à vos difficultés.</p>
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les témoignages sous slider
     -->
    <section class="temoignages">
        <div class="container">
            <h1 class="h1_medium">Notre équipe pédagogique</h1>
            <div class="row">
                
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les cours
     -->
    <section class="classes">
        <div class="container">
            <h1 class="h1_tall">Le déroulé des cours</h1>
            <p>Le programme est élaboré par les enseignants spécialistes de la discipline. Il est conforme aux épreuves du concours et aux préconisations ministérielles inscrites dans le décret n°2013-768 du 23 août 2013.</p>
            <h2 class="h2_medium">Les horaires</h2>
            <p>Nous vous proposons une préparation intensive de 90 heures en deux temps. Les cours ont lieu le samedi en petits effectifs. Votre formation s’étale donc sur 30 semaines, et comprend au total 240 heures de cours en face à face avec des enseignants, auxquelles s’ajoutent 32 heures de concours blancs. </p>
        </div><!-- /container -->
    </section> 
    

    <!--
    Section présentant les épreuves
     -->
    <section class="admission">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="h2_medium">Epreuve d'admissibilité</h2>
                    <p>3 parties - 4 heures d’épreuves</p>
                    <div class="col-sm-6">
                        <div class=" cercle-3">
                            <p><span>40 points</span></p>
                        </div>
                        <p><strong>Français</strong><br />
                        préparation aux 3 épreuves<br />
                        - 11 points -</p>
                        <p>connaissance de la langue<br />
                        - 11 points -</p>
                        <p>analyse d'un dossier<br />
                        - 13 points -</p>
                    </div><!-- /col-sm-3 -->
                    <div class="col-sm-6">
                        <div class="cercle-3">
                            <p><span>40 points</span></p>
                        </div>
                        <p><strong>Français</strong><br />
                        préparation aux 3 épreuves<br />
                        - 11 points -</p>
                        <p>connaissance de la langue<br />
                        - 11 points -</p>
                        <p>analyse d'un dossier<br />
                        - 13 points -</p>
                    </div><!-- /col-sm-3 -->
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6">
                    <h2 class="h2_medium">Epreuve d'admission</h2>
                    <p>2 parties - 3 heures d’épreuves</p>
                    <div class="col-sm-6">
                        <div class=" cercle-3">
                            <p><span>60 points</span></p>
                        </div>
                        <p><strong>Français</strong><br />
                        préparation aux 3 épreuves<br />
                        - 11 points -</p>
                        <p>connaissance de la langue<br />
                        - 11 points -</p>
                        <p>analyse d'un dossier<br />
                        - 13 points -</p>
                    </div><!-- /col-sm-3 -->
                    <div class="col-sm-6">
                        <div class="cercle-3">
                            <p><span>100 points</span></p>
                        </div>
                        <p><strong>Français</strong><br />
                        préparation aux 3 épreuves<br />
                        - 11 points -</p>
                        <p>connaissance de la langue<br />
                        - 11 points -</p>
                        <p>analyse d'un dossier<br />
                        - 13 points -</p>
                    </div><!-- /col-sm-3 -->
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section> 

    <!--
    Section présentant les cours
     -->
    <section class="classes">
        <div class="container">
            <h1 class="h1_tall">Le déroulé des cours</h1>
            <p>Le programme est élaboré par les enseignants spécialistes de la discipline. Il est conforme aux épreuves du concours et aux préconisations ministérielles inscrites dans le décret n°2013-768 du 23 août 2013.</p>
            <h2 class="h2_medium">Les horaires</h2>
            <p>Nous vous proposons une préparation intensive de 90 heures en deux temps. Les cours ont lieu le samedi en petits effectifs. Votre formation s’étale donc sur 30 semaines, et comprend au total 240 heures de cours en face à face avec des enseignants, auxquelles s’ajoutent 32 heures de concours blancs. </p>
        </div><!-- /container -->
    </section>

</div>
    
<?php get_footer(); ?>
