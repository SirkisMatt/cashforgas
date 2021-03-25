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
define('AUTH_KEY',         'G84sXA/jnYg8DZHqCxaFXmKAn+9TPZzbHzco+o0Rvosw5MeeYH95FEFjql6xJo/EONjKotTykmuyV35SNQUKSw==');
define('SECURE_AUTH_KEY',  'ihoeKy2DNoh/XLD9DexpuOrCdOx9/o8XL6IgZ25cfrGn0HVLzBwOj1xmGnWeJqrnGrs3VMcwfPdnTHalTNsToA==');
define('LOGGED_IN_KEY',    'Tn+g9LMfRTO/CcgP2azV0XjgCNjfGBX+Ea8XKpDuqJnHePlcusvbxRFyBhUqhhxjwSmwlLHC88/XdPTs4Aq3/Q==');
define('NONCE_KEY',        'B0lvwpkARF8yw6EyydpdtOhwYEw8gL+35WcWx3UBKnOHiZe5rxuwRn/N+amYcoz/5KJMcTFiRAfp1oR5oEpxNA==');
define('AUTH_SALT',        'uBA8w0hr0kBFUEqvw2lq86v+1gV695OR/xUdKFVTltVfJQvm9XuSqmt5zqEDuO/o12XTW6xFlriPI7SUlB5BeQ==');
define('SECURE_AUTH_SALT', 'z56NHKKZ/U/HENFFP4Iwfqi3ltvjN1kYOI0MCRyNqGHBcWXloJuWE7+0bFzspvp6AIKChfK7jEXOg+AGDwGQ1w==');
define('LOGGED_IN_SALT',   'YFjegv67lxPQVnnuCkDBRwJ+QQqA9UiTGLI3OcxGRz0rWqLNl9NzMjNqPVyAh7gfp+sdCQWtc8sY6FB13oZfzg==');
define('NONCE_SALT',       'KBclykgxQh45nrVQXf6OVTdA3eeJr4BgmbTlbSm5zPQJINgPqoLhph5R0QneqjzmBhnwsbS1trAVOalIqG0Acg==');

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
