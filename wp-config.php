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
define( 'DB_NAME', 'vinsmake' );

/** Database username */
define( 'DB_USER', 'vinsmake' );

/** Database password */
define( 'DB_PASSWORD', '@Vinsmake4815162342' );

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
define( 'AUTH_KEY',         '+e@BnhE4=@)DGy<5@`.H_eLd vrlO,j,|Arhm2Xf*( uYsxnIL8p8RI!,F5tc*{1' );
define( 'SECURE_AUTH_KEY',  'HSQF_8j,#VP@;B(u/3?3E^.<5^(j4=>[Z^Vv01PCPPg!k4u!N@.s0Z`uO:It9;vd' );
define( 'LOGGED_IN_KEY',    'HbbyPMLq$UE-DLdbaol$;bI%D1x|8^@f`a7L4Ce%Jp#BI|}J<Vt~Y~,I,/VLup/>' );
define( 'NONCE_KEY',        '8|2cQAR=[FPZz-<pb*j0S+tXbqv!o>X_cp[1bNjy*IwVL? o[64A@mq}C79SZ)h_' );
define( 'AUTH_SALT',        'w?-5C@}K3<-$RM&=G$ko-sdx)r1pZ]IBSZUT/fcn,upJQobXs{O;|6*HJ%P/~VF,' );
define( 'SECURE_AUTH_SALT', 'Dl39mH]$ai~eYml~:*4?jhmk@3Li`nNu{bOrvk?qpLZC!ppVk-,)Xngzfl9?K;Iw' );
define( 'LOGGED_IN_SALT',   'ogc=nHsA0{Z;$T.$hT7NE[)PPGC81=X:3K ^&Ld5hM8e_%Vcu<Nu:k+ceLML)JS@' );
define( 'NONCE_SALT',       '&ChGFXths8XV8pf1sbdwwlH)0w{^zj_$&_Bgap=St)i&Ad]oMdd3Gi[,fUL:BjB;' );

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
