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
define( 'DB_NAME', 'srp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '58PmL~zfC?Y$hcEUje_fP]?gm]EO:4nDH;Kvo@=xP[,3Aq^vh0{vMf}t MU!RUJD' );
define( 'SECURE_AUTH_KEY',  'a/Oc7;XVrI2h*Z((gVOl(~%D6u2m6rp6v%5-We>,_B>MX;N$d><xp)^gXVcE]MQ0' );
define( 'LOGGED_IN_KEY',    'y~R|n5x#oON^R6e8>E~vMteMpLYV,MgJREW<t3in iGNC5qo399GC[$<OiHOg38/' );
define( 'NONCE_KEY',        ']RL|;XC}%yEXN/jCvsYF*6Q^>H>ZPaI{lB?L`CR%+2*)vOHjVX.aeH8S:S|W>xxL' );
define( 'AUTH_SALT',        'i$V:}rbzs9J%hl14z%Z=2tu4yt*)LgW^qJ.$j/+AnzSP5O6Eh/Fcq3FaJ=73X7B.' );
define( 'SECURE_AUTH_SALT', 'dcu)fN(DMVj:p3K?YU4m>bX6G{%IKO.i}er`<t>;%8e+k^(>?B[AN&|h>BQ7DY-D' );
define( 'LOGGED_IN_SALT',   '-C7ux$!$j9=Now^U$,5MA$=*jrB>pH:w@Tz6^e7@*,MCs6$TrLL1$cBd9i+8m65<' );
define( 'NONCE_SALT',       'iB7QdZXK{m)g .<)Ixl-oM}MLcgG2I_/&%gs[ZoDdwqAh?`5^ 7d~+8%U{ts?vrm' );

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
