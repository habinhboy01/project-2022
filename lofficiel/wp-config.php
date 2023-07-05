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
define( 'DB_NAME', 'lofficiel' );

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
define( 'AUTH_KEY',         'Wd@Vxkq)&LNxo4ARgx$k<K*8zN}:Tet0b-3$+Y 9[sxhTXj<HB$6&]ifeY_SDvrV' );
define( 'SECURE_AUTH_KEY',  'iS//an2aV.gQ]OYMXeR1Wl!bLA|FsM7Jb-PjoYXNZ-<q~<9q6tZ$<P9N`Gv<_[q7' );
define( 'LOGGED_IN_KEY',    '9C*U<r.OXv@I{#C [.UJ1pGf!hm:3EqUH 1>4@?mj_M`etM#)qrB8#L5,$J.U7ER' );
define( 'NONCE_KEY',        ')Et)-YLtAo%?X}j`A4~^.CF7u@R~a$./mb-<KCXPe_wTIrk>DPP/;& wWt@M48~;' );
define( 'AUTH_SALT',        'G+K7_U#3HO14i%C;F:,4qR9vW2q{OHr}/b;58B1k@eQ]gI]J-?^a5c>YkR[))B_n' );
define( 'SECURE_AUTH_SALT', 'Z885C,=:]cg4r!gZ*$Tr_-f_Q.VUIpZ0ba0_oaP=JN6inBRK (!`o:+e*//|-UaX' );
define( 'LOGGED_IN_SALT',   'vG[dM7l2:k2JgxK%+.!avqqB.MuhQ*VSG?Rl?eXA`SKHXjc%`.^Xjsr_Wt9La)|U' );
define( 'NONCE_SALT',       'd /aHhNpB(rE?ZZV1R.Q+n_OWMZ&52L1;P*jfjTL|^Gbw`xBIYBM|zIy/2azVe,0' );

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
