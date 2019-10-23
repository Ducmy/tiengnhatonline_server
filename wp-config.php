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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         '^~+z${(P75~9 Kx|f&xh6HH!!~stq#sXxFmC?P-#53yew*1Gld%uRVL@H{fA;7Jo' );
define( 'SECURE_AUTH_KEY',  '3Za25@C*Wv8].cRP4lcle_0iS]hh|^r@t*BVmsM,5fG&.V-^XeU;;HFSem9 B*~P' );
define( 'LOGGED_IN_KEY',    '4i#4cj0`?!~>d_T/GJQx9g7#vIp 3+O8&/op46t*QysZ%p}3BA-P_irqbF 4*N>3' );
define( 'NONCE_KEY',        'Rp1M+tR]aV?Ex2Qfp33TYYR`1OkLI7_k8bJ!skSgIr)yCnO|UT&OfdhDQ+1HX]$]' );
define( 'AUTH_SALT',        ',)9hoJ-wR}GmAY?4F^8WcFW`UN`~jAAy?)oQQNlc!4%!G-lB-_.KV$YdbP04B;WA' );
define( 'SECURE_AUTH_SALT', '1?bF*:l`Jlv`$}!q0hg/L<3L8wd;Lwsr Q.~vQz~89DnF=^8hpZSN+)a?KL#u.[D' );
define( 'LOGGED_IN_SALT',   'EE,-7GWbb6&La:;2+RK|ahAt6Dqw-Rr UOr[se#Ld:/}pYAngt`l!@6 S`i2RKA^' );
define( 'NONCE_SALT',       'flR8 Io.s#M/!W9E;w8Si3Ea{8?;iaZ#mF&WpY5!{~=`e{5./GP_+Eh{L/`eE^EL' );

define('JWT_AUTH_SECRET_KEY', 'secret');

define('JWT_AUTH_CORS_ENABLE', true);

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
