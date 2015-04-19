<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'galien_crpe');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Vsm2.zy+:dJ4FN+wKSRH1.>=-5(U!m|,49hDX#]cv>(A)xy t>EHC[Z(q3]8d16$');
define('SECURE_AUTH_KEY',  ' 8CI/2KX5w:e s3sj9g9MK nMZe38A(rG7AmTj;P8w.g2yW;|y%VGVzoYw62*B-4');
define('LOGGED_IN_KEY',    '3~]|I5|9@nqur<>yg/^Yt=xo[IiJ1m<]|<DB!AG.:^H9iUgU>OJt?T,m.e^zluFH');
define('NONCE_KEY',        'j3ELj-Evk9]|c)PUw#M1-V)Q5K-*3F+f0-|*h2e[m@.)9{]]yF,~J>GKy%d1JX+v');
define('AUTH_SALT',        'X!+_ukf,Y|XVhq]-<bSQ)o[@InD#oIQkiE)#|,n:-L36kU@Ei|HL&#FQA(+l/4*2');
define('SECURE_AUTH_SALT', 'g<Fh@RpJ` ?#%HC|HBil$_DgsHe6EU)_`wb7 J`}%6Mt/NgG3|-7$^Q@9|IW``lH');
define('LOGGED_IN_SALT',   's^F)r@;HX.ZbbIg}[PC-~.SuAY6{}l<A*`7+o#7i1n[&C>kZA4aNc/pRkg;~%C`O');
define('NONCE_SALT',       '~[VpakI,+=1A-cx1LVpT6&`9;2wa1)=}T??D%}BN,4#Mkg_i#U<r*^&z#lKh7xk|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gc_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');