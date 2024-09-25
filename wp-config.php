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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'swe' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'wX8E0cJ60pKDLr0Lg6BPusOnHQYbxBjSQ2AbNf4fKUzgrMsxNRrK9u7ZSq4RIccD' );
define( 'SECURE_AUTH_KEY',  'M56EvXvYM2Uc3ZDWW3HpDlWIU1jpKW8b2D8Stathe1eXnYOonTvhAE9uHsl7j56F' );
define( 'LOGGED_IN_KEY',    'kUw75uKdebqEoJYoH3DQz19erbuTZPgw8yadsrDFFfq59mTBlfimXP2d0Z1YO2uS' );
define( 'NONCE_KEY',        'JChcFMKpq6Z8Sn0IdZNrLios0EKuYH4f04dZt1Pq6H1jNUBdBlQ5Mcs0mmzTSnXW' );
define( 'AUTH_SALT',        '4Fk0rL6bvELpPARNO0QiFQsYwRsV3awwlAQIHGEXvryqEVyA1J6PMQwo5SSdzhDK' );
define( 'SECURE_AUTH_SALT', 'w2LoPmMOOR75QFumeV8D0TTVyCiFVrEHc4hvu9eYVCbP011q0xVurVl3M7GI25S5' );
define( 'LOGGED_IN_SALT',   'hwdHZa2rDlh0xxKBr8QfHxoCk0alvdGJvKyzZG9AaZFBlXQAPVuY9X1UYaGoBZQt' );
define( 'NONCE_SALT',       'C8cUxSkXqVCu9KVEshBWi4jx3JRi6avdVOHPRq8ZE0S1wrPNevuVjc8txvP1g3Un' );

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
