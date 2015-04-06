<?php
/*
 * Template Name: le concours
 */
?>

<!--
Récuperation du header
 -->
<?php get_header(); ?>

<div id="container_concours" class="top_content">

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
    </div>

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <h1 class="h1_tall">Le concours</h1>
            <p class="h2_medium">En 2015, 11 960 postes d’enseignants du primaire sont à pourvoir au CRPE (Concours de Recrutement de Professeurs des Ecoles) dont 11 281 postes au concours externe.Vous êtes inscrit en première année d’études en vue de l’obtention d’un master (M1) ou vous êtes titulaire d’un master (M2) reconnu par le ministère de l’éducation et vous souhaitez enseigner à l’école primaire … C’est donc le moment de préparer avec sérieux et rigueur le Concours de Recrutement de Professeurs des Ecoles.</p>
            <hr>
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les reperes concours
     -->
    <section class="reperes">
        <div class="container">
            <h1 class="h1_medium">Titre !!</h1>
            <div class="row">
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/fotolia_51467210.jpg" alt="">
                    <h3 class="h3_medium"><strong>Condition d'accés</strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita asperiores sunt voluptatum, aspernatur labore modi voluptates dignissimos dolores nisi, eum cumque ea a, amet perspiciatis, aut saepe eos cupiditate. Consectetur!</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/130783-fotolia-56047028-s-_x450.jpg" alt="">
                    <h3 class="h3_medium"><strong>Date</strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id officiis nemo eum mollitia a illo harum, incidunt ipsum, quis libero provident consectetur enim et, repudiandae ullam unde vero autem qui.</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/fotolia_54990513.jpg" alt="">
                    <h3 class="h3_medium"><strong>Perspective</strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quos laboriosam iure numquam, veniam fugit asperiores explicabo, eius tempore, itaque illum impedit! Suscipit numquam recusandae, labore ea quisquam quaerat reprehenderit!</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/fotolia_44583729.jpg" alt="">
                    <h3 class="h3_medium"><strong>Lien externes</strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur perspiciatis alias praesentium doloribus necessitatibus, officiis tenetur at minima nulla labore rerum, soluta ex. Minima nihil id ipsum consequuntur, illo, libero.</p>
                </div><!-- /col-sm-3 -->
            </div><!-- /row -->
            <hr>
        </div><!-- /container -->
    </section>

    <!--
    Section présentant les conditions d'examen
     -->
    <section class="condition_exam">
        <div class="container">
            <h1 class="h1_medium">Les modalités d'examen</h1>
            <div class="row">
                <div class="col-sm-6">
                    <div class="contenu_exam">
                        <div class="coeff_exam">
                            40 points/80
                        </div>
                        <h2 class="h2_medium">Français</h2>
                        <strong>3 épreuves</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum aperiam, eius tempora vel quis neque impedit tempore voluptate saepe corrupti assumenda, dolores eligendi vero repellat, molestias numquam ipsum mollitia architecto!</p>
                        <span>11 points</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam culpa incidunt vitae cupiditate voluptatum eligendi nobis impedit, commodi fugiat repudiandae asperiores temporibus similique id itaque magnam praesentium aspernatur suscipit in.</p>
                        <span>11 points</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, aut, sint! Nihil consectetur at, dicta deleniti dolore odio voluptates soluta reiciendis enim nesciunt quae magni et, asperiores laudantium sunt minus.</p><span>11 points</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contenu_exam">
                        <div class="coeff_exam">
                            40 points/80
                        </div>
                        <h2 class="h2_medium">Mathématique</h2>
                        <strong>3 épreuves</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum aperiam, eius tempora vel quis neque impedit tempore voluptate saepe corrupti assumenda, dolores eligendi vero repellat, molestias numquam ipsum mollitia architecto!</p>
                        <span>11 points</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam culpa incidunt vitae cupiditate voluptatum eligendi nobis impedit, commodi fugiat repudiandae asperiores temporibus similique id itaque magnam praesentium aspernatur suscipit in.</p>
                        <span>11 points</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, aut, sint! Nihil consectetur at, dicta deleniti dolore odio voluptates soluta reiciendis enim nesciunt quae magni et, asperiores laudantium sunt minus.</p><span>11 points</span>
                    </div>
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

</div><!-- /container_concours -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>