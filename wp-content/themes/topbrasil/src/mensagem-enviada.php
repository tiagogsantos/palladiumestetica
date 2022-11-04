<?php // Template Name: Mensagem Enviada 

require_once 'integracao-zend.php';

date_default_timezone_set('America/Sao_Paulo');



/*

# GRAVA NO BANCO DE DADOS

------------------------------------------------------------------------------------------*/

$time           = function_exists('microtime') ? microtime(true) : time();

$time           = number_format($time, 4, '.', '');



if ( !empty($time) ) :

  $wpdb->insert(

    'wp_cf7dbplugin_st',

    array(

      'submit_time' => $time

    )

  );

endif;



if ( !empty($_POST['nome']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => 'Solicitação de Contato',

    'field_name' => 'Nome',

    'field_value' => $_POST['nome'],

    'field_order' => 1

  ));

endif;



if ( !empty($_POST['email']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => 'Solicitação de Contato',

    'field_name' => 'E-mail',

    'field_value' => $_POST['email'],

    'field_order' => 2

  ));

endif;



if ( !empty($_POST['tel']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => 'Solicitação de Contato',

    'field_name' => 'Telefone',

    'field_value' => $_POST['tel'],

    'field_order' => 3

  ));

endif;



if ( !empty($_POST['tel']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => 'Solicitação de Contato',

    'field_name' => 'Mensagem',

    'field_value' => $_POST['msg'],

    'field_order' => 4

  ));

endif;



if ( !empty($_SERVER['HTTP_REFERER']) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => 'Solicitação de Contato',

    'field_name' => 'Origem',

    'field_value' => $_SERVER['HTTP_REFERER'],

    'field_order' => 5

  ));

endif;



/*

# ENVIA POR E-MAIL

------------------------------------------------------------------------------------------*/

?>

<?php if (!isset($_FILES['arquivo']) && !isset($_FILES['arquivo1']) && !isset($_FILES['arquivo2']) && !isset($_FILES['arquivo3']) && !isset($_FILES['arquivo4']) ) { ?>



<?php

$reserva = $_POST;

?>

<?php

$msgHTML ="

<table width='700' border='0' cellpadding='0' cellspacing='0'>

  <tr>

    <td colspan='2' style='background: #d8d8d8;padding: 10px;text-align: center;font-family: verdana;'><h2>Solicitação de Contato</h2></td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Nome:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['nome']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>E-mail:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['email']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Telefone:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['tel']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Mensagem:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$reserva['msg']}</td>

  </tr>

</table>

<table width='700' border='0' cellpadding='0' cellspacing='0'>

  <tr>

    <td colspan='2' style='background: #d8d8d8;padding: 10px;text-align: center;font-family: verdana;'><h2>Informações Adicionais</h2></td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Origem:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$_SERVER['HTTP_REFERER']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Data:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>".date('d/m/Y')."</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Hora:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>".date('H:i')."</td>

  </tr>



</table>



";?>



<?php

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

$mail->addAddress('ricardojoaquim@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('website@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('thais@topbrasilseguros.com.br', 'TopBrasil');     // Add a recipient

//$mail->addAddress('junior@upperid.com', 'TopBrasil');     // Add a recipient

$mail->addReplyTo($reserva['email'], $reserva['nome_completo']);

//$mail->addCC('cc@example.com');

//$mail->addBCC('bcc@example.com');



$mail->isHTML(true);                                  // Set email format to HTML





$mail->Subject = 'Solicitação de Contato';

$mail->Body    = $msgHTML;

if ( isset($reserva['email']) and isset($_POST['g-recaptcha-response'])) {

$mail->send();
}




} else {


  require 'phpmailer/class.phpmailer.php';



  $mail = new PHPMailer;



  //$mail->SMTPDebug = 3;                               // Enable verbose debug output





  //$mail->SMTPDebug = 3;                               // Enable verbose debug output



  $mail->isSMTP();                                      // Set mailer to use SMTP

  $mail->CharSet = 'UTF-8';

  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

  $mail->SMTPAuth = true;                               // Enable SMTP authentication

  $mail->Username = 'envia@topbrasiltur.com.br';                 // SMTP username

  $mail->Password = 'Top@17anos';                           // SMTP password

                             // Enable TLS encryption, `ssl` also accepted

  $mail->Port = 587;     

  $mail->SMTPSecure = 'tls';                               // TCP port to connect to



  $mail->setFrom('envia@topbrasiltur.com.br', 'TopBrasil');

  $mail->addAddress('envia@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient



  $mail->addAddress('contato@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

  $mail->addAddress('cleide@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

  $mail->addAddress('ricardojoaquim@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

  $mail->addAddress('juliana@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

  $mail->addAddress('website@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

  $mail->addReplyTo('envia@topbrasiltur.com.br', 'TopBrasil');

  //$mail->addAddress('junior@upperid.com', 'TopBrasil');     // Add a recipient

  //$mail->addCC('cc@example.com');

  //$mail->addBCC('bcc@example.com');



  $mail->isHTML(true);                                  // Set email format to HTML



  $mail->Subject = 'Pesquisa de Satisfação';

  $mail->Body    = "<strong>Nome: </strong> {$_POST['nome']} <br>";

  $mail->Body    .= "<strong>E-mail: </strong> {$_POST['email']} <br>";

  $mail->Body    .= "<strong>Destino: </strong> {$_POST['destino']} <br>";

  $mail->Body    .= "<strong>Mês/Ano da Viagem: </strong> {$_POST['mes-ano']} <br>";

  $mail->Body    .= "<strong>Assinale a questão que mais se aplica a sua viagem: </strong> <br> {$_POST['nivel-viagem']} <br>";

  $mail->Body    .= "<strong>Mencione impressões gerais sobre a sua viagem como um todo,para justificar a avaliação acima: </strong> <br> {$_POST['imp-viagem']} <br>";

  $mail->Body    .= "<strong>Mencione impressões gerais sobre o atendimento da Top Brasil Turismo, para justificar a avaliação acima: </strong> <br> {$_POST['imp-atend']} <br>";



  $arquivo1   = $_FILES["arquivo1"];
  $arquivo2   = $_FILES["arquivo2"];
  $arquivo3   = $_FILES["arquivo3"];
  $arquivo4   = $_FILES["arquivo4"];

  if ($arquivo1) {
    $mail->AddAttachment($arquivo1['tmp_name'], $arquivo1['name']  );
  }

  if ($arquivo2) {
    $mail->AddAttachment($arquivo2['tmp_name'], $arquivo2['name']  );
  }

  if ($arquivo3) {
    $mail->AddAttachment($arquivo3['tmp_name'], $arquivo3['name']  );
  }

  if ($arquivo4) {
    $mail->AddAttachment($arquivo4['tmp_name'], $arquivo4['name']  );
  }

  // if ($arquivo2) {
  //   $mail->AddAttachment($arquivo2['tmp_name'], $arquivo2['name']  );
  // }

  // if ($arquivo3) {
  //   $mail->AddAttachment($arquivo3['tmp_name'], $arquivo3['name']  );
  // }

  // if ($arquivo4) {
  //   $mail->AddAttachment($arquivo4['tmp_name'], $arquivo4['name']  );
  // }



  // $arquivo   = $_FILES["arquivo"];



  // if ($arquivo) {

  //   for ($i = 0; $i < $count; $i++) {

  //     $mail->AddAttachment($arquivo['file']['tmp_name'][$i], $arquivo['file']['name'][$i]  );

  //   }

  // }

if ( isset($_POST['email']) and isset($_POST['g-recaptcha-response'])) {

  $mail->send();

}else {
        $verificaEnvio = 0;
        echo "<!--Não ENVIO-->";
    }

}



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







<?php get_footer(); ?>

