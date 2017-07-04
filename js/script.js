(function($) {
    
    "use strict";

    // ==================== Preloader
    function preloader_load() {
        if($('.preloader').length){
            $('.preloader').delay(300).fadeOut(500);
        }
    }

    // Header animation on scroll
    window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 150,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
    });


    // ==================== Navbar Scroll To Fixed
        $('.scrollingto-fixed').scrollToFixed();
        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];
            summary.scrollToFixed({
                marginTop: $('.scrollingto-fixed').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });


    // ====================Prelader
    function preloader() {
        var $preloader = $('#preloader');
        $preloader.delay(200).fadeOut('slow');
    }

        
    /*================================ magnificPopup  ================================*/
    /* http://dimsemenov.com/plugins/magnific-popup/ // view-source:http://dimsemenov.com/plugins/magnific-popup/ */

    // lightbox image
    $('.popup-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          tLoading: 'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
              return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
          }
        });




    //LighvtBox / Fancybox
    if($('.lightbox-image').length) {
      $('.lightbox-image').fancybox();
    }


    // ==================== Price range slider
    



    // ==================== fitVids
    function fit_Vids() {
        $body.fitVids();
    }

    // ==================== YTplayer
    if($('.player').length) {
        $(".player").mb_YTPlayer();
    }

    // ==================== Accordions
    if($('.accordion-box').length){
       $('.accordion-box .acc-btn').on('click', function() {
        if($(this).hasClass('active')!==true){
                $('.accordion-box .acc-btn').removeClass('active');
            }
            
        if ($(this).next('.acc-content').is(':visible')){
                $(this).removeClass('active');
                $(this).next('.acc-content').slideUp(500);
            }
        else{
                $(this).addClass('active');
                $('.accordion-box .acc-content').slideUp(500);
                $(this).next('.acc-content').slideDown(500);    
            }
        });
    }

    // ==================== OWL CAROUSEL AND OTHER SLIDER SCRIPT 

    // Testimonial
    if($('.testimonial-carousel').length){
        $('.testimonial-carousel').owlCarousel({
            loop:true,
            margin:30,
            dots: true,
            nav:false,
            autoplayHoverPause:false,
            autoplay: true,
            smartSpeed: 700,
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }


    // ==================== Scroll To top
    $(function () {
            $.scrollUp({
                scrollName: 'scrollUp', 
                scrollDistance: 300,       
                scrollFrom: 'top',          
                scrollSpeed: 700,           
                easingType: 'linear',   
                animation: 'fade',      
                animationSpeed: 200,      
                scrollTrigger: false,     
                scrollTarget: false,
                scrollImg: true,      
                scrollText: '', 
                scrollTitle: false,   
                scrollImg: false,   
                activeOverlay: false,
                zIndex: 2147483647, 
            });
        });


    
/* ==========================================================================
   When document is loading, do
   ========================================================================== */

    $(window).on('load', function() {
        // add your functions
        preloader_load();
    }); 


/* ==========================================================================
   When Window is resizing, do
   ========================================================================== */
    $(window).on('resize', function() {
        // add your functions
    });


})(window.jQuery);

function course_information()
    {
        var params = {};
        if (location.search) {
        var parts = location.search.substring(1).split('&');
        for (var i = 0; i < parts.length; i++) {
        var nv = parts[i].split('=');
        if (!nv[0]) continue;
        params[nv[0]] = nv[1] || true;
            }
        }
        id=params.id;
        alert(id);

        document.getElementById("subject").innerHTML = "COMPUTER SCIENCE";
        document.getElementById("teacher").innerHTML = "<a href='Teacher-single-Master.html'>Swaroop Acharjee</a>";
        document.getElementById("fee").innerHTML = "Rs 800/- per month";
        document.getElementById("class").innerHTML = "11 & 12";
        document.getElementById("phone").innerHTML = " 9674507568 ";
        document.getElementById("mail").innerHTML = "<small>meet.ripon@gmail.com</small>";
        document.getElementById("time").innerHTML="9:30pm - 2:30am";
        document.getElementById("info").innerHTML="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker";
        document.getElementById("books").innerHTML="C++ with Sumita Arora";
        document.getElementById("ins").innerHTML="It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker";
        document.getElementById("books").innerHTML="C++ with Sumita Arora";
    } 

