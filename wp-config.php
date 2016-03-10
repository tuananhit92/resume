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
define('DB_NAME', 'u155658497_tta');

/** MySQL database username */
define('DB_USER', 'u155658497_sa');

/** MySQL database password */
define('DB_PASSWORD', 'tta@2015');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.vn');

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
define('AUTH_KEY',         '77RYco|l(h<;8V*2gpQhMZ9:)X4b~+:<wgd7of-.JlmP^C!2yK,Uzb#4$$9+xAr ');
define('SECURE_AUTH_KEY',  'Gu`<i{v|I}(9GA7M27UEOP{K0M:$his|8%,SQ969EU|W.&q:Rc&wn31s[;o@!t8N');
define('LOGGED_IN_KEY',    'H!MnC@J^]lJ|eY/,(qQ@dQ@Z]zD{yg^Xd-L<5nf~a2|;<bFj+9[`d^W`-1B?GAY$');
define('NONCE_KEY',        ')(}dD1{t=;B|YNA-B|^A.jP#U`CE0>3u0brO3}zja+jVY5Vq@B#ajqa8UV(9@,T ');
define('AUTH_SALT',        'J`R%+gdQRAI-Co+k2D@(]Y,HqtX>eNo>D%!mlfQPF^=-}#iN+~WM+8+W0)|Js?&`');
define('SECURE_AUTH_SALT', 'PzyM}Jl[L(/2B4{3wg0WeQ0GryU3_I|}s(@.Z7b,l[jnBeF+>e]B&BH8*MBkJ1B-');
define('LOGGED_IN_SALT',   'lE~^(FF{Ks|idlT-^QN(Pez`(|X>VTVX C,h8#25U sZw,LVg?Wf>ns|b+E+#QPY');
define('NONCE_SALT',       '--(EsNgNXA@txvl0Yv)urw*.^n?7;sI*|c2RYS~$8%#N20m]xB>*fSw$x@hIz8dF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'thm_';

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
