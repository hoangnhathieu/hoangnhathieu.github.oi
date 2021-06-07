<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5CVa[Yq/>55O&3>{L6i1:<;np1R3)6NS)XD_v>2wJPe(T?^{6[Z.nK^&fV/HxSA4' );
define( 'SECURE_AUTH_KEY',  '*t5 g*4`.;p]U0X0%iM-;m/Xi*cj<-vvZfK~oksY(=n!E$s%H`7dsq^o;:5eIgp6' );
define( 'LOGGED_IN_KEY',    'a{OVUCZ^_8X!Vwd?skX/KP@viKJqt{L~G>Bzi>IZZMz8z,X<{?mA/1E9xpO;EA=I' );
define( 'NONCE_KEY',        '6jv_%w{Z8a$E{4;.Xl,ubbf,MI]uc>:M6*QZ5p)VU24w$}IYYo#ve[>*R;*,f@w-' );
define( 'AUTH_SALT',        'pA_Pzz9cYoOqr&)zafN)?LSwR[TBni^%0{XT XVu-w<GA9C p4iQ9.Adb@3#w2dW' );
define( 'SECURE_AUTH_SALT', 'BJ774J7k!6OWuz.4prb.JY^f+ie.|5dD$dPf|m,zk V,XIKmuM8x|^#q9uDi ?9j' );
define( 'LOGGED_IN_SALT',   'APSBs-]|)Yg.H^3@&0oCH+DxC~7w5${xTc)C<b3Q#Vw1>s4$CdI6Hg5,Rf6KeA|*' );
define( 'NONCE_SALT',       'gGxFHls%;`c{, ](Y8G2p:98bH.nBrQ{K%ErXmmRSAGOKUV=`hsflV-gSCj}G|[w' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
