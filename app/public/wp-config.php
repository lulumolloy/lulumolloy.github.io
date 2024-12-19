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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'FK+F[_o>X6@bn4fye1^v2S9+k~Z?/g~CH%o(7;Se=/0w84xjLIq!L]P*;im%P474' );
define( 'SECURE_AUTH_KEY',   '7=g`X1Zjkrl6ZWLIp7[M!MJbn_qRq*PWb.CFj43$`~GXNemV!V?o`Bf7bhaW<.e6' );
define( 'LOGGED_IN_KEY',     'G!|=$.hFCL[>:,c?ed~b]*MdX9R 2#u!!s6B+=RZL1ov+c.$3/5Gx36OB90VVagW' );
define( 'NONCE_KEY',         'w|y[MeH&^FY@nA!1G=~:}N`#4yyOtg7nfNh|xvU_;$mY:eC]%aqO^pc&MT=Q&Tkb' );
define( 'AUTH_SALT',         '<0lmE:Mr|+Ms@|+sF-`x{,L/4vHr?(Xq5;NY4CwPb|!@82fD*S4wwuPK[+z/Xm5I' );
define( 'SECURE_AUTH_SALT',  'gMZ`P&Zvc8,+&6)kW`e;bl{:Qn!j6yXu[[lw{m@CasKRU4P]Oq6C_~I8MG@_(#0C' );
define( 'LOGGED_IN_SALT',    '[*v7G9rqHdi(L6(6vOqILTh=Zi:QI3c|VK+ZLD1kA*13^]>~h]bLl! MZ$ogz]X&' );
define( 'NONCE_SALT',        ':Bbn>s4+.r0e.t;^caSCqQ@J`yH]=pZm@D6] 7#bE/.%OrQ[Mf4.aI$o@%~(^|hJ' );
define( 'WP_CACHE_KEY_SALT', 'kQ7R(oXeLyP<IM8o^A>t6ac{OFAJ-uSGAPiQDhdKCIL+[Hh<70A}9>kun|l#BhPx' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
