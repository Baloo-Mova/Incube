$(window).load(function() { // makes sure the whole site is loaded
      $('#status').fadeOut(); // will first fade out the loading animation
      $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
      $('body').delay(350).css({'overflow':'visible'});
    })

$(document).ready(function() {
 
  $("#bg-slider").owlCarousel({
      navigation : false, // Show next and prev buttons
      slideSpeed : 100,
      autoPlay: 5000,
      paginationSpeed : 100,
      singleItem:true,
      mouseDrag: false,
      transitionStyle : "fade"
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false 
  });

  $("#testimonial-slider").owlCarousel({
      navigation : false, // Show next and prev buttons
      slideSpeed : 100,
      pagination : true,
      paginationSpeed : 100,
      singleItem:true,
      mouseDrag: false,
      transitionStyle : "goDown"
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false 
  });

    $('.more-jobs a').click(function(e){
      e.preventDefault();
      var $this = $(this);
      $this.toggleClass('more-jobs a');
      if($this.hasClass('more-jobs a')){
        $this.text('Менше');     
      } else {
        $this.text('Більше');
      }
    });

    $('.more-jobs a').click(function(){
      $('.table tr.hide-jobs').toggle();
    });


 
})

$(".myBlock").click(function() {
  window.location = $(this).find("a").attr("href"); 
  return false;
});
// Record the last element to be right-clicked, since that information isn't
// passed to the contextmenu click handler that calls top_open_blacklist_ui
var rightclicked_item = null;
if (document.body) {
  document.body.addEventListener("contextmenu", function(e) {
    rightclicked_item = e.srcElement;
  });
  document.body.addEventListener("click", function() {
    rightclicked_item = null;
  });
}

jQuery(document).ready(function($){
    // Определяем координаты верха блока навигации
  	$h = $('.kkllkll').offset().top;
	$(window).scroll(function(){
        // Если прокрутили скролл ниже макушки блока, включаем фиксацию
		if ( $(window).scrollTop() > $h) {
        	$(".navbar").css({"position":"fixed", "top":0});
        }else{
            //Иначе возвращаем всё назад. Тут вы вносите свои данные
        	$(".navbar").css({"position":"absolute", "top":"50px"});
        }
  });
});

// Initializing WOW.JS

 new WOW().init();
