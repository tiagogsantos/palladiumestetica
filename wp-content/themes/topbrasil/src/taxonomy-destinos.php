<?php include 'header.php'; ?>

<?php include 'inc/search-top.php'; ?>

<?php include 'inc/breadcrumb-back.php'; ?>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<?php

$queried_object = get_queried_object();

$term = $queried_object;

$idEdit = $term->term_id;

$slides = get_field('slide_destinos', $term);

$text2 = get_field('segunda_ordem', $term);

$text3 = get_field('terceira_ordem', $term);

$text4 = get_field('quarta_ordem', $term);

$text5 = get_field('quinta_ordem', $term);

$text6 = get_field('sexta_ordem', $term);

$text7 = get_field('setima_ordem', $term);

$text8 = get_field('oitava_ordem', $term);

$text9 = get_field('nona_ordem', $term);

$text10 = get_field('decima_ordem', $term);

$text11 = get_field('decima_primeira_ordem', $term);

$text12 = get_field('decima_segunda_ordem', $term);

$text13 = get_field('decima_terceira_ordem', $term);

$text14 = get_field('decima_quarta_ordem', $term);

$text15 = get_field('decima_quinta_ordem', $term);

$text16 = get_field('decima_sexta_ordem', $term);

$text17 = get_field('decima_setima_ordem', $term);

$text18 = get_field('decima_oitava_ordem', $term);

$text19 = get_field('decima_nona_ordem', $term);

$text20 = get_field('vigesima_ordem', $term);

$text21 = get_field('vigesima_primeira_ordem', $term);

$text22 = get_field('vigesima_segunda_ordem', $term);

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

				<div class="top call-banner">

					<div class="banner-content" style="background: url(<?= $slides ?>) bottom center;">

						<div class="top call-number flex-start align-center">					

							<span style="font-size: 33px;"><strong>Ligue ou Envie Mensagem:</strong> 
								<a style="color: #ffffff;" href="https://api.whatsapp.com/send?l=pt&amp;phone=551139268000" target="_self"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
							<span style="font-size: 33px;" class="open-font"><a style="color: #ffffff;" href="https://api.whatsapp.com/send?l=pt&amp;phone=551139268000" target="_self"><span style="font-size: 33px;" class="open-font">(11) 3926-8000</span></a></span>
						</span>

						</div>

						<?php if (get_field('preco_destinos', $term)): ?>


						<div class="call-legend flex-end align-center call-price">

							<span class="col">

							</span>

						</div>

						<?php endif; ?>

					</div>

				</div>

				<div class="middle category-info">

					<h1 class="title-princ text-bold upper-all"><?= $term->name ?></h1>

					<p class="title-princ text-bold upper-all"><?php the_field('subtitulo_de_topico', $term); ?></p>


					<div class="category-content">

						<br/>
						<p class="ptopico"><?php echo category_description( $category_id ); ?></p>

						<?php the_field('descricao_destinos', $term); ?>

					</div>

					<hr>

				</div>

				<div class="bottom category-items">

					<ul class="category-items-list flex-start flex-wrap">

						<?php

							$ts = get_terms( array(



							    'taxonomy' => 'destinos',



							    'child_of' => $term->term_id,



							    'parent' => $term->term_id,



							    'meta_key' => 'peso_destinos',



							    'orderby'    => 'meta_value',



  							    'order'      => 'DESC'					    



							) );


							if ( count($ts) > 0 ) {


							foreach ( $ts as $t ) :


						?>

						<li class="category-item col  link-seo">

							<div class="col category-image">

								<img src="<?= get_field('imagem_de_destaque_topico', $t) ?>" alt="viagem-para-paris-destaque">
							</div>

							<div class="col">

								<a href="http://topbrasiltur.com.br/destinos/<?= $t->slug ?>" title="<?= $t->name ?>"><h2 class="sub-title upper-all text-bold"><?= $t->name ?></h2></a>								

								<?php if ( get_field('preco_destinos', $t) ) : ?>

								<div class="price-pac">
									<span class="price-start">A partir de:</span>

									<span class="price-value"><span class="text-bold open-font"><?= get_field('preco_destinos', $t) ?></span></span> <br/><br/>

									<span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais
									</span>

								</div>

								<?php endif; ?>

							</div>

						</li>

					<?php endforeach; } else { ?>


					<?php

							// WP_Query arguments


							$args = array(

								'post_type'              => array( 'pacotes' ),


								'post_per_page'			 => -1,


								'term'					 => $term->slug,


								'taxonomy'				 => 'destinos',


								'meta_key'			=> 'peso_pacotes',

								'orderby'			=> 'meta_value',

								'order'				=> 'DESC'

							);

							// The Query

							$query = new WP_Query( $args );

							// The Loop

							if ( $query->have_posts() and !get_field('ordem_pacote', $term) ) {

								while ( $query->have_posts() ) {

									$query->the_post();

						?>						

						<?php

							}

								} else {


							?>

							<?php  

							//AYRES

								$posts = get_field('ordem_pacote', $term);

								?>
								<ul class="category-items-list flex-start flex-wrap">
								<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

								        <?php setup_postdata($post); ?>

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
										<?php	endif; ?>
									   </div>
									   <div class="col">
									      <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
									         <h2 class="sub-title text-bold"><?= the_title(); ?></h2>
									         <p class="sub-title text-bold"> <?= get_field ('subtitulo') ?></p>
									      </a>
									      <div class="roteiro-pac">
									         <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
									      </div>
									      <div class="durac-pac">
									         <span><?= get_field('duracao_pacotes') ?></span>
									      </div>
									      <div class="price-pac">
									      <?php
										$valor = get_field('a_partir_de_pacotes');
										$local = get_the_terms(get_the_ID() , 'localizacao');

										if ($local[0]->name == 'Internacional')
											{
											$moeda = "US$";
											$valor_final = moeda('dolar', $valor);
											}
										  else
											{
											$moeda = "R$";
											$valor_final = moeda('real', $valor);
											}

										?>
									         <span class="price-start">A partir de:</span>
									         <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> <br/><br/>

									         <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>

									      </div>
									   </div>
									</li>							 	

								      <?php endforeach; ?>
								</ul>								

								    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>	
							<?php

								}

								// Restore original Post Data

								wp_reset_postdata();

							?>

					<?php } ?>

					</ul>

					<?php the_field('informacoes_gerais_destino', $term); ?>						

				</div>

				<!-- Inicio da Seleção 2 -->

             <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                         'taxonomy' => 'destinos',                    
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );
                     
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                  
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes2', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
                  
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES                 
                     
                     	$posts = get_field('ordem_dos_pacotes2', $term);
                     
                     	?>

                     	<?php 

						$link = get_field('link_sub_segunda', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text2; ?></h2></a>

						<?php endif; ?>


						<p><?php the_field('conteudo_segunda', $term); ?></p>

                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;" ><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>
                 <center>

					<?php 

						$link = get_field('link_sub_segunda', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				 </center>
            </div>

            <!-- Fim da Seleção 2 -->


            <!-- Inicio da Seleção 3 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes3', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();                     
                     ?>
                  
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes3', $term);
                     
                     	?>

                  <?php 

						$link = get_field('link_sub_terceira', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text3; ?></h2></a>

						<?php endif; ?> 

						<p><?php the_field('conteudo_terceira', $term); ?></p>
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data 
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

                <center>

					<?php 

						$link = get_field('link_sub_terceira', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

					</center>

            </div>

            <!-- Fim da Seleção 3 -->


            <!-- Inicio da Seleção 4 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes4', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>                
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes4', $term);
                     
                     	?>

                     	 <?php 

						$link = get_field('link_sub_quarta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text4; ?></h2></a>

						<?php endif; ?> 

						<p><?php the_field('conteudo_quarta', $term); ?></p>
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

                 <center>

					<?php 

						$link = get_field('link_sub_quarta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				 </center>

            </div>

            <!-- Fim da Seleção 4 -->


            <!-- Inicio da Seleção 5 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes5', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
             
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes5', $term);
                     
                     	?>

                     	<?php 

						$link = get_field('link_sub_quinta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text5; ?></h2></a>

						<?php endif; ?> 

						<p><?php the_field('conteudo_quinta', $term); ?></p>
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_quinta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 5 -->


            <!-- Inicio da Seleção 6 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes6', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
                  
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes6', $term);
                     
                     	?>

                     	<?php 

						$link = get_field('link_sub_sexta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text6; ?></h2></a>

						<?php endif; ?>

						<p><?php the_field('conteudo_sexta', $term); ?></p>
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;" ><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

                <center>

					<?php 

						$link = get_field('link_sub_sexta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 6 -->


            <!-- Inicio da Seleção 7 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes7', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
                
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes7', $term);
                     
                     	?>

                     	<?php 

						$link = get_field('link_sub_setima', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text7; ?></h2></a>

						<?php endif; ?> 

							<p><?php the_field('conteudo_setima', $term); ?></p>                 
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_setima', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 7 -->


            <!-- Inicio da Seleção 8 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes8', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
                  
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes8', $term);
                     
                     	?>

                     	<?php 

						$link = get_field('link_sub_oitava', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text8; ?></h2></a>

						<?php endif; ?>

						<p><?php the_field('conteudo_oitava', $term); ?></p>    
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

                 <center>

					<?php 

						$link = get_field('link_sub_oitava', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				  </center>

            </div>

            <!-- Fim da Seleção 8 -->


            <!-- Inicio da Seleção 9 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes9', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
                
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes9', $term);
                     
                     	?>

                     	<?php 

						$link = get_field('link_sub_nona', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text9; ?></h2></a>

						<?php endif; ?> 

						<p><?php the_field('conteudo_nona', $term); ?></p> 
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_nona', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 9 -->


            <!-- Inicio da Seleção 10 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes10', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes10', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_decima', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text10; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_decima', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_decima', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 10 -->


            <!-- Inicio da Seleção 11 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes11', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes11', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_decima_primeira', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text11; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_decima_primeira', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_decima_primeira', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 11 -->


            <!-- Inicio da Seleção 12 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes12', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes12', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_decima_segunda', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text12; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_decima_segunda', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_decima_segunda', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 12 -->



            <!-- Inicio da Seleção 13 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes13', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes13', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_decima_terceira', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text13; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_decima_terceira', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_decima_terceira', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 13 -->



            <!-- Inicio da Seleção 14 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes14', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes14', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_decima_quarta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text14; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_decima_quarta', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_decima_quarta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 14 -->



            <!-- Inicio da Seleção 15 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array(
                     
                     
                     
                         'taxonomy' => 'destinos',
                     
                     
                     
                         'child_of' => $term->term_id,
                     
                     
                     
                         'parent' => $term->term_id,
                     
                     
                     
                         'meta_key' => 'peso_destinos',
                     
                     
                     
                         'orderby'    => 'meta_value',
                     
                     
                     
                     		    'order'      => 'DESC'  
                     
                     
                     ) );                   
                     
                     
                     if ( count($ts) > 0 ) {
                     
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments
                     
                     
                     $args = array(
                     

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,

                     
                     	'taxonomy'				 => 'destinos',

                     
                     	'meta_key'			=> 'peso_pacotes',                     
                     
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes15', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes15', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_decima_quinta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text15; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_decima_quinta', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_decima_quinta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 15 -->



            <!-- Inicio da Seleção 16 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array( 
                     
                         'taxonomy' => 'destinos',
                     
                         'child_of' => $term->term_id,
                     
                         'parent' => $term->term_id,                     
                     
                         'meta_key' => 'peso_destinos',
                     
                         'orderby'    => 'meta_value',                     
                     
                     		    'order'      => 'DESC'
                     
                     ) ); 
                     
                     if ( count($ts) > 0 ) {
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments                     
                     
                     $args = array(

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,
                     
                     	'taxonomy'				 => 'destinos',
                     
                     	'meta_key'			=> 'peso_pacotes',
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes16', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes16', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_decima_sexta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text16; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_decima_sexta', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_decima_sexta', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 16 -->


            <center>

            <?php 

               $link = get_field('veja_demais_pacote', $term);

               if( $link ): 
                  $link_url = $link['url'];  
            ?>

            <a href="<?php echo esc_url($link_url); ?>" id="bloco1" onclick="acao()">
            <button class="verbotao" style="background: #2c4475;"> 
            <i class="far fa-arrow-alt-circle-right"></i> Veja mais Pacotes</button>
            </a>

            <?php endif; ?>  

            </center>

            <div id="id-show" style="display: none;">




            <!-- Inicio da Seleção 17 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array( 
                     
                         'taxonomy' => 'destinos',
                     
                         'child_of' => $term->term_id,
                     
                         'parent' => $term->term_id,                     
                     
                         'meta_key' => 'peso_destinos',
                     
                         'orderby'    => 'meta_value',                     
                     
                     	 'order'      => 'DESC'
                     
                     ) ); 
                     
                     if ( count($ts) > 0 ) {
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments                     
                     
                     $args = array(

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,
                     
                     	'taxonomy'				 => 'destinos',
                     
                     	'meta_key'			=> 'peso_pacotes',
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes17', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes17', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_decima_setima', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text17; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_decima_setima', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_decima_setima', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 17 -->


            <!-- Inicio da Seleção 18 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array( 
                     
                         'taxonomy' => 'destinos',
                     
                         'child_of' => $term->term_id,
                     
                         'parent' => $term->term_id,                     
                     
                         'meta_key' => 'peso_destinos',
                     
                         'orderby'    => 'meta_value',                     
                     
                     	 'order'      => 'DESC'
                     
                     ) ); 
                     
                     if ( count($ts) > 0 ) {
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments                     
                     
                     $args = array(

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,
                     
                     	'taxonomy'				 => 'destinos',
                     
                     	'meta_key'			=> 'peso_pacotes',
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes18', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes18', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_decima_oitava', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text18; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_decima_oitava', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data                    
                     
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_decima_oitava', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 18 -->


            <!-- Inicio da Seleção 19 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array( 
                     
                         'taxonomy' => 'destinos',
                     
                         'child_of' => $term->term_id,
                     
                         'parent' => $term->term_id,                     
                     
                         'meta_key' => 'peso_destinos',
                     
                         'orderby'    => 'meta_value',                     
                     
                     	 'order'      => 'DESC'
                     
                     ) ); 
                     
                     if ( count($ts) > 0 ) {
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments                     
                     
                     $args = array(

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,
                     
                     	'taxonomy'				 => 'destinos',
                     
                     	'meta_key'			=> 'peso_pacotes',
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes19', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes19', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_decima_nona', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text19; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_decima_nona', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_decima_nona', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 19 -->


            <!-- Inicio da Seleção 20 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array( 
                     
                         'taxonomy' => 'destinos',
                     
                         'child_of' => $term->term_id,
                     
                         'parent' => $term->term_id,                     
                     
                         'meta_key' => 'peso_destinos',
                     
                         'orderby'    => 'meta_value',                     
                     
                     	 'order'      => 'DESC'
                     
                     ) ); 
                     
                     if ( count($ts) > 0 ) {
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments                     
                     
                     $args = array(

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,
                     
                     	'taxonomy'				 => 'destinos',
                     
                     	'meta_key'			=> 'peso_pacotes',
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes20', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes20', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_vigesima', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text20; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_vigesima', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_vigesima', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 20 -->


            <!-- Inicio da Seleção 21 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array( 
                     
                         'taxonomy' => 'destinos',
                     
                         'child_of' => $term->term_id,
                     
                         'parent' => $term->term_id,                     
                     
                         'meta_key' => 'peso_destinos',
                     
                         'orderby'    => 'meta_value',                     
                     
                     	 'order'      => 'DESC'
                     
                     ) ); 
                     
                     if ( count($ts) > 0 ) {
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments                     
                     
                     $args = array(

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,
                     
                     	'taxonomy'				 => 'destinos',
                     
                     	'meta_key'			=> 'peso_pacotes',
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes21', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes21', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_vigesima_primeira', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text21; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_vigesima_primeira', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_vigesima_primeira', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 21 -->


            <!-- Inicio da Seleção 22 -->

            <div class="bottom category-items">
               <ul class="category-items-list flex-start flex-wrap">
                  <?php
                     $ts = get_terms( array( 
                     
                         'taxonomy' => 'destinos',
                     
                         'child_of' => $term->term_id,
                     
                         'parent' => $term->term_id,                     
                     
                         'meta_key' => 'peso_destinos',
                     
                         'orderby'    => 'meta_value',                     
                     
                     	 'order'      => 'DESC'
                     
                     ) ); 
                     
                     if ( count($ts) > 0 ) {
                     
                     foreach ( $ts as $t ) :                     
                     
                     ?>
                 
                  <?php endforeach; } else { ?>
                  <?php
                     // WP_Query arguments                     
                     
                     $args = array(

                     	'post_type'              => array( 'pacotes' ),
                     
                     	'post_per_page'			 => -1,                     
                     
                     	'term'					 => $term->slug,
                     
                     	'taxonomy'				 => 'destinos',
                     
                     	'meta_key'			=> 'peso_pacotes',
                     
                     	'orderby'			=> 'meta_value', 
                     
                     	'order'				=> 'DESC'
                     
                     );  
                     
                     // The Query
                     
                     $query = new WP_Query( $args );                      
                     
                     // The Loop                     
                     
                     if ( $query->have_posts() and !get_field('ordem_dos_pacotes22', $term) ) {
                     
                     
                     	while ( $query->have_posts() ) {
                     
                     		$query->the_post();
                     
                     ?>
               
                  <?php
                     }
                     	} else {                     
                     ?>
                  <?php  
                     //AYRES
                     
                     	$posts = get_field('ordem_dos_pacotes22', $term);
                     
                     	?>


                     	<?php 

						$link = get_field('link_sub_vigesima_segunda', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<h2 class="sub-title text-bold1"> <?php echo $text22; ?></h2></a>

						<?php endif; ?>        

						<p><?php the_field('conteudo_vigesima_segunda', $term); ?></p>          
                  
                  <ul class="category-items-list flex-start flex-wrap">
                     <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                     <?php setup_postdata($post); ?>
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
                           <?php	endif; ?>
                        </div>
                        <div class="col">
                           <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
                              <h3 class="sub-title text-bold"><?= the_title(); ?>
                                 </h3>
                              <p class="sub-title text-bold"><?= get_field ('subtitulo') ?></p>
                           </a>
                           <div class="roteiro-pac">
                              <em><span><?= get_field('roteiro_texto_pacotes') ?></span></em>
                           </div>
                           <div class="durac-pac">
                              <span><?= get_field('duracao_pacotes') ?></span>
                           </div>
                           <div class="price-pac">
                              <?php
                                 $valor = get_field('a_partir_de_pacotes');
                                 $local = get_the_terms(get_the_ID() , 'localizacao');
                                 
                                 if ($local[0]->name == 'Internacional')
                                 	{
                                 	$moeda = "US$";
                                 	$valor_final = moeda('dolar', $valor);
                                 	}
                                   else
                                 	{
                                 	$moeda = "R$";
                                 	$valor_final = moeda('real', $valor);
                                 	}
                                 
                                 ?>
                              <span class="price-start"><?php the_field('selecao_de_parcelamento'); ?></span>
                              <span class="price-value"><span class="text-bold open-font"><?=$moeda ?> <?=$valor_final ?></span></span> 
                              <span class="price-start" style="text-transform: lowercase;"><?php the_field('valor_referente'); ?></span>
                              <br/><br/>
                              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
                           </div>
                        </div>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php
                     }  
                     
                     // Restore original Post Data
                     
                     wp_reset_postdata(); 
                     
                     ?>
                  <?php } ?>
               </ul>

               <center>

					<?php 

						$link = get_field('link_sub_vigesima_segunda', $term);

						if( $link ): 
							$link_url = $link['url'];	
							?>

							<a href="<?php echo esc_url($link_url); ?>">
							<button class="verbotao"> 
							<i class="far fa-arrow-alt-circle-right"></i> Veja mais 
							</button>
							</a>

						<?php endif; ?>			  

				</center>

            </div>

            <!-- Fim da Seleção 22 -->
        </div>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

            <script type="text/javascript">
            $(function(){       
            $("#bloco1").click(function(){
                $("#id-show").show("slow");
                $("#bloco1").hide("fast");});
            });
            </script>


			</div>
		</div>
	</div>
	
</section>

<?php include 'inc/footer-newsletter-blog.php'; ?>


<style type="text/css">
                
section.news-blog .blog-footer {max-width: none; margin: -18px 0 auto;}

section.category-page .category-items-list>li {margin-top: 13px;}

section.news-blog .blog-footer li .col {max-width: none;}

section.news-blog .blog-footer li .col:first-child {max-width: none; height: 57px;}  

li.flex.align-center.link-seo {margin-left: 10px;}

i.fas.fa-star-half-alt {font-size: 25px; color: #ffca26;}

p.notaqualificacao {font-size: 30px !important; font-weight: bold; margin-left: 57px;}

.fas.fa-star {font-size: 25px !important; padding: 1px; margin-top: -1px;}

.bar-5 {height: 18px; background-color: #4caf50;}

.bar-6 {height: 18px; background-color: #2196f3;}

.bar-7 {height: 18px; background-color: #00bcd4;}

.bar-container {height: 18px; width: 100%; background-color: #e0e0e0; text-align: center; color: #fff;}

.col.primeiro {width: 268px;}

.col.depoimentohome {height: 23px !important;}

.depoimentopeople {height: 110px !important; text-align: center;}

section.news-blog .destaque-title {font-size: 2.0rem;}

p.title-princ.text-bold.upper-all {display: contents; line-height: 1.1;}
h1.title-princ.text-bold.upper-all {display: contents;}

@media screen and (max-width: 728px) and (min-width: 360px) {
p.notaqualificacao {margin-left: 0px;}

p.destaque-title.text-center {font-size: 18px !important;}

.depoimentopeople {height: 184px !important;}
}

</style>


<style type="text/css">   
   h2.sub-title.text-bold {display: contents;}

   p.sub-title.text-bold {display: contents; line-height: 0px;} 

   p{margin-top: 8px !important;}  

   

   h3.sub-title.text-bold {display: contents;}

   h2.sub-title.text-bold1 {font-size: 1.875rem !important; color: #36538f; font-weight: bold;    
    margin-bottom: 15px !important;}
    
   h2.sub-title.text-bold3 {font-size: 1.875rem !important; color: #36538f; font-weight: bold;    
    margin-bottom: 15px !important;}

   h2.sub-title.text-bold4 {font-size: 1.875rem !important; color: #36538f; font-weight: bold;    
    margin-bottom: 15px !important;}

</style>

<style type="text/css">

	a.linkagemblog {text-decoration: underline; color: blue;}

	a.linkagemblog:hover {color: orange;}

   li.lista{list-style-type: circle; font-size: .875rem; margin-left: 18px; line-height: 20px;}
   h2.sub-title.text-bold {display: contents;}
   h3.sub-title.text-bold {display: contents;}
   h2.sub-title.text-bold1 {font-size: 1.875rem !important; color: #36538f; font-weight: bold;    
    margin-bottom: 15px !important;}
   h2.sub-title.text-bold3 {font-size: 1.875rem !important; color: #36538f; font-weight: bold;    
    margin-bottom: 15px !important;}

   h2.sub-title.text-bold4 {font-size: 1.875rem !important; color: #36538f; font-weight: bold;    
    margin-bottom: 15px !important;}


   p.sub-title.text-bold {display: contents; line-height: 0px;}
   section.category-page .category-items-list .roteiro-pac {margin-top: 2px;}


   p.title-princ.text-bold.upper-all {display: contents; line-height: 1.1;}
   h1.title-princ.text-bold.upper-all {display: contents;}

   .espacamento {position: absolute; margin-top: -40px;}

   button.verbotao {cursor: pointer !important; color: #fff; padding: 15px 20px; font-size: 14px;
    border-radius: 3px; background: #fe7d29; margin-bottom: 50px; margin-top: -16px;
    text-transform: uppercase; font-weight: bold;}
    
</style>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



<?php include 'footer.php'; ?>


<script>



	$(document).ready(function() {



		$('.ab-top-menu').append('<li id="wp-admin-bar-edit" class=""><a class="ab-item" href=http://topbrasiltur.com.br/wp-admin/term.php?taxonomy=destinos&tag_ID='+<?= $idEdit ?>+'&post_type=pacotes&wp_http_referer=%2Fwp-admin%2Fedit-tags.php%3Ftaxonomy%3Ddestinos%26post_type%3Dpacotes">Editar</a></li>');



	});



</script>