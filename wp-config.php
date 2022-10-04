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
define( 'DB_USER', 'hos11382' );

/** MySQL database password */
define( 'DB_PASSWORD', '11382' );

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
define( 'AUTH_KEY',         '=fZY)Q;JfZjH5*z)<zN!O6W%o-WXfU%4A%OZKI&/LI`2)FEEk$P{o6pV^@,VK,E0' );
define( 'SECURE_AUTH_KEY',  'V.K^]m41EqPceS8t7<0cU_T2JEbm|BIZdKB=;8X[(l.pT=J8SG4e(<iJaF:~&@[e' );
define( 'LOGGED_IN_KEY',    '8G{fUkYq-*1zbLt*=?Bmp4nP1 iRtjZw|&Ev{yiPB9H,l|AvL+7[KD^k`9Jz-#f:' );
define( 'NONCE_KEY',        '+#,NF5})YEZ:SLo)kbpo[-J^q]Z#W|O={0uUtUrBkoY#JOyfOijI(S(CtT{+|gr=' );
define( 'AUTH_SALT',        '7$w7D(BOz~|*6ie{J8<;j2f[N@->kY1V9B[S;:Pwof_!rTl4E[:WFo!Er/49-VWS' );
define( 'SECURE_AUTH_SALT', '8]o8Y_XFbV.N7IlF_m5DBz<PF6pC_bL;WtIqb2&[Sl2jhN,OrC%@K%s`$oA?I{wg' );
define( 'LOGGED_IN_SALT',   'y=0COOzx4^$Mp<.|Q{`-L=WD;NX8k@]+jKQ&;A-!Ibkm(f}&Q&/&rm<q*xk(mFjC' );
define( 'NONCE_SALT',       'EoG{dptbf|t;{(5ym@J?Z}+qteOP*9pmdl5[tm%~]OgX,ikfMy8; m8Y>vmq8j}~' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );






