<?php //Template Name: Promoções Viagens ?>

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title(); ?></title>
   
    <link rel="stylesheet" href="https://www.topbrasiltur.com.br/wp-content/themes/topbrasil/src/promocoes/css/style.css" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.topbrasiltur.com.br/wp-content/themes/topbrasil/src/promocoes/css/banner.css" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://www.topbrasiltur.com.br/wp-content/themes/topbrasil/src/promocoes/css/animate.css">


</head>

<body>

    <?php 
        $logo = get_field('logo');
        if( !empty( $logo ) ): ?>
        <a href="https://www.topbrasiltur.com.br/"><img class="logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" /> </a>
    <?php endif; ?>

    <div class="slideshow-container">

        <div class="mySlides fade">          

    <?php 
        $banner_pricipal = get_field('banner_pricipal');
        if( !empty( $banner_pricipal ) ): ?>
        <img class="banner_pricipal" src="<?php echo esc_url($banner_pricipal['url']); ?>" alt="<?php echo esc_attr($banner_pricipal['alt']); ?>" />
    <?php endif; ?>

            <div class="text animated bounceInUp">

                <p class="titulo"> <?php the_field ('primeiro_texto');  ?>  </p>

                <p class="baixo"><span> <?php the_field ('segundo_texto'); ?></span> </p>

            </div>

        </div>

    </div>

    <div style="text-align:center">
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


        <section id="col-3-tours">
        <div class="container">
            <div class="trending-tour__tittle">

                <div class="section-tittle">
                    <h1> <?php the_field ('titulo_principal'); ?></h1>
                   
                </div>

                <p> <?php the_field ('conteudo_resumido'); ?> </p>

                <hr>

               </div>   

            <div class="row">              

                <div class="col-md-8">

                    <h2 class="titulo-promocional"> <?php the_field ('nome_promocional'); ?> </h2>

                </div>

                <div class="col-md-4">

        <?php 
            $imagem_do_parcelamento = get_field('imagem_do_parcelamento');
            if( !empty( $imagem_do_parcelamento ) ): ?>
            <img class="imagem-responsive" src="<?php echo esc_url($imagem_do_parcelamento['url']); ?>" alt="<?php echo esc_attr($imagem_do_parcelamento['alt']); ?>" />
        <?php endif; ?>

                </div>

                 <div class="container">
                 	<br/>
                 	<p> <?php the_field ('o_que_esta_incluso'); ?></p></div>

            </div>

            <br/>

            <div class="row">

                <?php if(get_field('pacotes_de_viagens_promocionais')): ?>   

                <?php while(has_sub_field('pacotes_de_viagens_promocionais')): ?>

                <div class="col-lg-6 col-sm-6 col-12">                    

                    <div class="trending-tour-item__sale"></div>                

                        <?php 

                        $link = get_sub_field('link_do_formulario_pagina');

                        if( $link ): 
                            $link_url = $link['url'];

                        ?>      

                    <a class="trending-tour-item" href="<?php echo esc_url($link_url); ?>">

                    <?php if( get_sub_field('imagem_pacote_promocional') ): ?>                        

                       <img class="trending-tour-item__thumnail" src="<?php the_sub_field('imagem_pacote_promocional'); ?>" />

                    <?php endif; ?>

                    <div class="trending-tour-item__info">

                        <h3 class="trending-tour-item__name"> 
                            <?php the_sub_field ('titulo_do_pacote'); ?></h3>

                       <div class="trending-tour-item__group-infor">

                                <div class="trending-tour-item__group-infor--left">
                                    <div class="trending-tour-item__group-infor__lasting">

                                        <span class="apartir"> 

                                        <?php the_sub_field ('a_partir_de_primeiro'); ?>
                                            
                                        </span>

                                        <!--<span class="trending-tour-item__group-infor__price">

                                        <?php the_sub_field ('valor_do_a_partir_primeiro'); ?>    

                                        </span> <span>por pessoa</span> -->

                                        <p class="diasealimentacao">
                                            
                                        <?php the_sub_field ('quantidade_de_dias'); ?>
                                        
                                        </p>

                                        <p class="validade">

                                        <?php the_sub_field ('periodo_de_validade'); ?>    

                                        </p>

                                        <button class="botao button-primary">Eu Quero!</button>

                                </div>

                            </div>

                        </div>  

                    </div>

                    </a>         

                </div> 
             <?php endif; ?> 

        <?php endwhile; ?>  

    <?php endif; ?>
    
            </div>

        </div>      

    </section>

    <section id="col-3-tours">

        <div class="container">           

            <div class="row">

                <hr>

                <div class="col-md-8">

                     <h2 class="titulo-promocional"> <?php the_field ('nome_promocional2'); ?> </h2>

                </div>

                <div class="col-md-4">

        <?php 
            $imagem_do_parcelamento2 = get_field('imagem_do_parcelamento2');
            if( !empty( $imagem_do_parcelamento2 ) ): ?>
            <img class="imagem-responsive" src="<?php echo esc_url($imagem_do_parcelamento2['url']); ?>" alt="<?php echo esc_attr($imagem_do_parcelamento2['alt']); ?>" />
        <?php endif; ?>

                </div> <br/>

                <div class="container"> <br/>

                	 <p> <?php the_field ('o_que_esta_incluso2'); ?></p> </div>

            </div>

            <br/>

            <div class="row">

                <?php if(get_field('pacotes_de_viagens_promocionais_2')): ?>   

                <?php while(has_sub_field('pacotes_de_viagens_promocionais_2')): ?>


                <div class="col-lg-6 col-sm-6 col-12">                    

                    <div class="trending-tour-item__sale"></div>                

                        <?php 

                        $link = get_sub_field('link_do_formulario_pagina2');

                        if( $link ): 
                            $link_url = $link['url'];

                        ?>      

                    <a class="trending-tour-item" href="<?php echo esc_url($link_url); ?>">

                    <?php if( get_sub_field('imagem_pacote_promocional2') ): ?>                        

                       <img class="trending-tour-item__thumnail" src="<?php the_sub_field('imagem_pacote_promocional2'); ?>" />

                    <?php endif; ?>

                    <div class="trending-tour-item__info">

                        <h3 class="trending-tour-item__name"> 
                            <?php the_sub_field ('titulo_do_pacote2'); ?></h3>


                       <div class="trending-tour-item__group-infor">

                                <div class="trending-tour-item__group-infor--left">
                                    <div class="trending-tour-item__group-infor__lasting">

                                        <span class="apartir"> 

                                        <?php the_sub_field ('a_partir_de_segundo'); ?>
                                            
                                        </span>

                                       <!-- <span class="trending-tour-item__group-infor__price">

                                        <?php the_sub_field ('valor_do_a_partir_segundo'); ?>    

                                        </span> <span>por pessoa</span> -->

                                        <p class="diasealimentacao">
                                            
                                        <?php the_sub_field ('quantidade_de_dias2'); ?>
                                        
                                        </p>

                                        <p class="validade">

                                        <?php the_sub_field ('periodo_de_validade2'); ?>    

                                        </p>

                                        <button class="botao button-primary">Eu Quero!</button>

                                </div>

                            </div>

                        </div>  

                    </div> 

                    </a>         

                </div> 
             <?php endif; ?> 

        <?php endwhile; ?>  

<?php endif; ?>
    
            </div>     

        </div>      

    </section>


         <section id="col-3-tours">

        <div class="container">     

            <div class="row">              

                <div class="col-md-8">

                    <h2 class="titulo-promocional"> <?php the_field ('nome_promocional_3'); ?> </h2>

                </div>

                <div class="col-md-4">

        <?php 
            $imagem_do_parcelamento3 = get_field('imagem_do_parcelamento3');
            if( !empty( $imagem_do_parcelamento3 ) ): ?>
            <img class="imagem-responsive" src="<?php echo esc_url($imagem_do_parcelamento3['url']); ?>" alt="<?php echo esc_attr($imagem_do_parcelamento3['alt']); ?>" />
        <?php endif; ?>

                </div>

                 <div class="container">
                 	<br/>
                 	<p> <?php the_field ('o_que_esta_incluso3'); ?></p></div>

            </div>


            <br/>

            <div class="row">

                <?php if(get_field('pacotes_de_viagens_promocionais_3')): ?>   

                <?php while(has_sub_field('pacotes_de_viagens_promocionais_3')): ?>


                <div class="col-lg-6 col-sm-6 col-12">                    

                    <div class="trending-tour-item__sale"></div>                

                        <?php 

                        $link = get_sub_field('link_do_formulario_pagina3');

                        if( $link ): 
                            $link_url = $link['url'];

                        ?>      

                    <a class="trending-tour-item" href="<?php echo esc_url($link_url); ?>">

                    <?php if( get_sub_field('imagem_pacote_promocional3') ): ?>                        

                       <img class="trending-tour-item__thumnail" src="<?php the_sub_field('imagem_pacote_promocional3'); ?>" />

                    <?php endif; ?>

                    <div class="trending-tour-item__info">

                        <h3 class="trending-tour-item__name"> 
                            <?php the_sub_field ('titulo_do_pacote3'); ?></h3>


                       <div class="trending-tour-item__group-infor">

                                <div class="trending-tour-item__group-infor--left">
                                    <div class="trending-tour-item__group-infor__lasting">

                                        <span class="apartir"> 

                                        <?php the_sub_field ('a_partir_de_terceiro'); ?>
                                            
                                        </span>

                                       <!-- <span class="trending-tour-item__group-infor__price">

                                        <?php the_sub_field ('valor_do_a_partir_terceiro'); ?>    

                                        </span> <span>por pessoa</span> -->

                                        <p class="diasealimentacao">
                                            
                                        <?php the_sub_field ('quantidade_de_dias3'); ?>
                                        
                                        </p>

                                        <p class="validade">

                                        <?php the_sub_field ('periodo_de_validade3'); ?>    

                                        </p>

                                        <button class="botao button-primary">Eu Quero!</button>

                                </div>

                            </div>

                        </div> 

                    </div> 

                    </a>         

                </div> 
             <?php endif; ?> 

        <?php endwhile; ?>  

    <?php endif; ?>
    
            </div>

        </div>      

    </section>

    <footer id="footer">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <h3 class="motivos">7 Motivos para viajar com a Top Brasil</h3>

                    <ul class="motivos">
                        <li>Mais de 50 mil passageiros embarcados em 20 anos</li>
                        <li>Eleita entre as 5 melhores agências do Brasil</li>
                        <li>Site com mais de 2000 pacotes para todas as partes do mundo</li>
                        <li>Preços competitivos e pagamento facilitado em até 10 parcelas sem juros</li>
                        <li>Clientes altamente satisfeitos</li>
                        <li>Consultores especializados</li>
                        <li>Plantão 24 horas durante a sua viagens.</li>
                    </ul>
                    <p class="motivos"></p>
                </div>

                <div class="col-md-6">

                    <h3 class="motivos">Compre com agilidade sem sair de casa!</h3>

                    <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5511946036617">

                        <img class="img-responsive" src="https://www.topbrasiltur.com.br/wp-content/themes/topbrasil/src/promocoes/imagens/whatsapp.png">

                        <span class="motivos">(11) 94603-6617</span></a>

                    <br/>
                    <br/>

                   <!-- <a href="tel:1155766300">

                        <img class="img-responsive" src="https://www.topbrasiltur.com.br/wp-content/themes/topbrasil/src/promocoes/imagens/telefone-icone.png">

                        <span class="motivos">SP (11) 5576-6300</span> </a>

                    <br/>
                    <br/> -->

                    <a href="mailto:contato@topbrasiltur.com.br">

                        <img class="img-responsive" src="https://www.topbrasiltur.com.br/wp-content/themes/topbrasil/src/promocoes/imagens/email-topbrasil1.png">

                        <span class="motivos">contato@topbrasiltur.com.br</span></a>
                    <br/>
                    <br/>

                    <p class="cafe">Se preferir venha tomar um café conosco</p>

                    <span class="endereco">Rua Vergueiro 2045/14º andar - Vila Mariana - São Paulo/SP</span>
                    <br/>

                    <span class="endereco"> 2º a 6º feira, das 08h30 as 19h00 e sábado das 09h00 às 13h 
                    </span>

                </div>

            </div>

        </div>

    </footer>

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <br/>

                    <h2 class="promocionais">Veja mais Informações sobre os Pacotes Promocionais</h2>

                    <div class="observacoes"> <div class="col-md-12">

                    <p><?php the_field ('conteudo_principal'); ?></p>

                	</div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>

<style type="text/css">
    
div#query-monitor-main {
    display: none !important;
}

</style>

<?php wp_footer(); ?>