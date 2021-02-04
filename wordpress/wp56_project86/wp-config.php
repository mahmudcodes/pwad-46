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
define( 'DB_NAME', 'wp56_project1' );

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
define( 'AUTH_KEY',         'P[+o,eCyKl/{M_C+~`/lc%?E;a;W%wA xFS=}P5<ooi#@Bl@AW?-(<)jaIeIg*5X' );
define( 'SECURE_AUTH_KEY',  'os|&uLhTG=n6[Du5LnTERXRd;7soA;P&`dELkw ET}1VSF,6~}}:hiN9z6eCrrl/' );
define( 'LOGGED_IN_KEY',    'Ei9(OV7kzTT<E$=?^D{/JDFQ!KuY4Iw0t87u!Y.+#c{H>fo`A$`aBiRrLK|6t4|i' );
define( 'NONCE_KEY',        'K44Vp?kK?#<d,S| 6m9K)O4&84aZN=% hAPYiE.NwJ?_3Dl P&P8@)f9^9v,{CDg' );
define( 'AUTH_SALT',        'DC:7^~aI;:>?8=Bu$yDZ`RBS!f3@v]S0tzpIo>J0GS;zs9Q0m:d_YTf1Q6l6~a=2' );
define( 'SECURE_AUTH_SALT', 'wHmI(Q&3Ix0l;l;OTpv[azAnf9s1%erW*I%/=W86`^to<2p26f&kt|=f(2clI6Tn' );
define( 'LOGGED_IN_SALT',   'E]ax3iz!r}Y+Q@C`se*FzCF7pRnI.AKfnZWZB%_UDtE&Y}AEtCtCQA?)XjaO@eP@' );
define( 'NONCE_SALT',       ']!k~|o|J7Dvaz3CRho45?Z0P(m(AoV)juMKst]kkLuS ZUO^pQ r.n4lsReEwB4R' );

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
