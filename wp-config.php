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
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', 'lex4vn');

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
define('AUTH_KEY',         '@|[U,|s?-n#Xtu&l(jiyui/.`=O|TURMudP]~54KHt i;rh|YQD}[(T^e`P8W;gY');
define('SECURE_AUTH_KEY',  '$b%fKQH[l:i`M+:I]3;a8x[WA5wWmj&hZU)&>z2bd1-f{3uiT?Tb*d41m,][KEc#');
define('LOGGED_IN_KEY',    'qPD7=.+GaTB{S_`gWev>A)%Jfrw`32 XtA>`Rl6/f|+4mMcHQ0Ch<5,/a)!)y6sG');
define('NONCE_KEY',        '3ROP+-l*h!?^Kd:Umf/s[;F_-k}_}p]<gv)63Cok2Gm(gLA^3,oUB=1l22A{:j:0');
define('AUTH_SALT',        '%Z..*WtVUH6;yAeKa>Y?|i!cW5d&.kU=mfrta{e[{S2A-B19vPSJBoR&K}tL-nTo');
define('SECURE_AUTH_SALT', '~jlQclqC7f/[zF<{N?siZ8|M)5ng#)G4u i&h8ED&NHn~RwG2~inTm:Ea4 H=h)V');
define('LOGGED_IN_SALT',   'nSKf)B8^cD( 7>k-_<La2(32mL?6EFCAM^]W<VOU,GFf#x`Sa=/a>qEOnD 8N!T}');
define('NONCE_SALT',       '*!&BH/aiNXtYF4lY7yeI(%K8Nkqx%}c?yRI$6(s)@.2W+7&+LOk.4P|k%7=#|*7F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ct_';

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
