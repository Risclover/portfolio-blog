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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$7d`/SXf>kxGQSrYe>L@yr+Jh~-]>omMx~AmL0V3og,l]CS!S._t5SPTfNx%5@Ia' );
define( 'SECURE_AUTH_KEY',  ']u*wlabHnCp?1LkE#YU+rn~moOLFD|NCJJz[}vl|U.[i)8wfln|1x7@9I|kK:9C|' );
define( 'LOGGED_IN_KEY',    'hdLE?w`_4Fw)s+Njvw+hvP9xiRo4lTbZO5>r7sZYTWxs#M[Qf%$hi]A$1o:K=|$u' );
define( 'NONCE_KEY',        'T^DOcHrG6[zj-% 4[LAcf0R4(Q5e{I=1#%{{#4-tW+Y_OvQd}rRr`g4=%g533Pv-' );
define( 'AUTH_SALT',        '}p~b:HSu,_doeZ.=iHt?BXzIPz5 eb?G4l&4`?^9`D%Bt==I3i;:_IR;$B]&:e,2' );
define( 'SECURE_AUTH_SALT', 'nMSs1P;KItFEK|Tj~iS<5t8di6iiPscQbdMuc2TY>,3-$0XZUQt?gSL150ug.gP8' );
define( 'LOGGED_IN_SALT',   'd:Y,1]XD2x@.ti_d-&`-97:l7]4eT{bL`2.nMn<1%z|y3t@>oH46#K)VIKalTYt;' );
define( 'NONCE_SALT',       'OUC(H Q|h0{z54z$+hvhy+7&=7Rz} hLG|jdZ#)P5$[}s~^joxl4qMqW/OY,.}Zy' );

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
