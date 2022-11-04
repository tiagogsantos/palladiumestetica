<br/>

<?php include 'tratamento.php'; ?>

<br/>
<section class="page-list list-items depoimentos-list">
    <div class="container">
        <ul class="page-list-items">
            <?php $posts = get_field('depoimentos_relacionados');
            if ($posts): ?>

            <h2 class="escolha">Depoimentos</h2>
            <?php foreach ($posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>

                <li class="flex link-seo">
                    <div class="col content-item flex-col flex">
                        <h2 class="sub-title text-bold upper-all"> <?php the_title(); ?></h2>
                        <div class="item-desc">
                            <div class="item-infos-date">
                                <span><strong>Foi para: </strong><?php the_field('foi_para'); ?></span><br>
                                <!-- <span><strong>Quando: </strong>01/02/2020</span><br> -->
                                <span><strong>Avaliação:</strong>
                     <?php $dep_starts = ( int)get_field('numero_de_estrelas'); ?>
                                    <?php $dep_starts = (int)get_field('numero_de_estrelas'); ?>

                                    <?php if ($dep_starts <= 1) : ?>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    <?php else : ?>
                                        <?php for ($i = 1; $i <= $dep_starts; $i++) : ?>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        <?php endfor; ?>
                                    <?php endif; ?>
                     </span>
                            </div>
                            <p><?php echo excerpt('140') ?></p>
                        </div>
                         <a href="<?= the_permalink(); ?>" class="btn-list upper-all text-bold">Leia Mais <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                    </div>

                </li>
            <?php endforeach; ?>

            <div class="vejaplus">
                <a href="https://www.topbrasiltur.com.br/opinioes" class="btn-list upper-all text-bold">Veja mais
                    depoimentos no site <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> &nbsp;

                <a href="https://www.facebook.com/TopBrasilTurismo/reviews/?ref=page_internal"
                   class="btn-list upper-all text-bold">Veja mais depoimentos no Facebook <i
                            class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> <br/>

                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </ul>

    </div>
</section> <br/><br/>

<style type="text/css">
    .vejaplus {
        display: flex;
    }

    .item-desc {
        margin-bottom: 80px;
    }

    .page-list-items {
        margin-top: 0px;
    }

    .page-list-items .btn-list {
        max-width: 371px;
    }

    .col-md-4 {
        display: table-cell;
    }

    h2.escolha {
        font-size: 23px;
        color: #36538f;
        font-weight: bold;
        text-transform: uppercase;
    }

    h3.vantagens {
        text-align: center;
        font-size: 22px;
        color: #36538f;
        padding: 10px;
        font-weight: bold;
    }

    p.vantagens {
        text-align: center;
        padding-bottom: 20px;
    }

    .center-block1 {
        display: block;
        margin-right: auto;
        margin-left: auto;
    }

    section.news-blog .blog-footer {
        max-width: none;
        margin: -18px 0 auto;
    }

    section.news-blog .blog-footer li .col {
        max-width: none;
    }

    section.news-blog .blog-footer li .col:first-child {
        max-width: none;
        height: 57px;
    }

    li.flex.align-center.link-seo {
        margin-left: 10px;
    }

    i.fa.fa-star {
        font-size: 25px;
    }

    i.fas.fa-star-half-alt {
        font-size: 25px;
        color: #ffca26;
    }

    p.notaqualificacao {
        font-size: 30px !important;
        font-weight: bold;
        margin-left: 57px;
    }

    .fas.fa-star {
        font-size: 25px !important;
        padding: 1px;
        margin-top: 6px;
    }

    .bar-5 {
        height: 18px;
        background-color: #4caf50;
    }

    .bar-6 {
        height: 18px;
        background-color: #2196f3;
    }

    .bar-7 {
        height: 18px;
        background-color: #00bcd4;
    }

    .bar-container {
        height: 18px;
        width: 100%;
        background-color: #e0e0e0;
        text-align: center;
        color: #fff;
    }

    .col.primeiro {
        width: 268px;
    }

    .col.depoimentohome {
        height: 23px !important;
    }

    .depoimentopeople {
        height: 110px !important;
        text-align: center;
    }

    section.news-blog .destaque-title {
        font-size: 2.0rem;
    }

    @media screen and (max-width: 728px) and (min-width: 360px) {
        p.notaqualificacao {
            margin-left: 0px;
        }

        p.destaque-title.text-center {
            font-size: 18px !important;
        }

        .depoimentopeople {
            height: 184px !important;
        }

        .escolha {
            display: none;
        }
    }

    @media only screen and (max-width: 600px) {
        .escolher {
            display: none;
        }
    }


</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">