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
define( 'DB_NAME', 'b2w' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9-{`OGQ~|L?o>VRx=Y9v{}4aeZTG6.2F*UKn;-{htg*H?E(2LW#kClbm<n|f!U`s');
define('SECURE_AUTH_KEY',  '|%sZ6c4K6)-N(JxZLq4mVcgl[*qM9*~BjYZbf@EID>0v/hp]I]hlowu8l=,PtF(P');
define('LOGGED_IN_KEY',    '6*S5m[_|^M3>/Ho)b)1 TG79K$N-cVMTID&ct>2wTcC.Q.26@zSe+LzDKBRL+5mC');
define('NONCE_KEY',        ')N{2X-uOz|_YKR!S6c]2k%2P27D#6gf |K >1Y.:][j5mCYd9qoM4oc$dD[-[J&g');
define('AUTH_SALT',        'OAFul@gDVMU0>j)-|ai:P13+Z=|m_eW+Mg`Vy+:`|p^|rh]+1Vi]YmV0m0[IX*@(');
define('SECURE_AUTH_SALT', 's_RO)2Xim/`@Zc4m`p%rzD`uc>&8.`3U5pEteZ(l%y]JeemO]6Rlq/Xw3@wgc4i(');
define('LOGGED_IN_SALT',   'a-#aJ9iPV}]!e5<-GbG-U-Xe++lu-5y Z>RFcj5j}6:H]$S&+I+#fQAz5UCkM[sf');
define('NONCE_SALT',       'jo+StJfSjhrcgTWjSQc8ZtxVnJ-hN0Q%$<r<,#LU3!c{O[ZiwtB|hE]S(tz{aC&+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
