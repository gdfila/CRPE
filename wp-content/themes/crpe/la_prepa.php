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
        <!-- <img src="<?php echo $post_thumbnail_url; ?>"> -->
        <img class="back_img" src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
    </div><!-- /img_prez -->

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <div class="row">
                <h1 class="h1_tall">Pourquoi venir se préparer aux Cours Galien ?</h1>
                <p class="h2_medium">Découvrez les raisons principales : Une expérience de plus de 20 ans dans la préparation de aux concours. Une méthode qui fait ses preuves chaque année autour des marches de la réussite. Une équipe d’enseignants spécialiste des matières enseignées. Un encadrement personnalisé. Une organisation parfaitement adaptée à vos horaires. Et un espace de vie propice aux études.</p>
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /accroche -->

    <!--
    Section présentant le savoir faire de Galien
     -->
    <section class="savoir_faire">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 savoir_faire_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/fotolia_51467210.jpg" alt="">
                    <h3 class="h3_medium"><strong>L'expérience</strong></h3>
                    <p class="savoir_faire_texte">Le défi que les cours Galien relèvent chaque jour repose sur des valeurs qui sont fondamentales à l’accomplissement de notre mission : celle de vous accompagner tout au long de cette année dans votre préparation aux concours. Ces valeurs sont portées par chaque membre des Cours Galien, professeurs, équipes administratives, dirigeants, et aussi et surtout les étudiants.</p>
                    <span class="lire_suite">Lire la suite</span>
                    <span class="lire_moins">Réduire</span>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 savoir_faire_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/130783-fotolia-56047028-s-_x450.jpg" alt="">
                    <h3 class="h3_medium"><strong>La méthode</strong></h3>
                    <p class="savoir_faire_texte">Notre méthode s’articule autour des marches de la réussite. Elle s’accompagne de nombreux outils  mis à votre disposition pour vous accompagner vers la réussite : Evaluations régulières pour valider vos acquis Mises en situation réelles et sous forme de concours blancs Classement par rapport aux autres étudiants Corrections interactives et phase d’approfondissement Supports pédagogiques : programmes pédagogiques conçus pour présenter les concours (spécificités et réformes prises en compte) ; polycopiés et résumés de cours ; fiches de synthèse ; annales e-outils : espace web dédié ; QCM interactifs ; annales ; plannings ; mail dédié ; facebook… services « plus Galien » : salles de travail 7j/7 ; wifi ; espace cafet’ ; calendrier des dates des concours…</p>
                    <span class="lire_suite">Lire la suite</span>
                    <span class="lire_moins">Réduire</span>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 savoir_faire_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/fotolia_54990513.jpg" alt="">
                    <h3 class="h3_medium"><strong>L'encadrement</strong></h3>
                    <p class="savoir_faire_texte">Chaque enseignant des Cours Galien est spécialiste de la matière qu’il enseigne, et connait nécessairement les exigences du concours. Il vous aide ainsi à maîtriser les durées et la diversité des épreuves, les difficultés, les pièges à éviter et les astuces qui feront la différence.</p>
                    <span class="lire_suite">Lire la suite</span>
                    <span class="lire_moins">Réduire</span>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 savoir_faire_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/fotolia_44583729.jpg" alt="">
                    <h3 class="h3_medium"><strong>Le cadre</strong></h3>
                    <p class="savoir_faire_texte">Soucieux de vous apporter un environnement de travail propice à la réussite de votre concours, les Cours Galien mettent à votre disposition des salles d’études. Vous bénéficiez d’un fonds documentaire pour continuer à vous entraîner après les cours : annales, ouvrages de référence… Des espaces détente, foyer et cuisine sont aussi des lieux d’échange avec les profs. Nos centres sont aussi équipés de wifi.</p>
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
            <h1 class="h1_medium">Nos outils pédagogique</h1>
            <div class="row">
                <div class="col-sm-4 outil_pedagogique_container">
                    <h3 class="h3_medium"><strong><a class="btn btn-primary" href="#">Studius</a></strong></h3>
                    <p class="savoir_faire_texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vel, in veritatis quisquam architecto officia quidem officiis natus excepturi quis sequi et, dignissimos consectetur laboriosam harum minus consequuntur iste eaque!</p>
                </div><!-- /col-sm-4 -->
                <div class="col-sm-4 outil_pedagogique_container">
                    <h3 class="h3_medium"><strong><a class="btn btn-primary" href="#">Nos Supports</a></strong></h3>
                    <p class="savoir_faire_texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi odio, ullam sit deserunt. Labore voluptate incidunt, quam itaque eligendi perspiciatis odit voluptas, pariatur at magni earum exercitationem ipsum. Reiciendis, corporis.</p>
                </div><!-- /col-sm-4 -->
                <div class="col-sm-4 outil_pedagogique_container">
                    <h3 class="h3_medium h3_text_normal"><strong><a class="btn btn-primary" href="#">Le sMOOC</a></strong></h3>
                    <p class="savoir_faire_texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem eum non rem deserunt tempore reiciendis quidem facilis nulla odio alias iure repellendus praesentium, ad nobis dolor commodi asperiores ullam aut!</p>
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
                <h1 class="h1_medium">Decouvrez nos formules</h1>
                <div class="col-sm-6 formules_container">
                    <div>
                        <h2 class="h2_medium">Pack entrainement</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/049_MG_8616.jpg" alt="">
                        <p>4 concours blancs</p>
                        <p><strong>Epreuve</strong><br />en conditions réelles</p>
                        <p>000H/400€</p>
                        <div class="info">
                            <p class="button active"><em>En savoir <span>+</span></em></p>
                            <div class="info_sup">
                                <p>Voila des infos supplémentaires</p>
                            </div><!-- /info_sup -->
                        </div><!-- /info -->
                        <button class="btn btn-primary center-block" data-toggle="modal" data-target="#signin_form">Inscrivez-vous</button>
                    </div><!-- /col-sm-6 -->
                </div>
                <div class="col-sm-6 formules_container">
                    <div>
                        <h2 class="h2_medium">Pack complet</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/images/DSC_0191-2.jpg" alt="">
                        <p>Préparation aux épreuves</p>
                        <p>4 concours blancs</p>
                        <p><strong>Modules de remise à niveau inclus</strong></p>
                        <p>272H/1950€</p>
                        <div class="info">
                            <p class="button active"><em>En savoir <span>+</span></em></p>
                            <div class="info_sup">
                                <p>Voila des infos supplémentaires</p>
                            </div><!-- /info_sup -->
                        </div><!-- /info -->
                        <button class="btn btn-primary center-block" data-toggle="modal" data-target="#form">Inscrivez-vous</button>
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