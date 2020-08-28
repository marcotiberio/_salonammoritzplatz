$(document).ready(function(){   
    $(window).scroll(function() {
        if ($(this).scrollTop()>0)
        {
            $('.logo-banner-small').fadeIn();
        }
        else
        {
        $('.logo-banner-small').fadeOut();
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