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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '<zfp=snb=b}I:T`rzYFrWi4sGx@(6+!2<]&LnVam&J=%!-Q0<!7tF{7k`#FMv.PE' );
define( 'SECURE_AUTH_KEY',  'D@V2BN_J{nNj6a&{Ol9HFA#|r%SoXlV!9:cnl@#OsK/=2KS`|ykWa.@ppJ8]LrtY' );
define( 'LOGGED_IN_KEY',    'n(u+BQ!u5PNEe2N7EOyl4$>I>{-#9n7%Z-sE/!e*]t 8E[D/F-(E$Pb-Y}Y52M&q' );
define( 'NONCE_KEY',        ',$j#BQ%d3]_lN<$Yna TLowgB?#d;44I>2LkQ&ydoaiE9qR_e5=*5y})M.X/_H5q' );
define( 'AUTH_SALT',        ';YO{Ds7|C#)9il_HL_u2OVons1S}>vn~f/v5TEs[?duJ*F_igUK#:*{cx,?~5iRe' );
define( 'SECURE_AUTH_SALT', '#[pd:SXv8YA&ow)Y`,{-COUr8o<FJ5?mVnn>?lJdIoCO]G^w/:^8w;93e566B8qe' );
define( 'LOGGED_IN_SALT',   'dl pLTJG.BY=J`K$RQ0s1n/Q^bs?Md}L#8WcNjS`^41OH89&U`T9^D[5c1r/{9}a' );
define( 'NONCE_SALT',       'l-`db0{)2Om55>^O7#{ef tR2AY4eoWf]6k9XQ[SAj(fFZI(#Htcsj1{Ii5w)*#X' );

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
