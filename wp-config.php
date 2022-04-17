<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'evasion' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HH-}1=^bXWz;or$0;,uoLSLfVJ?*@ra3M<R ^^Ry:<a (%Yu5}{U>I;kV)#gg~Pa' );
define( 'SECURE_AUTH_KEY',  'L9r]+!/!WfR,,i7MF7<oKE7N#mtD<sAt[CKejeQlaR~2?5#N8+;V;nl -;W3h=dc' );
define( 'LOGGED_IN_KEY',    '|ZrPTd~f3kkce+TX=+JX*%pJw<OH2Wp7~v{NxAP{10Lm~)2A[- vzY#54tyD}pLp' );
define( 'NONCE_KEY',        ':T;]~7R&-JFLL*U#@td0?)<c*]<X+``@;?6?^om1jfuwomh2P/ %3{tv)Jv^_e?r' );
define( 'AUTH_SALT',        'nRDV+ZRio<Wq7.GCHl9YOf!Fsf<2+N`LXHFlL(MCop4gSY#T#V+Src<YjH9j#.od' );
define( 'SECURE_AUTH_SALT', '&X|][*^-<hyE(o[<(xCcx57hRLoH@m2V*X0AH{M)Jbv-%Dob5f/X~$/UtVQ5I-8 ' );
define( 'LOGGED_IN_SALT',   '[T)=[VY9%IFoalnp+mNkqRJ.=oJ,ky3M0Kf{oOM|31~2j|CNwk`R.<Zq4-a~;#Ls' );
define( 'NONCE_SALT',       '1PF_#$fpEV$3P,@V)l5YTV=-G|e5Eoc3cZ6>Itgp0+m>@K$7hUc|8{H6eYyqqy+(' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ev_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
