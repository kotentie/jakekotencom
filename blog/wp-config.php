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
define('DB_NAME', 'jakekot_wordpress');

/** MySQL database username */
define('DB_USER', 'jakekot_word');

/** MySQL database password */
define('DB_PASSWORD', 'mJ34yt9G');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ts>EQCeu0_B+}+`~ha|(4ySw[U>;h)b&k-<pR+^9RD^V$P_M*dao<s7CGmd?.`N-');
define('SECURE_AUTH_KEY',  ' FTj<FZt$<C8TWL%Q+)?jL+?+9S>vbPI8wMD%^a0**GK|@P>!|UFzDRi{6$sn.lg');
define('LOGGED_IN_KEY',    'JGMH~R&:dAI6>5Nnv0~z010~8K)0Gt5AXYp~x:#u44I]bj1tc=Ys:=G+7e$BX=%M');
define('NONCE_KEY',        '<=!yja7y}s<2ZQ,~!211]*%P wfDJ1=QJ3g>+]]182&PogD1Se&&:WN/R>)c6fIj');
define('AUTH_SALT',        '*hksl2(:^1N+$==|%A,1tg6*i`;&oR7$w(5>3~*;Haj(@1~qAkRuNeThb-+ql)io');
define('SECURE_AUTH_SALT', 'iZ?tC]f-<n~tCI%M;5M`1Wi6!COo,-}{jm|vE=^_c&:2{Q&2+Z,A,VVGL6||wOm*');
define('LOGGED_IN_SALT',   '@%leo9|! MK=NJIKX|+A(cY[lIK&+]ybPAR2oAa9P8Lo%r@bQ!H;LXyM/Bh*9c=8');
define('NONCE_SALT',       ' ,L|ukG#R |OS[?6g7ea{$Xnuox+q2JxqS(u44-[ If@AIH7+8(GerW!sW#|4t/]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2_';

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