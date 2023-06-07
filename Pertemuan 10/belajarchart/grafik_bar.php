<?php
// Mengambil data dari database
include('koneksi.php');
$query = mysqli_query($koneksi, "SELECT country, total_cases FROM covid_data ORDER BY total_cases DESC LIMIT 10");
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $data['labels'][] = $row['country'];
    $data['total_cases'][] = $row['total_cases'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grafik Perbandingan Total Cases 10 Negara - Bar Chart</title>
    <script type="text/javascript" src="Chart.js"></script>
</head>
<body>
    <div style="width: 800px;height: 800px">
        <canvas id="barChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById("barChart").getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($data['labels']); ?>,
                datasets: [{
                    label: 'Total Cases',
                    data: <?php echo json_encode($data['total_cases']); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderWidth: 1
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
    </script>
</body>
</html>
