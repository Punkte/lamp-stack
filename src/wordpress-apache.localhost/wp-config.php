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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pwd' );

/** MySQL hostname */
define( 'DB_HOST', 'iim_mysql' );

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
define( 'AUTH_KEY',         '6+Cd$gZR`, 31Aw)o?<#>B=Z!Uk=5%w {ri]5sv|*oV.{80$_su]X<c,a/$?[6kS' );
define( 'SECURE_AUTH_KEY',  'd*M<OyQ+5$a*2,k^d]=hLu]MYNZbY<@G=x[M$8~l*@gEc}%Kf#x].N$#fm)z]US2' );
define( 'LOGGED_IN_KEY',    'GBJHZE*Vm6P&FPrZ><Q&uwLdue^ay;D#AJS=Bw7`1 xiaZ{25haT/GwV4me4upLa' );
define( 'NONCE_KEY',        'AnDS[qzd@[~Kub-x T=L0?E#oU PBj}GiRgI6;.3V:ROHd1qwKD|L>_e/,/h1z+Z' );
define( 'AUTH_SALT',        'kPG$&9ZLP57?M`]T#Z|teGeR#B#K}NtE=Uxhh-bs36yh_jWi4T!z<,#|~p;m(S4C' );
define( 'SECURE_AUTH_SALT', 'Yx6R?X_~dmdeB?_SB6%5xTnK>~$5DMY>c0_QG{35nC:XdjOdP M@o7=>m=I++.pp' );
define( 'LOGGED_IN_SALT',   'mmzbsSAvaY).[6Wj]:dp?pQd 0l]> :28BmJRY&@S@(d%V%jnLcAp[N~D96[HKya' );
define( 'NONCE_SALT',       'pXn=N]zmyRe9<}obZi@@9{?9QmF5bK,sD-)[o9zU+mC[G#}gl3.@JJMd.%18].4t' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
