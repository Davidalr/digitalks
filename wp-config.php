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
define('DB_NAME', 'digital');

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
define('AUTH_KEY',         'tR<<+Zzz7Jv6HlIm>BIa/|r$Ei7285+mUm=1d3o`l&Z&<R14R)sBPs=4:seTn$RZ');
define('SECURE_AUTH_KEY',  '!<k+gfk]|LebOjZ]M*2:.,ZQ}>aam7]f^ZjRK}+zLbawjV-N+IE4tE68]Zun6y5$');
define('LOGGED_IN_KEY',    'kf+m}FdFMhR*=[nzBMDA8b5Hf=@iK3?o_)J9z.h?gztX5:4=w1BX|LpbvTDCh|HS');
define('NONCE_KEY',        'j(xY1X,hb=fi+tJsF@FL#q#U#|-B`.C0_@IcTJbv]pE,$|}@Faj<3{F1[x,_;/&i');
define('AUTH_SALT',        '&|J?}_NXRW*io_49UBnM cNmJ?5}kV?Ik>-t5%$DplTphZ-Th0L_$6e!#Vq;!f[}');
define('SECURE_AUTH_SALT', '1*W.4,/MNg#aGi;+TW-F-{1%il4v*F+7*b({nLkFk:QI^gNAxU}ctC1yH6&TG+~)');
define('LOGGED_IN_SALT',   '!vK5w9~v|2w-M1dyHO1U*D-s33GrOB{??gtzmx,r!~Uk5|MR59?tIv`~a0ae8Lwb');
define('NONCE_SALT',       '-~=T/]|56C  QB6hy{.#C/#KV_nU<5Q4.#vs=mrC>($IOIw[DB$W>D)Yh>g3Q#|D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'Digitalks';

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
define( 'FS_METHOD', 'direct' );

