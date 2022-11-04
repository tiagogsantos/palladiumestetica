/*
# Funções Auxiliares
-------------------------------------------------------------*/
function trim(x) {
    return x;
}

function local_embarque() {
  var local_embarque = $('#local-sel').val();
  

  if ( local_embarque != "Selecione um local" ) {
    
    $('.qualquer').fadeOut('fast', function() {
      $("."+local_embarque).fadeIn('fast');
    });

    console.log(local_embarque);
    
    
  } else {
    $('.qualquer').fadeIn('fast');
  }
}

function select() {
  // $('#local-sel').val('e_s-o-paulo').trigger('change');
  // console.log("selected")
}

/*
# Seleciona apenas os pacotes do local de embarque
-------------------------------------------------------------*/
$(document).ready(function() {

   setTimeout(function(){ /*select();*/ }, 1000);

  $('#local-sel').change(function() {

    //$('#local-sel').find('option').first().attr('disabled', 'disabled');

    local_embarque();

  });

  

});



