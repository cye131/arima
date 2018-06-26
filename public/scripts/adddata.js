$(document).ready(function() {

    getUserData();
    addTable();
    
    
    /*  Input Elements
     *
     *
     *
     */
    
    $( ".addbtn" ).click(function() {
        /*
        var objClasses = $(this).attr('class');
        var placeIndex = objClasses.indexOf('addindex');

        if (placeIndex < 0) return;
        
        var i = objClasses.substring(placeIndex+8,placeIndex+9);
        */
        
        var form = $(this).next('form');
        form.toggle();
        
    });
    
    
    $( '.stk-input' ).keyup(function() {
        var str = $(this).val();
        str = str.replace(/[^a-zA-Z .-]+/g, '').toUpperCase();
        $(this).val(str);
    });
    
    
    $('.stk-submit').click(function() {
        var form = $(this).closest('form');
        form.find('.is-invalid').removeClass('is-invalid');
        form.find('div.invalid-feedback').hide().text('');

        var stkTicker = form.find('.stk-ticker'); var stkTickerVal = stkTicker.val();
        var stkDate1 = form.find('input.stk-date1'); var stkDate1Val = stkDate1.val();
        var stkDate2 = form.find('.stk-date2'); var stkDate2Val = stkDate2.val();
        var stkFreq = form.find('input[type="radio"][name="stk-freq"]:checked'); var stkFreqVal = stkFreq.val();


        stkTickerVal = stkTickerVal.toUpperCase();        
        if ( typeof(stkTickerVal) !== 'string' || stkTickerVal.length < 1  ) {
            validateFail(stkTicker, form.find('div.invalid-feedback'),'Please enter in a stock ticker.');
            return;
        }
        
        if ( typeof(stkDate1Val) !== 'string' || isValidDate(stkDate1Val) === false ) {
            validateFail(stkDate1, form.find('div.invalid-feedback'),'Incorrect date format. Date must typed be in YYYY-MM-DD.');
            return;
        }
        
        if ( typeof(stkDate2Val) !== 'string' || isValidDate(stkDate2Val) === false ) {
            validateFail(stkDate2, form.find('div.invalid-feedback'),'Incorrect date format. Date must typed be in YYYY-MM-DD.');
            return;
        }
        
        var d1 = new Date(stkDate1Val);
        var d2 = new Date(stkDate2Val);
        
        if (d1 < new Date('1980-01-01') || d1 > new Date()) {
            validateFail(stkDate1, form.find('div.invalid-feedback'),'Please do not enter dates before than 1980-01-01 or after ' + (new Date()).toISOString().split('T')[0]);
            return;
        }
        if (d2 < new Date('1980-01-01') || d2 > new Date()) {
            validateFail(stkDate2, form.find('div.invalid-feedback'),'Please do not enter dates before than 1980-01-01 or after ' + (new Date()).toISOString().split('T')[0]);
            return;
        }

        if (d1 >=  d2) {
            validateFail(stkDate1, form.find('div.invalid-feedback'),'.');
            validateFail(stkDate2, form.find('div.invalid-feedback'),'End date must be later than start date!');
            return;
        }
        
        console.log(stkFreq.val());

        
        
        
        $('.stock-input').addClass('is-valid');
        
    });

    
    function validateFail(obj,objStr,str){
        obj.addClass('is-invalid');
        objStr
            .show()
            .text(str);
    }

    
    
    
    
    
    
    /* AJAX Calls
     *
     *
     *
     */
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

    
    
    function addTable() {
        var cardTemplate = $('#card-holder > div.card');
        for (i=1;i<=5;i++) {
            var newCard = cardTemplate.clone();
            newCard
                .find('form').addClass('cardIndex' + i)
                .find('input.stk-date2').val( (new Date()).toISOString().split('T')[0] )
                .end().end() //resets chain
                .find('h5.card-title').text('Time Series Data #' + i)
                .end()
                .appendTo('#card-holder');
            
        }
        $('#card-holder > div.card').first().hide();
        
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
});




function getCookieValue(a) {
    var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
    return b ? b.pop() : '';
}

function isValidDate(dateString) {
  var regEx = /^\d{4}-\d{2}-\d{2}$/;
  if(!dateString.match(regEx)) return false;  // Invalid format
  var d = new Date(dateString);
  if(!d.getTime() && d.getTime() !== 0) return false; // Invalid date
  return d.toISOString().slice(0,10) === dateString;
}


