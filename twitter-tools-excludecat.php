<?php
/*
Plugin Name: Twitter Tools - Exclude Category 
Plugin URI: http://crowdfavorite.com/wordpress/ 
Description: Exclude posts in certain categories from being tweeted by Twitter Tools. 
Version: 1.0 
Author: Crowd Favorite
Author URI: http://crowdfavorite.com
*/

/*

TODO

admin setting to allow categories to be checked
store as serialized array in options
JS to check/uncheck all cats
return false on blog post tweet if post is in array

*/

// ini_set('display_errors', '1'); ini_set('error_reporting', E_ALL);

if (!defined('PLUGINDIR')) {
	define('PLUGINDIR','wp-content/plugins');
}

load_plugin_textdomain('twitter-tools-excludecat');

function aktt_excludecat_request_handler() {
	if (!empty($_POST['cf_action'])) {
		switch ($_POST['cf_action']) {
			case 'aktt_excludecat_update_settings':
				aktt_excludecat_save_settings();
				wp_redirect(trailingslashit(get_bloginfo('wpurl')).'wp-admin/options-general.php?page=twitter-tools.php&updated=true');
				die();
				break;
		}
	}
}
add_action('init', 'aktt_excludecat_request_handler');

function aktt_excludecat_do_blog_post_tweet($tweet, $post) {
	$cats = get_option('aktt_excludecats');
// see if this gets unserialized on it's own

	return $tweet;
}
add_filter('aktt_do_blog_post_tweet', 'aktt_excludecat_do_blog_post_tweet', 10, 2);

function aktt_excludecat_settings_form() {
	global $aktt_excludecat_settings;

	$cat_options = array();
	$categories = get_categories('hide_empty=0');
	foreach ($categories as $category) {
		$cat_options[$category->term_id] = htmlspecialchars($category->name);
	}
	$aktt_excludecat_settings['aktt_excludecat_cat']['options'] = $cat_options;

	print('
<div class="wrap">
	<h2>'.__('Exclude Categories for Twitter Tools', 'twitter-tools-excludecat').'</h2>
	<form id="aktt_excludecat_settings_form" name="aktt_excludecat_settings_form" action="'.get_bloginfo('wpurl').'/wp-admin/options-general.php" method="post">
		<input type="hidden" name="cf_action" value="aktt_excludecat_update_settings" />
		<fieldset class="options">
	');
	foreach ($aktt_excludecat_settings as $key => $config) {
		echo cf_settings_field($key, $config);
	}
	print('
		</fieldset>
		<p class="submit">
			<input type="submit" name="submit" value="'.__('Save Settings', 'twitter-tools-excludecat').'" />
		</p>
	</form>
</div>
	');
}

function aktt_excludecat_save_settings() {
	if (!current_user_can('manage_options')) {
		return;
	}

// TODO

	update_option($key, $value);
}

//a:21:{s:11:"plugin_name";s:34:"Twitter Tools - Exclude Categories";s:10:"plugin_uri";s:35:"http://crowdfavorite.com/wordpress/";s:18:"plugin_description";s:72:"Exclude posts in certain categories from being tweeted by Twitter Tools.";s:14:"plugin_version";s:3:"1.0";s:6:"prefix";s:15:"aktt_excludecat";s:12:"localization";s:24:"twitter-tools-excludecat";s:14:"settings_title";s:34:"Exclude Category for Twitter Tools";s:13:"settings_link";s:34:"Exclude Category for Twitter Tools";s:4:"init";b:0;s:7:"install";b:0;s:9:"post_edit";b:0;s:12:"comment_edit";b:0;s:6:"jquery";b:0;s:6:"wp_css";b:0;s:5:"wp_js";b:0;s:9:"admin_css";b:0;s:8:"admin_js";b:0;s:15:"request_handler";s:1:"1";s:6:"snoopy";b:0;s:11:"setting_cat";s:1:"1";s:14:"setting_author";b:0;}

?>