<?php //Template Name: Politica de Privacidade ?>

<?php include 'header.php'; ?>
<?php include 'inc/search-top.php'; ?>
<?php include 'inc/breadcrumb-back.php'; ?>
  
<div class="slideshow-container">

    <section class="home-pacotes sidebar-section">
        <div class="container">
            <div class="flex flex-parent">

                <div class="">
                    <div class="top">                       

                        <h1 class="title-princ strong text-blue"><?= the_title(); ?></h1>

                        <p style="text-align: justify;"><?php the_field('conteudo_seguro_viagem'); ?></p>
                       
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