// $(window).scroll(function(){
//   var scrollTop = $(window).scrollTop();

//   if (scrollTop > 185) {
//   	$('header').addClass('fixed');
//   	$('body').addClass('header-fixed');
//   }

//   if (scrollTop < 1) {
//     $('header').removeClass('fixed');
//     $('body').removeClass('header-fixed');
//   }

// /*
//  * Fixed Form
//  */
//   if ( $( '.fixed-form' ).length ) {

//     var footScroll = $('.atendimento').offset().top;
//     var formHeight = $('.fixed-form').outerHeight();
//     var headerHeight = $('header').outerHeight();
//     var fixedHeight = footScroll - (formHeight + headerHeight);

//     if (scrollTop >= fixedHeight) {
//       var footHeight = $('footer').outerHeight();
//       var atendFoot = $('.atendimento').outerHeight();

//       var bottomFoot = footHeight + atendFoot;

//       $('.fixed-form').addClass('fixed-footer');
//       $('.fixed-form').css('bottom', bottomFoot+'px')
//     }

//     if (scrollTop < fixedHeight) {
//       $('.fixed-form').removeClass('fixed-footer');
//       $('.fixed-form').css('bottom', 'auto')
//     }
//   }

// });

// $(document).ready(function(){
//   $('#recordType').change(function(){
//     console.log($(this).attr('campanha'));
//   });
// });

// $(document).ready(function(){
//   if ( $('.fixed-form').length ) {
//     var wW = $(window).width();
//     if (wW <= 950) {
//       //$('.fixed-form').find('h2').html('SOLICITE CONTATO');
//       $('.fixed-form').find('h2').click(function(){
//         $('.fixed-form').toggleClass('active-form');
//       })
//     }
//   }
// })
