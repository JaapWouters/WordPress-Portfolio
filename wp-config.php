<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'y%gW}I+H{8Zc~eC?Q:*L,#)+_9*Jpzg&p`/kQ+_n7yfbvJ~1DQmn].Wr6S718a.%' );
define( 'SECURE_AUTH_KEY',  'vl7sn,?ID53(`}A1dQa@I1|*%i(P&mwExv^l/~^#@%i7,!(p.+25tr~P8(HJISlH' );
define( 'LOGGED_IN_KEY',    'yyTrcH3Wtg~~hJv<=|=[H(h+t>@(pYFS(avEZI#In^)2G}O)IzEKWfXgU8(bSa6=' );
define( 'NONCE_KEY',        'J(sIAM( SbQs){Q6|:(^[~<-6^*pG<X>*SX^7Q&slob~UzimJbhMte>tajnDfDx,' );
define( 'AUTH_SALT',        'gR*K*Oegexbn{i>Pnv~CW4Qc%{1:f`#8ObE4*%#]30Vaj9rFX)HP,WR`w{vc(v/+' );
define( 'SECURE_AUTH_SALT', 'VzG$l?Y^_jb;@!2,54.n~ux^peumb=W7z k4=k;RVN2Av4L>41l,?,L*$>!kI$)Q' );
define( 'LOGGED_IN_SALT',   '|KASFj (dTk(|,mDWGWVHwI3u:%RW!SBRU/p<-^i]E,@gq;eSx5H>NzVu+d`p+)k' );
define( 'NONCE_SALT',       'zDNiXm>zeKhSa=?~RjBSJ?LK&bTnR5VcPo@%yKGx#o]y$JH)~#i<R4Wmm{OOEVC/' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
