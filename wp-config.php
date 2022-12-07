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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learn_wordpress' );

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
define( 'AUTH_KEY',         'D0@{W,L2iosMQvPeU=$b3<=L!8Tx]=@X9eWI0GX@.`>4[d5L[yDfFIOv6B_sLe0f' );
define( 'SECURE_AUTH_KEY',  'W<8Ew3`&bca)}A>PMr<[WzNt/T!dM86<Tr`zF}U;9MBMdz-U|!?J?i2,1}Bv4.P5' );
define( 'LOGGED_IN_KEY',    '}vE|V/=A9f8z,*Q*]#9zH=V%=}zfG#T`Rj#:51t4c^l,NCCQEtWD)}M-pzghc<{Q' );
define( 'NONCE_KEY',        'jd/VP]EeUrs`HM}>(Rho[)2?xo,M)P:z m9[<.z[%$?]av24ML::V()BnMf,;]Ep' );
define( 'AUTH_SALT',        '-*L0ua<R4~7 aW[(9e~R.KTG6S$=@HR9_c{921Gh|c9dO%F92fPFWYd:U2McM!Ka' );
define( 'SECURE_AUTH_SALT', 'C56v_uuXv0MXjR_GL|>GRXt,_t tgsSoZ2,)kzz/RU1BK==SOF/=v_Glxe]s9 Hs' );
define( 'LOGGED_IN_SALT',   'IH9n^v57at>Q+]hs4s9,ST[uy<{R5 *G4/0<-l;6ewrXv*3})nB| ]&KTnea 3xP' );
define( 'NONCE_SALT',       'qg3e|/IF+ly:;+EwG~YMW$%--S_&+~hD9t?x*Rn06_DK@/p}cO#]I9V0Dkp`3]9 ' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
