<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '@aiN7^_]E/CZ{ W^F-yk5_Uo+GbIm:UNptJR$!}$+|E-_3g3!RBh-y~k:Hg^]p|$');
define('SECURE_AUTH_KEY',  '@740|viDtON~A-N=l Fo=Jub#U$0pp)=%H!1CxGr~ziRaMW>&[n!,OF/YA8>Y=}|');
define('LOGGED_IN_KEY',    'Je]zqnJQRDk57%GWieLjf_O/NdMAW7@_C+-&rK#u}$*!nt]2a9G-d,6rH-s:B=Il');
define('NONCE_KEY',        'v3_s5:qyZCwXv{rez7`cN~]26}[uk~6wbNo3YPRfDhp*m||`QQR,m#Q?; |]t|&a');
define('AUTH_SALT',        'amcOD5=Ni}a1){+jS|I*1#!+t^y^uIY@:#aa7Q!*!]DOw.*GkVI;:&5<0xC4S:<9');
define('SECURE_AUTH_SALT', 'x*IDN>}1J&mqtMi*hPF&>*-gUc3y[<KtY Td_Me3$9.ill[j1F*Ax+o2LPi%vq/X');
define('LOGGED_IN_SALT',   ':j[wm@;&j)(6ixj4W@`{{rj9)n^|rRyi3T_=lB~iR+gFj|5Q]|Oa)aEH|B:?}Dp;');
define('NONCE_SALT',       '&iJ>G]v^O0} =qA/`v@yKHm=N959;=9R5IQ(5L+sz+Y,=`g=kgpFR89C8s/*H9%0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
