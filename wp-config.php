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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'avanzo.co' );

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
define( 'AUTH_KEY',         '&<&c)]eP|/j@jL>@i,uV^VqnqWdSm=wFPveKc[wRqD@Y`{7?sy{z/L5.gc?7Py.q' );
define( 'SECURE_AUTH_KEY',  'NT_8-6)YjI7Dlt>O+V4LF4;L*v,;d1ci`~;B 8<(z`:?G/E:B}J=t8B/q|E&G!f3' );
define( 'LOGGED_IN_KEY',    'Sq56NYdZSI+#%$U6~flYm^=K$R@Bu%r=pi^CaO{u`INY3MdWW{=d,os}[%)a#CkW' );
define( 'NONCE_KEY',        'Ks-omd;q%Kx]dpR(O3EDt78w`3ORiyS~#ih[@~]qsV*E6&uVOwLdeDZY&}KXr2fE' );
define( 'AUTH_SALT',        'R7qq3W[~hcZw3&+7yEPaq/R:gk$tG~9m+8Dp;gVA6, ^(=ft:P(Ah,twJx|h5;`3' );
define( 'SECURE_AUTH_SALT', 'nkw%W,E%.A9X%KOGU1_t.-ox$+yg}-XpY0vsn+.0ulf#@^$>C#8mcE2#/(&yr^6{' );
define( 'LOGGED_IN_SALT',   '/SlcpcBF{I>_`MxvFU~=~NN1]NR~b/KWlIJ3(BAL![GnMF[iaEyOJAqV2+y(3]%E' );
define( 'NONCE_SALT',       ')|Ds]v-S%PD/Izt%}+UnkmAlG8MQ i&UGUHU`J;L1#~L;)%AA3Y#&ezFw|PjGY5L' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('ALLOW_UNFILTERED_UPLOADS', true);

define('_CUSTOM_RSPNV_SIZE_', 600);