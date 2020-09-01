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
            $('#tickerTape').fadeOut();
        } else {
            $('#tickerTape').fadeIn('100');
        }
    });
});

$(window).scroll(function () {
    $("#site-navigation").css({
        "top": ($(window).scrollTop()) + "0",
        "left": ($(window).scrollLeft()) + "0"
    });
});


$(document).ready(function () {
    $("#open_menuOverlay").click(function () {
        $("#menuOverlay").slideToggle("fast");
    });
});

$(document).ready(function () {
    $("#menu-toggleMobile").click(function () {
        $("#menuOverlay").slideToggle("fast");
    });
});