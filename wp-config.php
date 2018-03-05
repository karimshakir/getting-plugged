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
define('DB_NAME', 'newtek');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '121212aa');

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
define('AUTH_KEY',         '%ml=$,ohG_Ux?sg+nbt<2mUJ2b{X.%C<z!j=/k-q;bL3+I>kDmtEx@?&&qjT%?Jr');
define('SECURE_AUTH_KEY',  'hNZnJTzi|vz0:i*4V9D`_M$XJB<!sC?wx/#^IJAUIo!>:LH$e`xu2v*lc3/$uZ y');
define('LOGGED_IN_KEY',    'GWUr%Eyq;UAMC=O-pu&h4~|XDk(bZ/8hM{kN|k2(w`qj*^u-/+@)IxAa}hG<7dU;');
define('NONCE_KEY',        '=URi(tdhUVRUTj3tcxU5Y}&b{^1+LKSwt6poh>D=Pwc8E1vkwV:|h=qq2HG$gzx_');
define('AUTH_SALT',        'd}UjvBW+$O{-q[UBt@/?zhY^ahqUI29rYl~]cS]-,k9DNPV^ .*n|)cyD~zrhHWX');
define('SECURE_AUTH_SALT', 'ZuSVBnv)0vKJb0N-+(8NYcG`7[T-b.OWelM)`:Ja?QcL<DH1pklnj{h2!,)tVg|=');
define('LOGGED_IN_SALT',   'BP&<o]{{4 oKq+P|<T5Xo{fHLD]k[bcB1.yJ(A>x<w(F>k}XQa~rj($1H6L)}r!T');
define('NONCE_SALT',       '@EBfnGm@J$#AQ{q.&EIm@9|ERIpQd$R$7qsA7uC%(a%g*%2~BNF%k3rMl>jF@;YJ');

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
