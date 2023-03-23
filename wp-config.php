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
define( 'DB_NAME', 'wp_assignment_db' );

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
define( 'AUTH_KEY',         '+hFUY88CV~*mcyp]}H)aw*5x9Haa)_q@M#P>S>S.}F$](+;P-Q,5|VmUv*%vy@H?' );
define( 'SECURE_AUTH_KEY',  ':nKEWkzFv#yzv-8~5F-(2]./zqYLi~h}7S<y:Bi7OZP5SLQ$Z^0RHR=t*pd7kuX:' );
define( 'LOGGED_IN_KEY',    '<k4,#JRTg,c!ll=,)KvZfg7a9TG8iWQHFl(ZFrAq|.7]^ZtE~l|M7Q8?S4*QWCYM' );
define( 'NONCE_KEY',        '0M*#w3(t,<6SU5,,?q=0Vg8Ij6>.9BW@SaMu3hc`2D^/@jPhPV8,kg&+~QqIEsZx' );
define( 'AUTH_SALT',        '!gFziVCDm6Z$b[FZO#aR`36K&5h)W`~xDGK4l#40V<a+8Bq>)3vwe>Hlg-Le6wB9' );
define( 'SECURE_AUTH_SALT', 'S1M49Uf[s6WzXm3.726&^Qa!SmI3l19ZK2&aBH2-fvO?+mRViYYZ!A|2(1Q:~.pf' );
define( 'LOGGED_IN_SALT',   'MN+|~#}6{wt!Y<|[_{CV]W^~.9gr#S!oxY3!Z*R[Wf?5$))gz.S+|cUQO5[VPt|c' );
define( 'NONCE_SALT',       '%llkmh[Y:BIQ6UvYI7#gk3R,ocaqdoIHd~NtvVN,ZdscFPelnl(patd,.F[&[)p1' );

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
