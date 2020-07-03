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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'unEoyC80py/nMkVcxXnswg7PH7JwPtgEjnBpq9T+LnRbB65Gt/jBo42BXKmjWsu813YqAQiSRjI5bSf/K6ckTw==');
define('SECURE_AUTH_KEY',  'k0pAXVmf9657+/Sq7vhyUgmyrSj99zB2qaZFg54fYCX2mhwR+wLsY6xNDO/tGxA4Y3ilH2psJNBjD2w1bkpLvA==');
define('LOGGED_IN_KEY',    'GXP/hkRbtCLe7YIK6h4+nBsJrnmscqOOYJ8+TzNOq8Fv3gfuCeMGZ/vX/es/P+5Buvf88H5WHUx0pxXatztEYA==');
define('NONCE_KEY',        'TQ+IRYWlIOC4YZ5/n5Hqe60IhBL7o9oJvuB9ZIg24aA8NFX4LnDviZGHltLWDPzRZd+keyFb3UQeDA7jOqnw1g==');
define('AUTH_SALT',        'Wn0n/vkNv75FlN346paxAXZoITUpE7upmbWdqClXCs55588Q3+E9rxhVG0bMaAhkOdudmukCrR/t05LMkt+Vjw==');
define('SECURE_AUTH_SALT', '23C4DsTj9okUh2ov1Wi3KAv7ePRXCGop3J/Ka5rALaWMXIWQFvoR8nXLHRrFpnneR7WUpUvdzsbPDSIB/HC7Sw==');
define('LOGGED_IN_SALT',   '1eatWvj3Gvc0Z5hITmHac+rq4+WSDhY7XIKi1rXBGIalNZ85sfyioggZUxFJLTNWtxAQxPImZfwKIv/tLX20Dg==');
define('NONCE_SALT',       'coINSdZSHK7LFHZLVHVBmOQtITpywR7O9zfOZIqLNxL1RvNlshJj1hPR22QKGmj9tuJ6nV+hJFrEumXsT8socA==');

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
