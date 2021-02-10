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
define('DB_NAME', 'young_funeral_db');

/** MySQL database username */
define('DB_USER', 'young_f_user');

/** MySQL database password */
define('DB_PASSWORD', 'Don#trell1');

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
define('AUTH_KEY',         'pVzhrC=RpyM[U|&?e$PGMk]k|l_?Z`q(D[n./]}&4JJC{^Ka3vIr?{<6N{*s#!1U');
define('SECURE_AUTH_KEY',  '`6xCGnwLSSFDukK1a6AJ!LL^EdcEU]C,|,IN&Z(UhbFzhz2iB94BgZwVda}s_jXc');
define('LOGGED_IN_KEY',    '*kGPc8U6P55Y fFzDKn6KR =PmFx0P8C?ogKr^LfQ_a_RqDR9<)PT$5;-SD-}1UL');
define('NONCE_KEY',        'Hc(UqXhGXYqz`taL,M?-flN5_X}<9*P>jECb>;x,yY+hL[6l3 4v(FAw(8?}76|.');
define('AUTH_SALT',        'PIw.PAZ7|o]rt`l.=qUqipr?oM{1XP61LpH QrQMvRv)YzWdPqVqY|Y2o]v7Y6c|');
define('SECURE_AUTH_SALT', '_2%sU.2Y:>M[Xlj5*.,D[8NS:#BiAay:gZwhEBm?dehk$KrM4CC:e[5|<w?2k8j~');
define('LOGGED_IN_SALT',   'XZgQ,ZU2Sv}A}9C!:v8!DFF$W50(p{pOnHLLP_jT#KPNZd@6a4L(:~fiaE(,HLyv');
define('NONCE_SALT',       '{R,a6fk _e>]Bw2x:V!mvU<ThftK[0PM(~IIACQW,(Oi&|igU|i:d7U-rE)}2hW1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'yf_';

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
