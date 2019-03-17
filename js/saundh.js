var $window = $(window), previousScrollTop = 0, scrollLock = false;
$window.scroll(function(event) {     
    if(scrollLock) {
        $window.scrollTop(previousScrollTop); 
    }
    previousScrollTop = $window.scrollTop();
});

/* footer mobile */
$(document).ready(function() {
  $('.accordion').find('.accordion-toggle').click(function() {
    $(this).next().slideToggle('600');
    $(".accordion-content").not($(this).next()).slideUp('600');

  });
  $('.accordion-toggle').on('click', function() {
    $(this).toggleClass('active').siblings().removeClass('active');
  });
});
    

/* menu */
$('.categories_carousel').owlCarousel({
    loop:false,
    nav:true,
    margin:40,
    dots:true,
    navText: [ '<img src="img/arrow_left.png">', '<img src="img/arrow_right.png">' ],
    responsive:{
        0:{
             items:1   
        },
        767:{
            items:3
        }  
    }
});

$('.categoriesMob_carousel').owlCarousel({
    loop:false,
    margin:0,
    nav:true,
    margin:20,
    navText: [ '', '' ],
    responsive:{
        0:{
            items:1,    
            stagePadding: 80
        },
        767:{
            items:4
        }  
    }
});
$(document).ready(function() {
   $(".login_area ul li.dropdown").click(function(){
     $(".dropdown-content").toggleClass("active");
   });
});


$(window).scroll(function(){
   if ($(this).scrollTop() > 0){
        /*$(".dropdown-content").removeClass("active");
        $(".categories_menu ").removeClass("active");
        $(".menu2").removeClass("active");
        $(".menu3").removeClass("active");
        $(".collection_menu").removeClass("active");
        $(".menu_icon").removeClass("active");
        $(".mega-menu").removeClass("active");*/
        $(".mobile_search").removeClass("active");
        $(".mobile_btn_fixed").removeClass("active2");
   }
});

$(window).scroll(function(){
   if ($(this).scrollTop() > 1){
     $('header').addClass("active");
     $('.header-bottom').removeClass("active2");
   }
  else{
     $('header').removeClass("active");
     $('.header-bottom').addClass("active2");      
   }
}); 

$(document).ready(function() {
   $(".search_icon i").click(function(){
     $(".search_icon").toggleClass("active");
   });
});
$(document).ready(function() {
   $(".search_icon").click(function(){
     $(".mobile_search").toggleClass("active");
   });
});

var position = $(window).scrollTop(); 
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if(scroll > position) {
      $('.header-bottom').removeClass("active");
      $('.multipal_top_section').removeClass("active");
  } else {
      $('.header-bottom').addClass("active");
      $('.multipal_top_section').addClass("active");
  }
  position = scroll;
});




$(document).ready(function() {
   $(".menu-bar").click(function(){
      $(".mega-menu").addClass("active");
      $(".menu_icon").addClass("active");
      $(".menu_icon").addClass("active2");
      $(".menu2").removeClass("active");
      $(".categories_menu").removeClass("active");
      $(".menu3").removeClass("active");
      $(".collection_menu").removeClass("active");
      $(".mobile_menu").addClass("active");
      scrollLock = true;
      previousScrollTop = $(window).scrollTop();
   });
   $(".menu_icon>span").click(function(){
      $(".mega-menu").removeClass("active");
      $(".menu_icon").removeClass("active");
      $(".menu_icon").removeClass("active2");
      $(".mobile_menu").removeClass("active");
      $(".categories_menu").removeClass("active");
      $(".menu2").removeClass("active");
      $(".collection_menu").removeClass("active");
      $(".menu3").removeClass("active");
      scrollLock = false;
   });
   $(".menu2").click(function(){
      $(this).addClass("active");
      $(".categories_menu").addClass("active");
      $(".menu3").removeClass("active");
      $(".collection_menu").removeClass("active");
      $(".menu_icon").addClass("active");
      scrollLock = true;
      previousScrollTop = $(window).scrollTop();
   });
   $(".menu3").click(function(){
      $(this).addClass("active");
      $(".collection_menu").addClass("active");
      $(".menu2").removeClass("active");
      $(".categories_menu").removeClass("active");
	    $(".menu_icon").addClass("active");
      scrollLock = true;
      previousScrollTop = $(window).scrollTop();
   });
});  

$(document).ready(function() {
   $(".mega-menu>div").click(function(){
     $(this).addClass("active");
     $(this).siblings().removeClass("active");
   });
}); 

$(window).scroll(function(){
  $('.details_quantity').each(function(){
    if(isScrolledIntoView($(this))){
      $(".mobile_btn_fixed").addClass('active');
    }
    else{
      $(".mobile_btn_fixed").removeClass('active');
    }
  });
  $('.summray_bag a').each(function(){
    if(isScrolledIntoView($(this))){
      $(".mobile_btn_fixed").addClass('active');
    }
    else{
      $(".mobile_btn_fixed").removeClass('active');
    }
  });
});
function isScrolledIntoView(elem){
    var $elem = $(elem);
    var $window = $(window);
    var docViewTop = $window.scrollTop();
    var docViewBottom = docViewTop + $window.height();
    var elemTop = $elem.offset().top;
    var elemBottom = elemTop + $elem.height();
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}



