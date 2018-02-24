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
define('DB_NAME', 'dev_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'yPgVdF5B8^8qcfH|thEVIaMCO)I<Sl7bm)yU|S@%VV@U@|v?t2W,m<8u)D73bDB4');
define('SECURE_AUTH_KEY',  '!+6l9OuDX3oN,cM_1bUX|KNgUDBP#NdA2__c6^5i)-9rAaV8et`IFt~UG-YYrXIX');
define('LOGGED_IN_KEY',    'RBr@g,JFRx3z6T@?9qyk876B+i0OW8}Qh3B~J8ETzxZ6t&s[rK:%US}&:e[FkF*M');
define('NONCE_KEY',        'A%|P3uuu}],~R$ms,-.x7^=JxIq;M?))?:L)#loE?*A8J_!(4^,`l@rqj(40Oiz+');
define('AUTH_SALT',        'm#@S<ItfjE5r( ea-={]yf$e8*?WwUo=0Sw.H4;tM<7@}wq8|/UuvRJ)f(?k]~+6');
define('SECURE_AUTH_SALT', 'arRYV+SqIP!%b}R9d_vF%Tv<~1[>{cZ+#*(rl wuqJ,0x$,W[04#Psn>-DV4R,?r');
define('LOGGED_IN_SALT',   'a7d if5)Udf-4~K=Ds6yp)`>k.`|#e%X.Pc0)#Mnpc}jfP+Jf91/]Zs,#j.}aWly');
define('NONCE_SALT',       'g$EGs8xG(+vyq=lONEo}2Rl})hm9+OeC2z?-A-Cy0C7 %G!Op;_{ JQ>DEp/j$b;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
