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
define( 'DB_NAME', 'reforest' );

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
define( 'AUTH_KEY',         '&nGO<v+Ru]2~)Z4H.>G&]Y_[+(){c!ma`frEmCk%Q7qU$1CBFP.q=V5yY]:aGPLQ' );
define( 'SECURE_AUTH_KEY',  'n6a*,jQUKn{@?5<.UTjhGDIg>_C$=D+RK3Wn]+m6=;hu@R7x%hlF)JW6AMfWc-w%' );
define( 'LOGGED_IN_KEY',    '=8lS:Mj~#mS`qtBjpZ>*8G!rF@pKS8f+:%zPIm;W9f5h&%c4U#7a?LJAShaSQE4T' );
define( 'NONCE_KEY',        'z#*WXDQ6`I@)LO PoGXy5/uw!%W]!::_C*(y@i ;4Lla[G/QY0Qk$EuPSFspj2+(' );
define( 'AUTH_SALT',        'S67l-mF7np.AkK(GtIJv5D2O~3]E/ %&3D<vS>/4>.h-:Pk>ym2~B)?G2X+`y3}M' );
define( 'SECURE_AUTH_SALT', '$r]$vQ{Kb)lwo-!q1V|(pXq&Z)P8(ZjmW9`4pVk`U:7VH9G7MAybzj%)gh#|)KQ[' );
define( 'LOGGED_IN_SALT',   '~o$+dipp:NT9M qM?6tfaO<`5A<(>xk*r4Cx&xiG@$>Dc9=5ScZR:.|eO-w(a]-C' );
define( 'NONCE_SALT',       'WVENHmnEi!PjyTcwpgy87^P!e!V1nhoAxs6,pG}D,PF_|fpn_.6h9JaNk*~Hn[w9' );

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
