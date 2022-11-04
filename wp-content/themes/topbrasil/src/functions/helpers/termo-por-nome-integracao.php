<?php 

/*
 * Busca o termo por nome do topico
 * @topico_id = ID do tópico;
 */

function term_by_name_topico( $topico_id ) {
	global $conn;

	$topico_id = (int) $topico_id;

	$sql = "SELECT nome FROM d_topico WHERE id = {$topico_id}";
	$query = mysqli_query($conn, $sql);


	if (mysqli_num_rows($query) > 0) {
	    while($row = mysqli_fetch_assoc($query)) {
	    	$nome_topico = $row['nome'];
	    }

	    $term = get_term_by('name', $nome_topico, 'destinos');
	} else {

		if ( $term == false || is_null($term) ) {
			
			for ($i=0; $i <= 999 ; $i++) { 
				$nome_topico = $row['nome'];
				$nome_topico = $nome_topico."14811211".$i;

				$term = get_term_by('name', $nome_topico, 'destinos');

				if ( $term ) {
					return $term;
				}
			}

		}
	}

	

	return $term;
}

?>