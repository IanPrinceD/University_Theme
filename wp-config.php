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
define( 'DB_NAME', 'fictional_university' );

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
define( 'AUTH_KEY',         '{[l3P>L<zUD~yX[E[F1]sP^~BE :0U7U*eoyo@~wy{mR2fCq[g|KyH1V/SiH:tDt' );
define( 'SECURE_AUTH_KEY',  'L&AW/Kotl%/Rw;5 4UrV[wqSqCYk0?)u-t?hwo194 (Q9EF,,$eg}BFbi?->7w9v' );
define( 'LOGGED_IN_KEY',    '@3(+NT{#}uD]%lG.:M_$rs9&[K$#N%!oMgb%OX3tcSc4w`@J)*0vsfY^}_wJmjyB' );
define( 'NONCE_KEY',        'LLhC=:[DK{nJ%rIh]}p1QMHelzzHBwkrP1t4/|b/ddjb!0F>yx(!w_vvg;2 JD|4' );
define( 'AUTH_SALT',        'In%[Js}TRsPtW?x>|R5oUN9Tk8eH;yA:A-VtvO=={Ej]!]P }OwV-guKt%tU#s+9' );
define( 'SECURE_AUTH_SALT', '}i!/?{*e(69Lae@bmlNQ;+%IX42T<3uIzuL!z]8u0=DO(E./GD>~1yyBY:C[/2=;' );
define( 'LOGGED_IN_SALT',   'T?tKF;%D!{~9o+_nVqroJkb^>Ptv;2x*L],a!c#ib{W @?MFSk2QoHdTYCS_-KxT' );
define( 'NONCE_SALT',       '3{Kg#b+51p>+M8qa*eW:|P*[ob+:[vF0bx?#%x=k&3)@~;cCCv+qT~p8Q5jA%7s[' );

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
