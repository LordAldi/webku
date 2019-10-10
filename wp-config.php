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
define('AUTH_KEY',         '9f6LHhjTRQ39SuvnN1h4lX4idhksmyjDg+SjRbb2gHxcS0fYnkDl4L/D3M7Y7TMR24oA1m30YW1wUVxcFSMVTA==');
define('SECURE_AUTH_KEY',  '+0MNM27YnAuggFEScaNlflImEPVcYy6eqZvnvnw+ZJrVYtVFn/C/LSs3zMIJB2dqtUtUDkRlzkpVFVI6v5hmOA==');
define('LOGGED_IN_KEY',    'Ts9rxEA20i3HFmd9MBBpg3XBVq93yAb2DcC21kOWdq9y4Z6I4aJbuRKYLzC9ZByQxAeAVQjxmHAttF7MXBwNsw==');
define('NONCE_KEY',        'rUQLdzppebfxv/SvgAMZl1jQEI9NrBAFc+7Oz5T94L+2unj8CrOFIOAchwyW3sDLom4IogUrl+j/pJimE+2A4g==');
define('AUTH_SALT',        'y3YQDrpNrW5ToESoKHouege0ZppZ2qioW0Tv5qNQb9811+y1U6KxbbeCgcnZ5308kCYSTi6pQwXdeQrw6pDevw==');
define('SECURE_AUTH_SALT', 'ayv3N+TwQ3ALPj8oxlZ50gngaquygtMPflkti4Gts3weaa4dqvbjsRgu3r+4eauzzZfniDc6gi5r9mIayrO6oQ==');
define('LOGGED_IN_SALT',   '0XqXtQLun4ztUxmQOzwkYPvSbRKro/IobZFh76EoydkwYmBHHyuhw9VjQEGPhpYpsTP6FpftX4b0cnG1WRRLUA==');
define('NONCE_SALT',       'AJplCw3K8EyNQ1zgLqXLAPAHE7WQ0lmIpyQUXIe1InuFDbKiydNLsENSMIh70pe5tVz7/0gHYfoCExwCYsAPog==');

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
