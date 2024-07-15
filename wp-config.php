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
define( 'DB_NAME', 'haven' );

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
define( 'AUTH_KEY',         ';#>!-]qit?V1+B+gx@~ny!ctW]u!*rphS&Qg [lnRGX+DvxGqiH3zKQ[ikE|,RU8' );
define( 'SECURE_AUTH_KEY',  '5PN9o*9#9[xp*D(;GMoi_}*wAJom?{HOT02;e31gGnqIa$IaAlx}o1+p(>4NQQ<T' );
define( 'LOGGED_IN_KEY',    'euY>dPABZ7a~S`}/`!P%lzb@*s=XvscTo&Qip%HmV#R*X/`P0@KnB9HXwq))A60U' );
define( 'NONCE_KEY',        '=y}no/KYq8(/9xLAL~S:<V]9m;R6qO/^c,SzT;t]mAjY:BAJJ/#]1K N=^lfbZ75' );
define( 'AUTH_SALT',        '6Lc|6.Yf3h!Hdg7>S3 O|K-u4`F?Lt>^d6ZEK=P~$z2=le:!k+lrLp}?Xz4H/rsc' );
define( 'SECURE_AUTH_SALT', 'owaM=4 F#Wp-nRkhSDBt2{bzF$>H1&r>6Ui16xQ=3QrcW0tf8++Jk-4)7A~q7W(.' );
define( 'LOGGED_IN_SALT',   'jgG],wg8`L0m_@e`!%r)N=ogW2xme5LXT?GG|,7?s|$6_vs6$iX>-|Am;E~_}Ksd' );
define( 'NONCE_SALT',       '.|&L=(V<z <v^A/KI`F>}&Qw8KTls?ChedyUOFuQT}XU_pkg#k].BMRHA)&<fijz' );

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
