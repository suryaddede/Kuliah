google.charts.load('current', {
    'packages': ['geochart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Location', 'Quantity Sold', 'Total Sales'],
        ['Australia', 463, 1532156.37],
        ['Canada', 2705, 1874382.63],
        ['France', 70, 213817.78],
        ['Germany', 81, 246860.57],
        ['United Kingdom', 117, 362888.65],
        ['United States', 9452,	8411567.2]
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

    var chart = new google.visualization.GeoChart(document.getElementById('mapChart2011'));
    chart.draw(data, options);
}