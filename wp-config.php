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
define( 'DB_NAME', 'okbetsportslive' );

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
define( 'AUTH_KEY',         'NfACp)D6mL#i,!zyo^cxW0Rt5nQ7lKXo~atb:sWS=CLPZA#`<fbj/%cR?j $+i7!' );
define( 'SECURE_AUTH_KEY',  'I=OA;^OI!.,4I5-PH]8h.4/*/wKNO8m1KHsA-?=]Mu%5T3$OG!at~Vap$Gd#3e0g' );
define( 'LOGGED_IN_KEY',    'v,X<rBXv 9<7Gc3u<FsZ$=gV>EBpk*,5d5jI_4W.}6o-RY#OI:>3MaEt&V4;WMg0' );
define( 'NONCE_KEY',        '*GcZ|a6hc@uz}y=yREqoRwoF^]tO,*1t6F0`=84wgm89q?^#:^p!i/cdsKA3E  +' );
define( 'AUTH_SALT',        '6Whcs*`6|A}XU$&Rn_~os/RdFW{#OEZPFpAd&0gZQufd(}!98V+-jk0s=]Yy,vS/' );
define( 'SECURE_AUTH_SALT', 'trwfM*h[mJ l{Yn[fFltZ,O*+Dd{/b,[u|nVRy0<|;0tSsgg_s~vC`7+p)kx-N$h' );
define( 'LOGGED_IN_SALT',   'Awv`sLJN`>w?OGZ^n_{eUuZ68+X}k;Lwj`psXPuKN?s;1lgAJQ`0 .7,w<E`-A.@' );
define( 'NONCE_SALT',       '0$zko&Rxww)KN|+@9u#/~Su5YYZ!*uUGImzJb7{d+1[3NK+ZDY&?O%=h1MoW{_a]' );

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
