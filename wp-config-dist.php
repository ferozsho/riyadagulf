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
define( 'DB_NAME', 'riyadagulf' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '323123' );

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
define( 'AUTH_KEY',         '!{lREp%]O^l^d_v!@lM?V|2fb9e%X[s@;iuaq[zw= Oyf-?& M~iOZL$[K]1?m.5' );
define( 'SECURE_AUTH_KEY',  'N4VI%xm:H+:Csmv[@]UoE&bDQbLz1 4-NoOa%/U2EIyc_%>uY+B98ff_Q0p%1NUY' );
define( 'LOGGED_IN_KEY',    '^,CZ*kr]f#}:8zxZqSw?S|=_E9+pZf*<J]pmlK*H*DsuRndXHYRH{ML#!20!4CHp' );
define( 'NONCE_KEY',        '*6FUbk2/$n$$kyef}n^^ySZY-j}g_*8j#uqlY(xxaw3Td,EB{cEJ-3M( +i`1]Jt' );
define( 'AUTH_SALT',        'Vj2faJE.]-/h^Wym3|lDD]~7;$B/xLr!Q9O#H5Lu<0#f7G)1_<Tv!HQTu)J9Du*I' );
define( 'SECURE_AUTH_SALT', 'c(>T9IR9qjcz5`z5a/u5o(a0!Zk6rP>43kvYo/|[%RKB.hfB7 e8npoz90i9VK=t' );
define( 'LOGGED_IN_SALT',   ']<H+IkRr{B@P.TL5rU>3O7SN@]8}`[GEMuhKW)Zs(uOj>P7A,0pi4eK wZe*h86F' );
define( 'NONCE_SALT',       'x)/[gr=NjiK0L]QEf0S>,N5oj1~Bm{erTnIp>6w!zmYp&0%3WpAplgxDH{G;4N8q' );

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

define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

define('ALLOW_UNFILTERED_UPLOADS', true);
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);
define('CONCATENATE_SCRIPTS', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
