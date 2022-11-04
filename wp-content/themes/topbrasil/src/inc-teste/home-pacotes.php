<section class="home-pacotes sidebar-section">
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

			<div class="col pacotes">
				<div class="top">
					<h2 class="title-princ strong text-blue">
						<?= get_field('titulo_d_1'); ?>
					</h2>
					<?= get_field('texto_d_1'); ?>


					<?php
						$imagem_pacote_1_d_1 = get_field('img_pacote_1_d_1');
					?>

					<div class="flex align-center pacotes-two">
						<div class="pacote-box col link-seo">
							<div class="pacote-img">
								<img src="<?= $imagem_pacote_1_d_1['url'] ?>" alt="<?= $imagem_pacote_1_d_1['title'] ?>">
							</div>
							<div class="pacote-desc flex-col flex align-center">
								<h3 class="pacote-title"><?= get_field('titulo_pacote_1_d_1'); ?></h3>

								<p class="pacote-content"><?= get_field('texto_pacote_1_d_1'); ?></p>

								<div class="pacote-btn">
									<a href="<?= get_field('link_pacote_1_d_1') ?>" class="btn-transparent">Saiba Mais</a>
								</div>
							</div>
						</div>

						<?php
							$imagem_pacote_2_d_1 = get_field('img_pacote_2_d_1');
						?>

						<div class="pacote-box col link-seo">
							<div class="pacote-img">
								<img src="<?= $imagem_pacote_2_d_1['url'] ?>" alt="<?= $imagem_pacote_2_d_1['title'] ?>">
							</div>
							<div class="pacote-desc flex-col flex align-center">
								<h3 class="pacote-title"><?= get_field('titulo_pacote_2_d_1'); ?></h3>

								<p class="pacote-content"><?= get_field('texto_pacote_2_d_1'); ?></p>

								<div class="pacote-btn">
									<a href="<?= get_field('link_pacote_2_d_1') ?>" class="btn-transparent">Saiba Mais</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="bottom">
					<h2 class="title-princ strong text-blue">
						<?= get_field('titulo_d_2'); ?>
					</h2>
					<?= get_field('texto_d_2'); ?>

					<ul class="pacotes-three flex">
						<li class="pacote-box link-seo">
						<?php
							$img_pacote_1_d_2 = get_field('img_pacote_1_d_2');
						?>
							<a href="<?= get_field('link_pacote_1_d_2') ?>"></a>
							<div class="pacote-img">
								<img src="<?= $img_pacote_1_d_2['url'] ?>" alt="<?= $img_pacote_1_d_2['title'] ?>">
							</div>
							<div class="pacote-desc flex-col flex align-start">
								<h3 class="pacote-title"><?= get_field('titulo_pacote_1_d_2') ?></h3>

								<p class="pacote-price">a partir de <span class="price-box"><?= get_field('preco_pacote_1_d_2') ?></span></p>

								<div class="pacote-btn">
									<!-- <a href="<?= get_field('link_pacote_1_d_2') ?>" class="btn-transparent">Saiba Mais</a> -->
								</div>
							</div>
						</li>

						<li class="pacote-box link-seo">
						<?php
							$img_pacote_2_d_2 = get_field('img_pacote_2_d_2');
						?>
							<a href="<?= get_field('link_pacote_2_d_2') ?>"></a>
							<div class="pacote-img">
								<img src="<?= $img_pacote_2_d_2['url'] ?>" alt="<?= $img_pacote_2_d_2['title'] ?>">
							</div>
							<div class="pacote-desc flex-col flex align-start">
								<h3 class="pacote-title"><?= get_field('titulo_pacote_2_d_2') ?></h3>

								<p class="pacote-price">a partir de <span class="price-box"><?= get_field('preco_pacote_2_d_2') ?></span></p>

								<div class="pacote-btn">
									<!-- <a href="<?= get_field('link_pacote_2_d_2') ?>" class="btn-transparent">Saiba Mais</a> -->
								</div>
							</div>
						</li>

						<li class="pacote-box link-seo">
						<?php
							$img_pacote_3_d_2 = get_field('img_pacote_3_d_2');
						?>
							<a href="<?= get_field('link_pacote_3_d_2') ?>"></a>
							<div class="pacote-img">
								<img src="<?= $img_pacote_3_d_2['url'] ?>" alt="<?= $img_pacote_3_d_2['title'] ?>">
							</div>
							<div class="pacote-desc flex-col flex align-start">
								<h3 class="pacote-title"><?= get_field('titulo_pacote_3_d_2') ?></h3>

								<p class="pacote-price">a partir de <span class="price-box"><?= get_field('preco_pacote_3_d_2') ?></span></p>

								<div class="pacote-btn">
									<!-- <a href="<?= get_field('link_pacote_3_d_2') ?>" class="btn-transparent">Saiba Mais</a> -->
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
