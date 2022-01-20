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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'I,HbP}MCp?2jJY~t,=0o-)esM%x$?RrP>.f(tsS:la}&y_NSXsb Sc=A[JA?$E:*' );
define( 'SECURE_AUTH_KEY',  'SS/e)or]d8Z^r_vWGh@`b)nT_z{23WHPM.[q|gYkyojrfr,4Q|^]{$p}B~(_|/fZ' );
define( 'LOGGED_IN_KEY',    'hu`85mqe)+NA/]fT!nPj[-<Gg2ITvwG1/sKY`q9WL>q^[AQy;C~5fw(;0iy zhvS' );
define( 'NONCE_KEY',        'dW=&B4vG=&`LxSyj7$(h*!SWg-7taCFNAT//Yxg3b2=?*Er(qot2B,RGWq5K{cPF' );
define( 'AUTH_SALT',        ';wDLf p7.n#kJ5% 1us7VH7(AhH K`]D$=5ajAe)h2;z93u^CRVAPE=jv[4{V#Y[' );
define( 'SECURE_AUTH_SALT', 'nI#e[tnUZ}o:|cf]ftc,/A+,Z~&>GjG|. 3X-s/h|_Dp3!(F}~5hP?_@rZ-VZSSb' );
define( 'LOGGED_IN_SALT',   '5C<>zO$}7^-zV.S}LaRZux LTa}dKXNKy!R{X6I}>AN6@fh6r}Y2-dQ4-7ZuJMtq' );
define( 'NONCE_SALT',       '&@IQT924dVW]m7j@p}3>Pgg0Kh2<j6-G)AgSz`#f0-+,h7OsdmhiH~mL0K@ZUH_B' );

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
