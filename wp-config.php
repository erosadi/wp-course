<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_course' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4+17kdVBpZAJ[zXq)h.D6g3R;PXg;ugfq/5c6bXITn/JtblvN_(tW|Rj|PnD=m,&' );
define( 'SECURE_AUTH_KEY',  '*.DVL4aL> }CFaX>0EP^ihey:St}@ao`o,qR;{O,Tt+4(b1#*#%/PjZs-ve[!O$?' );
define( 'LOGGED_IN_KEY',    '` ]Xzr$/vDs>Ax~rX!uuP$7-MM*}T)h/r2,Z&2E:K3f!4&JgJf#BT1~qQ%;c,<yK' );
define( 'NONCE_KEY',        'Ch)as#0)k^q7Cpx4mW+h[BWA,,<c-ReHnx*xD<VUD5UnEN~5z{L:Yh6-k`{]Vc5C' );
define( 'AUTH_SALT',        'k<w:,U{aOe#_~9(H,bOr=IPXY$mM&O]|gBuQIebecl>;jII(Z*g:Qg-nyEF_J}G3' );
define( 'SECURE_AUTH_SALT', '~(iSn^Wm1{X?uF0c(8$[>G>&;H=(ZeEjO6EoZj6On+d>FfWBfe(XTa DV~]Kc6sn' );
define( 'LOGGED_IN_SALT',   'ubZGhr6%Tb0JO;n]P9;OV|d:LLSS!0|!Fy>|;6%PfF$tXfb!VJ1 <q~oe*<G.R8O' );
define( 'NONCE_SALT',       'l)~iY^r5_^il#:i=u5aKQ4R/1fF/he/s#S)!tLJY4zqjyVl,xtJ5E+9`b&y3n~aL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
