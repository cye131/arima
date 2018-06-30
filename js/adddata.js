/* To-do: replace cardIndex with a data attribute
 *
 *
 *
 */


$(document).ready(function() {
  
  /* Init
   *
   *
   *
   */
  
    addCards();
    
    (function () {
      var uniqid = getCookieValue('uniqid');
      if (uniqid == null) return;
      var ajaxGetUserData = getUserData(uniqid);
      ajaxGetUserData.done(function(res) {
        userData = JSON.parse(res).userData;
        updateCards(userData);
        updateSidebar(userData);
      });
    })();

    
    /*  Input Elements
     *
     *
     *
     */
    
    $( ".addbtn" ).click(function() {
        var modal = $(this).next('div.modal');
        modal.modal('show');
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
        
        var objClasses = form.attr('class');
        var placeIndex = objClasses.indexOf('cardIndex');

        if (placeIndex < 0) return;
        
        var cardIndex = objClasses.substring(placeIndex+9,placeIndex+10);
        var uniqid = getCookieValue('uniqid');
        
        if (uniqid.length < 1) return;
        console.log('Getting AJAX');
        form.prev('div.overlay').show();
        
        var ajaxGetStkData = getStkData(uniqid,cardIndex,stkTickerVal,stkFreqVal,stkDate1Val,stkDate2Val);
        ajaxGetStkData.done(function(res) {
          form
            .closest('div.modal').modal('hide')
            .find('div.overlay').show();
          console.log(res);
          userData = JSON.parse(res).userData;
          updateCards(userData);
          updateSidebar(userData);
        });

    });
    
    
    $('button.card-delete').click(function() {
        var cardID = $(this).closest('div.card').attr('id');
        var placeIndex = cardID.indexOf('card');
        if (placeIndex < 0) return;
        var cardIndex = cardID.substring(placeIndex+4,placeIndex+5);

        console.log(cardIndex);
        var uniqid = getCookieValue('uniqid');

        var ajaxDeleteUserData = deleteUserData(uniqid,cardIndex);
        ajaxDeleteUserData.done(function(res) {
          res = JSON.parse(res);
          if (res.deletedBytes == null || res.deletedBytes < 1) return;
          updateCards(res.userData);
          updateSidebar(res.userData);
        });

        
        
    });


    
    
    
    /* Functions requiring document.ready
     *
     *
     *
     */
    
    
    


    
});