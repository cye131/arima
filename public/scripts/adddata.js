$(document).ready(function() {

    getUserData();
    
    function getUserData() {
        var uniqid = getCookieValue('uniqid');

        $.ajax({
            url: 'routerAjax.php',
            type: 'POST',
            data: {
                logic: ['get_json_storage'],
                toScript: ['userData'],
                fromAjax: {'uniqid': uniqid}
                },
            dataType: 'html',
            cache: false,
            timeout: 10000,
            success: function(res){
                console.log(res);
                if (isJson(res)) {
                } else {
                }
            },
            error:function(){
                validateFail('Historical data not found.');
            }
        });
    }


    
});




function getCookieValue(a) {
    var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
    return b ? b.pop() : '';
}
