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
define( 'DB_NAME', 'voltadata' );

/** Database username */
// define( 'DB_USER', 'webbersunited_volta_db' );
define( 'DB_USER', 'root' );

/** Database password */
// define( 'DB_PASSWORD', 'xWp-QzNCUY0n' );
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
define( 'AUTH_KEY',         '[$tWfCw)d43*&-vKmi_zYTw,RlpuQYr?N+;a;*AUN<jhn6=ZO!jm@YPNA|qPnfA=' );
define( 'SECURE_AUTH_KEY',  '3I H@ogz0hNzs!?U3^*@a3*>M)~h5[?d3,P%}Yf@ _MU~ )YZ0QQwtKo&%vt: <m' );
define( 'LOGGED_IN_KEY',    '@h&o 6M9yCljM5AJ|sl8d4;GGfYV(P]An?=@X{<5~)Q!Re5-W]7Ng`(X.drzw<^~' );
define( 'NONCE_KEY',        'A=8kxINt}F-6;1]Y|u #Do}hKBdX`vsb5)tNMnFCnzA9/%rWfE&jorPWt)nA:y^:' );
define( 'AUTH_SALT',        'F!WJ^]%bm+`/+}f7bEJhq7I6Gr&po<(](J-M0yK7J~ep5_uX}ED;)Dd2}MwBwJA7' );
define( 'SECURE_AUTH_SALT', 'hY|7sr=Aay=Xv3RWw1>[Vyd8L3=-VA:79_!z/U/>&[~a&Hoyv*s4;!_WuhASch|!' );
define( 'LOGGED_IN_SALT',   '!*N|!:6Z{k=enb-H%ldeHdsf>Q84=XL.#uMPIig#j=7)?7K}mOb9dQrG2:B42cTW' );
define( 'NONCE_SALT',       'd2yE?;auj%F}7AA1T7k5m0=C1.bRrRxn}F7*]6$[ceCRfR^!.DM2~6IEg?8NmXq7' );

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
