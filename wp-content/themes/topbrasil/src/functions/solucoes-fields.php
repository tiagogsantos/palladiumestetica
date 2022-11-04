<?php

add_action( 'rwmb_meta_boxes', 'solucoes_meta_boxes' );

function solucoes_meta_boxes( $meta_boxes )
{
	$prefix = 'solucoes';

	$meta_boxes[] = array(
		'id'     => 'solucoes',
		'title'  => __( 'vantagens e assistências personalizadas:', $prefix ),
		'post_types' => 'solucoes',

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