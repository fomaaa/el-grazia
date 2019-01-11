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
define('DB_NAME', 'el-grazia');

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

define( 'WPCF7_AUTOP', false );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>o;YoV6+<9IWswGxmB!PO-7}Y=w;G0-7qGdslIHr)pqU}}{&{U47VzocSiPIC4NC');
define('SECURE_AUTH_KEY',  'gD*<?X>|4C?OXhN%Bg-@=1,@:NfnvP=4m.3|9.lW@N-z1ViGp:90 ;J^H|d;@n+S');
define('LOGGED_IN_KEY',    'C#nW+J7HtH>A8:[w7/AMfpR-L<c4N7QhL%n2<+qrK.]SI(>ha,|3Z|(4QH<L`A~v');
define('NONCE_KEY',        '/Spx py*{~j+ON/x.!<w1&cNU4[x3+M7<TQ(fN/yQf+z=W^z( 4uYI)zgu9b|c-~');
define('AUTH_SALT',        'R:%qK!fP%o-}A8Q+G!B$[%)F|LaNf|^.E6CwB$9/RKYqo:nAU(4ljFFw+DYCnDvt');
define('SECURE_AUTH_SALT', 'p#[em[,?#h_+1^k-rZb=LTtX+{+{=<XT]gt-BrnEAFc.AW*MO}E>=1 &T!i4hV5A');
define('LOGGED_IN_SALT',   '-wcB{W3b-d_?{u{0g-05{1J_/m+6j7*e#T$&I$6;+40CIs+z#$P;%Z:8y28o}HcN');
define('NONCE_SALT',       '$>x+T@:|*EyG;WF5t#VXjJ}.-Tp6g[<-Cv`3x~DTOi!>]q9j-Lda+1`j-<__tH`)');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
