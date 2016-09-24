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
define('DB_NAME', 'wordpress01');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ')*h,8,wyAjL+Ykx):4sd$2R SXkn6BoCkA@7~00;~(nQBbUKk-L>pIP@KwSmy5]N');
define('SECURE_AUTH_KEY',  '?oEzbB$I%[h{{6qaHJnwW&{tjv9xV$d<5w@iu@n81(rtL*5^;/*fd_!4!X[h2RTT');
define('LOGGED_IN_KEY',    'u#4zl)JiX&hNDBPnkM3jk+-$+dDbide.pz(C4o.Z;d/cd,C&Wh!Jtk4xZB#),&d[');
define('NONCE_KEY',        '[dQ+%B_.pHm>*2Nu=`6H=W) f*Rj]VnpIJ&R0Q!Itq7H]Y?V:.H`Ze*;C5jQ_H8*');
define('AUTH_SALT',        'X#9L~$?Ltg?A`MKA;R0Jd@6T^_BLt}}4FzpG ALfpn.PI{C-<Jema8M7jzc0 EJq');
define('SECURE_AUTH_SALT', 'kwArXi9,]9y+cXzTylxi>Fbr-Fjk`=3Sy7+Z*wV|?9[)FzHfBZ%RmyQILu8q;K!=');
define('LOGGED_IN_SALT',   'pTb?<nB6:OMNR(#!p8@<J9H??*3}) v:/#/U4Sai<!>q$C#e%avg7.iLJE@1jpeA');
define('NONCE_SALT',       'WYTK$E+6}lK_^qxFdbw!w$[qk(/lU_VU2|GIH~mnqqh*Mu6_JBNXO0_FNoAKC>lz');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');