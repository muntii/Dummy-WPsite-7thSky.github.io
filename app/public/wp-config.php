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
define('AUTH_KEY',         'yvBqN/IZQk/tNEWImVhlkd4o3Xblt3r0i249KncshPuV1fFDlf4U8s1lclBXstIewWclFrTzAx+ZhnOXBpZw8w==');
define('SECURE_AUTH_KEY',  'rLFg75KO3DphuxCc3xB7X8JSgB5xzFcfyo6ihG4Qeq0EmD39yDlNSjf/STuT9R8qx4l3kSuwoD03dNdCmfaNlA==');
define('LOGGED_IN_KEY',    'ekDms8N7MX0zGxFBSdeDG8lb6tjcUiVhyL0n5j7CM6YV4wmSsdqmOzXZ0MJNPhkGKMnTCKVF15ZH+obiBgoTjw==');
define('NONCE_KEY',        'CJw9UD0tDxzbSSYxyRFLY9jSTVQTFtkt8W4hAh4CH2SrudKmMr0jgeFdC4JohJqEUANhgCRrwSk4Ahuh0oFkrg==');
define('AUTH_SALT',        'bZS/wV77Kk4w8mcxhcmBQYSxR7p8lrBvlp3xEK9FKC0DJtLaixL304bQcUqr9Ec2M+MD/hX5+fOnGPL/Ql+S7w==');
define('SECURE_AUTH_SALT', '7v04yKOSOtX/erStSgOMFMZJoM+OrJqdKSZwUQABIaTAN0zwMePkcJQ1tU5Rt5jLfykqkB+qxPeLfN8qfWQ+ZA==');
define('LOGGED_IN_SALT',   '1FoYL6zbqhCb4BT9EX0ppFEbHSpqKKl15cywjt5J8jWtnvMl0tkExKrme780FrU2kTuRYwFC4dBdx3iMNwg4Lw==');
define('NONCE_SALT',       'PFWGueI3nb7NlAuGxfp8s0H9KGUxdlVhQtR17DGHLcwkamnE3DAFWPN6wR0Eon6wVp85glcfX6zhP/25MTNEaQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';



define('ALLOW_UNFILTERED_UPLOADS', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
