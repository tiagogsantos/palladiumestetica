// Pega os dados do pacote 
$sql = "SELECT * FROM d_pacote INNER JOIN d_pacote_topico ON d_pacote.id = d_pacote_topico.pid LIMIT 10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	
    	
    	$topico_id = $row['tid'];

    	$obj_term = term_by_name_topico($topico_id);
    
    	$my_post = array(
		  'post_title'    => wp_strip_all_tags( $row['titulo'] ),
		  'post_type' 	  => 'pacotes',
		  'post_status'   => 'publish',
		  'post_author'   => 1,
		  'tax_input' => array(
		  						'destinos' => $obj_term->term_id
		  					)
		);
		 
		// Insert the post into the database
		wp_insert_post( $my_post );
    }
}