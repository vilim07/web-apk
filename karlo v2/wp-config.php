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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'l7,}zjq;}!auiVyJ`!JQt.@!A 4zv 2OJ><pGC{]6V|+x{iHJ$L+Y WbSsUj;k<f' );
define( 'SECURE_AUTH_KEY',  '~KM0SuiV,-jw>WOHh|QekV):a+]UJ_?Du~of)_P{w0`vIsi!{W, ZF=2WG;ENP.e' );
define( 'LOGGED_IN_KEY',    'Atg?LDSPFafeGe=5bj.n7Hi{x5r6cn]0Wq~1rU44B) 74gU>Y?F2gcAzC5|/D:Xi' );
define( 'NONCE_KEY',        'LA.MX.//%TVN[8L5l.kiI/u6|hjdpqe>1D_J!-hA1Y|rVFRAa6jE@W~Sti)7[);L' );
define( 'AUTH_SALT',        'M$Wq{2bFVd!XoEbHCadZT;_S6pmo vxmZHiCX+XJ$4|M=ob:tV@WW?c7)cY*`>DZ' );
define( 'SECURE_AUTH_SALT', '#.8*%&JYJxQ>@F;<oR|N;p89!MG!?c&>^ 9*$o&|H]<[+(fn)(.az2@q,hJKe-n2' );
define( 'LOGGED_IN_SALT',   '8IX&qwDi(VcrZP+,:5}cnODybj13)+B1iu-JCC1jKqlZaD6NW<X3yG|L|c@7vwFg' );
define( 'NONCE_SALT',       'C>D&i4w(Nh*I@5;=8g;#E`0I?oFCSqK8}^>*[C[Vcu<-vt&P59D[`qZAA95%}-Om' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
