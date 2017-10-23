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
define('DB_NAME', 'nextstepDB');

/** MySQL database username */
define('DB_USER', 'eesilva');

/** MySQL database password */
define('DB_PASSWORD', 'ErCunado47$');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'W!)PZ|aQ!FvI&N|m[r#w_sOXp9Ma7R`h}?$~E1Ct/hxior/F$kcG?!(F9{+6x1<I');
define('SECURE_AUTH_KEY',  '+`d.wdKTF[SgOcS ^Z9S}=_?:=<8NS0mta|mcOK+xUw^HfDoS5Uny%-OIC2oF>n^');
define('LOGGED_IN_KEY',    'NyJRgK8fWZ9Sk-Z]HC)*mp`;Vp{U4uG^MHI!i&2]R2`jGU4JgLifXz5+D3y}B@zR');
define('NONCE_KEY',        'D?LQzqmjOTBAYv|&+=vIe$,PjoN{ot0p!*k|^Z=gvY_>bz^BG*4j4lVaIZ3eFc|[');
define('AUTH_SALT',        ':kgUFTp,)e$`y?n-Qu$Tl7jxCFRUi6H]z0eZ{g[AXC`q`7oM]X%R/wrB<{BHc@#0');
define('SECURE_AUTH_SALT', 'zYNHe-|hvT=xypFxhY(uyGNB=Y6Es?|R+ -W+.a.?vXR}#}AJ=JD2;FU`NBVk`_E');
define('LOGGED_IN_SALT',   'pi`L?nOF7f[#yKJ#L:mX#,m-<[[Q|{8gyQ+b4Ilfjz&tjoR=Psw[w{};.40x`jFk');
define('NONCE_SALT',       '1=qa+mePh;BoLd>hoEye -&A)LI{XA|_(#}a0.a]l`HjC7 E+k5RqpCli&N/%S!t');

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
