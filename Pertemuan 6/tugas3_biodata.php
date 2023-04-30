<?php
$nama = array("Citra Dewi", "Eka Putri", "Dewi Lestari", "Agus Setiawan", "Gita Permata", "Indah Puspita", "Budi Santoso", "Vina Amelia", "Hendra Pratama", "Joko Susilo");
$start = 1192;
$kota = array("Jakarta", "Gresik", "Surabaya", "Sidoarjo", "Mojokerto", "Jombang", "Bangkalan", "Lamongan", "Malang", "Kediri", "Madiun");
$posisi = array("Web Developer", "Software Engineer", "Data Analyst", "Network Administrator", "IT Project Manager", "Database Administrator", "Cybersecurity Analyst", "IT Support Specialist", "Cloud Architect", "UI/UX Designer", "Artificial Intelligence Engineer");
$perusahaan = array("Garuda Indonesia", "Telkom Indonesia", "Bank Mandiri", "Bank Central Asia", "Bank Rakyat Indonesia", "Traveloka", "Unilever Indonesia", "Gojek", "Tokopedia", "Shopee Indonesia", "Grab Indonesia");

foreach ($nama as $n) {
    $email = strtolower(str_replace(" ", "", $n)) . "@gmail.com";
    $telepon = "0812" . rand(10000000, 99999999);
?>
    <div class="card bg-dark border my-5">
        <div class="row no-gutters">
            <div class="col-4">
                <img src="https://faces-img.xcdn.link/image-lorem-face-<?php echo $start++; ?>.jpg" class="card-img" alt="Profile">
            </div>
            <div class="col-8">
                <div class="card-body font1">
                    <div class="py-3">
                        <p class="card-text ml-3">Nama&nbsp;&nbsp;: <?php echo $n; ?></p>
                        <p class="card-text ml-3">Email&nbsp;: <?php echo $email; ?></p>
                        <p class="card-text ml-3">Nomor&nbsp;: <?php echo $telepon; ?></p>
                    </div>
                    <hr class="border my-3">
                    <div class="row">
                        <div class="col-5 pt-2">
                            <h5 class="card-title font2"> Pendidikan</h6>
                                <ul>
                                    <li class="card-text">SD Negeri <?php echo mt_rand(1, 10) . " " . $kota[mt_rand(1, 10)]; ?></li>
                                    <li class="card-text">SMP Negeri <?php echo mt_rand(1, 10) . " " . $kota[mt_rand(1, 10)]; ?></li>
                                    <li class="card-text">SMA Negeri <?php echo mt_rand(1, 10) . " " . $kota[mt_rand(1, 10)]; ?></li>
                                    <li class="card-text">UPN "Veteran" Jatim</li>
                                </ul>
                        </div>
                        <div class="col-7 pt-2">
                            <h5 class="card-title font2"> Pengalaman</h5>
                            <ul>
                                <li class="card-text"><?php echo mt_rand(1, 3) . " tahun " . $posisi[mt_rand(1, 10)] . " " . $perusahaan[mt_rand(1, 10)]; ?></li>
                                <li class="card-text"><?php echo mt_rand(4, 7) . " tahun " . $posisi[mt_rand(1, 10)] . " " . $perusahaan[mt_rand(1, 10)]; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>