<!DOCTYPE html>
<html>

<head>
	<title>Grafik Perbandingan Data Covid-19 10 Negara</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body class="bg-dark overflow-x-hidden">
	<div class="row mb-5">
		<div class="col-6">
            <h1 class="text-light text-center">Total Cases</h1>
			<canvas id="totalCases"></canvas>
		</div>
		<div class="col-6">
            <h1 class="text-light text-center">Total Deaths</h1>
			<canvas id="totalDeaths"></canvas>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
            <h1 class="text-light text-center">Total Recovered</h1>
			<canvas id="totalRecovered"></canvas>
		</div>
		<div class="col-4">
            <h1 class="text-light text-center">Active Cases</h1>
			<canvas id="activeCases"></canvas>
		</div>
        <div class="col-4">
            <h1 class="text-light text-center">Total Tests</h1>
            <canvas id="totalTests"></canvas>
        </div>

	<script>
		// Data negara dan statistik Covid-19
		var countries = ['India', 'Japan', 'S. Korea', 'Turkey', 'Vietnam', 'Taiwan', 'Iran', 'Indonesia', 'Malaysia', 'Israel'];
		var totalCases = [44986461, 33803572, 31548083, 17232066, 11602738, 10239998, 7611224, 6802090, 5088009, 4824551];
		var totalDeaths = [537370, 461520, 2093, 15295, 305, 425, 155338, 63630, 15860, 6281];
		var totalRecovered = [38616794, 33137879, 29743813, 16175992, 9000060, 9119963, 5862066, 5661233, 4695784, 4681367];
		var activeCases = [5818297, 1876173, 1677177, 1008779, 2303373, 1148610, 1591820, 677227, 357365, 130903];
		var totalTests = [392721152, 134086301, 95965183, 67646239, 235202590, 17468686, 66560746, 33455145, 36013290, 16107971];

		// Total cases pie chart
		var pieCtx = document.getElementById('totalCases').getContext('2d');
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
        
        // Total deaths pie chart
        var pieCtx = document.getElementById('totalDeaths').getContext('2d');
        var pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: countries,
                datasets: [{
                    label: 'Total Deaths',
                    data: totalDeaths,
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

        // Total recovered pie chart
        var pieCtx = document.getElementById('totalRecovered').getContext('2d');
        var pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: countries,
                datasets: [{
                    label: 'Total Recovered',
                    data: totalRecovered,
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

        // Active cases pie chart
        var pieCtx = document.getElementById('activeCases').getContext('2d');
        var pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: countries,
                datasets: [{
                    label: 'Active Cases',
                    data: activeCases,
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

        // Total tests pie chart
        var pieCtx = document.getElementById('totalTests').getContext('2d');
        var pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: countries,
                datasets: [{
                    label: 'Total Tests',
                    data: totalTests,
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>