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
define('DB_NAME', 'small_biz_wordpress');

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
define('AUTH_KEY',         'Eu4a6!-8Cg zE/;Sw7H6(V1<bMSpLb)e*5xVW2co/l&G3S4et`*:XY9HctdZ#mmQ');
define('SECURE_AUTH_KEY',  '{[lxC+Ce5,<Wd_<r< eIM0O[nU> ZBa)ea.MJg|cPAJfe,d}mu1.r!#aR8[z$D?%');
define('LOGGED_IN_KEY',    'PCd2i@;mo([_tVI8k]L/JvU+D$/@&{W+HSGn j/ w jHAb<-@C56c%ODcl]G3rOb');
define('NONCE_KEY',        'D5rxabqe2FAJuJ!=%)68s:yy@a`B(fwd:~hM#zDJ6$9g/YWGN V!lr5Cgtrv,c!P');
define('AUTH_SALT',        ',Isg6Yi}s|1n[+P=K&xYWj*cF*K&w<sdt`ah<=eB8oNB@ H~bTTXF6!Og1G8CNrE');
define('SECURE_AUTH_SALT', 'x5S)1@~OdB$*gYEvBQxit-lZUWhQqA@RKuJeur7R_K,,E@stu]=!Zr~g(^dEVWtH');
define('LOGGED_IN_SALT',   ']b?31+oKlm@5{N$CCCDj?qAM+d=?<B~8n (C)rm[h*5D$JP,*Bz.{$Fzg~xeBT3i');
define('NONCE_SALT',       'tvGR9Hkf>UX-*sUPQkhlkB;%MdSbZ/Nv=6B][+{8Oj/x]LS~}x7/Yk=M#0eM&tNG');

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
