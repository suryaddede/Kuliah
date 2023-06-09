
google.charts.load('current', {
    'packages': ['geochart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Location', 'Quantity Sold', 'Total Sales'],
        ['Australia', 7479, 2767731.96],
        ['Canada', 9711, 2390812.61],
        ['France', 5251, 1674078.69],
        ['Germany', 4673, 1553255.19],
        ['United Kingdom', 6094, 2092554],
        ['United States', 28451, 9579494.21]
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

    var chart = new google.visualization.GeoChart(document.getElementById('mapChart2014'));
    chart.draw(data, options);
}