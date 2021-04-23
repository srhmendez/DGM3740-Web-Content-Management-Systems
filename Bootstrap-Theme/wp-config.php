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

//DISABLE AUTOSAVING PAGES
define(‘AUTOSAVE_INTERVAL’, 86400);


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saragdla_WordPressTemplateDB' );

/** MySQL database username */
define( 'DB_USER', 'saragdla_WordpressTemplateUSR' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CsjvF9HCn9MR@XG' );

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
define( 'AUTH_KEY',         ',/%j/+7Fht,ipNLX-&z7Iq3k33HwR{M]j/P@4Y,Xr|g,V4?=Y5iXj<+{HRS#CPxI' );
define( 'SECURE_AUTH_KEY',  '/Ribi_iwH .:q:oFqgDSE( yvZycOhWz$4;xn<Pynl0>)KGk5/0aGnB<{.dRfu?)' );
define( 'LOGGED_IN_KEY',    '1|9UIjU.n7TM ARY~Zd&Y:``/UG_[l58RPbeT8:uRg-X3bfnE/lF]b,MJASs-vMc' );
define( 'NONCE_KEY',        '!dv6Ysg0eBWT#}&jITyzf;CQO.9&@FBRTJ}e{9{tbS},d0620v[d7|uct:>XjzcL' );
define( 'AUTH_SALT',        'rqN3IfHAWa3$VSVKqV+J2AnAhP7W[jQ<abu_@Qu;+gDk(f>;`y-%],`|l@RA9CDo' );
define( 'SECURE_AUTH_SALT', 'nOwrjr0!kJk??2urlS=H5;uC>K< 9)o/j(&L@nYcW aZL8AP`@A1/:0MEt$TOe6Z' );
define( 'LOGGED_IN_SALT',   '.b2hRNX VTo!t+_bxtnhbMM:/^oN0cCX:3WR1eQ|lp@SN@`3H+WlK<*i]=TaZ6p8' );
define( 'NONCE_SALT',       'Z,!AyL7}QwnPgVW(Op-zBi ;*_Xm9$SfM`|?$o:9#v>oT8^ESV!nv!O8by.JiW.|' );

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
