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
define( 'DB_NAME', 'Demo' );

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
define( 'AUTH_KEY',         'E>p}kS9#MBAyswBV&]lIm{pau&Wb9ItICF.!1TA5KesTg1ke%B4[1 *]E0WjWsqJ' );
define( 'SECURE_AUTH_KEY',  'bdl`*3<))iu%j[*)rMa(`gJ~`H?Q>#=__8U,jA5j|1MbGa*9/LIj9&GpO8n{|W(O' );
define( 'LOGGED_IN_KEY',    'H^0p#[V`?Q?s()}1~Xjm2L(0ab|]E lAFlJG}>q-qwW5zE!^mI;Dqn;mAPa)kG$<' );
define( 'NONCE_KEY',        'aR;:&2]i1<tun076!NV)G78AZWz)K11Jfd&o_?BXsEMcp1zAK99LaV00pZEw?)!9' );
define( 'AUTH_SALT',        'oZ@lMsYlP?{&vLkGUiQUc+_B-QncWr=>t*bWVC7OT5y;OM.kHU%kF3#N148j2y}-' );
define( 'SECURE_AUTH_SALT', 'R0=s%W,_L7$i+NY[6Q_GO]YQf5)U_Mz$Z}xJ62Yd$]}][~<V{x,w7 bhW/=46[@V' );
define( 'LOGGED_IN_SALT',   'f@@#Pw+PH/:[X}JQdoLHV0`7;}qqhL;t5~5^7E=[1Mz.n61E46q4Mq|+LtXMncps' );
define( 'NONCE_SALT',       'YA*,C^T|^zqbvCTHc1Hxd.Dgt.eq-a&g2Qp3B>%948RUo1ZA#B ^]$i}0XT;H,;G' );

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
