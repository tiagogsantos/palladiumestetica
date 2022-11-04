<?php
/*
 * Shortcode Soluções
 */
function solucoes_shortcode( $atts , $content = null ) {
  $output = '<div class="box-solucoes">';
  $output .= $content;
  $output .= '</div>';
  return $output;
}
add_shortcode( 'solucoes-box', 'solucoes_shortcode' );


/*
 * Shortcode Segmentos
 */
function segmentos_shortcode( $atts , $content = null ) {
  $output = '<div class="box-segmentos">';
  $output .= $content;
  $output .= '</div>';
  return $output;
}
add_shortcode( 'segmentos-box', 'segmentos_shortcode' );


/*
 * Shortcode Area de Atuação
 */
function areas_de_atuacao_shortcode( $atts , $content = null ) {
  $output = '<div class="box-segmentos">';
  $output .= $content;
  $output .= '</div>';
  return $output;
}
add_shortcode( 'areas-de-atuacao-box', 'areas_de_atuacao_shortcode' );


/*
 * Shortcode Quem Somos
 */
function segmentos_quem_somos( $atts , $content = null ) {
  $output = '<div class="box-quem-somos">';
  $output .= $content;
  $output .= '</div>';
  return $output;
}
add_shortcode( 'quem-somos-box', 'segmentos_quem_somos' );
?>