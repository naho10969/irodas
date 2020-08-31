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
define('AUTH_KEY',         'rJXAzJzI55UoaSY3QJXB7ZjHYI0SJTqA5S6/6+5mTgcSYgNg+5Brvfyaa6HEde10Igf4JTpyQLhrNzPj+43NmQ==');
define('SECURE_AUTH_KEY',  '3qjz2ngTM7wx7kbDoDdw6mldYhvyRFAiK6xSJUKWekwf+OruC64otWJGXEPNuiIH4z5yuG2K5tKu3zVl4wCKsA==');
define('LOGGED_IN_KEY',    'TV367HvDUCsRqqjOp33HuzyjwvbEwm+9aUqQohZchOGKLMbotu4wVTo4xtE0StrjL0pJaIiN2AtUOEPiV4Cc6Q==');
define('NONCE_KEY',        'QAegP4xl3jxqqb3pAynz9KCKbW2cO2vOSS/aDHttuY8PalKeBSaAA9IumIufhiIFPR88b7P993jNfdlgtW2++Q==');
define('AUTH_SALT',        'ZOmTBMiP/l8deZa2W/+0U8CaliBT3AF4h1OLb8gac/XYy96zye+2ySt9QW1T+3RA68/WAzhimPUh3PH4hbbjZg==');
define('SECURE_AUTH_SALT', '0NUOq+JFAFVOZ4I2M/2G28LpUgTxQN6kTJcsq4nw0fN2SGakaR+X7EVjkbGOuNvfO3pJlIhxLjOyJMvPoeuAFg==');
define('LOGGED_IN_SALT',   '+fCGZ7nJpti58Clc0q2dCoqiG1p5d2R0z5lalhU6Pl4hEZ6bmhAUgt6wl6p3IMG/vPm5FXfYrGxluPJHI2Xa2Q==');
define('NONCE_SALT',       'm+cz4a9pE8EsYckNZsn443ckR9j9TzAf3qY0L/sE211n1IvoUaH/aQkYzo7avRN+XRgMNZEBaYFGX/LC/JdfrA==');

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
