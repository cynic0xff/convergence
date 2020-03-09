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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '29zPMYnwo27rmeCY3T50/z+S8I9JK0Co+ZZFPWKqqS3mxTPRa+lVxprninQHK3VX0Ho3hOkRQQ4Yda2xki6vOw==');
define('SECURE_AUTH_KEY',  'ukSqd+B169b0Ep99lF1hKvWUjPl52kdc14mm1l7MA8q2IcQ6TzzH1xpK9dQGej3fXw1O/A5oXR3tJMpOBJzBNA==');
define('LOGGED_IN_KEY',    '5PQwqonQR88QFHcwRZN9n8mSHUVuaZsN8BrczF4Dyfbne/33KG3KGEBEDpdRpKe/IDqL+hgm6bSp04jqZ83Jlw==');
define('NONCE_KEY',        '8FXvcrKZ9K1rgknuZbfx1Rq6m5EcFKt6tmfQnn0zPOSa+zUatNDI9tdUUN0SozDQR9XRpOJgbRmel/Uf6Xr4fw==');
define('AUTH_SALT',        '/5lIdsddNFd3loERM8kuYtZ4AjLvR/JbP4tMFLmCJeEO3OlfGdatLT8Cahs5qr1cOw4lCT6T1fQV4I3uX+//tg==');
define('SECURE_AUTH_SALT', '++PMfhvTasjhGBhxfC7VrIIhnH6vjngRAm4C+1ZJO4wqzhspUz8vYpmFUjYlTXdaCyNbjKLqdD1m1s6J2yJoiw==');
define('LOGGED_IN_SALT',   'xoeL17B8dIi7BvU9nj4Jtivh1FZPyvFR306MIe/DZuTvPqydGfsik1yCdiNsRKqZK2ZkfVvQckGYgFRUOf9iwg==');
define('NONCE_SALT',       'm23sdr+RrmCSGvg2Z9eKBJlDg6puHzcWP9Yf4YWguLoHkREc8gznFu0rVWL+0tCHjPlb4YIc0nIgQPG7ifMdxw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
