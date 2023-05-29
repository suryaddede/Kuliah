<!DOCTYPE html>
<html>
<head>
	<title>Grafik Perbandingan Total Cases 10 Negara</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div style="width: 725px; height: 400px; display: inline-block;">
		<canvas id="barChart"></canvas>
	</div>

	<div style="width: 725px; height: 400px; display: inline-block;">
		<canvas id="pieChart"></canvas>
	</div>

	<script>
		// Data negara dan total cases
		var countries = ['India', 'Japan', 'S. Korea', 'Turkey', 'Vietnam', 'Taiwan', 'Iran', 'Indonesia', 'Malaysia', 'Israel'];
		var totalCases = [44986461, 33803572, 31548083, 17232066, 11602738, 10239998, 7611224, 6802090, 5088009, 4824551];

		// Bar chart
		var barCtx = document.getElementById('barChart').getContext('2d');
		var barChart = new Chart(barCtx, {
			type: 'bar',
			data: {
				labels: countries,
				datasets: [{
					label: 'Total Cases',
					data: totalCases,
					backgroundColor: 'rgba(75, 192, 192, 0.8)'
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});

		// Pie chart
		var pieCtx = document.getElementById('pieChart').getContext('2d');
		var pieChart = new Chart(pieCtx, {
			type: 'pie',
			data: {
				labels: countries,
				datasets: [{
					label: 'Total Cases',
					data: totalCases,
					backgroundColor: [
						'rgba(255, 99, 132, 0.8)',
						'rgba(54, 162, 235, 0.8)',
						'rgba(255, 206, 86, 0.8)',
						'rgba(75, 192, 192, 0.8)',
						'rgba(153, 102, 255, 0.8)',
						'rgba(255, 159, 64, 0.8)',
						'rgba(255, 99, 132, 0.8)',
						'rgba(54, 162, 235, 0.8)',
						'rgba(255, 206, 86, 0.8)',
						'rgba(75, 192, 192, 0.8)'
					]
				}]
			}
		});
	</script>
</body>
</html>
