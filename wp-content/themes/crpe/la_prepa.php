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
    <div class="hidden-xs hidden-sm img_prez img_prez_aplat img_prez_incurve">
        <img class="back_img_prepa" src="<?php echo $post_thumbnail_url; ?>" alt="">
    </div><!-- /img_prez -->

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <div class="row">
                <h1 class="x-large">Pourquoi venir se préparer au Cours Galien ?</h1>
                <p class="medium">Découvrez les raisons principales : une expérience de plus de 20 ans dans la préparation aux concours. Une méthode qui fait ses preuves chaque année autour des marches de la réussite. Une équipe d’enseignants spécialiste des matières enseignées. Un encadrement personnalisé. Une organisation parfaitement adaptée à vos horaires. Et un espace de vie propice aux études.</p>
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /accroche -->

    <!--
    Section présentant le savoir faire de Galien
     -->
    <section class="savoir_faire prez_com">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 prez_com_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/experience.jpg" alt="experience">
                    <h2 class="small"><strong>L'expérience</strong></h2>
                    <p class="prez_com_texte">Le défi que les cours Galien relèvent chaque jour repose sur des valeurs qui sont fondamentales à l’accomplissement de notre mission : celle de vous accompagner tout au long de cette année dans votre préparation aux concours. Ces valeurs sont portées par chaque membre des Cours Galien, professeurs, équipes administratives, dirigeants, et aussi et surtout les étudiants.</p>
                    <span class="lire_suite">Lire la suite</span>
                    <span class="lire_moins">Réduire</span>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 prez_com_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/methode.jpg" alt="la méthode">
                    <h2 class="small"><strong>La méthode</strong></h2>
                    <p class="prez_com_texte">Notre méthode s’articule autour des marches de la réussite. Elle s’accompagne de nombreux outils  mis à votre disposition pour vous accompagner vers la réussite : Evaluations régulières pour valider vos acquis Mises en situation réelles et sous forme de concours blancs Classement par rapport aux autres étudiants Corrections interactives et phase d’approfondissement Supports pédagogiques : programmes pédagogiques conçus pour présenter les concours (spécificités et réformes prises en compte) ; polycopiés et résumés de cours ; fiches de synthèse ; annales e-outils : espace web dédié ; QCM interactifs ; annales ; plannings ; mail dédié ; facebook… services « plus Galien » : salles de travail 7j/7 ; wifi ; espace cafet’ ; calendrier des dates des concours…</p>
                    <span class="lire_suite">Lire la suite</span>
                    <span class="lire_moins">Réduire</span>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 prez_com_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/encadrement.jpg" alt="l'encadrement">
                    <h2 class="small"><strong>L'encadrement</strong></h2>
                    <p class="prez_com_texte">Chaque enseignant des Cours Galien est spécialiste de la matière qu’il enseigne, et connait nécessairement les exigences du concours. Il vous aide ainsi à maîtriser les durées et la diversité des épreuves, les difficultés, les pièges à éviter et les astuces qui feront la différence.</p>
                    <span class="lire_suite">Lire la suite</span>
                    <span class="lire_moins">Réduire</span>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 prez_com_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/pedago.jpg" alt="face à face pédgogique">
                    <h2 class="small"><strong>face à face pédagogique</strong></h2>
                    <p class="prez_com_texte">Soucieux de vous apporter un environnement de travail propice à la réussite de votre concours, les Cours Galien mettent à votre disposition des salles d’études. Vous bénéficiez d’un fonds documentaire pour continuer à vous entraîner après les cours : annales, ouvrages de référence… Des espaces détente, foyer et cuisine sont aussi des lieux d’échange avec les profs. Nos centres sont aussi équipés de wifi.</p>
                    <span class="lire_suite">Lire la suite</span>
                    <span class="lire_moins">Réduire</span>
                </div><!-- /col-sm-3 -->
            </div><!-- /row -->
            <hr><!-- /separation -->
        </div><!-- /container -->
    </section><!-- /savoir_faire -->

    <!--
    Section présentant les témoignages sous slider
     -->
    <section class="pedagogie">
        <div class="container outil_pedagogique">
            <h1 class="large">Nos outils pédagogiques</h1>
            <div class="row">
                <div class="col-sm-4 outil_pedagogique_container">
                    <h2 class="small"><strong><a class="btn btn-primary" href="http://www.studius.fr">Studius</a></strong></h2>
                    <p class="savoir_faire_texte">Studius, l'espace étudiant du Cours Galien, est une véritable plateforme pédagogique et interactive qui vous accompagne tout au long de l'année. Il vous assure d'être connecté à tout moment à vos notes, classements et plannings. Il vous permet également d'accéder à votre espace d'E-learning.</p>
                </div><!-- /col-sm-4 -->
                <div class="col-sm-4 outil_pedagogique_container">
                    <h2 class="small"><strong><a class="btn btn-primary" href="#">Nos Supports</a></strong></h2>
                    <p class="savoir_faire_texte">Nos supports sont des compléments indispensables à votre préparation. Des tableaux récapitulatifs et fiches de synthèse sont réalisés par nos enseignants afin de vous faire gagner en temps et efficacité.</p>
                </div><!-- /col-sm-4 -->
                <div class="col-sm-4 outil_pedagogique_container">
                    <h2 class="small text_normal"><strong><a class="btn btn-primary" href="http://coursgalien.kreactive.eu/#/home">Le sMOOC</a></strong></h2>
                    <p class="savoir_faire_texte">Le sMOOC* Galien est une pédagogie innovante issue des plus grandes universités américaines. C'est un système d'apprentissage en ligne. Son objectif : vous faire acquérir une méthode de travail efficace en 7 étapes.</p>
                </div><!-- /col-sm-4 -->
            </div><!-- /row -->
        </div><!-- /container -->
        <div class="container equipe_temoignage">
            <div class="row">
                <div class="col-sm-3 equipe_temoignage_img">
                    <div>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/467694-emilie-clement.jpg" alt="Photo de ...">
                    </div>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-9">
                    <div>
                        <p class="equipe_temoignage_title"><strong>Mme Gauthier</strong> - Institutrice pendant 12 ans et diplômée en Lettres et en linguistique.</p>
                        <blockquote>
                            <p>Je fournis à mes étudiants tous les outils et supports nécessaires pour qu’ils puissent travailler efficacement et développer une véritable culture de l’école. Notre objectif commun est de revoir les bases, d’approfondir les notions et de nous familiariser avec les concepts nouveaux, tout en tenant compte des acquis, des rythmes et de la personnalité de chacun, et en nous appuyant sur mes compétences disciplinaires et mes expériences de classe auprès des enfants, autant d’éléments indispensables pour suivre avec le plus de bénéfice possible une préparation intense, des contenus lourds et un rythme soutenu.</p>
                        </blockquote>
                    </div>
                </div><!-- /col-sm-9 -->
            </div><!-- /row -->
            <hr><!-- /separation -->
        </div><!-- /container -->
    </section><!-- /pedagogie -->

  <!--
    Section présentant les formuless de l'école
    -->
    <section class="formules">
        <div class="container">
            <div class="row">
                <h1 class="large"><?php the_field('titre_formules'); ?>Decouvrez nos formules</h1>
                <div class="col-sm-6 formules_container">
                    <div>
                        <h2 class="medium"><?php the_field('titre_1ere_formule'); ?>Pack <strong>entrainement</strong></h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                        <p class="presentation-pack"><?php the_field('1ere_formule_1er_paragraphe'); ?>Destiné à ceux qui préparent seul le concours mais qui souhaite s'entraîner en conditions réelles aux épreuves d'admissibilité.</p>
                        <p class="tarif"><?php the_field('1ere_formule_prix'); ?>32h / 400€</p>
                        <div class="info">
                            <p class="button active"><em>En savoir <span>+</span></em></p>
                            <div class="info_sup">
                                <p><?php the_field('1ere_formule_savoir_+'); ?>- 4 concours blancs complets en conditions réelles (32h)</p>
                                <p>- Copies corrigées et annotées de façon personnalisée</p>
                                <p>- Parrainage téléphonique et électronique par des professeurs spécialistes des matières</p>
                            </div><!-- /info_sup -->
                        </div><!-- /info -->
                        <button class="btn btn-primary" data-toggle="modal" data-target="#signin_form">Inscrivez-vous</button>
                    </div>
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6 formules_container">
                    <div>
                        <h2 class="medium"><?php the_field('titre_2eme_formule'); ?>Pack <strong>complet</strong></h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/DSC_0191-2.jpg" alt="">
                        <p class="presentation-pack"><?php the_field('1ere_formule_1er_paragraphe'); ?>Recommandé pour ceux qui veulent une préparation complète aux épreuves d'admissibilité et d'admission.</p>
                        <p class="tarif"><?php the_field('1ere_formule_prix'); ?>272h / 1950€</p>
                        <div class="info">
                            <p class="button active"><em>En savoir <span>+</span></em></p>
                            <div class="info_sup">
                                <p><?php the_field('2eme_formule_savoir_+'); ?>- Cours le samedi en petits effectifs sur l'ensemble des matières (240h)</p>
                                <p>- 4 concours blancs complets en conditions réelles (32h)</p>
                                <p>- Copies corrigées et annotées de façon personnalisée + corrections détaillées faites en cours</p>
                                <p>- Module de remise à niveau en français et en mathématiques transmis pendant l'été</p>
                            </div><!-- /info_sup -->
                        </div><!-- /info -->
                        <button class="btn btn-primary" data-toggle="modal" data-target="#form">Inscrivez-vous</button>
                    </div>
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /formules -->
</div><!-- /container_prepa -->

<!--
Récuperation du footer
 -->  
<?php get_footer(); ?>