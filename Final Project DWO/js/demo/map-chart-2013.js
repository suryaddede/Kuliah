
google.charts.load('current', {
    'packages': ['geochart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Location', 'Quantity Sold', 'Total Sales'],
        ['Australia', 9459,	4230664.12],
        ['Canada', 22553, 6229517.16],
        ['France', 11113, 3806506.06],
        ['Germany', 8140, 2565220.8],
        ['United Kingdom', 10756, 3633422.56],
        ['United States', 69767, 23157145.59]
    ]);

    var options = {
        region: 'world',
        displayMode: 'regions',
        resolution: 'countries',
        colorAxis: {
            minValue: 0,
            colors: ['#005900', '#4ca64c'],
        },
        backgroundColor: {
            fill: '#ffffff',
            stroke: '#d7d7d7',
            strokeWidth: 1
        },
        datalessRegionColor: '#eeeeee',
        defaultColor: '#f5f5f5',
        tooltip: {
            textStyle: {
                fontName: 'Arial',
                fontSize: 12
            }
        },
        titleTextStyle: {
            fontName: 'Arial',
            fontSize: 18,
            bold: true,
            textAlign: 'right'
        },
        legend: {
            alignment: 'end',
            textStyle: {
                fontName: 'Arial',
                fontSize: 12
            }
        },
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            callbacks: {
                label: function (tooltipItem, data) {
                    var label = data.labels[tooltipItem.index];
                    var value = data.datasets[0].data[tooltipItem.index];
                    return label + ': ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' units';
                }
            }
        }
    };

    var chart = new google.visualization.GeoChart(document.getElementById('mapChart2013'));
    chart.draw(data, options);
}