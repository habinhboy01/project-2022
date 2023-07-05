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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'biotech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'NmF(Wgp6>1(l%f#Igdsgjg41~FSm/..UCc~9*m/0N14q-z-x`~spbAm 1l$2cEn,' );
define( 'SECURE_AUTH_KEY',  'PAz6w94q9}saO(;aCf!+osO -14#9^Z~5j|LwRN3$e!;Z=E?ab**PH,]=aG[G][d' );
define( 'LOGGED_IN_KEY',    'W)iHs-6$RZb1aQ ]cf_BRL<C;u=HbIL$*Gu}k+![6An{D4Ps?n2v8(@zJ<;$&UG5' );
define( 'NONCE_KEY',        'rV@:UgR=4L.vPMM{DU2@PsCn1q~7YGpsn5tJciPc:Ku0E}T7r:_.O@h?h)02SA`!' );
define( 'AUTH_SALT',        'rk@U.AW!n 8*_Z_rpNn3b[s@}{5>0$Meb;Z)g40@P8//_n6f$$OFKyQMD+`RC7Ec' );
define( 'SECURE_AUTH_SALT', 'fjsnR}Yw_`+e!I2!vTCrp`M|be{I^0fY[f7;(0(?@hx)D(Ih#.Y$:Rt{r.OFP`+t' );
define( 'LOGGED_IN_SALT',   'FYgIw:@ `9X5L)7!ea^A_dU6x~$Y(UzVo%}OWGL8Q;HR%{ER,^QscH=3Sl~CIgP?' );
define( 'NONCE_SALT',       'jV2`A_U%X 0(C!&]pR9$<=,;a;wfqJ`t%STbOc6 cMfaLK{=Ge<a2H.DYqPvMkr>' );

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
