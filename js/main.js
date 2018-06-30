$(document).ready(function() {


    (function(){
        
        var pathname = window.location.pathname;
            
        /* Highlights navigation bar menu item if it's active */
        $("#header > .nav-item > a").each(function(){
            var a = $(this);
            var link = a.attr("href");
            if (link == pathname) a.addClass('active');
        });
        
        
        /* Highlights sidebar bar menu item if it's active */
        $("nav.sidebar > ul.nav > li.nav-item > a").each(function(){
            var a = $(this);
            var link = a.attr("href");
            if (link === pathname) {
                a.addClass('active');
                a.closest('li').css('background-color','#e6e6f0');
            }
        });

    })();

    
});
 // #e6e6f0
