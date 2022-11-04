<?php

// Pega o valor da cotação

$cotacao = (double) get_field('cambio_do_real', 'option');



// Formata moeda

function moeda($moeda, $num) {



  if ( $moeda == 'real' ) {

    $valor_final = number_format($num, 2, ',', '.');

  }



  if ( $moeda == 'dolar' ) {

    $valor_final = number_format($num, 2, ',', '.');

  }



  return $valor_final;

}

?>