<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nabobs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=>UiI=?0#jA*x?u!_tNRva).W}*(Y1{KT|z!`xb0gYlbhwSms-M;89S.oo%&O0M{' );
define( 'SECURE_AUTH_KEY',  'J)/gYVKi+QQzms!3sYd&ptR[j9=5W>Vw-R4Hg/o{n;L(5NGo;Ca9rQjytFD#H3Z8' );
define( 'LOGGED_IN_KEY',    'J+zwj;)_miOqG^HIi6m~UXMJfjLbsgM7|@m*.NWl2B@ VTQmm)SZQc#{Nv.DdKYJ' );
define( 'NONCE_KEY',        'RbngsI;/Vi?w}T!N_(y=./?NSTVsfxrT.q-9Gsw#=Z)|7)]H186b*B)r`2,JZ@<8' );
define( 'AUTH_SALT',        'Vh^sFUj9>i?}pPp7YL~j.>~W0s*4sxxy^tqU)Xc6+H;%Wg=.7t|a%}*6<l4Bt2zT' );
define( 'SECURE_AUTH_SALT', '3cGZpQ ,/hNt6fUW3b@f[nWYi.&J#`lv`mK5A)9;J49Yt-pvxLMu/^V|5kaX6TQ}' );
define( 'LOGGED_IN_SALT',   'Ep<RRR|!LB__JaLzl!C_`uaCd]MuOr?:9Pp>#81~H%hMXM$6WQpZ^w](Xd@zl|et' );
define( 'NONCE_SALT',       'tq$Nkj[@CU?I_&bga`8Yf{k4H6Cg1ay4Y=yMU%PgzUu$SdnJsdO5]k&_OfAuL=dv' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
