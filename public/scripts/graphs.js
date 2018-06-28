$(document).ready(function() {

    
    (function () {
      var uniqid = getCookieValue('uniqid');
      if (uniqid == null) return;
      var ajaxGetUserData = getUserData(uniqid);
      ajaxGetUserData.done(function(res) {
        userData = JSON.parse(res).userData;
        updateSidebar(userData);
        if (checkSeriesCount(userData) === 0) {
            warnAndRedirect();
            return;
        }
        var tsData = userData2tsData(userData);
        makeCheckboxes(tsData);
        drawTs(tsData);
      });
    })();
    
    //Need to use event listener as seriesInput fns are not added to DOM onload
    $('#checkbox-div').on('change', 'input.seriesInput', function() {
        var name = $(this).next('label').text();
        var checked = $(this).is(':checked');
        var chart = $('#tsChart').highcharts();
        $.each(chart.series, function(i, ser) {
            if (ser.name === name) {
                if (checked === true) ser.show();
                else if (checked === false) ser.hide();
                return false;
            }
        });
    });
    
    
    $('.custom-select').change(function() {
        var select = $(this).val();
        var chart = $('#tsChart').highcharts();
        
        if (select === 'pchg') chart.yAxis[0].setCompare('percent');
        else if (select === 'val') chart.yAxis[0].setCompare('none');

    });

});

function userData2tsData(userData) {
    var tsCount = 0;
    var tsData = [];
    
    for (i=1;i<=5;i++) {
        if (userData[i] == null || userData[i].data == null) continue;
        
        tsData[tsCount] = {'data':[],'info':{}};
        tsData[tsCount].info = userData[i].info;
        
        for (j=0;j<userData[i].data.length;j++) {
            tsData[tsCount].data[j] = [];
            tsData[tsCount].data[j][0] = new Date(userData[i].data[j][0]).getTime();
            tsData[tsCount].data[j][1] = parseFloat(userData[i].data[j][2]);
        }
        tsCount++;
    }
    return tsData;
}

function makeCheckboxes(tsData) {
    for (i=0;i<tsData.length;i++) {
        $('#checkbox-div').append('<div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input seriesInput" id="seriesInput' + i + '" checked><label class="custom-control-label" for="seriesInput' + i + '"><h5><span class="badge badge-secondary" style="background-color:' + (getColorArray())[i] + ' ">' + tsData[i].info.name + '</span></h5></label></div>');
    }
    
}

function drawTs(tsData) {
    
    var options = {
        chart: {
            marginRight: 10,
            backgroundColor: 'rgba(225, 233, 240,.6)',
            plotBackgroundColor: '#FFFFFF',
            plotBorderColor: '#C0C0C0',
            //plotBorderWidth: 1,
            height: 500
        },
        title: {
            text: 'Time Series Chart'
        },
        credits: {
            enabled: false
        },
        exporting :{
            enabled: false
        },
        rangeSelector : {
            selected: 4,
            
            buttonTheme: {
                width:60
            },
            
            buttons: [
                {                                                 
                    type: 'month',
                    count: 1,
                    text: '1mo'
                },
                {                                                 
                type: 'month',
                    count: 3,
                    text: '3mo'
                },
                {
                    type: 'ytd',
                    count: 1,
                    text: 'YTD'
                },
                {
                    type: 'year',
                    count: 1,
                    text: '1Y'
                },
                {
                    type: 'all',
                    text: 'All'
                }
                ]
        },
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: { 
                day: "%b %e",
                week: "%b %e",
                month: "%b %Y"
            },
            gridLineWidth: 1,
        },
        yAxis: {
            title: {
                text: '',
            },
            opposite: true
        },
        plotOptions: {
            series: {
                //compare: undefined,
                showInNavigator: true,
                dataGrouping: {
                        units: [[
                                'day',
                                [1]
                        ]]
                }
            },
            line: {
                turboThreshold: 0
            },
            column: {
                stacking: 'normal'
            }
        },
        series: [
        /*{
            type: 'sma',
            linkedTo: 'correl',
            params: {
                period: 90  
            },
            zIndex: 1,
            marker: {
                enabled: false
            }
        },
        {
            type: 'ema',
            linkedTo: 'correl',
            params: {
                //period: 90  
            },
            zIndex: 1
        },              
        {
            type: 'bb',
            linkedTo: 'correl',
            params: {
                //period: 90  
            },
            zIndex: 1
        }*/
        ]
    };
    
    for (i=0;i<tsData.length;i++) {
        options.series.push({'data': tsData[i].data,
                                          'name' : tsData[i].info.name,
                                          'visible': true,
                                          'color': getColorArray()[i],
                                          'compare': 'percent'
                                        });
    }
    
    new Highcharts.stockChart('tsChart', options);

    
    
}


