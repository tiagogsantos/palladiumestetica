<?php
/*
 * Template Name: Contato
 */
?>

<?php get_header(); ?>

<?php include TEMPLATEPATH.'/inc/search-top.php'; ?>

<?php include TEMPLATEPATH.'/inc/breadcrumb-back.php'; ?>

<section class="contato-page">
  <div class="container">
    <div class="flex flex-parent align-center">
      <div class="col">
        <h1 class="title-princ text-bold"><?php the_title(); ?></h1>

        <div class="content-page">
          <?php the_content(); ?>
        </div>

        <div class="contact-content tel-content flex-start align-center">
          <div class="col">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </div>

          <div class="col">
            <p class="title-content">Telefones de Contato</p>
            <ul class="tel-list">
              <?php

              // check if the repeater field has rows of data
              if( have_rows('telefones') ):

               	// loop through the rows of data
                  while ( have_rows('telefones') ) : the_row();

                  $clean_number = cleanstring(get_sub_field('telefone'));

              ?>

                <li>
                  <a href="tel:<?php echo $clean_number; ?>">
                    <strong><?php the_sub_field('cidade_ou_estado') ?> </strong>
                    <?php the_sub_field('telefone') ?>
                  </a>
                </li>

              <?php

                  endwhile;

              endif;

              ?>
            </ul>
          </div>
        </div>

        <div class="contact-content mail-content flex-start align-center">
          <div class="col">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>

          <div class="col">
            <p class="title-content">E-mail para Contato</p>

            <a href="mailto:<?php the_field('e-mail_para_contato'); ?>">
              <?php the_field('e-mail_para_contato'); ?>
            </a>
          </div>
        </div>

        <div class="contact-content address-content flex-start align-center">
          <div class="col">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </div>

          <div class="col">
            <p class="title-content">Como Chegar</p>

            <p>
              <?php the_field('endereço'); ?>
              <strong>Estacionamento no Local</strong>
            </p>
          </div>
        </div>
      </div>

      <div class="col">
        <form id="contact-page-form" action="/mensagem-enviada" method="post">
          <ul>
            <li class="in-def flex align-center">
              <i class="fa fa-user" aria-hidden="true"></i>
              <input data-yts-val="true" class="in-no-style" type="text" name="nome" placeholder="Nome">
            </li>

            <li class="in-def flex align-center">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <input data-yts-val="true" class="in-no-style" type="email" name="email" placeholder="E-mail">
            </li>

            <li class="in-def flex align-center">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <input data-yts-val="true" class="in-no-style" type="tel" name="tel" placeholder="Telefone">
            </li>

            <li class="msg-def flex align-start">
              <i class="fa fa-pencil" aria-hidden="true"></i>
              <textarea class="in-no-style" name="msg" placeholder="Mensagem"></textarea>
            </li>

            <li class="captcha-def flex align-center">
              <div class="g-recaptcha" data-sitekey="6LesemcUAAAAAE9K-vo8uIfK866wIF8I8MlXAQr_"></div>
            </li>

            <li>
              <button type="submit" class="btn-two-colors text-bold upper-all" form="contact-page-form">Enviar</button>
            </li>
          </ul>
          <div class="form-legend text-bold">
            <span>* Campos de preenchimento obrigatório</span>
          </div>
        </form>
      </div>
    </div>

  	<div class="acf-map">
  		<?php
  			$location = get_field('endereço_do_mapa');
			?>
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
			  <h4><?php the_field('endereço'); ?></h4>
			</div>
  	</div>

  </div>
</section>

<?php get_footer(); ?>