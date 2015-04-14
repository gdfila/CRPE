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
    <div class="hidden-xs hidden-sm img_prez img_prez_aplat img_prez_incurve">
        <img class="back_img" src="<?php echo $post_thumbnail_url; ?>" alt="">
    </div><!-- /img_prez -->

    <!--
    Section pour mettre en avant le texte, exemple : l'accroche. Un h1 pour le titre général de la page et un texte grossi
     -->
    <section class="accroche">
        <div class="container">
            <h1 class="x-large">Le concours en détail</h1>
            <p class="medium">Le professeur des écoles est un enseignant du premier degré. Il exerce dans les écoles maternelles ou élémentaires auprès d'enfants de 2 à 11 ans. Il dispense un enseignement polyvalent : français, mathématiques, histoire et géographie, sciences expérimentales, langue vivante, musique, arts plastiques, activités manuelles et sportives. 
La première étape pour devenir professeur des écoles est de réussir un concours académique, le CRPE - Concours de Recrutement de Professeur des Ecoles.</p>
        </div>
    </section><!-- /accroche -->

    <!--
    Section présentant les reperes concours
     -->
    <section class="reperes">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/conditions_acces.jpg" alt="conditions d'acces">
                    <h2 class="small"><strong>Conditions d'accès</strong></h2>
                    <p>Pour présenter le concours, l’une des conditions suivantes est à remplir, à la date de
                        publication des résultats d'admissibilité :<br>
- une inscription en M1 en vue de l'obtention d'un master ou d'un titre ou diplôme
reconnu équivalent par le ministre de l'éducation,<br>
- un M2 ou un titre ou diplôme reconnu équivalent par le ministre de l'éducation,<br>
- les mères / pères d’au moins trois enfants et les sportifs de haut niveau (sans conditions
de diplôme)<br>
Il existe aussi le 3ème concours qui présente les mêmes modalités que le concours externe
mais ouvert à tous les candidats pouvant justifier de 5 ans d’activité dans le secteur privé
(aucune condition de titre ou de diplôme n'est exigé).<br>
Par ailleurs, le candidat doit justifier des deux qualifications suivantes au plus tard à la date de
publication des résultats d’admissibilité :<br>
- une attestation en secourisme reconnue de niveau au moins égal à celui de l'unité
d'enseignement "prévention et secours civiques de niveau 1" (PSC1)</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/calendrier.jpg" alt="calendrier">
                    <h2 class="small"><strong>Calendrier</strong></h2>
                    <p>Les inscriptions au concours de la session 2015 ont été enregistrées du 11 septembre au 21
octobre 2014 et du 3 février au 3 mars 2015 pour le concours externe supplémentaire de
l’académie de Créteil.<br>
Les épreuves d'admissibilité :<br>
- Français : mardi 28 avril 2015 de 13 heures à 17 heures<br>
- Mathématiques : mercredi 29 avril 2015 de 9 heures à 13 heures.<br>
Les épreuves d'admission se déroulent en juin 2015.<br><br>
Pour le concours supplémentaire de Créteil,<br> les épreuves d'admissibilité :<br>
- Français : mardi 19 mai 2015 de 13 heures à 17 heures<br>
- Mathématiques : mercredi 20 mai 2015 de 9 heures à 13 heures.</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/debouche.jpg" alt="débouchés">
                    <h2 class="small"><strong>Débouchés</strong></h2>
                    <p>En 2015, 11 281 postes d’enseignants du primaire sont à pourvoir au concours externe. A ces
postes s’ajoutent les 500 postes supplémentaires ouverts exceptionnellement sur l’académie de
Créteil.<br>
Une fois le concours réussi, les étudiants deviennent des fonctionnaires stagiaires en
responsabilité. Ils suivent une formation en alternance en deuxième année
de master qui se déroule à temps partiel dans une école. Attention : la titularisation est soumise
à la validation du M2.<br>
De la maternelle au primaire, le professeur des écoles suit un programme scolaire défini par le
ministère de l'Éducation nationale. En maternelle, l'enfant est initié aux lettres et aux chiffres à
travers le jeu. À l'école primaire, l'enseignant met l'accent sur les leçons de français et de
calcul pour le préparer à l'entrée au collège. Cinq autres matières constituent les apprentissages
de base : sciences et technologie, histoire-géographie, éducation civique, éducation artistique
et éducation physique et sportive. Toutefois, le professeur dispose d'une certaine liberté pour
organiser ses cours ainsi que les différentes activités intellectuelles, artistiques et sportives.
Le professeur des écoles doit assurer chaque semaine 26 heures d'enseignement.</p>
                </div><!-- /col-sm-3 -->
                <div class="col-sm-3 reperes_container">
                    <img src="<?php bloginfo('template_directory'); ?>/img/images/referentiel.jpg" alt="référentiel">
                    <h2 class="small"><strong>référentiels</strong></h2>
                    <p>Pour plus de détails sur les conditions d’accès au concours, les affectations de poste par
académie, les sujets d’épreuves et les rapports de jury, le parcours de formation…, nous vous
recommandons les sites suivants : <a href="http://www.education.gouv.fr">www.education.gouv.fr</a>, <a href="http://www.siec.education.fr">www.siec.education.fr</a> , mais aussi
les sites des ESPE (Écoles supérieures du professorat et de l'éducation) et des différentes
académies.</p>
                </div><!-- /col-sm-3 -->
            </div><!-- /row -->
            <hr><!-- /separation -->
        </div><!-- /container -->
    </section><!-- /reperes -->

    <!--
    Section présentant les conditions d'examen
     -->
    <section class="condition_exam">
        <div class="container">
            <h1 class="large">Les modalités d'épreuves</h1>
            <div class="row">
                <h2>Épreuves d'admissibilité</h2>
                <p>Les 2 épreuves d’admissibilité durent 4h chacune. Une note ≤ 10 points à l’une de ces épreuves est
                    éliminatoire.</p><br>
                <div class="col-xs-12 col-sm-6 ">
                    <div class="contenu_exam">
                        <div class="coeff_exam">
                            40/80<br>points
                        </div>
                        <h2 class="small">Français</h2>
                        
                        <p><strong>Partie 1 :</strong> Réponse, construite et
rédigée à une question portant surun ou plusieurs textes littéraires ou documentaires</p>
                        <span class="x-small"><strong>11 points</strong></span>
                        <p><strong>Partie 2 :</strong> Connaissance de la
langue : grammaire, orthographe, lexique et système phonologique</p>
                        <span class="x-small"><strong>11 points</strong></span>
                        <p><strong>Partie 3 :</strong>Analyse d'un dossier
composé d'un ou plusieurs supports d'enseignement du français</p>
                        <span class="x-small"><strong>13 points</strong></span>
                        <p>Correction syntaxique et qualité
écrite de la production</p>
                        <span class="x-small"><strong>5 points</strong></span>
                    </div><!-- /contenu_exam -->
                </div><!-- /col-sm-6 -->
                <div class="col-xs-12 col-sm-6">
                    <div class="contenu_exam">
                        <div class="coeff_exam">
                            40/80<br>points
                        </div>
                        <h2 class="small">Mathématique</h2>
                         <p><strong>Partie 1 :</strong> Problème sur des domaines
des programmes de l'école ou du collège, ou sur le socle commun</p>
                        <span class="x-small"><strong>13 points</strong></span>
                        <p><strong>Partie 2 :</strong>Exercices indépendants et
complémentaires : QCM, réponses construites, productions d’élèves</p>
                        <span class="x-small"><strong>13 points</strong></span>
                        <p><strong>Partie 3 :</strong>Analyse d'un dossier
composé d'un ou plusieurs supports d'enseignement des mathématiques</p>
                        <span class="x-small"><strong>14 points</strong></span>
                        <p><i>Attention : la correction syntaxique et qualité écrite
de la production peut être pénalisante – jusqu’à -5 points</i></p>
                     </div><!-- /contenu_exam -->
                </div><!-- /col-sm-6 -->
            </div>
            <div class="row">
                <h2>Épreuves d'admission</h2>
                <p>Les épreuves d’admission se composent :<br>
- d’une mise en situation professionnelle basée sur la rédaction d’un dossier dont le
thème est choisi librement par le candidat. Ce dossier à envoyer au jury quelques
semaines avant la présentation orale.<br>
- D’un entretien sur des dossiers proposés par le jury. Un temps de préparation de 3h est
laissé au candidat.</p>
                <div class="col-xs-12 col-sm-6">
                    <div class="contenu_exam">
                        <div class="coeff_exam">
                            60/160<br>points
                        </div>
                        <h2 class="small">mise en situation professionnelle</h2>
                        <strong class="medium">3 épreuves</strong>
                        <p>Le candidat remet au jury un dossier de 10 pages,
portant sur le sujet qu'il a choisi parmi lesdomaines suivants : sciences et technologie,
histoire, géographie, histoires des arts, arts visuels,éducation musicale ou enseignements moral et civique</p>
                        <p>Présentation du dosseir</p>
                        <span class="x-small"><strong>20 points</strong></span>
                    </div><!-- /contenu_exam -->
                </div><!-- /col-sm-6 -->
                <div class="col-xs-12 col-sm-6">
                    <div class="contenu_exam">
                        <div class="coeff_exam">
                            100/160<br>points
                        </div>
                        <h2 class="small">Entretien à partir d'un dossier</h2>
                        <strong class="medium">3 épreuves</strong>
                        <p>activité sportive, artistique</p>
                        <span class="x-small"><strong>40 points</strong></span>
                        <p>situation professionnelle</p>
                        <span class="x-small"><strong>60 points</strong></span>
                    </div><!-- /contenu_exam -->
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /condition_exam -->

</div><!-- /container_concours -->

<!--
Récuperation du footer
 -->
<?php get_footer(); ?>