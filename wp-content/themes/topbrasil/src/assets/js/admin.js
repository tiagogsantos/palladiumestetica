$=jQuery;function getQueryParam(param){location.search.substr(1).split("&").some(function(item){return item.split("=")[0]==param&&(param=item.split("=")[1])});return param}$(document).ready(function(){$("#acf-field_584ab1b553238").attr('disabled','disabled');console.log("<-- RUN ADMIN SCRIPT's -->");var id_post=getQueryParam('post');console.log("AAA");if(parseInt(id_post)>15571){var n_id_post='A'+id_post;$("#acf-field_584ab1b553238").val(n_id_post)}console.log(id_post)});$(document).ready(function(){$('[data-name="numero_de_curtidas"]').find('input').attr('disabled','disabled');$('[data-name="numero_de_curtidas"]').find('input').css({"background":"transparent","border":"none","text-align":"center"})});function filtro(){console.log($('.busca-term').val());$('#parent').find('option').show();filtro=$('.busca-term').val().toLowerCase();$('#parent').find('option').each(function(){var txt=$(this).text().toLowerCase();if(txt.indexOf(filtro)!==-1){console.log("Pacote encontrado")}else{$(this).hide()}});return true}$(document).ready(function(){$("<tr><td></td><td><input  style='display:block;width:100%;' class='busca-term' type='text' placeholder='Pesquise aqui'> <button class='button bt-filtra'>Filtrar</button></td></tr>").insertAfter(".term-parent-wrap");$(".bt-filtra").on("click",function(){console.log($('.busca-term').val());$('#parent').find('option').show();filtro=$('.busca-term').val().toLowerCase();$('#parent').find('option').each(function(){var txt=$(this).text().toLowerCase();if(txt.indexOf(filtro)!==-1){console.log("Pacote encontrado")}else{$(this).hide()}});return true})});function pesquisar(){$(this).click(function(e){e.preventDefault();var id_antigo=$('#acf-field_58c036084d484').val();var tipo_busca=$('input[name="acf[field_58c03ebf4d1ec]"]:checked').val();if(tipo_busca=='Pacote'){var url_pesquisa="http://topbrasiltur.com.br/pesquisa-antiga/?tipo=pacote&id_antigo="+id_antigo}else{var url_pesquisa="http://topbrasiltur.com.br/pesquisa-antiga/?tipo=topico&id_antigo="+id_antigo}console.log(url_pesquisa);location.assign(url_pesquisa)})}$(document).ready(function(){$("#post_antigo").append('<button class="button" onclick="pesquisar()">Pesquisar</button>')});