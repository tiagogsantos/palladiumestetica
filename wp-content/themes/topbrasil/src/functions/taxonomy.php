<?php

/*
 * Custom Taxonomy Categorias de Segmento
 */

function my_taxonomies_cat_seg() {
    $labels = array(
     'name' => __( 'Categoria'),
     'singular_name' => __( 'Categoria'),
     'search_items' => __( 'Buscar' ),
     'popular_items' => __( 'Mais usadas' ),
     'all_items' => __( 'Todas as Categorias' ),
     'parent_item' => null,
     'parent_item_colon' => null,
     'edit_item' => __( 'Add Nova' ),
     'update_item' => __( 'Atualizar' ),
     'add_new_item' => __( 'Adicionar nova Categoria' ),
     'new_item_name' => __( 'Nova' )
     );
    $args = array(
        'labels' => $labels,
        'hierarchical'  => true,
        'public'        => true,
        'query_var'     => 'categoria',
        //'rewrite'       =>  array('slug' => 'categoria', 'with_front' => false),
        '_builtin'      => false,
    );
    register_taxonomy( 'categoria', array('segmentos','solucoes','areas-de-atuacao'), $args );
}
add_action( 'init', 'my_taxonomies_cat_seg', 0 );
?>