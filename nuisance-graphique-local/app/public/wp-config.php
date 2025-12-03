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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'qwQLsg{nde`J{UA VX[uZ8qat)BBo4SF&~Sg<:;b6je)Nze85mA!T04F;`4?4ItM' );
define( 'SECURE_AUTH_KEY',   '}s0EnpB5I^:7zi9hdPax5~DhAq|]$!JCoC-i`7[-DBu~3Hd~](m7dl2vMPvbvFNn' );
define( 'LOGGED_IN_KEY',     'Z w|pQ}s#IJ4YGZ%8mjJ7%(>P`ua-!W-Z$76^1Ch:URn?=t-0,_2r~In>G |mYG@' );
define( 'NONCE_KEY',         'nftBzx;|)J=}yW%Ably;:GHY|NjSuNf=HTx(s5By6I{skYJLJ5Z!X $Q+N(URJ$]' );
define( 'AUTH_SALT',         'qxOFa?ueH{Y=^6X bU.I8SkQ7wRq73HOQ=1xQ$C!d0Bz>.IFvoK+qkztX]?X1HhX' );
define( 'SECURE_AUTH_SALT',  '>toPY?>vR9*^3PK$HgNnM7q+c7Lv>T:2hkB}G5|lf`PCw-_23;Jv<pa]8EE)PRvR' );
define( 'LOGGED_IN_SALT',    ')dK+%^ll]$a-W8Q.]Vq,}2.v^[a!pARbBpwrk{U_RTdb2CN~`alIrvaGE+}Zy4W`' );
define( 'NONCE_SALT',        '4?s3>[yFEUtdwZya,/)1U_?]Np&Y%GP{IUR9Z!)NrKh+e5o{3z&[AuAN[?!7Ifo5' );
define( 'WP_CACHE_KEY_SALT', 'Tcp_z^X<{7`jo7bkWtT2[med_8|TD;$>YbE5e}ji8vBPwRNMim57J0mMyUqyix-b' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
