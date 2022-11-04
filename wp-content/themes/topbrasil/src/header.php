<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title><?php wp_title(); ?></title>

    <meta charset="utf-8">

    <?php
    if (is_page_template('blog.php')) {
        require TEMPLATEPATH . '/inc/next-prev-meta.php';
    } elseif (is_page_template('home.php')) {
        require TEMPLATEPATH . '/inc/next-prev-meta.php';
    }
    ?>

    <?php wp_head(); ?>

</head>
<body>

<?php get_template_part('inc/seo-tags') ?>

<?php if (!is_single('pacotes')) : ?>
    <?php get_template_part('inc/form-call'); ?>
<?php endif; ?>

<header>
    <div class="container">
        <div class="flex flex-parent align-starte">

            <?php if (is_front_page()): ?>
                <a href="#"><h1 class="h1-logo"
                                style="background: url(<?= get_field('logo_do_site', 'theme-options') ?>) no-repeat center center;">
                        Top Brasil Agência de Viagens</h1></a>
            <?php else: ?>
                <div class="col">
                    <a href="<?php bloginfo('url') ?>"><img src="<?= get_field('logo_do_site', 'theme-options') ?>"
                                                            alt="Top Brasil"></a>
                </div>
            <?php endif; ?>

            <div class="col">

                <div class="top top-phones">
                    <ul class="flex flex-end open-font mobile-no-flex">
                        <?php $primeiro_tel = get_field('primeiro_telefone', 'theme-options'); ?>
                        <?php if ($primeiro_tel) : ?>
                            <li class="desk-phone mobile-phone">
                                <a href="tel:<?= cleanstring($primeiro_tel); ?>">
                                    <?= $primeiro_tel ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php $segundo_tel = get_field('segundo_telefone', 'theme-options'); ?>
                        <?php if ($segundo_tel) : ?>
                            <li class="desk-phone">
                                <a href="tel:<?= cleanstring($segundo_tel); ?>">
                                    <?= $segundo_tel ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php $terceiro_tel = get_field('terceiro_telefone', 'theme-options'); ?>
                        <?php if ($terceiro_tel) : ?>
                            <li class="desk-phone mobile-phone">
                                <a href="tel:<?= cleanstring($terceiro_tel); ?>">
                                    <?= $terceiro_tel ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php $quarto_tel = get_field('quarto_telefone', 'theme-options'); ?>
                        <?php if ($quarto_tel) : ?>
                            <li class="desk-phone">
                                <a href="tel:<?= cleanstring($quarto_tel); ?>">
                                    <?= $quarto_tel ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php $quinto_tel = get_field('quinto_telefone', 'theme-options'); ?>
                        <?php if ($quinto_tel) : ?>
                            <li class="desk-phone">
                                <a href="tel:<?= cleanstring($quinto_tel); ?>">
                                    <?= $quinto_tel ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php $sexto_tel = get_field('sexto_telefone', 'theme-options'); ?>
                        <?php if ($sexto_tel) : ?>
                            <li class="desk-phone">
                                <a href="tel:<?= cleanstring($sexto_tel); ?>">
                                    <?= $sexto_tel ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <!--<li class="mobile-phone whats-icon">
                  <a href="https://api.whatsapp.com/send?l=pt&phone=<?= cleanstring('55 (11) 94603-6617'); ?>">(11) 94603-6617</a>
                </li> -->
                    </ul>

                    <?php
                    function cleanspecial($string)
                    {
                        //  $string = str_replace(' ', '', $string); // Replaces all spaces.

                        $string = str_replace('-', '', $string); // Replaces all hyphens.

                        $string = preg_replace('/[^A-Za-z0-9õ \-]/', '', $string); // Removes special chars.

                        $string = preg_replace('/[0-9]+/', '', $string);

                        return $string;
                    }

                    ?>

                    <ul class="flex flex-end open-font mobile-box-phone">
                        <?php $segundo_tel = get_field('segundo_telefone', 'theme-options'); ?>
                        <?php if ($segundo_tel) : ?>
                            <li>
                                <a href="tel:<?= cleanstring($segundo_tel); ?>">
                                    <?= cleanspecial($segundo_tel); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php $quarto_tel = get_field('quarto_telefone', 'theme-options'); ?>
                        <?php if ($quarto_tel) : ?>
                            <li>
                                <a href="tel:<?= cleanstring($quarto_tel); ?>">
                                    <?= cleanspecial($quarto_tel); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php $quinto_tel = get_field('quinto_telefone', 'theme-options'); ?>
                        <?php if ($quinto_tel) : ?>
                            <li>
                                <a href="tel:<?= cleanstring($quinto_tel); ?>">
                                    <?= cleanspecial($quinto_tel); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php $sexto_tel = get_field('sexto_telefone', 'theme-options'); ?>
                        <?php if ($sexto_tel) : ?>
                            <li>
                                <a href="tel:<?= cleanstring($sexto_tel); ?>">
                                    <?= cleanspecial($sexto_tel); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>

                <div class="bottom">
                    <div class="top-nav">

                        <?php
                        $args = [

                            'menu' => 'Menu Principal',
                            'menu_class' => null

                        ];

                        wp_nav_menu($args);
                        ?>

                        <div class="menu-mobile">
                            <?php
                            $args = [

                                'menu' => 'Menu Principal - Mobile',
                                'menu_class' => null

                            ];

                            wp_nav_menu($args);
                            ?>
                        </div>

                        <style type="text/css">
                            @media (max-width: 490px) {
                                #menu-menu-principal-mobile {
                                    height: auto !important;
                                }
                            }
                        </style>

                    </div>
                </div>

            </div>

        </div>
    </div>
</header>