<section class="pacotes-destaque">



  <div class="container">







    <h2 class="title-princ strong text-blue upper-all">



      <?= get_field('titulo_d_3'); ?>



    </h2>



    <?= get_field('texto_d_3'); ?>







    <div class="flex pacotes-two-columns">



      <div class="col">



        <div class="pacote-box col link-seo">



          <?php

            $img_pacote_1_d_3 = get_field('img_pacote_1_d_3');

          ?>



          <div class="pacote-img">



            <img src="<?= $img_pacote_1_d_3['url'] ?>" alt="<?= $img_pacote_1_d_3['title'] ?>">



          </div>



          <div class="pacote-desc flex-col flex align-start">



            <h3 class="pacote-title"><?= get_field('titulo_pacote_1_d_3'); ?></h3>







            <p class="pacote-content"><?= get_field('texto_pacote_1_d_3'); ?></p>







            <div class="pacote-btn flex col">



              <p class="pacote-price">a partir de <span class="price-box"><?= get_field('preco_pacote_1_d_3'); ?></span></p>



              <a href="<?= get_field('link_pacote_1_d_3'); ?>" class="btn-transparent">Saiba Mais</a>



            </div>



          </div>



        </div>



      </div>







      <div class="col">



        <div class="top">



          <div class="pacote-box col flex  link-seo">



            <div class="pacote-desc flex-col flex-start align-start">



              <h3 class="pacote-title"><?= get_field('titulo_pacote_2_d_3'); ?></h3>



              <div class="pacote-content"><p><?= get_field('texto_pacote_2_d_3'); ?></p></div>



              <p class="pacote-price">a partir de <span class="price-box"><?= get_field('preco_pacote_2_d_3'); ?></span></p>



              <div class="pacote-btn">



                <a href="<?= get_field('link_pacote_2_d_3'); ?>" class="btn-transparent">Saiba Mais</a>



              </div>



            </div>



            <div class="pacote-img">

              <?php

                $img_pacote_2_d_3 = get_field('img_pacote_2_d_3');

              ?>

              <img src="<?= $img_pacote_2_d_3['url'] ?>" alt="<?= $img_pacote_2_d_3['title'] ?>">



            </div>



          </div>



        </div>







        <div class="bottom flex">



          <div class="pacote-box col flex  link-seo">



            <div class="pacote-img">



              <?php

                $img_pacote_3_d_3 = get_field('img_pacote_3_d_3');

              ?>

              <img src="<?= $img_pacote_3_d_3['url'] ?>" alt="<?= $img_pacote_3_d_3['title'] ?>">



            </div>



            <div class="pacote-desc flex-col flex-start align-start">



              <h3 class="pacote-title"><?= get_field('titulo_pacote_3_d_3'); ?></h3>



              <p class="pacote-price">a partir de <span class="price-box"><?= get_field('preco_pacote_3_d_3'); ?></span></p>



              <div class="pacote-btn">



                <a href="<?= get_field('link_pacote_3_d_3'); ?>" class="btn-transparent">Saiba Mais</a>



              </div>



            </div>



          </div>







          <div class="pacote-box col flex  link-seo">



            <div class="pacote-img">



              <?php

                $img_pacote_4_d_3 = get_field('img_pacote_4_d_3');

              ?>

              <img src="<?= $img_pacote_4_d_3['url'] ?>" alt="<?= $img_pacote_4_d_3['title'] ?>">



            </div>



            <div class="pacote-desc flex-col flex-start align-start">



              <h3 class="pacote-title"><?= get_field('titulo_pacote_4_d_3'); ?></h3>



              <p class="pacote-price">a partir de <span class="price-box"><?= get_field('preco_pacote_4_d_3'); ?></span></p>



              <div class="pacote-btn">



                <a href="<?= get_field('link_pacote_4_d_3'); ?>" class="btn-transparent">Saiba Mais</a>



              </div>



            </div>



          </div>



        </div>



      </div>



    </div>







  </div>



</section>

