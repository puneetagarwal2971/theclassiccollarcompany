<?php

define( 'WP_CACHE', true ); // Added by WP Rocket


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

define('DB_NAME', "theclassiccollarcompany");

/** MySQL database username */

define('DB_USER', "root");

/** MySQL database password */

define('DB_PASSWORD', "");

/** MySQL hostname */

define('DB_HOST', "localhost");

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

define('AUTH_KEY', '141558c4aa0c978c75e3ae38e07550110520838d128ce70b03ff2c9b05f5591d');
define('SECURE_AUTH_KEY', '801fe9196bed727bb4d157cc9aa68f08ecf981fb87b509355890fd814ccf2929');
define('LOGGED_IN_KEY', 'f500dc44c6251e63c0cbb388dede10e311a5c1fb507516521c5ded72abd1e650');
define('NONCE_KEY', '3cc1aae0cde7c5cb0e2a4ae2185bf32fcfc521434a5248ecf206f66b63db73ea');
define('AUTH_SALT', 'ee9b17d2f2f3189c21296c8fbcc8bd7d3abfe74d3d61afdc81d2d4a6019f46df');
define('SECURE_AUTH_SALT', '7ae6b3b6e3f9e0ac0fa797e55427e74a2987b7893df715ef23a979a4fda22757');
define('LOGGED_IN_SALT', '364644452f7fc8e7ed966e3e80d37e370648513fb3e92f0a29d378fcc188758b');
define('NONCE_SALT', '1562722976e78d68b36a2a45a4e9aeb77a263866854255f73e9329c7be4c0e1c');

/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = '44G_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

