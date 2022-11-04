<?php
    header("HTTP/1.0 404 Not Found");
    
    get_header();
?>

<?php require TEMPLATEPATH.'/inc/search-top.php'; ?>

<section class="page-error">
    <div class="container text-center">
        <img src="<?php bloginfo('template_directory') ?>/assets/img/404.png" alt="Página de Erro">
        <h2 class="sub-title open-font">
            Erro 404 - Página Não Encontrada
        </h2>
        <p>Desculpe-nos, não conseguimos encontrar a página que está procurando.</br>Para continuar, você pode:</p>
        <ul class="error-btns flex flex-wrap">
            <li class="col">              <a href="javascript:history.back()">                <i class="fa fa-reply" aria-hidden="true"></i>                <span>Página Anterior</span>              </a>            </li>            <li class="col">              <a href="<?php bloginfo('url'); ?>">                <i class="fa fa-home" aria-hidden="true"></i>                <span>Voltar para a Home</span>              </a>            </li>            <li class="col" style="display: none;">              <a href="<?php bloginfo('url'); ?>/pacotes-nacionais/">                <i class="fa fa-suitcase" aria-hidden="true"></i>                <span>Pacotes Nacionais</span>              </a>            </li>            <li class="col" style="display: none;">              <a href="<?php bloginfo('url'); ?>/pacotes-internacionais/">                <i class="fa fa-globe" aria-hidden="true"></i>                <span>Pacotes Internacionais</span>              </a>            </li>
        </ul>
    </div>
</section>

<?php get_footer(); ?>