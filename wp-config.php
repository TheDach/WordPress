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
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress_user');
define('DB_PASSWORD', 'root_password');
define('DB_HOST', 'localhost:3306');  // ← правильный порт!
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'WErkoYD7=y.|AhEb-&;riIkCSYP~Sb|rx!_0DA]*|&U0!zE<JY_${A7Vy-!k-sZ<');
define('SECURE_AUTH_KEY',  '7IrQ*R 0JoIpnc97/q;e&!y43.{|MQ]B2p#7x)L[f?l96*U#QA69q+cqs Y3M02o');
define('LOGGED_IN_KEY',    'qu$:t0$4MfI^+p J}G8Y/e(D5WZ)9dt#uia;-NWKN+FRy`C!O+IE6&@SB5G&Pcnn');
define('NONCE_KEY',        'S)mSvH|srakhFS[,P+X?GY^;N;LyTUlOH[N3{I5P[[|?ZhTpm++ e;mu0bDqh43F');
define('AUTH_SALT',        '(IU%_[4DjoMsi6x8I%%+FK-?6<^SuY5@p<|Q8K3k)05hQw:b-+||/F:@)+_{wF4q');
define('SECURE_AUTH_SALT', '%!+n[v4K|IJyS=L;6l[cV>ETxq-|`PVu-CL<0ApPZ7,^XMT;^x-#&Gy1FPK!zBIz');
define('LOGGED_IN_SALT',   'SH,v f27lygjW>_+{Jq|XjI}^j5X bi^@~zGG][II=Ss_FUit8m3b.sQqI=MGc2[');
define('NONCE_SALT',       'B]eg.A+x,`}|c|_F;W~7nyw5fqt1#V 4*@2fNxAD8vuTmxc`CZ-]8LK>rr#w+5fl');

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
