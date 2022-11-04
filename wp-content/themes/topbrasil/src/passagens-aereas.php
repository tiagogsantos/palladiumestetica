<?php //Template Name: Lista Passagens ?>
<?php the_post(); ?>
<?php include 'header.php'; ?>

<?php include 'inc/search-top.php'; ?>

<section class="list-banner call-banner">
	<div class="container">
		<div class="banner-content" style="background: url(<?= get_field('banner_lista'); ?>) bottom center;">
			<div class="top call-number flex-center align-center">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<span><strong>Ligue agora:</strong> <span class="open-font">(11) 5576-6300</span><span class="open-font"> | (21) 3005-3028</span></span>
			</div>

			<!--div class="call-legend flex-end align-center call-name">
				<span class="col upper-all text-bold">
					Passagens Aéreas
				</span>
			</div-->
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

<section class="page-list list-items">
	<div class="container">
		<ul class="page-list-items">

		<?php  

			$terms = get_terms( array(
			    'taxonomy' => get_field('taxonomia_de_loop'),
			    'hide_empty' => true,
			) );

			foreach ($terms as $term) :

		?>


			<li class="flex">
				<div class="col img-item">
					<img src="/front/assets/img/lista-exemplo.jpg" alt="">
				</div>

				<div class="col content-item flex-col flex">
					<h2 class="sub-title text-bold upper-all"><?= $term->name ?></h2>

					<div class="item-desc">
						<?= lchar(get_field('descricao_passagem', $term),499) ?>
					</div>

					<a href="<?= '/'. get_field('taxonomia_de_loop') . '/' . $term->slug ?>" class="btn-list upper-all text-bold">Leia Mais <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
				</div>
			</li>

		<?php endforeach; ?>

			
		</ul>
	</div>
</section>

<?php include 'footer.php'; ?>
