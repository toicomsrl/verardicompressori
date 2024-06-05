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
define('DB_NAME', 'edevtoik_verardi');

/** MySQL database username */
define('DB_USER', 'edevtoik_verardi');

/** MySQL database password */
define('DB_PASSWORD', '!q9Jvo@MMzpH');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Disable display of errors and warnings
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

define('WP_DEBUG_LOG', true);

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'rwl6sED5DbA3w4~(5bJ4yd]v/5N9]Mg]MS9tfC6~zah*l7u6aEr!m5DDjPC&7_V2');
define('SECURE_AUTH_KEY', '!3|0_W]d[_)-m50i3A3cth69C362/-k0xT9ek#c7C&g+ca4i~&6L9hn1MlhM6qu0');
define('LOGGED_IN_KEY', 'y26Dy7|o|ZBF0d5&yMOQ)]9T293#DTqcrn)%8Z3%U!vA3o7Xh86NJ_miKKMcQ/EZ');
define('NONCE_KEY', ')05_47lm28*8EAMvtBr11Sz)b42D#o341So!+qhG]s%0-OFiq2W20C;;A%71#+/2');
define('AUTH_SALT', 'B6403B8+M662+tY*7|#41unQI2M935w0#c3|UHAL1KlZp(61_o!dgI&)4g2q27-B');
define('SECURE_AUTH_SALT', ']R&0+I7C1t2oUi1aaPjdG[w+Z-@!cpR8XPb1|MP+2!W]J9(1@5J21&Xg:m+n)5+h');
define('LOGGED_IN_SALT', 'oAe+%qHMm6R(%5fIJ56J1u9VC%L8UzA~f#FDJx7!6wj|:5Jo846u]b~%D)vov3#)');
define('NONCE_SALT', '1z~O8l*GM0E91+d699G8/~@*c@TIC828#gi|)tmjKpIkm1I9U)os0n3L@(11;W@W');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'KPBus_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
