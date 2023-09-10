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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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

define('WPSITEURL','http://localhost:8080/');
define('WPHOME','http://localhost:8080/');
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
define( 'AUTH_KEY',         'H_V{zY3#D/9d1Ey;1 -J]Cyio]Hp_>vZ_PCGWs@S&MIUNk:4U-/NFZeG[e%YK`E$' );
define( 'SECURE_AUTH_KEY',  'gd9BDwV&tq;^b/J`Y9buBNdjtdUX0U,,1cmfCc1*auyi2:hd-30m(`DQ$lP6,IF|' );
define( 'LOGGED_IN_KEY',    'wi|=iYquD=/Pz5DEXj&mD!IRVsU83qW=U5wXxO?.t{lqEVT;grsD-[n%(a_+XMqU' );
define( 'NONCE_KEY',        '}4<CxqZ>/lJ*H58S!$$W!QXlwM]Obx=e1$5Wv8]ZdH #VxNC|!jfT#3(Xd2l}wd,' );
define( 'AUTH_SALT',        'y*XIs%9UrQQIi73DfGBm=GUf.h8oz{09;TlL9KRXe|PTwk_Y1Iu}cMRAcy>u*srC' );
define( 'SECURE_AUTH_SALT', '+p@k^+iT=d[h~9WL4rex1kvoyVOy]];O$1zZ8z<^t#7uE*}iiN_NFL_sO./l%L1f' );
define( 'LOGGED_IN_SALT',   'BNBPJ]s1!I~ 68y7OasTd!scEKA*W,xM[BsPm5ilmOO@mL:-!2(IN@2^>V*x@8iK' );
define( 'NONCE_SALT',       'I*Ox@kK;yx@2%K#bon.An(uIF6/xif{Blx7(B6F3d1(F~L!2=F>:7i8YE03yMF9D' );

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
