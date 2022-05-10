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
define( 'DB_NAME', 'respirar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'gbVNgmwArk7TqXVicaxFBXLkBfmOf6j1pJbQCiBYE6feEUBs9YkoNXdpdB1tXQuv' );
define( 'SECURE_AUTH_KEY',  'o4n1xWS7hkQcVDpUUwPryhe2PByMFBbOntWv3AAfhC0bA1xuYYiqWSybMAs9K6ze' );
define( 'LOGGED_IN_KEY',    '4vIbPOBrjtGzS3paRMPEiuRSxV25i53K9VDqwMGISOfzgCkJKexlpmADE7DXeuQw' );
define( 'NONCE_KEY',        'PgpCIhGDzf6kUkkUCE3mCcQaVMCFIlyAyjapzKyFuqqeBiCrhSn0xhmvwkhVtMGl' );
define( 'AUTH_SALT',        'Hv9hNGjsZZFRfgXxJKUaowB2O3yZve5BcaiWPw1Y77aCchxwC60onicr8RMgLfF3' );
define( 'SECURE_AUTH_SALT', 'RdWztVvaSDNLwaGLTvKiuIEzcxwxnWB0znf8DKbnJ1A0y9lGpVLUrzeyVhQIfd9o' );
define( 'LOGGED_IN_SALT',   'fJ8lVGCm9SFQbB4nc7t2B2P8KZX9q5NLP1EUcyJCopEGOliFKIVKSo6arIgGwfi0' );
define( 'NONCE_SALT',       'UJoLYgjrT25hM1wBznb53cinOFpXy21TOZRllO1W52plPr8Kx0URxt9Xb4gMYMWy' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
