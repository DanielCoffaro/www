<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
}

define('DB_NAME', 'ebdb');

/** MySQL database username */
define('DB_USER', 'danimal91');

/** MySQL database password */
define('DB_PASSWORD', 'QWEzxc658794');

/** MySQL hostname */
define('DB_HOST', 'aa91udfwq9uxoe.cvmkxrwri6u5.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'BjPy#^Mq9ph[Bs1+Unx}`^!nYk|*DJd]IYFA;>Om3{4g}5f~|w-VP,<aGN)+S-/q');
define('SECURE_AUTH_KEY',  '&(G~/t<+c8M5dUi_D@h+$<2470ZFIA9Ng/ct!Dj@c2]xkV.@S|VWJ:!T$+EnjiO@');
define('LOGGED_IN_KEY',    'u7|*C*y/+qo`bmb#w{+ NC]fMo4{(l~|8]Sr%2<~;Y,hti5zB!j,R0^|BxXwnV;l');
define('NONCE_KEY',        'hrJ)ahL-Eo@_Cv} gjE<O3X|>Ta*PM$hL(|@N]XGUUkJ}a#-vX9[/_N_B!bm.J`_');
define('AUTH_SALT',        '`JW$<__Nj2AlV,dj:9I3I+4;6o)C]ad,q_Y,r2;2XLG7Y/[S0w Z{[Z|><WzN rC');
define('SECURE_AUTH_SALT', '7BRdoM-G]M:+`6_6]7c!qbEc|O:ZpQ%,?Dc^5Z,9M)|O6bmsQR!<M/zEy%u./Xnx');
define('LOGGED_IN_SALT',   '@w-$@4A8UALp|IjH rb%-gAf/x|8-PQ+-*Ia2Gp4K^+Ir1:fiLQXfw9.r(<qu|}+');
define('NONCE_SALT',       '6@Uxunf8a/?Jo%O0Ix-o^l2?(G#D!9 e5Bo glsV<?Z3}u#,s>hLc|R|wDpXT.>*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
