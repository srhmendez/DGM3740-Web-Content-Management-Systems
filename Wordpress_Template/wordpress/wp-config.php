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
define( 'AUTH_KEY',         'P@P%#YCWKR() mxs.791|@.5bpM49UFQe/;%>r6RYMn<Ozvcpq|*m)49@cA0Eszi' );
define( 'SECURE_AUTH_KEY',  'ie-jM<P2U`G.9(Yl+:4=^U+!1rnsmDI7(jp}n*52n)xf*w1i^n@}BC!= f`8BP=.' );
define( 'LOGGED_IN_KEY',    '& [3KT6FcR-h/6}RCe*B@wf*@0(OjH8 K)C)$(zJ*v6$1)HSQL?eGRd|K9t3By9i' );
define( 'NONCE_KEY',        'Z=l6yn^]![:~JUQ;.*n0!(,HV*LVT,5yny4oWtqXHk([Th.z:D3gZ%q%4a/ 5_4D' );
define( 'AUTH_SALT',        '3Ly]l;P Nc@XI23*^qk~{[Pmizoxc~U:+#iNR:cKaw,vdxD;uMkMS,e_T6Qd0`a{' );
define( 'SECURE_AUTH_SALT', 'uvv;GM-6E/#cnFJ:pJyz<])P6o@`:IF|yQwkl:fLxl:_LEAH1Y*Y@IfvTwQ2tJJu' );
define( 'LOGGED_IN_SALT',   '?TULBqZj]MN8F151YWosdS34are{%FeMs:zHE(z/eqC9>y!&*2+B~)})jK&dhHTs' );
define( 'NONCE_SALT',       'Mb.x5s0fd3OL$Hcp@5<;^`}9+b!/p#6}8hI{wlwyR0U)NqqPVL>y]f~c7/_m>l11' );

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
