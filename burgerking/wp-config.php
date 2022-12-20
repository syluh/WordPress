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
define( 'DB_NAME', 'burger_king' );

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
define( 'AUTH_KEY',         'OKh{z,z]vnj>,mw|gkF |]YrFaQS[@Hp&kTgO]~W+Smpk.MxlR>X6PVw:Gn@p0Wx' );
define( 'SECURE_AUTH_KEY',  '04w%L(*`iiRXWkJ{`fT+mvLv?eIWl>P+bKfKf?4bjBcWRN1}a3@.qP|:/hr$I_JT' );
define( 'LOGGED_IN_KEY',    '1i7C<U;5~)@i`aaT2v]:#OhIKQxP_5y|^R~YmZn5Brk>bmcu>I@Q$ [f+VF|g#e(' );
define( 'NONCE_KEY',        ',@FD~q!jw.3=B)g,EyRS^31PVry3>Ili~b2`BlpoP(*O3%c;L7{*)dtHuh3HlSG.' );
define( 'AUTH_SALT',        '+~@lzdO}m<$o6~Jq;c^`xX+abs- NYem/O~vd5wYcb5B.p{OL5YJxyq@%9aWz$1L' );
define( 'SECURE_AUTH_SALT', 'v;|[aNx7%fmPDoLb9Blki+=}Lt`1v|hiH]j;R9E5f/=!W~{^w36~W3HFi+PvX],8' );
define( 'LOGGED_IN_SALT',   'Ib~2Kx4._Y@@a}gQA,p*{o% vBQP7I7O!:&j8NbGS@#elEILksG#vs/T_qo>Z@8p' );
define( 'NONCE_SALT',       '&ngei-DvDz)e_~6n&:bvPB5PyUlOy8rfL)csF>-%rsH4zH)`tkN8t4i<8W.n:bkg' );

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
