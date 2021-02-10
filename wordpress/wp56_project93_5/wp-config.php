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
define( 'DB_NAME', 'wp56_project93_5' );

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
define( 'AUTH_KEY',         'm&A/=P@2eqr8UF;gUy}VQg~o.YU]R1(c@X2N6@`Af#*Z~)I-N cK$+}J3YFp5KMW' );
define( 'SECURE_AUTH_KEY',  'MmlvM+c8nif8i!$wPY4nM<6H/+~_tnrb=9e2X;~U-K.m.[;m$Z@u}LQ(gA<{x/9)' );
define( 'LOGGED_IN_KEY',    '^0v{e^HW>NcEeyi*h~MHK>|4^N{cfXDx9QhFB1^_fOm<0e3uf =mS?jf<2 GGg]M' );
define( 'NONCE_KEY',        'c9[U,%xcD5kf$jo%uo%ef6o8`OS:K9x)iD]|?<p=5-MfZ:a&^NNB.LU(`R[J75|Y' );
define( 'AUTH_SALT',        ',#&P!{-J$9NGkn=`&%@9$nm,U-$kAG?;z!TK~F+;JT_nXukwD~BFr.y!.&}>E]6p' );
define( 'SECURE_AUTH_SALT', 'ulzd(fCr,N*7O9#P_`^#l_(jC:?cb<phg_uS8+Gf`u9v k@M;aF3gT)D%%WeSqJS' );
define( 'LOGGED_IN_SALT',   '+qJ%R_k}^O(C{Ow[ERXO:z^H`=r`E/8F+z;pbA%a4D_**$tL5jHX3qYEi>VbP*@M' );
define( 'NONCE_SALT',       'gTNYMH8T7Y)NlM9pvZ{y94#L>@]>Eg_CCuZ8u@bS&8z{`}4Rq(Xa;[BMH|~K[+u[' );

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
