<?php

/*

 * Template Name: Pesquisa de Satisfação

 */

?>

<?php get_header(); ?>

<?php include TEMPLATEPATH.'/inc/search-top.php'; ?>

<?php include TEMPLATEPATH.'/inc/breadcrumb-back.php'; ?>

<section class="contato-page satisfacao-page">
  <div class="container">
    <div class="top">
      <h1 class="title-princ text-bold">Pesquisa de Satisfação</h1>
      <div class="content-page content">
        <p>Para nós é muito importante avaliar constantemente nossos colaboradores e parceiros para garantir a sua satisfação em relação aos nossos serviços. Assim, pedimos a gentileza de responder as questões abaixo.</p>
      </div>
    </div>
    <form id="contact-page-form" class="satisfacao-form" action="<?= get_bloginfo('url') ?>/mensagem-enviada" enctype="multipart/form-data" method="post">
      <ul>
        <li class="in-def flex align-center">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input data-yts-val="true" class="in-no-style" type="text" name="nome" placeholder="Nome">
        </li>

        <li class="in-def flex align-center">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <input data-yts-val="true" class="in-no-style" type="email" name="email" placeholder="E-mail">
        </li>

        <li class="in-def flex align-center">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <input data-yts-val="true" class="in-no-style" type="text" name="destino" placeholder="Destino">
        </li>

        <li class="in-def flex align-center">
          <i class="fa fa-calendar" aria-hidden="true"></i>
          <input data-yts-val="true" class="in-no-style" type="text" name="mes-ano" placeholder="Mês/Ano da Viagem">
        </li>

        <li class="images-title">
          <input style="display: none;" id="file-1" class="file-sat" type="file" name="arquivo1">
          <input style="display: none;" id="file-2" class="file-sat" type="file" name="arquivo2">
          <input style="display: none;" id="file-3" class="file-sat" type="file" name="arquivo3">
          <input style="display: none;" id="file-4" class="file-sat" type="file" name="arquivo4">
          <p class="text-center">Adicionar até 4 imagens de sua viagem</p>
        </li>

        <li class="images-form">
          <button type="button" data-input="file-1" class="bt-file-sat bt-file-1 btn-def-form flex-center align-center">
            <i class="fa fa-upload" aria-hidden="true"></i>
            <span>Imagem 1</span>
          </button>

          <button type="button" data-input="file-2" class="bt-file-sat bt-file-2 btn-def-form flex-center align-center">
            <i class="fa fa-upload" aria-hidden="true"></i>
            <span>Imagem 2</span>
          </button>

          <button type="button" data-input="file-3" class="bt-file-sat bt-file-3 btn-def-form flex-center align-center">
            <i class="fa fa-upload" aria-hidden="true"></i>
            <span>Imagem 3</span>
          </button>

          <button type="button" data-input="file-4" class="bt-file-sat bt-file-4 btn-def-form flex-center align-center">
            <i class="fa fa-upload" aria-hidden="true"></i>
            <span>Imagem 4</span>
          </button>
        </li>

        <li class="form-rate">
          <hr>

          <p>Assinale a questão que mais se aplica a sua viagem:</p>
          <ul>
            <li>
              <input type="radio" class="no-check" id="muito-bom" name="nivel-viagem" value="muito-bom">
              <label for="muito-bom" class="label-radio">
                <strong>Muito Bom! </strong> &nbsp;
                <span> A viagem superou às minhas expectativas.</span>
                <span class="flex stars-list-form">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </span>
              </label>
            </li>

            <li>
              <input type="radio" class="no-check" id="bom" name="nivel-viagem" value="bom">
              <label for="bom" class="label-radio">
                <strong>Bom! </strong>&nbsp;
                <span> A viagem ficou  dentro das  minhas expectativas.</span>
                <span class="flex stars-list-form">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </span>
              </label>
            </li>

            <li>
              <input type="radio" class="no-check" id="razoavel" name="nivel-viagem" value="razoavel">
              <label for="razoavel" class="label-radio">
                <strong>Razoável!</strong>&nbsp;
                <span> A viagem ficou um pouco abaixo das minhas expectativas.</span>
                <span class="flex stars-list-form">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </span>
              </label>
            </li>
          </ul>

          <hr>
        </li>

        <li class="item-msg">
          <p>Mencione impressões gerais sobre a sua viagem como um todo, para justificar a avaliação acima:</p>
          <div class="msg-def flex align-start">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <textarea class="in-no-style" name="imp-viagem"></textarea>
          </div>
        </li>

        <li>
          <p>Mencione impressões gerais sobre o atendimento da Top Brasil Turismo, para justificar a avaliação acima:</p>
          <div class="msg-def flex align-start">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <textarea class="in-no-style" name="imp-atend"></textarea>
          </div>
          <hr>
        </li>

        <li>
          <p class="form-legend">"Autorizo a reprodução total ou parcela dete depoimento e/ou foto neste site, na rede social da Top Brasil (Blog, Facebook, etc...). Estou ciente de que o texto irá passar por uma revisão ortográfica e sintética e que por isso poderá ter alguns trechos alterados para melhor entendimento.</p>
        </li>

        <li class="captcha-def flex align-center">
          <div class="g-recaptcha" data-sitekey="6LesemcUAAAAAE9K-vo8uIfK866wIF8I8MlXAQr_"></div>
        </li>

        <li>
          <button type="submit" class="btn-two-colors text-bold upper-all" form="contact-page-form">Enviar</button>
        </li>
      </ul>
    </form>
  </div>
</section>

<?php get_footer(); ?>