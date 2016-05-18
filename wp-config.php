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
define('DB_NAME', 'base_theme');

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
define('AUTH_KEY',         'D<CKU|C*`g*NCcZ@Zf<s[UL=OX8So(*B^QI;)M`}(F?Phz2kMvZxCAG|~8zfx/<p');
define('SECURE_AUTH_KEY',  '$oQnH`iRzWJfj(ewiaG@Z7G>99Q7b%{qsZ,6/ya0[Co2c@?PzER/&qqn+^WA9wn_');
define('LOGGED_IN_KEY',    'u4_Up9ZE7D2/5n&MoDDds:!CO8w=?7nb=#.WJ5A,k0:n*HJrdACG:.!r3tW~C6sj');
define('NONCE_KEY',        'y6+3%6#[+X!^]Hq;EarA+2-{Nq(N_Hh_dI,w?f8^3Sh1Z0H;h!z; ~A}/ V@@8$]');
define('AUTH_SALT',        'Ro~MjG18wYbH&7d+g@ky^k&!=%j4`|OSAWN^gG!4q/pe$4]yQHf>dsZ>|)1#br7?');
define('SECURE_AUTH_SALT', '9&uHLS)O3ra{:G `9:&&8q#voY*E6,DT(_VNA.b#4fOFE}^;CiC;a{]%ffU<`6c)');
define('LOGGED_IN_SALT',   'O)c~u@v42k#Mjc9xf4~:ATu=GLv7s|JXup`Yfv_L8^mI)*Gs:a%hi);zyP4Lo^WQ');
define('NONCE_SALT',       'C+!fW<gJ>g1 W0`e&Idp!I|h`X@HA2s?H4`4u-*#Wdj)K.us*!v,NQ|->N73+]~o');

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
