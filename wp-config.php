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
define( 'DB_NAME', 'desarrollo-web' );

/** MySQL database username */
define( 'DB_USER', 'user1web' );

/** MySQL database password */
define( 'DB_PASSWORD', 'JWD.RNmM9izQ-*Mp' );

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
define( 'AUTH_KEY',         ';%.iY`/GxP)h3F*4(&Ka*gReG+BGqSdyp4[kJ~U*/_A:8RogC/zF+8H0.e:rj*:,' );
define( 'SECURE_AUTH_KEY',  'N=Y8kd(T&3,ttGmp%PJRo>6Ps9?SC!i?U{n}99Gcz*B>Lp<75+AxlCbPXJqN;vap' );
define( 'LOGGED_IN_KEY',    'S@8sTZti=z8jtj#z6aVD$f hi}OD>!:B<?=1CX9Iu z$[/W!jgtl0+wL[EH!Vn_L' );
define( 'NONCE_KEY',        '3 G;0DbFzCAr!PLYKypSZ^GJFTVV^:2DEYx0:Hb{-}0#PGYWKfdGHzgY~sT<_rX)' );
define( 'AUTH_SALT',        't!`rML&Z?4d.c)p=~RjM|5.g w,fPRvA!SG1DGL^ YQz/QC0~ew%kDA71B#1&S@{' );
define( 'SECURE_AUTH_SALT', '.e4Gt,Y~S{Z/==aOfl3gw*3NF`0^p90]Y*`zu4P@6P^bhOk&8!%O* jrbmMtxn$g' );
define( 'LOGGED_IN_SALT',   '{4m92Gy7JinAZl|@WM7xYA[#B]YoDJBwM!pl5N`ffLf1retp.qq}i6SRAw_)_Vlk' );
define( 'NONCE_SALT',       'o/Y+{EA#?2$|^yXzuKXm.FM$uX7x|if~o!:U/#XarzGkRj60S:_.kc4g}][3{rf=' );

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
