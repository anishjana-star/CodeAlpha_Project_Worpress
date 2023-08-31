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
define( 'DB_NAME', 'lblog_34931371_804' );

/** Database username */
define( 'DB_USER', '34931371_1' );

/** Database password */
define( 'DB_PASSWORD', ')5p21PzSv@' );

/** Database hostname */
define( 'DB_HOST', 'sql204.byetcluster.com' );

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
define( 'AUTH_KEY',         'b4lg8lttpnexgbvxyfow4iggj2hvpotlsgdkz8mthlha317wp6wr1tfvtd6jv3rk' );
define( 'SECURE_AUTH_KEY',  'ycwieklgs6yfhtup64lxvupheqmaeuwoyxntynanpongay1i2b4bweig1ojtmblr' );
define( 'LOGGED_IN_KEY',    'uds8d9bzaymrftsfqh0tykitewhsy0vi9tbocdnmiys1oldauqbc5c9qwleqloyj' );
define( 'NONCE_KEY',        'povb2zwfbtvdtzckp8lpb5arvulstawy2knzftyln4btmc1nil6qvnruykn0as7p' );
define( 'AUTH_SALT',        'imibzr43dp0fxt6lafgxcmzjen6zfqj06bi8istzi32t8vfbioydmxbhwtp1btkx' );
define( 'SECURE_AUTH_SALT', 'azthwegjqmhxw8tvduwe6oa0cqbdqk98bwyl1hgisqcrnnm0oekcth9hxjpmflsn' );
define( 'LOGGED_IN_SALT',   'nygezpfvk9omoqxecot9f2vxbf3wnpotkc505jnsjkmidiww4s0yn8qc7pfs3ebp' );
define( 'NONCE_SALT',       'oe0dmrsuqbaqj2zdlhi41yehnnnb29myidy6gf3stlkj2ua6adqrxyky3p7uhcg3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpy3_';

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
