<!doctype html>
<html class="no-js" lang="en">

<?php
include '../dbconnect.php';
include 'cek.php';
$jumlah = mysqli_query($conn, "SELECT SUM(stock) AS ts FROM sstock_brg GROUP BY jenis;");
while ($row = mysqli_fetch_array($jumlah)) {
    $array_jumlah[] = $row['ts'];
}
?>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Logistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/sb-admin-2.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-144808195-1');
    </script>
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <a href="index.php"><img src="../logo.png" alt="logo" width="100%"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav class="h-100">
                        <ul class="metismenu d-flex flex-column justify-content-between h-100" id="menu">
                            <div>
                                <li class="active"><a href="index.php"><i class="ti-dashboard"></i><span>Dashboard</span></a></li>
                                <li>
                                    <a href="stock.php"><i class="fas fa-box-archive"></i><span>Stock Barang</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-boxes-packing"></i><span>Transaksi Data
                                        </span></a>
                                    <ul class="collapse">
                                        <li><a href="masuk.php">Barang Masuk</a></li>
                                        <li><a href="keluar.php">Barang Keluar</a></li>
                                    </ul>
                                </li>
                            </div>
                            <div>
                                <li class="mb-3">
                                    <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Logout</span></a>
                                </li>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <h2>Hi, <?= $_SESSION['username']; ?>!</h2>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li>
                                <h3>
                                    <div class="date">
                                        <script type='text/javascript'>
                                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                            var date = new Date();
                                            var day = date.getDate();
                                            var month = date.getMonth();
                                            var thisDay = date.getDay(),
                                                thisDay = myDays[thisDay];
                                            var yy = date.getYear();
                                            var year = (yy < 1000) ? yy + 1900 : yy;
                                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                            //-->
                                        </script></b>
                                    </div>
                                </h3>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <?php

            $periksa_barang = mysqli_query($conn, "select * from sstock_brg where stock <1");
            while ($p = mysqli_fetch_array($periksa_barang)) {
                if ($p['stock'] <= 1) {
            ?>
                    <script>
                        $(document).ready(function() {
                            $('#pesan_sedia').css("color", "white");
                            $('#pesan_sedia').append("<i class='ti-flag'></i>");
                        });
                    </script>
            <?php
                    echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>Stok  <strong><u>" . $p['nama'] . "</u></strong> yang tersisa sudah habis</div>";
                }
            }
            ?>

            <!-- page title area start -->
            <div class="page-title-area bg-light">
                <div class="row align-items-center">
                    <div class="col-12 p-3">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner pb-1">
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center h-100">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Earnings (Monthly)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$49,005.84</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center h-100">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Earnings (Annual)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$20,057,926.66</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center h-100">
                                    <div class="col-3 mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Capacity
                                        </div>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT SUM(stock) AS ts FROM sstock_brg;");
                                        $data = mysqli_fetch_array($query);
                                        $percentage = $data['ts'] / 10000;

                                        $textColor = '';
                                        $progressColor = '';

                                        if ($percentage < 0.2) {
                                            $textColor = 'color: #36B9CC;';
                                            $progressColor = 'background-color: #36B9CC;';
                                        } elseif ($percentage < 0.4) {
                                            $textColor = 'color: #1CC88A;';
                                            $progressColor = 'background-color: #1CC88A;';
                                        } elseif ($percentage < 0.6) {
                                            $textColor = 'color: #F6C23E;';
                                            $progressColor = 'background-color: #F6C23E;';
                                        } elseif ($percentage < 0.8) {
                                            $textColor = 'color: #F5913C;';
                                            $progressColor = 'background-color: #F5913C;';
                                        } else {
                                            $textColor = 'color: #E74A3B;';
                                            $progressColor = 'background-color: #E74A3B;';
                                        }

                                        $formattedPercentage = number_format($percentage * 100, 0);
                                        ?>
                                        <div class="h5 mb-0 font-weight-bold" style="<?php echo $textColor; ?>">
                                            <?php echo $formattedPercentage . "%"; ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar" role="progressbar" style="<?php echo $progressColor; ?> width: <?php echo $formattedPercentage . "%"; ?>;" aria-valuenow="<?php echo $formattedPercentage; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center h-100">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Need to Restock
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?php
                                                    $query = mysqli_query($conn, "SELECT * FROM sstock_brg ORDER BY stock ASC LIMIT 1");
                                                    $data = mysqli_fetch_array($query);
                                                    echo $data['nama'];
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold">Annual Sales</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle text-dark" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="barChartInventory"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold">Storage Distribution</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle text-dark" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="pieChartInventory"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-danger"></i> Makanan
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-warning"></i> Rumah Tangga
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-primary"></i> Minuman
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- market value area start -->
                <!-- <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h2>Notes</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>
                                                        <center> No </center>
                                                    </th>
                                                    <th>
                                                        <center> Catatan </center>
                                                    </th>
                                                    <th>
                                                        <center> Ditulis oleh </center>
                                                    </th>
                                                    <th>
                                                        <center> Action </center>
                                                    </th>


                                                </tr>
                                            </thead>
                                            <form method='POST' action='notes.php'>
                                                <tr class="table-active">
                                                    <td>
                                                        <center><input type='hidden' /></center>
                                                    </td>
                                                    <td>
                                                        <center> <input type='text' class='form-control' name='konten' required /></center>
                                                    </td>
                                                    <td>
                                                        <center style="font-size: 1.5rem;">Saya, <strong><?= $_SESSION['username']; ?></strong></center>
                                                    </td>
                                                    <td>
                                                        <center><input type='submit' name='submit' class='btn btn-primary btn-sm' value='Add Note' /></center>
                                                    </td>
                                                <tr>
                                            </form>
                                            <?php
                                            // Perintah untuk menampilkan data
                                            $queri = "Select * From notes where status='aktif' Order by id DESC";  //menampikan SEMUA data dari tabel

                                            $hasil = MySQLi_query($conn, $queri);    //fungsi untuk SQL

                                            // nilai awal variabel untuk no urut
                                            $i = 1;

                                            // perintah untuk membaca dan mengambil data dalam bentuk array
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                $id = $data['id'];
                                                echo "  <form method ='POST' action = 'done.php'>
										  <tr>
										  <td><center>" . $i . "</center></td>
										  <td><strong><center>" . $data['contents'] . "</center></strong></td>
										  <td><strong><center>" . $data['admin'] . "</center></strong></td>
										  <td><center><input type = 'hidden' name = 'id' value = '" . $data['id'] . "'> <input type='submit' name = 'submit'  class='btn btn-danger btn-sm' value = 'Delete' formaction='del.php' /></center></td>
										  </form></td>
										  </tr> </form>
										  ";
                                                $i++;
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>UPN "Veteran" Jawa Timur 2023</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/42e7da2808.js" crossorigin="anonymous"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- custom pie chart -->
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        // Pie Chart Inventory
        var ctx = document.getElementById("pieChartInventory");
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Makanan", "Rumah Tangga", "Minuman"],
                datasets: [{
                    data: <?php echo json_encode($array_jumlah); ?>,
                    backgroundColor: ['#e74a3b', '#f6c23e', '#4e73df'],
                    hoverBackgroundColor: ['#c53336', '#d7a032', '#465abe'],
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
    </script>
    <!-- custom bar chart -->
    <script>
        // Bar Chart Inventory
        var ctx = document.getElementById("barChartInventory");
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                datasets: [{
                    label: "Revenue",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#2e59d9",
                    borderColor: "#4e73df",
                    data: [4215, 5312, 6251, 7841, 9821, 14984],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'month'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        },
                        maxBarThickness: 25,
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 15000,
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return '$' + number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                        }
                    }
                },
            }
        });
    </script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>