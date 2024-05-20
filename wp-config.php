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
define( 'DB_NAME', 'oc_p11_nmota' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_MEMORY_LIMIT', '256M');


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
define( 'AUTH_KEY',         '/?LTW.[4`S^Rb*s{ZopP2db5+x_RdZa{E.}-nIrpxE)iD3<0_ttP0(udRY3#VHdS' );
define( 'SECURE_AUTH_KEY',  ')-No`=Sx]iF2a$iB23iRw(_=]U4SaV>!,=]s4|/B~,Ppf..qIY,l4DdS%,oJf@tu' );
define( 'LOGGED_IN_KEY',    '9reuBf*r.Rx(8{%C6%om}*3y9$?CSC5dw:;Wyq3mzIr@]PQ61>N*|j5Q*2<E`.:7' );
define( 'NONCE_KEY',        'wNU/xLCcZsP5lO:MNSM1mr?bYtsclk_P]@47G<i|JA]B+V_/B7WMo}):u77@Ea(P' );
define( 'AUTH_SALT',        ')j*b9,aD9@+b }+C{i`T%qN4+^+nIQI>wK _m`N>xH8,d@$_%TIzP%evw%J}UUdx' );
define( 'SECURE_AUTH_SALT', '5SAky&X_b~mg)W#G4V5#@R+7!jKbH]VUG=m:37qjWJ5QnL==lEb-f^V4+X@tD_l?' );
define( 'LOGGED_IN_SALT',   '*}/5$WqKhg_,G1?lCm_njJ]qNv1-JL&46kZ:4ua10@ZVA 9T++mF*{~T~HY~}@>4' );
define( 'NONCE_SALT',       '.gss>E)*aBiset}y)vY1bY bcdD>DzIo=mFe El,A]l59$9U=m<_I:d^|5@v+q,|' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
