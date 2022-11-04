<?php $pacotes = get_field('pacotes_relacionados') ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<?php

$text2 = get_field('titulo_para_relacao_topico');


/*
  $post_id = get_the_ID();
    $_terms = get_the_terms($post_id, 'destinos');
    foreach ($_terms as $_term) {
      if ($_term->parent == 0) //check for parent terms only
          $my_term = $_term->slug;
    }

    // WP_Query arguments
    $args = array(
      'post_type'              => array( 'pacotes' ),
      'posts_per_page'         => '4',
      'posts_per_archive_page' => '4',
      'term'           => $_term->slug,
      'taxonomy'         => 'destinos',
      'orderby'     => 'rand',
      'post__not_in' => array($post_id)
    );
    // The Query
    $query = new WP_Query( $args );
    // The Loop
    if ( $query->have_posts() and !get_field('ordem_pacote', $term) ) :*/

?>

<section class="more-detail category-page">

  <div class="container">

    <h3 class="title-princ text-bold upper-all">

      <i class="fa fa-plus-circle" aria-hidden="true"></i>

      <?php $destino = $local = get_the_terms( get_the_ID(), 'destinos' ); ?>

      <span>Veja Mais </span>

    </h3>

    <ul class="category-items-list flex-start flex-wrap"> 


    	 <?php if(get_field('topicos_veja_mais')): ?>  

  		<?php while(has_sub_field('topicos_veja_mais')): ?> 

    	<?php 

		$link = get_sub_field('link_relacao_topico');

		if( $link ): 
			$link_url = $link['url'];

		?>			

        <li class="category-item col link-seo">
        	<a href="<?php echo esc_url($link_url); ?>">
        <div class="col category-image">
         <?php if( get_sub_field('imagem_relacao_topico') ): ?>
           <img src="<?php the_sub_field('imagem_relacao_topico'); ?>" />
        <?php endif; ?>
        </div>

        <div class="col">

          <?php 
            $link_relacao_topico = get_sub_field('link_relacao_topico');
            if( $link_relacao_topico ): ?>
              
                
                <h2 class="sub-title text-bold"><?php the_sub_field('titulo_para_relacao_topico'); ?></h2>  
             
           <div class="durac-pac">
            <span><?php the_sub_field('conteudo_de_relacao_topico'); ?></span> <br/>
          </div>  
          
          <div class="price-pac">
            <!--<span class="price-start">A partir de:</span>-->
           <!-- <strong><?php the_sub_field('preco_relacao_topico'); ?></strong>       <br/> <br/>   -->  
            
            <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
            </a>

          </div>  
          
          <?php endif; ?> 

        </div>

        </li>
    	
    <?php endif; ?> 

        <?php endwhile; ?>  

<?php endif; ?>

      <?php foreach ($pacotes as $pacote) { ?>

      <li class="category-item col  link-seo">
        <div class="col category-image">
          <?php $imagem = get_field('imagem_destaque_pacotes', $pacote->ID); ?>
          <?php $imagem_other = get_field('imagem', $pacote->ID); ?>
          <?php $cat_img = catch_that_image(); ?>
          <?php $thumb = get_the_post_thumbnail_url($pacote->ID) ?>
          <?php if ( $imagem ) : ?>
          <img src="<?= $imagem['url'] ?>" alt="<?= $imagem['title'] ?>">
          <?php elseif ( !empty($cat_img) ) : ?>
          <img src="<?= $cat_img ?>" alt="<?= get_the_title($pacote->ID) ?>">
          <?php elseif ( $thumb ) : ?>
          <img src="<?= $thumb ?>" alt="<?= get_the_title($pacote->ID) ?>">
          <?php elseif ( $imagem_other ) : ?>
          <img src="<?= $imagem_other['url'] ?>" alt="<?= $imagem_other['title'] ?>">
          <?php else: ?>
          <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=488%C3%97317&w=488&h=317" alt="<?= get_the_title($pacote->ID) ?>">
          <?php endif; ?>
        </div>
        <div class="col">
          <a href="<?= get_the_permalink($pacote->ID); ?>" title="<?= get_the_title($pacote->ID) ?>">
            <h2 class="sub-title text-bold"><?= get_the_title($pacote->ID) ?></h2>
          <p class="sub-title text-bold"> <?= get_field ('subtitulo', $pacote->ID) ?></p>  
          </a>
          <div class="roteiro-pac">
            <em><span><?= get_field('roteiro_texto_pacotes',$pacote->ID) ?></span></em>
          </div>
          <div class="durac-pac">
            <span><?= get_field('duracao_pacotes',$pacote->ID) ?></span>
          </div>

          <?php if (get_field('a_partir_de_pacotes', $pacote->ID)): ?>
          <div class="price-pac">
            <span class="price-start">A partir de:</span>
            <?php
                    $valor = get_field('a_partir_de_pacotes',$pacote->ID);
                    $local = get_the_terms( $pacote->ID, 'localizacao' );
                    if ( $local[0]->name == 'Internacional' ) {
                      $moeda = "US$";
                      $valor_final = moeda('dolar', $valor);
                    } else {
                      $moeda = "R$";
                      $valor_final = moeda('real', $valor);
                    }
            ?>
            <span class="price-value"><span class="text-bold open-font"><?= $moeda ?> <?= $valor_final ?></span></span>
            <br/><br/>
            <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>
          </div>
          <?php else: ?>
          <div class="price-pac">            
              <span class="btn-list upper-all text-bold"><i class="far fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Clique e saiba mais</span>            
          </div>
          <?php endif; ?>
        </div>
      </li>
    <?php   # code...
}; ?>
    </ul>

  </div>

  </section>

<?php //endif; ?>


<style type="text/css">
h2.sub-title.text-bold {display: contents;}
p.sub-title.text-bold {display: contents; line-height: 0px;}
.roteiro-pac {margin-top: 5px;}

</style>