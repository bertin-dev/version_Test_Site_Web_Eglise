<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'church');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '(7:|m~K@!/*YemZu;do?++bSpxVU%YU9_1?bLH97euuX#c[wgu05VHC?{XiPRZj8');
define('SECURE_AUTH_KEY',  'M3uL$8LY51]B^h02qLxDO!j/[r<=ZSzXpt!S!tk8U#im8UQDF`@^1Mt5 $p 5ZYE');
define('LOGGED_IN_KEY',    'qXp^PtPbs3.|3lQK6SPL#`GI3.[)$kX_=8r7hJwpj)Y{N(q2J`]%1z-=B|E?l8SW');
define('NONCE_KEY',        'r<mdk&-_r9PPCFYhFW9D6*`Tk]7u`91vyuNkjlW`iQke=h?xM7zAK@Pq6.zCOG@C');
define('AUTH_SALT',        ')J<ojMQ)l~T(R?2y+WupC3><aalBZ/Klw7a2RS`jv}pYSPF/An@<!V.DQyR(OT;f');
define('SECURE_AUTH_SALT', 'i9~PyBikDkY1qp^pkRd&mxqA7+4FDLC.!Si0.xu9KymxB&Y=FH~J*v602j_w`V{>');
define('LOGGED_IN_SALT',   'b~|(d^ YQ:[qg_!2!>!Hbf`5(d]fN*Y0QJFQ!2bRJcmNMN2U]]o]ckQ67P<{p.yO');
define('NONCE_SALT',       '@]I#{I7z>m]bbTiLCcC%O{:Fa|&)^LsA,UC<Blk?%W,*b}?%+<[UqHy/6ULX?oo)');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'ch_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');