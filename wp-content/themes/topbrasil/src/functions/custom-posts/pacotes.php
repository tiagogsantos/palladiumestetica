<?php

/* Custom posts pacotes */
function pacotes_custom_post() {
    $labels = array(
        'all_items' => 'Produtos',
        'name' => __('Cadastros'),
        'singular_name' => __('Pacote'),
        'add_new' => __('Novo Produto'),
        'add_new_item' => __('Adicionar novo Produto'),
        'edit_item' => __('Editar Produto'),
        'new_item' => __('Novo Produto'),
        'view_item' => __('Ver Produto'),
        'search_items' => __('Buscar Produto'),
        'not_found' =>  __('Nenhum Produto encontrado'),
        'not_found_in_trash' => __('Nada encontrado na Lixeira'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => '',
        'supports'      => array( 'title'),
        'has_archive'   => true,
        'hierarchical'  => true,
        'query_var'     => true,
        'menu_icon'     => 'dashicons-admin-site',
    );
    register_post_type( 'pacotes', $args );
}
add_action( 'init', 'pacotes_custom_post' );

?>