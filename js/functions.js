$(function() {

    var siteSticky = function() {
          $(".js-sticky-header").sticky({topSpacing:0});
      };
      siteSticky();

      var siteMenuClone = function() {
          $('.js-clone-nav').each(function() {
              var $this = $(this);
              $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
          });
          setTimeout(function() {
              var counter = 0;
        $('.site-mobile-menu .has-children').each(function(){
          var $this = $(this);
          
          $this.prepend('<span class="arrow-collapse collapsed">');
  
          $this.find('.arrow-collapse').attr({
            'data-toggle' : 'collapse',
            'data-target' : '#collapseItem' + counter,
          });
  
          $this.find('> ul').attr({
            'class' : 'collapse',
            'id' : 'collapseItem' + counter,
          });
  
          counter++;
  
        });
  
      }, 1000);
  
          $('body').on('click', '.arrow-collapse', function(e) {
        var $this = $(this);
        if ( $this.closest('li').find('.collapse').hasClass('show') ) {
          $this.removeClass('active');
        } else {
          $this.addClass('active');
        }
        e.preventDefault(); 
      });
          $(window).resize(function() {
              var $this = $(this),
                  w = $this.width();
  
              if ( w > 768 ) {
                  if ( $('body').hasClass('offcanvas-menu') ) {
                      $('body').removeClass('offcanvas-menu');
                  }
              }
          })
  
          $('body').on('click', '.js-menu-toggle', function(e) {
              var $this = $(this);
              e.preventDefault();
  
              if ( $('body').hasClass('offcanvas-menu') ) {
                  $('body').removeClass('offcanvas-menu');
                  $this.removeClass('active');
              } else {
                  $('body').addClass('offcanvas-menu');
                  $this.addClass('active');
              }
          }) 
  
          // click outisde offcanvas
          $(document).mouseup(function(e) {
          var container = $(".site-mobile-menu");
          if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ( $('body').hasClass('offcanvas-menu') ) {
                      $('body').removeClass('offcanvas-menu');
                  }
          }
          });
      }; 
      siteMenuClone();
  
  });



/* sticky header */
// let lastScroll = 0;
// function sticky_header(){
//   let header_hegith = $('.site-navbar').innerHeight();
//   let scroll = $(window).scrollTop();
//   if (scroll > header_hegith && scroll > lastScroll) {
//     $('.site-navbar').addClass('js-sticky-header');
//   } else if (scroll < lastScroll) {
//     $('.site-navbar').removeClass('js-sticky-header');
//   }
//   lastScroll = scroll;
// }
// $(() => {
//   sticky_header();
// });
// window.onload = () => {
//   sticky_header();
// };
// window.onscroll = () => {
//   sticky_header();
// };
// window.onresize = (event) => {
//   sticky_header();
// };







  $("#book-now").click(function() {
    $('html,body').animate({
        scrollTop: $("#booking-engine").offset().top - 150},
        'slow');
  });

  $('.testi5').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ['<i class="icon-arrow-left"></i>', '<i class="icon-arrow-right"></i>'],
    dots: true,
    autoplay: true,
    center: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1

        },
        1024: {
            items: 3
        }
    }
})



$( "#checkdate1" ).datepicker({
    numberOfMonths: 2,
    minDate: 0,
    dateFormat: 'mm/dd/yy',
   showCurrentAtPos: 0,
   onSelect: function(selectedDate){
    var d = $('#checkdate1').datepicker('getDate');
    d.setDate(d.getDate() + 1); 
    $('#checkdate2').datepicker('option', 'minDate', d,{autoOpen: true});
    $('#checkdate2').datepicker('setDate', d);
  }
});
  
$('#checkdate1').datepicker({
  minDate: new Date(),
  numberOfMonth: 2,
  
});

$('#checkdate2').datepicker({
  minDate: new Date(),
  dateFormat: 'mm/dd/yy',
  
});

if($('#checkdate1').length) {
    $('#checkdate1').datepicker('setDate', new Date());
    var d2 = $('#checkdate1').datepicker('getDate');
    d2.setDate(d2.getDate() + 1);
    $('#checkdate2').datepicker('option', {numberOfMonths: 2,
      showCurrentAtPos: 1,}, 'minDate', d2);
    $('#checkdate2').datepicker( 'setDate', d2);
}
  




$("#find-reservation").click(function() {
    $('html,body').animate({
        scrollTop: $("#booking-engine").offset().top - 150},
        'slow');
  });

