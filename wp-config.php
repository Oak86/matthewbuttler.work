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
define('DB_NAME', 'matthe70_wp236');

/** MySQL database username */
define('DB_USER', 'matthe70_wp236');

/** MySQL database password */
define('DB_PASSWORD', 'P7-V3vS[0Q');

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
define('AUTH_KEY',         'svfq6iikgzycahjfyzhidjdhzpd6mdbwcjdpvyulvi2grzjsejystlufxzayfaop');
define('SECURE_AUTH_KEY',  'csqxujlmobcshcinsanj82jez6gg9ocpk0vclefybzrnhpv2xr4ogruqsbatmivg');
define('LOGGED_IN_KEY',    'avospy12fnegdhblk9h84v7ngnrf47cpif6xcnslcrkeao0szqul4lntrrjvulua');
define('NONCE_KEY',        'd39ez3l3baeniy0puj27nzwz4oyg3oopvdfp98g2omx6o3yunh53w1nwfpwzywgo');
define('AUTH_SALT',        'amvw5d6iwznxmkcjw5uyoomupvozrxgz1acabiyrm9gxtknsuu8scbksttuxopjr');
define('SECURE_AUTH_SALT', 'ooex4ldt2zgmtcxafssm0tcvabgxiann5z2ro7z7vsuubfouwyqhu9kniv6oyyud');
define('LOGGED_IN_SALT',   'qntr1lenskywxs4csuork9n3txr90jv4cysze7zd8zgssiidcs7e8nbfikyyuxyc');
define('NONCE_SALT',       'ynaypiovwpm0cy5dp7xpzxlx6n7u4hkz4pe3egpuvswv1wk6n8nwyvsc1eljcyje');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpfo_';

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
