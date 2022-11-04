<?php include 'header.php'; ?>
<?php include 'inc/search-top.php'; ?>
<?php include 'inc/breadcrumb-back.php'; ?>

<?php the_post(); ?>

<script type="text/javascript">
    alert('Eu sou um teste');
</script>

    <section class="home-pacotes sidebar-section">
        <div class="container">
            <div class="flex flex-parent">
                <div class="col">
                    <div class="top">
                        <div class="flex align-center pacotes-two">
                            <div class="pacote-img">
                                <h1 class="title-princ strong text-blue"><?= the_title(); ?></h1>
                                <br/>
                                <p><?= the_field('briefing_h1'); ?></p>
                            </div>
                            <div class="pacote-img">
                                <?php
                                $imagem_h1 = get_field('imagem_do_h1');
                                if ($imagem_h1): ?>
                                    <img src="<?= $imagem_h1['url'] ?>" alt="<?= $imagem_h1['title'] ?>">
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="flex align-center pacotes-two">
                            <div class="pacote-img">
                                <?php
                                $imagem_h1 = get_field('imagem_do_h1');
                                if ($imagem_h1): ?>
                                    <img src="<?= $imagem_h1['url'] ?>" alt="<?= $imagem_h1['title'] ?>">
                                <?php endif; ?>
                            </div>
                        </div>

                        <br/>
                        <div class="bottom">
                            <?php
                            $botao_do_h1 = get_field('botao_do_h1');
                            if ($botao_do_h1): ?>
                                <a href="<?php echo esc_url($botao_do_h1); ?>" class="btn-more-info">
                                    <i class="fa fa-info-circle flex-center align-center" aria-hidden="true"></i>
                                    <span class="flex-center align-center">QUERO SABER MAIS!</span>
                                </a>
                            <?php endif; ?>
                        </div>

                        <?php if (have_rows('conteudos_para_h2')): ?>
                            <?php while (have_rows('conteudos_para_h2')): the_row();
                                $titulo = get_sub_field('titulo_do_h2');
                                $briefing = get_sub_field('briefing_h2');
                                $imageEsquerda = get_sub_field('imagem_do_lado_esquerdo');
                                $imageDireita = get_sub_field('imagem_do_lado_direito');
                                $botao = get_sub_field('nome_do_botao');
                                $link = get_sub_field('link_do_botao');
                                $botaoDireito = get_sub_field('nome_do_botao_direito');
                                $linkDireito = get_sub_field('link_do_botao_direito');
                                ?>

                                <h2 style="margin-top: 18px;" class="title-princ strong text-blue"> <?= $titulo ?> </h2>
                                <br/><br/>
                                <div class="flex align-center pacotes-two">
                                    <div class="pacote-img">
                                        <?php
                                        if ($imageEsquerda): ?>
                                            <img src="<?= $imageEsquerda['url'] ?>"
                                                 alt="<?= $imageEsquerda['title'] ?>">
                                        <?php endif; ?>
                                    </div>

                                </div> <br/>

                                <span><?= $briefing ?></span>

                                <div class="bottom">
                                    <?php
                                    if ($link): ?>

                                        <a href="<?php echo esc_url($link); ?>" class="btn-more-info">
                                            <i class="fa fa-whatsapp flex-center align-center" aria-hidden="true"></i>
                                            <span class="flex-center align-center"><?= $botao ?></span>
                                        </a>
                                    <?php endif; ?>
                                    <br/>
                                    <?php
                                    if ($linkDireito): ?>
                                        <a href="<?php echo esc_url($linkDireito); ?>" class="btn-more-info">
                                            <i class="fa fa-info-circle flex-center align-center"
                                               aria-hidden="true"></i>
                                            <span style="font-size: 18px;"
                                                  class="flex-center align-center"><?= $botaoDireito ?></span>
                                        </a>
                                    <?php endif; ?>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>