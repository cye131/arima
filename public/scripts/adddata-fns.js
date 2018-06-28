function isValidDate(dateString) {
  var regEx = /^\d{4}-\d{2}-\d{2}$/;
  if(!dateString.match(regEx)) return false;  // Invalid format
  var d = new Date(dateString);
  if(!d.getTime() && d.getTime() !== 0) return false; // Invalid date
  return d.toISOString().slice(0,10) === dateString;
}

function validateFail(obj,objStr,str){
    obj.addClass('is-invalid');
    objStr
        .show()
        .text(str);
}

function updateCards(userData) {

  for (i=1;i<=5;i++) {

    var card = $('#card' + i);
    if ( card == null ) return;
    
    var tbl = card.find('table.cardTable');
    if ( $.fn.DataTable.isDataTable( tbl ) ) {
      tbl.DataTable().clear().destroy();
    }
    card.find('div.overlay').hide();
    
    if ( userData[i] != null && userData[i].data != null ) {
      //Toggle border color
      card
        .removeClass('border-warning')
        .removeClass('border-danger')
        .addClass('border-success')
        .find('div.bs-callout').hide();
      
      tbl
          .show()
          .DataTable({
              data: userData[i].data,
              columns: [
                  { title: "Date" },
                  { title: "Corrected Date" },
                  { title: "Value" },
                  { title: "Change" }
                ],
              columnDefs: [{
                  "targets": [1],
                  "visible": false
              }],
              order: [ 1, "desc" ],
              pagingType: "full_numbers"
            });
      
      
        //Update card header
        card.find('div.card-header')
          .find('button.card-delete')
            .show()
            .end()
        
          .find('.card-title')
            .text('#' + i + ': ' + userData[i].info.name)
            .removeClass('text-danger')
            .removeClass('text-warning')
            .addClass('text-success')
            .end()
          
          .find('.card-subtitle')
          .html('observations: ' + userData[i].info.observations +
                  '</br>time start: '  + userData[i].info.obs_start +
                  '</br>time end: '  + userData[i].info.obs_end
                  );
    } else {
      card
        .removeClass('border-warning')
        .removeClass('border-success')
        .addClass('border-danger')
        .find('div.bs-callout').show();
      
        tbl
          .hide();
        
      card.find('div.card-header')
        .find('button.card-delete')
          .hide()
          .end()
      
        .find('.card-title')
          .text('Time Series Data #' + i)
          .removeClass('text-success')
          .removeClass('text-warning')
          .addClass('text-danger')
          .end()
        
        .find('.card-subtitle')
        .html('');

    }
  }
}



    
function addCards() {
    var cardTemplate = $('#card-holder > div.card');
    for (i=1;i<=5;i++) {
        var newCard = cardTemplate.clone();
        newCard
            .attr('id','card' + i)
            .find('form').addClass('cardIndex' + i)
            .find('input.stk-date2').val( (new Date()).toISOString().split('T')[0] )
            .end().end() //resets chain
            .find('table.cardTable').attr('id','cardTable' + i)
            .end()
            .appendTo('#card-holder');
        
    }
    $('#card-holder > div.card').first().hide();
    
}


/* AJAX
 *
 *
 *
 */

function getStkData(uniqid,cardIndex,stkTickerVal,stkFreqVal,stkDate1Val,stkDate2Val) {
  return $.ajax({
      url: 'routerAjax.php',
      type: 'POST',
      data: {
          logic: ['get_fid_data'],
          toScript: ['userData'],
          fromAjax: {'uniqid': uniqid,'cardIndex': cardIndex, 'lookup_code': stkTickerVal, 'freq': stkFreqVal, 'min_date': stkDate1Val, 'max_date': stkDate2Val}
          },
      dataType: 'html',
      cache: false,
      timeout: 10000
  })
  .fail(function(res) {
    console.log(res);
    console.log('AJAX Error');
  });
}

function deleteUserData(uniqid,cardIndex) {
    if (uniqid == null || uniqid.length < 1) return;
    if (cardIndex == null || cardIndex < 1 || cardIndex > 5) return;

    return $.ajax({
        url: 'routerAjax.php',
        type: 'POST',
        data: {
            logic: ['delete_json_storage'],
            toScript: ['deletedBytes','userData'],
            fromAjax: {'uniqid': uniqid, 'cardIndex': cardIndex}
            },
        dataType: 'html',
        cache: false,
        timeout: 10000
    })
    .fail(function(res) {
      console.log(res);
      console.log('AJAX Error');
    });

}
