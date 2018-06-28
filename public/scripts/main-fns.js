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


function getCookieValue(a) {
    var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
    return b ? b.pop() : '';
}


function checkSeriesCount(userData) {
    var seriesCount = 0;
    if (userData.length === 0) {
        return seriesCount;
    }
    console.log(userData);
    $.each(userData, function(k,v) {
        if ( v.data != null) seriesCount++; 
    });
    console.log(seriesCount);

    return seriesCount;
}

function warnAndRedirect() {
    $('#main').html(
        '<div class="jumbotron jumbotron-fluid">'+
            '<div class="container">'+
              '<h1 class="display-3"><a href="/adddata">Please add some data before you can use this tool.</a></h1>'+
            '</div>'+
          '</div>'
    );
}


/* AJAX
 *
 *
 *
 */
function getUserData(uniqid) {
    if (uniqid == null || uniqid.length < 1) return;
  
    return $.ajax({
        url: 'routerAjax.php',
        type: 'POST',
        data: {
            logic: ['get_json_storage'],
            toScript: ['userData'],
            fromAjax: {'uniqid': uniqid}
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


function getColorArray() {
    return ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"];
}