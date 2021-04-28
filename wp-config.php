<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if (strstr($_SERVER['SERVER_NAME'],'heygidi.local')) {
	define( 'DB_NAME', 'local' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}else {
 
	define( 'DB_NAME', 'kalemxyz_fizik' );

	/** MySQL database username */
	define( 'DB_USER', 'kalemxyz_mhmt' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'Fidanli.1973!146@' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );

}





/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z7LNfZ/hRc7ir+REcn+eT6E4S/z1CXGaa4x87WGxDrmGJajATAohawh8NqqQSRmMz0lEWxFoei3ZGU0h5m3tYg==');
define('SECURE_AUTH_KEY',  'uIKzIbgGl0XppIh4wEzLVOPxdxq1W/S7bXWD+QN3HvLyyIkNrAle9W67DdIi6e7ReGbxB5UiMfAYTuhoIomYfA==');
define('LOGGED_IN_KEY',    'XeuJb4shRgJmPdtqDMpwW3UFuiqLFpr66oKtSBCaPwSFqpv28Ovhn4WZrPzdLts4l4y9JdJ5jY4c0XAmQnNKMw==');
define('NONCE_KEY',        'AQVk7Yu6kO1N9oK2PzRaGXydlZEAoJlH4Nsdam8XOnTIJ7C/DN+ugmg4u21O9SAyUdUN564jmyxC1sO9x+4TRw==');
define('AUTH_SALT',        '2MG4bJT9xno9lbqnFWp3I0Jvaas0K39qUai2XV5LEV21Z9bj0C5duXYPERaRUa0FbDMdsHU0tnyXnwpzE9Zu5g==');
define('SECURE_AUTH_SALT', 'U14KcXJffpJ3K++veI/p2DMd171m1FOZBo4vH/AnI9X6dk/10tBy9sYec+XkNb+Hut+m4TA6YPXliIEvp8XPSQ==');
define('LOGGED_IN_SALT',   'o5LxyS6thR34sbs1qVHTH5QXmcrGIa6R+CGHDXJUFNjjL7V0qgjegbHP2mQvEkiv20cB5v964zzqY0tb7pZWYw==');
define('NONCE_SALT',       'K8VeHnkLtPETw/Cc001mnyLtae5E9mw4d0hyh1XXHFL0//aBhj4W+rXoel3byLlZMR1Ts1T50q6ZBCsPPl3oXw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
