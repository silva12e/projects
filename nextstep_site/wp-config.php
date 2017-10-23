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
define('DB_NAME', 'nextstepdb');

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
define('AUTH_KEY',         'Z%ltxn>w&j,OA+isjY,Kj_0wY3:V{4BeMhPFqWn=M8jY-=9Z<,sY5G_;DJ,Oqx!E');
define('SECURE_AUTH_KEY',  'fplBvvm)9;MHWZ3vTU}ko@:a d)pKmZxF=L`X#Wn=nhilgydci2)SS^plI;!.=W!');
define('LOGGED_IN_KEY',    'GK8g(Oskr~<o:Y4@p :@Q2b2@n!2tXJOqSYR|U@TR]sSlja!-*M7$%|`m dBY- P');
define('NONCE_KEY',        '4<vnu,b@4m%b?{PohvO_6CHj/GJ[ReY-,L^)9??]S1^ eFy2$6ShLbC,sK`u)z_m');
define('AUTH_SALT',        'h/4GG=_M]TIi7+-CM_BD<r<9*m<+s0(gOE<q>qT{p{|>Ym3wH8t|W1lAh&fqa~qp');
define('SECURE_AUTH_SALT', 'DHZn3s8|@fz)RO`eO-a4|)3U@@(g+[Es`7K=ylF/q(u1S5d1_:T4`Pe1`{V&{fZg');
define('LOGGED_IN_SALT',   ':=CXjd]e?9S|+. qrHSI1w2Io0)5iJ<0.4?TNL;W[>KS<{@YJ#fbfw@]3otH#MA$');
define('NONCE_SALT',       'QXxDQ8DpCm5BWCRegalVZur;A-}M]KY-8z5cq8A[*L0-.9Hh$?yFO8#PIn!_*9HQ');

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
