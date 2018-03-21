<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'gamarrat_wordpress');

/** MySQL database username */
define('DB_USER', 'gamarrat_wordpre');

/** MySQL database password */
define('DB_PASSWORD', 'g4m4rr42222');

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
define('AUTH_KEY',         'H~t:!w*TdvZ8zPgTowCgmxC`P4*(fmHjJOv+J9$AcZU+Qx+O*H3NRCPWZAXBkA96');
define('SECURE_AUTH_KEY',  'ZtIC3yD?erd_e#_j2bTfW*JX#SakoYA%m@3K:B~bP_pIj2pxi:0!F|47Kt(wn2c8');
define('LOGGED_IN_KEY',    'iyVeo)26F&x!mOhb|qXNc!KBrXkZR+tLP1&Yjtow7UuDiw7#JqTF4&TonYGWNy!Q');
define('NONCE_KEY',        '930F~;:P5%sGHi)V$Q/E^QWp@XQ7)Ww(swz7VOu?%I6C+LF_H^L6^LXIPu@%eag*');
define('AUTH_SALT',        '!/oE!jZ)9F%)RL8$Yp0WE&pQPZE7s:v%iDn2r|(&6(Lh:c+UiK7rq~5l*"75Qyv:');
define('SECURE_AUTH_SALT', '@JEcd):h;1y(yDi6m85hrnnN:%9?f"BQ3$5pT|G#XC%iLfd?I~^D_QWZKs|u^hF+');
define('LOGGED_IN_SALT',   '*v%!OUflcgX2X(R*IQbsj(`E"wrw7gwEaO~mmH;3Qs:uvJ/g&A$_4j6xJ~*6TO%F');
define('NONCE_SALT',       '&JgL_Rg!K?TsR$s"sV@5M6RJS?*_ZX~$f!8;R0~9tPRFT+^z+@VX4sw?$`bwX_Ou');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_495ksj_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');