    <div id="ariane">
        <div class="container">
            <?php if (function_exists('my_breadcrumbs')) my_breadcrumbs(); ?>
        </div><!-- /container -->
    </div><!-- /ariane -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <h1><a href="/galien_crpe/"><img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png "></a></h1>
                </div><!-- /col-sm-3 -->
                <div class="col-xs-6 col-sm-3">
                    <h2 class="small">Le groupe Galien</h2>
                    <ul>
                        <li><a href="http://www.cours-galien.fr/">Cours Galien</a></li>
                        <li><a href="http://www.centredeformationjuridique.com/">Centre de Formation Juridique</a></li>
                        <li><a href="http://www.assisteal-formation.fr">Assistéal Formation</a></li>
                    </ul>
                </div><!-- /col-sm-3 -->
                <div class="col-xs-6 col-sm-3">
                    <h2 class="small">Infos pratiques</h2>
                    <ul>
                        <li><a href="#">Galien recrute</a></li>
                        <li><a href="http://www.studius.fr">Studius</a></li>
                        <li><a href="#">Mentions légales</a></li>
                    </ul>
                </div><!-- /col-sm-3 -->
                <div class="col-xs-12 col-sm-3 reseaux_sociaux">
                    <h2 class="small">Suivez-nous</h2>
                    <ul>
                        <li><a href="https://www.facebook.com/CoursGalien.Officiel">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Google+</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">Linkedin</a></li>
                    </ul>
                </div><!-- /col-sm-3 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </footer><!-- /footer -->

    <!-- scroll top -->
    <a href="#" id="scroll_up">^</a>

    <script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.counterup.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <?php wp_footer(); ?>

</body>
</html>