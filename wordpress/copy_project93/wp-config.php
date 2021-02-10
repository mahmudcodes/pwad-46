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
define( 'DB_NAME', 'wp56_project93' );

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

define('WP_ALLOW_MULTISITE', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C2yV2-@)!< -xA>3tWOE/t sq]aM4Z|Ei-R.: IYsoQA#Im$N>/ge`6iRmFV>/}e' );
define( 'SECURE_AUTH_KEY',  'p-Q;6hluA]|E<B6#5fD,/p*W^$&vFBw:=qKq5Hn.>D>w8c4wyNsY_ !hRdKd~WP9' );
define( 'LOGGED_IN_KEY',    '?(9#s:<QZ,<~M&r>$I)g^T5S-ZP KfG=a6c=<pCm4X{N{J2hOeQYIDM1M{R0f:AW' );
define( 'NONCE_KEY',        'Za3vbamA=D+@*Of-<!(o2@MC)/wu6l)CGF?[6@%<aC_Fg/scK[lEF#4^; VqEOfx' );
define( 'AUTH_SALT',        'T8>PR[OJHm1}e#1CIfrY3FvRD}6eC_]^k7BGzEVfE-[l3tXKh1nY2K2#JMJqaa-o' );
define( 'SECURE_AUTH_SALT', '>fo~&3b0@-D(j0^/V]bHgs&j4/nVVt8Zsk8W{Hu580y5yOXSzOvhgXl#@E1!-Gu_' );
define( 'LOGGED_IN_SALT',   'a(Or<q)EaLSjY]Fi(*M|jMxWi*(CU#ISiYeO%7zqJ#KX&#4F.vD&@/O;9JrJ8mTo' );
define( 'NONCE_SALT',       '/I+ebX$ri_ZW`iK]44v&S[)M#wpw_|Itlc;$y)V/WCxz3_a `tRk~H*0%=RB@]iQ' );

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
