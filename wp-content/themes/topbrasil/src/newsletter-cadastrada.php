<?php // Template Name: Newsletter Cadastrada ?>

<?php

require_once 'integracao-zend.php';

// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA

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

    'form_name' => 'Newsletter',

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

    'form_name' => 'Newsletter',

    'field_name' => 'E-mail',

    'field_value' => $_POST['email'],

    'field_order' => 2

  ));

endif;



if ( !empty($_SERVER["HTTP_REFERER"]) ) :

  $wpdb->insert(

  'wp_cf7dbplugin_submits',

  array(

    'submit_time' => $time,

    'form_name' => 'Newsletter',

    'field_name' => 'Origem',

    'field_value' => $_SERVER["HTTP_REFERER"],

    'field_order' => 3

  ));

endif;

?>

<?php

/*

# ENVIA POR E-MAIL

------------------------------------------------------------------------------------------*/

$cadastro = $_POST;



if ( isset($cadastro['nome']) and isset($cadastro['email']) ) :



$msgHTML ="

<table width='700' border='0' cellpadding='0' cellspacing='0'>

  <tr>

    <td colspan='2' style='background: #d8d8d8;padding: 10px;text-align: center;font-family: verdana;'><h2>Cadastro de Newsletter</h2></td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>Nome:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$cadastro['nome']}</td>

  </tr>

  <tr>

    <td width='220' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>E-mail:</td>

    <td width='480' style='padding: 10px;border: solid 1px #d8d8d8;font-family: verdana;font-size: 12px;'>{$cadastro['email']}</td>

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

$mail->addAddress('cleide@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('ricardojoaquim@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('website@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

//$mail->addAddress('thyago@upperid.com', 'TopBrasil');     // Add a recipient



$mail->addReplyTo($cadastro['email'], $cadastro['nome']);

//$mail->addCC('cc@example.com');

//$mail->addBCC('bcc@example.com');



$mail->isHTML(true);                                  // Set email format to HTML



$mail->Subject = 'Cadastro de Newsletter';

$mail->Body    = $msgHTML;


if (isset($_POST['g-recaptcha-response'])) {
  $mail->send();
}



endif;



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

