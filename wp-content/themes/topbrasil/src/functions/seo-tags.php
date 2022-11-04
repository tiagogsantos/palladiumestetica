<?php

$theme_options = array(
	'page_title' => 'SEO Tags',
	'menu_title' => 'SEO Tags',
	'menu_slug' => '',
	'capability' => 'edit_posts',
	'position' => 2,
	'parent_slug' => '',
	'icon_url' => false,
	'post_id' => 'seo-tags',
	'autoload' => false,

);

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page($theme_options);
}


?>