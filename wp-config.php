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
define( 'DB_NAME', 'lurnaway_db' );

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
define( 'AUTH_KEY',         '6+}|#A>G;e}cTw<=b#SC49<E?H+68}a$Y:<{ @x5@3nYA*_jcae_wn/b3?>VUeoH' );
define( 'SECURE_AUTH_KEY',  'LBD3-Xx2fFgP8}SXAA]9[~rL)]TjRA)T5syV3n%2&li5G_mBW.!RduE?0&*ww?z(' );
define( 'LOGGED_IN_KEY',    'yl)OJxFo[f<Oj6 D*b~Z2,,VP$O1pkgp@Q:0}-O8cIp/]J Z&[keb(^@`>.~p:ga' );
define( 'NONCE_KEY',        '1Lh7PyX];}?wFdTnN/tgjo)&vAN~29g[)YVWda7ju!V|%*>>2*P|*2C|S|&f[tF ' );
define( 'AUTH_SALT',        'OcBwb5By*0))|V/W!4_ze5c_=U_iLt@.^Sho/{a9#%:/^]{ahrQOsaiG]H8/3zXn' );
define( 'SECURE_AUTH_SALT', 'm]o[/}82+oi>b1={0(u3zwJ82sc)xl|/z>8^HKA~C v@B 0Sb*t<%eKG4B<0XGIA' );
define( 'LOGGED_IN_SALT',   'X|s@BPCK93DKQTv_@J{pOR/4v`XjNf*zX ]Au-}2$ku:$,ajaFPxO3JK?&ekpr#Q' );
define( 'NONCE_SALT',       ']rKC%)`Q.W]e$sJ K^;(qr:pL~_f;LR5%/c|3).wBwFjS@sv+t89D>$#H=(MPpY~' );

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
