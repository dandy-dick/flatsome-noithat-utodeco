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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'furniture_store_wp' );

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
define( 'AUTH_KEY',         'P<o/|*M<a*7B;;E&hXVM0wA,<EsXS/<B211oZ$GL,Z$hMLVSe^-v=.yWL1kTbu^%' );
define( 'SECURE_AUTH_KEY',  '_N=GK0Ew5 ~LBssByDFo|UAI7,M_jrk?~MK`[1Z(x5:!1P4qB-MkrxE`RQW-,x|u' );
define( 'LOGGED_IN_KEY',    '|/*&SYs7,+1%pxO%U4<p8WkD,Sa0iKf,b4jQgdQ#WXrm0/$z)D3K)rc_dCz6sy@m' );
define( 'NONCE_KEY',        ']|Hg8itY5;JdQG SE{DsX1XYxBQg(m4;I&$8XJF}zu:?~__>Ek!%H3IG(qFU[GvZ' );
define( 'AUTH_SALT',        '0Jcy_I|hrAQ,QH[qz;1:>YqZ7S({9(7fJ|!X]khj!{6`}h`uq_c| 2#,oSBB[yx0' );
define( 'SECURE_AUTH_SALT', 'UM=g:!Drqr@,VSL@T(YqP?Gdmk3N&FQ&SlR]JpA^<iqtD4(eR:Z~iQ}F2P{Tu #H' );
define( 'LOGGED_IN_SALT',   'aH8aH61vnR&hZKNE5=v.x,tf3~Tl?CA[g^41cUMWNou>r>82=#b#2iu2KO>H<RE.' );
define( 'NONCE_SALT',       'r~p(4K~>`Ml<v^N}RyA8U-}G8d,ft2U: ic2vH^mscZEt..Xal@kKG7R=E)*UWe/' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
