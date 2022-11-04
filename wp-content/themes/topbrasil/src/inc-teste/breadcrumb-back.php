<section class="breadcrumb-back">
	<div class="container">
		<div class="parent-flex flex">
			<div class="breadcrumb col">
				<!-- <ul xmlns:v="http://rdf.data-vocabulary.org/#">
					<li typeof="v:Breadcrumb_first" class="home">
						<div onclick="window.location=&quot;http://marcusmarques.com.br&quot;">
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
					</li>

					<li rel="v:child" typeof="v:Breadcrumb" class="ativando">
						Blog
					</li>
				</ul> -->
				<?php if (is_tax('destinos')): ?>
				<ul class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
				</ul>
				<?php else: ?>
				<?php if ( function_exists('yoast_breadcrumb') )
					{yoast_breadcrumb();}
					$breadcrumbs = yoast_breadcrumb("","",false);
				?>
				<?php endif ?>
			</div>

			<div class="col back-page">
				<a href="javascript:history.back()" class="back-page-button">Voltar</a>
			</div>
		</div>
	</div>
</section>
