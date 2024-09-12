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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY', '4:J7SOn@iC##@]~z9wa;%nED&@7@C0pu7qo*325Mhikx|7Bm9~s%B6s~6pVM((QM');
define('SECURE_AUTH_KEY', '/097!YxB05PkhXL]54(aUt6!RqNP7nS8(|w0#A|4d3jC6d94!W~5nV29~;&%(lo-');
define('LOGGED_IN_KEY', 'Amy74q]5OiyDnG-L#3;6*U611%uH3Il+0/[U#S4#*Q0!ad5hbm2~48c97!|FPP5)');
define('NONCE_KEY', 'AEkOd9+Gu3ofub~8U)P6/[39v5hMffS9%J6yeVD%(rM66T|Id;TxjW]iYw84#GIS');
define('AUTH_SALT', '@3qSr2tFPtpc!w-v/+Q%H4j@OdQ33_cy(15hLY;88;7a@e6QOa#2BN;no(i&WCwf');
define('SECURE_AUTH_SALT', '28V63qvBU2iKthY1634p81CF-*oJjT(Iif)L#C2eU6&MX7GS1UJ8J#b7~0FnD+P3');
define('LOGGED_IN_SALT', 'R6ia7w!4|*pt/1|!i2|8%%721X_ug_48@kJu;yRu%[]8!8|r0j*Wz%Pw(t58/3Nj');
define('NONCE_SALT', '1h8sS52q#8[#fK|gvtvC&8)3Zp6P]6DifQL2MHY;96Ll2_32)(EMR**/0e49wy59');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hgbvvi_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
