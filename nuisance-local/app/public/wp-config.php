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
define( 'AUTH_KEY',          '{=`t(t)xn/}fdxiOebNl,Lnd9Y;+{^~@m%V,qsx!y!I<V83tY80!@``scjhS,SBr' );
define( 'SECURE_AUTH_KEY',   '%>5fsh&.j7zl|lMP0vV|pJPQABl!]UIL hE$A/JZ! 8qNs[4Gsr]@Ek+w~R+2D3Y' );
define( 'LOGGED_IN_KEY',     'rSIVdSKH}Sul ?As,LJmPPW@18AOtP28cG[Bw_/fQ-k]YU1p#]VkX`<fR]Kdua%v' );
define( 'NONCE_KEY',         '@2>3`LUyTZ`uTyI|zC64Ub#=:0adPtcrtN]kNLV*;uv!kXG6h6O4oH38.Q#<E9mm' );
define( 'AUTH_SALT',         '{rWJzdF<(G_G2 O_S4ylk72zA&;?2!~%2S]:BhOVId)h3l]>LH1b12DMnz^.Z<7+' );
define( 'SECURE_AUTH_SALT',  'DaU@3$U6`]k}dMB[)BiTN%05DJWP4k/*`Pu(-wCa0N:?V0ALcVLwC#yeb~}rbq@$' );
define( 'LOGGED_IN_SALT',    'F!2B7A$yxHq3Zkb.ErMC}xW>]cyvo[{q=MwKj^4b[+)9uN1&orW}~mQ:T@cLI$7~' );
define( 'NONCE_SALT',        'D9)IC/`Nh%2dQ{[R/8rM,1<rVY`Z lXp+-?AI+|.xtwW;1,`,&uA:Bbx[[=eOo_s' );
define( 'WP_CACHE_KEY_SALT', 'Bc+%(<Sc=k5[N~vB3)`/Xh`hs3y<Lund0tWH|}q~TtAvi*Jhle:a3licYky;Tls8' );


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



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'nuisance-local.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
