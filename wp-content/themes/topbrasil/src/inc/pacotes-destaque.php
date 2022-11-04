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

                        <h2 class="pacote-title"><?= get_field('titulo_pacote_1_d_3'); ?></h2>

                        <p class="pacote-content"><?= get_field('texto_pacote_1_d_3'); ?></p>

                        <div class="pacote-btn flex col">

                            <p class="pacote-price">a partir de <span
                                        class="price-box"><?= get_field('preco_pacote_1_d_3'); ?></span> por pessoa</p>

                            <a href="<?= get_field('link_pacote_1_d_3'); ?>" class="btn-transparent">Saiba Mais</a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col">

                <div class="top">

                    <div class="pacote-box col flex  link-seo">

                        <div class="pacote-desc flex-col flex-start align-start">

                            <h2 class="pacote-title"><?= get_field('titulo_pacote_2_d_3'); ?></h2>

                            <div class="pacote-content"><p><?= get_field('texto_pacote_2_d_3'); ?></p></div>

                            <p class="pacote-price">a partir de <span
                                        class="price-box"><?= get_field('preco_pacote_2_d_3'); ?></span> por pessoa</p>

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

                            <h2 class="pacote-title"><?= get_field('titulo_pacote_3_d_3'); ?></h2>

                            <p class="pacote-price">a partir de <span
                                        class="price-box"><?= get_field('preco_pacote_3_d_3'); ?></span> por pessoa</p>

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

                            <h2 class="pacote-title"><?= get_field('titulo_pacote_4_d_3'); ?></h2>

                            <p class="pacote-price">a partir de <span
                                        class="price-box"><?= get_field('preco_pacote_4_d_3'); ?></span> por pessoa</p>

                            <div class="pacote-btn">

                                <a href="<?= get_field('link_pacote_4_d_3'); ?>" class="btn-transparent">Saiba Mais</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- <h2 class="title-princ strong text-blue upper-all"><?= get_field('titulo_principal'); ?></h2>

  <p><?= get_field('descricao_das_dicas'); ?></p> -->

    </div>

</section> <br/>


<!--<div class="container linkagemblog">
<div class="primeirocont">

  <?php if (get_field('informacoes_das_dicas')): ?>

  <?php while (has_sub_field('informacoes_das_dicas')): ?>


  <h2 class="linkagemblog"><?php the_sub_field('titulo_do_post'); ?></h2>

    <ul class="linkagemblog">

      <li class="linkagemblog">

      <?php

    $link_do_post = get_sub_field('link_do_post');

    if ($link_do_post): ?>
        
       <a class="linkagemblog" href="<?php echo $link_do_post; ?>"> 
        <h3 class="linkagemblog"><?php the_sub_field('nome_do_campo'); ?></h3> </a> 

        </li> 

      <?php endif; ?>   

    </ul>


  <?php endwhile; ?>  

<?php endif; ?>


  </div>
<div class="segundcont">

  <?php if (get_field('informacoes_das_dicas2')): ?>

  <?php while (has_sub_field('informacoes_das_dicas2')): ?>

   <h2 class="linkagemblog"><?php the_sub_field('titulo_do_post2'); ?></h2>
   
   <ul class="linkagemblog">

    <li class="linkagemblog">

      <?php

    $link_do_post2 = get_sub_field('link_do_post2');

    if ($link_do_post2): ?>
        
       <a class="linkagemblog" href="<?php echo $link_do_post2; ?>"> 
        <h3 class="linkagemblog"><?php the_sub_field('nome_do_campo2'); ?></h3> </a> 

        </li> 

      <?php endif; ?>   

    </ul>

    <?php endwhile; ?>  

<?php endif; ?>
</div>


<div class="terceiracont">

  <?php if (get_field('informacoes_das_dicas3')): ?>

  <?php while (has_sub_field('informacoes_das_dicas3')): ?>

   <h2 class="linkagemblog"><?php the_sub_field('titulo_do_post3'); ?></h2>
   
   <ul class="linkagemblog">

    <li class="linkagemblog">

      <?php

    $link_do_post3 = get_sub_field('link_do_post3');

    if ($link_do_post3): ?>
        
       <a class="linkagemblog" href="<?php echo $link_do_post3; ?>"> 
        <h3 class="linkagemblog"><?php the_sub_field('nome_do_campo3'); ?></h3> </a>  

      <?php endif; ?>  

      </li> 

    </ul>

    <?php endwhile; ?>  

<?php endif; ?>
</div>

</div> -->


<style type="text/css">

    h2.linkagemblog {
        font-size: 20px;
    }

    ul.linkagemblog {
        font-size: 14px !important;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    a.linkagemblog {
        text-decoration: underline;
        color: blue;
    }

    li.linkagemblog {
        line-height: normal;
    }

    .tudo {
    }

    .primeirocont {
        float: left;
        width: 36%;
    }

    .segundcont {
        width: 39%;
    }

    .terceiracont {
        width: 19%;
    }

    .container.linkagemblog {
        display: flex;
    }

    a.linkagemblog:hover {
        color: orange;
    }

    @media screen and (max-width: 360px) {

        .primeirocont {
            width: -webkit-fill-available;
        }

        .segundcont {
            width: -webkit-fill-available;
        }

        .terceiracont {
            width: -webkit-fill-available;
        }

        .container.linkagemblog {
            display: grid;
        }

    }

    @media screen and (max-width: 375px) {

        .primeirocont {
            width: -webkit-fill-available;
        }

        .segundcont {
            width: -webkit-fill-available;
        }

        .terceiracont {
            width: -webkit-fill-available;
        }

        .container.linkagemblog {
            display: grid;
        }

        @media screen and (max-width: 414px) {

            .primeirocont {
                width: -webkit-fill-available;
            }

            .segundcont {
                width: -webkit-fill-available;
            }

            .terceiracont {
                width: -webkit-fill-available;
            }

            .container.linkagemblog {
                display: grid;
            }

</style>