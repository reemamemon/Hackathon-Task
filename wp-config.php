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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hackathon_project' );

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
define( 'AUTH_KEY',         '$QLG7H&lY}5q>XeCPsa-*.Pl._f-k0Kywr6X6@8c!f%xs[Yqz4P|Bf/}]}^7?=ZF' );
define( 'SECURE_AUTH_KEY',  'l+?yxA]c_/K&i::%J$o_R^7x*S~%XUA=o4:3ANAqjjnb0Yx=MO73fTm7[7(gr*(_' );
define( 'LOGGED_IN_KEY',    'uGl{9?KZ82OO0>u|Aa]7O MP#,V_D3JQ7InXU?`%kL7:NP?8QkM>fR>T@]oaO%58' );
define( 'NONCE_KEY',        'si@ ^QUf1tLgfr0]]4N$I=XvGBQK~fa&x(.grn:(}PmPFd<jtO%*ybj+[%)oIbO[' );
define( 'AUTH_SALT',        'CEaJowN~s,i(337WzWrzU9(i,&7W,Vqa p(M86F}Jdw~h-zl]h?vqGV.n=Uu6s+d' );
define( 'SECURE_AUTH_SALT', '{`{Hnn.*7+p9QRM`WN,iI=Q*O|iQ{Vq+MHl<6KwU{kJ.Z&$9!bt6TBW.p/1`)B%G' );
define( 'LOGGED_IN_SALT',   ' yMJ_9uy?}d=+JJAoN.Fpn4o|0BjG!%0|! }i)/qQB5lIdjpn(]@k)WE6{rhd-wC' );
define( 'NONCE_SALT',       'q>O6J}!7:$[-;Vo?4 9NCQ_&-59{1ApnRSRV5FE9+-C4Pe|FXIjfpS9I !h`F,[P' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('WPLANG', 'pl_PL');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

