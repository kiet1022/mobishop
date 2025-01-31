<?php
define('WP_CACHE', true); // Added by WP Rocket
define( 'WP_MEMORY_LIMIT', '256M' );
// define('DISALLOW_FILE_EDIT', true);
// define('DISALLOW_FILE_MODS',true);

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
define('DB_NAME', "kietkunx_mobishop");

/** MySQL database username */
define('DB_USER', "kietkunx_admin");

/** MySQL database password */
define('DB_PASSWORD', "1022Kiet.");

/** MySQL hostname */
define('DB_HOST', "45.252.248.44");

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
define('AUTH_KEY',         'TJpmI%!*4&n-cI0x(OgCd+Z1uAr:KL>h>^-;!l@AoYs/>G{Z_~hDY&L594)A7]*V');
define('SECURE_AUTH_KEY',  'i(u8yq}zl~oNOS6B<_LXvz_299&KYZ6@blmx_]I1R,ROg!FQ-SeHYr%{[]JnuDSP');
define('LOGGED_IN_KEY',    'z2O9yi8C[cfHHo8%h1H&_$TUuOZb^|eG(0`#b@B@ _Y$;tpB]n=|?R4$^@~nY)l-');
define('NONCE_KEY',        '$O}>SyH{Zbof,8.a}j9Nz&>r}7]9zpLsi!s*$Oz2CPeezy<4*v^Fqm=hFgeQwiv6');
define('AUTH_SALT',        '.4^I|#$*<x2ph|NCVIbF7N<l>fvqk$f`zQc&c#{ad6YSh~25>4#Z6@@VF kLSUeg');
define('SECURE_AUTH_SALT', 'asLNmH1<aJ&Fnb(,G&mYxBa!I;0Q&.<Ofg t>G>r=/Q.[m%s`9p,Q3IA3G&EO.m6');
define('LOGGED_IN_SALT',   'eLjl-[q]NnFwY{s2(Moyc`Y_yXnN@@LseqB| @:2Y6#a-@a,e*f7hN=L)ynS:$bq');
define('NONCE_SALT',       'e*O27r>0.){KPJPsGt(*yW.S$p(lebi(LDp0_ioz{o#08M9]8^h-8_,>fT.O&vY&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpsim_';

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
