<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

    p.titulo {
        font-size: 50px;
        font-weight: bold;
    }

    span.precobanner {
        color: orange;
        font-size: 45px;
        font-weight: bold;
    }

    p.divisores {
        margin-top: 40px;
        font-size: 30px
    }

    p.baixo {
        font-size: 18px;
        margin-top: 20px;
    }

    p.dianoite {
        color: #ff9f1c;
        font-size: 22px;
        margin-top: 20px;
    }

    span.porpessoa {
        font-size: 17px;
        color: #ffffff;
        font-weight: normal;
    }

    .mySlides {
        display: none;
    }

    .button-primary {
        color: #fff;
        background-color: orange;
        border-color: #88b04b;
    }

    button.botao {
        display: inline-block;
        min-width: 185px;
        padding: 9px 20px;
        font-size: 12px;
        line-height: 21px;
        border-radius: 30px;
        font-weight: 900;
        text-align: center;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        text-transform: uppercase;
        transition: .3s ease-out;
        margin-top: 20px;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 100%;
        position: relative;
        margin: auto;
    }


    .text {
        color: #f2f2f2;
        position: absolute;
        width: 100%;
        text-align: left;
        margin-top: -20%;
        margin-left: 8%;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 3.5s;
        animation-name: fade;
        animation-duration: 3.5s;
    }


    @media (max-width: 375px) {

        .text {
            margin-top: -40% !important;
        }

        p.titulo {
            font-size: 20px;
        }

        span.precobanner {
            font-size: 19px;
            font-weight: bold !important;
        }

        p.divisores {
            font-size: 12px;
            margin-top: 1%;
        }

        p.baixo {
            font-size: 12px;
            margin-top: 2px;
            font-weight: bold !important;
        }

        .responsivoimage {
            height: 160px;
        }

        p.dianoite {
            font-size: 16px;
            margin-top: 0px;
            font-weight: bold !important;
        }

        button.botao {
            line-height: 15px;
            margin-top: 8px;
        }

        img.imagemresponsiva {
            max-width: 100%;
            height: 152px;
        }
    }

    @media (max-width: 414px) {

        .text {
            margin-top: -36%;
        }

        p.titulo {
            font-size: 20px;
        }

        span.precobanner {
            font-size: 19px;
            font-weight: bold !important;
        }

        p.divisores {
            font-size: 12px;
            margin-top: 1%;
        }

        p.baixo {
            font-size: 12px;
            margin-top: 2px;
            font-weight: 800 !important;
        }

        .responsivoimage {
            height: 160px;
        }

        p.dianoite {
            font-size: 16px;
            margin-top: 0px;
            font-weight: 900 !important;
        }

        button.botao {
            line-height: 15px;
            margin-top: 8px;
        }

        img.imagemresponsiva {
            max-width: 100%;
            height: 152px;
        }
    }

    @media (max-width: 360px) {

        .text {
            margin-top: -41%;
        }

        p.titulo {
            font-size: 20px;
        }

        span.precobanner {
            font-size: 19px;
        }

        p.divisores {
            font-size: 12px;
            margin-top: 1%;
        }

        p.baixo {
            font-size: 12px;
            margin-top: 2px;
        }

        .responsivoimage {
            height: 160px;
        }

        p.dianoite {
            font-size: 16px;
            margin-top: 0px;
        }

        button.botao {
            line-height: 15px;
            margin-top: 8px;
        }

        img.imagemresponsiva {
            max-width: 100%;
            height: 152px;
        }
    }

    @media (max-width: 320px) {

        .text {
            margin-top: -46%;
        }

        p.titulo {
            font-size: 20px;
        }

        span.precobanner {
            font-size: 19px;
        }

        p.divisores {
            font-size: 12px;
            margin-top: 1%;
        }

        p.baixo {
            font-size: 12px;
            margin-top: 2px;
        }

        .responsivoimage {
            height: 160px;
        }

        p.dianoite {
            font-size: 16px;
            margin-top: 0px;
        }

        button.botao {
            line-height: 15px;
            margin-top: 8px;
        }

        img.imagemresponsiva {
            max-width: 100%;
            height: 152px;
        }
    }

</style>


<?php if (get_field('banner_para_home')): ?>

<?php while (has_sub_field('banner_para_home')):

$imagem_para_home = get_sub_field('imagem_para_home');

$link_do_pacote_topico = get_sub_field('link_da_estetica');

?>

<div class="slideshow-container">

    <div class="mySlides fade">

        <?php
        $link_do_pacote_topico = get_sub_field('link_da_estetica');
        if ($link_do_pacote_topico): ?>
            <a class="button" href="<?php echo esc_url($link_do_pacote_topico); ?>"><img
                        class="imagemresponsiva" src="<?php echo $imagem_para_home['url']; ?>"
                        alt="<?php echo $imagem_para_home['alt'] ?>"/></a>
        <?php endif; ?>

    </div>

    <?php endwhile; ?>

    <?php endif; ?>

</div>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>

<link rel="stylesheet" type="text/css" href="animate.css">