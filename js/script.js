// $(document).ready(function () {
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 0) {
//             $('#stickyTickertape').fadeIn();
//         } else {
//             $('#stickyTickertape').fadeOut('100');
//         }
//     });
// });

// $(document).ready(function () {
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 0) {
//             $('#tickerTape').fadeOut();
//         } else {
//             $('#tickerTape').fadeIn('100');
//         }
//     });
// });

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

// Swiper

var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });