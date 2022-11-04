<style type="text/css">

    section.search-top .call-you {
        max-width: 489px;
        cursor: pointer;
    }

    section.search-top .call-you p {
        font-size: 14px;
        font-size: .975rem;
        font-weight: bold;
        color: #36538f;
        line-height: 20px;
        text-transform: uppercase;
    }

    .links-share {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-pack: justify;
        -webkit-box-pack: justify;
        justify-content: space-evenly;
        -ms-flex-align: center;
        -webkit-box-align: center;
        align-items: center;
        width: 100%;
        max-width: 180px;
    }


    a.social.icon-whatsapp {
        display: inline-grid;
        justify-content: center;
        align-items: center;
        width: 36px;
        height: 36px;
        border-radius: 100%;
        background: #3bdb43;
        font-size: 1.125rem;
        color: #ffffff;
    }

    p.redehome {
        font-size: .975rem;
        font-weight: bold;
        color: #36538f;
        line-height: 20px;
        text-transform: uppercase;
        width: auto;
        width: 508px;
    }


    @media (max-width: 360px) {
        .ocultacaosocial {
            display: none;
        }

    }

    @media (max-width: 414px) {
        .ocultacaosocial {
            display: none;
        }

    }

    @media (max-width: 360px) {
        p.redehome {
            font-size: 14px;
        }

        section.search-top .search-top-box .search-title {
            display: none;
        }

        section.search-top .search-top-box button {
            display: none;
        }

        section.search-top .search-top-box input {
            display: none;
        }

    }

    @media (max-width: 414px) {
        p.redehome {

        }

        a.social.icon-whatsapp {
            width: 30px;
            height: 28px;
        }

    }


    @media (max-width: 375px) {
        p.redehome {

        }
    }

</style>

<section class="search-top">
    <div class="container">
        <div class="flex flex-parent">

            <div class="ocultacaosocial">

                <div class="flex align-center">

                    <p class="redehome">Entre em contato: <a class="social icon-whatsapp"
                                                             href="https://api.whatsapp.com/send?l=pt&amp;phone=5511949334849"
                                                             target="_self"><i class="fab fa-whatsapp"
                                                                               aria-hidden="true"></i></a> <a
                                style="color: #36538f;"
                                href="https://api.whatsapp.com/send?l=pt&amp;phone=5511949334849"> (11) 94933-4849
                            &nbsp; </a> <a style="cursor: pointer;" class="social icon-whatsapp2" data-toggle="modal"
                                           data-target="#myModalfunc"><i class="fas fa-phone"></i></a> <a
                                style="color: #36538f;" href="tel:1139268000">(11) 3926-8000 </a>&nbsp; &nbsp; &nbsp;
                    </p>

                    <!--<ul style="margin-right: 0%;" class="links-share">

                    <li><a class="social icon-facebook" href="https://www.facebook.com/pg/TopBrasilTurismo/reviews/?ref=page_internal" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                    <li><a class="social icon-twitter" href="https://twitter.com/topbrasil?lang=pt" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                   <li><a style="background: #a66f44;" class="social icon-instagram" href="https://www.instagram.com/topbrasiltur/?hl=pt-br" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                  </ul>-->

                </div>

            </div>

            <div class="col search-top-box flex align-center">
                <span class="search-title">Quais tratamentos você procura:</span>

                <form id="top-search-form" class="search-form" method="get" action="<?= get_bloginfo('url') ?>/busca">
                    <div class="search-box">
                        <input data-yts-val="true" type="text" name="busca" placeholder="Digite aqui"
                               style="height: 30px;">

                        <button type="submit" form="top-search-form" name="button"></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<style>
    section.search-top .search-top-box .search-title {
        max-width: 304px;
    }

    a.social.icon-whatsapp {
        font-size: 27px;
    }

    a.social.icon-whatsapp {
        display: inline-grid;
        justify-content: center;
        align-items: center;
        width: 36px;
        height: 36px;
        border-radius: 100%;
        background: #3bdb43;
        font-size: 1.125rem;
        color: #ffffff;
    }

    a.social.icon-whatsapp2 {
        background: #337ab7;
        display: inline-grid;
        justify-content: center;
        align-items: center;
        width: 36px;
        height: 36px;
        border-radius: 100%;
        color: #ffffff;
        font-size: 24px;
    }

    p.redehome {
        font-size: 16px;
        font-weight: bold;
        color: #36538f;
        line-height: 20px;
        text-transform: uppercase;
    }

    i.fas.fa-phone {
        font-size: 1.125rem;
        background: #337ab7;
        display: inline-grid;
        justify-content: center;
        align-items: center;
        width: 36px;
        height: 36px;
        border-radius: 100%;
        color: #ffffff;
        font-size: 18px;
    }

    i.fab.fa-whatsapp {
        color: #ffffff !important;
        margin-left: 2px;
    }

    section.search-top .search-top-box .search-title {
        max-width: 320px !important;
    }

    section.search-top .search-top-box {
        max-width: 611px;
    }

    .col.search-top-box.flex.align-center {
        margin-top: -18px;
    }

    section.search-top {
        padding: 10px 0px 0px 5px;
        background: #e9e9e9;
    }

</style>
