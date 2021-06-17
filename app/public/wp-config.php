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
define('AUTH_KEY',         'BbUlXwwCHoyFeL7PTQBYt29aA7aVhSvLMy1W75FUQBmyj+3x/bCj/Js4Ii/RGEHhEpy+qhbIcyx+0gwlV32kaA==');
define('SECURE_AUTH_KEY',  'kMdjAg06nBhHp+1q54DbRfF+/ie2i1ImvLx5YVi5zvt/aXLmAt/0jhzbWPa9VrPjILVpXqJV7TtYhqeYNGH4Rw==');
define('LOGGED_IN_KEY',    'YcHCeSCnfRViKs6XyAYCWf5mgZhlTJ2UKJ7+VgCOwcU4qLfo5DaTYmX0Ttdp76qI9UYfejHe7iXt8Cq7aH8CEg==');
define('NONCE_KEY',        'svQUzExplSpzr6mqeOXFH7WG0LbFPdUNxt1zLo7Ax0+U8o4mfBSI9Sf7hSgLI7Ar1gfA96D4CbhDtvB8LXtLNQ==');
define('AUTH_SALT',        'mCITVTyYx1bexPXYx+4kGszKNuQ+GbrjLppZhG3kAy4hZCgCiwY9LY0TxPNhTloEZhWhi6EhwtbVKXFz1gr6Zw==');
define('SECURE_AUTH_SALT', 'aQ65zqVStQmBdLuY+2QSwqdgl0p8AF1i5lAf9uuR6iI1kuzbLEZmW4JJ5mhO9vCKJlGRAXMWvVmAnyA8wI7JZw==');
define('LOGGED_IN_SALT',   'E98PGtwRjbtcU/L0q02qOKDG455XU6xOY6jKBVSV70CgiQgERI9/aym/fbvcOAIPQOx6JnTODsAfIkb2zZeuYA==');
define('NONCE_SALT',       'C+GjUD8kXAIgZpp62pp7tAjpdbhECfwjQopvzwnNFtR8Mckk5GN5PbxgzHO2LcfRacuavQ+Ze6DOW5/6LKvwAA==');

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
