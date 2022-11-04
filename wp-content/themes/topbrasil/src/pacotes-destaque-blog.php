<h2>Conheça os Pacotes em Destaque</h2>



<div class="pacotes-destaque-blog-lista">

  <div class="col-left">

    <div class="destaque-blog-1">

      <?php

        $img_blog = get_field('img_destaque_blog_1', 15247);

      ?>

      <img src="<?= $img_blog['url'] ?>" alt="<?= $img_blog['alt'] ?>">

      <div class="destaque-blog-txt">

        <h2><?= get_field('titulo_destaque_blog_1', 15247) ?></h2>

        <p><?= get_field('descricao_destaque_blog_1', 15247) ?></p>



        <span class="preco">

          <small>à partir de</small>

          <strong><?= get_field('preco_destaque_blog_1', 15247) ?></strong>

        </span>



        <a href="<?= get_field('link_destaque_blog_1', 15247) ?>">Saiba Mais</a>

      </div>

    </div>



    <div class="pacotes-destaque-blog-2">

      <?php

        $img_blog = get_field('img_destaque_blog_3', 15247);

      ?>

      <div class="destaque-blog-txt">

        <h2><?= get_field('titulo_destaque_blog_3', 15247) ?></h2>

        <p><?= get_field('descricao_destaque_blog_3', 15247) ?></p>



        <span class="preco">

          <small>à partir de</small>

          <strong><?= get_field('preco_destaque_blog_3', 15247) ?></strong>

        </span>



        <a href="<?= get_field('link_destaque_blog_3', 15247) ?>">Saiba Mais</a>

      </div>

      <img src="<?= $img_blog['url'] ?>" alt="<?= $img_blog['alt'] ?>">

    </div>

  </div>



  <div class="col-right">

    <?php

      $img_blog = get_field('img_destaque_blog_2', 15247);

    ?>

    <div class="pacote-image">

      <img src="<?= $img_blog['url'] ?>" alt="<?= $img_blog['alt'] ?>">

    </div>

    <div class="destaque-blog-txt">

      <h2><?= get_field('titulo_destaque_blog_2', 15247) ?></h2>

      <p><?= get_field('descricao_destaque_blog_2', 15247) ?></p>



      <span class="preco">

        <small>à partir de</small>

        <strong><?= get_field('preco_destaque_blog_3', 15247) ?></strong>

      </span>



      <a href="<?= get_field('link_destaque_blog_3', 15247) ?>">Saiba Mais</a>

    </div>

  </div>

</div>

