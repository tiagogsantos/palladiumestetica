<?php

/* Custom posts Facebook */
function facebook_custom_post() {
    $labels = array(
        'name' => __('Facebook'),
        'singular_name' => __('Facebook'),
        'add_new' => __('Novo Facebook'),
        'add_new_item' => __('Adicionar novo Facebook'),
        'edit_item' => __('Editar Facebook'),
        'new_item' => __('Novo Facebook'),
        'view_item' => __('Ver Facebook'),
        'search_items' => __('Buscar Facebook'),
        'not_found' =>  __('Nenhum Facebook encontrado'),
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
    register_post_type( 'facebook', $args );
}
add_action( 'init', 'facebook_custom_post' );

?>