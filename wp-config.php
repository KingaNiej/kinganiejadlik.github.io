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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'JOUJP|[ooBNMfMXwhzP^+t^+^}js^.=1DBH@%}F[!^=vJ6pV,pgyRO^=9Hkra6KU' );
define( 'SECURE_AUTH_KEY',  '>db_&75w>6-s$Db#p<`:vH5.`,w+xLlzrkPcE#nJoVWtn*l^AI^]G5Z`F8&zebQy' );
define( 'LOGGED_IN_KEY',    '9Z-#2]`B1(mM^t[{e>#QaU9#x> ~TpMm$dYcML(E,.V_g$s5Kn<%Xu#i!?TNB<us' );
define( 'NONCE_KEY',        'IuOv|kTrgN:7JaC|7|%E_b%N$o;2g[^mP0T9}(6xXj-AsaA7{ez#?EjPz[h7}8 j' );
define( 'AUTH_SALT',        'OyZ`^g:9:w~Oz-PKLZm#e4Oibi~<3/np6aD=Hz2AhAeP,>2ce5s/Cw=_NfpW!jbv' );
define( 'SECURE_AUTH_SALT', 'P.H`&iGFoEWIc &51rg>K3o2bR%dL4W0Q* Rog8Lb #3d*07e8P$&.@6?2uU7fhe' );
define( 'LOGGED_IN_SALT',   '=aq{( ZFsNjn%{=N+vc }u9% WW&TV2WBk1 sei3~x?c.ofq=e^-w3io/2(3!J0%' );
define( 'NONCE_SALT',       '>J}v4k>$@lzcr#&}r)-XCnCu0`-iibk:AD}1pzDh?J^|okjhOE<c)n3X|@qT &7/' );

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
