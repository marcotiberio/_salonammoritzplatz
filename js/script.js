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

// $(document).ready(function () {
//     $('.slider-for').slick({
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         dots: false,
//         arrows: true,
//         asNavFor: '.slider-for',
//         focusOnSelect: true,
//         fade: true,
//         autoplay: false
//     });
// });