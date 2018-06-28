$(document).ready(function() {

    /* Highlights navigation bar menu item if it's active */
    $(".nav-item").each(function(){
        var a = $(this).find('a:first');
        var link = a.attr("href");
        var pathname = window.location.pathname;
        if (link == pathname) a.addClass('active');
    });
    
    

    



    
});
