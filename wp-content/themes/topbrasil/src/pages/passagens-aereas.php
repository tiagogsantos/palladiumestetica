<?php //Template Name: Passagens Aéreas ?>



<?php the_post(); ?>



<?php get_header(); ?>



<?php include TEMPLATEPATH.'/inc/search-top.php'; ?>



<?php include TEMPLATEPATH.'/inc/breadcrumb-back.php'; ?>



<section class="list-banner call-banner page-pass">

	<div class="container">

		<div class="banner-content" style="background: url(<?= get_field('banner_lista'); ?>) bottom center;">



			<?php if (get_field('telefone_para_ligação')): ?>

				<div class="top call-number flex-center align-center">

					<i class="fa fa-phone" aria-hidden="true"></i>

					<span class="upper-all"><strong>Ligue agora:</strong> <span class="open-font"><?php the_field('telefone_para_ligação') ?></span><span class="open-font"> | (21) 3005-3028</span></span>

				</div>

			<?php endif; ?>

			<?php if (get_field('titulo_do_banner')): ?>

				<div class="call-legend flex-end align-center call-name">

					<span class="col upper-all text-bold">

						<?php the_field('titulo_do_banner'); ?>

					</span>

				</div>

			<?php endif; ?>



		</div>

	</div>

</section>



<section class="page-list">

	<div class="container">

		<h1 class="title-princ upper-all text-bold"><?= the_title(); ?></h1>



		<div class="page-content">

			<?= the_content(); ?>

		</div>

	</div>

</section>



<section class="page-list list-items depoimentos-list">

	<div class="container">

		<ul class="page-list-items">



		<?php



			// WP_Query arguments
			$args = array(
				'post_type'              => array( 'passagens-aereas' ),
				'posts_per_page'         => -1,
			);

			// The Query
			$query = new WP_Query( $args );

			$x = 0;

			while ( $query->have_posts() ) : $query->the_post();
				$x++;
			endwhile;


			$pages = $x / 5;

			$pages = ceil($pages);


			$url = $_SERVER['REQUEST_URI'];

			$url = explode('page/', $url);

			$page_atual = intval(stripslashes($url[1]));

			$page_atual = (int)$page_atual;

			if ($page_atual < 1 || $page_atual ==  null) {

				$page_atual++;

			}

			$page_atual--;



		?>



		<?php


			$p_offset = $page_atual * 5;

			// WP_Query arguments
			$args = array(
				'post_type'              => array( 'passagens-aereas' ),
				'posts_per_page'         => '5',
				'offset'                 => $p_offset,
			);

			// The Query
			$query = new WP_Query( $args );

			while ( $query->have_posts() ) : $query->the_post();

		?>





			<li class="flex link-seo">

				<div class="col img-item">

					<img src="/front/assets/img/lista-exemplo.jpg" alt="">

				</div>



				<div class="col content-item flex-col flex">

					<h2 class="sub-title text-bold upper-all"><?= the_title(); ?></h2>



					<div class="item-desc">

						<?= the_excerpt(); ?>

					</div>



					<a href="<?php the_permalink(); ?>" class="btn-list upper-all text-bold">Leia Mais <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>

				</div>

			</li>



		<?php endwhile; ?>





		</ul>



		<div class="paginacao open-font">

			<?php $page_atual++; ?>

			<ul>

				<li>

					<a href="<?php if ($page_atual >= 2) {echo '../../page/'.($page_atual-1);}else{ echo '#'; } ?>">

						<i class="fa fa-angle-double-left" aria-hidden="true"></i>

					</a>
				</li>

				<?php if ($page_atual + 6 >= $pages && $pages >= 7): ?>

					<?php $d = 6; ?>

					<?php

						for ($d=6; $d > -1; $d--) :

					?>

					<li>

						<?php

							$this_page = $pages - $d;

							if ($pages - $d == $page_atual) {

								$class = 'ativo';

								$link_page = '#';

							} else {

								$class = 'inativo';

								$link_page = '../../page/' . $this_page;

							}

						?>

						<a class="<?php echo $class; ?>" href="<?php echo $link_page ?>">

							<?php echo $pages-$d; ?>

						</a>

					</li>

					<?php

						endfor;

					?>

				<?php else: ?>

					<li><a href="#" class="ativo"><?php echo $page_atual; ?></a></li>
						<?php for ($i=1; $i < 7; $i++) { ?>

						

							<?php if ($page_atual + $i <= $pages): ?>

							<li>
								<a href="<?php if ($page_atual >= 2) {echo '../.';}; ?>./page/<?php echo $page_atual+$i; ?>">
									<?php echo $page_atual+$i; ?>
								</a>
							</li>
							<?php endif; ?>
						<?php	} ?>

				<?php endif; ?>

				<li><a href="<?php if ($page_atual >= 2) {echo '../.';} if ($page_atual + 1 <= $pages) {echo './page/'.($page_atual+1);}else{ echo '#'; } ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>

			</ul>

		</div>

	</div>

</section>



<?php get_footer(); ?>