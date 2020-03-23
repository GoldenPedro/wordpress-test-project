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
define('AUTH_KEY',         '806irzyhF9JvLBlhue1FLF3ACL21bVGQlvGOirW0MpxbGX/paPMYbONptpB7/+r4jHL+6wjwz+aJqGf7NCAxNQ==');
define('SECURE_AUTH_KEY',  'v3tcnJHnmOFL7zXhoFXBEz6T6hAyVPWgei/jAk3LMF4I+00sb2LAENv5Mu6K36Ons8O7eUKt/ehrXBQV+hWIfw==');
define('LOGGED_IN_KEY',    'nYY2wooTbiuj67FcZzCFJ39SKSoFf+HQrBU3htW7O6dWhDVGdJygRTIC8+IpPYgi85VyBFKgqIR8IvvUlCFeEw==');
define('NONCE_KEY',        'XiBOMcRS7ytEIHd+NAfblTT3ipApOPQW79X8aGXJnG6ulSnn/qKDRcD/bARK7OladJ360X1tJ798/LuHZxPWSw==');
define('AUTH_SALT',        'sXjgSfmwdS6fzQN8lmGVocZkFGJbOcbOz6n3Z/3Y2qwaYpgTIKEHvD43yfyBioK3p8MDufgiR8Vh4jza2qdPfw==');
define('SECURE_AUTH_SALT', 'IdPKPT7yxCJdwwVDCm+flvtgEGZRXHzuSAIN4ALi+WHQlppvOrQbvyLP9TrlcHooWy01qn6C3Br/t5tNyuaAZg==');
define('LOGGED_IN_SALT',   'LJSgWkoJP2WAU2pigUui0zNkxqokN4XeqazMhZ4oOFJ8TFPTYGBLRCWRKlUVdUziCwQyTz1KDNNt/3lluGlCyw==');
define('NONCE_SALT',       '8Ua7r1pH38IHJqoJ5ampecLotGdx8OoVUM5PvN2ZC4m85PcRhiN7jo42qKR4PAMTZ7Ee1KeiQlZxaNAuW5+mGw==');

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
