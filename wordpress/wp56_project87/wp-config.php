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
define( 'DB_NAME', 'wp56_project87' );

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
define( 'AUTH_KEY',         'Ddi;F}%}>t[B6@CfVi86.t@dW-F)2c)sU`+aJm{N?Z9jA1}V$%Q5jOY_.yMpkuat' );
define( 'SECURE_AUTH_KEY',  '7{SDIH&=b?C>ZL63ZTy *TL4QLcTnP!+)c>?,!.mNeAt_(b/9}6ojj|vTp,F/r5e' );
define( 'LOGGED_IN_KEY',    '6a4@e*[a?z/v~|t#mch>T(=(wxc0(b3a1Gk2[6(&(f%A&+{(;,f]_!c,Xtd-UAVr' );
define( 'NONCE_KEY',        'l**x/3p*8(]d26N}NI$RB<B3@+= X&^k/F;~M y!RLqD]GyOiA9I=+njr6o<OCe~' );
define( 'AUTH_SALT',        '!RFBDeZd_yFVLWfuL9Q_~p~ql)V5O4)(X%>6dz[jXL8w5vf[$)4}&R2j:Ywa{wEw' );
define( 'SECURE_AUTH_SALT', 'Suu<&n.TC$!2X*])67KT1~doL/[C M633Y6W4!v`ZxUb%(-KqO0fz2Mj{d0fK<p]' );
define( 'LOGGED_IN_SALT',   '-/RI&CUL2&k]g)H3/7k^HBWHNS9^P=@qO3p-C>iwy#s>KEV#yqRxy>:?^(2ldI@J' );
define( 'NONCE_SALT',       '1$yf%fVjRu^]z/!p2ZZ=l,D,Wn17ZgrCai5wgJyZ1kN5D/ PiXP>n(VTz% FVAG|' );

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
