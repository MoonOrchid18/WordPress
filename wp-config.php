<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MoonOrchid' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T/a~=l*q$=zXU>OI=epZ(z$?q3MIHCn)SxP>XEJV7?7uM5u;G~_E`!D9Z0D=jqR4' );
define( 'SECURE_AUTH_KEY',  ':!Yk5<Dl4%*D>-@t@q1,E#)Pp9(~j@Bmikh9YjvCuKbDwc)<>=A@Wb^ovGDL+3w~' );
define( 'LOGGED_IN_KEY',    ']p4QV(@*PA)VU-L5EFLo.x]m}]Xa#AL|u;$2T_~KwE13juJs&l.xbg0ZcIhH!bB<' );
define( 'NONCE_KEY',        '(.Mm@(`pNR,97^<arT#Cz?y,1vyy{9b}+2kmD!`y+=.7n_rN|p,&c&O0Izi6T(|W' );
define( 'AUTH_SALT',        'ELsiUysa*I9mEZ584h=:7d7T-$JT!`@Ccu_9VEeyN<pFxnu=n[g<9O*7k$8%5T_{' );
define( 'SECURE_AUTH_SALT', 'J0W%Q</m(>8UaXrb/-<o#s>rSF$Lhn)JxpgAVfN6)}kwMV+Sfic}H25+;dzX29ig' );
define( 'LOGGED_IN_SALT',   '=RbdJ42=i56j[h9(W[=>!=mO$ieuF^sawoJ#mJab7o!K&CNzsrr-ZQ $n[EQ=A_?' );
define( 'NONCE_SALT',       'V.3C1Q#Vxa}i* 2mPxkRVpgrR_@Rq/4Os%grke;Lv|]^@:;/:apA/|Ga{B3#xDVT' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
