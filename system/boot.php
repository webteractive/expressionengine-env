<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(__DIR__ . '/../vendor/autoload.php');
(\Dotenv\Dotenv::create(__DIR__ . '/../'))->load();

/**
 * Add `env` helper method, this method will enhance
 * the PHP's getenv method.
 */
if (! function_exists('env')) {
	function env($key, $default = null) {
		$value = getenv($key);
		
		if ($value === false) {
			return $default;
		}

		switch (strtolower($value)) {
			case 'true':
			case '(true)':
				return true;
			case 'false':
			case '(false)':
				return false;
			case 'empty':
			case '(empty)':
				return '';
			case 'null':
			case '(null)':
				return;
		}
		return $value;
	}
}

// EOF