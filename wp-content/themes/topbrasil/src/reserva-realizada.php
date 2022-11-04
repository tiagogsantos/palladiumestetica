<?php // Template Name: Reserva Realizada ?>





<?php 



date_default_timezone_set('America/Sao_Paulo');

if ( !empty($_POST['nome_completo']) && !empty($_POST['email']) && !empty($_POST['celular']) ) :

/*

# GRAVA NO BANCO DE DADOS

------------------------------------------------------------------------------------------*/

$time           = function_exists('microtime') ? microtime(true) : time();

$time           = number_format($time, 4, '.', '');



$assunto = $_POST['assunto'];



if ($assunto) {

  $assunto = $assunto;

} else {

  $assunto = 'Solicitação de Reserva';

}



if ( !empty($time) ) :

  $wpdb->insert(

    'wp_cf7dbplugin_st',

    array(

      'submit_time' => $time

    )

  );

endif;



if ( !empty($_POST['pacote_para']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'Pacote Para',

    'field_value' => $_POST['pacote_para'],

    'field_order' => 1

  ));

endif;



if ( !empty($_POST['hospedagem']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'Nome da Hospedagem',

    'field_value' => $_POST['hospedagem'],

    'field_order' => 2

  ));

endif;



if ( !empty($_POST['periodo']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'Período',

    'field_value' => $_POST['periodo'],

    'field_order' => 3

  ));

endif;



if ( !empty($_POST['data']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'Data de embarque',

    'field_value' => $_POST['data'],

    'field_order' => 4

  ));

endif;



if ( !empty($_POST['nome_completo']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'Nome Completo',

    'field_value' => $_POST['nome_completo'],

    'field_order' => 5

  ));

endif;



if ( !empty($_POST['email']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'E-mail',

    'field_value' => $_POST['email'],

    'field_order' => 5

  ));

endif;



if ( !empty($_POST['celular']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'Celular',

    'field_value' => $_POST['celular'],

    'field_order' => 6

  ));

endif;



if ( !empty($_POST['operadora']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'Operadora',

    'field_value' => $_POST['operadora'],

    'field_order' => 7

  ));

endif;



if ( !empty($_POST['local_embarque']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'Local de Embarque',

    'field_value' => $_POST['local_embarque'],

    'field_order' => 8

  ));

endif;



if ( !empty($_POST['observacoes']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'Observações',

    'field_value' => $_POST['observacoes'],

    'field_order' => 9

  ));

endif;



if ( !empty($_SERVER["HTTP_REFERER"]) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => $assunto,

    'field_name' => 'Origem',

    'field_value' => $_SERVER["HTTP_REFERER"],

    'field_order' => 10

  ));

endif;

?>



<?php $arrDados = $_POST['nome_adulto']; ?>

  <?php $t = count($arrDados); $c = 0 ?>

  <?php foreach ($arrDados as $arrDado) : ?>

    <?php foreach ($arrDado as $dado) : ?>

      <?php $c++; if ( $c % 2 == 0 ) : ?>

      <?php

      if ( !empty($dado) ) :

        $wpdb->insert(

        'wp_cf7dbplugin_submits',

        array(

          'submit_time' => $time,

          'form_name' => $assunto,

          'field_name' => 'Data Adulto',

          'field_value' => $dado,

          'field_order' => 10

        ));

      endif;

      ?>

      <?php else : ?>

      <?php

      if ( !empty($dado) ) :

        $wpdb->insert(

        'wp_cf7dbplugin_submits',

        array(

          'submit_time' => $time,

          'form_name' => $assunto,

          'field_name' => 'Nome Adulto',

          'field_value' => $dado,

          'field_order' => 10

        ));

      endif;

      ?>

      <?php endif; ?>

    <?php endforeach; ?>

  <?php endforeach; ?>



  <?php $arrDados = $_POST['nome_crianca']; ?>

  <?php $t = count($arrDados); $c = 0 ?>

  <?php foreach ($arrDados as $arrDado) : ?>

    <?php foreach ($arrDado as $dado) : ?>

      <?php $c++; if ( $c % 2 == 0 ) : ?>

      <?php

      if ( !empty($dado) ) :

        $wpdb->insert(

        'wp_cf7dbplugin_submits',

        array(

          'submit_time' => $time,

          'form_name' => $assunto,

          'field_name' => 'Data Criança ',

          'field_value' => $dado,

          'field_order' => 10

        ));

      endif;

      ?>

      <?php else : ?>

      <?php

      if ( !empty($dado) ) :

        $wpdb->insert(

        'wp_cf7dbplugin_submits',

        array(

          'submit_time' => $time,

          'form_name' => $assunto,

          'field_name' => 'Nome Criança ',

          'field_value' => $dado,

          'field_order' => 10

        ));

      endif;

      ?>

      <?php endif; ?>

    <?php endforeach; ?>

  <?php endforeach; ?>



<?php

/*

# ENVIA POR E-MAIL

------------------------------------------------------------------------------------------*/





?>



<?php

$reserva = $_POST;





?>

<?php

$msgHTML ="

<table cellspacing='0' cellpadding='0' border='0' width='700'>



  <tr>

    <td colspan='2' style='background: #d8d8d8;padding: 10px;text-align: center;font-family: verdana; font-size:18px;'><h2>{$reserva['assunto']}</h2></td>

  </tr>



  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Pacote Para:</td>



    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['pacote_para']}</td>



  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Nome da Hospedagem Selecionada:</td>



    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['hospedagem']}</td>



  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Período:</td>



    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['periodo']}</td>



  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Data de embarque:</td>



    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['data']}</td>



  </tr>



  <tr>

    <td colspan='2' style='background: #d8d8d8;padding: 10px;text-align: center;font-family: verdana;'><h2>Adultos</h2></td>

  </tr>

";?>



  <?php $arrDados = $reserva['nome_adulto']; ?>

  <?php $t = count($arrDados); $c = 0 ?>

  <?php $pc = 1; ?>

  <?php foreach ($arrDados as $arrDado) : ?>

    <?php foreach ($arrDado as $dado) : ?>

      <?php $c++; if ( $c % 2 == 0 ) : ?>

      <?php $pc++ ?>

      <?php $msgHTML .=" <tr>

          <td></td>

          <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$dado}</td>

        </tr>"; ?>

      <?php else : ?>

      <?php $msgHTML .= " <tr>

          <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Nome Adulto {$pc}:</td>

          <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$dado}</td>

        </tr>"; ?>

        <?php $nomesAdulto .= $dado . ' ,' ?>

      <?php endif; ?>

    <?php endforeach; ?>

  <?php endforeach; ?>

<?php $msgHTML .= "

  <tr>

    <td colspan='2' style='background: #d8d8d8;padding: 10px;text-align: center;font-family: verdana;'><h2>Crianças</h2></td>

  </tr>"; ?>



  <?php $arrDados = $reserva['nome_crianca']; ?>

  <?php $t = count($arrDados); $c = 0 ?>

  <?php $cpc = 1; ?>

  <?php foreach ($arrDados as $arrDado) : ?>

    <?php foreach ($arrDado as $dado) : ?>

      <?php $c++; if ( $c % 2 == 0 ) : ?>

      <?php $cpc++ ?>

      <?php $msgHTML .= "  <tr>

          <td></td>

          <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$dado}</td>

        </tr>"; ?>

      <?php else : ?>

        <?php $msgHTML .= " <tr>

          <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Nome Criança {$cpc}:</td>

          <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$dado}</td>

        </tr>"; ?>

        <?php $nomesCrianca .= $dado . ' ,' ?>

      <?php endif; ?>

    <?php endforeach; ?>

  <?php endforeach; ?>

<?php $msgHTML .= "

</table>



<table width='700' border='0' cellpadding='0' cellspacing='0'>

  <tr>

    <td colspan='2' style='background: #d8d8d8;padding: 10px;text-align: center;font-family: verdana;'><h2>Dados do Solicitante</h2></td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Nome Completo:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['nome_completo']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>E-mail:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['email']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Celular:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['celular']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Operadora:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['operadora']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Local de Embarque:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['local_embarque']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Observacoes:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['observacoes']}</td>

  </tr>

</table>



<table width='700' border='0' cellpadding='0' cellspacing='0'>

  <tr>

    <td colspan='2' style='background: #d8d8d8;padding: 10px;text-align: center;font-family: verdana;'><h2>Informações Adicionais</h2></td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Origem:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['referer']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Data:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>".date('d/m/Y')."</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Hora:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>".date('H:i')."</td>

  </tr>



</table>";



// require 'phpmailer/class.phpmailer.php';
// $mail = new PHPMailer;

// New PHPMailer
require TEMPLATEPATH . '/newmailer/vendor/autoload.php';
$mail = new PHPMailer\PHPMailer\PHPMailer;



//$mail->SMTPDebug = 3;                               // Enable verbose debug output



$mail->isSMTP();                                      // Set mailer to use SMTP

$mail->CharSet = 'UTF-8';

$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

$mail->SMTPAuth = true;                               // Enable SMTP authentication

$mail->Username = 'envia@topbrasiltur.com.br';                 // SMTP username

$mail->Password = 'Topbrasil20anos@';                           // SMTP password

                           // Enable TLS encryption, `ssl` also accepted

$mail->Port = 587;     

$mail->SMTPSecure = 'tls';                               // TCP port to connect to



$mail->setFrom('envia@topbrasiltur.com.br', 'TopBrasil');

$mail->addAddress('envia@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('contato@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('cleide@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('ricardojoaquim@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('beatriz@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('website@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('thais@topbrasilseguros.com.br', 'TopBrasil');     // Add a recipient


$mail->addReplyTo($reserva['email'], $reserva['nome_completo']);





$mail->isHTML(true);                                  // Set email format to HTML



$assunto = $_POST['assunto'];



if ($assunto) {

  $assunto = $assunto;

} else {

  $assunto = 'Solicitação de Reserva';

}



$mail->Subject = $assunto;

$mail->Body    = $msgHTML;


  // if (isset($_POST['yts-hiddencaptcha'])) :
    $send_mail = $mail->send();
  // endif;


else :

  header("Location: ".$_SERVER['HTTP_REFERER']);

endif; // IF validação campos em brancos




get_header(); ?>







<?php include TEMPLATEPATH.'/inc/search-top.php'; ?>







<?php include TEMPLATEPATH.'/inc/breadcrumb-back.php'; ?>







<section class="contato-page">



  <div class="container">



    <div class="flex flex-parent align-center">



      <div class="col">



        <h1 class="title-princ text-bold">Mensagem enviada!</h1>







        <div class="content-page">



          <p>Sua mensagem foi enviada com sucesso!</p>



        </div>



      </div>











    </div>















  </div>



</section>







<?php require_once 'integracao-zend.php'; get_footer(); ?>