$(document).ready(function(){width=$(window).width();$(window).resize(function(){res_width=$(window).width();if(res_width<=980&&res_width!=width){$('nav.cols_subnav_footer').find('li.menu-item-has-children').click(function(e){e.preventDefault();$(this).find('.sub-menu').slideToggle('slow')})}});width=$(window).width();if(width<=980){$('nav.cols_subnav_footer').find('li.menu-item-has-children').click(function(e){e.preventDefault();$(this).find('.sub-menu').slideToggle('slow')})}});