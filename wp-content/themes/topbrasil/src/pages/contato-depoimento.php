<?php

/*
 * Template Name: Contato Depoimentos
 */

?>

<?php get_header(); ?>

<?php get_template_part('/inc/search-top'); ?>

<?php get_template_part('/inc/breadcrumb-back'); ?>

<section class="contact-dep">
  <div class="container">
    <h1 class="title-princ">Depoimentos</h1>
    <div class="page-content">
      <?php the_content(); ?>
    </div>

    <form id="contact-dep-form" class="form-dep flex align-center" action="<?= get_bloginfo('url') ?>/mensagem-enviada" method="post">
      <ul class="col">
        <li class="in-def flex align-center">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input class="in-no-style" type="text" name="nome" placeholder="Nome">
        </li>

        <li class="in-def flex align-center">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <input class="in-no-style" type="email" name="email" placeholder="E-mail">
        </li>

        <li class="in-def flex align-center">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <input class="in-no-style" type="tel" name="destino" placeholder="Destino">
        </li>
      </ul>

      <ul class="col">
        <li class="msg-def flex align-start">
          <i class="fa fa-pencil" aria-hidden="true"></i>
          <textarea class="in-no-style" name="msg" placeholder="Mensagem"></textarea>
        </li>

        <li>
          <button class="btn-two-colors text-bold upper-all" form="contact-page-form">Enviar</button>
        </li>
      </ul>
    </form>
  </div>
</section>

<?php get_footer(); ?>
