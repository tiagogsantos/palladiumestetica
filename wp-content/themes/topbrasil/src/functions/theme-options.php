<?php



$theme_options = array(

	'page_title' => 'Opções do Tema',

	'menu_title' => 'Opções do Tema',

	'menu_slug' => '',

	'capability' => 'edit_posts',

	'position' => 1,

	'parent_slug' => '',

	'icon_url' => false,

	'post_id' => 'theme-options',

	'autoload' => false,



);



if( function_exists('acf_add_options_page') ) {

	acf_add_options_page($theme_options);

}



$theme_options = array(

	'page_title' => 'Edição por ID',

	'menu_title' => 'Edição por ID',

	'menu_slug' => '',

	'capability' => 'read',

	'position' => 2,

	'parent_slug' => '',

	'icon_url' => false,

	'post_id' => 'theme-options',

	'autoload' => false,



);



if( function_exists('acf_add_options_page') ) {

	acf_add_options_page($theme_options);

}

?>