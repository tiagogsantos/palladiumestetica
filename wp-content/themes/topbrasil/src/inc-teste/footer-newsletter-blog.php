<section class="news-blog">

	<div class="container">

		<div class="flex flex-parent">

			<div class="col">

				<p class="destaque-title text-center">Receba Dicas e<br>Promoções Exclusivas</p>

				<form method="post" action="<?= get_bloginfo('url') ?>/newsletter-cadastrada" id="newsletter-form">

					<ul>

						<li>

							<input data-yts-val="true" type="text" name="nome" placeholder="Nome" class="in-def">

						</li>

						<li>

							<input data-yts-val="true" type="email" name="email" placeholder="E-mail" class="in-def">

						</li>

						<li>

							<button form="newsletter-form" class="btn-def" type="submit">Quero me Cadastrar</button>

						</li>

					</ul>

				</form>

			</div>



			<div class="col">

				<p class="destaque-title text-center">Blog Top Brasil</p>

				<ul class="blog-footer">



					<?php

						// WP_Query arguments

						$args = array(

							'post_type'              => array( 'post' ),

							'nopaging'               => false,

							'posts_per_page'         => '2',

							'posts_per_archive_page' => '2',

						);



						// The Query

						$query = new WP_Query( $args );



						// The Loop

						if ( $query->have_posts() ) {

							$x = 0;

							while ( $query->have_posts() ) {

								$query->the_post();

								$x++;

					?>



						<li class="flex align-center link-seo">

							<div class="col">

								<?php $cat_img = catch_that_image(); ?>								<?php if ( the_post_thumbnail() ) : ?>									<?= the_post_thumbnail() ?>								<?php endif; ?>

							</div>

							<div class="col">

								<p><a href="<?= the_permalink(); ?>"><?= the_title() ?></a></p>

							</div>

						</li>



						<?php if ($x < 2): ?>

							<li class="divisor">

								<hr>

							</li>

						<?php endif; ?>



					<?php

							}

						} else {

							// no posts found

						}



						// Restore original Post Data

						wp_reset_postdata();



					?>

				</ul>

				<a href="/blog" class="btn-transparent blog-footer-btn">

					<span>Veja Mais Matérias</span>

					<i class="fa fa-plus" aria-hidden="true"></i>

				</a>

			</div>

		</div>

	</div>

</section>