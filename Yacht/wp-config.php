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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yacht' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-T{B}rM i>L0`)okgDv?p<9c0Uh`7pwg3Vip[ ,Gi<0c6,9>$~=O{m-M;4pB*b}a' );
define( 'SECURE_AUTH_KEY',  'yb-<{~tIh;24ya(;IS6[}+LW,Rm)DCoXsRe/fK`V~+$3fa:w0NYov}aR7#|&p>j&' );
define( 'LOGGED_IN_KEY',    '{NZB,NO&P~)%d3bL%B9J1$[WYhI3A$*}(HE0lCDT$k7&>p9j5Y:u*ckjR?T6k Qb' );
define( 'NONCE_KEY',        '8#X%<RHkpDmbvmX?mK.%R{P%tj^li9DFmAwY_/:vH$6GdmsZ?4.=2F:)7VxcKTv]' );
define( 'AUTH_SALT',        'M=HK35&*5/)~|E8 s}Jl#rJR^}e^G{x/hvqLemCSl?f7SYs7@AQY0{Dz|6ia/U ^' );
define( 'SECURE_AUTH_SALT', '.3B1)+VX/;3mC6W,-_fLHBjQ%>U~wCgtu5yqf<uQI? =@S{x#,NEgk#hG$q*kzJ:' );
define( 'LOGGED_IN_SALT',   'M:{6qku!qSVs]=7+eA}yE227l*/MFoe,iJiQln.K-h|sg,CU[<>l()yzj`ISb)G7' );
define( 'NONCE_SALT',       'lfKx{BZ2DLcv#hJVZ~3l9mM-DI>t6$~-MdR0#JY_@+ga!~sr=?hKU:`W!1mY2OTi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
