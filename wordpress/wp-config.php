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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'fa!K?ESZi`/PR&0z SzjyGph]MI 7^UE?-[$r-FLqG|vD@D7)7NzYU4$0gk)?WTg');
define('SECURE_AUTH_KEY',  'c}Id{pM)1sA:ht_M0J;[0 2+jQ1QL#QR%,HTRF NKu_!~T<&Nd~2QQYLe)(dMSd6');
define('LOGGED_IN_KEY',    ',sWBg{~b?;.6};35DrsGo^v0X=O_lS>@U-ez(V4Jf@ivE=GT>Cl/FVVa~R0Grv3k');
define('NONCE_KEY',        'i~:-(wlQ:kYys/xu.@$k_#&9$Er=P0)|lf|l<Y[zWPU;1fi7: NT/bJDLDx<zXcD');
define('AUTH_SALT',        '-&7kaW{Ym)$?pH`Hd_]WUb8=}i)[/@5RY-pl0BQ3xa@j0v&g<nz5`/xfSE%rdPzi');
define('SECURE_AUTH_SALT', '<}dftfX@Sdhs5^nJmdG<v-vBbW|u>pCitk)1Z5#`d~Z^k,@A_b`xMbD~fy/9PYvO');
define('LOGGED_IN_SALT',   'fy !2BEMQI#sMR?$U9~~O(RV^~QCnRc<*1FvNTn?S|+|&zEXk,.XB9;v%x](h(+6');
define('NONCE_SALT',       'C.@*IW/Bv;I5l<6)dt&~:ZYu^h_~Vp]HW7jh:.&3y*=UOK{[:#Yd^-6tCo#7YnDl');

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
