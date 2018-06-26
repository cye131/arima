$(document).ready(function() {

    /* Highlights navigation bar menu item if it's active */
    $(".nav-item").each(function(){
        var a = $(this).find('a:first');
        var link = a.attr("href");
        var pathname = window.location.pathname;
        if (link == pathname) $(this).addClass('active');
    });

    



    
});

function isJson(item) {
    item = typeof item !== "string" ? JSON.stringify(item) : item;

    try {
        item = JSON.parse(item);
    } catch (e) {
        return false;
    }

    if (typeof item === "object" && item !== null) {
        return true;
    }

    return false;
}
