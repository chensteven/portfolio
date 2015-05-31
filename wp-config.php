<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'iosiMB%N1Q`%m.(eQ?<)F?HjV)BQ|Ndo|4-*M*)n80_,NK3<Phl#JDX4IE`BiDhr');
define('SECURE_AUTH_KEY',  '*rY&_/=:Xf``_CkT#8-G5?{kxG*|QVua~:d23b_WZFzHwbk$dP(h-G+=pNxD;>IS');
define('LOGGED_IN_KEY',    '.M&8- KT8h,lUa%8>8e[-sh6<hv=$K6f+Yf+23--7n3aHx;s:q^4-D)kA[p|AuEL');
define('NONCE_KEY',        'B*-NNL?^rG-qbE`) SIkB b<+w*|#GNf &EB/=_n|!.,MLno]}Wtv@R:M9Wn::n|');
define('AUTH_SALT',        'TVfy +m$L|d<@.Oa+?>|mFI1D fr|:=e]WNZ@Xuk96GWYd)aO61 eSDC0xhh!0%0');
define('SECURE_AUTH_SALT', 'C5{+.Z!l]$-%!1tR9j-B~G.d^:`-IzB*+7%-2y|DVMj(`)?2 xJM:OJj*l]G12,o');
define('LOGGED_IN_SALT',   'ZQ|s27xZ-,6yDc}+;2!!N:MyhIl5||B[}Gxjflh.T,NKrq?T`lOmnX`u?LHqYsHv');
define('NONCE_SALT',       'pUga55ejr4}1iS=rnMS)#p O-rFXO>8W]1/><_Fzv}X+c+fi@k?-!+PD]xA5/>MP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
