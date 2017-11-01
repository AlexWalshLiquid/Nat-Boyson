<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'natboyso1_o9ai');

/** MySQL database username */
define('DB_USER', 'natboyso1_o9ai');

/** MySQL database password */
define('DB_PASSWORD', 't12xqia8he537ipl');

/** MySQL hostname */
define('DB_HOST', '10.169.0.60');

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
define('AUTH_KEY',         'uMGAExwJlFGke9j5zc4o1xB7v7f1ryGYeirsPh7gjNj2m72blnb0aB4xXEcGd5DN');
define('SECURE_AUTH_KEY',  'Avm2KSpW9tTHWagZ5CPy9i3zwmmLIVBX74jKV4f4JJlzz7vxrtkFCyf7AdasqkqM');
define('LOGGED_IN_KEY',    'CE00qUJ8n5slZ8OvdSKSHcZ9GaJX1NX4gERiH2zJOtfd5GmXfAbW4KSVHPUCUWEf');
define('NONCE_KEY',        'SlZqym0uwCJgrMXqvU3ZXks3zwpPRbGpKsJTwtr7GxxfMYz2tf9fhJO0bweQgJe9');
define('AUTH_SALT',        'OGHk9sCAqyw7ujTXqa4h6tr1IGLoSrFiuKP6m7n8SX4ru3fZ6zB7kaIPqIjzSXJp');
define('SECURE_AUTH_SALT', 'NyUwaZZruwdXX0G4WKLm97DEzDpyrdFT1vlPOUz0WPYKzFklS33fMT6gh147ivcI');
define('LOGGED_IN_SALT',   'JGD8p3zLtUPPyOWUJekrWyZEA78dGm3jZGGyeuwNXLTMyYEa8VpyKDdJppLpuF9r');
define('NONCE_SALT',       'KjfurZlJaLXduuXZo1CJrIttima0jnhvOkFx1mjBYKlt0qgE4xmfN0BY9f5kPvMH');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'thas_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
