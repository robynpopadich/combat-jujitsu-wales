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
define('DB_NAME', 'jujitsu_wpdb');

/** MySQL database username */
define('DB_USER', 'db_user');

/** MySQL database password */
define('DB_PASSWORD', 'dbpassword');

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
define('AUTH_KEY',         '9yF~-q!J08K<9%)g5W~XS)~mok3Y,dNtCbc0u~f:;EUW3*`<~1PRaqjXoI~k@2)A');
define('SECURE_AUTH_KEY',  '%%qfldWFkFBAH9]jL2I*}_>t?zdciocZ3wZKP|J+dKM5OGM|Af?uT2mO^PIWI~G6');
define('LOGGED_IN_KEY',    ']BD}Me55&$^JK`|DD1VGZ|knx:%vT)2by=):0us%G:,`rLo!35_MmiYH8jq$oV)`');
define('NONCE_KEY',        '2E|(ITwqx_ObVF_T7sD`D^%?-{P:u[TA_l}n$hoz)zG=kw)rwhh{LOH32gY2DiKi');
define('AUTH_SALT',        '_28Mc48oj-fNS[ Q{0f/r8-d`*db 9mM:s=1n&?<wqs!X6M#8,:AW;*8l:&8~>[r');
define('SECURE_AUTH_SALT', '8%.b(w$K0nt6{fNFI93(spbFpG*]iYa&bIel0oBR<,74ms-h5.v-u=~^GX}-%g4)');
define('LOGGED_IN_SALT',   '!k*,X*9&X43S>lIdNz!-(:S5|vOd*nG*W.McA!0]OM,_Vzuj^#~VZ%d4cSjJt:!&');
define('NONCE_SALT',       '_dAaKi;Fa3vz4m(o_d,@_`&LM:iBT}k~hsHR5&vgb)knCwt+rvLN.=]I+>-.|uw5');

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
