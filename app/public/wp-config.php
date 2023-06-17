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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'OW9xOQ0Wl3r4cJHMz6Tl+cpb5TmjUwWEV6bQ3TUD09ops5201zTX+e+imkaAsYLrckHz5okvi/tRc0YXZpM50w==');
define('SECURE_AUTH_KEY',  'feCYs8ii/Hi3DnTQvccjzSZyU8iUbXX+AbN6TRA1kRM5V1pv7WsdGbOF32VT4XOm3eDR07cX9HbUlkfDQhAAmw==');
define('LOGGED_IN_KEY',    'cj1NwcYW70797r5s/sQ6UEtVN2JZjztAAKUicKAiEIZj1YmRk60WHboGtvzWXfoIzUhHpYwKiB78opztsVBCqg==');
define('NONCE_KEY',        'nPVXXQ0NeRwttf3wqOlnTu0pDArzmwlb64bReiS9gFO96RGifVnh8jM/igWd8p+rJjtQ3faoYGNJORe7X8A7MA==');
define('AUTH_SALT',        '0SdUgQMCxF9IQ55jQEdgyByUp9XxDSg4HrhS91bIZ6u2Gdm0uLJXUBgbWyd3djPjGyG2eUMJx8P4iPyP6/Qsfg==');
define('SECURE_AUTH_SALT', 'KTFoZHjFREpiAN+8riT2EJzH42Ywf2+GFHjeZY6KeDO1Py3CpePHWG78yMNqZ9KbaUiZQpDNTw2jqsfBJdinBA==');
define('LOGGED_IN_SALT',   'u+9FGS+OGqGe29cO3dvrFf8aSs01hxFwny5RaBwUlmzhp6NQKZK4GISWAA7NjSHivwo+zhxEUx1+CHL6QACySg==');
define('NONCE_SALT',       'm4gGu0is9qWiRJG8KaiExgZ84yM0WX1fn1khEBbd8PX5jlOZZrBsyfVVt4FDWd3HxrXwWwYmuBOWQQbwXW6x3w==');

define( 'WPCF7_AUTOP', false );
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
