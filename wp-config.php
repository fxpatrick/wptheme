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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '120591');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.a_}H&.MG}2HSE>[9|d0&800gt$J$#8wTNJi+>/DxnNaOS*9=|/ZCBi,s55*({vu');
define('SECURE_AUTH_KEY',  'l+c,mL7ZL0q~6%Xaul~+J[gGPi8U{{hh2K<km-+#)5D.DYv1_Hntf!N@U1N:CYss');
define('LOGGED_IN_KEY',    'w8fs!st[?ve|njp~zI4|5fni1{x$mh%=+4BAzglEX4J{*K%JXTpt}LS-:+9MZf::');
define('NONCE_KEY',        'b21C%J{AcD+..gyi%=:GMEmRv~HQvIxs#N7e}e>^pHA33XvKR/MUO/|<G,{$sf<y');
define('AUTH_SALT',        'R93~D}q>`1~vc@1;r~|2<1e4)~#8GV/6Epr}*u #dh~k6P4UFgQTnz`CBG8UCon*');
define('SECURE_AUTH_SALT', '#wyGFSnt|_JcQ4O32~!n]oPgUcUt/Z4VBvoUNq[E2Lri^lXeWFEDm/3vbS.;V@BQ');
define('LOGGED_IN_SALT',   'B*Nz=$|w<-Tml^h<N$3/1DNcaZ!rYG+8+1Q,}M+w^Mg] HUS}h}h?K#cy|)NJ].:');
define('NONCE_SALT',       'FL0w0L%X{x8}T464*1EVzP59V8fw`~tXo7UhW26.oYcs_E2y<uU +/(pZXIDfDu1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
