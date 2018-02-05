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
define('DB_NAME', 'wethersfDBa1too');

/** MySQL database username */
define('DB_USER', 'wethersfDBa1too');

/** MySQL database password */
define('DB_PASSWORD', 'Qzqnh1ztol');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'c0gnrz7FY$,}3GNVd!4Cgosz8GNV|}4Zcks0JRv@|>9GO~|:5ZdlsCKSw-![Oho:4');
define('SECURE_AUTH_KEY',  'h;5DKbemu2AHPu+.]Taiqm]2DLqmt+#LHPWi#;]293A7EMu$.^<MXfnj<AIEju$.');
define('LOGGED_IN_KEY',    'W_5Zhdls5C8GOw~|ows-!19LSxp:519Kpwt-_KSOWd#:[19hpls-t+.*<Lx*DPWSa');
define('NONCE_KEY',        '4Oh|[18dk~CKRZ@|:1Vdks08Gw@|:DKSa-_]Zhpw5DKSs-_[OWp:5CKls-_DLSx*#');
define('AUTH_SALT',        '3fnv|}4Gksow@FNVRZ@>08cYgoz8FNJRv!>0}RYkhow8GCKV-!@|:Vdkho084CNso');
define('SECURE_AUTH_SALT', 'I$^PXfj<6Eu$.ILTb*2AQYcj>7Fv$,EMUb{BbjrAIQXy^<JRYg,>07cv@BFNUz');
define('LOGGED_IN_SALT',   'k0JFkrz!FRYg,!4BROVdl[1CKow~-!GOVh|:4C8dks@CKGNV@|:4KGOWd#:5D9dlt');
define('NONCE_SALT',       'v^QUc^3BRVdk[CJowz!GZg|}08ck@CJRVz!4[:5ls-~CKSZ~18dlow5OV-~|:dks_');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
