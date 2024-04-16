let xtendedMenu = document.getElementById('xtendedMenu');
let xtendedMenuClose = document.getElementById('Xtended_close');
let xtendedMenuContainer = document.querySelector('.xtendexMenu');
const xparentMenu = document.querySelector('.ltech_menu_parent');
const xchildMenu = document.querySelector('.ltech_menu_child');

//Logged In menu
$(document).ready(function(){
    $('#mainMenuTog').click(function(){
        $('#mainMenuTog_menu').toggle();
        $('.mainMenuTog_me').toggle();
    });
});

//sticking header;
const header = document.querySelector("header");
window.addEventListener("scroll", function () {
    header.classList.toggle("sticky", window.scrollY > 100);
})

xtendedMenu.onclick = function () {
    if(xtendedMenuContainer.style.display == "flex") { 
        xtendedMenuContainer.style.display = "none";
    } 
    else { 
        xtendedMenuContainer.style.display = "flex";
    }
};

xtendedMenuClose.onclick = function () {
    if(xtendedMenuContainer.style.display == "flex") { 
        xtendedMenuContainer.style.display = "none";
    } 
    else { 
        xtendedMenuContainer.style.display = "flex";
    }
};

xparentMenu.onclick = function () {
    this.style.background = "#f2f3f3";
    if(xchildMenu.style.display == "block") { 
        xchildMenu.style.display = "none";
    } 
    else { 
        xchildMenu.style.display = "block";
    }
};






(function($){

    "use strict";

    var mainWindow          = $(window),
        mainDocument        = $(document),
        popup               = $('.popup');
        

    mainWindow.on('load', function() {
        $('#status').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
            $('body').delay(350).css({
            'overflow': 'visible'
        });



        // Scroll to Top
        // mainWindow.on("scroll", function() {
        //     if ($(this).scrollTop() > 98){
        //         scrollUp.show();
        //     }
        //     else{
        //         scrollUp.hide();
        //     }
        // });

        // Click event to scroll to top
        // scrollUp.on("click", function() {
        //     $('html, body').animate({
        //         scrollTop: 0
        //     }, 800);
        //     return false;
        // });

    });


    // bootstrapTouchSlider.bsTouchSlider();

    !function ($) {
        
        $(document).on("click","#left ul.nav li.parent > a > span.sign", function(){          
            $(this).find('i:first').toggleClass("fa-minus");
        }); 
        
        $("#left ul.nav li.parent.active > a > span.sign").find('i:first').addClass("fa-minus");
        $("#left ul.nav li.current").parents('ul.children').addClass("in");

    }(window.jQuery);

    // $(".select2").select2();

})(jQuery);

