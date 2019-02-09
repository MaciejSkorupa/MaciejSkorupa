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
define('DB_NAME', 'maciejskorupa_db');

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
define('AUTH_KEY',         '{Hrg2.8bu>6[^O}ul-y=G8#X; HQ0lNT=`f.$7zCw]<hrHa^1-C97{zL4a ~c;1T');
define('SECURE_AUTH_KEY',  'DB1[1iB[K#H0Wl)xx}* ,g6f<Y=!kqV5Q0hpVCAg+;:btPjmv~Ch~|j=G38R(RHU');
define('LOGGED_IN_KEY',    'XE[<Q>;}R_czQ4D[>~B%%Y%[7QIn2(WuQ~@sW> `Uz@UTF`.h}ph,*<OnB5mEtw+');
define('NONCE_KEY',        '6y~rOM*)rV/|N^?(x@jp}$$dKMaxX}:I.9}sdQfy;GCK-)njhU&b^=R]L9mGKC] ');
define('AUTH_SALT',        '%ELA|pI92!lq(fA192.>@d}M GwXPd[DgZf;h{qS33>%J5nz}OPTeY)y`:ZjiBup');
define('SECURE_AUTH_SALT', 'nZvsm-VBseNKwNNh9U^lwtf|mVSkwnEdR1D~i2lt{&G.XQSd1g:Fo.nJk+=GTfyy');
define('LOGGED_IN_SALT',   'G/=68dI[|.Lb>>oBLEMwh75E%k]tFO5|T@LdK$O1;D*Vb<*SME@1HwoigIR,DKB(');
define('NONCE_SALT',       'v3fO+#899QoV4bW/_cmPR|#4]W-&<[0##yO(9A*[Ue:-WOJo2U<d`ywK6wDX8k%Q');

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
