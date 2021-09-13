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
define( 'DB_NAME', 'wp_gitest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Admin@321' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'N!,(DI^lTyey{!*3PMJ+QE|sJ(LwBBhV.#Fd14r9tNf,l1igo?0H:)puXnktKw(F' );
define( 'SECURE_AUTH_KEY',   '-n6d~^Kd+N5}lo2i1_$]3[c!gNyq{2!3YWzCaW{mh0XtY,Wmr_9)|xN-]9r[t|(j' );
define( 'LOGGED_IN_KEY',     ';K+mPwqDfJ<jJAsSV{B}I|FoPSI.{32lrq[JpJX-O@v1|78C8|: XscQ:S|DoB.W' );
define( 'NONCE_KEY',         'c~|x::6C/RT^K|E1Av#j!5I&%MC~8a<O?[bVN=_/l-I|;OO3Kjuc7+4JlLe2X~{M' );
define( 'AUTH_SALT',         'yAI)l i@`[*pZSC*f)[Yq)E +HbZ7B#3P,r?UuWq%x(w/`Ns0xLY^b}{~mgn,o)0' );
define( 'SECURE_AUTH_SALT',  '}HzvoC;`t*r5@|P86B*n 1wRGq-#AyI2!o&zMzJ 4Kg)xTpc82 xb^yuoOEzcrr^' );
define( 'LOGGED_IN_SALT',    '~tPOpxt$fPC*D1e:Hs!6gfyc<]:;HHa4Y@X.HqLO~>^P=/=t$7<JV5;RLg.PV/zN' );
define( 'NONCE_SALT',        'M5ZPCX/9300jBV<>#=Gr-k<HiY!A)v@nfUXQFfIu!h4B.t2Ijp7mUm}m@m:VB.o7' );
define( 'WP_CACHE_KEY_SALT', 'A*< LQ}$An5zdF4#Yy6]|l$6q`0g71wfp- m1Fl,f;s;/Agjyc(a`h1+$/f=@jzP' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
