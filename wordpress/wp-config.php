<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'leonart');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_=jwsm/O@x_TWi2/Z5rJle|fNEqK1jbB{yYIp6Z* ro5N:a,<{E%l&&>q@|4]Trz');
define('SECURE_AUTH_KEY',  'WF@3@z~Rps:%PuS3VYV?ML?4ER5|!={NO%tYm56iAV=PMS2SGMfh1c#=aeo*$,c~');
define('LOGGED_IN_KEY',    '{*wpSKe/q*sGtgm3P-{.z`|B/eXUdiPX?.`oMKiRC775BQ%e`lb5AN<bFwsD{QXD');
define('NONCE_KEY',        ' 1N!A>d?WP[08<;;R$>#8b@ZiGU>UvjT[9I@Y-wCn}VgpbW}1b+6v1A|EzsTZ?l#');
define('AUTH_SALT',        'p^7CbrD7q&fOV|lx(.J}39RJd3 /$*:;4I>AcS_o>kdG{:10885G@,ws%`ylst&z');
define('SECURE_AUTH_SALT', ']bM*pO.1%B>*6# (r&r4tGTmOEndzP-Nupl8Lw[vsFE]B(-&HBlgv+_ZA?_)>3.q');
define('LOGGED_IN_SALT',   'HL#^$YQvUBu/8>/.AOvHs^I=3i[gMO. I   Bywkeh7$4SC^g/KkH}&i8az9rNcy');
define('NONCE_SALT',       'NG;</[kjGX:)w-eTn*KiinEYbwCI!Zf8n<kAgNdB{~(3x^C_pr?h0ud!m9/:(L7N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
