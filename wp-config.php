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
define( 'DB_NAME', 'poqablog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '0Bh9HLZLl*5?bXX5i^N5IDAC<tPICe{F}?sXgP-{6gIjaR1;GUH{<N}YZhF8Z~h=' );
define( 'SECURE_AUTH_KEY',  'V&,vqqj%1IgE-bq2i/I)JvT:c*v5VPtsc@{m?)I&-OkEQ>]:#t7@COpjoC@teTiS' );
define( 'LOGGED_IN_KEY',    '#30$Ex4?WFcS=OM% $D$[L,}]g&@xv.6`s&vw&KOoF(&-&NN[-,XrURtq.2n]rA8' );
define( 'NONCE_KEY',        ';Fl}R/&QHX#%x.:+Q2 I;^V!=b@2TFssF,|Lml)opF-MAG,[ 4jWUs*-ZRwWrO5_' );
define( 'AUTH_SALT',        ',5vle&Q_X{Tj7 %&>A?`4/ob^KdW}Yq }ndyAkVQ$%tgr^kA<}BTQ$E;$IzVEN&u' );
define( 'SECURE_AUTH_SALT', '|S.!$~]`M{|C$.$L{<0w(f.SLb:$W1[YP`r-fPo<VL$jtau[NKO*9~4iK2(3YGYC' );
define( 'LOGGED_IN_SALT',   '-:Y<O{X4n^3@m[ME-<sTlu#CXskcs1a;G$PC6&,C8A6imsfTRv`k!bAU=s5(U[j ' );
define( 'NONCE_SALT',       'wb3_t[$[veMK}Z2uSef0,gX.{91$2A4s]h,a2QL[JZ3UW*ynO/4F:&u_ !=91WOg' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
