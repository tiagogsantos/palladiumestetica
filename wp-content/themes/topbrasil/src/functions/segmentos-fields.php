<?php

add_action( 'rwmb_meta_boxes', 'segmentos_meta_boxes' );

function segmentos_meta_boxes( $meta_boxes )
{
	$prefix = 'segmentos';

	$meta_boxes[] = array(
		'id'     => 'solucoes',
		'title'  => __( 'Diferenciais Sascar', $prefix ),
		'post_types' => 'segmentos',

		'fields' => array(
      // WYSIWYG/RICH TEXT EDITOR
			array(
				//'name'    => esc_html__( 'WYSIWYG / Rich Text Editor', $prefix ),
				'id'      => "{$prefix}_wysiwyg",
				'type'    => 'wysiwyg',

				'raw'     => false,
				//'std'     => esc_html__( 'WYSIWYG default value', $prefix ),

				'options' => array(
					'textarea_rows' => 8,
					'teeny'         => true,
					'media_buttons' => true,
				),
			),
		)
	);

	return $meta_boxes;
}

/*
 * Areas de Atuação
 */


add_action( 'rwmb_meta_boxes', 'areas_de_atuacao_meta_boxes' );

function areas_de_atuacao_meta_boxes( $meta_boxes )
{
	$prefix = 'areas_de_atuacao';

	$meta_boxes[] = array(
		'id'     => 'areas_de_atuacao_solucoes',
		'title'  => __( 'Diferenciais Sascar', $prefix ),
		'post_types' => 'areas-de-atuacao',

		'fields' => array(
     // WYSIWYG/RICH TEXT EDITOR
			array(
				//'name'    => esc_html__( 'WYSIWYG / Rich Text Editor', $prefix ),
				'id'      => "{$prefix}_wysiwyg",
				'type'    => 'wysiwyg',

				'raw'     => false,
				//'std'     => esc_html__( 'WYSIWYG default value', $prefix ),

				'options' => array(
					'textarea_rows' => 8,
					'teeny'         => true,
					'media_buttons' => true,
				),
			),
		)
	);

	return $meta_boxes;
}
?>