<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'gite' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Is[M+f#ysAA`Zxa,tG2pM|Y%S(2ho1~i];Rk-Y*C~$&iTd-@AFo!k`rm%<)U16*n' );
define( 'SECURE_AUTH_KEY',  'i<1_%t<E,T`4sQ[GC^h{pQb9>:IombPba`}(M4Rd1h@L9N@#hj.t>n^e=o8z++~2' );
define( 'LOGGED_IN_KEY',    'j?W6Zlk149(@TLB,4m{2/x1Rn |)125r8S4V+agash.&)66OV{E2s7p`jh u/E>E' );
define( 'NONCE_KEY',        'gxC<K;2iS9e`;}q)#dc7PrUV3+)=6Y5:}z I5)^G9*_(p_FaBU6hCa|=L]urBf=x' );
define( 'AUTH_SALT',        '^AhT9]33F)H0A61>!6&!zx&p*)=yHa6>wcJle[A1ImgzoHt4*-z#3JF1w?13eF$~' );
define( 'SECURE_AUTH_SALT', '98Yzr7vr(uL/& z2]bE1|,$1N~oh?@Gc^s5S1fV8Z/18w;,&st{dKpVeJ${Gj^F{' );
define( 'LOGGED_IN_SALT',   '>;E]Y= }#Z}pyEm_a3WhFA6>/n7(Zh;z9=qo9/P8 %H?X<B1Ox7KrVCV RpAuia~' );
define( 'NONCE_SALT',       'e7L$#*oi/vU4b4?#rK:FAO-U*Nop_PY%{o&b{Xmp_+ObV~IdOz(Tfy}#t10_q4wF' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'g_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
