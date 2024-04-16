$(document).ready(function(){
    
    $('#menu_toggler').on('click', function(){
        $('.popup_menu').css('display', 'block');
    });
    // $('.popup_absolute').on('click', function(){
    //    $(this).delay(100).fadeOut();
    // });

    // $('.popupV').on('click', function(){
    //     var id=$(this).attr('id');
    //     var dataString = 'id='+ id;
    //     $.ajax
    //     ({
    //         type: "POST",
    //         url: "students/includes/get-marks.php",
    //         data: dataString,
    //         cache: false,
    //         success: function(html)
    //         {
    //             $("#popup_absoluteV").html(html);
    //             $('#popup_absoluteV').delay(100).fadeIn();
    //         }
    //     });
       
    // });
});

