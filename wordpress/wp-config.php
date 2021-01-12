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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'cFf)siL0yY,=Dl2/_P57)?%w:;>F^di R< S<l|~Um,!m9G!TPj[X`a#Ph)-InWK' );
define( 'SECURE_AUTH_KEY',  'a?[12M:XWc`9|g4(_|5S3pvN+.o++}(MHx~YY8#|f?>bW8ixkj5HE<IQGlgOe]]1' );
define( 'LOGGED_IN_KEY',    'Ly^Liz.4_M&b0yND]QX_/&/TQi2;g_mBvi2!v)uz_Mu/4hT[<w+=)Qpb~|{b&(t/' );
define( 'NONCE_KEY',        '36Y02oiULhy`*`n>Q_N$$+CHpR8[VwjLG/D0LTE!Npys=AcD$?^$j*jUQnPbL#s+' );
define( 'AUTH_SALT',        '7Sc>xAc[G%zS LW.}W5p`cgYau:(Q.+&`bclg Y`Jg;l/dqsD--#ha:S2B9vWC-?' );
define( 'SECURE_AUTH_SALT', '!~h$-r|o;X$+wTayPIofJMswz>Du X/z4#VX0XCSz<$qK*w%FIKj9;|.MBie0=:|' );
define( 'LOGGED_IN_SALT',   'yk.y!evDSs]%zF{(/~w<.fbp=XTk$-oU4;Oy^EF/#J>La[fAF4+W]24>gj>yX6^x' );
define( 'NONCE_SALT',       'nmVPyyJfM^h9hq&DCKC$=JWJU&0TXXa~lBmf -J8[]h*rob. IRGd!uiypUHy&5h' );

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
