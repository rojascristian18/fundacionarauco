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
define('DB_NAME', 'mediawolves_fundacionarauco');

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

define('ALLOW_UNFILTERED_UPLOADS', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iVqF2:xokl#K;fwrVHdhBMvUuB`Wb7J_O%!Wm))0bYlaNauL7| I]<;uv4Bpu7Z`');
define('SECURE_AUTH_KEY',  '_|VwtIJ%>9jA7/f34s`=@>w-Y|pV:,Ygoson[f|&fg*&_e4_3+wZJR%v4o.Oh{3q');
define('LOGGED_IN_KEY',    'u$L[0#41YLMhjrbD7G)MlzJc4[InOf4K,a+?uisr?18O8(u{^{k1z&PTxp;3vP5j');
define('NONCE_KEY',        '])X,G vLf]|!>-Y&2jtEap_=d<yotL213#:X93Jt@5#G_0kYg&n% LlKmCf4`f6(');
define('AUTH_SALT',        'HbN B&tr5:230yf?t!IuABR(7KRIj@fT?sP(M`y1LT<K93Mb]D][JxF ;g$UfM@M');
define('SECURE_AUTH_SALT', 'N&B@_L..b^{jM^JB)Y3QR46W?ekPJoA[{WwIv,Sg~|]PJ7Doo{QHO@$79jPp[fLz');
define('LOGGED_IN_SALT',   'l,%0-gwE,`,Ud6m<:w8% HFyX&K;yJ14D}/KGsuFY[|{3_|M,k=G|?#DRkx>YS<s');
define('NONCE_SALT',       'uuz2&J}85,cE+)kQ(%XWwpIEb.e(G8ORBxgD+(N^gLMtAIiE[O~?:&64hrZ;qpC&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mw_';

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

define( 'WP_AUTO_UPDATE_CORE', false );
define('DISABLE_NAG_NOTICES', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
