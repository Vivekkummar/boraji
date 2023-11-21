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
define( 'DB_NAME', 'boraji' );

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
define( 'AUTH_KEY',         'JW{=9uEJa|>(0jj/.; 2V `+:*/f34A5A}yXE[rYa*nJ@e,by3`S]=M+bX1g@hr!' );
define( 'SECURE_AUTH_KEY',  ',l_O#k+e.7d{Dfq;H^bw}d$[pecKmLh_e75(9h[^$m`{YR.9Ir3RrJHFKy<S1nFN' );
define( 'LOGGED_IN_KEY',    'cf._H2nIY`,[l0>Dka(Vw|2GWGtI*6G~/y+^t6gk],N]AbY0#H#Cj (m#n@m&3nC' );
define( 'NONCE_KEY',        '%dU>(g!<;4KX&rECB+C-m31,;9JYA&tt41XeuzD{a8O8%Z+Pt@/^/<1*qRf~jjvJ' );
define( 'AUTH_SALT',        '%W}HNeC8>L-*8f7@0nrUJn[8#[p:zn5.#[jxp/:#4i1x7w[|vH]8pXoh!-:uIN`G' );
define( 'SECURE_AUTH_SALT', 'R|J$L5!JIH9r~z9`Z;`?>hN2#.C3G2;Pv-_X^29Z4{AW:n,1<L>P:68&tPUQ|Xi-' );
define( 'LOGGED_IN_SALT',   '`]Ymg @r-mSA4!OllXt`oE95[T|}DbG_fyPG=x>Rt%xLAKjR!V]R*9Sz|h@vT;AR' );
define( 'NONCE_SALT',       '==PY?mSmV-%QYFeGBnm9o :zS]E.?@$Ag@h{NTSO@7xW2!Qa5bh!@i~0zqLkuv~~' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
