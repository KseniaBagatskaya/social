<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db407771502');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '');

// define('APP_ID', '1769511796674215');
// define('APP_SECRET', '835652673fea12a457e81255fbb413bb');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{Ph96?T-O7wu+,#{ki!6XR9Q*vYWav4-s|9Bd/tPnPW!Y6~|Cp`-tIkc=i}T<zbP');
define('SECURE_AUTH_KEY',  'vE=7.e::2Gw!|@4dzkM H-M1h??DmrZ^v=+t,OU+wz2]s;/`Dwd]]+.ls#qxPg?{');
define('LOGGED_IN_KEY',    'NV!Rz~qZM}7ydcG[q,}P]T>$*8r>pd(u>*i{V|I$.L{+Ag|)/L2}#aD8tJHsa+Il');
define('NONCE_KEY',        '5Ew;iska^:5kNpvLY]Z-CV|zNp(4t}eAKJt S(+[D:1.-HuL5yZi-EUf~dtc%0~t');
define('AUTH_SALT',        '{u[|oFX]pbcs:N-1fnT&[9CG-UL{C?D+,DXr-!UaHG|e`,sK=zH$` Wc+KHSs+X=');
define('SECURE_AUTH_SALT', 'OfPTnF}i8U%5T_qDHf$(A+<P2m5peU06JdO862P~eLs^m-GI; aL^1YAk&xz$++#');
define('LOGGED_IN_SALT',   '.X2aZq|AbBQq|`mFS[i3LO4:s#B5Hnxg$e td UYE.0*eIo{>Hy=oi!z%=r9fUW%');
define('NONCE_SALT',       'F:^^T<WBcVhP:H#+f!GoWvGJl^*EJ]l-=~@>)Nm3kL#}hhn)Mflep0qMH^}[Rm`|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sds_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

