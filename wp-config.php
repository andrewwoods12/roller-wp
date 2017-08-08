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
define('DB_NAME', 'zavmar_roller');

/** MySQL database username */
define('DB_USER', 'zavmar_roller');

/** MySQL database password */
define('DB_PASSWORD', '@admin2016');

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
define('AUTH_KEY',         '4bM7@E%CH?&cJZD|6.C#lkhnhM)2LW?e~[a*3o06Ou@^E4s?(hGdNG9~aKeCC;qM');
define('SECURE_AUTH_KEY',  'h~gJI/eteR+-??`X`L8Xhj*r# l^k6FH_*B;q&442r.AaKwGZd]]!%<QbVbRHyi:');
define('LOGGED_IN_KEY',    'CTc43^N]jg].Mw- [=f%>McG![KeJ=_^>]9M=l9:PGlEz8+#<cZBaLpAaz{W6r,:');
define('NONCE_KEY',        '`Y_xjpKV!E6@e#,lz}%r%|N3|{LvsQ!MA[JDUY`#]JI0[*xxpvdMW(e@3fYG4rba');
define('AUTH_SALT',        '4t6CQ^PE82>+MoK/8}7<Kx6JLL}mI J]q:azbo-_;%~Z}mT{2IH<K9`S4+fi@c/B');
define('SECURE_AUTH_SALT', 'id]uB44e2o4;C2TZt^qy[R4FIo4+h.=U8N0{[>H:TH,Z1w+o|$|qi^pW $;T2@WD');
define('LOGGED_IN_SALT',   'aO#%bKv3u=SoO$Lz=x?QQ[@Qe#<8gv,S0U}lh^ dt@C&$+ ]y@wse]!5z`aP*5[O');
define('NONCE_SALT',       'mnbMFYp+jfLct,KIzI$MK3mqdFDd<&+a4VtRX;DpCMuY[7NY.Bx.YtH2YJKIp54X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'roller_';

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
