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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'skyline_builders' );

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
define( 'AUTH_KEY',         'vJY6-mUbUd+54.aa>.8)sHR]G!|QztZ^~<9f%#Mt5 }|4iW7lyy_:?{?Vev}@8^E' );
define( 'SECURE_AUTH_KEY',  'N<8`{];h=VkII3f:lp.*/w 2Xjj3*5:P$C8l%#6>rMr1VVLqTAp&6Zx|/7=:{p^:' );
define( 'LOGGED_IN_KEY',    '1h$M@1~zle-h=,$)_ScC->e_xRw_Wn1F)hV8SOyiVlU8,`lF(ufX;n0)(S__@Cd9' );
define( 'NONCE_KEY',        '@N8gZ[8]]B$OmyN[|Z!t#M}._zW~/-)|v,ZJ2!5wG|kZtwUz&:&OZ3nUvqS;S*}3' );
define( 'AUTH_SALT',        '][t:3cp:[2WC;?5E!7c@:SlCKX@g|?bQrq>)G& 1y<_45BRxkY]#N8n|`=2B9u%7' );
define( 'SECURE_AUTH_SALT', 'pApI%)8spxiJz%]3WjBknB_,y{>Nx>Ic<w&>Wdeb^4v?<6gM.]>wCoi^-8VjQ~Ze' );
define( 'LOGGED_IN_SALT',   '+`U:,VhCDCPX!2j2`*T5tdUk*b?n^h{2v$;>sLE9[h8fmwzlz2eZyWg8IhQ+nMNY' );
define( 'NONCE_SALT',       '-c3Sr!(dG=raZuvt6e!M9[kEq,S]bXfxWq2+r${5|$.g<zb 0LJF% rB_P4IGfJ]' );

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
