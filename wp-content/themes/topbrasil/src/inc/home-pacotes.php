<section class="home-pacotes sidebar-section">
    <div class="container">
        <div class="flex flex-parent">
            <div class="col">
                <div class="top">
                    <div class="flex align-center pacotes-two">
                        <div class="pacote-img-textos">
                            <h1 class="title-princ strong text-blue"><?= the_title(); ?></h1>
                            <br/>
                            <p><?= the_field('briefing_h1'); ?></p>

                            <div class="bottom">
                                <?php
                                $botao_do_h1 = get_field('botao_do_h1');
                                if ($botao_do_h1): ?>
                                    <a href="<?php echo esc_url($botao_do_h1); ?>" class="btn-more-info">
                                        <i class="fa fa-info-circle flex-center align-center" aria-hidden="true"></i>
                                        <span class="flex-center align-center"><?php the_field('nome_do_botao_h1'); ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="pacote-img">
                            <?php
                            $imagem_h1 = get_field('imagem_do_h1');
                            if ($imagem_h1): ?>
                                <img src="<?= $imagem_h1['url'] ?>" alt="<?= $imagem_h1['title'] ?>">
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'funcionamento.php'; ?>

<section class="home-pacotes sidebar-section">
    <div class="container">
        <div class="flex flex-parent">
            <div class="col">
                <div class="top">

                    <?php if (have_rows('conteudos_para_h2')): ?>
                        <?php while (have_rows('conteudos_para_h2')): the_row();
                            $titulo = get_sub_field('titulo_do_h2');
                            $briefing = get_sub_field('briefing_h2');
                            $imageEsquerda = get_sub_field('imagem_do_lado_esquerdo');
                            $imageDireita = get_sub_field('imagem_do_lado_direito');
                            $botao = get_sub_field('nome_do_botao');
                            $link = get_sub_field('link_do_botao');
                            $selecao = get_sub_field('selecao_de_layout');
                            $tituloEsquerdo = get_sub_field('titulo_esquerdo');
                            $tituloDireito = get_sub_field('titulo_direito');
                            $imagemLayout4Esquerda = get_sub_field('imagem_esquerda_layout_4');
                            $imagemLayout4Direita = get_sub_field('imagem_direita_layout_4');
                            ?>

                            <?php if ($selecao === 'layout1'): ?>

                                <div class="flex align-center pacotes-two">
                                    <div class="pacote-img-textos">
                                        <h2 style="margin-top: 18px;"
                                            class="title-princ strong text-blue"> <?= $titulo ?> </h2>
                                        <br/>
                                        <p><span><?= $briefing ?></span></p>

                                        <div class="bottom">
                                            <?php
                                            $botao_do_h1 = get_field('botao_do_h1');
                                            if ($botao_do_h1): ?>
                                                <a href="<?php echo esc_url($botao_do_h1); ?>" class="btn-more-info">
                                                    <i class="fa fa-info-circle flex-center align-center"
                                                       aria-hidden="true"></i>
                                                    <span class="flex-center align-center"><?php the_field('nome_do_botao_h1'); ?></span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="pacote-img">
                                        <?php
                                        if ($imageEsquerda): ?>
                                            <img src="<?= $imageEsquerda['url'] ?>"
                                                 alt="<?= $imageEsquerda['title'] ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>

                            <?php elseif ($selecao === 'layout2'): ?>

                                <div class="flex align-center pacotes-two">
                                    <div class="pacote-img">
                                        <?php
                                        if ($imageEsquerda): ?>
                                            <img src="<?= $imageEsquerda['url'] ?>"
                                                 alt="<?= $imageEsquerda['title'] ?>">
                                        <?php endif; ?>
                                    </div>

                                    <div class="pacote-img-textos">
                                        <h2 style="margin-top: 18px;"
                                            class="title-princ strong text-blue"> <?= $titulo ?> </h2>
                                        <br/>
                                        <p><span><?= $briefing ?></span></p>

                                        <div class="bottom">
                                            <?php
                                            $botao_do_h1 = get_field('botao_do_h1');
                                            if ($botao_do_h1): ?>
                                                <a href="<?php echo esc_url($botao_do_h1); ?>" class="btn-more-info">
                                                    <i class="fa fa-info-circle flex-center align-center"
                                                       aria-hidden="true"></i>
                                                    <span class="flex-center align-center"><?php the_field('nome_do_botao_h1'); ?></span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <br/><br/>

                            <?php elseif ($selecao === 'layout3'): ?>

                                <h2 style="margin-top: 18px;" class="title-princ strong text-blue"> <?= $titulo ?> </h2>

                                <span><?= $briefing ?></span>

                                <div class="bottom">
                                    <?php
                                    if ($link): ?>
                                        <a href="<?php echo esc_url($link); ?>" class="btn-more-info">
                                            <i class="fa fa-whatsapp flex-center align-center" aria-hidden="true"></i>
                                            <span class="flex-center align-center"><?= $botao ?></span>
                                        </a>
                                    <?php endif; ?>
                                </div>

                            <?php else: ?>

                                <h2 style="margin-top: 18px;" class="title-princ strong text-blue"> <?= $titulo ?> </h2>

                                <div class="flex align-center pacotes-two">
                                    <div class="pacote-img">
                                        <p style="margin-top: 18px;"
                                           class="title-princ strong text-blue"> <?= $tituloEsquerdo ?> </p>
                                        <?php
                                        if ($imagemLayout4Esquerda): ?>
                                            <img src="<?= $imagemLayout4Esquerda['url'] ?>"
                                                 alt="<?= $imagemLayout4Esquerda['title'] ?>">
                                        <?php endif; ?>
                                    </div>

                                    <div class="pacote-img">
                                        <p style="margin-top: 18px;"
                                           class="title-princ strong text-blue"> <?= $tituloDireito ?> </p>
                                        <?php
                                        if ($imagemLayout4Direita): ?>
                                            <img src="<?= $imagemLayout4Direita['url'] ?>"
                                                 alt="<?= $imagemLayout4Direita['title'] ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <br/>

                                <p><span><?= $briefing ?></span></p>

                                <div class="bottom">
                                    <?php
                                    $botao_do_h1 = get_field('botao_do_h1');
                                    if ($botao_do_h1): ?>
                                        <a href="<?php echo esc_url($botao_do_h1); ?>" class="btn-more-info">
                                            <i class="fa fa-info-circle flex-center align-center"
                                               aria-hidden="true"></i>
                                            <span class="flex-center align-center"><?php the_field('nome_do_botao_h1'); ?></span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style type="text/css">

    .pacotes-two .pacote-box .pacote-content {
        text-align: left !important;
    }

    .pacotes-two .pacote-box .pacote-img {
        position: relative;
        height: 213px;
    }

    .title-princ {
        margin-bottom: 12px;
    }

    .pacote-img {
        width: 134% !important;
        padding-right: 1%;
    }

</style>