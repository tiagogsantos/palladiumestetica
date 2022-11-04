<?php 

/* Custom posts hoteis */
function hoteis_custom_post() {
    $labels = array(
        'all_items' => 'Hoteís',
        'name' => __('Hoteís Pacotes'),
        'singular_name' => __('Hotel Pacote'),
        'add_new' => __('Novo Hotel Pacote'),
        'add_new_item' => __('Adicionar novo Hotel Pacote'),
        'edit_item' => __('Editar Hotel Pacote'),
        'new_item' => __('Novo Hotel Pacote'),
        'view_item' => __('Ver Hotel Pacote'),
        'search_items' => __('Buscar Hotel Pacote'),
        'not_found' =>  __('Nenhum Hotel Pacote encontrado'),
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
        'menu_icon'     => 'dashicons-store',
    );
    register_post_type( 'hoteis', $args );
}
add_action( 'init', 'hoteis_custom_post' );

?>