<?php

define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors', 1);
error_reporting(0);

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 't4p_ia9e1' );
/** Database username */
define( 'DB_USER', 't4p_ia9e1' );
/** Database password */
define( 'DB_PASSWORD', 'B.6EpdyQzrVx3mRpkIS92' );
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
define('AUTH_KEY',         'SJeLecYMzKGUACbUMeHRRCXRiRXab1PDk1QTgvTFoORT3Thp3vnqtAGwN1gyMpnu');
define('SECURE_AUTH_KEY',  'i7LTx3Oy2vED3CETFeZJYfR0uWUHkGZivkZ7LlpaDI7s1iQQ7xYa2FKInu2Han4H');
define('LOGGED_IN_KEY',    'QfVpMlvuk0dDeXdu1914d4pMnFoBqGY7wOEOvTQBjYOiQSDRkcX34w7zHn6CiuCx');
define('NONCE_KEY',        'LSY5NW5jF2L6J24aAaBLRZ7WpdUg080uvX2mZld2K2JcdjXCNJqmhxyULA6x6r4D');
define('AUTH_SALT',        '2wKhtXZyrH4tsuZZ40bas914joUSYwAZZ8Lag96HnFMbyveBg1FocLDBGjM75Ivq');
define('SECURE_AUTH_SALT', 'YHmkcfPe3T98ka21ayTZsjF6UjKBcnlhTLdw8K1ZAyQt8f4PgI2vNiWbOAYSJYZ1');
define('LOGGED_IN_SALT',   'LcrKY3LREs5JDCLEjCI8GB7mbIZS3dtcgqt3s9qrRUHHiIiwJImMzYqeXvaCpu31');
define('NONCE_SALT',       'K9oOxPSYyIGtYHq3hta3PMzKr95thIbVpV9bX99cD58YSp7sqinhRKuFVxoov33E');
/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'e6tw_';
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', false);
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
