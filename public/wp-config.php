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
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'e93M5$=S8:(bma1}-8m_(oqlQD)l ,>9<m0vaaQ{H3mVL5)|W9{W{ZWk:qS^z+aV');
define('SECURE_AUTH_KEY',  '8y{L2B.#^fb3iR4dam6%+J5j/1nY!|MM1{v+~;}hBB-c_?nYd+,j`)p-PkufdH0]');
define('LOGGED_IN_KEY',    'jS^2{[5 5BW_<%1kSk7ly#]sONX9holspu`?c`dY.Vsrs#f+;fHaT8}Z]3Pr>*WZ');
define('NONCE_KEY',        'k-G]yhXOd?GfM+*yxFj~ktmOKo<+HN|q4yw~c.uPR eMo?F(?jzNIQdHXJm|JU#+');
define('AUTH_SALT',        '^MG-#+5A-XxMzJE_)~BRKo>asNvLeGkav- ,/>=F_@D3<oKv4@zULF1O=n7/i653');
define('SECURE_AUTH_SALT', 'Q/*Ko<oN{X#][n5 ^0iL7fjM]|>$2G(vdq=~3Ag,|bthCqcrc5;#(M3Jw~e dlT~');
define('LOGGED_IN_SALT',   '}qwh_NU:*j)O-{l5y9d`$}N,SK;OBIW`&tcug{tA}f{&?QG[<(EX#.r/#&yDI%zM');
define('NONCE_SALT',       'aYWnPG1*1o]Z_g2lY-^_JQkf8{|Z7zq|)_ms8kE2]YyF>Q|-I!|+O;,*.NZ=6 G3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'idcTestWp_';

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
