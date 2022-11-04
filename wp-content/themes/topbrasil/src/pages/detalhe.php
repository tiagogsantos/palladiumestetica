<?php get_header(); ?>

<?php include '/inc/search-top.php'; ?>

<?php the_post(); ?>

<section class="share-top">
  <div class="container">
    <ul class="flex flex-end align-center share-content">
      <li class="share-item link-seo">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <a href="#">Enviar por E-mail</a>
      </li>

      <li class="share-item link-seo">
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <a href="#">Tweetar</a>
      </li>

      <li class="share-item link-seo">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
        <a href="#">Curtir</a>
      </li>

      <li class="share-item link-seo">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
        <a href="#">Compartilhar</a>
      </li>
    </ul>
  </div>
</section>

<section class="detail-content">
  <div class="container">
    <div class="flex-parent flex align-start">
      <div class="col">
        <h1 class="title-princ text-bold upper-all"><?php the_title(); ?></h1>
        <div class="detail-desc">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="col">
        <div class="gallery-title flex-start align-end">
          <i class="fa fa-camera-retro" aria-hidden="true"></i>
          <span class="sub-title upper-all text-bold">Fotos</span>
        </div>

        <div class="detail-gallery">
          <div class="top">
            <div id="destaque-gallery">

              <?php

              // check if the repeater field has rows of data
              if( have_rows('imagens_da_galeria') ):

                $x = 0;

               	// loop through the rows of data
                while ( have_rows('imagens_da_galeria') ) : the_row();
                $x++;

              ?>

                <img src="<?php the_sub_field('imagem_da_galeria_do_post'); ?>" alt="<?php the_title() ?>">

              <?php

                if ($x == 1) {
                  break;
                }

                endwhile;

              endif;

              ?>
            </div>

            <div class="detail-carousel-gallery">

              <?php

              // check if the repeater field has rows of data
              if( have_rows('imagens_da_galeria') ):

               	// loop through the rows of data
                  while ( have_rows('imagens_da_galeria') ) : the_row();

              ?>

                <div class="gallery-item">
                  <img src="<?php the_sub_field('imagem_da_galeria_do_post'); ?>" alt="<?php the_title() ?>">
                </div>

              <?php

                  endwhile;

              endif;

              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'mais-pacotes.php' ?>

<?php get_footer(); ?>