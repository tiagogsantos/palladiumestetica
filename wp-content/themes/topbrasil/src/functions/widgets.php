<?php

add_filter('dynamic_sidebar_params', 'my_dynamic_sidebar_params');

function my_dynamic_sidebar_params( $params ) {

	// get widget vars
	$widget_name = $params[0]['widget_name'];
	$widget_id = $params[0]['widget_id'];

	// Get Fields
	$widget_type       = get_field('tipo_de_widget', 'widget_' . $widget_id);
  $widget_img        = get_field('imagem_do_widget', 'widget_' . $widget_id);
  $widget_link       = get_field('link_da_imagem', 'widget_' . $widget_id);
  $widget_target     = get_field('destino_do_link', 'widget_' . $widget_id);
  $widget_form_title = get_field('titulo_do_formulario', 'widget_' . $widget_id);

      // Define image link target
      if ($widget_target == 'Mesma aba') {
        $widget_target = "_self";
      } elseif ($widget_target == 'Nova aba') {
        $widget_target = "_blank";
      }

  // If is image widget
  if ($widget_type == 'Imagem' && $widget_img) {
    $img_content  = '<div class="widget-figure">';
    $img_content .= '  <a href="' . $widget_link . '" target="' . $widget_target . '">';
    $img_content .= '    <img src="' . $widget_img . '" alt="' . $widget_name . '">';
    $img_content .= '  </a>';
		$img_content .= '</div">';
		$params[0]['after_widget'] = $img_content . $params[0]['after_widget'];
  } elseif ($widget_type == 'Formulário') {
    $form_content  = '<div class="widget-form">';
    $form_content .= '  <span class="widget-form-title">' . $widget_form_title . '</span>';
    $form_content .= '  <form id="form-sidebar" action="index.html" method="post">';
    $form_content .= '    <ul>';
    $form_content .= '      <li><input type="text" name="nome" class="in-def" placeholder="Nome*:"></li>';
    $form_content .= '      <li><input type="email" name="email" class="in-def" placeholder="E-mail*:"></li>';
    $form_content .= '      <li><input type="tel" name="telefone" class="in-def" placeholder="Telefone*:"></li>';
    $form_content .= '      <li class="select-parent">';
    $form_content .= '        <select id="form-sub" class="sel-def" name="assunto">';
    $form_content .= '          <option value="" disabled selected hidden>Segmento*:</option>';
    $form_content .= '          <option value="Mineração">Mineração</option>';
    $form_content .= '          <option value="Portos">Portos</option>';
    $form_content .= '          <option value="Indústria">Indústria</option>';
    $form_content .= '          <option value="Transportadora">Transportadora</option>';
    $form_content .= '          <option value="Caminhoneiro Autônomo">Caminhoneiro Autônomo</option>';
    $form_content .= '          <option value="Frota Leve">Frota Leve</option>';
    $form_content .= '          <option value="Cargas e Ativos">Cargas e Ativos</option>';
    $form_content .= '          <option value="Máquinas Pesadas e Veículos Especiais">Máquinas Pesadas e Veículos Especiais</option>';
    $form_content .= '          <option value="Veículos de Passeio">Veículos de Passeio</option>';
    $form_content .= '        </select>';
    $form_content .= '      </li>';
    $form_content .= '      <li><button type="submit" name="button" class="btn-def" form="form-contato">Enviar Contato</button></li>';
    $form_content .= '    </ul>';
    $form_content .= '  </form>';
    $form_content .= '	<p class="form-legend">*campos obrigatórios</p>';
		$form_content .= '</div">';
		$params[0]['after_widget'] = $form_content . $params[0]['after_widget'];
  }


	// return
	return $params;

}
?>