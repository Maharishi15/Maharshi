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
define( 'DB_NAME', 'maharshi_db' );

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
define( 'AUTH_KEY',         'ZZS#^cs8C_s2A5Vub>km9uVa@oDh#XebIP||d9LNo|24uR}5nNJg]OYeI5p8OH/F' );
define( 'SECURE_AUTH_KEY',  'dl$|YEBtwJxTN:=5JkODOwAT>o7`(tme.:v=D6EtXszhb3Dr| M?Epu{NFd|KRt6' );
define( 'LOGGED_IN_KEY',    'iQP<lwBuWWeQ.>IB97;nxv;<Z_&/y<ZWu[c`BiZg5SSmAhD#W!ddco?bO0!3^`/#' );
define( 'NONCE_KEY',        'f+OR8G8w))!/PiCqDPQ2bE2cr*{V*WP*y)I!!>ub=f6zN @eA$I>F*rh+&4on]Hd' );
define( 'AUTH_SALT',        'W3X(4sn9H6>0^[<sG,S-A@N-se|m8Ej+ EHURP_o6HTP=J<+CVjyu]=wz},QJ|nY' );
define( 'SECURE_AUTH_SALT', '+&EjF/I~@r*f`pwH*zUUCp(d}Mv7:ul_@,PG6;&!%nV/=/z^d%z%aN8NMEy$43^B' );
define( 'LOGGED_IN_SALT',   'u+0$B3FPf y7W8180Llb}=pW7Y38$~j@D $u$p,va[U?f4B|Ot=;:#FtY(r{WvkQ' );
define( 'NONCE_SALT',       'TMWYArUq//;y ]IN,_?rgG;d%^^n<jz:E]~$OKkw9.(M)g&LH?R^#_9BGkm0]+[h' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );