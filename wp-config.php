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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'F4FEmm!:K>_P6XWL<:z=}*{*}KjP!wt7t4}J29GXgM@zZ@3U(FMWs%0S7OeWP{0(' );
define( 'SECURE_AUTH_KEY',  '+FUd],WKY|:-t^gkoF<@M0_1<,JU$7{JxH&szV)k54W^!M<k&<IP%{}l>Q+&G4/x' );
define( 'LOGGED_IN_KEY',    'BT%ez~y>rWm_|w?Y7[JhjR#a(LLEB]OcdN$S[**cTfk,m`t-?<Hwn?rI&+o:c|AB' );
define( 'NONCE_KEY',        'NrV7|meSGmFKCJz]4-hYcElr5FGWuDG`$_FOM%Mazc/_cN1bag[k&E~C^qKV(b5R' );
define( 'AUTH_SALT',        '#.EmwEMbI%|_4S8;]mShCZ$W,o+<Ww|0XVt*3m0Z~T8!]zp;YC-g@,ye?kdv6$Le' );
define( 'SECURE_AUTH_SALT', 'RYq+T8yt:@dc.tx7b9*UI:I1jk-aN9<SpJUV/$|<2K4o5H~xXQa,F*Et2K`b~MUD' );
define( 'LOGGED_IN_SALT',   '2Jbg{w9Yz>$@88JvabVGQOpxV|h;{f-_Ei4Snkr?>7o$U#pU7O@(SWOxY^(00-&u' );
define( 'NONCE_SALT',       'CVb,q&JC2<T9G&u|}DcA0uQ0-H|YNGJ2-,5}&Q8!41wDaJlKhCX5p[bR,*]}y0F2' );

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
