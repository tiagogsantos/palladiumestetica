<?php



/* Custom posts Passagens Aéreas */

function passagens_aereas_custom_post() {

    $labels = array(

        'name' => __('Passagens Aéreas'),

        'singular_name' => __('Passagem Aérea'),

        'add_new' => __('Nova Passagem Aérea'),

        'add_new_item' => __('Adicionar nova Passagem Aérea'),

        'edit_item' => __('Editar Passagem Aérea'),

        'new_item' => __('Nova Passagem Aérea'),

        'view_item' => __('Ver Passagem Aérea'),

        'search_items' => __('Buscar Passagem Aérea'),

        'not_found' =>  __('Nenhuma Passagem Aérea encontrada'),

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

        'menu_icon'     => 'dashicons-tickets-alt',

    );

    register_post_type( 'passagens-aereas', $args );

}

add_action( 'init', 'passagens_aereas_custom_post' );

?>