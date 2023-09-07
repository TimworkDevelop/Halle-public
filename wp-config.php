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
define( 'DB_NAME', 'devproje_halle' );

/** Database username */
define( 'DB_USER', 'devproje_halle' );

/** Database password */
define( 'DB_PASSWORD', '123*User#321' );

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
define( 'AUTH_KEY',         '91vf/D[XR2^Kb+UShh ,Ln?zCP +U(dYn#2ZJ241-9|SSL.{OkR^_,C_-YZ0XV]n' );
define( 'SECURE_AUTH_KEY',  '1)LGEC9(z(y2(X7(8m2IBz:l|Z3W+f=p}{f?s(-j~|_20LZzBdAl@x_e$cef}Yuu' );
define( 'LOGGED_IN_KEY',    '9o^/v5eZuC]bv13||G58IzBYNH}s)aS(>L-W_-G]u+2X!+eP=}av=fS8=4qI:5n3' );
define( 'NONCE_KEY',        'eC/wR;EchV{d/m s-u4{&jp{Ry=lysLE,y9y%E=2Nh_*7LH*<F50Cy]!1]n>TIPf' );
define( 'AUTH_SALT',        'rsd&] zlL*3_Sb^fk-|ZupexaNI+b mNL)ZY?c!I`LtNKM+3oozw<@TM@Ww03sv3' );
define( 'SECURE_AUTH_SALT', '~ahMT|O2God&|rbU<$HN|/Yn+^0#R nF7`22$3d80=v:sij?{DVUv=n}Zo% UY&_' );
define( 'LOGGED_IN_SALT',   'kz[Qf|+V^HK+0cI)ASz<%t3}uFl:}ug8+Go@(/$^Cp${kI|i-873A?j9P`3vd#:?' );
define( 'NONCE_SALT',       '19l<@bUveoc:A/KlFL?.tlpx5a~U@~5FI!fRp>WF1JgfAy$S%AIwpShR6u|PnjSo' );

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
