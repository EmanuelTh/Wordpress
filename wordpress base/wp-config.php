<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'pj88H*XUYR.>j9l:T[G{5sk00lwo61d5L$Az;s)Ne/a9Avay5EjDV,i*NvT[]R[l' );
define( 'SECURE_AUTH_KEY',  'SuYgn{9&im]]RHaS~H>RYVPK@!rC7#z5yO.z,1~yOP?B?X26<c1fY3Hbb>3O~64g' );
define( 'LOGGED_IN_KEY',    '#9,:`#v^|>zmQa0g5+0aQzG{2BPY4qE:Ur=%_jUz-x/E_c%APmG%>SH<f8^w!rVb' );
define( 'NONCE_KEY',        '</Hww+=f;<$m,<xL1OPZ]-@igi2tvzH>#L6/4ovPi`^71I(GVp=t|sA$^zhsYyK<' );
define( 'AUTH_SALT',        'B(u_VR8rVK<r]hYIakI}=*=vl7DSzh2MkIM_XB#Ro]0{t]m .2=j6md2r/1!Eng#' );
define( 'SECURE_AUTH_SALT', 'Y>G=[KA{/k1ndrmPq-PwZGk&:;+8XX%U<iNR,0z4hD}-$fl3-dv5KC?@:.k+2k[D' );
define( 'LOGGED_IN_SALT',   'y v~mbQ`<})4JYn8,vF|ApP>5B]NiwpQi{9g5}.O[IVdS6ua8H[<NYthf+OFD<F,' );
define( 'NONCE_SALT',       'QOYJ-|[7*S1YSo`@OMn7r?ElmY3<i=9(DGM2EN1m),oSW_=7m&QY&fU8Y%;w2^4!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
