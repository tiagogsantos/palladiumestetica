<?php //Template Name: Depoimentos ?>

<?php the_post(); ?>

<?php get_header(); ?>

<style type="text/css">
    .paginacao ul a:hover, .paginacao ul a:focus, .paginacao ul .page-numbers.current {
        font-size: 18px;
        font-size: 1.125rem;
        color: #404040;
        font-weight: 500;
        display: inline-block;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        border-radius: 100%;
        width: 31px;
        height: 31px;
        margin: 0 3px;
        background: #f38031;
        color: #fff;
        width: 31px;
        height: 31px;
    }
</style>

<?php include TEMPLATEPATH . '/inc/search-top.php'; ?>

<?php include TEMPLATEPATH . '/inc/breadcrumb-back.php'; ?>

<section class="list-banner call-banner page-pass">

    <div class="container">

        <div class="banner-content" style="background: url(<?= get_field('banner_lista'); ?>) bottom center;">

            <?php if (get_field('telefone_para_ligação')): ?>

                <div class="top call-number flex-center align-center">

                    <i class="fa fa-phone" aria-hidden="true"></i>

                    <span class="upper-all"><strong>Ligue agora:</strong> <span
                                class="open-font"><?php the_field('telefone_para_ligação') ?></span><span
                                class="open-font"> | (11) 94603-6617</span></span>
                </div>

            <?php endif; ?>

            <?php if (get_field('titulo_do_banner')): ?>

                <div class="call-legend flex-end align-center call-name">

					<span class="col upper-all text-bold">

						<?php the_field('titulo_do_banner'); ?>

					</span>

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>

<section class="page-list">
    <div class="container">
        <h1 class="title-princ upper-all text-bold"><?= the_title(); ?></h1>
        <div class="page-content">
            <?= the_content(); ?>
        </div>
    </div>
</section>

<section class="page-list list-items depoimentos-list">
    <div class="container">
        <ul class="page-list-items">
            <?php

            // WP_Query arguments

            $args = array(

                'post_type' => array('depoimentos'),

                'posts_per_page' => -1,
            );

            // The Query

            $query = new WP_Query($args);

            $x = 0;

            while ($query->have_posts()) : $query->the_post();

                $x++;

            endwhile;

            $pages_total = wp_count_posts('depoimentos');

            $pages_count_posts = $total->publish;
            $pages_published_posts = $total->publish;
            $pages_total_pages = ceil($published_posts / 5);

            $pages_total_pages = $pages_total_pages;

            $url = $_SERVER['REQUEST_URI'];

            $url = explode('page/', $url);

            $page_atual = intval(stripslashes($url[1]));

            $page_atual = (int)$page_atual;

            if ($page_atual < 1 || $page_atual == null) {

                $page_atual++;

            }

            $page_atual--;

            ?>
            <?php
            $p_offset = $page_atual * 5;

            // WP_Query arguments

            $args = array(

                'post_type' => array('depoimentos'),

                'posts_per_page' => '5',

                'offset' => $p_offset,

            );


            // The Query

            $query = new WP_Query($args);


            while ($query->have_posts()) : $query->the_post();
                ?>

                <li class="flex link-seo">

                    <div class="col content-item flex-col flex">

                        <h2 class="sub-title text-bold upper-all"><?= the_title(); ?></h2>

                        <div class="item-desc">

                            <div class="item-infos-date">

                                <span><strong>Plano Contratado: </strong><?php the_field('foi_para'); ?></span><br>

                                <!--<span><strong>Quando: </strong><?php the_field('quando'); ?></span><br> -->

                                <span><strong>Avaliação:</strong>

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

                            <?= the_excerpt(); ?>

                        </div>

                        <a href="<?php the_permalink(); ?>" class="btn-list upper-all text-bold">Leia Mais <i
                                    class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                    </div>

                </li>

            <?php endwhile; ?>

        </ul>
        <?php
        $paged = (get_query_var('page')) ? get_query_var('page') : 1;

        $pageds = explode('page/', $_SERVER['REQUEST_URI']);
        $paged = (int)$pageds[1];

        if ($paged == 0) {
            $paged = 1;
        }

        $args = new WP_Query(array(
            'post_type' => 'depoimentos',
            'posts_per_page' => 5,
            'paged' => $paged,
        ));

        if ($args->have_posts()) :

            $total_pages = $args->max_num_pages;

            ?>

            <div class="paginacao open-font">

                <ul>

                    <?php

                    if ($total_pages > 1) {

                        $current_page = $paged;

                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text' => '<i class="fa fa-angle-double-left" aria-hidden="true"></i>',
                            'next_text' => '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                        ));
                    }

                    ?>

                </ul>

            </div>

        <?php else : ?>
            <h3><?php _e('404 Error&#58; Not Found', ''); ?></h3>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>

</section>

<?php get_footer(); ?>

