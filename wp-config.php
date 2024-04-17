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
define( 'AUTH_KEY',          'W4/V??VWLKFGrv,Dz|u1qgYG2pr( HTHdV2:GR_vZ-ks| C)kiEnuO@2)H6Truwh' );
define( 'SECURE_AUTH_KEY',   '2s(J#^j(gzq7J7HYNISm<6Sy_</aeF2L2yK^dSvE8@SK!WG mShodL*lw2U=O<11' );
define( 'LOGGED_IN_KEY',     '1-YH]PCSjBMu,PFSOQyCM/1UEG:xULaN0p~K,AJ;gWU(4~.?MKn-&{s_`r$l.0lr' );
define( 'NONCE_KEY',         '9Da[(sb^W2>SbRLGRAuGn+_?bAW*BDfU-`QR6!ymbi Pf3*<zw@RU|[ON%hY]Wl:' );
define( 'AUTH_SALT',         '>TFxvnIG9d,o7|r1&&(HOA;7Il /a7$I`CqJy^s%Ajv|gZU N0[L@)l!m@Y6>Orq' );
define( 'SECURE_AUTH_SALT',  'KWVw|n1{d<WQ*J)~i9)5#LA,IvOEyt5}ZZ/_B~FB=Xb$Tx i3[?G&+uky/*}T(J4' );
define( 'LOGGED_IN_SALT',    'u>}=3d)DhU&nh8`9gd[aQ<x~YCp8zsePfN(t|8G^~I?^xej5S^=5uVxWRAaO|+=T' );
define( 'NONCE_SALT',        'Iy=)|@*>7Q,s`+D/#7S$~gd#Nv(P)YPb#?UN_3N2(4P<!jzd}lB3j$Z3@V4kgz^ ' );
define( 'WP_CACHE_KEY_SALT', 'Zxeu2^8%L0FI]^y)qf-E&#-|}oko%jc.D%D$F6<Zcq.:`nSFH*c]UX0/O<x%=9#P' );


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
