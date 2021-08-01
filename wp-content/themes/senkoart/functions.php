<?php

/**
 * senkoart functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package senkoart
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

function load_custom_wp_admin_style()
{
	wp_register_style('custom-admin-style', get_template_directory_uri() . '/css/editor.css', false, '1.0.0');
	wp_enqueue_style('custom-admin-style');
}

add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

function get_theme_options()
{
	global $wpdb;
	$theme_options_db = $wpdb->get_results("SELECT * FROM `wp_options` WHERE `option_name` LIKE '%_crb%'");
	$theme_options = array();
	foreach ($theme_options_db as $value) {
		$theme_options[str_replace('_crb_', '', $value->option_name)] = $value->option_value;
	}
	return $theme_options;
}

add_action('rest_api_init', function () {
	register_rest_route('custom-fields/v1/custom-fields/', 'theme_options', [
		'methods' => 'GET',
		'callback' => 'get_theme_options',
	]);
});

add_action('rest_api_init', function () {
	foreach (get_post_types(array('show_in_rest' => true), 'objects') as $post_type) {
		if ('post' === $post_type->name || $post_type->has_archive) {
			add_filter("rest_prepare_{$post_type->name}", function ($response) {
				$type      = $response->data['type'];
				$types_url = rest_url("wp/v2/types/$type");

				$response->add_links(
					array(
						'type' => array(
							'href'       => $types_url,
							'embeddable' => true,
						),
					)
				);

				return $response;
			});
		}
	}
});

require get_template_directory() . '/includes/theme-setup.php';
require get_template_directory() . '/includes/menus.php';
require get_template_directory() . '/includes/post-types.php';
require get_template_directory() . '/includes/taxonomies.php';

require __DIR__ . '/includes/carbon-fields/init.php';
