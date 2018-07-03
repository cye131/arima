$(document).ready(function() {

    (function () {
      var uniqid = getCookieValue('uniqid');
      if (uniqid == null) {warnAndRedirect();return;}
      var ajaxGetUserData = getUserData(uniqid);
      
      ajaxGetUserData.done(function(res) {
        userData = JSON.parse(res).userData;
        updateSidebar(userData);
        $('#ser-list').data('userData',userData);
        if (checkValidSeries(userData).length === 0) {warnAndRedirect();return;}
        makeCheckboxes(userData,'radio');
        
        getACF();
      });
    })();
    

    $('#graph-options').on('change', 'input,select', function() {
        console.log('s');
        getACF();        
    });
    
    
    $('#tsChart').on('click', 'button.lag', function() {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        $('#tsChart').highcharts().update({
            xAxis: {
                max: $(this).data('xmax')
            }
        });
    });

    $('#tsChart').on('click', 'button.lag-hl', function() {
        if ( $(this).hasClass('btn-outline-primary') ) {
            $(this).removeClass('btn-outline-primary').addClass('btn-primary');
            $('#tsChart').highcharts().series[2].show();
        }
        else if ( $(this).hasClass('btn-primary') ) {
            $(this).removeClass('btn-primary').addClass('btn-outline-primary');
            $('#tsChart').highcharts().series[2].hide();
        }
    });


});

function getACF() {
    var userData = $('#ser-list').data().userData;
    
    
    var serInput = $('#graph-options input[type="radio"]:checked');
    if (serInput.length !== 1) return;
    
    var serIndex = serInput.data('index');
    var serName = userData[serIndex].info.name;

    var transformInput = $('#graph-options #ser-transformation > option:selected');
    if (transformInput.length !== 1) return;
    var transformIndex = transformInput.data('index');
    
    console.log(transformIndex);console.log(serIndex);
    var data = arrayColumn(userData[serIndex].data,transformIndex);
    
    var ajaxGetACF = getAJAX([],['calculate_time_series'],['tsResult'],{'data': data, 'fn': 'pacf'},30000);
    ajaxGetACF.done(function(res) {
        console.log(res);
        if (isJson(res) === false && res.indexOf("Singular matrix") !== -1) {
            alert('Singular ACF matrix due to multicollinearity of data; unable to calculate PACF solution matrix.');
            return;
        }
        tsResult = JSON.parse(JSON.parse(res).tsResult);
        console.log(tsResult);
        drawACF(tsResult,serName,serIndex);
        tableACF(tsResult);
    });
}


function drawACF(data,name,serIndex) {
        //data.splice(0,1);

        var dataACFVal = [];
        var dataACFSE = [];
        var dataACFSig = [];

        $.each(data,function(i,row) {
            dataACFVal.push({x: row.lag,y: row.pacf});
            dataACFSE.push({x:row.lag,low:row.pacf-1.96*row.se,high:row.pacf+1.96*row.se});
            
            if (row.pacf-1.96*row.se < 0 && 0 < row.pacf+1.96*row.se ) {
                dataACFSig.push({x:row.lag,y:row.pacf});
            }
            
        });
        console.log(dataACFVal);
        console.log(dataACFSE);
        
        
        var options = {
        chart: {
            backgroundColor: 'rgba(225, 233, 240,.6)',
            plotBackgroundColor: '#FFFFFF',
            plotBorderColor: '#C0C0C0',
            height: 500,
        },
        title: {
            text: 'Partial Autocorrelation Function (PACF) Chart'
        },
        subtitle: {
            text: '<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">' +
                        '<div class="btn-group mr-2">' +
                            '<button type="button" class="btn btn-secondary" disabled>Choose Maximum Lag:</button>' +
                        '</div>' +
                        '<div class="btn-group" role="group" aria-label="Choose Lag">' +
                            '<button type="button" class="btn btn-primary lag" data-xmax="10">10</button>' +
                            '<button type="button" class="btn btn-primary lag active" data-xmax="100">100</button>' +
                            '<button type="button" class="btn btn-primary lag" data-xmax="1000">1000</button>' +
                            '<button type="button" class="btn btn-primary lag" data-xmax="null"">All</button>' +
                            '<button type="button" class="btn btn-secondary ml-2" disabled>Highlight Nonzero PACF Lags:</button>' +
                            '<button type="button" class="btn btn-outline-primary lag-hl">&#10004;</button>' +

                        '</div>' +
                    '</div>',
            //align: 'left',
            //verticalAlign: 'top',
            useHTML: true
        },
        credits: {
            enabled: true,
            text: 'A maximum of 200 points can be displayed to the intensity of calculation'
        },
        legend: {
            enabled: false
        },
        xAxis: {
            type: 'linear',
            min: 1,
            max: dataACFVal.length,
            minTickInterval: 1,
            title: {
                text: 'Lag'
            }
        },
        tooltip: {
            useHTML: true,
            formatter: function () {
                return '<h6 class="text-center">PACF<sub>'+ this.points[0].series.name + '</sub>(Lag='+ this.points[0].x + ') = <b>' + this.points[0].y.toFixed(4) + '</b></h6></br>' +
                'Standard Error: ' + ((this.points[1].point.high- this.points[0].y)/1.96).toFixed(4) + '</br>' +
                '95% Confidence Interval: [' + this.points[1].point.low.toFixed(4) + ', ' + this.points[1].point.high.toFixed(4) + ']';
            },
            shared: true
        },
        plotOptions: {
            series: {
                marker: {
                    symbol: 'diamond',
                    radius: 2
                }
            }
        },
        yAxis: {
            title: {
                text: 'Autocorrelation',
            },
            floor: -1,
            ceiling: 1,
            plotLines: [{
              color: 'black', // Color value
              dashStyle: 'longdashdot', // Style of the plot line. Default to solid
              value: 0, // Value of where the line will appear
              width: 2 // Width of the line    
            }]
        },
        series: [
        ]
    };
    
    options.series.push({data: dataACFVal,
                                      name : name,
                                      type: 'line',
                                      linkedTo: 'ACFSE',
                                      color: getColorArray()[serIndex]
                                    },{
                                        data: dataACFSE,
                                        name: 'Range',
                                        type: 'arearange',
                                        linkedTo: ':previous',
                                        color: Highcharts.getOptions().colors[0],
                                        fillOpacity:0.2,
                                        zIndex:0,
                                        marker: {
                                            enabled:false
                                        }
                                    },{
                                        data: dataACFSig,
                                        name: 'Significant Values',
                                        type: 'scatter',
                                        color: 'brightred',
                                        enableMouseTracking: false,
                                        zIndex:2,
                                        visible: false,
                                        marker: {
                                            radius: 4
                                        }

                                    }
                                    );

    new Highcharts.chart('tsChart', options);
    
}


function tableACF(data) {
    var tbl = $('#tsTable');
    if ( $.fn.DataTable.isDataTable( tbl ) ) {
      tbl.DataTable().clear().destroy();
    }
    
    var dataTbl = [];
    $.each(data,function(i,row) {
        dataTbl.push([row.lag,row.pacf.toFixed(8),row.se.toFixed(8), '['+(row.lag-1.96*row.se).toFixed(4)+ ','+(row.lag+1.96*row.se).toFixed(4)+']']);
    });

    tbl
        .show()
        .DataTable({
            data: dataTbl,
            iDisplayLength: 15,
            dom:
                "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12 px-0'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel',
            ],
            language: {
                search: "Search a lag value:",
                info: "_START_ - _END_ (_TOTAL_ total rows)"
            },
            columns: [
                { title: "Lag" },
                { title: "Partial Autocorrelation", searchable: false },
                { title: 'Standard Error', searchable: false },
                { title: '95% Conf. Interval', searchable: false }
              ],
            columnDefs: [{
            }],
            order: [ 0, "asc" ],
            pagingType: "full_numbers"
          });
        
    tbl.DataTable().buttons().container()
        .appendTo( '#tsTable_wrapper .col-md-6:eq(0)' )
        .children()
        .removeClass('btn-secondary').addClass('btn-primary');
    
        
}
