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
define('DB_NAME', 'wordpress-josef');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'masterpogi');

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
define('AUTH_KEY',         'yI0AI~,;I3nE;V1h.WzFTl&ti0^1D^*lXs;A}hl3Z*e~M2xHr+jQqylzr8)X(L5g');
define('SECURE_AUTH_KEY',  'rk8WWk#vMf! }NH1s,4W)n%9#%/5k*sXJ0S+1h@xy(4vPctutqg]A;hb(DR7JM,o');
define('LOGGED_IN_KEY',    '_ Jop}B8<57v`j6Cc0]~0}[:~R.~+eDOz]m+8R)KJV=ex3s`x( _(}Z4J5YJ)j>Q');
define('NONCE_KEY',        '|}~W&+tr<j~<4dGJ@=PYOw,tob$*>Qhi~ejl[mBPk6QX}tt/Rw^gS.&tsqV!|qC6');
define('AUTH_SALT',        'r0q)MBpIJI.nLu*J.cli(W::+ePZXsAInKFnG5&GX]VARp!`_=uDfh3|g1`Acy,_');
define('SECURE_AUTH_SALT', 'cyAA1uK;X0nD&^HKN]unzo|G$P5j#0IV5&.sjh^_EC27fN 9%<Hze&JiD+=yY.v&');
define('LOGGED_IN_SALT',   '`&6jUP%tZ.o&Baa EmxFcG( ZBMXG<{wet4whfy24t)=Vb|CW7]Li>*>sNb;&GkR');
define('NONCE_SALT',       'ZZVr!j~c5LyUI,&Mhh*Ah2ccSDAKq7A[ P DJ[:FBpsKhIAokwSKnN&B]-nAU610');

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
