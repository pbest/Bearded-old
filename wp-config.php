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
define('DB_NAME', 'bearded_buffalo_wp');

/** MySQL database username */
define('DB_USER', 'bearded');

/** MySQL database password */
define('DB_PASSWORD', 'fivewords');

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
define('AUTH_KEY',         'r>/9Ef]1kv?!VwVxMye-CRR^-1s{S{A0@/f=R0f]j+H$75!T)E@g+[}RiY8@;=*(');
define('SECURE_AUTH_KEY',  'veoQ?+5pr68I~.qg{{L,graWpg[=Fj8ZSS*vYv]#IVQy7HK_)`>D`u[UBDgkd-F^');
define('LOGGED_IN_KEY',    '|Y|81TG` DqFU+/RF7s{I|n<>7l^E4e()*c&S}p(<gq!Bek38=w.KGPVAurJwYg/');
define('NONCE_KEY',        'UQi^ s.rXpD;d1^ |;dtaH.hv4o>aLo^+]vb0ehugld.kux0?UTC!$oJnM!+F5)-');
define('AUTH_SALT',        'U]XCDT{o%~{DMY0_$R1(7#dJ|_t`%+J^-U*D-B>5}L~-$gp1b+qd&+tN0zIK/7!u');
define('SECURE_AUTH_SALT', ',|DS`Etsj)-}x,<U>`#O+k9G+6u, 1*?H|KFn2g=+E:J>AO!- &1b>Fx!)b.tx8+');
define('LOGGED_IN_SALT',   'UhR~ZzF9;l[.b}~Sq|V~[ 25]JMe ^|1@x|].*|iGkIP>1JMr1?noS|]DR,0j-H;');
define('NONCE_SALT',       '/h9^|qfndX?`KNWT_`_:r#O^+<L+W-%Q3}Ou0)L89287|9u[ PTBw&%AEA#tv07n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bb_';

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
