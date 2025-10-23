<?php
/**
 * The base configuration for WordPress
 */

// ** Database settings ** //
define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Authentication Unique Keys and Salts ** //
define( 'AUTH_KEY',          'I*[#2Dv-s G;]:bLBoW&7L1jvr$2xBno;:>.h:f2&GaqV.5z{`<LQvH,Z..?um`Q' );
define( 'SECURE_AUTH_KEY',   'epkTA1lJ,kCa%f^FLvK0c;Aqwdj?h4:~bJ7_+=&+?=][O 1V=1S}$tchdoec,dL@' );
define( 'LOGGED_IN_KEY',     ' J~Fq (Sk`h@>(%9YNxgAbQC.NWV]^IRd;w?h=XRS*!;1.~<: f72#<4rqiQK05r' );
define( 'NONCE_KEY',         '.$xc1NsHtrI4o(s-$c<]c~IzX_]2y1V*bA:|p9A^~?j>^;}z~wiDxWXY(}2ec_^V' );
define( 'AUTH_SALT',         'KNd{1|.T;tT71LXle*XkwL6];qP6d| ~pGOF!ielF@xdw%f-Y~kmP2U>@(2c;l q' );
define( 'SECURE_AUTH_SALT',  ':Xq@p?!Kh_jS+y_egTSEaPCWW<{.Gz7wO4n)l+ZFV)17+}AeW>}{ I!U8.Qb;=FI' );
define( 'LOGGED_IN_SALT',    '`zbgAmREiAk39<A)&~FSw7&bl-Xr-sSyqLsN0NfdF/eUt@^W.6GO`[jkr*h`4I)>' );
define( 'NONCE_SALT',        'A>U(IVYxVrKX.@J,N *T|gH 86d}?#-#E+S*?CJ<^q]J85/E^C0i1gM=YBhlY>VH' );
define( 'WP_CACHE_KEY_SALT', '#*B?Qwi?EYK;1-Mm`9xn2z6OFD}/D:`tPE}S_:@vhq`32,149gRjBv*4/6`EH*f]' );

$table_prefix = 'wp_';

// ** Debugging mode ** //
if ( ! defined( 'WP_DEBUG' ) ) {
    define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );

// ** PHP upload limits ** //
@ini_set( 'upload_max_filesize', '128M' );
@ini_set( 'post_max_size', '128M' );
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

// ** Absolute path to the WordPress directory ** //
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// ** Sets up WordPress vars and included files ** //
require_once ABSPATH . 'wp-settings.php';
