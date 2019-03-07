<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(__DIR__ . '/../../boot.php');

$config['debug'] = env('DEBUG', '2');
$config['is_system_on'] = env('ONLINE', 'y');
$config['show_ee_news'] = env('SHOW_EE_NEWS', 'n');
$config['multiple_sites_enabled'] = env('MULTIPLE_SITES_ENABLED', 'n');

$config['base_url'] = env('BASE_URL', 'http://eeenv.wip/');
$config['cp_url'] = env('CP_URL', '{base_url}/admin.php');
$config['base_path'] = env('BASE_PATH', '/Users/hadefication/code/eeenv/');

$config['use_newrelic'] = 'y';
$config['newrelic_app_name'] = 'Awesome App';
$config['newrelic_include_version_number'] = 'y';

$config['site_404'] = 'site/404';
$config['site_index'] = env('SITE_INDEX', '');
$config['site_url'] = '{base_url}';

$config['template'] = 'index';
$config['template_group'] = 'about';

$config['theme_folder_url'] = '{base_url}/themes/';
$config['theme_folder_path'] = '{base_path}/themes/';

$config['app_version'] = '5.1.3';
$config['encryption_key'] = '008ee2cd53fa33d065fee097a40279152453d815';
$config['session_crypt_key'] = '63c5e2e453977e9e5142b7c580f4aa5cb1314bfd';

// Database
$config['database'] = [
	'expressionengine' => [
		'hostname' => env('DB_HOST', 'localhost'),
		'database' => env('DB_NAME', 'freshee'),
		'username' => env('DB_USER', 'root'),
		'password' => env('DB_PASSWORD', 'secret'),
		'dbprefix' => env('DB_TABLE_PREFIX', 'exp_'),
		'char_set' => env('DB_CHARSET', 'utf8mb4'),
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port' => env('DB_PORT', '')
	],
];

$config['share_analytics'] = 'y';

// Images: Avatar
$config['enable_avatars'] = 'y';
$config['avatar_max_kb'] = '200';
$config['avatar_max_width'] = '120';
$config['avatar_max_height'] = '120';
$config['avatar_url'] = '{base_url}/images/avatars';
$config['avatar_path'] = '{base_path}/images/avatars/';

// Images: Captcha
$config['captcha_font'] = 'n';
$config['captcha_rand'] = 'n';
$config['captcha_require_members'] = 'y';
$config['captcha_path'] = '{base_path}/captchas/';
$config['captcha_url'] = '{base_url}/images/captchas/';

// Images: Private Messages
$config['prv_msg_waiting_period'] = '4';
$config['prv_msg_throttling_period'] = '60';
$config['prv_msg_upload_path'] = '{base_path}/images/pm_attachments/';

// Images: Signatures
$config['sig_img_max_kb'] = '50';
$config['sig_maxlength'] = '500';
$config['sig_img_max_width'] = '150';
$config['sig_img_max_height'] = '150';
$config['sig_allow_img_upload'] = 'y';
$config['sig_allow_img_hotlink'] = 'n';
$config['sig_img_url'] = '{base_url}/images/signature_attachments/';
$config['sig_img_path'] = '{base_path}/images/signature_attachments/';

$config['allow_avatar_uploads'] = 'y';
$config['allow_dictionary_pw'] = 'y';
$config['allow_extensions'] = 'y';
$config['allow_member_localization'] = 'y';
$config['allow_member_registration'] = 'y';
$config['allow_multi_logins'] = 'y';
$config['allow_pending_login'] = 'y';
$config['allow_signatures'] = 'y';
$config['allow_textarea_tabs'] = 'y';
$config['allow_username_change'] = 'y';

$config['auto_assign_cat_parents'] = 'y';

$config['autosave_interval_seconds'] = '30';
$config['autosave_prune_hours'] = '4';

$config['ban_action'] = 'message';
$config['ban_destination'] = 'http://www.example.com';
$config['ban_message'] = 'This site is currently unavailable.';

$config['banish_masked_ips'] = 'y';
$config['banishment_message'] = 'You have exceeded the allowed page load frequency.';
$config['banishment_type'] = 'message';
$config['banishment_url'] = 'http://www.yahoo.com';

$config['banned_emails'] = 'user@example.com|johndoe@example.com|*@spammydomain.com';
$config['banned_ips'] = '123.456.789.1|123.321.*';
$config['banned_screen_names'] = 'Garfield|Snoopy|Hobbes';
$config['banned_usernames'] = 'garfield|snoopy|hobbes';

$config['cache_driver'] = 'memcached';
$config['cache_driver_backup'] = 'file';

$config['censor_replacement'] = 'tisk tisk';
$config['censored_words'] = 'dagnabbit|consarnit|golly gee willikers';

$config['charset'] = 'UTF-8';

$config['code_block_pre'] = '<div class="codeblock">';
$config['code_block_post'] = '</div>';

$config['code_block_pre'] = '<div class="codeblock">';
$config['code_block_post'] = '</div>';

$config['codemirror_height'] = '18em';

$config['comment_word_censoring'] = 'y';
$config['comment_edit_time_limit'] = '120';
$config['comment_moderation_override'] = 'y';

$config['date_format'] = '%F %d %Y';

$config['default_member_group'] = '6';
$config['default_site_timezone'] = 'America/Los_Angeles';

$config['deft_lang'] = 'french';

$config['deny_duplicate_data'] = 'n';

$config['disable_tag_caching'] = 'y';
$config['disable_all_tracking'] = 'y';
$config['disable_csrf_protection'] = 'y';

$config['dynamic_tracking_disabling'] = '350';

$config['email_crlf'] = "\r\n";
$config['email_batchmode'] = 'y';
$config['email_newline'] = "\r\n";
$config['email_charset'] = 'utf-8';
$config['email_batch_size'] = '300';
$config['email_smtp_crypto'] = 'tls';
$config['email_console_timelock'] = '300';

$config['emoticon_url'] = '{base_url}/images/smileys/';

$config['enable_censoring'] = 'y';
$config['enable_emoticons'] = 'y';
$config['enable_search_log'] = 'n';
$config['enable_throttling'] = 'y';
$config['enable_sql_caching'] = 'n';
$config['enable_hit_tracking'] = 'y';
$config['enable_devlog_alerts'] = 'y';
$config['enable_template_routes'] = 'y';
$config['enable_entry_view_tracking'] = 'y';
$config['enable_online_user_tracking'] = 'y';

$config['encode_removed_text'] = 'Encoded emails not allowed';

$config['expire_session_on_browser_close'] = 'y';

$config['filename_increment'] = 'y';

$config['force_query_string'] = 'y';

$config['force_redirect'] = 'y';

$config['gmail_duplication_prevention'] = 'n';

$config['gzip_output'] = 'y';

$config['hidden_template_indicator'] = '.';

$config['hidden_template_404'] = 'y';

$config['include_seconds'] = 'y';

$config['ip2nation'] = 'n';

$config['lockout_time'] = '30';

$config['log_date_format'] = 'Y-m-d H:i:s';
$config['log_email_console_msgs'] = 'n';
$config['log_referrers'] = 'n';
$config['log_threshold'] = '1';

$config['mail_format'] = 'plain';
$config['mail_protocol'] = 'smtp';

$config['max_logged_searches'] = '500';
$config['max_page_loads'] = '10';
$config['max_tmpl_revisions'] = '10';
$config['max_url_segments'] = '12';

$config['mbr_notification_emails'] = 'joe@example.com, jane@example.com';

$config['member_theme'] = 'default';
$config['memberlist_order_by'] = 'total_posts';

$config['mime_whitelist_additions'] = 'image/vnd.adobe.photoshop';
$config['mime_whitelist_member_exception'] = '3, 14, 83';
$config['mime_whitelist_member_group_exception'] = '2, 5';

$config['memberlist_row_limit'] = '20';
$config['memberlist_sort_order'] = 'desc';

$config['multi_login_sites'] = 'https://example.com|http://different_example.com';
$config['multiple_sites_enabled'] = 'y';

$config['name_of_dictionary_file'] = 'dictionary.txt';

$config['new_member_notification'] = 'n';

$config['new_posts_clear_caches'] = 'n';

$config['new_version_check'] = 'n';

$config['password_lockout'] = 'n';
$config['password_lockout_interval'] = '2.5';

$config['popup_link'] = 'y';
$config['profile_trigger'] = 'accounts';

$config['proxy_ips'] = '10.0.1.25, 10.0.1.26';

$config['publish_page_title_focus'] = 'n';

$config['pw_min_len'] = '8';

$config['recount_batch_total'] = '200';

$config['redirect_method'] = 'redirect';
$config['redirect_submitted_links'] = 'y';

$config['relaxed_track_views'] = 'y';

$config['remove_close_all_button'] = 'y';
$config['remove_unparsed_vars'] = 'y';

$config['req_mbr_activation'] = 'none';

$config['require_ip_for_login'] = 'n';
$config['require_ip_for_posting'] = 'n';
$config['require_secure_passwords'] = 'n';
$config['require_terms_of_service'] = 'n';

$config['reserved_category_word'] = 'category';

$config['rte_default_toolset_id'] = '2';
$config['rte_enabled'] = 'y';

$config['save_tmpl_files'] = 'y';
$config['save_tmpl_revisions'] = 'y';

$config['send_headers'] = 'n';

$config['show_profiler'] = 'y';

$config['smart_static_parsing'] = 'n';

$config['smtp_password'] = 'ic6XpWJnv4ip';
$config['smtp_port'] = '2525';
$config['smtp_server'] = 'mail.example.com';
$config['smtp_username'] = 'joe@example.com';

$config['spellcheck_language_code'] = 'en';

$config['strict_urls'] = 'n';

$config['time_format'] = '24';

$config['max_page_loads'] = '10';

$config['un_min_len'] = '5';

$config['uri_protocol'] = 'PATH_INFO';

$config['use_category_name'] = 'y';
$config['use_forum_url'] = 'y';

$config['webmaster_email'] = 'hello@example.com';
$config['webmaster_name'] = 'Your Favorite Website';

$config['website_session_type'] = 'c';

$config['word_separator'] = 'dash';

$config['xml_lang'] = 'en';

$config['xss_clean_member_exception'] = '3, 14, 83';
$config['xss_clean_member_group_exception'] = '2, 5';

// EOF