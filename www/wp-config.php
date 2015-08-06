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
define('DB_NAME', 'workplanhp');

/** MySQL database username */
define('DB_USER', 'workplanhp');

/** MySQL database password */
define('DB_PASSWORD', 'workplan0895');

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
define('AUTH_KEY',         '^WjtdEeMX-FvWL0VOZUA0V3(9AJ!&*(4rL30l2U05jfeQL-^m6zP1OiS{o |%GA ');
define('SECURE_AUTH_KEY',  'g/S?2[tf#vOx0m3`z-]q/#H$d(L>;Cy526sIbD=2@uMP>@R`ms)|DWT-CpzY%e%f');
define('LOGGED_IN_KEY',    'u*q>+BW:2VL o WE:h-_F!&Q<og|vzmRYdyIg&%7)-#u1%Px9laUd-+us)gPH,uF');
define('NONCE_KEY',        '/,^|<JioJ;H&}}|4g@+#>#H+W/k*=L0QDsBOEo>s`4NOYrZF{4?B2/Oojj{^=.!s');
define('AUTH_SALT',        'pt:Kc|BioM$+H,qtPpnNTw_:v;7|vZ$n_`46m-r^PE)$xg~:)XpsFCoI?.| t^e(');
define('SECURE_AUTH_SALT', '1oDb[UNFK7.^Y<}!wBx|O4O?v+J!|pIOf5UU$Ws$xYB*rc?vS+@^3~@?f!~q;8=6');
define('LOGGED_IN_SALT',   'fZGV/-X7+dUD):AeAeTK$O$|~&?:-xO*(K51nYfbH2C:pHO.z|S5`(QbDjKnrGZS');
define('NONCE_SALT',       ')/jv-hY/fBuJwmD`&;}ma5ENc+D E6x};dbao>^]FJ(gz0+vEBL@cck&6WAZWAxx');

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
