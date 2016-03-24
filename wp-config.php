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
define('DB_NAME', 'abrams');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'UQ(v+,:UQ.qCR3}h~2Nw>Yi;CZqK.cihi5 ^@|x]Z1/29.v:>[=K8nLZB,D-uFuu');
define('SECURE_AUTH_KEY',  'H$sauQ7+_C0B6;!eT4fj(f;m|>IH-:i?;q&d)J(-udu{x5gtaO>??<MQbf<]3T<I');
define('LOGGED_IN_KEY',    'i7.mQeKo7~0;+{g~ieX%:jo<ues2VnQg:6PvY%~tY#1E!-W?-v@(]Rb}6s=4cPFc');
define('NONCE_KEY',        'QvtY& =$aB?Xq2=/N=KQka/!D!!:C`wfZZ#QL=-h$iJemw*--#gbpOsvWu@ZS/g]');
define('AUTH_SALT',        '`Qp|%SW6iehfYE6HzfnRf)C0L-3fouGl<+{zE+D[Cliby=UO.yB5Io9S1vFv,N3D');
define('SECURE_AUTH_SALT', 'X+ef+s}qyU`_usHAHsjXb5Ek4Ko+D=X&*SA[R72JEzV|cn<Px0WLQk_7(X:R{,X-');
define('LOGGED_IN_SALT',   'nY|VG6]j~VQ24Cyudv*<@F5<a,77|m^`:T-*e64s+q|{!r$)k7Hp~}-f L9YLk!d');
define('NONCE_SALT',       'xmKnh$6<KMlNY1rf,YLw.NjC[+,Sv>o(: dww1]tqx7?pIZ<0w@]NTD4pal,Igz)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
