<?php // Template Name: Pesquisa Antiga ?>

<?php 

if ( $_GET['tipo'] == 'pacote' ) {

  $id_pacote = (int) $_GET['id_antigo'];

  $args = array(
      'meta_query' => array(
          array(
              'key' => 'id_pacotes',
              'value' => $id_pacote
          )
      ),
      'post_type' => 'pacotes',
      'posts_per_page' => -1
  ); 
  $posts = get_posts($args);

  $post = $posts[0]->ID;

  header('Location: http://topbrasiltur.com.br/wp-admin/post.php?post='.$post.'&action=edit');

} else {
	$id_pacote = (int) $_GET['id_antigo'];

	  $myrows = $wpdb->get_results( "SELECT term_id FROM wp_term_taxonomy WHERE taxonomy = 'destinos' ORDER BY term_taxonomy_id DESC" );
	  foreach ($myrows as $row) {
	    $id_field = get_field('id_destinos', 'destinos_'.$row->term_id);

	    if ( $id_field == $id_pacote ) {
	      $id_tax = $row->term_id;
	      break;
	    }
	  }

	  header('Location: http://topbrasiltur.com.br/wp-admin/term.php?taxonomy=destinos&tag_ID='.$id_tax.'&post_type=post&wp_http_referer=%2Fwp-admin%2Fedit-tags.php%3Ftaxonomy%3Ddestinos');
}
  

?>