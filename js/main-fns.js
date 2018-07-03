/* Validation
 *
 *
 *
 */

function checkValidSeries(userData) {
    var seriesCount = [];
    if (userData.length === 0) {
        return [];
    }
    $.each(userData, function(k,v) {
        if ( v.data != null) seriesCount.push(k); 
    });

    return seriesCount;
}

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





/* DOM Manipulation
 *
 *
 *
 */



function warnAndRedirect() {
    $('#main').html(
        '<div class="jumbotron jumbotron-fluid">'+
            '<div class="container">'+
              '<h1 class="display-3"><a href="/adddata">Please add some data before you can use this tool.</a></h1>'+
            '</div>'+
          '</div>'
    );
}

function makeCheckboxes(userData,checkOrRadio) {
    var k = 0;
    for (i=1;i<=5;i++) {
        if (userData[i].data == null) continue;
        if (checkOrRadio === 'check') {
            $('#checkbox-div').append('<div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input seriesInput" id="seriesInput' + i + '" data-index="' + i + '" checked><label class="custom-control-label" for="seriesInput' + i + '"><h5><span class="badge badge-secondary" style="background-color:' + (getColorArray())[i] + ' ">' + userData[i].info.name + '</span></h5></label></div>');
        }  else {
            $('#checkbox-div').append('<div class="custom-control custom-radio"><input type="radio" name="seriesInput" class="custom-control-input seriesInput" id="seriesInput' + i + '" data-index="' + i + '" '  + (k===0 ? 'checked' : '') +  '><label class="custom-control-label" for="seriesInput' + i + '"><h5><span class="badge badge-secondary" style="background-color:' + (getColorArray())[i] + ' ">' + userData[i].info.name + '</span></h5></label></div>');
        }
        k++;
    }
    return;
}






/* AJAX
 *
 *
 *
 */

function getAJAX(model,logic,toScript,fromAjax,timeout) {
    
    var timerStart = Date.now();
    $('#overlay').show();
    return $.ajax({
        url: 'routerAjax.php',
        type: 'POST',
        data: {
            model: model,
            logic: logic,
            toScript: toScript,
            fromAjax: fromAjax
            },
        dataType: 'html',
        cache: false,
        timeout: timeout
    })
    .fail(function(res) {
      console.log(res);
      console.log('AJAX Error');
    })
    .always(function(res) {
        $('#overlay').hide();
        console.log('AJAX Time: '+ (Date.now()-timerStart) );
        //if (isJson(res) === false ) alert(res);
    });
}


function getUserData(uniqid) {
    if (uniqid == null || uniqid.length < 1) return;
    return getAJAX([],['get_json_storage'],['userData'],{'uniqid':uniqid},10000);
}

function updateSidebar(userData) {
  for (i=1;i<=5;i++) {
    
    if ( userData[i] != null && userData[i].data != null ) {
      $('#ser' + i).find('span')
          .removeClass('badge-warning')
          .removeClass('badge-danger')
          .addClass('badge-success')
        .text(userData[i].info.name);
    } else {
      $('#ser' + i).find('span')
          .removeClass('badge-warning')
          .removeClass('badge-success')
          .addClass('badge-danger')
        .text('Empty');
    }

  }

}


/* Cookies
 *
 *
 *
 */

function getCookieValue(a) {
    var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
    return b ? b.pop() : '';
}






/* Storage
 *
 *
 *
 */

function getColorArray() {
    return ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"];
}



/* Misc
 *
 *
 *
 */
function arrayColumn(array, columnName) {
    return array.map(function(value,index) {
        return value[columnName];
    })
}