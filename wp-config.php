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
define('DB_NAME', 'mwdev_local');

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

/** Increase Upload Limit **/
define('WP_MEMORY_LIMIT', '64M');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tQtaWz[$|nG<!Q-24%*taF.uJ?O@A_Gth8<bK!;;8gafIy=cVM8nknoqk}(id.5g');
define('SECURE_AUTH_KEY',  'uN+{]oM*M<}>fyDnq.NDbKv+.0$EMes1MAR?=tb8{C?PXQOeV.$Pqa3p+J8IOHtS');
define('LOGGED_IN_KEY',    'IGp8CvMMrSe(JN;xN2:)bsD.a(w1@MLj*PmWqak`5iv=t$>~=-/4<u,FinOe<N4.');
define('NONCE_KEY',        'F((U9#*OO#Vr&Kw<OE`dTjfz`2.%qe<@OH[NtSK$SU30NP`CRVI.f.o}ml:#[;2(');
define('AUTH_SALT',        '>4uGazAvaDPc7B2bcoLjap_v(0pAvBk;PjCk)y0eg;5.KPWyVZ;k=aEYo>H$p Ti');
define('SECURE_AUTH_SALT', '/wiJI^cghE#S@cf8+dgvse9gbZ52j;|>{,iGhem[0Yo.4cSC{WYAL),Ra(t+%t29');
define('LOGGED_IN_SALT',   'lHHy!m[FF(@8sO*>,]<N_d4mbylIF9^xF$ExjEmO./-V@EW$?#1dqPu@m(}krmVp');
define('NONCE_SALT',       'J^~u`0>>|?E{+fly./;!y]&zd;(XX+c=->? 4IJ:vN9Go,9934Kl.Fi5H-dD)=gf');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
