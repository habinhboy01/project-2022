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
define( 'DB_NAME', 'veganmedia' );

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
define( 'AUTH_KEY',         '?$8(x7(w9*FB,ZJ{F#As@p8NA`dvoF5RN3Q3o4b8ioRBml*PIfe|M%AhAR.3xX8R' );
define( 'SECURE_AUTH_KEY',  '&AAcG ku9+QCB[dfN!-_1}sgtM5{<7:[U3|Y_itJc^M:JI5x~zU4Ne<e!Kq0uR}+' );
define( 'LOGGED_IN_KEY',    'Hino?GzlS*m5LT*-tAlb<dJ9n^UH7 X/~ :hP6MrKPe0Nt4FHnj%(UXh+;bUXIl+' );
define( 'NONCE_KEY',        'k(/-E(9_Ye`8t_-n{&!IckZ<a/e`)&k?@nV3%{MM?0Ky:ubCBTX_lNVmnkvGV!**' );
define( 'AUTH_SALT',        'xTZsqt_]ef`k%=1=Ki/dO^:$S?7?zE@0-GLpHo*J%6@wvScY9x^Y?p,rV?j#K]%?' );
define( 'SECURE_AUTH_SALT', 'sMRxu5xU!$OeS,F~ ?aXA){_x7`}}OG:MK4`(em3,v13@7gI&>U4_OcO%O2_pWP.' );
define( 'LOGGED_IN_SALT',   'QR:!0TFsFzfxIXqbSq+q!aSb!`N>K5dPK:,;eLgk^5m5LO)YKr`yCr/Kn&VyIvMG' );
define( 'NONCE_SALT',       '.Y~ne.Qiv,>?SmI]dEci[t~Z=k28qDG+Bk(hf*K-oxH5-n/k6ei(:fKDhKTpnoT0' );

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
