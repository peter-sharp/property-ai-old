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
define('DB_NAME', 'property_ai');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '`WNd0[F%15< iP4m#Jc$.Ak.rCg}n)O!+{ly4YQRCZ(_Mda2z/keSk)7@,Bmooc}');
define('SECURE_AUTH_KEY',  '?`|3Rj*lRA*}G(kt4dsf=P4QA;d16+skp5#d|WF5uR~!>PYllGZ0xQpI0ARelj=0');
define('LOGGED_IN_KEY',    'Fqcdo=!|0mr%Z}sQwJvuoP<pkE|{;g^42p+[5XTuG<q^(fyp?~F:T]8@1zm+Xx/@');
define('NONCE_KEY',        '+co!,rn0c}5+,4hYXt41cGtN4GBs]5*5H5;BU >h-<W.XLh[/@@n:<nb5Nq(/0D{');
define('AUTH_SALT',        '52a?cy?[r?{:8=rR|4i`qCVD)~A[fU(pOLK$^*n7qFpV5RTZ~nE:w7h~anX3sDWL');
define('SECURE_AUTH_SALT', ']}q3&*e/Bs%ZY#eO;A*K!N3RR|HeM&dkSq#2|BWzM|2F_R:;q.dBQ:p.+EoT+B+{');
define('LOGGED_IN_SALT',   'R:TCQ?DVn(KLCl:z;Nf*-#T@yJR;o>Fh3o@+s<?Jk:8tBYcyev{NgfGX%TY,);?W');
define('NONCE_SALT',       '5sBRTv5zq]v*a=lFj+v~uUM)DMh,uGnd9sN|Ps:29yU8Sbeb|yotf~^vm|Yx2y:z');

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
