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
define( 'DB_NAME', 'techweb' );

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
define( 'AUTH_KEY',         '_s<!3aW7a~j&h`p8`g@1t(8@OA_$=gSK8Y ]T_wN+&UQ%eRl^i,^.man^JgoJGQ3' );
define( 'SECURE_AUTH_KEY',  'd|E1sRlNhNA0*dxx:_Kweeun(X +W9BB O`54&46rk4KiPz`#ju9LQv{A?a, =@{' );
define( 'LOGGED_IN_KEY',    'Kp1olJ6ul.bMV[ndt^CO87[{#F4vu/-#1k[;K<KBd_*]B}9]/l:P0_-brZo^qw% ' );
define( 'NONCE_KEY',        '&IlyZS!5uPV5J7B8%H[vLMk6:Z&qi1:UOCGI9UsrE[)}!*VxR-o..I~@Zng:tK]Y' );
define( 'AUTH_SALT',        '4oE!mdGP/rl*`*Fy]ntiRq_Ol+Gel6;T9NE_$1x[F6wM*Bg*=NSW,&CLd>[M7Iwk' );
define( 'SECURE_AUTH_SALT', 'xRWOIw.q+0|K{3?pVFYN/M<RcXIwa&q?z[ir=qS]Ig!Pw@1-HKy*Yx/LI%@i?p@f' );
define( 'LOGGED_IN_SALT',   'x_O!p_1Mcycvzcb yEp0~yt=~X=-r!KasAj&1)`E?L-2|:J^<K`tO}./s~wMi#PA' );
define( 'NONCE_SALT',       'uGX6Da&L[z]_-6VM]!&6pwEt tbY3vD .(1h(yog%gG)aw8I7UYHV)X%p<Vs,@NA' );

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
