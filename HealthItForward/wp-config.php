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
define('DB_NAME', 'patient_data');

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
define('AUTH_KEY',         's,b2[C/DFqbdXT8ZF7f5?h~FrcA9-,Z)QD }I7KindJ&+XI@C~RZihR{]O1]60V)');
define('SECURE_AUTH_KEY',  'K/A&Lj#[YsR~P|th$G3F}QmZL!Xlf.C6<~%Rxgn~cUhVjf#JU&P4@!O$5Z#+G_-7');
define('LOGGED_IN_KEY',    'ETDuqYJwv/0hn(RR<2z?>-!VLt;0IIcmJNl9MMIk )Kpe<4,ITT RZKU)z>DM=,>');
define('NONCE_KEY',        '{!=w(B2`#B!OL=J6nlk4T9=lnhVb=L(m@&BE-,h2!wp0v(hjX$.eWrK]$.YcoG4Q');
define('AUTH_SALT',        'G4sTr>%oX`4g}&Z|#-=nm9rE^1xe49g3UN1qHi(npTV>CFGOUpN@T%O9%;G(FJd:');
define('SECURE_AUTH_SALT', 'vM(q{eG>/jex{f*z}%pXM:{DjhJqM+XuYDBV^%<Zq&;^6W3I4,3-0^pK;U)K$hT2');
define('LOGGED_IN_SALT',   '841dWeBl^=SH9>~V@8mJ<Fu%xpl!#qdL$1~fr}twSV[Qje3D<_}NJP+}LcS7WJwx');
define('NONCE_SALT',       '31t+~YIlBB:xCv<<y5Q%IgJc&]wQh2wmk9rncyOUP*eH@C|:TAAzJY^.J@{>;=6 ');

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
