<?php // Template Name: Busca ?>

<?php include 'header.php'; ?>

<?php include 'inc/search-top.php'; ?>

<?php include 'inc/breadcrumb-back.php'; ?>

<div class="blog">

<?php

  $s = $_GET['busca'];
  $args = array(
          'post_type'              => 'pacotes',
          'nopaging'               => true,
          'posts_per_page'         => '-1',
          'posts_per_archive_page' => '-1',
          's'                      =>$s
        );
$the_query = new WP_Query( $args );

?>
<section class="home-pacotes category-page sidebar-section">
	<div class="container">
		<div class="flex flex-parent">
			<aside class="col aside">
				<?php
					$args = [

						'menu' => 'Menu Lateral',
						'menu_class' => 'pacotes-menu'

					];

					wp_nav_menu( $args );
				?>

			</aside>

			<div class="col categoria">


				<div class="middle category-info">
					<h1 class="title-princ text-bold upper-all">Resultado da busca para: "<?= $s ?>"</h1>

					<hr>
				</div>

				<div class="bottom category-items">
					<ul class="category-items-list flex-start flex-wrap">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li class="category-item col  link-seo">





              <div class="col category-image">





                <?php $imagem = get_field('imagem_destaque_pacotes'); ?>



                <?php $imagem_other = get_field('imagem'); ?>



                <?php $cat_img = catch_that_image(); ?>



                <?php if ( $imagem ) : ?>



                  <img src="<?= $imagem['url'] ?>" alt="<?= $imagem['title'] ?>">



                <?php elseif ( !empty($cat_img) ) : ?>



                  <img src="<?= $cat_img ?>" alt="<?= the_title() ?>">



                <?php elseif ( $imagem_other ) : ?>



                  <img src="<?= $imagem_other['url'] ?>" alt="<?= $imagem_other['title'] ?>">



                <?php else: ?>



                  <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=488%C3%97317&w=488&h=317" alt="<?= the_title() ?>">



                <?php endif; ?>





              </div>











              <div class="col">





                <a href="<?= the_permalink(); ?>" title="<?php the_title(); ?>">
                <h2 class="sub-title text-bold"><?= the_title(); ?></h2>
                <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>

            	</a>











                <div class="roteiro-pac">





                  <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>





                </div>











                <div class="durac-pac">





                  <span><?= get_field('duracao_pacotes') ?></span>





                </div>











                <div class="price-pac">





                  <span class="price-start">A partir de:</span>











                  <?php





                          $valor = get_field('a_partir_de_pacotes');





                          $local = get_the_terms( get_the_ID(), 'localizacao' );











                          if ( $local[0]->name == 'Internacional' ) {





                            $moeda = "US$";





                            $valor_final = moeda('dolar', $valor);





                          } else {





                            $moeda = "R$";





                            $valor_final = moeda('real', $valor);





                          }











                  ?>











                  <span class="price-value"><span class="text-bold open-font"><?= $moeda ?> <?= $valor_final ?></span></span>





                </div>















              </div>





            </li>
            <?php endwhile; wp_reset_query(); ?>
            <?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>

<style type="text/css">   
   h2.sub-title.text-bold {display: contents;}
   p.sub-title.text-bold {display: contents; line-height: 0px;}   
</style>
