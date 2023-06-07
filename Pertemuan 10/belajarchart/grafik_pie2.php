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
    <title>Grafik Perbandingan Total Cases 10 Negara - Pie Chart</title>
    <script type="text/javascript" src="Chart.js"></script>
</head>
<body>
    <div style="width: 800px;height: 800px">
        <canvas id="pieChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById("pieChart").getContext('2d');
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($data['labels']); ?>,
                datasets: [{
                    label: 'Total Cases',
                    data: <?php echo json_encode($data['total_cases']); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>
</html>
