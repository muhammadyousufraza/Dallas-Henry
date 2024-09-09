<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

 // Added by WP Rocket


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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'redcbltt_wp38' );

/** Database username */
define( 'DB_USER', 'redcbltt_wp38' );

/** Database password */
define( 'DB_PASSWORD', '[n0DZS-6p@K--D21' );

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
define( 'AUTH_KEY',         'simpdi7dbarkio0qciysdbecuaqi5lolq2qpbvjwgdgn7gpjvjrgz7f6bwiihmsh' );
define( 'SECURE_AUTH_KEY',  'eskni8ricnuvo0ivskxb8olv5znpyytm8hysdj4bb1nsiyj72cml83kp2au6i9ct' );
define( 'LOGGED_IN_KEY',    '8ritzps3dhj1brndp7p9wtld3bio7iqt9p0ccwij51wqiv7ilpjwm18kfkx1jjmu' );
define( 'NONCE_KEY',        'lkloxyj7fkrk6m8kjnvsee26xfqjqihpt7yrffwinuoceunegkbf4ndg7b4puxdc' );
define( 'AUTH_SALT',        'ehuhoc744hfpnle1bggq6ploaib1ecbdbu0indh4eek6ksddq2edasj4av7oyrcy' );
define( 'SECURE_AUTH_SALT', '69kffxnpuds9w0aal62lzfiwtqnjru8ivy1bnkigzy7rtfqfqh6bskyvpmxqag75' );
define( 'LOGGED_IN_SALT',   'tk3vnsr9ylz111kmqkalpdddvhz8pqsbtcbgmvaqyetswiqhkagiiqnxihvjmisr' );
define( 'NONCE_SALT',       'scnhdnwglzipnn4uke4ixnklueqrd9nkjldq1adfagwsy43z9tz3ixemdpsbqncq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwd_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
