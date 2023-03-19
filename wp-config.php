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
define( 'DB_NAME', 'mjeshtri_db' );

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
define( 'AUTH_KEY',         'EW(r!wOUk$7Y/>N:pB)q0Vl(L|Dg2Knm9ws]`N5z=~mt?-&rLSHS)#g^}yS6h/fx' );
define( 'SECURE_AUTH_KEY',  '!key yxMd@@)Y&O6GVi:O>rJ`:>+BhbE@]xWJvn@9*Y jOwX=}*+B|.O3`$(Uo>?' );
define( 'LOGGED_IN_KEY',    '%4^QU##B[l]WP,GSX/`7K5s[&A_cp=8xYlB0,KWRx{,b$ta!#w9`_)(5cnSYz;%z' );
define( 'NONCE_KEY',        'D*ub>[GqwjY[E+g`pxebN=,)v>NzoxH;nOR*&yX.=};3lX9{n%X]a^!1qnDy,e!B' );
define( 'AUTH_SALT',        'GjG8H6eKY$6*[z#2BB;]Qv%7kU(@%!bvRm7y[K?$@^RR@9H{Y`htRlgxR(wy:F%_' );
define( 'SECURE_AUTH_SALT', 'BfiHtTx9bY9S5gK]]^Ht@+~cX^8w f !tds?xM%UnA;t_XF}fT%]`#o:ho*$o`$5' );
define( 'LOGGED_IN_SALT',   '!66O>pu+mo235;}Jzus^6exiD$7JAZYq7PD|=mC{Bf0r%5nijze`R-5XI151e{ma' );
define( 'NONCE_SALT',       '0RbN3C zvxcen5P~lL,&n~)HJI-Mc2tT5-bLKV&FAv|~o:C$I2?})TjfWhZC(-i+' );

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
