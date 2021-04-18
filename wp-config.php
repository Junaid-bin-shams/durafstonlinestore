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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'durafast' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UdyL3Enm`~Ein7*=[_l`rz;yuzoVf.IuBKyxHLAR?1s|}a-kJEy~ab:AynIx7X2(' );
define( 'SECURE_AUTH_KEY',  'E3P[s|ptDK]jl5S@4p1Rt%<&9S067.(dB#6c{lnt}Gyt$yYza,x %%&BKvy9pJ{~' );
define( 'LOGGED_IN_KEY',    'MzQ/<Zd;_vhB#<Bu(rnX.7 ^OQaLVExgsEhHABM}Cs#% }|68skU?Dh z5[*3Or?' );
define( 'NONCE_KEY',        'UZitwtcROUy{=#I,4b8_t36*<9m{h?y0jzh KoTLndzh:mm^0eok)MN9~=4+7)WT' );
define( 'AUTH_SALT',        ':DvUp@_MTl(e<Y_o]r!$=X>iy?;$`Dyv4WA7>:T22}>.:4/`,ppzM&PuRuB_NpLw' );
define( 'SECURE_AUTH_SALT', ',6L:hHqtfG|y9jh4H3_VN,ZyB6|)0[n:nH_?S$O%F^Me>vQUp;}7H[CR2CUR1+2e' );
define( 'LOGGED_IN_SALT',   'bGFeT62)U/:?oBN_#-:/#tZVJC!VDBx#^4_]K&|ctSpiIae45/g30@yV^]_lI)n-' );
define( 'NONCE_SALT',       '?:m)?Ny>0$R*~o}-R,63:w!Tv|P#Bcgx8v>^yZLTmwnIQ&z{*f2]kW;5R1/Sg0X!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
