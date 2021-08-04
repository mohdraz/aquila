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
define('AUTH_KEY',         'bAqWruc7TN1BDERJZusqR/dzYa00bC+koeGYHBOlZpZ7kSDAF3SBRyjoFG03yyZIaguAmR0/Cv3vAUzrVKw+qg==');
define('SECURE_AUTH_KEY',  'aV8wmg66bMnmVWkCRblGdhHa7bmInkDjTLfhLKXS5wYZOsiBgGCgEq35NVLg3CoCxki+lZJHATHiboKf/w4gpw==');
define('LOGGED_IN_KEY',    '91oKHwWxhmep8nrekLNasHKAdMkvV1gFoXsz1eVx76nTMCDUY/p5yR4cI+0/8Ex8DM6LqWxGWAuUXlII2Q/KxA==');
define('NONCE_KEY',        'fB2o/6+7JaLFOR4Ki+6J0j/EzZzVc1Y2RIIZfkhdL7XLgK2zPyTQltTOMFu4uHnE7AySmwD+SD4IOf0bAb7KqQ==');
define('AUTH_SALT',        '7bXIz+EY8KbPHqFLmYe1BgfK9nv/5uAkr4l3/OzbXTxyXW6Fctu8JHiAYkFc7BsA6qetMgHlNT3QQcUgsg0D3w==');
define('SECURE_AUTH_SALT', 'Facrf+x3gBk+Mz0/keTwnZI+wmLjcBZC5b0RyT0WipgL/ppWd2GPLlZv/6GH81rp25YzU2vW5tzv0OEHOWBBCw==');
define('LOGGED_IN_SALT',   'zopPIm8XTDWQq7snZy9XqDt4HDsgiMziKYwDJDIRzJcBSvfmB0AfedSp8EPiAZf0jooKhW03hGv/g1x6Y1cj/w==');
define('NONCE_SALT',       'QX8DvOq8BYQmA/LFSyqiJ6STy+Y5zPynOcWxaAi9tYjkhk+k5gtTq6q03d8xp1VA7uC+OyYSyX/++b7qbSBOuQ==');

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
