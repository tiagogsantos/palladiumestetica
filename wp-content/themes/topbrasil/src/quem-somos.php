<?php //Template Name: Quem Somos ?>

<?php get_header(); ?>

<?php include TEMPLATEPATH.'/inc/search-top.php'; ?>

<?php include TEMPLATEPATH.'/inc/breadcrumb-back.php'; ?>

<section class="qs-page">
  <div class="container">

    <h1 class="text-bold text-center upper-all">A Palladium Estetica</h1>
    <div class="flex-parent flex align-center qs-infos">
      <div class="col flex mission-box">
        <div class="col qs-info-img">
          <img src="<?php the_field('imagem_da_coluna_direita'); ?>" alt="Nossa Missão">
        </div>

        <div class="col qs-info-content">
          <h2 class="qs-title-content upper-all">
            <span><?php the_field('primeira_linha_do_titulo_direita') ?></span></br>
            <strong><?php the_field('segunda_linha_do_titulo_direita') ?></strong>
          </h2>

          <div class="content open-font">
            <?php the_field('descrição_da_coluna_direita'); ?>
          </div>
        </div>
      </div>

      <div class="col col-hr"></div>

      <div class="col flex mission-box">
        <div class="col qs-info-img">
          <img src="<?php the_field('imagem_da_coluna_esquerda'); ?>" alt="Nossos Princípios">
        </div>

        <div class="col qs-info-content">
          <h2 class="qs-title-content upper-all">
            <span><?php the_field('primeira_linha_do_titulo_esquerda') ?></span></br>
            <strong><?php the_field('segunda_linha_do_titulo_esquerda') ?></strong>
          </h2>

          <div class="content open-font">
            <?php the_field('descrição_da_coluna_esquerda'); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="min-container">

      <?php
        if( have_rows('caixas_com_cicurlo') ):
            while ( have_rows('caixas_com_cicurlo') ) : the_row();
      ?>
        <div class="qs-circle-box">
          <div class="circle-img flex-center align-center">
            <img src="<?php the_sub_field('imagem_da_caixa'); ?>" alt="<?php the_sub_field('titulo_da_caixa');?>">
          </div>

          <span class="circle-title"><?php the_sub_field('titulo_da_caixa'); ?></span>
          <div class="content">
            <?php the_sub_field('conteudo_da_caixa'); ?>
          </div>
        </div>
      <?php endwhile; endif;?>

      <div class="view-dep">
        <a href="<?php bloginfo('url') ?>/depoimentos-de-clientes/" class="flex-center align-center dep-link text-center"><span><strong><u>Clique Aqui</u></strong> para ver os depoimentos de nossos clientes!</span></a>
      </div>

    </div>

  </div>
</section>

<section class="qs-page qs-register-info">
  <div class="container">
    <div class="flex-parent flex align-center">
      <div class="col flex qs-register-content">
        <div class="col flex-center align-center">
          <i class="fa fa-file-text" aria-hidden="true"></i>
        </div>

        <div class="col">
          <span class="qs-register-title">Dados de Registro</span>
            <p>CNPJ: 000000000000</p></br>
        </div>
      </div>
    </div>
  </div>
</section>

<!--<?php include TEMPLATEPATH.'/inc/footer-newsletter-blog.php'; ?>-->

<?php get_footer(); ?>