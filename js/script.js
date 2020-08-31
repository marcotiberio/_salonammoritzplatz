$(document).ready(function(){   
    $(window).scroll(function() {
        if ($(this).scrollTop()>0)
        {
            $('#stickyPrimaryMenu').fadeIn();
        }
        else
        {
        $('#stickyPrimaryMenu').fadeOut('fast');
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