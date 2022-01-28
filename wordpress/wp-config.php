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
define( 'DB_NAME', 'aprendiendo-wp' );

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
define( 'AUTH_KEY',         'NA.kH2[}[Ar%n|Ef.Sd~H`eCQfU0Z*SdYf>*OF<)|t+=s$KSS>BZp~bFe2o:prQ_' );
define( 'SECURE_AUTH_KEY',  '_#hm6eUR^u5-*Rms2<5nxy:vlvF+zY*^lNC]c46*.X3|qbu*I5M#Q;pH9?O<Vmmp' );
define( 'LOGGED_IN_KEY',    '4eAEN[qXY;ZQ:)Ml_00$pa.ZZXF?/UV9aY6lG&LoHKog5og6CLNLt)wi5Q%~y/#f' );
define( 'NONCE_KEY',        'ZhO$)w+dM1R=IvSKvfZ%GREEa6/}fLbaOV>}_Z]Fcx-B9IN*nv cO8ARJyLdd:@b' );
define( 'AUTH_SALT',        '!7m<e(U:sZswIW~y#U[F2Z;;vmI.Q|UFdk0]>7v-N3GQqLr5{6*BDI [qhs`tza>' );
define( 'SECURE_AUTH_SALT', 'V>bBpc|g`& RixRk6DAIKaX; 9J:&X&}Ir35SzdoQRb<P`Y:R-5ASb?%!KHGNY|+' );
define( 'LOGGED_IN_SALT',   'k`igBVp?B61/#QghxM2 f4UTa}qc/Yg`.2hQ]N$F~({U8vs$E^j?d5(.y+WV:spx' );
define( 'NONCE_SALT',       '9~gP[n~Xuhf~a$hxIS~h*.tFE|2k&{>wa ghBm/1lz,s5[dZeXU0;{axT6!9VL|/' );

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
