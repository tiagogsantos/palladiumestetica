<?php

/* Custom posts Depoimentos */
function depoimentos_custom_post() {
    $labels = array(
        'name' => __('Depoimentos'),
        'singular_name' => __('Depoimento'),
        'add_new' => __('Novo Depoimento'),
        'add_new_item' => __('Adicionar novo Depoimento'),
        'edit_item' => __('Editar Depoimento'),
        'new_item' => __('Novo Depoimento'),
        'view_item' => __('Ver Depoimento'),
        'search_items' => __('Buscar Depoimento'),
        'not_found' =>  __('Nenhum Depoimento encontrado'),
        'not_found_in_trash' => __('Nada encontrado na Lixeira'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => '',
        'supports'      => array( 'title', 'editor'),
        'has_archive'   => true,
        'hierarchical'  => true,
        'query_var'     => true,
        'menu_icon'     => 'dashicons-admin-comments',
    );
    register_post_type( 'depoimentos', $args );
}
add_action( 'init', 'depoimentos_custom_post' );

?>