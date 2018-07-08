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
define('DB_NAME', 'codeline_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NakUHhU-BT[&o=>P>8*q]jgj(XuqlH9:SDmM?r3a`Of(;[P>,|q/oEis%h)y>:yV');
define('SECURE_AUTH_KEY',  'TZ:5!H==A6a~*6yHO}`g+J>(^{ubtv=~LT5N9LKV2n2,7tbspsi9Kr,G<tWFH<&N');
define('LOGGED_IN_KEY',    '0f,?~D2Dqf9pdq_d 53Au/B>x4[U|jKA|7TVb?{&Sh1SeHJLc-7t,{-O,8lbZKG-');
define('NONCE_KEY',        '1R`@$rhWUx|3vB{B~`4yQVI>eh7V1cx38CXPmZ0GylN&Qd)Q2zG/^sB5aJowpVZ6');
define('AUTH_SALT',        '1jl6T2s6rn}}fKYL4<)_v[}Ol[Fu}a[,72@{6b/v8tKp|DB}.&Fh[9dJ,r0kkx&w');
define('SECURE_AUTH_SALT', 'NxyQi<|12r,5IU8Z?IO$i%ra3-4HT2P @/L6kD4cY+>8/cGo(V!#<!<VU=L8){32');
define('LOGGED_IN_SALT',   's_e>qu[:#)-R3Ay%h?,=z4cgtYT|$YGWL(G?n Kfb+6|jiC98#{S{OC~&u,*/R`Z');
define('NONCE_SALT',       'M,Z^( $(r2k~a&&j%3|xpV]u{,7gY Usm=yr`y2~?8e71bD%B|KDi@8B#]cXIb/%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
