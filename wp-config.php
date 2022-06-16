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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '>qV_%^N.QJlw++z-+;u)S!}u{a^NJ8yXhN!XgWB)ryv@a{|%GLq.tes>2ZHSy&!Y');
define('SECURE_AUTH_KEY',  '=tPWP{*9,2NZw3m/kVD)G$/#tsGv75x{c{Z0D[GF0jn5O$QeyzYOlwSKwf35zZ1*');
define('LOGGED_IN_KEY',    'UT ~k6j0t;^Ti+TPTTv)4qC8AX:+@Mx_J5QX#~59.Ufw3{w<2!5#]pXNrHeCC;MO');
define('NONCE_KEY',        'eG1gy+W2ArLv<R<NUDaA9=W|%$364mAu*MS- dc*%i+jj-72F/aJM)Fq|i/y9<g`');
define('AUTH_SALT',        '-V`#M2^d)nNNQm4iixQu&eK[5(4mh+i^=k8%(7|Lv>uQOKJG7a:$Y&F?J8z^q.tK');
define('SECURE_AUTH_SALT', '5D~SB8{m.+ee#SxSXg{L0ln1v);8)j4v nX>QPJowQ7;XjR$Mg~8/324s|WH`6pn');
define('LOGGED_IN_SALT',   'OL;moF$7(4kjV;QhI)&#2aX8r.B}p[B=8KBt0_!EQ6DMl5>x<5r!O^;w`}21!Ds/');
define('NONCE_SALT',       'TG[%fb`3`Lg}ghE8cf-OPLH@wdM)tD*lldu2<AS(`a`6_QPl&ZeU,>.mh/.(xbM(');

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
