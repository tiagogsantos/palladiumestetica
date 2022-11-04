<section class="search-top">

  <div class="container">

    <div class="flex flex-parent">



      <div class="col blog-cats flex-start align-center">

        <div class="call-you-icon">

          <i class="fa fa-align-left" aria-hidden="true"></i>

        </div>



        <div class="blog-cats-menu">
          <span class="blog-cats-title">Categorias do Blog</span>
          <ul>
            <?php $cats = get_categories(); ?>
            <?php foreach ($cats as $cat): ?>
              <li>
                <a href="<?php bloginfo('url') ?>/<?= $cat->slug; ?>" title="<?= $cat->name; ?>">
                  <?= $cat->name; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>



      <div class="col search-top-box flex align-center">

        <span class="search-title">Encontre a sua próxima Viagem:</span>



        <form id="top-search-form" class="search-form" method="get" action="<?= get_bloginfo('url')  ?>/busca">

          <div class="search-box">

            <input type="text" name="busca" placeholder="Digite aqui">



            <button type="input" form="top-search-form" name="button"></button>

          </div>

        </form>

      </div>



    </div>

  </div>

</section>
