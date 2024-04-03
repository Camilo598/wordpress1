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
define( 'DB_NAME', 'wprueba1' );

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
define( 'AUTH_KEY',         'MeGeZIQF^k=}nS_9F<q;n:O-.wM]#&-zg=MefEu$ $eBL^B{0?{/ QVY6N,K=o%q' );
define( 'SECURE_AUTH_KEY',  'k$awI6fys,TUJ4n(y/#@}U-u%x%=FZA1GioAj*05EswFH138sZrR+!tmBxQ)={7z' );
define( 'LOGGED_IN_KEY',    '$H>n{.Iib+ty&?/W?,xSF!u(wqc9>ExEG/gAE,lry>gaGbAhR^f4Nhk@K8xyh|Q>' );
define( 'NONCE_KEY',        '(#)zF|U#sTd$7[1+2|9|jJcb*S[>C{UB,@1nRW12rnO5,u8,&+H2v9]}7)6>H`7^' );
define( 'AUTH_SALT',        '& rzRu<CU3Nxozbd8z *k+V0]jm$f-aEpr<B{2kFa^avUaZjBaqV-V1K];p`n;jb' );
define( 'SECURE_AUTH_SALT', 'Kf|57W0p3nNH+:Ii!{~>1Yup` #%ykqYnSXv<o4>Pz{,p_0WZfN^:loez,R6yBEO' );
define( 'LOGGED_IN_SALT',   '+</DlN5UE$TmRCWKFYb}HNLrIk(:k^>g4Ie]I,qda~eG!Jb[w#|$g8jdwq=YPa.%' );
define( 'NONCE_SALT',       ';UW=0N6#cw28u3@2eM>4x`shHbmf#I2ry*Z6,B0JS}|em*w^_eTcm:9)(Gg5/HX5' );

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
