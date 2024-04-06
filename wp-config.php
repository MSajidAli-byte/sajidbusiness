<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sajidbusiness_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>_bX[a]dfYiYod=XkFPX%o6;XpTTJgwZGUX,uL=FYZFl@)FrUk(V4N~&C# w@j W' );
define( 'SECURE_AUTH_KEY',  'wxV)`|bNvc<SU-Oj`:>1WqKpr.LyP_F@4~^3LoT??m5k_>BgnCol<B*mkB{O]P)J' );
define( 'LOGGED_IN_KEY',    'h.epIcI<s|Y~qaS-V|(udyLkT !daQP3Jvjy7)gp[qQ_w>0?g,9f+vb3sU)vmkpU' );
define( 'NONCE_KEY',        '.@rGtHa_K[!#dv2EbB_6H1tk:Jy*/Tu#&h:IbzX-T0Dr!:e1B`m}]2<n(v!AaNXa' );
define( 'AUTH_SALT',        'kS; d}I!>XrG+alc*7j<|wT?FU+k&oMo:jt$E+=b(l>XGhT%V=ExmV6R c*]plKs' );
define( 'SECURE_AUTH_SALT', 'CL}u*z0H6f(B`t(-tGd$jJ_:<v]. {9}npe-F? UYfE$i?E[RRky.9H#V[nM$#lB' );
define( 'LOGGED_IN_SALT',   'qf}v9;oh4Z<~q05%[/M3m7Td2/!aTH2U3?(iWHF9}Wjp;0M$WTt26lJ-uCV0.:le' );
define( 'NONCE_SALT',       'G*Zvtqr3_+es)wQy}_s@hM|^~OaNxoNIT6EW9mwjK-V4w[P[|*CG!6_FCQiD39z-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
