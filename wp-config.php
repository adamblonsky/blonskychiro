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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'aa6c003be57b46c98752e308899c04436154856145b11e70' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'p{AR}GG)NK>lB$D-V{Ob,[uF^.XCYyF6>dR&E9f.`>OUVM+Q{!N&==i9XuVP$EiI' );
define( 'SECURE_AUTH_KEY',  '/VDny9N-&QBBv.~9N}k&xWqU2>( r0BMqW.L~HWE?.&7R>bS&*|3LS_N41]*IIFt' );
define( 'LOGGED_IN_KEY',    'y]agnVip*2e>5L@CoV!jDHXZnn+VvJI[HNHDw!lw2 #>E_+RI9<U/KN^9Le}#Zx(' );
define( 'NONCE_KEY',        'mcSYy&76{Sj|8#Y_tEHb5_s~A@78y9JuV &{f >uFn+jNE@,cA1/Knk&z[$b(KO#' );
define( 'AUTH_SALT',        '989U <t*L*+Fb7[tgpaBE8UO*sAYN?M~si}|H*~~? <YfY_<Qf-JVwE@-f,%85}}' );
define( 'SECURE_AUTH_SALT', '4|KSD]!1VlW&zMYK5Q`thMk$Og3F;qKr(s$l{Iuh>HIxPcapaHU7O_| /H$)?uS8' );
define( 'LOGGED_IN_SALT',   '>WfU0I,^%[EY7y:CU6ehr`PhWe=JRsf=1(6I!YvgcB=gH1rXZ2sLeF` OBq+%@Ym' );
define( 'NONCE_SALT',       ' DZR3uI#hDtIgyrrku6?X[2siA}7AqdHaUD]T<UOl}-?,(107kH`LSDY(*YXHGqH' );

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
