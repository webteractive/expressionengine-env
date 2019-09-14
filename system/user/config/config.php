<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

require_once(__DIR__ . '/../../boot.php');

global $assign_to_config;
if(! isset($assign_to_config['global_vars']))
$assign_to_config['global_vars'] = [];

$config['debug'] = env('ERROR_VISIBILITY', '1');
$assign_to_config['global_vars']['env'] = $config['env'] = env('ENV', 'production');

$config['base_url'] = env('BASE_URL');
$config['base_path'] = env('BASE_PATH');
$config['site_index'] = env('SITE_INDEX', '');
$config['index_page'] = env('SITE_INDEX', '');
$config['cp_url'] = env('CP_URL', '{base_url}/admin.php');

$config['mix_manifest'] = env('MIX_MANIFEST', '{base_path}/public/mix-manifest.json');

$config['is_system_on'] = env('ONLINE', 'y');
$config['pw_min_len'] = env('PASSWORD_LENGTH', '8');

$config['enable_devlog_alerts'] = env('ENABLE_DEV_LOG_ALERTS', 'n');

$config['cache_driver'] = env('CACHE_DRIVER', 'memcached');

$config['show_ee_news'] = env('SHOW_EE_NEWS', 'n');
$config['share_analytics'] = env('SHARE_ANALYTICS', 'n');

// Database
$config['database'] = [
	'expressionengine' => [
		'hostname' => env('DB_HOST', 'localhost'),
		'database' => env('DB_NAME', 'user'),
		'username' => env('DB_USER', 'root'),
		'password' => env('DB_PASSWORD', 'secret'),
		'dbprefix' => env('DB_PREFIX', 'exp_'),
		'char_set' => env('DB_CHARSET', 'utf8mb4'),
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => env('DB_PORT', ''),
	],
];

$config['enable_hit_tracking'] = env('ENABLE_HIT_TRACKING', 'n');
$config['dynamic_tracking_disabling'] = env('DYNAMIC_TRACKING_DISABLING', '');
$config['enable_entry_view_tracking'] = env('ENABLE_ENTRY_VIEW_TRACKING', 'n');
$config['enable_online_user_tracking'] = env('ENABLE_ONLINE_USER_TRACKING', 'n');

$config['cookie_secure'] = env('COOKIE_SECURE', 'n');
$config['cookie_prefix'] = env('COOKIE_PREFIX', 'ee5');
$config['force_redirect'] = env('FORCE_REDIRECT', 'n');
$config['require_cookie_consent'] = env('REQUIRE_COOKIE_CONSENT', 'n');

$config['app_version'] = '5.2.6';

$config['multiple_sites_enabled'] = 'n';

$config['encryption_key'] = 'a3a0f3f12774c40b9a1c6f09afa1b6b57aff33a4';
$config['session_crypt_key'] = '1da800f081ec06feb9f57a831d48c841315139ce';

$config['use_newrelic'] = 'y';
$config['newrelic_include_version_number'] = 'y';

$config['site_url'] = '{base_url}';

$config['theme_folder_url'] = '{base_url}/themes/';
$config['theme_folder_path'] = '{base_path}/public/themes/';

$config['avatar_url'] = '{base_url}/images/avatars';
$config['emoticon_url'] = '{base_url}/images/smileys/';
$config['avatar_path'] = '{base_path}/public/images/avatars/';

$config['captcha_url'] = '{base_url}/images/captchas/';
$config['captcha_path'] = '{base_path}/public/images/captchas/';

$config['sig_img_url'] = '{base_url}/images/signature_attachments/';
$config['sig_img_path'] = '{base_path}/public/images/signature_attachments/';

$config['prv_msg_upload_url'] = '{base_url}/images/pm_attachments';
$config['prv_msg_upload_path'] = '{base_path}/public/images/pm_attachments/';


$config['redis'] = [
	'host' => env('REDIS_HOST', '127.0.0.1'),
  'password' => env('REDIS_PASSWORD', NULL),
  'port' => env('REDIS_PORT', 6379),
  'timeout' => env('REDIS_TIMEOUT', 0)
];

// EOF