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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'NocniKlub' );

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
define( 'AUTH_KEY',         'G9(k}f|Mt^gIxHjQ=H+Z$eE>M>M,7qp>6p5lm])JaIITefY>3M~8cdW|%|RhO}8}' );
define( 'SECURE_AUTH_KEY',  '1fHvm5TO:t?O-7,o*br0:hWL;qpLnoS1K;M2}ugv_#aZS|XA1HNRaG|<VWk84r,x' );
define( 'LOGGED_IN_KEY',    'lfgW|fuI5U4Qt)V4=96yogY,gX?kJV?iDY+ RLh@/MRiIP&udkAj8g|AqCZ_1<*8' );
define( 'NONCE_KEY',        'p5m]5+yQltk&C$SxAIlz;ad)omGwB5)Kjs#8^XI,T:aGYvj]zA7VdiB>UoLpI]%v' );
define( 'AUTH_SALT',        '@Czd;ma)u8l5*psd]u-V0E^:t=G:=_Kop5jLIFqgD`,DmS:HM6y9e7Os#2R8b@p<' );
define( 'SECURE_AUTH_SALT', 'Is5D*A>}p)M._vo-{qAc]S]LtwaGj3t8ZhfGD10!+a>+rSMI`A&Qi{Z12F*[pt+-' );
define( 'LOGGED_IN_SALT',   '?uTAd7MP1w!Oco4AC6/,NX5=dT;@=7T}D<+^^S0Jk9N)Eb$NDdmCRO(@2]@x)W?d' );
define( 'NONCE_SALT',       'BI|Sf1#03Jt0KrE,Xp-5Pw7+]9uw%cb]sL!~=y}K]Q9h4Lh<oix~$*:C,lg6>mlm' );

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
