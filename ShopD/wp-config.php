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
define( 'DB_NAME', 'wp-core' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'HTcAtrqi21DGV8G|^OqnqAm${E{yVayVx(tFfUL5qNpSz>HZVI;`c5L/Q qxtw7;' );
define( 'SECURE_AUTH_KEY',  'l<28pCw)q/ZF3$nh6EFgk^iFDpSju7X9IwlSJ4kbq88jG&uY6..9X-[k~&tiZ8wT' );
define( 'LOGGED_IN_KEY',    '?:Fo*!O,08,e2x.O9m@+B%{uJ#ztMLS[Fv0e3/[Q.)}lzn_;S_7w%+T4ggFRDJmf' );
define( 'NONCE_KEY',        '42|~^.1jAT80omP&[G?{%zWX!.d8_`7B#5Grf=d&anSJpLNw#S#,m9V?/5:pKtP1' );
define( 'AUTH_SALT',        't?4)8^Swh+tY`-Tlac$yxiM1!Q~#ahX[G*Z6Z()J{;UgO_vCp18@Uex!kK5-:$Lj' );
define( 'SECURE_AUTH_SALT', '$KQ9bEt|hYeeb7;agf>c%ivVSP<y&0VQ<-L->yvFLoMhttGnQ+Q7n**Uy!<l(>D@' );
define( 'LOGGED_IN_SALT',   '_ JoV6mJAVT+*)a6nCkM:h:pmVihvV[G=#neVn?/v7|06QwDwQ^&[H`y<P{uZ^cH' );
define( 'NONCE_SALT',       'ss.{,Kq)[B)_>i},Ew6PDY}L$B~XB`i4o[h;4@ _!38Ti+4!OeWoJExY8rNg~6+y' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
