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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'i@0;479J>dqa+nIXt5N4Hj~+`f`HyrzZF{cfue]=6$T_4evdkLZO*]XsRbro/#*J' );
define( 'SECURE_AUTH_KEY',  '6.fTj$_.Q3q,iSkSkxanWHb4@ZC%(FE5B;XBU9`TZRy5PT,oO{3R$+ga#xZ%^s,r' );
define( 'LOGGED_IN_KEY',    '|K#XS%kFg)IAr`z4@2C~wmL7Tkr(jDhO~1f}`LAo)o*9WAEf |H?s.-2[2XOiQhC' );
define( 'NONCE_KEY',        'cOjL?21.ne.ER9K!f$Lz~eq:*Hp0$gTo ]UsyQ|dp<rchj*{~fqcN3TOQ1cWn#}o' );
define( 'AUTH_SALT',        'aiBM`dgp}CWX+R+kWp6C%|V(sQr*wH>>mG:UoOYTn.G}ckfZbkR_FZ`@ys`$D_S7' );
define( 'SECURE_AUTH_SALT', 'lf9wL!NR_a#FZy012lRYICRA9x)yJWK?Jh/%(.~dJe>ql9MZtru@p>?^ td4>)$l' );
define( 'LOGGED_IN_SALT',   'nQ@]@5@FiZm0L6@$E.r0r.xTr<8=n*WXT=mAT9xvd%!oJlB6 smCpmT5Yz~Xo?wM' );
define( 'NONCE_SALT',       'bb-]^LF.j5TB@A/IKs*?j F4CL4Gs,])i%3UQm~X,<2[1SI*y=1wro|uKguW0t7&' );

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
define('WP_HOME','http://10.128.226.38/wordpress');
define('WP_SITEURL','http://10.128.226.38/wordpress');
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
