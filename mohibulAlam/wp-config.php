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
define( 'DB_NAME', 'mydata' );

/** MySQL database username */
define( 'DB_USER', 'mohibul' );

/** MySQL database password */
define( 'DB_PASSWORD', '2416' );

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
define( 'AUTH_KEY',         '5t[$I+e8J[+<l[WGX`6*;.5NBQ^ovxyJ^KNoDm7l^]<tzpI0Ev qQ-z>h#)Wt[Tk' );
define( 'SECURE_AUTH_KEY',  'k^~d.Yv,!J-l<oks[p{`LD=Z<V[KvOS1K(yit57EJ$}.EuaO]<295NgLd~0r%*+A' );
define( 'LOGGED_IN_KEY',    'VZ &-@[MB8u V>0[L4{n-/a}tOhXQWL,1#2L%<rsxkIw]n!YiK,4VbkHu6I1*/V7' );
define( 'NONCE_KEY',        'x*U&Cj{BCy-#EF6$V)6E||-WX>+EU<qA2N-cQvNGe=-h8V^SY&qJm{~:!`+}_V_F' );
define( 'AUTH_SALT',        'rWlY3z6Ais24mr^yigaB2`OSJQlo>Spu>)#}h<?ZTwlwMysw&Tax,E zV|yGCDeJ' );
define( 'SECURE_AUTH_SALT', '/9)!)zVZGP@-f+RqGIv~% RaOvd5f0yqZKL#WGxP|9.An- ;Hzo1D&v+({[o@tGE' );
define( 'LOGGED_IN_SALT',   'n?@5ItO(_=h^,;E3J/@C3QEb;YFgrfx#Mb}0elD{A?7s6k>is_i1P1y]YG5&~^.J' );
define( 'NONCE_SALT',       'V##)]V-8[oeBiY<a7tsi<R$!&FLH>}3.SeY6QM`qf5ks&E?g3:|RxpT[Zhp2aE;p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mh_';

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
