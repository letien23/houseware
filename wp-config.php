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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         ':jL84i)%VjT-Hs(c?{>keRo>2#51JOA${qaR^D=[-|o|kjRcD`v VmG$7L|=AP_O' );
define( 'SECURE_AUTH_KEY',  'c^%]|*qQ@#M70?ivNv_i@,Yu[Jp&<{J!E}HVTU%Cg+#DE=o3IXjr6dT|v5 XV9U~' );
define( 'LOGGED_IN_KEY',    '5ckZWcf-*WID0hn}QOj5O*=FP2C*`}ohnjT8SsN+e-#ZRslF#;L@/egXhw5h/jFD' );
define( 'NONCE_KEY',        'KKE}WedBK!>TDs|T3wz17cLs BS(`bZu#iiN=$+7[!S(87Z4T?jTX]$qbH3@;fz$' );
define( 'AUTH_SALT',        ')(rMr@%$wCLuKg*8N.xLX ahwuA!2I#UWK^?MymX[^#am4#2i+zfLEaj*YRJr4BJ' );
define( 'SECURE_AUTH_SALT', 'M8FarsqMoL=9/cGwuI|oO6fAtq$~{p4qI<k7oL@a[i&T8!CY7?2L:e`iw}9V5g|!' );
define( 'LOGGED_IN_SALT',   'h2|Kz^iz7L9fnb])+We`_[+ayTZCh=Ig4Q.|z~~AwN^vT=n&qy!JKFQ#7{~u4&rm' );
define( 'NONCE_SALT',       '_<t/^W|;)fOi!DZz6JVWe;<nz8a7yGAyHKjv6kiEDf4 ;<9^!yQY@/|3IyHY9yq{' );

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
