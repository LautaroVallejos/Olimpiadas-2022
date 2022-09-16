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
define( 'DB_NAME', 'OlimpiadasDB' );

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
define( 'AUTH_KEY',         'wmME;s~|@9W!B-w:,.7:9-)Mo=@@Xh[`Ht+bdj W[)70VifmKQX&tzh}zIsG>mLD' );
define( 'SECURE_AUTH_KEY',  'CU33]&~!xTNA#a|ol63#6:#<R#w=D_KyX]p@KoY3ea5Z!VJ#I7Zr~cn/[.,ZeZ.F' );
define( 'LOGGED_IN_KEY',    'N`<#9J~b_M[EZDeV,pFb&B`Bh<BXy1>%ujLpYUPN-XmLwg_3=t6]yTM_yHm`{}{#' );
define( 'NONCE_KEY',        'g7/[V;W(K>/c-<)yWHCpYkfr%~=l]x=Z+HL1eX d,tcW4{~H=[*/a2NV9dMzOv&~' );
define( 'AUTH_SALT',        'r8G/55Y8%7,l+N5)aH42yT?49`:1!@r~@p4z|9](2x$I7$Z4x;iv cHg]Uc2|[eC' );
define( 'SECURE_AUTH_SALT', 'KV1]> AM?w%q|!B{HFc-Wg?Y]bfmsB5ST;hyPF$28iOh:[FJyF1${d`9O7 jVQO0' );
define( 'LOGGED_IN_SALT',   ']&S/~(b#.GE_+yEw!yn8#?U`$Sp ?O%r}&M<RQ4,mt=D/KV|FIQ86lcx2MC4UPzs' );
define( 'NONCE_SALT',       'w<-,0hxO}i?n;yblIo6Z((:Y?%hPh8FhYj_ De/+SR6f^>5.A=U|u^i}NLTZv=w;' );

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
