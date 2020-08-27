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
define( 'DB_NAME', 'thejumpingrabbit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_ALLOW_REPAIR', true);

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rfhBpB80wJuDVhgLbyJYnKVWq0lUHWFU7rtQrkWXw992oJBuyORhpNq4OikWI9er' );
define( 'SECURE_AUTH_KEY',  'hAYnueXena9jYONYtV2ci9G3GZCI8REu1ZNUawSlxhaFPxXv3d8Ak74Xb0I9sPhp' );
define( 'LOGGED_IN_KEY',    'W803jwD3Pk8OddJagcq5pgZG5344KjdQbvxRXQkxhkBCa7PpPPRU0M06MjwvSvhU' );
define( 'NONCE_KEY',        'dqQ3G7kRiWyC7M8cCdlZk1uADGjo1BsXeg0Cf1r26aVprckAqAVfimjX2I8UlUDm' );
define( 'AUTH_SALT',        'E0DdIR7covMXXFq2gEShp2FfRMiGsClewnsXgKynPIImRq5FEf9eJvABTRAKXwXt' );
define( 'SECURE_AUTH_SALT', '24cVONh8r7xGsUrSOURX9iBvCzRP6vjWeEIh4QBXMuVr4LhS5VEpYnTcAdG6pmc2' );
define( 'LOGGED_IN_SALT',   'U3zQGJNBpRYy3Rrl16fVlrxjcGHNpPCYXbrozUVANl1ek7o9r2bEHoUPrVjRxu1f' );
define( 'NONCE_SALT',       'Tq8sfbSg7zr5DscJJrTlChzUBtVs6MdMu6K1XGuREpjaaN45BjaVPjVPlg0qNxf9' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
