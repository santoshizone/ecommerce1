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
define( 'DB_NAME', 'ecommerce1_db' );

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
define( 'AUTH_KEY',         '`JBbVk{#ZtCT9+L;$yU{tIb*wv#`?n2%rV?,*X)P:AS$WdE ,=>?ZfSY^r~l>+79' );
define( 'SECURE_AUTH_KEY',  '6fhS=5!:)C!wQ!3BvglTqa3$:5,T=o5~|d@9gQ2+0xD3#e#@k}@rc&Tf)%[Rcmpg' );
define( 'LOGGED_IN_KEY',    ',kQ<E;TG,&bk9dKQ=:U)|bz6MOq7huZ(_/<e-:y!;T5y062 ?^gP(0-X5TR`r36l' );
define( 'NONCE_KEY',        '}D|j}*:j33t6BseoN:kDt$9+M;jGO%uhcXxZ.iv9 5VQ&2mxXd#HUh{lyRN)wb/g' );
define( 'AUTH_SALT',        'eyL;X1sCfxWmwj*.C$]oa@-_T8dzN#WE t>c>CKOph[k9d<)^%{1H|n_R TnlavE' );
define( 'SECURE_AUTH_SALT', '*~T7QS:fk!u7.HHdW%BA-VDNE+{34|!hwNLp}W+w}DfP{hoEvNm/$e0r!_JMPqER' );
define( 'LOGGED_IN_SALT',   'A]yPGws/CKK.h{;*bgR?,l)xY[+oahiW<jN.HB$jEf;d8p{rQ@n ppD<3tq,Zfb7' );
define( 'NONCE_SALT',       'ViWfjqBibsM~~gfwmZPl@|Y.B`W<H:g8PoC=![7c^dZo{u~~%sUjwrEIz@c#oL.f' );

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
