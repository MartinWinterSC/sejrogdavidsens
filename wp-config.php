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

if($_SERVER['SERVER_NAME'] == "sejrogdavidsens.local"){
	define( 'DB_NAME', 'local' );

	/** Database username */
	define( 'DB_USER', 'root' );

	/** Database password */
	define( 'DB_PASSWORD', 'root' );

	/** Database hostname */
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'martinwinther_dksejrogdavidsens' );

	/** Database username */
	define( 'DB_USER', 'martinwinther_dksejrogdavidsens' );

	/** Database password */
	define( 'DB_PASSWORD', 'AdminM556762Whiskey' );

	/** Database hostname */
	define( 'DB_HOST', 'martinwinther.dk.mysql' );
}



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
define( 'AUTH_KEY',          '6Q{}mM&h5Ivxb|~{-$kL+kpiQL<fYOH}!ePbz_NS>DygOD;aLJU)ckh#22aC*[,o' );
define( 'SECURE_AUTH_KEY',   'gKE8?zFoD@~@s8/m66t9*_(L4ED)Iph[`6<~A-&uVTMh5V|b]A2QDtu$#0TTs[m@' );
define( 'LOGGED_IN_KEY',     'NEG$G1dP)6%O>oi]a3B*h[)Fel5FK,Bxf-=([J76JFG0D>>}ujBd`^SU~^&{4G45' );
define( 'NONCE_KEY',         '/{Tab}q*lA7jdbyTAuJU_~#+9h`y$a^!FpF[AuaddN{nfI>Ts!OZRr/@;,(A1/U8' );
define( 'AUTH_SALT',         'lpg:{V3L[8Q=Ag?3;`#a<EFed[>rvV1{kMC>;Y[fr~@khVmBOV|e[q khi*<|Il4' );
define( 'SECURE_AUTH_SALT',  'Fy+!(DF)5p Mo#u`i7Qc`n@Zp2yV$z_:T@d0sjy-/Fw&Zk1D0`^O_#RC2Jm{+p},' );
define( 'LOGGED_IN_SALT',    '%PuFU5Sc !}:?UZsu]N*eX~}MJa]}n^Mbf0GswFTdZ2-?am*J<p]gsXu!gw9<Hx!' );
define( 'NONCE_SALT',        ' 4PSq3weS0t9CSroN|hRu.$-6mo3B94*`$Oq8qs|5x2tmfg~OULp(6,/tCg)yi9{' );
define( 'WP_CACHE_KEY_SALT', ']q5h{oM]4W=wX}4S?LQQ/tHb2*P3M%UwI6c|utkg.M-h[[S{5U0-Tsi]gZ)29&5}' );


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
