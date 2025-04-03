<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Boutique' );

/** Database username */
define( 'DB_USER', 'Admin_boutique' );

/** Database password */
define( 'DB_PASSWORD', 'adminboutique' );

/** Database hostname */
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
define( 'AUTH_KEY',         '{W;S>pPVnlC]~JOoKL-!Nl*~5N4:2H>bCZF&N0&#41%3:%l50WlhsskY(pMLL!rl' );
define( 'SECURE_AUTH_KEY',  '4pOc,P Y/3t?x15)(Lb*)${9gr(@%_wOc=4rs4( :d4G4mRv=7Nrsu=*o%8UNYE?' );
define( 'LOGGED_IN_KEY',    'l:WFL+.?K/P3Ca&K@d~UmnOA#,E~BqciI.:m`:r%+|/;u/4L)dC4&pF,O<|-{.Dw' );
define( 'NONCE_KEY',        'o{A~&$n?Prt?wec #UM]8P!LG|EljY?6&-TsfU.Z> W{d&CUR=eR4?5E7F F{+^Y' );
define( 'AUTH_SALT',        '81vGk?|3SO,T/k3@^.mL9oRK2PlV9sC~Y3Yw8KLVviUBv,K/W^R5,HF:[%Q[j/=)' );
define( 'SECURE_AUTH_SALT', 'd%[,3Zu-Ax[hmdf!*=r!c?{aR $bV!Z_<Rh2C@eaHsdgrgd>~PFJ_1^sb$y+Pxq0' );
define( 'LOGGED_IN_SALT',   '6w9!zJ8((Qz7%-jMEYD2=q$IxKIx%Ymx$CD70NV|Y1GA@r;PF,N9p9T!XB,0T$E3' );
define( 'NONCE_SALT',       'm=gE 9yF{dKKa~FpQ}yIacusnpt|C/G.hqb[!iPt6VD%IJsM;RD%+XW(-ys,ZF|>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'boutiquetechzone_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
