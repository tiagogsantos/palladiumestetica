<?php 

/* Custom posts mais_pacotes */
function mais_pacotes_custom_post() {
    $labels = array(
        'all_items' => 'Banners',
        'name' => __('Banners Pacotes'),
        'singular_name' => __('Banner Pacote'),
        'add_new' => __('Novo Banner Pacote'),
        'add_new_item' => __('Adicionar novo Banner Pacote'),
        'edit_item' => __('Editar Banner Pacote'),
        'new_item' => __('Novo Banner Pacote'),
        'view_item' => __('Ver Banner Pacote'),
        'search_items' => __('Buscar Banner Pacote'),
        'not_found' =>  __('Nenhum Banner Pacote encontrado'),
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
        'menu_icon'     => 'dashicons-welcome-widgets-menus',
    );
    register_post_type( 'mais_pacotes', $args );
}
add_action( 'init', 'mais_pacotes_custom_post' );

?>