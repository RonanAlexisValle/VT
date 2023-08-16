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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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


define('AUTH_KEY',         'xTLlKb+1N7qOzX3kEDGQHOjlWlNY3gneirR1yo8LKqifng/EKnZbV8O4uMbRXPpJqumk9XQ1bR7qlzvhYxc+oQ==');
define('SECURE_AUTH_KEY',  'CsX6xzPPIhpmIWk4AmYr4Jy1GywnGQAq3xJqYcbZmiPLMXcVOtOEi5EUgAPu3PpHY5WjyRY9mccjSzNFc/rfKA==');
define('LOGGED_IN_KEY',    'QK+8WvuDFJe7oy7/bm5i+WvRb6JGo6VwXcvJxZgesd+IujiTqPlKVnF59BGrB0KiKze+ilWfMy9482tHA1lF/A==');
define('NONCE_KEY',        '16wq95S4K6pvHb0Zrna896Mq9tQ+/8jHy6A9fUBwdtjQwLYnfKUZzZDb+L08BV1X0c3IEQhRmGiir8FM11BDVQ==');
define('AUTH_SALT',        'BzZVe3O/nDpc9jfdjJlVRpBPb6c2MZU345yV+ILv0j5GPw7ojZOM/1Ue3s7V9fuxiGeHfwCUwRt3mSd35ynXiw==');
define('SECURE_AUTH_SALT', '1aKjmKDro3AL3be5XtVb+H8QpSOVDzD1ffIbB3aPB7Nv4YB/ynEqju7pofiICOQxeTzaJREMVY/sde6xb+BMbg==');
define('LOGGED_IN_SALT',   'GawFSGBPpXFGQZfQq1yiBRAKkAR0PG5hKBauFZc+wx8L0Xj8Ut8KEEpEfm32AZW5dtlIGQDH093Krv13Kd5OYA==');
define('NONCE_SALT',       '5R//ZaxcD2Ma4Qih5tXudGry72BUG+F4pHqUNkK8zALWtPF5L3gfUr+DSuLCoLQB6IvBYrlI8w9PcdJR/GxP1Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
