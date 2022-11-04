<!--<aside class="aside-blog">

  <nav class="menu-aside">
    <strong><i class="fa fa-list-ul" aria-hidden="true"></i> Categorias do Blog</strong>
    <ul>
      <?php 
        $categories = get_the_category();
        $category_id = $categories[0]->cat_ID;

        $terms = get_terms('category');
        foreach ( $terms as $term ) :

          if ( $category_id == $term->term_id ) {
            $class = "current-menu-item";
          } else {
            $class = "null";
          }
      ?>
      <li class="<?= $class ?>"><a href="<?= get_bloginfo('url') ?>/category/<?= $term->slug ?>"><?= $term->name ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>

  <nav class="menu-aside menu-pacotes">
    <strong><i class="fa fa-list-ul" aria-hidden="true"></i> Escolha Seu Pacote</strong>
    <?php wp_nav_menu('Escolha Seu Pacote') ?>
  </nav>

  <?php
    $publicidade_topo = get_field('pub_topo', 3381);
    $publicidade_topo_link = get_field('pub_topo_link', 3381);
  ?>
  <a href="<?= $publicidade_topo_link ?>"><img class="anuncio-aside" src="<?= $publicidade_topo['url'] ?>" alt="<?= $publicidade_topo['alt'] ?>"></a>

  <?php
    $publicidade_inferior = get_field('pub_inferior', 3381);
    $publicidade_inferior_link = get_field('pub_inferior_link', 3381);
  ?>

  <a href="<?= $publicidade_inferior_link ?>"><img class="anuncio-aside anuncio-2" src="<?= $publicidade_inferior['url'] ?>" alt="<?= $publicidade_inferior['alt'] ?>"></a>

</aside>-->
