$(document).ready(function(){
    $('#lightgallery').lightGallery();
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})



$(window).scroll(function(){

    //Capura la posicion del Scroll
    var posScroll =$(window).scrollTop();
    var posYmenu = $(".head").position().top;
    // console.log(posScroll);

     if (posScroll >posYmenu) {
        $(".head").addClass("menuFijo");
        $(".logo__img").css("width", "80px");
        $("#main-menu").css("top","1rem");

        //$(".btnUp").fadeIn("fast");
        //$(".btnUp").slideDown(500);
    }

    else if(posScroll == 0){
        $(".head").removeClass("menuFijo");
        $(".logo__img").css("width", "100px");
        $("#main-menu").css("top","1.5rem");
            //$(".btnUp").fadeOut("fast");
        //$(".btnUp").slideUp(500);
    }


})

google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;

timeline(document.querySelectorAll('.timeline'), {
    forceVerticalMode: 700,
    mode: 'horizontal',
    verticalStartPosition: 'left',
    visibleItems: 4
});

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

// $(document).ready(function ($) {
//     $.fn.menumaker = function (options) {
//         var flexmenu = $(this), settings = $.extend({
//                 format: 'dropdown',
//                 sticky: false
//             }, options);
//         return this.each(function () {
//             $(this).find('.button').on('click', function () {
//                 $(this).toggleClass('menu-opened');
//                 var mainmenu = $(this).next('ul');
//                 if (mainmenu.hasClass('open')) {
//                     mainmenu.slideToggle().removeClass('open');
//                 } else {
//                     mainmenu.slideToggle().addClass('open');
//                     if (settings.format === 'dropdown') {
//                         mainmenu.find('ul').show();
//                     }
//                 }
//             });
//             flexmenu.find('li ul').parent().addClass('has-sub');
//             subToggle = function () {
//                 flexmenu.find('.has-sub').prepend('<span class="submenu-button"></span>');
//                 flexmenu.find('.submenu-button').on('click', function () {
//                     $(this).toggleClass('submenu-opened');
//                     if ($(this).siblings('ul').hasClass('open')) {
//                         $(this).siblings('ul').removeClass('open').slideToggle();
//                     } else {
//                         $(this).siblings('ul').addClass('open').slideToggle();
//                     }
//                 });
//             };
//             if (settings.format === 'multitoggle')
//                 subToggle();
//             else
//                 flexmenu.addClass('dropdown');
//             if (settings.sticky === true)
//                 flexmenu.css('position', 'fixed');
//             resizeFix = function () {
//                 var mediasize = 768;
//                 if ($(window).width() > mediasize) {
//                     flexmenu.find('ul').show();
//                 }
//                 if ($(window).width() <= mediasize) {
//                     flexmenu.find('ul').hide().removeClass('open');
//                 }
//             };
//             resizeFix();
//             return $(window).on('resize', resizeFix);
//         });
//     };

//    $('#flexmenu').menumaker({ format: 'multitoggle' });

// }(jQuery));
