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
define( 'DB_NAME', 'drip' );

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
define( 'AUTH_KEY',         'Fkdl9|iJ1u@?nf+kUTG`X J$UZEt!~_=3:AjcNQL!XA1/uYCIjvDm0X!2q0,h7M&' );
define( 'SECURE_AUTH_KEY',  '_Q%`@>%FEzL!|`gKFpx.H-=x6)KEW9gS<Z/e92QFBi@2r5Dg/vS@I|YoW9af!v5A' );
define( 'LOGGED_IN_KEY',    'n={`@,Lxx6*nJtyXl5KqH/hD3cba_ek;/T=t9SEqrrLD}Qxl~;qxvOMj.f;{&B.F' );
define( 'NONCE_KEY',        '4~pFiG|:(sPe?dn:CZf`6[{$B0Ee:W=RS5)4Sw+nJ$hc ISK/h/#vqA(+BE9j$:=' );
define( 'AUTH_SALT',        'I|v6Yd4#vq*#Foeyx$8#q08|%lE+*/ Wp^Mqu@rNn x;v5#*Ch1+>;sP=%d2%qbH' );
define( 'SECURE_AUTH_SALT', '-+.j68/02}~M;dIVL]+^Kg^Q`4/~:cgpRnG$FjS6/O;W2[y$gxR9_p,J)@7qb$Bx' );
define( 'LOGGED_IN_SALT',   '.bx5^|21N1CfAYhw1d%(j0A]B]]vz/D7QDQPd~CF4/=*k@Mn-Z2^^CGK8?7(h&u5' );
define( 'NONCE_SALT',       'l}|sRSlR`ir GpNfL]s6/jKPk<bGvh#sE?`XLvVj=#M{&Pz`d+NOSxg$<,I@r_|7' );

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
