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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ')gLKxa:rQbXMU?AWY:R?{C+IC:Kts~S~>T<]Lq*B8/i.@pTB$&H6VL.`+J/2c Gw' );
define( 'SECURE_AUTH_KEY',  '99+L5BjUjG8[mHuiS..}~/0m!MuFk^N~ShJ*h61`wl`Lbo^+RB{Ui`vlYYz8kB6/' );
define( 'LOGGED_IN_KEY',    'J[)fQlE7Y9:jM!s4pBuckvs/cbes<>tZ7K!p@|~{eKm}P/yh&D<IGvS(^u3V}2gd' );
define( 'NONCE_KEY',        'l]igFCqlsF]%YnqGeP,hGiH@J2g%N=Wj~!k]4Y$~jH&O.qm`r/T|Q+[ 7gY}gqzA' );
define( 'AUTH_SALT',        '5mKL*?lADJ`TMY~x7TcC @xz_B?K!7[,S>-.l.-4eQ*+e,NwC_qATlJygE0^W;5@' );
define( 'SECURE_AUTH_SALT', '^gk:5@K86^|6#qYs=RN.-!magD1)d>DDZ@OHWaoJf TpDn%:h=%-d|B[]kP+8ISl' );
define( 'LOGGED_IN_SALT',   'J5/R!Z!h*HK`0_jcR%8:%E9]wuW$C*&*ZgqBg?h|sd+,$%QPMI9=5~C3jVF6.}8Q' );
define( 'NONCE_SALT',       'e+:V.<KC[zMSP&[`Aqz-4]Y1rnq2d.;i-ViOw#3COra*?p#je8y-4a#fyD{+pjjh' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
