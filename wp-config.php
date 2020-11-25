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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=Nj^26h:0.BgaR(K`E@;c_#J1EI!F#@##z_E{JbsL3|6e`1(<W]z>C)XPQg(<{z8' );
define( 'SECURE_AUTH_KEY',  'nJ}EAWc{:Ph:]+0i9ld@*V[f{H4ZuO/n4jtoG]B*rP0M-|>T7J,Vht!H]+c6e_8u' );
define( 'LOGGED_IN_KEY',    ' P,pYuB/$8b?,!N},l)SM4<#p*J,w?g4}nb4-0QOTgk.:L`nzpix?.R_}PGQ0P,4' );
define( 'NONCE_KEY',        'p80<)+`zOpVI`pD`cJ<1~kyLUL[g[B&h:@--n>uW9`c{}sTrRjtI?ywZ%#R_u$A ' );
define( 'AUTH_SALT',        'nt17J3bF;k87$C{eWK1JVi;Iw+C~X@@-~66#AV?f.Tyo-GkuQjV/b$p(@0 Zoo1C' );
define( 'SECURE_AUTH_SALT', 'M?94j3UsRSE]>nNgE0a+VE[DR~3rse4W]*g#O=z3xj*~5UKLF_+iz{4$j4FZYLdv' );
define( 'LOGGED_IN_SALT',   'C2D# }[H%Lsb-?[MvSvh:2dl_4f(QY}`J!?Rg^|+eeR%`S}.Pz;1kg@Z+NN&)&^[' );
define( 'NONCE_SALT',       '{*/O; 3=aB&HC$pxqx4BCWk]PiQ`22;vidmJDOu.}&yB`W1A*Z2L&ERSjY5:zqL9' );

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
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

?>
