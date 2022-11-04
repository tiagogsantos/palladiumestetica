<?php

/* Taxonomy Destinos */

function destinos_taxonomy() {
    $labels = array(
     'name' => __( 'Tópicos'),
     'singular_name' => __( 'Tópicos'),
     'search_items' => __( 'Buscar' ),
     'popular_items' => __( 'Mais usadas' ),
     'all_items' => __( 'Todos os Tópicos' ),
     'parent_item' => null,
     'parent_item_colon' => null,
     'edit_item' => __( 'Add Novo' ),
     'update_item' => __( 'Atualizar' ),
     'add_new_item' => __( 'Adicionar novo Tópico' ),
     'new_item_name' => __( 'Novo' )
     );
    $args = array(
        'labels' => $labels,
        'hierarchical'  => true,
        'public'        => true,
        'query_var'     => 'destinos',
        'rewrite'       =>  array('slug' => 'destinos', 'with_front' => true),
        '_builtin'      => false,
    );
    register_taxonomy( 'destinos', array('pacotes'), $args );
}
add_action( 'init', 'destinos_taxonomy', 0 );

?>