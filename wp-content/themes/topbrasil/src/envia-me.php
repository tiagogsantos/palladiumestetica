<?php // Template Name: Envia-Me ?>


<?php
$indique = $_POST;

var_dump($indique);

$post_id = $indique['post-id'];
$nome = $indique['nome'];

?>
<?php

include TEMPLATEPATH.'/inc/envia-body.php';

$msgHTML = $body_indique;
?>

<?php
// require 'phpmailer/class.phpmailer.php';
// $mail = new PHPMailer;

// New PHPMailer
require TEMPLATEPATH . '/newmailer/vendor/autoload.php';
$mail = new PHPMailer\PHPMailer\PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->CharSet = 'UTF-8';

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.topbrasiltur.com.br';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'envia@topbrasiltur.com.br';                 // SMTP username
$mail->Password = 'i1a9s1d9';                           // SMTP password
                          // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('envia@topbrasiltur.com.br', 'TopBrasil');
$mail->addAddress($indique['email'], $indique['nome']);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('envia@topbrasiltur.com.br', $indique['nome']);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Pacote | Top Brasil';
$mail->Body    = $msgHTML;

$mail->send();


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
