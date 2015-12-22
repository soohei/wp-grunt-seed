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

if(isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on'){
  $protocol = 'https://';
}else{
  $protocol = 'http://';
}

$URL = $protocol.$_SERVER["SERVER_NAME"];
$port = $_SERVER['SERVER_PORT'];
if($port != 80){
    $URL = $URL.':'.$port;
}

define('WP_SITEURL', $URL.'/wp/');
define('WP_HOME', $URL.'/');
define('WP_CONTENT_DIR', dirname(__FILE__).'/wp-content');
define('WP_CONTENT_URL', $URL.'/wp-content');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'theguildjp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^YV6u/Nwskt9f3F!xf76Rdwx~5,oj9IDs+G^xYoO()EDQ%#iOZN>POS?z?,s9{,+');
define('SECURE_AUTH_KEY',  '94W#^]L.@s~k+$2mzJ8)]1PI}vd8Z<$-f%P_#`hI_d>|5@ey5F QHxM)Jat,PHJ_');
define('LOGGED_IN_KEY',    'f/E-MG*[;>j6y=e5A-Mf-<!},7?S:.P.OEF:lr4!BE*]@zYMat&!>^wUG|pY}I^S');
define('NONCE_KEY',        '1a79+L*)y|Vz{OUV_CVAW4$Ad=`jIWWUnyP_VYcUcnGnj[=B)MV7zDQ^c-d,zUn#');
define('AUTH_SALT',        'miC}Rd,plPW$E{l}<LitWJE#`~vdGyoX6V-n&bQZW&v5oz&z@T]I/zi%ba.}=fIh');
define('SECURE_AUTH_SALT', 'sW#h5HDlV1C;y5CG08o dr */#Tzt5T7`z!<dp#T*H2]wJ|Z#QCz8:f9Iv(7d |c');
define('LOGGED_IN_SALT',   '}|H^@AGFVhF+rh1}.jTdy-kvn7D/FKk%+`cJ ju1|k=)vY@cwZ/KmR4A 48h1)QQ');
define('NONCE_SALT',       'gTH]?2#!+A]0Q]:`KfHP0hG5b|u{qMlK~M!FKrat{Q8-puPoCla h5n,5 tA-lE%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
