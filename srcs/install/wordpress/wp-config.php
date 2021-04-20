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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'hesayah' );

/** MySQL database password */
define( 'DB_PASSWORD', 'takotsubo' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'k/Kt7DjQcA|y1+Rnh6)/-WAp|l;Bb.xVV;`u~eU5>.-0:1eB]Bea[xIo8#SLZ+W$');
define('SECURE_AUTH_KEY',  'UlXXQS--Cr>~s*]Wb>9pD>|+(CD*wg)M b543mw39cz~rwFG_~Lkaj2Qr{(RV-$`');
define('LOGGED_IN_KEY',    'S<YA&!+!0P|#)Kffwsd<&<TC.r*rr.eEMJ)a2_[~dQ]ykO-xzwrgW|h<Dk9.XM|c');
define('NONCE_KEY',        'bKunRFix2+9GfBO{grfl<w3}u-IqHnCgFJLPk+|JsiO@{8K({+$+hm!xdGXRzh]s');
define('AUTH_SALT',        'ybhc47|&b?=BtgP+KpTG]mv*1c#x6F4r8SXIKxz=cNsoEH0U$R+WMG?E-?nTJc_S');
define('SECURE_AUTH_SALT', '=|&Yu>~a@S?,ghK9xi4f}R4|F{.5uTtr)Eng%pv-r_R8qk|OhMnLru*!mGuT2f@h');
define('LOGGED_IN_SALT',   '#/&553-KT`j*a-;Hy,GBUpHY-XRJVf8dT^Nyz9Xe`|796y5Ej|P_wb;3|}|Y TEb');
define('NONCE_SALT',       '7uf5K`|h<tK35Z,pJ ~LmNEFRC KSt7^9|2S~D+quDp:.0YA]d%D=W1&C/<;_hE.');
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
