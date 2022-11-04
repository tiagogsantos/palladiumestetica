<?php

/*
 * Upload
 * @filename = Nome do arquivo exemplo "foto.jpg"
 * @urlimage = Url completa da imagem exemplo "http://www.meusite.com.br/uploads/";
 * @imageField = Nome do field da imagem exemplo: "slide"
 * @idTaxonomy = nome da taxonomia mais id exemplo: "categoria_20"
 */

include( ABSPATH . 'wp-admin/includes/image.php' );

function upload_imagem_pacotes($filename, $urlImage, $imageField, $idTaxonomy) {
      $filename = $filename;
      $uploaddir = wp_upload_dir();
      $uploadfile = $uploaddir['path'] . '/' . $filename;
      $urlImage = $urlImage . $filename;

      $contents= file_get_contents($urlImage);
      $savefile = fopen($uploadfile, 'w');
      fwrite($savefile, $contents);
      fclose($savefile);
      //after that, we can insert the image into the media library:

      $wp_filetype = wp_check_filetype(basename($filename), null );

      $attachment = array(
          'post_mime_type' => $wp_filetype['type'],
          'post_title' => $filename,
          'post_content' => '',
          'post_status' => 'inherit'
      );

      $attach_id = wp_insert_attachment( $attachment, $uploadfile );

     

      $imagenew = get_post( $attach_id );
      $fullsizepath = get_attached_file( $imagenew->ID );
      $attach_data = wp_generate_attachment_metadata( $attach_id, $fullsizepath );
      wp_update_attachment_metadata( $attach_id, $attach_data );


      update_field($imageField, $attach_id, $idTaxonomy);
}


?>