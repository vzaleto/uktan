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
define('DB_NAME', 'uktan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4w!g1:H~K!6K^x3S2V=Jz/[)Lh95PyKST]~Vr=uZ)L44RB1QAHcvfmxmT:(fw/u$');
define('SECURE_AUTH_KEY',  'AeC?H 9/%P_uZ6lTEU~q*Y8|{F!r*BEW]Fzf^A@yTYedAAPZAc?_Pnv}u><ub)M.');
define('LOGGED_IN_KEY',    ']a`^mzl7-y-s##0^$Y<Ha*_*=5T5cv)lKP $V#v>+b^&`wEMG{CA2e]vFPc5}7eK');
define('NONCE_KEY',        ':2.DMaLG-6(s?]ea$elRhcIY_W#<bGg/g=7kYPN :CX/|2[@k=KS(eI~WfsWH1Eo');
define('AUTH_SALT',        'YTCV&WS:1<gqkD:MZ67z|C-Klu3~rs%</GH5:st9Jp,5uQ0~r Y=7^A(bf[2zOfL');
define('SECURE_AUTH_SALT', 'h98{DjSW(;df!~$kn#[;-KoH6EJq3I4tSa|@EO&y>%n=:!}Ch?blc&:t2P`8}&Ts');
define('LOGGED_IN_SALT',   'u~w*G$tlZI+.eNH5c2R^Uo/cR,H_|O8!J4L@}w>@b;D,^`!H^Z~Y#my^T4~b2a,2');
define('NONCE_SALT',       ')&CX^aW(!hke:j&>Z1_figj_V~1$}A1uts4>jUwakOaCXKq..~x3J`d>-S.~zU9v');

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
