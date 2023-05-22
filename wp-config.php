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
define( 'DB_NAME', 'metrosystem' );

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
define( 'AUTH_KEY',         'BJ`g59yPFl|ww@IW7Qe!PYvM[(fe6qffIbuwV^L`[40WVc*N?z-!8.3OS_^N_$z<' );
define( 'SECURE_AUTH_KEY',  '.!Lxt`UrG[L7}s?QO/u~p?g)}X{*G;J:dJRuWqx5dB{v<-9 =)@&r>nss2R[g64p' );
define( 'LOGGED_IN_KEY',    '6.UIRAtC*P~q y#*G@bWX-lADy3C8:{@?2HMce5n}?0;8Jwh@st5)05-<BOTJ7gO' );
define( 'NONCE_KEY',        '2kbo<`G_=t0SP-7vC(a0/W?aE/D,)MIPtatn)l10hBs8*NIq@Tw)OBghMwZKW6E+' );
define( 'AUTH_SALT',        'Rt+p8xa $sDC_`IRBJ-^lfmyC3o?BMXdWdS*}5aO]6lk>cIwH_Fghq/W zQN9z<Z' );
define( 'SECURE_AUTH_SALT', 'xUw`Zo)**5g(-S`URu*eE-5y<e-8uoLl#)T#jSmWyqFud}VZ7K!Bi({@CxT}U[=i' );
define( 'LOGGED_IN_SALT',   '6|yyJdtbn~2]6p`w-;Cw9&D?f_$~r`3,MB87ewU7-#iGQr)]FZ5tDMKAAftOTXk8' );
define( 'NONCE_SALT',       '7dO;CKmwu$8)nfT{H-l&nD.vdm%x#Dr2$V3bz6-{,P;|_H.2Gb)DFU5Bv5*0_Ci`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_metrosystem';

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
