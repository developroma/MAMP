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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'dS$p?3YYU>*G&HZBJH%IzNL&!aGo)WR;C;aoi2q94M4#lBSyerALWA=[K96Yo2|9' );
define( 'SECURE_AUTH_KEY',  '}]ozA87&lf7#>;?#D.)VZxlL0LR4D!q1M`{P,bL:Ojr_3-mTr?/ MDvh93Ra<|4d' );
define( 'LOGGED_IN_KEY',    '9Z$GG5pDz%4+wl[@#Szk5T(^f8` 6278%lL<4 @v7ZA%vghfBwYh=m:!|0U+N.f*' );
define( 'NONCE_KEY',        '{R6}JWa0ssxKiRDNKJCxy0H3T!QT=$k,pn2d fa+YgI<rD9,h.MDEb Rndf#:`20' );
define( 'AUTH_SALT',        '_|C^fkj|[d:H)}~#k2jj%WB9*8dmLLv}Yyy,ONJk(7q~L`aIoYZg@Yi,9e,s7=fo' );
define( 'SECURE_AUTH_SALT', 'x?}%R#,nRK*xkFf(***tMVZk+EAn_ly>7WQzAG`T|*9dJZi,{{`1MF&3Gv2<cuB%' );
define( 'LOGGED_IN_SALT',   '<<Rrf^6Sb(~eN9.%@b/?rl(>f2rsqBz6 !u0}Jn( Q3}nB]y3T3;ctP?`-`KVo{M' );
define( 'NONCE_SALT',       '@M.Ygo;TAG!;Qk[;{7Hn|[EA__/bj{vei-FAT|.Hz-dGe%<{n}jgm1=o#lUE4j4]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ttrr_';

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
