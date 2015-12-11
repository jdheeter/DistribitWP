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
define('DB_NAME', 'distbcbu_Distrib');

/** MySQL database username */
define('DB_USER', 'distbcbu_Distrib');

/** MySQL database password */
define('DB_PASSWORD', '5S69W@F@pP');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ey43yvflpwiahpdt6xqp0kd4w9lbs9zcjub8yheatsm4z37h5aqglfrqdndvopsj');
define('SECURE_AUTH_KEY',  '9elya8j9cuhql2dt65lgrkxr0khfpk7jlqanqjy7rjdlc3hvow18vybk2maih2sb');
define('LOGGED_IN_KEY',    'ysthczz4si4ou9bhev9apyyluzmuriu6tnxc8lso919mkt3tvgcbs0klcjjiesnl');
define('NONCE_KEY',        'vsblha7zcf66xn86hjkbh3v6ecj2pwfgytl3xaewyhdhxv7wvsbgcptnn0j235l4');
define('AUTH_SALT',        'k3qfbxxvs7vzfvjyv9jsecnqnbynfseelzqvsc25vllvhrfb8s2kpdjkxvdbobgq');
define('SECURE_AUTH_SALT', 'n7pfitjtt1ztaqilxzrmhfiftki5qwdzo3lkxdhyiypbnjgfetswysekvfckmbll');
define('LOGGED_IN_SALT',   'g8bt25kinfbzabhu0ky707ncjtdup41rdoyvolt0vomlnc7cqebecsgx1czz4ubv');
define('NONCE_SALT',       'nbmghaxoozv5hgchcjtjrtzy1jwuvyxdgsubbyogu05yuiz7y0pzttxf3dxyu6t4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpua_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
