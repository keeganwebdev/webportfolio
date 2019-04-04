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
define('DB_NAME', 'wp2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'K3)V_)epyt1H<TN=7YnM2lHy]OzXkPBGHF(TU6yDnYLDCNd<,Sc`7=Nn[F@V,Psz');
define('SECURE_AUTH_KEY',  '/IL^P-Z=: s>-JT#E8b^-</IHd6Y3=Ik_N.4jhwBa[)0a+:9?kW}W%hn|2*e%d8L');
define('LOGGED_IN_KEY',    'i~gj%*RPsmTRgB`QX`[wkD@S,%#<Uff+|n|!Ol(dC[P9h:4,}fm]#;gD@*PEYsqm');
define('NONCE_KEY',        '%=IJ0Ke1)#0/7?R]Pu$)5Ktvy}G*iyemBbC2D9H$lECH+7$FgEoi9i2qMpo,Ykzg');
define('AUTH_SALT',        '7 64c`HvJ;B#+iwGFviC#6ZrDL$TQP[8Bn- ,yqEOgdw^[1qy6FQgk3;91p^+UaW');
define('SECURE_AUTH_SALT', ' A%Z%g322]?j-NT^E+h[=Grk$,v84i~Uwdn8d9#m*|7)7cZZq;.6ZVIZ|i<4d~,:');
define('LOGGED_IN_SALT',   'Yl`TW!S3Pp;c<U8ES=:u<~o~W)({R3`cQ)BVjJ61qQqD!PrB_><QIod]75$:;V-,');
define('NONCE_SALT',       'MJE{s>-cL+y+@2-7@$^G9jQ}A.O0q3CU<}~Qm0|/CSJt.{uk|0:,<iuW>0uJ7 Wr');

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
