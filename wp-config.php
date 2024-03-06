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
define( 'DB_NAME', 'dragondevs' );

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
define( 'AUTH_KEY',         '*|ZNlh5-.Jl^#5 o$nHPtxBwlip^/&p.w&]DXoxt!H@<ipiwbnjvP5r|5;zp~2na' );
define( 'SECURE_AUTH_KEY',  'PA;LK;WJb24gj#~1@D5k_sP`/V<_Ct3 .~xdw8TiV^,o./J$vK^KycL@lA@,Qty0' );
define( 'LOGGED_IN_KEY',    'qTQQ$~IS_[Hk&)<.eVXL>]PnH?5ruk+xjRff`qUuQh$/E-;1Kliu:oSp8tktK)@X' );
define( 'NONCE_KEY',        'j5bWk;.a,/@=Cw`}EaZfDt5|/T8RY)V(Xf^DvVR%NCq{ps(rjK$k|IMV.%%jR$yw' );
define( 'AUTH_SALT',        '<&4Cl/_V|CNR)K1HIfBjA%]YD m|pHL552kCpCX[<Qiq9k{$n>p#UsofWOcW,,:q' );
define( 'SECURE_AUTH_SALT', 'E@@MvLc6RfhHlaZ]ydyKrR&!+QfFj(.{T(M![3HC Lb+6VqO_iTP9%|S~_Cf$^p-' );
define( 'LOGGED_IN_SALT',   ':bG0XOJr_:4a IX7BlhAJ7(XaF4XSXw&z6:j=VuXJl{-y+a5T>G=(if2@Fnh5IGu' );
define( 'NONCE_SALT',       '7GH$:dA~NVoPh@N^?sVP5@`IOAn>(WupO;q?Jpc?!yJT3H:M67UDI;0wBuLbz2B2' );

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
