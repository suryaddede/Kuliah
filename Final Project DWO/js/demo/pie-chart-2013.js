// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("pieChart2013");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Bikes", "Clothing", "Components", "Accessories"],
    datasets: [{
      data: [37748, 37180, 24707, 32153],
      backgroundColor: ['#e74a3b', '#1cc88a', '#f6c23e', '#4e73df'],
      hoverBackgroundColor: ['#c53336', '#17a673', '#d7a032', '#465abe'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
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
        label: function(tooltipItem, data) {
          var label = data.labels[tooltipItem.index];
          var value = data.datasets[0].data[tooltipItem.index];
          return label + ': ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' units';
        }
      }
    },
    legend: {
      display: false
    },
    cutoutPercentage: 60,
  }
});