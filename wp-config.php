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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '!.dF.u*kw(3x.>$BqL>V&eDP 8KstDcs<rsW>T/mflo>QzSY2d!n^m])}qBo:N~f' );
define( 'SECURE_AUTH_KEY',  '?/$CIP:3x&L+ffT9zan[:Jbq+t0vD7ozhxf]11^dJ;Amx[2w(SViiO!OnS,6m4;:' );
define( 'LOGGED_IN_KEY',    ')Y|o~Y7-G=#`Q7}FKaul,pD9n, 93(CIYmf2;&MYf8GP%=zJDrZgS{8JZbl]x0W;' );
define( 'NONCE_KEY',        ' bsAI3h3QeG)qgnVDA5lwao9+I<]Z> vcZ](_nH8!C[je::%lpEV04HVa[l@v TK' );
define( 'AUTH_SALT',        '~03B!%kSbf-7S2?#Hy~|(2[Dt$Ej5 d3xG8zEN##U<9aQ&7Uj`1$3#J7hxG5@+g9' );
define( 'SECURE_AUTH_SALT', 'TS!NyL;g=MR0-+R eZjS4nz;+/k4&P1CRR7t$>h+aBW M-r[(d[F*{E.haO#TN3}' );
define( 'LOGGED_IN_SALT',   '0#)Q4s#t|dER1_Jx?:SrvQ]{j&E2P_ZH1Es`C6+7:z{$w{jaNC1s~B;L@>&v0FkH' );
define( 'NONCE_SALT',       'bteYFlao,p&aaw]=,5K/lkR,7_{0kA^* ,<3ZaOlup|2n`~7-B@?h-*A(hYBk`xV' );

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG',	true);
define('WP_DEBUG_DISPLAY',	false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
