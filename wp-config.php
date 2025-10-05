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
define( 'DB_NAME', 'NASA' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Dolara2019' );

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
define( 'AUTH_KEY',         ' _$Nf$zJ+FUf!P&:3h0CmXgy9*yA7$&yb,VeX_`i9gBQu.h?R%B18Pg^S3e=b-`1' );
define( 'SECURE_AUTH_KEY',  'J+jqxrJI<L$IfIwXEVf]c>%k3bnAbNQ|WBi&-89hw~sLD@+=2PZ?O,)6tErRqeB6' );
define( 'LOGGED_IN_KEY',    'rzyAz]D/JO|A#Wt;VWYQnoU|HR4V33b:v&^ZSm[JKZz 5qGAoH{PE@2 [.rF+AgB' );
define( 'NONCE_KEY',        'g!`J2TXK)6ka;Q*b7/MJE+iU5qI`04@ZJ.{<%mD8rsfu4sUJ~L]RKc5M[*msxY;8' );
define( 'AUTH_SALT',        'Q$sw^l|$wMo..#[py,uWqSeS@<<!I{967cziiak|Kdj&+|AmfzYc4m{ P:_]gi+}' );
define( 'SECURE_AUTH_SALT', '@cd8Zdw!BUnn?2`~7tnvtl5=L!z}5Jm1o__)Tl2bA>(578QSZnwJR*aA%AJ5;%7}' );
define( 'LOGGED_IN_SALT',   'xffFGdm+a7rKC~h./X?g4pZWUyu8dp{SRF2KkMMpA4b#hx:8:&NO}1FaIV|bbpP5' );
define( 'NONCE_SALT',       '%{c%Z_bf?Bw=qc7N(y&4?Mkj!:*w$IS+iLDmq*%$_`@]hr=PctRf|c|$0*;is7ex' );

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
