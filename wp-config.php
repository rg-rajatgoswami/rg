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
define( 'DB_NAME', 'rg_db' );

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
define( 'AUTH_KEY',         'U`=#aD}>1),flq -<eo= !cS>1XdaPdYU(-`51y:6d)?QK4}{zI*L<z#<V4_$cWR' );
define( 'SECURE_AUTH_KEY',  'Z3 4fiT=otkdPEyo#3) zKoTy3ZR5 fKM@]sR?e$IAJ2 :L 00T?6yp}V!];HvrB' );
define( 'LOGGED_IN_KEY',    ':wYl|JH4<k<}>!{,vN`LqAx6LMnhs]Qw1N}z2&.},J&B]B!u`$)&hk7__G@^K.g9' );
define( 'NONCE_KEY',        'nRx}CC)EOUD71gyT`uz=ol^ziMSsqf.&{K?*c::$NgTF}nHmvCA=QcPOoV4[ejb5' );
define( 'AUTH_SALT',        's3Vo#kdErXl4*@K((1q%RAr(x=!`lZAD2wu*X8S})KR]b#43>W-eMWX7C?U30$=.' );
define( 'SECURE_AUTH_SALT', ')Lt;S:v9m&Iz39}NqI>p@3To^B$IbWJ0|Hx+Lz%Q<0JL78BeaLs!jNyH>uXmS@aS' );
define( 'LOGGED_IN_SALT',   'f)/*C->xC6uj|lnsA)Sbdm)ZrdUpBWTb7%z3#ccUQ.}&w9x<%0:!Ss}~kc5/oCwK' );
define( 'NONCE_SALT',       '=HcqTR18,V~/Og.gaoJ5lB4OAB<h=7-e53-<x:/sTB^U)^59vR2#8`8y.kC%Etw:' );

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
