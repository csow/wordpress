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
define( 'DB_NAME', 'id12722175_b2w' );

/** MySQL database username */
define( 'DB_USER', 'id12722175_root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '`LBB-KBwsa7$$&f@j_]XTLD/^^?At <[40W#kUi.b>cU6=uqk d2-&,:zXw=HUU!' );
define( 'SECURE_AUTH_KEY',  'cY;z8838>UH+7-$P[-bFTKw_P+;t~nPb8hz>U3RIN,& h7yte*!,5*iS{D~6*1e2' );
define( 'LOGGED_IN_KEY',    'POe9($Omf~<(!.{x~+CNvqR>O[IXoR8_YnE$t.l8?T %Q~.<R+nkRS`YjTR8f{J^' );
define( 'NONCE_KEY',        'oNZY~jYJ(]-p<Vt&J4]=bXx7weuIt&oa0PM#>>dWe&QT9dS?A+y_UOzQX9=eo<$s' );
define( 'AUTH_SALT',        'wJDSeaOs]qs~M$i~6mea},VV2;AjT_Z6RBfM>$o6<}X `-^T]aYYUN%BW6tfVDBN' );
define( 'SECURE_AUTH_SALT', 'a[t>_%yx94-!tJkW7XW{.y?L`nC8@~+)uu!.#V><msxD#dh.QL$G*`rX7SJ@!Pa-' );
define( 'LOGGED_IN_SALT',   'j>;_fz17NyD/]NE,=fL|]uB<~[++NyvddZB:$90HdP,de~1Ci`vo4:=j|Aga_(Q)' );
define( 'NONCE_SALT',       '?=vY!)U:mXP*!9:&7x2y6-6; _G<2=MT&4N?R9`6si>:+<`rA9 /l-]=dGmV_Kox' );

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
