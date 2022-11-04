<?php
	
	$theme_path = get_bloginfo('template_directory');
	
	if ( get_the_ID > 15571 ) {
		$n_pacote = get_the_ID();
	} else {
		$n_pacote = get_field('id_pacotes', $post_id);
	}

	$pacote_content = get_field('descricao_pacotes', $post_id);

	$imagem = get_field('imagem_pacotes', $post_id); 

	$roteiro = get_field('roteiro_texto_pacotes', $post_id); 

	$duracao = get_field('duracao_pacotes', $post_id); 

	$destaques = get_field('destaques_pacotes', $post_id); 

	$cia = get_the_terms( $post_id, 'cia_aerea' );


	$valor = get_field('a_partir_de_pacotes', $post_id); 
  $locals = get_the_terms( $post_id, 'localizacao' );

  if ( $locals[0]->name == 'Internacional' ) {
    $moeda = "US$";
    $valor_final = moeda('dolar', $valor);
  } else {
    $moeda = "R$";
    $valor_final = moeda('real', $valor);
  }

$body_indique = "<!DOCTYPE html>
<html>
<head>
	<title>Top Brasil</title>
</head>
<body>
	<table width='600' align='center' style='font-family: Verdana;'>
		<tr>
			<td colspan='2' style='text-align: center;'>
				<img style='margin:15px 0;' src='{$theme_path}/assets/img/logo.png' alt='Top Brasil Turismo'>
			</td>
		</tr>

		<tr>
			<td colspan='2'>
				<h1 style='font-size: 35px; color: #36538f; font-weight: bold; font-family: Verdana;'>
					{$indique['nome_pacote']}
				</h1>
			</td>
		</tr>

		<tr>
			<td colspan='2'>
				<span style='font-size: 13px; color: #333; background: #eee; padding: 8px 20px; font-family: Verdana;'>nº do pacote <strong>{$n_pacote}</strong></span>
			</td>
		</tr>

		<tr>
			<td colspan='2' style='padding: 10px 0; font-size: 14px;'>
				{$pacote_content}
			</td>
		</tr>

		<tr>
			<td colspan='2'>
				<img style='max-width: 100%; display: block; margin: 10px auto;' src='{$imagem['url']}' alt='{$imagem['title']}'>
			</td>
		</tr>

		<tr>
			<td style='text-align: center; background: #3678a6;'><img src='{$theme_path}/assets/img/roteiro.jpg' alt='Ícone Roteiro'></td>
			<td style='font-size: 14px; color: #000; font-family: Verdana; padding-left: 10px; background: #f1f1f1;'>
				<strong style='color: #3678a6;'>Roteiro:</strong>
				<span>{$roteiro}</span>
			</td>
		</tr>
		<tr>
			<td style='text-align: center; background: #3678a6;'><img src='{$theme_path}/assets/img/duracao.jpg' alt='Ícone Duração'></td>
			<td style='font-size: 14px; color: #000; font-family: Verdana; padding-left: 10px; background: #f1f1f1;'>
				<strong style='color: #3678a6;'>Duração:</strong>
				<span>{$duracao}</span>
			</td>
		</tr>
		<tr>
			<td style='text-align: center; background: #3678a6;'><img src='{$theme_path}/assets/img/destaques.jpg' alt='Ícone Destaques'></td>
			<td style='font-size: 14px; color: #000; font-family: Verdana; padding-left: 10px; background: #f1f1f1;'>
				<strong style='color: #3678a6;'>Destaques:</strong>
				<span>{$destaques}</span>
			</td>
		</tr>
		<tr>
			<td style='text-align: center; background: #3678a6;'><img src='{$theme_path}/assets/img/cia.jpg' alt='Ícone Cia Aérea'></td>
			<td style='font-size: 14px; color: #000; font-family: Verdana; padding-left: 10px; background: #f1f1f1;'>
				<strong style='color: #3678a6;'>Cia Aérea:</strong>
				<span>{$cia[0]->name}</span>
			</td>
		</tr>

		<tr>
			<td colspan='2'>
				<span style='width: 100%; display: block; text-align: right; margin-top: 10px; font-size: 18px; color: #929191; font-family: Verdana; border-top: solid 1px #f1f1f1; padding: 15px 0 0; margin-top: 10px;'>A partir de:</span>

				<span style='font-size: 55px;line-height: 50px;color: #585858;text-align: right;display: block; border-bottom: solid 1px #f1f1f1; padding: 0 0 20px; margin-bottom: 10px;'><small style='font-size: 30px;line-height: 30px;margin-right: 5px;'>{$moeda}</small>{$valor}</span>
			</td>
		</tr>
	</table>
</body>
</html>"

?>