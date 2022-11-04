<?php get_header(); ?>



<?php include TEMPLATEPATH.'/inc/search-top.php'; ?>


<?php include TEMPLATEPATH.'/inc/breadcrumb-back.php'; ?>



<?php the_post(); ?>



<section class="page-detalhe share-top">

  <div class="container">

    <ul class="flex flex-end align-center share-content">

        <li class="share-item open-font">



          <i class="fa fa-envelope" aria-hidden="true"></i>



          <a href="#">Enviar por E-mail</a>



        </li>







        <li class="share-item social-item open-font">



          <i class="fa fa-twitter" aria-hidden="true"></i>



          <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>" target="_blank">Tweetar</a>



        </li>







        <?php $cookie_like = 'post-liked-'.get_the_ID(); ?>







        <?php if (!$_COOKIE["$cookie_like"]): ?>



          <!--li class="share-item like-item open-font">



            <?php if (get_field('numero_de_curtidas') < 1) {



              $likes = 0;



            } else {



              $likes = get_field('numero_de_curtidas');



            }?>



            <input type="hidden" name="like-number" value="<?php ;  ?>">



            <input type="hidden" name="like-id" value="<?= get_the_ID(); ?>">



            <i class="fa fa-facebook-official" aria-hidden="true"></i>



            <a href="#">Curtir</a>



          </li-->



        <?php endif; ?>







        <li class="share-item social-item open-font">



          <i class="fa fa-facebook-official" aria-hidden="true"></i>



          <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" target="_blank">Compartilhar</a>



        </li>

    </ul>

  </div>

</section>



<section class="detail-content page-detalhe">

  <div class="container">

    <div class="flex-parent flex align-start">

      <div class="col">

        <span class="title-princ text-bold upper-all">Passagens Aéreas</span>

        <div class="dep-info">

          <h1><?php the_title(); ?></h1>

        </div>

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



<?php require TEMPLATEPATH.'/inc/footer-newsletter-blog.php'; ?>



<?php get_footer(); ?>
