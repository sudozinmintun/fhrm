(function ($) {
    'use strict';
    $(document).ready(function(){

        // ==========chart js==========
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: false,
            subtitle: false,
            xAxis: {
                categories: [
                    '1',
                    '2',
                    '3',
                    '4'
                ],
                crosshair: true
            },
            yAxis: {
                max: 40,
                min: 0,
                title: false
            },
            legend: false,
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
              column: {
                pointPadding: 0.2,
                borderWidth: 0
              }
            },
            series: [{
                color: "#ff792d",
                name: 'Tokyo',
                data: [40, 35, 40, 38]
          
            }, {
                color: "#5446DB",
                name: 'New York',
                data: [32, 25, 35, 20]
          
            }, {
                color: "#E0B625",
                name: 'London',
                data: [25, 30, 25, 35]
          
            },]
        });
          

    });
}(jQuery));