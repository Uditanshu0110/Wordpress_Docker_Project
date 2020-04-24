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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_database');

/** MySQL database username */
define( 'DB_USER', 'Uditanshu');

/** MySQL database password */
define( 'DB_PASSWORD', 'admin');

/** MySQL hostname */
define( 'DB_HOST', 'mysql_db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e0ec638320765ca8464b2b3953f0bd1c921c7b58');
define( 'SECURE_AUTH_KEY',  'f0a379d3903508f28593c9b3ed4024c0845e1534');
define( 'LOGGED_IN_KEY',    '94e2eaa317fb4dc5c08e800cb3c545e0bd3d1c18');
define( 'NONCE_KEY',        'e39786ed8fc838035b7b0631411e46bdbc84ad13');
define( 'AUTH_SALT',        'ea8588a1bf16d6896a9865655b1c9b15823f29a4');
define( 'SECURE_AUTH_SALT', 'd69196b2b0e57d228f8049f277d80ea6d2f57a18');
define( 'LOGGED_IN_SALT',   '5112e9ba3bb8309a49c3b9d2dac7cf2aa9a76ced');
define( 'NONCE_SALT',       '594dfc2390d387c6f5a8e037455766c01662189c');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
