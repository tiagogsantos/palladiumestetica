<?php

/*
 * Post Type Banners
 */
function my_custom_post_banner() {
    $labels = array(
        'name' => __('Banners'),
        'singular_name' => __('Banner'),
        'add_new' => __('Novo Banner'),
        'add_new_item' => __('Adicionar novo Banner'),
        'edit_item' => __('Editar Banner'),
        'new_item' => __('Novo Banner'),
        'view_item' => __('Ver Banner'),
        'search_items' => __('Buscar Banner'),
        'not_found' =>  __('Nenhum Banner encontrado'),
        'not_found_in_trash' => __('Nada encontrado na Lixeira'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => '',
        'supports'      => array( 'title', 'thumbnail'),
        'has_archive'   => true,
        'hierarchical'  => true,
        'query_var'     => true,
        'menu_icon'   	=> 'dashicons-slides',
    );
    register_post_type( 'banner', $args );
}
add_action( 'init', 'my_custom_post_banner' );

/*
 * Post Type Soluções
 */
function my_custom_post_solucoes() {
    $labels = array(
        'name' => __('Soluções'),
        'singular_name' => __('Solução'),
        'add_new' => __('Nova Solução'),
        'add_new_item' => __('Adicionar nova Solução'),
        'edit_item' => __('Editar Solução'),
        'new_item' => __('Nova Solução'),
        'view_item' => __('Ver Solução'),
        'search_items' => __('Buscar Solução'),
        'not_found' =>  __('Nenhuma Solução encontrada'),
        'not_found_in_trash' => __('Nada encontrado na Lixeira'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => '',
        'supports'      => array( 'title', 'thumbnail', 'editor', 'excerpt'),
        'has_archive'   => true,
        'hierarchical'  => true,
        'query_var'     => true,
        'menu_icon'   	=> 'dashicons-list-view',
        'rewrite'       => array('slug' => 'solucoes','with_front' => false),
    );
    register_post_type( 'solucoes', $args );
}
add_action( 'init', 'my_custom_post_solucoes' );

/*
 * Post Type Segmentos
 */
function my_custom_post_segmentos() {
    $labels = array(
        'name' => __('Segmentos'),
        'singular_name' => __('Segmento'),
        'add_new' => __('Novo Segmento'),
        'add_new_item' => __('Adicionar novo Segmento'),
        'edit_item' => __('Editar Segmento'),
        'new_item' => __('Novo Segmento'),
        'view_item' => __('Ver Segmento'),
        'search_items' => __('Buscar Segmento'),
        'not_found' =>  __('Nenhum Segmento encontrado'),
        'not_found_in_trash' => __('Nada encontrado na Lixeira'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => '',
        'supports'      => array( 'title', 'thumbnail', 'editor'),
        'has_archive'   => true,
        'hierarchical'  => true,
        'query_var'     => true,
        'menu_icon'   	=> 'dashicons-clipboard',
        'rewrite'       => array('slug' => 'segmentos','with_front' => false),
    );
    register_post_type( 'segmentos', $args );
}
//add_action( 'init', 'my_custom_post_segmentos' );

/*
 * Post Type Área de Atuação
 */
function my_custom_post_areas_de_atuacao() {
    $labels = array(
        'name' => __('Áreas de Atuação'),
        'singular_name' => __('Área de Atuação'),
        'add_new' => __('Nova Área de Atuação'),
        'add_new_item' => __('Adicionar nova Área de Atuação'),
        'edit_item' => __('Editar Área de Atuação'),
        'new_item' => __('Nova Área de Atuação'),
        'view_item' => __('Ver Área de Atuação'),
        'search_items' => __('Buscar Área de Atuação'),
        'not_found' =>  __('Nenhuma Área de Atuação encontrada'),
        'not_found_in_trash' => __('Nada encontrado na Lixeira'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => '',
        'supports'      => array( 'title', 'thumbnail', 'editor', 'excerpt'),
        'has_archive'   => true,
        'hierarchical'  => true,
        'query_var'     => true,
        'menu_icon'     => 'dashicons-clipboard',
        'rewrite'       => array('slug' => 'areas-de-atuacao','with_front' => false),
    );
    register_post_type( 'areas-de-atuacao', $args );
}
add_action( 'init', 'my_custom_post_areas_de_atuacao' );

?>