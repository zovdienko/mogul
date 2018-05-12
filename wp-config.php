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
define('DB_NAME', 'mogul');

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
define('AUTH_KEY',         'nn/,V(v|syjGR67@Y5mW~_C(.R#L9UDxTT/.emnTtl;Zij$eYZJ-X59&+Ra&L8n=');
define('SECURE_AUTH_KEY',  '#lL0Eilazg>1=NTSQK#Ce[2RY9<{s%JoIk<!n)_b*O4L|SWUDWP(`LBSPspUnL6D');
define('LOGGED_IN_KEY',    'Ksn*<-xK-qaq2R]&C*#JErhG-tdODH%%rBq)CIrqf@vVLk~>@?hwWWb(j++C@^l(');
define('NONCE_KEY',        'b1Is>D]{Wj`~+OZ5ev=i%NFGq&lOdk)EWYikd0hy/u3kVS&Qp19&EBJd>9%V6LWI');
define('AUTH_SALT',        '_|3:~$$Qjs=~LTV,b%_<SV9&0lIM+oFQ}qd*[0a.rKx9J3f^bj;K24_XWi_-Ar9=');
define('SECURE_AUTH_SALT', 'dg*AZI8KM/L5N]rhD!e73NwzH1:OW^B3gRg#@Zjx8w`F@}P2amF^2y@a+_sLmC3m');
define('LOGGED_IN_SALT',   ')$w~|xj(Q3:(4Jei4%W`76}%mi3m!$:&lj~<<tsqOF+/|:bmee(4 Qmx>xo`[V #');
define('NONCE_SALT',       'br(|F<bJ4-^!S<!q+qsufFS$^fYNHt.ct.6Nrnc_Y^:pvFV^.*e7o.^!j|{?L$Te');

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
