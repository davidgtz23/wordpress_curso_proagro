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
define( 'DB_NAME', 'proagro' );

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
define( 'AUTH_KEY',         '~C+%L%]![%RTe$5d+8myooB-:Lm4-~Ez9prW2Bd66m4<r,=d*.l~7t*@I=yp)2/x' );
define( 'SECURE_AUTH_KEY',  '#z/Xu4s?z.O,qz;-ook3ZAQDTpJ1ka*$bc4>z=6]<Jdz>~{5|@xw {Ap>7<!+:2}' );
define( 'LOGGED_IN_KEY',    '})%9.*22j?_<=Ucu}ec[P%f19|Pl(6-=;0uw~)<<1+&m_+s2[1;{f@],yRPDEjgH' );
define( 'NONCE_KEY',        'f.vE&<!&$V{r<F?{9LvPx%FlE-apg57I#B71 EKH`^`l7!gC9tP:~SxHV[2PiA70' );
define( 'AUTH_SALT',        'D)z?@^f8N@mMA*=|0>..Ncb8f-k7s9P#EsYCg^b>m6)&sfAh8=rBQ}E^s)%%^g4?' );
define( 'SECURE_AUTH_SALT', '3!}9zIdu!#[-/BtXt1SVT]Yx,g={OQw}t>qc4P>0ic=Vd;AgKd>%PZ#9$du.aG5j' );
define( 'LOGGED_IN_SALT',   'NYSki0a,,r=J8>l&}WypqMhV6?2nOGF20D&{l.nPE;4,&fq8>uv.hqk]}UFkPfOa' );
define( 'NONCE_SALT',       '5$:L?tNw5.j3BUSl7<^HI;cw]^b/5lZQ([z.,^ 28c^|N*;}V[N}~F2KMYqNNs1g' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
