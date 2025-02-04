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
define( 'DB_NAME', 'jeki' );

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
define( 'AUTH_KEY',         'dJzldCXZcea2A9M4pYbYi5K9TMseXvusx4f40XIJJvjdJTzXMO7TH16EL5VIAgIi' );
define( 'SECURE_AUTH_KEY',  'eBeMsQP46CKlUYbZPNufMFSKuOo4B8PB84iJTQZHPd0z1MdwTu1fg6T3slQVqqr0' );
define( 'LOGGED_IN_KEY',    'dwHEM1TrulMV0zplYaPuKsKKeYBfNzMBSv8SWFJPKI8McWVi5XJIyBWncwvMDA30' );
define( 'NONCE_KEY',        'ZEM3iE4mxt6l1E1lXIj0G9uJOaknNA4xJyvodV78FHr1sKueFuVRtzafeFP74HWK' );
define( 'AUTH_SALT',        'iSEBBhyRtK4TXsyWB0b67FfhdGlmv5GNCRmHd9LsDLCWOzXdds06SI70q0GR97q3' );
define( 'SECURE_AUTH_SALT', 'nqaSy68hoO1fBxwgpvYyySPvmqVsajc686fuWntBhSEPQwKJifXkAoQflI1SpV6f' );
define( 'LOGGED_IN_SALT',   'QlG4BFOyjnvP4qIXJ1kboKmIWZOREhwbhlDTzmhpk07TCDC0xEa8JWffCdNST5QM' );
define( 'NONCE_SALT',       'uHjoiqAmQTNVtDQqkVibrTAGc1pcmZuqHZJRUU56j018yRJroXwza5K3wssjwqzY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
