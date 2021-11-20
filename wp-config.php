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
define( 'DB_NAME', 'taibasta_1813-sportsconsult' );

/** MySQL database username */
// define( 'DB_USER', 'taibasta_admin' );

/** MySQL database password */
// define( 'DB_PASSWORD', 'admin!@2020' );

/** MySQL hostname */
// define( 'DB_HOST', 'localhost' );

/** MySQL database username */
define( 'DB_USER', 'sysadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sysadmin' );

/** MySQL hostname */
define( 'DB_HOST', 'pbexperts.cwsfw78yvwwm.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'g4Z;+Bb7%6VN7~dQ%a(r}3$BJl9UC*8?t=oq,S(CgVkUZ>4HN(GBOl2] na0dJn8' );
define( 'SECURE_AUTH_KEY',  ':ye%?}.,O-eCs !MJV;!Tvm<efquUm2Az`xumtN0xL9suvX=:$WRIFft+)_q3D(h' );
define( 'LOGGED_IN_KEY',    'z]NHHq&b{E,,6]`k,1zy7T`p&K4aKk])6lV3}:yBO2zaF]di|sinuIN[<M)GGFDP' );
define( 'NONCE_KEY',        'nT[Kohr0/w@#G7l}=U/ZJXDCl0IhjSOUoF2-?)hz2YH+ZQ[1^nZ};&$.)~&zH.Y?' );
define( 'AUTH_SALT',        'bvSmt.%)KSiM7+9Za~DYSg7KiV~7f8_>*ff1*lM-+TI|%/#:+i,Zi7ny@NbhLQ{*' );
define( 'SECURE_AUTH_SALT', '<AmX3TuZHjdB~T(drnb#2w3}x%gD:JP04<F_Oy=!=YqqrPmH=rP:@kfaA$hdvvG`' );
define( 'LOGGED_IN_SALT',   'eQ} ecr7C<^3{c}hV3]<-%m!&f-jc@yVMV.XmL1d&[BHUrdKrsJ7PRceVMW{L*Dn' );
define( 'NONCE_SALT',       '*Ruu-Zl`[NbhgPP^]<dY^RFd,gEUT?qC/&QpAn<J]l]XM .d@$d94D7?rcFCf_5[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'taiba_';

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
