<?php // Template Name: Ligamos para você ?>



<?php 

require_once 'integracao-zend.php';

/*



# GRAVA NO BANCO DE DADOS



------------------------------------------------------------------------------------------*/



$time           = function_exists('microtime') ? microtime(true) : time();



$time           = number_format($time, 4, '.', '');



if ($_POST['assunto']) {

  $assunto = $_POST['assunto'];

} else {

  $assunto = 'Solicitação de Ligação / Orçamento Home';

}





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



    'form_name' => $assunto,



    'field_name' => 'Nome',



    'field_value' => $_POST['nome'],



    'field_order' => 1



  ));



endif;







if ( !empty($_POST['tel']) ) :



  $wpdb->insert(



  'wp_cf7dbplugin_submits',



  array(



    'submit_time' => $time,



    'form_name' => $assunto,



    'field_name' => 'Telefone',



    'field_value' => $_POST['tel'],



    'field_order' => 2



  ));



endif;







if ( !empty($_POST['type-form']) ) :



  $wpdb->insert(



  'wp_cf7dbplugin_submits',



  array(



    'submit_time' => $time,



    'form_name' => $assunto,



    'field_name' => 'Tipo',



    'field_value' => $_POST['type-form'],



    'field_order' => 3



  ));



endif;







if ( !empty($_POST['destino']) ) :



  $wpdb->insert(



  'wp_cf7dbplugin_submits',



  array(



    'submit_time' => $time,



    'form_name' => $assunto,



    'field_name' => 'Destino',



    'field_value' => $_POST['destino'],



    'field_order' => 4



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



    'field_order' => 5



  ));



endif;



?>







<?php



$ligamos = $_POST;



?>



<?php



$msgHTML ="



Olá, o usuário: {$ligamos['nome']} <br>



Solicitou atendimento pelo número: {$ligamos['tel']} <br>



Tipo de Formulário : '{$ligamos['type-form']}'<br>



Destino: {$ligamos['destino']} <br>



Data da Viagem: {$ligamos['data']}







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

$mail->addAddress('ricardojoaquim@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

$mail->addAddress('contato@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient


$mail->addAddress('website@topbrasiltur.com.br', 'TopBrasil');     // Add a recipient

//$mail->addAddress('thyago@upperid.com', 'TopBrasil');     // Add a recipient



//$mail->addAddress('ellen@example.com');               // Name is optional



$mail->addReplyTo('envia@topbrasiltur.com.br', 'TopBrasil');



//$mail->addCC('cc@example.com');



//$mail->addBCC('bcc@example.com');







$mail->isHTML(true);                                  // Set email format to HTML



if ($_POST['assunto']) {

  $assunto = $_POST['assunto'];

} else {

  $assunto = 'Solicitação de Mensagem via Whatsapp';

}



$mail->Subject = $assunto;



$mail->Body    = $msgHTML;






// if (isset($_POST['yts-hiddencaptcha'])) {
  $mail->send();
// }











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



