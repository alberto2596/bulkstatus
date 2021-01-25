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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wwsGd6H7' );

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
define( 'AUTH_KEY',          '47xr/5kqqt+9axX7[78:^prrP=1!h~thk+Hp4`7tM_OVKr8wyV`D1<4Lh:^Bzj]c' );
define( 'SECURE_AUTH_KEY',   'l4ks/VuDleXV<1C;Hi0)dx~~@y6?bo_QBv$_aXU8Ef[w<~g_4G7QOtrR)>XD0xg1' );
define( 'LOGGED_IN_KEY',     '{{^ONr*#6v3UoR?IJkIK~Xp`8[2Lq!l>},%%>9..~n_vX073*w)pM8f&9lDsb?%X' );
define( 'NONCE_KEY',         '}vWYa>veN3Obm*y3Lx D%ih9M$9{{jo`{J`k7rt>uV@WMTIyJHzF&Oh0[@%6u2ci' );
define( 'AUTH_SALT',         'FM3#6?/i.|-!+GP$:R5?LCjC&@t]sxtR[k,|-G$87]C)sR6F`dB^?|U(A|X}9zYa' );
define( 'SECURE_AUTH_SALT',  '4fFw}H^C ]{:j4nNR|r.33h_m;u0~]+oZO6m69i`F2ZavCvBOSl/cM>9tfd9=s)$' );
define( 'LOGGED_IN_SALT',    '[JT`Bfb2R9Kvbh7.F!A4(N6LEL_IF21?^49KreOUC~4rX8i&3XZJX?l{(Eu!tPL&' );
define( 'NONCE_SALT',        'LD+Fo]K)EpS7YJsW,*G?kkN#{b0yn;CrMT!~$0G+m/e[o3L72--{X-huwdG<^:o-' );
define( 'WP_CACHE_KEY_SALT', '%J{qkfKp>ZV,)s%k WFwa=y[yt(IL29r|V23=Qs<7YxI#gkdu}CT1cv[/3HiWyqL' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
