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
define( 'DB_NAME', 'yoursuccessourstory' );

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
define( 'AUTH_KEY',         '76I<p]P$ kswIjAc/glk[U2&ig&.f$0y^K/N172=m3*O_,3a]0o&tdKWn/Mcbbc<' );
define( 'SECURE_AUTH_KEY',  'j#P5rG=&7e [7%/$^W=v_0n`tUml}[%#9OGg[pCjp/un@b3V2,vwT<zn#Vw%`(-#' );
define( 'LOGGED_IN_KEY',    '7;AQ6L!4HiK2HU|/RU3FBAY^Rk09UnT#8gW7[]s~~)YX[g^7;kagU8jW]W?X1n[m' );
define( 'NONCE_KEY',        '-[Be >DvI]Dj%/ePf3?8A%AH_^i7%D5h-2nVwqeh=@|~?(DF_-rgt3H9 pGng0^%' );
define( 'AUTH_SALT',        ' Ca}(0URu$cf**/4G_{fITtID{STeIu6V0W~yc2(18J4a5wa_^Vos+/&/@[7L.=5' );
define( 'SECURE_AUTH_SALT', 'ZIh@Ps2KRi7~#O*b8mX%)v_a!5,vCJOfB#:^=Yn14e)o6`y1v^Y&ZN1m11iocjV/' );
define( 'LOGGED_IN_SALT',   '^2G,tJ2sgSYJ;{jB7INrNjxn/&/cc0KG|ToWk<z7BwdJ_gDM[N:IK#5F:!>=(-%L' );
define( 'NONCE_SALT',       '57f(vNwh]PUi+QsFB=Issd63Mp#;_,giut@Uz@#V}xY`!qg7EW`@ EHfn8LSYvU:' );

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
