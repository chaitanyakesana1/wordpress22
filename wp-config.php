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
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin1234' );

/** Database hostname */
define( 'DB_HOST', 'database-1.czjl7yukrwwh.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'o<e{4i6do{Edi^BoaYU/0}*P6axiABQc@~|fE| 3+1,.jnyn)@8m8.5+y:O5GN%h');
define('SECURE_AUTH_KEY',  '@ hbK!{u=g+u|SYqL0=%Rl||=Yz>jdcs|tg&/9fO#tgz2MgVjB4huD|3B8|kya=e');
define('LOGGED_IN_KEY',    '{%*Si{WPM.~M7xxu0GvG.L.)#)&+?*PQ&!33FRkcky$fC{nLDV&<}0Ncs$xKzh.e');
define('NONCE_KEY',        '_W)/l8f)[5uy,FmR|%]Zt$9B>lJjL-K`QROK5 ?k+h*/,` /[[}rRB@~fCmv-wVR');
define('AUTH_SALT',        '[c$lq5~x%|hl}n,F]>^{?X(X]hgZ&xZHK+cQF>,C~q07+B6hcCug=.GTeC! PihR');
define('SECURE_AUTH_SALT', 'q?H+:#m:D6F3#RKGz4Z-`d4z(Mj.>C/O@Yt0}4<-;28[.Ek(8I;l3kR2ib}@!+%#');
define('LOGGED_IN_SALT',   '2}XU`tgvil/67_~1$[J3cyf5$A3mn3+ ;+8?0:O^6[[tU|9nOno|$@uLxMm)u=P?');
define('NONCE_SALT',       '9M0k4|D+TBaVa&5%&:qj4K0*^MR2^+_1Kdwj:gG%#dyrx-?sM>VR`5n+t`MyBZIu');

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
