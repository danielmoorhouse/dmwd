<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'fP|HqO,8*&&c]4j,-1&1IoqLR/tNZ/SV@m,ZLb-_B;bQ]0w7&]B9U*$MzZ~B)9}:' );
define( 'SECURE_AUTH_KEY',   ';={-9Nj$P;x5P+.qdXPt<;R#_n#3{Xp.*y_Y/TpC{1 GAoWL+tKP)!%7Z/Zh W73' );
define( 'LOGGED_IN_KEY',     ' wI=/ mjk^J;wPvNJ%TjeB`O$[LJNMwTsqbgqg1b(TbW9y|%(fk,D6(nb<reSUV*' );
define( 'NONCE_KEY',         '{k?^fWoo,xG$;*+VcJTa;XYBL8jX9)3qi49B+&JM@3ro?l?U&3Dm~Li9C5=o|m|5' );
define( 'AUTH_SALT',         'G{8.YW|KrEjmW9d?aof)Wn5|;iqmxQ8R[r{V_GJHSkM<E]`@A28V55Ba}f6ze/tL' );
define( 'SECURE_AUTH_SALT',  'q?)glP(Rb} h*_DNnlT/k@CajbylmOKwU=%~^~91=C%6f%~)<z ELSgZ{y*Vlp!(' );
define( 'LOGGED_IN_SALT',    'HINiG1BwB.^ZG9vS<)A+bQ$R]77i8,r{$.K&@2R#;NEBh:87$%Ej>@W#< ?euH!L' );
define( 'NONCE_SALT',        'R|0N>hRbA1yf,7WqI4ew.%]@2ae,[*,~(2=f)U*$C&R/NV+c.#l{FuD6;B~(ecZ5' );
define( 'WP_CACHE_KEY_SALT', 'o>?w 2UDY^z4nutn1I9)le<=C5I%e$:]eD^/nN!^A q-sC6^=Q(Jg-gvI&W0<j)?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
