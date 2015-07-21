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
   define( 'WP_LOCAL_DEV', true );
   include( dirname( __FILE__ ) . '/local-config.php' );
} else {
  define( 'WP_LOCAL_DEV', false );
  define('WP_HOME','http://devops.elasticbeanstalk.com');
  define('WP_SITEURL','http://devops.elasticbeanstalk.com');
}


//define('WP_HOME','http://devops.elasticbeanstalk.com/');
//define('http://devops.elasticbeanstalk.com/');

//if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
//    include( dirname( __FILE__ ) . '/local-config.php' );
//}

define('DB_NAME', 'ebdb');

/** MySQL database username */
define('DB_USER', 'danimal91');

/** MySQL database password */
define('DB_PASSWORD', 'QWEzxc658794');

/** MySQL hostname */
define('DB_HOST', 'aa1jmmqmlz7012k.cvmkxrwri6u5.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         ';-,mV;T](Q0Xc?*@i@TM2O;PoeBc>|^e^w6k;pEw<beUv&J$([!r{@R--A`i#-:G');
define('SECURE_AUTH_KEY',  '*;%zV,Y**NH+We=,$isdt=> XyP}m@v2~|RT+nXs:hI:jEj+J;}4Owq!Vo=m-/v+');
define('LOGGED_IN_KEY',    'L8FH}u~jKZk1/fg.mYJ@R+Tw:Zyw^:DI.Jm~#=rJ8)dc)45E:8r/oH+bbUf][JFZ');
define('NONCE_KEY',        'T*n]W(;jD9K|& r73tqdI5CW7Y04J@(WKSj}~<b_O?S&29is-3+RfgML!<S/Iz4T');
define('AUTH_SALT',        'ptcAV*D{+@QM&,x1ydBYN,`%BUot+Zkq7+zMW6Hb)93c.vQX$.{ctot+_a~o4@,D');
define('SECURE_AUTH_SALT', 'ugAP/Y`+Pk-A{z=nxT!fL.Jk6}|t/@)E-2FONXWUf8MSCTV!,)!Fz#8KSwW6zKbG');
define('LOGGED_IN_SALT',   ']y$jlkjqV/ zs|c&-XODB,;`|s`mRP&}TG.O0KY$ZU8[,hJkGZX E4lnN0#F(rN&');
define('NONCE_SALT',       '%$&uJ!`d`4:wW*Oz+295QK+Ws}C-t1-B{%:0PZ:Fi>h eFP`|O[BHK}QS?33[Klg');

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
