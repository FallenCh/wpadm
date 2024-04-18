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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'adm' );

/** Database password */
define( 'DB_PASSWORD', 'adm123' );

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
define( 'AUTH_KEY',         'm- ;2bRMn8]swmX%R{,y&`Q!t>hgPnD=.AP}yNSTRhwnik&gVQ<V@G72Slq;z(qZ' );
define( 'SECURE_AUTH_KEY',  '_RN2nuV#9yi;;Ytv)}I1a>pB#7EO,S#K2]79o}RJ-e-_aqcKMwlf~ADX;r[gt*L,' );
define( 'LOGGED_IN_KEY',    'qQS(9gqr cPB+P-15o:D0rRW6|IOue[{j-&#lFsB@9G)A(yFy;Uuvqm_o|I6z5Hv' );
define( 'NONCE_KEY',        'ulCm,-uMw1:RbrjHLIRsqFdsEUgipu?*t2msbXt$q@eOcwnbY0dwy`BWozGbl)2r' );
define( 'AUTH_SALT',        '*d8@F@DX|J=qi#ull&t{_(.o@Jwgm^. dJ^W6Tg0ByIvB@7l,%S~J|4TIG,%]=uH' );
define( 'SECURE_AUTH_SALT', '4:!~uOoWo/)_j/=F?#(4P:~tSRlC&idn{;=qi.59}c#mJy__+LMkG`Z&;[`oE(PW' );
define( 'LOGGED_IN_SALT',   'u(.O$N~#>$o&1nxRDwY+|1R]T5tr-+g8i#k?,5+D&7Gy-Jto:B+(>(zYo~pKR[Jp' );
define( 'NONCE_SALT',       'H-R>QJ-#Dqj4ijCtdIDm]9!p^7d<,-V}1.@e^v1)RQt*2+0f)4BRWEPS=6oMGQpm' );

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
