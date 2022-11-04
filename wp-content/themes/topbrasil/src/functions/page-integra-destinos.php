<?php 

// Seta Tempo de Execução do Script

set_time_limit(28800); // Limite máximo de execução do programa 8h De Execução

// Variáveis de conexão
$servername 	= "localhost";
$username 		= "root";
$password 		= "";
$db 			= "top_online";

// Faz a conexão
$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn,"utf8");

// Valida a conexão
if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());

// Seleciona os itens de nivel - 1

$sql_nivel_1 = "SELECT id, peso, img, nome, texto FROM d_topico WHERE pai = 0";
$result_nivel_1 = mysqli_query($conn, $sql_nivel_1);

$i = 0;

if (mysqli_num_rows($result_nivel_1) > 0) {
    while($row_nivel_1 = mysqli_fetch_assoc($result_nivel_1)) {
    	
    	// Salva os valores do banco de dados em variáveis
    	$nome_nivel_1 			= $row_nivel_1['nome'];
    	$slide_nivel_1 			= $row_nivel_1['img'];
    	$descricao_nivel_1 		= str_replace("http://topbrasiltur.com.br/site/uploads/", "http://top.ao5/wp-content/uploads/2016/09/", $row_nivel_1['texto']);;
    	$id_nivel_1 			= $row_nivel_1['id'];
    	$peso_nivel_1 			= $row_nivel_1['peso'];

    	if ( empty($nome_nivel_1) || is_null($nome_nivel_1) ) {
    		$nome_nivel_1 = "Pacote Sem Nome Cadastrado";
    	}

    	// Insere a taxonomia Level 1
    	$verifica_existencia = get_term_by('name', $nome_nivel_1, 'destinos');

    	if ( $verifica_existencia ) {
    		$i++;

    		$insert = wp_insert_term($nome_nivel_1.time(), 'destinos');
    		var_dump($insert_1);
			echo "<hr>";

	    	echo $nome_nivel_1 . " [EXISTIA]";
			

	    	$novo_id_nivel_1 = $insert['term_id'];
    	} else {
    		$insert = wp_insert_term($nome_nivel_1, 'destinos');
    		var_dump($insert_1);
			echo "<hr>";


	    	echo $nome_nivel_1;
			echo "<hr>";
	    	

	    	$novo_id_nivel_1 = $insert['term_id'];
    	}

    	// Inseres os valores dos campos da taxonomia cadastrada acima
    	update_field('descricao_destinos', $descricao_nivel_1, 'destinos_'.$novo_id_nivel_1);
    	update_field('id_destinos', $id_nivel_1, 'destinos_'.$insert['term_id']);
    	update_field('peso_destinos', $peso_nivel_1, 'destinos_'.$insert['term_id']);

    	upload_imagem($slide_nivel_1, "http://topbrasiltur.com.br/site/uploads/image/", 'field_58470ed8a65f0', 'destinos_'.$insert['term_id']);

    	// // Atasa a próxima execução em 1 segundo (Evita erro de execução do script) 
    	// sleep(1);


    	// Seleciona os itens de nivel - 2

    	$sql_nivel_2 = "SELECT id, peso, img, nome, texto FROM d_topico WHERE pai = {$id_nivel_1}";
		$result_nivel_2 = mysqli_query($conn, $sql_nivel_2);

		if (mysqli_num_rows($result_nivel_2) > 0) {
    		while($row_nivel_2 = mysqli_fetch_assoc($result_nivel_2)) {
    			$nome_nivel_2 			= $row_nivel_2['nome'];
		    	$slide_nivel_2 			= $row_nivel_2['img'];
		    	$descricao_nivel_2 		= $row_nivel_2['texto'];
		    	$id_nivel_2 			= $row_nivel_2['id'];
		    	$peso_nivel_2 			= $row_nivel_2['peso'];

		    	if ( empty($nome_nivel_2) || is_null($nome_nivel_2) ) {
		    		$nome_nivel_2 = "Pacote Sem Nome Cadastrado";
		    	}

		    	// Insere a taxonomia Level 2

		    	$verifica_existencia_2 = get_term_by('name', $nome_nivel_2, 'destinos');

		    	if ( $verifica_existencia_2 ) {
		    		$i++;

		    		$insert_2 = wp_insert_term($nome_nivel_2.time(), 'destinos', array('parent' => $novo_id_nivel_1));
		    		var_dump($insert_2);
					echo "<hr>";

			    	$novo_id_nivel_2 = $insert_2['term_id'];

			    	echo $nome_nivel_2 . " [EXISTIA]";
					echo "<hr>";
			    	
		    	} else {
		    		$insert_2 = wp_insert_term($nome_nivel_2, 'destinos', array('parent' => $novo_id_nivel_1));
		    		var_dump($insert_2);
					echo "<hr>";

			    	$novo_id_nivel_2 = $insert_2['term_id'];

			    	echo $nome_nivel_2;
					echo "<hr>";

		    	}

		    	// Inseres os valores dos campos da taxonomia cadastrada acima
		    	update_field('descricao_destinos', $descricao_nivel_2, 'destinos_'.$novo_id_nivel_2);
		    	update_field('id_destinos', $id_nivel_2, 'destinos_'.$insert_2['term_id']);
		    	update_field('peso_destinos', $peso_nivel_2, 'destinos_'.$insert_2['term_id']);

		    	upload_imagem($slide_nivel_2, "http://topbrasiltur.com.br/site/uploads/image/", 'field_58470ed8a65f0', 'destinos_'.$insert_2['term_id']);


		    	// Seleciona os itens de nivel - 3

		    	$sql_nivel_3 = "SELECT id, peso, img, nome, texto FROM d_topico WHERE pai = {$id_nivel_2}";
				$result_nivel_3 = mysqli_query($conn, $sql_nivel_3);

				if (mysqli_num_rows($result_nivel_3) > 0) {
		    		while($row_nivel_3 = mysqli_fetch_assoc($result_nivel_3)) {
		    			$nome_nivel_3 			= $row_nivel_3['nome'];
				    	$slide_nivel_3 			= $row_nivel_3['img'];
				    	$descricao_nivel_3 		= $row_nivel_3['texto'];
				    	$id_nivel_3 			= $row_nivel_3['id'];
				    	$peso_nivel_3 			= $row_nivel_3['peso'];

				    	if ( empty($nome_nivel_3) || is_null($nome_nivel_3) ) {
				    		$nome_nivel_3 = "Pacote Sem Nome Cadastrado";
				    	}

				    	// Insere a taxonomia Level 3

				    	$verifica_existencia_3 = get_term_by('name', $nome_nivel_3, 'destinos');

				    	if ( $verifica_existencia_3 ) {
				    		$i++;

				    		$insert_3 = wp_insert_term($nome_nivel_3.time(), 'destinos', array('parent' => $novo_id_nivel_2));
				    		var_dump($insert_3);
							echo "<hr>";

					    	$novo_id_nivel_3 = $insert_3['term_id'];

					    	echo $nome_nivel_3 . " [EXISTIA]";
							echo "<hr>";
					    	
				    	} else {
				    		$insert_3 = wp_insert_term($nome_nivel_3, 'destinos', array('parent' => $novo_id_nivel_2));
				    		var_dump($insert_3);
							echo "<hr>";

					    	$novo_id_nivel_3 = $insert_3['term_id'];

					    	echo $nome_nivel_3;
							echo "<hr>";
					    	
				    	}


				    	// Inseres os valores dos campos da taxonomia cadastrada acima
				    	update_field('descricao_destinos', $descricao_nivel_3, 'destinos_'.$novo_id_nivel_3);
		    			update_field('id_destinos', $id_nivel_3, 'destinos_'.$insert_3['term_id']);
		    			update_field('peso_destinos', $peso_nivel_3, 'destinos_'.$insert_3['term_id']);

		    			upload_imagem($slide_nivel_3, "http://topbrasiltur.com.br/site/uploads/image/", 'field_58470ed8a65f0', 'destinos_'.$insert_3['term_id']);

				    	// Seleciona os itens de nivel - 4

				    	$sql_nivel_4 = "SELECT id, peso, img, nome, texto FROM d_topico WHERE pai = {$id_nivel_3}";
						$result_nivel_4 = mysqli_query($conn, $sql_nivel_4);

						if (mysqli_num_rows($result_nivel_4) > 0) {
				    		while($row_nivel_4 = mysqli_fetch_assoc($result_nivel_4)) {
				    			$nome_nivel_4 			= $row_nivel_4['nome'];
						    	$slide_nivel_4 			= $row_nivel_4['img'];
						    	$descricao_nivel_4 		= $row_nivel_4['texto'];
						    	$id_nivel_4 			= $row_nivel_4['id'];
						    	$peso_nivel_4 			= $row_nivel_4['peso'];

						    	if ( empty($nome_nivel_4) || is_null($nome_nivel_4) ) {
						    		$nome_nivel_4 = "Pacote Sem Nome Cadastrado";
						    	}

						    	// Insere a taxonomia Level 4

						    	$verifica_existencia_4 = get_term_by('name', $nome_nivel_4, 'destinos');

						    	if ( $verifica_existencia_4 ) {
						    		$i++;

						    		$insert_4 = wp_insert_term($nome_nivel_4.time(), 'destinos', array('parent' => $novo_id_nivel_3));
						    		var_dump($insert_4);
									echo "<hr>";

							    	$novo_id_nivel_4 = $insert_4['term_id'];

							    	echo $nome_nivel_4 . " [EXISTIA]";
									echo "<hr>";
							    	
						    	} else {
						    		$insert_4 = wp_insert_term($nome_nivel_4, 'destinos', array('parent' => $novo_id_nivel_3));
						    		var_dump($insert_4);
									echo "<hr>";

							    	echo $nome_nivel_4;
							    	echo "<hr>";
							    	var_dump($insert_4);
									echo "<hr>";
						    	}

						    	// Inseres os valores dos campos da taxonomia cadastrada acima
						    	update_field('descricao_destinos', $descricao_nivel_4, 'destinos_'.$novo_id_nivel_4);
		    					update_field('id_destinos', $id_nivel_4, 'destinos_'.$insert_4['term_id']);
		    					update_field('peso_destinos', $peso_nivel_4, 'destinos_'.$insert_4['term_id']);

		    					upload_imagem($slide_nivel_4, "http://topbrasiltur.com.br/site/uploads/image/", 'field_58470ed8a65f0', 'destinos_'.$insert_4['term_id']);

				    		}
				    	}
				    	// Fim Seleção Nivel 4
		    		}
		    	}
		    	// Fim Seleção Nivel 3
    		}
    	}
    	// Fim Seleção Nivel 2

    }
} 
// Fim Seleção Nivel 1
?>