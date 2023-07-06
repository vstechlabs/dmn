<?php
# Database Configuration
define( 'DB_NAME', 'wp_mccauley31' );
define( 'DB_USER', 'mccauley31' );
define( 'DB_PASSWORD', 'OjpCqWLwxKeL7A5iFLKu' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'ehkux<]-*=-)`EUvhZ*Ps^{7j=hO^Ir,!W)|HPDq.n{B*I-rd)h_c4<K9^AK/)wM');
define('SECURE_AUTH_KEY',  'vpHYExe{0o?a{p0@{xj-((#U[H)?rPD*qRwt3yj0`z4(`*:ef4yvtF=.xl~v>Jia');
define('LOGGED_IN_KEY',    'G^eJ@ix[3%S;Rk1U3?g/&Ra|;N9)M7zr{=ler(A9<hd7b?n{JV8qOMy8/Bc}6eD3');
define('NONCE_KEY',        'gOb[lqGoDM/F,l${`}-K]g/pDQpKSx!f^{jwTEW D{D%+`a]>|sl+3vi;`O/J:c[');
define('AUTH_SALT',        'ce#T$wC2]$!C+[!|M!ReadT?@k3OS_Zs+RBLQG*j*y(33|ACLMp/zrvT|!:f|>{U');
define('SECURE_AUTH_SALT', 'wa}]/]9>kLc+YM?Oz0Y^j$n3CkcbN4v`S+{*wP*|-|r8mdU*-~I7cHf<2N+{ .D9');
define('LOGGED_IN_SALT',   'g#8errK!$c/yWB2d w/fUTbr$AtH>7>7@}|p*!RteK]H1*-&hG420I-|<p1anRxQ');
define('NONCE_SALT',       'Rw+ [0LR+Ax8gC!>jDAMf-/lDq8[Fe;yT=-J&;>o>^^2mYP,<@5:DRkV7:55.#|K');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'mccauley31' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '8261c366155ae15917af595ecacfcc5bf9d07677' );

define( 'WPE_CLUSTER_ID', '120370' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'mccauley31.wpengine.com', 1 => 'dallasmortgagenews.com', 2 => 'www.dallasmortgagenews.com', 3 => 'mccauley31.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-120370', );

$wpe_special_ips=array ( 0 => '35.184.147.243', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WPE_SFTP_ENDPOINT', '' );
define('WPLANG','');

# WP Engine ID


define('PWP_DOMAIN_CONFIG', 'dallasmortgagenews.com' );

# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');














