<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u282877501_NDIVS' );

/** Database username */
define( 'DB_USER', 'u282877501_TmBAN' );

/** Database password */
define( 'DB_PASSWORD', 'C6CC86tZrj' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '-YZ.-Av#L!~8RNaf8Yn&_oM> O)|I({ZMT]!4vd}L`HjsRQZOy3cM+Xd:nfagLRb' );
define( 'SECURE_AUTH_KEY',   't|<A% E%N4y1$qo%WYoX(V,1ROVKkhODgg{UG:+5w~eFl!+$vSO4Dk!u%B]PV!hx' );
define( 'LOGGED_IN_KEY',     'u.{2[:5Fk.N9L7--Tvi>n<N*R,+9o/%`+BSYORi<A~Z$gpt<ao7L{/Y~!n|Z*$-!' );
define( 'NONCE_KEY',         '!(%r5??1oYX 05+xf3 Ix(T9{zp`d(#q,4Ear*<k$5O2|`fpz8wbo I!()8<wioa' );
define( 'AUTH_SALT',         '9VyA}.)>T^RHRNoz koC}|pu=C.]6XC kM1 {$.2>%D!~|AC=6y07Z7KcD /6t#&' );
define( 'SECURE_AUTH_SALT',  'U1CorL9~}$Vc)&ggWz=,|>D,+CyBeg:ss**pO )n9QQ1i/Sn{qL`t(_lXNxN_w9-' );
define( 'LOGGED_IN_SALT',    'r@u_`f(ple_,bgjo5?pS2wf^e3e`=v@~8d/vJ&hwri]fp@,Q^!(vVl&&)YJ}Ii%q' );
define( 'NONCE_SALT',        'oEQ<lTZnTDf=I3Dh-K|6TMUAy(91w3C*&.X*jn.;kZ<|ShG;}I{g!0xRlEa0x,7+' );
define( 'WP_CACHE_KEY_SALT', '9itpcI(LEqS[s$&/W8C)JS/=uD.VLCmp;odmap2zOJk, f<h-*Q?0ucT<W)[&$We' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
