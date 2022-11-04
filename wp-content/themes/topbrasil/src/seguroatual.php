<?php //Template Name: Seguro Atual ?>

<?php include 'header.php'; ?>
<?php include 'inc/search-top.php'; ?>
<?php include 'inc/breadcrumb-back.php'; ?>

  
<div class="slideshow-container">

    <div class="mySlides fade">

        <img class="imagemresponsiva" src="https://www.topbrasiltur.com.br/wp-content/uploads/2019/10/banner-principal-seguro-viagem.png" style="max-width: none;" alt="seguro viagem top brasil" />

        <div class="text animated bounceInUp">

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
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
    </section>

    <section class="home-pacotes sidebar-section">
        <div class="container">
            <div class="flex flex-parent">

                <div class="">
                    <div class="top">

                        <p style="text-align: center;"><a class="btn-table flex-center align-center" style="width: 282px; height: 62px; font-size: 24px; margin-left: 34%; margin-top: -9%;" href="https://www.aprilbrasil.com.br/whitelabel/index.asp?ageid=22375">Faça sua simulação</a></p> <br/><br/><br/><br/><br/><br/>

                        

                        <h1 class="title-princ strong text-blue"><?= the_title(); ?></h1>


                        <p style="text-align: justify;"><?php the_field('conteudo_seguro_viagem'); ?></p>

                        <div class="flex align-center pacotes-two">
                            
                                <div class="pacote-img">
                                    <img src="https://www.topbrasiltur.com.br/wp-content/uploads/2019/10/desconto-especial.png">
                                </div>   
                           
                                <div class="pacote-img">
                                    <img src="https://www.topbrasiltur.com.br/wp-content/uploads/2019/10/parcelamento.png" alt="pacotes para italia">
                                </div>     

                                <p style="text-align: center; display: inline-block; font-weight: normal; text-transform: normal; font-size: 17px;">
                                <strong style="text-transform: uppercase; font-size: 50px; font-weight: 800; color: #7c7c7c; line-height: 1.1;">Não perca <br/>Tempo!</strong> <br/>  <br/>      

                                FAÇA SUA COTAÇÃO AGORA<br/>
                                    E ENCONTRE O MELHOR SEGURO</br>
                                    VIAGEM PARA SEU DESTINO. <br/><br/>

                                    <a class="btn-table flex-center align-center" style="width: 282px; height: 62px; font-size: 24px; border-radius: 9px;" href="https://www.aprilbrasil.com.br/whitelabel/index.asp?ageid=22375">Faça sua simulação</a>

                                </p>                                  
                          
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </section>

    <style type="text/css">
        .pacotes-two .pacote-box .pacote-content {
            text-align: left !important;
        }
    </style>  
    <br/>


<?php include 'pages/inc/footer-newsletter-blog.php'; ?>
<?php include 'footer.php'; ?>