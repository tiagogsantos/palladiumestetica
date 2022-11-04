<?php get_header(); ?>

<?php include TEMPLATEPATH . '/inc/search-top.php'; ?>

<form id="form-indique-amigo" class="form_pop indique_amigo" action="/indique" method="post">
    <div class="box_form"><i class="fa fa-times-circle" aria-hidden="true"></i> <strong>Seus dados:</strong> <input
                data-yts-val="true" type="text" name="nome_seu" value="" placeholder="Seu nome:"> <input
                data-yts-val="true" type="email" name="email_seu" value="" placeholder="Seu e-mail:"> <strong>Dados do
            seu amigo:</strong> <input type="text" name="nome_amigo" value="" placeholder="Nome do seu amigo:"> <input
                type="email" name="email_amigo" value="" placeholder="E-mail do seu amigo:"> <textarea
                name="mensagem_amigo" placeholder="Mensagem para seu amigo:"></textarea> <input type="hidden"
                                                                                                name="nome_pacote"
                                                                                                value="<?= get_the_title(); ?>">
        <button type="submit" name="button">Indicar</button>
    </div>
</form>

<?php the_post(); ?>

<section class="detail-content page-detalhe page-depoimentos">

    <div class="container">

        <div class="flex-parent flex align-start">

            <div class="col">

                <span class="title-princ text-bold upper-all">Depoimentos</span>

                <div class="dep-info">

                    <h1><?php the_title(); ?></h1>

                    <span><strong>Foi para: </strong><?php the_field('foi_para'); ?></span>

                    <span><strong>Quando: </strong><?php the_field('quando'); ?></span>

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

                <div class="detail-desc">

                    <?php the_content(); ?>

                    <section class="page-detalhe share-top">

                        <div class="container">

                            <ul class="flex flex-end align-center share-content">

                                <li class="share-item open-font">

                                    <i class="fa fa-envelope" aria-hidden="true"></i>

                                    <a href="#" class="bt-indique">Enviar por E-mail</a>

                                </li>


                                <li class="share-item social-item open-font">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>"
                                       target="_blank">Tweetar</a>
                                </li>

                                <?php $cookie_like = 'post-liked-' . get_the_ID(); ?>

                                <?php if (!$_COOKIE["$cookie_like"]): ?>

                                    <?php if (get_field('numero_de_curtidas') < 1) {

                                        $likes = 0;
                                    } else {
                                        $likes = get_field('numero_de_curtidas');
                                    } ?>
                                <?php endif; ?>

                                <li class="share-item social-item open-font">

                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>

                                    <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>"
                                       target="_blank">Compartilhar</a>

                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</section>


<!--<?php require TEMPLATEPATH . '/inc/footer-newsletter-blog.php'; ?>-->


<?php get_footer(); ?>
<script type="text/javascript">// Indique$(document).ready(function() {  $('.bt-indique').click(function(e) {    e.preventDefault();    $('#form-indique-amigo').css('display', 'flex');  });  $(".fa-times-circle").click(function(e) {    e.preventDefault();    $('#form-indique-amigo').fadeOut();  });});</script>