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
define('DB_NAME', 'veroniquej415');

/** MySQL database username */
define('DB_USER', 'veroniquej415');

/** MySQL database password */
define('DB_PASSWORD', 'szuFDeQeFtmU');

/** MySQL hostname */
define('DB_HOST', 'mysql340.sql001:3306');

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
define('AUTH_KEY',         'i4pj754ld8dejzXVS+YrCk7lwb0z5AUbngbVEFlXP59Ad4LdLjz6ekp9IuBT');
define('SECURE_AUTH_KEY',  'kI3el8itM+h7XisTIP8u3OfBdlXUlIw3McIVXs0oHebcZr39uiStLkOGgdL5');
define('LOGGED_IN_KEY',    'XqU5i0R3ntpqImdjbtE7zoomJpIa6Y5eT0cIJjtZ5CBmh6W78nL/rGn6fvGB');
define('NONCE_KEY',        'aBHs2HUH6MWhj22H/yMvH9jfIKu3ypREUZ6gqEmGYP2Cr2WQd9g6bwxiq6lY');
define('AUTH_SALT',        'CLQ29Ut9REwwWcP1TgpPt/3YvcZOcmvr85Hk5tC1qqCM+UBnPyIuPqQIWS+1');
define('SECURE_AUTH_SALT', 'dLr0NLF0HAubbb1Pa7R2JQs7hmqK9r7hAzd7+9k1zMofszBEo8dxGrkQZ334');
define('LOGGED_IN_SALT',   'dKGbe1PT2CL8KhZfU50jmsnNRDnLcn6YZB1ehVYQ3IOyyuUFHoz2xfWjiDUx');
define('NONCE_SALT',       'l9HVQABts2nhku0JgQtdGud2MIai2OqbXBY7/88gHaveeD4qj14TYDVY7kVP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod194_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
