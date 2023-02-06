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
define( 'DB_NAME', 'allenoverseas' );
define( 'WPCF7_AUTOP', false );

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
define( 'AUTH_KEY',         'dCg-9fRt6/{!gd%^tbK]A1^$jexas[;@Jxt}#I!:G`a;_6.vV/ p }dORufK;`_Q' );
define( 'SECURE_AUTH_KEY',  'Mniey[4v8=Hn<Qa*;Q2G!p:}kQ%5:kRc__?e~i<P>QDTGvsNVwlZ$U}#_q>b2U{%' );
define( 'LOGGED_IN_KEY',    'KB`LIku^T!skydgTwC;sZDE)gO2G6#1{PB+^kG)fgevY^_nz0!?<X*kUr hDQpl@' );
define( 'NONCE_KEY',        'np%kAsd29L~M2&q:%P[1>u=7g-u[pHg.xkVFO*R X~!Q}B6K8~yy2:0y/|BJ8UY5' );
define( 'AUTH_SALT',        'GoBF#pH(1d>85Iku>}GUckU*c?s*4MS8%^YU~bAx3.*L1:gB)hEl[io`N{v;ZLGZ' );
define( 'SECURE_AUTH_SALT', '|`v7#WM%2 *!vT;hbxE=h{o15y(a=`up,bo{MVa rl2L$EWzGL2]RPQ.[jSY419.' );
define( 'LOGGED_IN_SALT',   '1$ 7;O8-JA Zms*/:/f6CqiP?wQ4tU 8`bSzXm}3{WmKLFWXt$iwIE.o5q:7L1MK' );
define( 'NONCE_SALT',       'g},5|Si_<@#QtQ?Wy_E,f3g&?}D[l<M4IvU`l>.g|cR{W@3XmZ7;Qun Hy8igkMV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'acio_';

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
