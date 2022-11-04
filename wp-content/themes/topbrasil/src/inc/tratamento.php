<br/>

<section class="escolher">
    <div class="container">
        <h2 class="escolha"><?php the_field('titulo_principal', 'theme-options'); ?></h2>
        <br>
        <?php the_field('briefing', 'theme-options'); ?>
        <br>
        <?php if(get_field('vantagens_de_contratar', 'theme-options')): ?>
            <?php while(has_sub_field('vantagens_de_contratar', 'theme-options')): ?>
                <div class="col-md-4">
                    <img class="img-responsive center-block1" src="<?php the_sub_field('logo_vantagem', 'theme-options'); ?>" alt="<?= $logo_vantagem['title'] ?> ">
                    <h3 class="vantagens"> <?php the_sub_field('titulo_da_vantagem', 'theme-options'); ?></h3>
                    <p class="vantagens"><?php the_sub_field('conteudo_da_vantagem', 'theme-options'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<style>
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