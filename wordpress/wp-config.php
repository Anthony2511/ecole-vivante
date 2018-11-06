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
define('DB_NAME', 'cev');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'homestead');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'secret');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');


define('WPCF7_AUTOP', false );
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
define('AUTH_KEY',         'K:_PxG=li,J.VPSGW5i$;Yezv$v~U4UR$:_M}Wi1~e?CcKfAE> ynS5ZsIv?,Hrt');
define('SECURE_AUTH_KEY',  'OwxEG~j;B@eIr>e1fWb*i7Ks`EVTZ}.xX+LyPgLFO^E3<i4R9jNzF2{90VMGf-o-');
define('LOGGED_IN_KEY',    'w%hpVORquwFztPM:v_,m;v`#<E!0;XZ;t8)R0 ]~B/,!i9]G]V+|g-zkyoRx:1P$');
define('NONCE_KEY',        '`3-_b2bqeGZ)$aRkbgbIzhDo7m^,BF_isy{DZGM_OgA7tSiTKwS4kUP_UDqT7x<[');
define('AUTH_SALT',        '#pL[FzDbAqsVrU6L}W)=s@[M9bZ=Z[%7x7lMKmZc.oP>7X ;@- E0^>&z?M=3@zv');
define('SECURE_AUTH_SALT', '1)ZDQqQPD67T}.G:Rb@.0IO)3Om5Ozh2}U@x!t5P%6C:T,/J*75LbXB}v{/gV`<)');
define('LOGGED_IN_SALT',   'S^#?WgN9L9d-8kyM9|<7zqt@x!8_I3,q_#)&o*l6=oX*`Slt7md`>QPRGG9|;i/h');
define('NONCE_SALT',       'c/MAKkp@g=&U[v:BR|>a}0~K$8[s1|hR5Nna-].zR(O0tq^OQt-:+x#22e&uXjDv');
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
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
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
