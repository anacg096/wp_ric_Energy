<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ric_energy' );

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
define( 'AUTH_KEY',         '%O8)<Ui3|;5jMC=v(0/RpXQgt7Xy1FA+6R}M<wT`D*`ondD(EeE*zT7_Hf<clA:D' );
define( 'SECURE_AUTH_KEY',  'ha^EJ+cga Z2i^T>L.pFT5iGeBS_3w3^. #LB0Qm,_NxWd9$32IKMk;v&|:SU@j*' );
define( 'LOGGED_IN_KEY',    'p X,6V-1venlbOM:pi%a&TBCz8c)aK^RHtDlu%KtxPZI,cDvd?wpp)8w9/v1`7>!' );
define( 'NONCE_KEY',        '>DM$_hpCRY%Dn;q $OBM@8PR^UYZn.a}M|2lRhrCD=iXTj%|!dl*s rpILUsAp6M' );
define( 'AUTH_SALT',        '=(`,:=8C].-Yam#>B]Z$Qd=XHFy+?gg+(yHE4}.L18R3(p<5/w{*Q6W!4Kh>^tXd' );
define( 'SECURE_AUTH_SALT', 'c4//R#S9<(B$%bCUhkt-[GU6zgk,9vSt[/tAP+v ]m{M *OeaugQK0NpS,#.N?6)' );
define( 'LOGGED_IN_SALT',   '=$sGOSSvv:kKcZ=DjM]*{5}G2SF?vo4tZEC3x]34noOTq_^5._s-wUm-u/6<[B/i' );
define( 'NONCE_SALT',       'Nbmplz.t~YGxV6-hK[A}]>`{[$aiO9lS_!xWgT_,d!)m!T7F84z],<gSA)jjoG(k' );

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
