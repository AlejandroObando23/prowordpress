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
define( 'DB_NAME', 'gestortareas' );

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
define( 'AUTH_KEY',         '|i>(/6tp-HYN^):%o Q]f6H[+U(6.Z!wh-3gH}.w_zt`tmR+K_*4qzk,s/kyEO|m' );
define( 'SECURE_AUTH_KEY',  'O5lUr/BTPjvV&+2JInAA!1B|i 8gu-f$JIp?U?sdln [QfG:+ZaRz*vl~9GTNY+{' );
define( 'LOGGED_IN_KEY',    'ii%}MG8GQ^zO`Yy~:=K$.@X/~2uV#cyi+ab~ukMgP;pst^_bbZCp,B[7Q(fTpJKb' );
define( 'NONCE_KEY',        '3wCslX/K;rZFzPmw0Oa.Tr.s@YN 1UGqO:%>S]d2O^j!J,gtmI,&VaeO;j!]$S!K' );
define( 'AUTH_SALT',        ',<|pz^s5kp%vJE`4c4Fzl:XAA,qkS+xiR?};YV AIo#dnfWQ!5}iL<Dbj!m/}_b6' );
define( 'SECURE_AUTH_SALT', 'bd*Y6B?c:e6_ -c9MZymr>3fwjxdYI36bNR2= hR:<$a7a+cb43^%PR4w7Mito]Z' );
define( 'LOGGED_IN_SALT',   '6tPj>t>,0B,k=d70 jwQxI^Dr,{gsXDrB?{gd9TFZS5s$MET4Vj6T4VuB4S8o n(' );
define( 'NONCE_SALT',       '3JEhk)44`iR&I}ODMiF;RsotS}(C+Qh_IUj$-~n@pl K~i$tBU3RGyAz/-Yq`+Rt' );

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
