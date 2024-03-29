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

define('WP_CACHE', true); //Added by WP-Cache Manager
if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}

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
define('AUTH_KEY',         '#={Q(Yz7A{jt;U[Dhju<;2sFQ/b|,PFLa_J=&FO51huvi;|o=.^|mIe>`R>(*A |');
define('SECURE_AUTH_KEY',  'ddwGH~VO2Wo-[8Knt.2%u]bdWMhh]o-Z]&L@_K|K*Q6nxCX5mtI)jMDR/0<s;Y@d');
define('LOGGED_IN_KEY',    'I=BOXht.OK;btFz=F@faD:YCf6vpQXIx> [Q -bB]2mwbok&<p,C4/9HY(5%3p1L');
define('NONCE_KEY',        '-~3;9~YO QpY/T7[.,{uB;:_Tnz:@P@[VaDBUv@u7U!$]j>~v7ncY`~qmo-;pDcI');
define('AUTH_SALT',        ',Jxe:^`7V*UcKYx~ e:h69hScL[ofv,82K/46-]`{$Vo=S.<]YN<]Ga|c/ma]}x<');
define('SECURE_AUTH_SALT', 'IUR-p-fdwirbJ]z*SwG$Sp1S TXvjLHL^zvy~gsbKV2Oo=i;M`|E:UVa|HWM6j4,');
define('LOGGED_IN_SALT',   'l-H7-V*H97#eE%?<mJrAt/v3g6k`fOydCgR1Urv*,@HfsL;0B$Z+`v;t0.j4|d3_');
define('NONCE_SALT',       'o/RBjrlc^%/|s!J9&!o8U3^Zgy?p6+HB7TH&^Y_6Txi|*vs<+R(]nVn__pvOv-$M');
/**#@-*/

/**
 * Dynamic site name, so we can use the same config in dev and production.
 */
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

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
