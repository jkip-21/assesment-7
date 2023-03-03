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
define( 'DB_NAME', 'employee' );

/** Database username */
define( 'DB_USER', 'employee' );

/** Database password */
define( 'DB_PASSWORD', 'employee' );

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
define( 'AUTH_KEY',         '&6Rg925l4 >Q4pIqBlCUXm<[-#-UkJGX50|j(dwriy/EJi;7IA~1&_ia S%,*>C&' );
define( 'SECURE_AUTH_KEY',  'ePpY]27P.4gBM(?EZcE/rE>X5NN2HRJ{H2wKq4zP[uiT:^EoWkfRcn6JvcTqG7)*' );
define( 'LOGGED_IN_KEY',    'EX)l]51uf-98W8rxQA/LlQH?:$u#Hr*e; ymA)P~[KUSu)w(3>~#*Ycqd}9|{}dQ' );
define( 'NONCE_KEY',        'BLISMG&Bd/h5Mp25Z$!6O}$x{8)oPP[/,l?D[Ff^F0hgC<`aZiy![^hUGg/{TDfL' );
define( 'AUTH_SALT',        '|J-Qm?a3N0nX6bKpT~Z^Q`YNxwGQVVlVY#B-rkUqC5O00q6/V|VB+$5jVA 0m51e' );
define( 'SECURE_AUTH_SALT', '?c|ZU+J`{R|[ntam!v)*y9Uypi)l#i=+X~1A!|tz-pjRHZD}j$h||2kqx9)y[!UC' );
define( 'LOGGED_IN_SALT',   'RGCm 1+od= ]V=`z|tL4?&sLKRTI@Mri:.Cnsd$s~z+q6yN8JFkbz IeFncQ)+BD' );
define( 'NONCE_SALT',       'oQ=(~gl>j=T/n28SsS64gd3@9/xY0|[5a40x#J*5N`/ba1M%)4TD1V0>p=+,kmTr' );

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
define('WP_DEFINE_LOG', true);
define('JWT_AUTH_SECRET_KEY','IJBWIUGB3IGO98GJBKJSSF');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
