<?php $id_pagina = get_the_ID() ?>

<?php include 'header.php'; ?>

<?php include 'inc/search-top-blog.php'; ?>

<?php include 'inc/breadcrumb-back.php'; ?>

<div class="blog">

<?php


      // WP_Query arguments
      $args = array(
        'post_type'              => array( 'post' ),
        'posts_per_page'         => -1,
      );

      // The Query
      $query = new WP_Query( $args );

      $x = 0;

      while ( $query->have_posts() ) : $query->the_post();
        $x++;
      endwhile;



      $pages = $x / 7;

      $pages = ceil($pages);


      $url = $_SERVER['REQUEST_URI'];

      $url = explode('page/', $url);

      $page_atual = intval(stripslashes($url[1]));

      $page_atual = (int)$page_atual;

      if ($page_atual < 1 || $page_atual ==  null) {

        $page_atual++;

      }

      $page_atual--;


      $p_offset = $page_atual * 7;

    ?>


<div class="container">

  <div class="mais-populares">
    <div class="col-left">
      <h2 class="subtitulo">Blog</h2>

      <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 7, 'cat' => $tax->term_id, 'offset' => $p_offset, ) ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php $cat_img = catch_that_image(); ?>
      <article class="ultima-noticia maior link-seo">
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
          <h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
          <p><?= the_excerpt(); ?></p>
        </div>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>

    </div>

    <div class="col-right">
        <?php include 'aside.php' ?>
    </div>
  </div>

</div>


<!-- New Pagination -->
<div class="paginacao open-font">
  
  <?php echo paginate_links( array(
      'prev_text' => __('&#171;'),
      'next_text' => __('&#187;'),
      'type' => 'list',
  ) ); ?>

</div>

<!-- <div class="paginacao open-font">
    
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
            <?php for ($i=1; $i < 2; $i++) { ?>

            

              <?php if ($page_atual  <= 2): ?>

              <li>
                <a href="<?php if ($page_atual >= 2) {echo '../.';}; ?>./page/<?php echo $page_atual+$i; ?>">
                  <?php echo $page_atual+$i; ?>
                </a>
              </li>
              <?php endif; ?>
            <?php } ?>

        <?php endif; ?>

        <li><a href="<?php if ($page_atual >= 2) {echo '../.';} if ($page_atual + 1 <= $pages) {echo './page/'.($page_atual+1);}else{ echo '#'; } ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>

      </ul>

    </div>

</div> -->

<?php include 'footer.php'; ?>