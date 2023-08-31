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
define( 'DB_NAME', 'mjeshtri' );

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
define( 'AUTH_KEY',         'lsW7G:d>ICD`:?t[N|G3|`Aw|BMJH~j.v]H:go|lB^lMu;A(=[fdQC6.Lc1l=:46' );
define( 'SECURE_AUTH_KEY',  'u2aOg%nlA.kGpTiNav5Tkg!aqRm!>CmWwBkh6t:!pmXqkSMPNH7.t}dPi9}YB8QP' );
define( 'LOGGED_IN_KEY',    'F2uiW#Gn 4%m|W2w8:7S?{qfRL/Wy}f&a).Xt7)V0ufu*iV|%z<-91{8^ uu(H5o' );
define( 'NONCE_KEY',        'RP(biSXF{NiV@Pqh_rd6{6a/Q`QifxQK=[!}Qm)mxQMRP2T|[Gdbc7BBw@d<!e)@' );
define( 'AUTH_SALT',        '? kkgUwK$7Bf}+Wdk8*X0m(X>F|DH aVHC/ -k]y)}-*wBruS(mQ`?yB&%de]lD;' );
define( 'SECURE_AUTH_SALT', '(Id=rp-H$]cO4{/o:1sp-gwo@W*@drgsWkI~)w}^8K:4KNC1 q%%j$9YCxpX2*Qu' );
define( 'LOGGED_IN_SALT',   '#Uol:~/DysCEE;.CnO)Z&V8LA@h6P7zS5[}i[3WJzZU5D/?&F mHz}X*-TgpB Qe' );
define( 'NONCE_SALT',       '`z|p6{5jflXBt`k6~[JHiiU7)ceSGy66bw]^F3>jll+]zSok2UTAlukG8O<rZ,X`' );

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
