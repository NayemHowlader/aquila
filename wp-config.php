<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wp1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$57p!}4&nK(`KF/<Jj&]W1cWH&zx(158Z5,9ru/mGBgVU5+Jz>9?L/4PZbK25/gt' );
define( 'SECURE_AUTH_KEY',  'VO_,hc-:DvNpy?3l[!w$(g;l.8Y:n_m2E6oY57!|2On`%%]K.?ARsa!H0WmWwd]C' );
define( 'LOGGED_IN_KEY',    'Nl 6m%N7M`X_:F+XmQ2Pv.<rh[js*uiO):8T`Ni134[n&M8=w%vVmp9?EvuEBh*:' );
define( 'NONCE_KEY',        'J43fg.I=(}PcIwCUWlw68F,)kdTu2H)3A$V~XEN7*/?v)!zeOi.QszGL1 *>v8V1' );
define( 'AUTH_SALT',        'hq<WMsG43d, !N{~oRc/3>QZq=%}lU`|L,6Woy/ezl.I)RNw]?_IJ|4//auh&i1*' );
define( 'SECURE_AUTH_SALT', 'W`?vf5<E Kj#;SX5Pj$Bj(Wkm !F}?zg4]Hwtds@D*mlkQ5Gs>s9`>~_];_Y?Cu_' );
define( 'LOGGED_IN_SALT',   'QfYW0l`S3q=UM6eez.G4u<K$mK4W})kS4~I})H;SgH%Oq@nS&Jp;.W@CZmMw)Pl}' );
define( 'NONCE_SALT',       ']2,VuI6T%aHWu/&j*!sLmIu_qJ1):*sE](kdGQ,7+Q8}F~h43ca0Z3vo}l`w,b@G' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
