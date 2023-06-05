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
define( 'DB_NAME', 'projet6' );

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
define( 'AUTH_KEY',         'Mn(9I4WV|=$w<Zg|&&u+!KW{>w8V6]T1_x^F`V<om}rEKCs=]=K95uES6@`M,vFy' );
define( 'SECURE_AUTH_KEY',  ':<6Jsr*exqXEiCk[Yzg W5mZ3Ze.77NuiQvW]%OYB,!7X3YKZ?Y81W3?0/-lL?2h' );
define( 'LOGGED_IN_KEY',    'GYG/v#,]$=q=`<RM)%+aCI%Qm#Bj-=$+=2r`W,Zm5<xr0$]RvyW},sZ3b[@q+jLa' );
define( 'NONCE_KEY',        'Q#Q?2+x_x%wGHZ}uV>$fzPIu@oH<p}m~w:h{{q2bu)):Dd:j9HC~VK3k;}ojs{Fh' );
define( 'AUTH_SALT',        'Q8DkhJ5x*&Kg-@PIdxTW}tS4{2j~C&Wj[y?{_t?bj!_F7|oH+#82Fj`x?Ygu#NC^' );
define( 'SECURE_AUTH_SALT', 'Lb,[lxX.X2bdc{OwCD)$z8{ALUOtBc=KCJg^G$DSWqpVGFVUP~*MN1+Dr$q</0Bi' );
define( 'LOGGED_IN_SALT',   '6?Q9JSO$I=uKfbGGZol*KTZb @duEo+m7m.=*b  rM:~r.j$OS|T)=YO+FN|&u#A' );
define( 'NONCE_SALT',       '&pQNVDGNjDU6o7AZas }^V+K1qKI<,VpI&~F(} n6.KX<@Qp8=Q#.zvwCUDo]s,T' );

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
