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
define('DB_NAME', 'pkgpc_hn0227');

/** MySQL database username */
define('DB_USER', 'pkgpc_hn0227');

/** MySQL database password */
define('DB_PASSWORD', '6iwPRSDmK');

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
define('AUTH_KEY',         'FfhN7*Z <Z+A?is2O}G4Mu&Fi-46Y=DXfp1Mo}v{HhG1KTdkrMZLh[sI=+B6wQ06');
define('SECURE_AUTH_KEY',  'JIxubp2v*Cg$V}_I@V=<AZ@F,eS*zle4Ft*^K4d^F7tk.s$4RoMLwl4i%24&nz}@');
define('LOGGED_IN_KEY',    'o[Y)>nL6EBD1kOnuNk&zV~teOciUyS~6d,s[cPNdXu7|lMJ{`yy=HuANx%-gz5Il');
define('NONCE_KEY',        '~;[/DLq36^PLr=|<q9W=V`Jz>:3c7z;zqSj_D.0Wyg4x?<_f5Xl=;=hQ7J*hIloh');
define('AUTH_SALT',        'a[jcZL?|ta3{p]/f-Yu3#HI=S:.Cra3V,rknP,D<|+KTGYm52Ba@FxZuo?Wm[g,I');
define('SECURE_AUTH_SALT', '||YU`*,/=[QSmpAP9~N:`KC:0nno7^n0-.cuT<~|$&)Br_:L@t6| %@pBT9B.tV9');
define('LOGGED_IN_SALT',   'byR;NWfxY4C1tq3>#@}4 Ehl/A<<@6Sac,n0<|^7Q5MeS?[26-=a&/lQ!E$chYVU');
define('NONCE_SALT',       'i}Rj2D8o{inKQQ[Rt[qY(sD_u#*fJDgF9]ZgMd-B;<o~@9},BQJqA,wBl{I[g#kR');
define('LINK_CONTACT','http://swt.pk709.com/lr/chatpre.aspx?id=ktf27288478&lng=en');
define('NUMBER_PHONE1','1900.2622');
define('NUMBER_PHONE2','0166.352.8899');
define('GLOBAL_NAME','Phòng khám đa khoa Giải Phóng');
define('ADDRESS','709 Giải Phóng - Hoàng Mai - Hà Nội');
define('EMAIL','phongkhamdakhoagiaiphong@gmail.com');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hn_';

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
