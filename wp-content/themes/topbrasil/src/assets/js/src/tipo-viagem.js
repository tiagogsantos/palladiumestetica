function trim(x){return x}function tipo_viagem(){var tipo_viagem=$('#aereo-sel').val();var qtd_local_embarque=$('#local-sel').find('option');var qtd_local_embarque=qtd_local_embarque.length;if(tipo_viagem=='sem-a-reo'&&qtd_local_embarque==1){$('.select-pacote-box').eq(1).hide();$('.qualquer').not(".e_"+tipo_viagem).fadeOut('fast',function(tipo_viagem){$(".e_"+tipo_viagem).fadeIn('fast')});setTimeout(function(){$(".e_"+tipo_viagem).fadeIn('fast')},1000)}else if(tipo_viagem=='sem-a-reo'){$('.select-pacote-box').eq(1).hide();$('.qualquer').not(".e_"+tipo_viagem).fadeOut('fast',function(){$(".e_"+tipo_viagem).fadeIn('fast')});setTimeout(function(){$(".e_"+tipo_viagem).fadeIn('fast')},1000)}else{$('.select-pacote-box').eq(1).show();$('.qualquer').not(".e_"+tipo_viagem).fadeOut('fast',function(){$(".e_"+tipo_viagem).fadeIn('fast')});setTimeout(function(){$(".e_"+tipo_viagem).fadeIn('fast')},1000)}}function auto_select(){var com_aereo=$('.e_com-a-reo');com_aereo=com_aereo.length;if(com_aereo<=0){}else{tipo_viagem();$('#local-sel').find('option:nth-child(2)').attr("selected","selected")}}function autoremove(){var com_aereo=$('.e_com-a-reo');com_aereo=com_aereo.length;if(com_aereo<=0){$('option[value=com-a-reo]').remove();tipo_viagem()}var sem_aereo=$('.e_sem-a-reo');sem_aereo=sem_aereo.length;if(sem_aereo<=0){$('option[value=sem-a-reo]').remove();tipo_viagem()}}$(document).ready(function(){sel_viagem=$('#aereo-sel').val();if(sel_viagem=='com-a-reo'){$('#local-sel').find('option:nth-child(2)').attr("selected","selected")}});