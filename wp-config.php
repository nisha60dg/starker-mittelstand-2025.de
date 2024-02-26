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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'starkermittelstand2025_de' );

/** MySQL database username */
define( 'DB_USER', 'starkermitte' );

/** MySQL database password */
define( 'DB_PASSWORD', 'UbpiVijCekceovGiQuaywrygVoylb6' );

/** MySQL hostname */
define( 'DB_HOST', 'starke1.sql.ghserv.net' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'le8omp23dilsgb0mf5a3bsehca4j1t' );
define( 'SECURE_AUTH_KEY',  'd08msyo0ydiziyg46xc7ribz1jc7on' );
define( 'LOGGED_IN_KEY',    'xlzy4ekc1nu0bdk4i4wtvrjln47yha' );
define( 'NONCE_KEY',        'g2jbi1alo46iht6f1a9uqodmjlttwv' );
define( 'AUTH_SALT',        'bn48wiwwti5xmgwxg8oub3y9dxa6sy' );
define( 'SECURE_AUTH_SALT', '81v6crzvcat6gttfxf7as76n14vpvr' );
define( 'LOGGED_IN_SALT',   'pt1tkqejemx539vklxd20p5rj9922i' );
define( 'NONCE_SALT',       'ds7j5mrerh710l3i9oqnbar1jo58ay' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
