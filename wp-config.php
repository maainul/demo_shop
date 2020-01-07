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
define( 'DB_NAME', 'demo_shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':+v8kZcH%e(~-E)g-wyKMZ;%tQ5Di45:*??sNSqx]a$qWCYysWM{L6S`2Vp+ih|+' );
define( 'SECURE_AUTH_KEY',  ',Ar<a{B_!n0:[Sjqgl6%;:z_5Ey/;6h7~<^O|9j-R&[Oc[kZ#y{6zC]lOe]{pv=V' );
define( 'LOGGED_IN_KEY',    '/g~&+sfZwGmwvF#_i=S6}FXz_Go<K<L<c3H@h~^,o;E~k-M(|9RO|]8a~}@sb{.+' );
define( 'NONCE_KEY',        'A<1}4WOtXN2|f|q-NeKw&n3Tv* ^yp}z9q_#TxYI~Eo4DZ*zd=)v:#eOSNY*W6It' );
define( 'AUTH_SALT',        '90TnocjKVkR:FJc74Y*}`w:5P?*Ko+aE7TykCXD6`X~SS7Qt1>d9e_m{l%t`]Ib_' );
define( 'SECURE_AUTH_SALT', '4hLM`L^Jc68J(s^g;Tg@BQxS/C#Jj)B2tO Uy#= 15H{sP&@YQ^|V?2aH7T(CCO]' );
define( 'LOGGED_IN_SALT',   'hffpXYW;fZ4kCn?EpJw2f]bw_gNxs}nQOAOw{NRD%$aB%1AmfN#yP4#Be6lH~W~~' );
define( 'NONCE_SALT',       'v9d00FJ#0u6~fs-o6MT.3-mz{Jyh>47;{,dZeDVJL]=1$ zq?o)sn^uv;R2@}~tH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
