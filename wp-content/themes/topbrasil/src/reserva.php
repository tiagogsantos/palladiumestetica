<?php // Template Name: Reserva ?>
<?php get_header(); ?>
<?php include 'inc/search-top.php'; ?>

<div class="container">
   <div class="page-reserva">
      <?php if ( $_GET[ 'tipo']=='Orcamento' ) {$assunto = "Solicitação de Orçamento"; $txt_tit="Orçamento do Pacote" ; } else if ( $_GET[ 'tipo']=='Reserva' ) { $assunto = "Solicitação de Reserva"; $txt_tit="Solicitar Reserva do Pacote" ; } else { $txt_tit="Orçamento do Pacote" ; } ?>
      <h1><?= $txt_tit ?></h1>
      <p>A reserva somente será efetivada após a sua autorização.</p><br/>

      <!--  <h2>Informações do Pacote</h2> -->
      <form class="form-reserva" action="<?= get_bloginfo('url') ?>/reserva-realizada" method="post">
         <input type="hidden" name="referer" value="<?=$_SERVER['HTTP_REFERER'] ?>">
         <input type="hidden" name="assunto" value="<?= $assunto ?>">
         <div class="info-pacotes">
            <div class="linha-form">
               <div class="col-form">
                  <strong>Pacote para:</strong>
               </div>
               <div class="col-form">
                  <span><?= $_GET['pacote'] ?></span>
                  <input type="hidden" name="pacote_para" value="<?= $_GET['pacote'] ?>">
               </div>
            </div>
            <div class="linha-form">
               <div class="col-form">
                  <strong>Nome da Hospedagem Selecionada:</strong>
               </div>
               <div class="col-form">
                  <?php if ( $_GET[ 'hospedagem'] ) : ?>
                  <span><?= $_GET['hospedagem'] ?></span>
                  <input type="hidden" name="hospedagem" value="<?= $_GET['hospedagem'] ?>">
                  <?php else : ?>
                  <?php $id_pacote=intval($_GET[ 'id_pacote']); $hospedagem=get_field( 'valores_por_pessoa_pacotes', $id_pacote); foreach ( $hospedagem as $hosp ) : if ( !in_array($hosp[ 'hotel_pacotes'], $hospedagens) || $hosp[ 'hotel_pacotes'] ) { $hospedagens[]=$hosp[ 'hotel_pacotes'];} endforeach; ?>
                  <span>
                     <div class="select">
                        <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                        <select name="hospedagem" id="hospedagem" required>
                           <option value="Não Selecionado">Selecione a Hospedagem</option>
                           <?php foreach ( $hospedagens as $hosp ) : ?>
                           <option value="<?= $hosp ?>"><?= $hosp ?></option>
                           <?php endforeach; ?>
                        </select>
                     </div>
                  </span>
                  <?php endif; ?>
               </div>
            </div>
            <?php if ( isset($_GET[ 'periodo']) ) : ?>
            <div class="linha-form">
               <div class="col-form">
                  <strong>Período</strong>
               </div>
               <div class="col-form">
                  <span><?= $_GET['periodo'] ?></span>
                  <input type="hidden" name="periodo" value="<?= $_GET['periodo'] ?>">
               </div>
            </div>
            <?php endif; ?>
            <div class="linha-form">
               <div class="col-form">
                  <strong>Data de Embarque:</strong>
               </div>
               <div class="col-form">
                  <span>
                     <div class="span-data">
                        <input required class="ipt-data date" type="text" name="data" placeholder="Data de Embarque" value="">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                     </div>
                  </span>
               </div>
            </div>
            <div class="linha-form">
                <div class="col-form">
                    <strong>Quantidade de Passageiros:</strong>
                </div>
                <div class="col-form">
                    <span>
                         <div class="select">
                            <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                            <select id="qtd_adulto">
                                <option value="Não Selecionado">Quantidade de Adultos</option>
                                <?php for ( $i = 1; $i <= 10; $i++ ) : ?>
                                  <?php if ($i == 1): ?>
                                    <option selected value="<?= $i ?>"><?= $i ?></option>
                                  <?php else: ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                  <?php endif ?>
                                <?php endfor; ?>
                            </select>
                         </div>
                        <i class="sep"></i>
                         <div class="select">
                            <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                            <select id="qtd_crianca">
                                <option value="Não Selecionado">Quantidade de Crianças</option>
                                <?php for ( $i = 1; $i <= 10; $i++ ) : ?>
                                  <?php if ($i == 1): ?>
                                    <option selected value="<?= $i ?>"><?= $i ?></option>
                                  <?php else: ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                  <?php endif ?>
                                <?php endfor; ?>
                            </select>
                         </div>
                    </span>
                </div>
            </div>
            

            <div class="new-adulto">
              
            </div>
            
            

            <div class="new-crianca">
              
            </div>
         </div>
         <div class="form-principal-reserva">
            <h3>Dados do Solicitante</h3>
            <div class="campos-reserva">
               <input data-yts-val="true" type="text" name="nome_completo" placeholder="Nome completo" required>
               <input data-yts-val="true" type="email" name="email" placeholder="E-mail" required>
               <input data-yts-val="true" type="tel" name="celular" placeholder="Celular" required>
               <input type="text" name="operadora" placeholder="Operadora do Celular" required>
               <input type="text" name="local_embarque" placeholder="Local de embarque" required>
            </div>
            <div class="campos-reserva">
               <textarea name="observacoes" placeholder="Observações"></textarea>

               <?php if ( $_GET[ 'tipo']=='Orcamento' ) { $txt="Solicitar Orçamento" ; } else if ( $_GET[ 'tipo']=='Reserva' ) { $txt="Solicitar Reserva" ; } else { $txt="Solicitar Orçamento" ; } ?>
               <button type="submit">
               <?=$txt ?> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
               </button>
            </div>
         </div>
      </form>
   </div>
</div>
<!--<?php include 'inc/footer-newsletter-blog.php'; ?>-->

<?php get_footer(); ?>
<script>

    
  $('.date').mask('00/00/0000');

 // $(".date").datepicker({
   
   
   
 //       dateFormat: 'dd/mm/yy',
   
   
   
 //       dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
   
   
   
 //       dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
   
   
   
 //       dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
   
   
   
 //       monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
   
   
   
 //       monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
   
   
   
 //       nextText: 'Próximo',
   
   
   
 //       prevText: 'Anterior'
   
   
   
 //   });  
</script>

<script>
  
$(document).ready(function() {
  htmladulto = '<div class="linha-form inserir-linha original linha-adulto"> <div class="col-form"> <strong><b class="lbl">Nome Completo - Adulto</b></strong> </div><div class="col-form"> <span> <input type="text" data-yts-val="true" name="nome_adulto[][nome]" placeholder="Insira o nome completo"> <i class="sep"></i> <div class="input-icon"><input class="date" type="text" name="nome_adulto[][data]" placeholder="Data de Nascimento"><i class="fa fa-calendar-o" aria-hidden="true"></i></div></span> </div></div>';

  $('.new-adulto').append(htmladulto);

  $('#qtd_adulto').change(function() {

    $('.new-adulto').html(' ');

    var qtd_adulto = parseInt( $(this).val() );

    var i = 0;

    htmladulto = '<div class="linha-form inserir-linha original linha-adulto"> <div class="col-form"> <strong><b class="lbl">Nome Completo - Adulto</b></strong> </div><div class="col-form"> <span> <input type="text" data-yts-val="true" name="nome_adulto[][nome]" placeholder="Insira o nome completo"> <i class="sep"></i> <div class="input-icon"><input class="date" type="text" name="nome_adulto[][data]" placeholder="Data de Nascimento"><i class="fa fa-calendar-o" aria-hidden="true"></i></div></span> </div></div>';

    while ( i < qtd_adulto  ) {
      $('.new-adulto').append(htmladulto);
      i++;
    }    

    console.log(qtd_adulto);
    
    $('.date').mask('00/00/0000');

   //  $(".date").datepicker({
   
   
   
   //     dateFormat: 'dd/mm/yy',
   
   
   
   //     dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
   
   
   
   //     dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
   
   
   
   //     dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
   
   
   
   //     monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
   
   
   
   //     monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
   
   
   
   //     nextText: 'Próximo',
   
   
   
   //     prevText: 'Anterior'
   
   
   
   // });

  });

});

$(document).ready(function() {

  htmlcrianca = '<div class="linha-form inserir-linha original linha-crianca"> <div class="col-form"> <strong><b class="lbl">Nome Completo - Criança</b></strong> </div><div class="col-form"> <span> <input type="text"  name="nome_crianca[][nome]" placeholder="Insira o nome completo"> <i class="sep"></i> <div class="input-icon"><input class="date" type="text" name="nome_crianca[][data]" placeholder="Data de Nascimento"><i class="fa fa-calendar-o" aria-hidden="true"></i></div></span> </div></div>';

  $('.new-crianca').append(htmlcrianca);

  $('#qtd_crianca').change(function() {

    $('.new-crianca').html(' ');

    var qtd_crianca = parseInt( $(this).val() );

    var i = 0;

    htmlcrianca = '<div class="linha-form inserir-linha original linha-crianca"> <div class="col-form"> <strong><b class="lbl">Nome Completo - Criança</b></strong> </div><div class="col-form"> <span> <input type="text" data-yts-val="true" name="nome_crianca[][nome]" placeholder="Insira o nome completo"> <i class="sep"></i> <div class="input-icon"><input class="date" type="text" name="nome_crianca[][data]" placeholder="Data de Nascimento"><i class="fa fa-calendar-o" aria-hidden="true"></i></div></span> </div></div>';

    while ( i < qtd_crianca  ) {
      $('.new-crianca').append(htmlcrianca);
      i++;
    }    

    console.log(qtd_crianca);
    
    $('.date').mask('00/00/0000');

   //  $(".date").datepicker({
   
   
   
   //     dateFormat: 'dd/mm/yy',
   
   
   
   //     dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
   
   
   
   //     dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
   
   
   
   //     dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
   
   
   
   //     monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
   
   
   
   //     monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
   
   
   
   //     nextText: 'Próximo',
   
   
   
   //     prevText: 'Anterior'
   
   
   
   // });

  });

});

</script>

<style type="text/css">
  
@media screen and (max-width: 728px) and (min-width: 360px){
#barra-contatos-viajar {
    display: none;
}
}

</style>