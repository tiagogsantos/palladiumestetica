<?php

add_filter( 'rwmb_meta_boxes', 'quem_somos_register_meta_boxes' );

function quem_somos_register_meta_boxes( $meta_boxes )
{
	// Check before register meta boxes
	if ( ! rw_maybe_include() )
	{
		return $meta_boxes;
	}

  	$prefix = 'quem_somos';

  	$meta_boxes[] = array(
  		'id'     => 'quem_somos',
  		'title'  => __( 'Galerias', $prefix ),
  		'post_types' => 'page',
  		'fields' => array(
          array(
            'id'               => $prefix.'_images',
            'name'             => __( 'Galeria de Imagens', $prefix ),
            'type'             => 'image_advanced',
            'force_delete'     => false,
            'clone'            => true,
          ),
          array(
    				'id'               => $prefix.'_videos_urls',
    				'name'             => __( 'Links da Galeria de Vídeos', $prefix ),
    				'type'             => 'text',
    				'placeholder'      => __( 'Por favor, insira o link do Vídeo:', $prefix ),
            'clone'            => true,
    			),
  		)
  	);

	return $meta_boxes;
}

function rw_maybe_include()
{
	// Always include in the frontend to make helper function work
	if ( ! is_admin() )
		return true;

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX )
		return true;

	// Check for post IDs
	$checked_post_IDs = array( 7 );

	if ( isset( $_GET['post'] ) )
		$post_id = intval( $_GET['post'] );
	elseif ( isset( $_POST['post_ID'] ) )
		$post_id = intval( $_POST['post_ID'] );
	else
		$post_id = false;

	$post_id = (int) $post_id;

	if ( in_array( $post_id, $checked_post_IDs ) )
		return true;

	// Check for page template
	$checked_templates = array( 'template-quem-somos.php' );

	$template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( in_array( $template, $checked_templates ) )
		return true;

	// If no condition matched
	return false;
}

?>