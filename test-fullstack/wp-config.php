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
define( 'DB_NAME', 'test-fullstack' );

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
define( 'AUTH_KEY',         'z{:Bce :q1m{~((w|NKArR gOyP[#r$pSou_#pK+ E*m|f>DldrEll`?<bXW7hr%' );
define( 'SECURE_AUTH_KEY',  '(s]w-oPhKieA-UB49p;o@259(br0@9q]>wQl+I^:.a(33E<^suK^Bf3SQy^M*M #' );
define( 'LOGGED_IN_KEY',    ']}KC]O8rBz2qgvax>;t<}9Gro|GQhpLDwKU.|oKWv u!x<1bv+B2>+x4&j+_v9VW' );
define( 'NONCE_KEY',        ';QHKU9H78Z`oo%9_MRk,el0 K hv0kw%]18x!}b:5=ps^HEdW4d+CXCm$k^` btE' );
define( 'AUTH_SALT',        ')|iGwpH+#FPqoEz>A]1FAT5#.OT&aRmSZ)iRcUgO:[zL+X>.PgAif[HKj%g#wfk6' );
define( 'SECURE_AUTH_SALT', 'Q{iN?&vu`0|K?Q97k=MKu>paoq<M6:5CR7F.x17kKKn{Q1FrYq,.<zp3_:ZXWAJy' );
define( 'LOGGED_IN_SALT',   'K62smyEL`Xz-/<Kr^9aeGvLQ{*j)I1KZ4>s$3+1:*Unv-=^?Yj<IbOtAYdD3#Jm(' );
define( 'NONCE_SALT',       'S LXe*(U~{Q 5zVy5|zRBBC:](hy13f[Tw{SD@CtL&3keEK}*]>KB2Ue?IdWQxje' );

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
