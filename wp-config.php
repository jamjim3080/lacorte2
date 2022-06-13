<?php
define( 'WP_CACHE', true );
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'y207482_wp1' );

/** Database username */
define( 'DB_USER', 'y207482_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'O.OoZDCoSMI3nPyQzkY12' );

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
define( 'AUTH_KEY',         '2mfnmtrd2mtkimfkujt2zka6o7x5vydlabtco3fwppgmf97tgzxv4idcwehqgwzc' );
define( 'SECURE_AUTH_KEY',  'vgekbswq7tejmy7onmu0dqsxthx7fco5j9ptlwglkahifwbruxxwrusk63n0bhu2' );
define( 'LOGGED_IN_KEY',    'ydburk5im1fxxmp0o6cuigbh2qmwtxxlflaj5dy7nsurvr6k72bbwx8oovzzzcel' );
define( 'NONCE_KEY',        'llye5yqkbvbjovvikudtyju7qbawhgdtvgiio8yutzvh8rbghspqnn5pkwp0j5g4' );
define( 'AUTH_SALT',        'e1iijsej35g3fyjq2hxlrlnig2h0myy3m6g83qczemlyy3f3rueffirar8gfca77' );
define( 'SECURE_AUTH_SALT', '2llu6tdibvwdk5xjrgu0wdqjoka1rsbcqsue1v3srf4oad9gswmcijuocwwlhzxb' );
define( 'LOGGED_IN_SALT',   'kurwxfcpy4malur2lkmamxrbrfm7ovkegtywua3evelzldyl73ylhbhcdzalf4uu' );
define( 'NONCE_SALT',       'sqjuvktba5m8ql93xifos6lyujomjrwodtypdao0jlut0eafrh0iox5ndqgpbxvn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpn8_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
