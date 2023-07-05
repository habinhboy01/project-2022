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
define( 'DB_NAME', 'callary' );

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
define( 'AUTH_KEY',         'PhLH/=)R_ i$pgL@+T(RSI~%E%3&Mou%d|@e=cT?99) OP1E8teN0#8HSOI+|gp4' );
define( 'SECURE_AUTH_KEY',  'Z>N_5Br%EI-yXh|fGJiKg7V-e)XOl.qg[~6E?hi9hKT.S.`&IubmJvOwhM!q9%)A' );
define( 'LOGGED_IN_KEY',    'ztiU9>cU(223)bk.Sr(:?vrV_=89(*z]%XgM>~ewnFpBs&(G4DMn==!UqZi}jS~$' );
define( 'NONCE_KEY',        '*WzByKga^XX!x0NjdV}Sw^B9}3aQgID}WokuZ/@K.kS|V61Al?9F[$QRRp!Cg2rT' );
define( 'AUTH_SALT',        'p0k_?;|iylIrrZI*z+Y!*g8H#wi)pLNfq;!>3%)K?rMG.nLamN_B=qj1^Z];{n-C' );
define( 'SECURE_AUTH_SALT', 'uJ2~D)eMgNz._{ViOO.Lw:KT!mT^G~y}<A@ 5<G^->$!jX.314@[{-HYPJa@5aMq' );
define( 'LOGGED_IN_SALT',   '.Cw+.rhi?JT|vrv+B`2%(8:P8{9T&VHgwnh-!VtW3}H:0AY2k[]Ep|}EOv>^u[]L' );
define( 'NONCE_SALT',       '0134$ZgR}`w6h?Ov$~yje9cK&m!Vi:i%(U!u,|{3=u1u;mwi.%g>fcvNiSPr^`Z$' );

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
