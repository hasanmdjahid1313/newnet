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
define( 'DB_NAME', 'newnet' );

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
define( 'AUTH_KEY',         '.2e0Q toT]96:`J:P)wLc,9mXL1sUf-g~l7ac1@1A{x`G.E?Zl/#&!<q~K_MGLaT' );
define( 'SECURE_AUTH_KEY',  'J6lX6]s*O~H8J%}/h668pkxR^#Dbtu~J$MxsRlM3C)JoYL~^&G:<Frk_SLk-wC4Y' );
define( 'LOGGED_IN_KEY',    'v*R9Q&2USY>`C8-7U0cVwJS])5u/YBB446l64%hjnsOnIIC/OQ,+jWQ)ULXy.#pa' );
define( 'NONCE_KEY',        'nR< ,G1{aU^_9n0^EHcj_FtDRh%tx,*:_i4i]mT|;h0BB}on;HMls,7;aT0[jn]:' );
define( 'AUTH_SALT',        '#G;l:}aUKpKcRKTxr0U{%H-f-t3pw3q]%tz-22L5&4^9oro-hV8>Y:/;t{UzCt(x' );
define( 'SECURE_AUTH_SALT', 'a4eAczQr5*FAxZKD}?nT O0:f5xQ;wBG%J1 LaEE6)Zy$%h6NZ/%QRb]v]1U,oBg' );
define( 'LOGGED_IN_SALT',   '55`sCB*B9YP$e;JLS^tO`{Td1kj=9H@]sSfdXRo-Q6>UA2dk~-qAw(R5htkf8f#W' );
define( 'NONCE_SALT',       '?Be{hfyA$p@j%_qv+G)xM)J9.7wm(Q8y:@O*B]#?mmV?.2oCO8U }+,dTRV$Ked`' );

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
