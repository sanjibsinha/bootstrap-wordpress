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
define( 'DB_NAME', 'bootstrap' );

/** MySQL database username */
define( 'DB_USER', 'lokhu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lokhu@100' );

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
define( 'AUTH_KEY',         '$7)(JA7,*YY^`dV9{!:oR=WiN-*ZWDNe<!B_X*QS*.-ESKf.$P6WVDk#:irv4G6p' );
define( 'SECURE_AUTH_KEY',  'u[PiejZgjtdarN{iwbW`#R xUkT55So-(hDclDhv?j0sd^qabSsfeW$>R%n.~O&a' );
define( 'LOGGED_IN_KEY',    'r=<Gx_* DTWh;%sI`-!Jb &-%B1?/OZ&}Tl5h=kOz_i{]D&.>.#O<dh}N N:29Bm' );
define( 'NONCE_KEY',        '-BP% Ru1,@%=9767!p.4h#{VG;9%g2,7BY[9%iu+hK0=!Q.&3(n_c$G0_E}3!lPi' );
define( 'AUTH_SALT',        'r61nigbO-$v*$H$dz-lc*N|P3Zyl>$Mt;mU;z{hp/uqdiXUA!{xDSs$dU#n6Y0Ow' );
define( 'SECURE_AUTH_SALT', '#3MXs&`K<[P-{0S^@qyl*j+uG0!oRLMh54H2MrGG*47;=;]!QY9mgDo%zyXnR!*G' );
define( 'LOGGED_IN_SALT',   'W<}zB1/l:0Ke}<wZ/(;>m84Fv4I%0=4eXrg%V]mon<`F2q-.!a(0G$tzHBuesYag' );
define( 'NONCE_SALT',       'J:7FU$E`*aP)?&DN%R6GqGhrFZBF*Z[lb~bZ.l!kD*/up E624[,bTP1wNoDt@0F' );

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

