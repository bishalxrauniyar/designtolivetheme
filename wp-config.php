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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '0yDfpP?!a{`PXKC}/b5/Bl$&OCWM0=6<,aJSY;H%~oATozYl7!;F`%(H=SD=dy5[' );
define( 'SECURE_AUTH_KEY',   '~Jyu4|OxIu4<0+Cu7YgNds#*IG6)S`N:+P)TI5&@AJey_#=@hQb0VaI8twJ^i48d' );
define( 'LOGGED_IN_KEY',     '7i3OkM~tya0S-Y~kf<*dQO;EgV&:Z)l#%et>r:O9cn^rK &YYJwPQw93cmojHn|;' );
define( 'NONCE_KEY',         '0S>9^I.epjgvbLKJ!{J?&/gK&D;htM] cz[i:$wgIu8vtOA!jF_KLz7_{0QoDafz' );
define( 'AUTH_SALT',         'wzn^*2^{a^g|MP,lVOjQX4,}@)8XrlnaaQWUCmX1et64/|)V^$OUS;4`_+|WF%;}' );
define( 'SECURE_AUTH_SALT',  '^]`Km+m~mWc=HguW+ i/&j^CzpnMzo]oIG|`8fI%P{C ;Ex7]JnE15t22T;gUeps' );
define( 'LOGGED_IN_SALT',    'a=f}^lN:QH<8xMd^YE~~z:bl)<Bwwha)bK%w{ H#s*Zn f;j[diX{J5m62fTlc8[' );
define( 'NONCE_SALT',        'xl*L^T:Oi(ndd ?hINL;6zy+8yLOeqNBz.V>4f}t(-p`$Ax7mwqpCs};AiPF$*g0' );
define( 'WP_CACHE_KEY_SALT', 'B~(;|1>}+-@[}UaKBI_ZxQ&r{>M]wmc!Vex5usqYund~|vxdeCubTB4JU#LF=G<i' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
