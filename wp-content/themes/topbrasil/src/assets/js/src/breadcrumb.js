//
// $(document).ready(function () {
//
//     var breads = $("[typeof='v:Breadcrumb']>*");
//     var i = 0;
//     $("[typeof='v:Breadcrumb']").append("<ul></ul>");
//     $(breads).each(function(){
//       i++;
//       $("[typeof='v:Breadcrumb']>ul").append("<li class='" + i + "'></li>");
//       $(this).appendTo("[typeof='v:Breadcrumb']>ul>li." + i + "");
//     });
// });
//
// $("[typeof='v:Breadcrumb']>ul").ready(function(){
//   var breads = $("[typeof='v:Breadcrumb']>ul");
//   var bfirst = breads.find('li.1');
//   $(bfirst).addClass("home").html('<i class="fa fa-home" aria-hidden="true"></i>');
//   $(breads).find('li').last().addClass("ativando");
// });
// 
$(document).ready(function(){var childBreads=$("[typeof='v:Breadcrumb']").find("[rel='v:child']").html();$("[typeof='v:Breadcrumb']").first().append(childBreads);$("[typeof='v:Breadcrumb']").find("[rel='v:child']").remove();var breads=$("[typeof='v:Breadcrumb']").first().find('*');var i=0;$("[typeof='v:Breadcrumb']").first().append("<ul></ul>");$(breads).each(function(){i+=1;$("[typeof='v:Breadcrumb']>ul").append("<li class='"+i+"'></li>");$(this).appendTo("[typeof='v:Breadcrumb']>ul>li."+i+"")});var str=$('.breadcrumb_last').html();if($('.breadcrumb_last').length){newstr=str.substring(0,85);if(str.length>85){$('.breadcrumb_last').html(newstr+'...')}}});$("[typeof='v:Breadcrumb']>ul").ready(function(){var breads=$("[typeof='v:Breadcrumb']>ul");var bfirst=breads.find('li.1');$(bfirst).addClass("home").html('<i class="fa fa-home" aria-hidden="true"></i>');$(breads).find('li').last().addClass("ativando")});