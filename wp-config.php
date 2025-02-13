
<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'S$`T2AlaNv(4wS$cY)d,y(B5as*$~h6`W>x|o5tTe<4E/iaJAN|lA1UR0*7s|8dn' );
define( 'SECURE_AUTH_KEY',  '?ug9!;*1EI39,TBYa9Jo{}C}vharM|o1j7yj0Qs&Mbb&s3{=:xcu3t]fga23_Ky*' );
define( 'LOGGED_IN_KEY',    '%7+}5!5F@33bY*NV<Q`/(i$O_|tLi}TE0v61VrEfWwpB@Ds*@+ b@X^w!<RqTFc4' );
define( 'NONCE_KEY',        '1HH*tzP11)x,RawM9N(n0bjaa|b8A*#qnmmIjZ+Ks/YPP&4PWqg+}AtTm(q7c:N6' );
define( 'AUTH_SALT',        'nByz~;9wESxsUc/g*3B[WMQ?HFJAAiCII~IO3Pq:6AY_<?El;VoWA]fw2L-l;TYH' );
define( 'SECURE_AUTH_SALT', '[^6|(1@ ^I#1WynRc<p)n#{cNx, .V1=hQa-bC:^MPaDL0|R*@R|q|#B81HGT4T,' );
define( 'LOGGED_IN_SALT',   '=h>8^9<NReuZ3k%Ph/6FDa9zS9F/Ze()dcr.l*vw])M0xUGP~~~4jdXT4D0`0w*5' );
define( 'NONCE_SALT',       '7=UowRM^pN~2~KqUOM&4W7`JM<{MPL6#?FF:Ut3XS)a1!|G`S#~_EKYN*N,)+A0w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
