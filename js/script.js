$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#stickyTickertape').fadeIn();
        } else {
            $('#stickyTickertape').fadeOut('100');
        }
    });
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.tickerTape').css("top", "5vh");
        } else {
            $('.tickerTape').css("top", "20vh");
        }
    });
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#primary-menu').css();
        } else {
            $('#primary-menu').fadeIn('100');
        }
    });
});


// $(document).ready(function(){
//     $("#open_menuOverlay").click(function(){
//         $("#menuOverlay").slideToggle("fast");
//     });
// });

// $(document).ready(function(){
//     $("#menu-toggleMobile").click(function(){
//         $("#menuOverlay").slideToggle("fast");
//     });
// });