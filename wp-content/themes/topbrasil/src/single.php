<?php the_post();  ?>

<?php include 'header.php'; ?>

<?php include 'inc/search-top.php'; ?>


<div class="blog single-blog">

<div class="container">

  <div class="conteudo-categoria">
    <div class="col-left">

      <br/>

      <h1><?= the_title(); ?></h1>

     

      <div class="meta-post">
        <div class="col-left">
          <span><i class="fa fa-calendar" aria-hidden="true"></i> Publicado em: <?php the_date('d/m/Y'); ?></span>
          <span><i class="fa fa-user" aria-hidden="true"></i> <?php the_author() ?></span>
        </div>
        <span class="compartilhar">Compartilhe!</span>
        <div class="col-right">
          <?php include 'links-share.php' ?>
        </div>
      </div>

       <p class="subtituloblog"><?php the_field('subtitulo'); ?></p>

      <?php the_content(); ?>
    

     <!-- <a class="clique-aqui" href="<?php the_field('link_bt') ?>"> Não perca tempo, clique aqui e viva uma experiência extraordinária </a> -->
    </div>

    <div class="col-right">
      <?php include 'aside.php' ?>
    </div>
  </div>

 <!-- <div class="ultimas-noticias-blog">
    <h2 class="subtitulo">Últimas Notícias</h2>
    <div class="ultimas-noticias">
      <?php
  			$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
  			while ( $loop->have_posts() ) : $loop->the_post();
  		?>
  		<?php $cat_img = catch_that_image(); ?>
  		<article class="ultima-noticia link-seo">
  			<div class="ultima-noticia-img">
          <?php $thumb = get_the_post_thumbnail(); ?>
  				<?php if ( !empty( $thumb  ) ) : ?>
  					<?= the_post_thumbnail() ?>
  				<?php elseif ( !empty($cat_img) ) : ?>
  					<img src="<?= $cat_img ?>" alt="<?= the_title() ?>">
  				<?php else : ?>
  					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=181%C3%97136&w=181&h=136" alt="<?= the_title() ?>">
  				<?php endif; ?>
  			</div>
  			<div class="ultima-noticia-txt">
          <?php $cat = get_the_category($post->ID); ?>
  				<strong><?= $cat[0]->name ?></strong>
  				<h2><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h2>
  			</div>
  		</article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div> -->

</div>



</div>

<?php include 'inc/footer-newsletter-blog.php'; ?>


<style type="text/css">
                
section.news-blog .blog-footer {max-width: none; margin: -18px 0 auto;}

section.news-blog .blog-footer li .col {max-width: none;}

section.news-blog .blog-footer li .col:first-child {max-width: none; height: 57px;}  

li.flex.align-center.link-seo {margin-left: 10px;}

i.fas.fa-star-half-alt {font-size: 25px; color: #ffca26;}

p.notaqualificacao {font-size: 30px !important; font-weight: bold; margin-left: 57px;}

.fas.fa-star {font-size: 25px !important; padding: 1px; margin-top: 6px;}

.bar-5 {height: 18px; background-color: #4caf50;}

.bar-6 {height: 18px; background-color: #2196f3;}

.bar-7 {height: 18px; background-color: #00bcd4;}

.bar-container {height: 18px; width: 100%; background-color: #e0e0e0; text-align: center; color: #fff;}

.col.primeiro {width: 268px;}

.col.depoimentohome {height: 23px !important;}

.depoimentopeople {height: 110px !important; text-align: center;}

section.news-blog .destaque-title {font-size: 2.0rem;}

@media screen and (max-width: 728px) and (min-width: 360px) {
p.notaqualificacao {margin-left: 0px;}

p.destaque-title.text-center {font-size: 18px !important;}

.depoimentopeople {height: 184px !important;}
}

.links-share a {margin-left: 3px;}

span.compartilhar {font-weight: 700; text-transform: uppercase; font-size: 17px;}

@media (max-width: 414px) {

.single-blog .meta-post .col-left {display: contents;}

.single-blog .meta-post .col-right {display: inline-block;}

span.compartilhar {margin-top: 12%;}

}

.single-blog p {margin-top: 10px !important;</style>


<style type="text/css">  
  a.link:hover {color: orange !important;}

  p.subtituloblog {font-size: 17px; font-weight: normal; font-style: italic;}

  .single-blog h1 {font-size: 22px; color: #2c4475; font-weight: 600;
    line-height: 1.2em; display: contents;}

</style>

<?php include 'footer.php'; ?>