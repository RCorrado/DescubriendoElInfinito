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
define( 'DB_NAME', 'infinite' );

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
define( 'AUTH_KEY',         'mVQ6e9&m!pk.4pzi4/+D0HYQq^t8AZCrk/G-KszFMgn,5lz&2AFZ]NYBS+4icx*q' );
define( 'SECURE_AUTH_KEY',  'I$dfUdj2^AJ=qGxQ89,Edi2;JKK:?@r2y Ya~eX3M:#u}C0k9YVizL-p5(/%U O3' );
define( 'LOGGED_IN_KEY',    'kG7I4DzE0WYcXcN!B&}zxVq,?`dhfa{{4I9h/Nr !bO{T=qs-bRla,=piP0Cn_@H' );
define( 'NONCE_KEY',        'WN,M32Xrh|{HE9A$zTp4$s?($bq&`|gO#Y2Y:1PZ-2w?)Td?Y1}TjO}GoXJbzL/T' );
define( 'AUTH_SALT',        'MzZV$3#YG](R (!(B[%n$1;SG+G`InC8uJC>`&<`a)mmgv };?g BUVZ]$!F_HmP' );
define( 'SECURE_AUTH_SALT', 'Iz}KIJlx[pSE$l8ZFQF>1hCz)&B1qR`;zV!SU?`!^vF{3?i(@E2lwwWi!#C*_`*:' );
define( 'LOGGED_IN_SALT',   '9[n=77va5I1#UDi_WPR=A,T!Vq*SM1@-G#:L.DR[b,jC; ]jG/[cquA1OY87PX5F' );
define( 'NONCE_SALT',       '.>j_3I/r&innYJ._{|Jf-;M#Sgwoo[m=X^aGa8fJ4/?j67VinfiuN/vATHa/Xs+(' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
