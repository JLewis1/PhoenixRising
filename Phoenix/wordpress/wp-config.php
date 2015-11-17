<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'phoenix');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Eo(;Ui]-`4DbL{s2$:/j(XEe=GQmJWO>-NhQ1YVZkShEUm#RX^hVa|dfxUm{G=kn');
define('SECURE_AUTH_KEY',  '}FJ%-iW6a Fe~wEs$C<(dP]m8}7H1$j:IW#K<_G`xt+gp})_eGz_F6RFVOC XCGd');
define('LOGGED_IN_KEY',    'D>-s&IM4_LCP^9>X*I;Z5q?]B<N/2()&!I<?&%{VhU$@_z G@h*oLeyg$M>YM=vO');
define('NONCE_KEY',        'DkJ^#^eI=RI{|s&@iP5_6PX6Qw:XDI <ip,wE4zyKD#QMp9L]%>9n=FP{$c#/TYf');
define('AUTH_SALT',        '|krZ=gJk52)rPakGo,Y2=q!ROdD0q|6lRsgtS;V0SYqV0Pbp>(%9y>!0!tWU[Vn<');
define('SECURE_AUTH_SALT', '@9)-!{ d0 N^umKy&+Wo+cXMdBC2Uz]lx%*1I]2a9g[+.yt{Mju?E06Uh3?g7Xs2');
define('LOGGED_IN_SALT',   'g<QCLE(6>R9HCn!*3qVwkg+z_IYt{UF&gL1%kV?Og-WJHeZ^J*ZGA@~.IY$:]g,3');
define('NONCE_SALT',       'T0Mp|7yH{{d>QE&%lg~/lx`*Ot( 2NYbCNt#o5k(w*XrIDrzIZtfuCY-%hWz[S+>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
