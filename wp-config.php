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
define('DB_NAME', 'advercom');

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
define('AUTH_KEY',         'F=V9r?an.DO}&YQ,2:]j1|YKJ[Y/Kz@[Y!%n,=i`x!~Y~?cJ7JE6G=~3( g=s=/N');
define('SECURE_AUTH_KEY',  '=2+{~seJCrAMx{>[,3O0L&}Tj3Z @*@#RBl`bx1Q=(}FLVyo.IR#*e(i$|p^zIS0');
define('LOGGED_IN_KEY',    'sP> ^$R >9_u:RAmZ6 G]-YUOh|0hUK`U5w&<QU84@M%]l=>W6#|FqKKzfr!iu0C');
define('NONCE_KEY',        'e5@cR8FD0+L7$83T1okQEZd%jUmd>}D~P3|ZPpSKQ&PGgRbc7+`<C&cM/Nc5g51n');
define('AUTH_SALT',        'P;0Kl&7?r&jWco:>B,>,f5d!YQPzsMQ8HdHq7~9P*>;)vQU&l.aw(KUD$cOa#qKO');
define('SECURE_AUTH_SALT', 'u(WxOd:tRWx~TjJP}]>2Q!@=*![PQVv]_SMLr9[W&Zg^s>l2NKQ&9nJT?P.$gME;');
define('LOGGED_IN_SALT',   '(0Ml@7E:Hx*5[^{`(?f`p$LVIe$ym%e9qX_a@xs)Gk%pDnkltOSKL5s(C0>ZaT?f');
define('NONCE_SALT',       '2_E9>zB[H_!^4:-E$_$;#5>~2)[c}x!J&)ro<1;)(^|a{9lW gsr9qv1ZIfY)|m^');

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
