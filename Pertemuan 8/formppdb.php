<html>

<head>
    <title>Formulir Peserta Didik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            overflow-x: hidden;
        }

        .warning {
            color: #FF0000;
        }

        .btn {
            min-width: 100px;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }
    </style>
</head>

<body class="bg-dark text-light">
    <?php
    $error_jenis_pendaftaran = "";
    $error_tanggal_masuk = "";
    $error_nis = "";
    $error_nomor_peserta = "";
    $error_pernah_paud = "";
    $error_pernah_tk = "";
    $error_no_skhun = "";
    $error_no_ijazah = "";
    $error_hobi = "";
    $error_cita_cita = "";
    $error_nama = "";
    $error_jenis_kelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tempat_lahir = "";
    $error_tanggal_lahir = "";
    $error_agama = "";
    $error_berkebutuhan_khusus = "";
    $error_alamat = "";
    $error_rt = "";
    $error_rw = "";
    $error_dusun = "";
    $error_desa = "";
    $error_kecamatan = "";
    $error_kode_pos = "";
    $error_tempat_tinggal = "";
    $error_transportasi = "";
    $error_no_hp = "";
    $error_no_telp = "";
    $error_email = "";
    $error_penerima_kps = "";
    $error_no_kps = "";
    $error_kewarganegaraan = "";
    $error_nama_ayah = "";
    $error_tahun_lahir_ayah = "";
    $error_pendidikan_ayah = "";
    $error_pekerjaan_ayah = "";
    $error_penghasilan_ayah = "";
    $error_berkebutuhan_khusus_ayah = "";
    $error_nama_ibu = "";
    $error_tahun_lahir_ibu = "";
    $error_pendidikan_ibu = "";
    $error_pekerjaan_ibu = "";
    $error_penghasilan_ibu = "";
    $error_berkebutuhan_khusus_ibu = "";

    $jenis_pendaftaran = "";
    $tanggal_masuk = "";
    $nis = "";
    $nomor_peserta = "";
    $pernah_paud = "";
    $pernah_tk = "";
    $no_skhun = "";
    $no_ijazah = "";
    $hobi = "";
    $cita_cita = "";
    $nama = "";
    $jenis_kelamin = "";
    $nisn = "";
    $nik = "";
    $tempat_lahir = "";
    $tanggal_lahir = "";
    $agama = "";
    $berkebutuhan_khusus = "";
    $alamat = "";
    $rt = "";
    $rw = "";
    $dusun = "";
    $desa = "";
    $kecamatan = "";
    $kode_pos = "";
    $tempat_tinggal = "";
    $transportasi = "";
    $no_hp = "";
    $no_telp = "";
    $email = "";
    $penerima_kps = "";
    $no_kps = "";
    $kewarganegaraan = "";
    $nama_ayah = "";
    $tahun_lahir_ayah = "";
    $pendidikan_ayah = "";
    $pekerjaan_ayah = "";
    $penghasilan_ayah = "";
    $berkebutuhan_khusus_ayah = "";
    $nama_ibu = "";
    $tahun_lahir_ibu = "";
    $pendidikan_ibu = "";
    $pekerjaan_ibu = "";
    $penghasilan_ibu = "";
    $berkebutuhan_khusus_ibu = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["jenis_pendaftaran"])) {
            $error_jenis_pendaftaran = "Jenis Pendaftaran tidak boleh kosong";
        } else {
            $jenis_pendaftaran = cek_input($_POST["jenis_pendaftaran"]);
        }
        if (empty($_POST["tanggal_masuk"])) {
            $error_tanggal_masuk = "Tanggal Masuk tidak boleh kosong";
        } else {
            $tanggal_masuk = cek_input($_POST["tanggal_masuk"]);
        }
        if (empty($_POST["nis"])) {
            $error_nis = "NIS tidak boleh kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
        }
        if (empty($_POST["nomor_peserta"])) {
            $error_nomor_peserta = "Nomor Peserta tidak boleh kosong";
        } else {
            if (strlen($_POST["nomor_peserta"]) == 20) {
                $nomor_peserta = cek_input($_POST["nomor_peserta"]);
            } else {
                $error_nomor_peserta = "Nomor Peserta harus terdiri dari 20 digit angka";
            }
        }
        if (empty($_POST["pernah_paud"])) {
            $error_pernah_paud = "PAUD tidak boleh kosong";
        } else {
            $pernah_paud = cek_input($_POST["pernah_paud"]);
        }
        if (empty($_POST["pernah_tk"])) {
            $error_pernah_tk = "TK tidak boleh kosong";
        } else {
            $pernah_tk = cek_input($_POST["pernah_tk"]);
        }
        if (empty($_POST["no_skhun"])) {
            $error_no_skhun = "Nomor SKHUN tidak boleh kosong";
        } else {
            if (strlen($_POST["no_skhun"]) == 15) {
                $no_skhun = cek_input($_POST["no_skhun"]);
            } else {
                $error_no_skhun = "Nomor SKHUN harus terdiri dari 15 digit angka";
            }
        }
        if (empty($_POST["no_ijazah"])) {
            $error_no_ijazah = "Nomor Ijazah tidak boleh kosong";
        } else {
            if (strlen($_POST["no_ijazah"]) == 15) {
                $no_ijazah = cek_input($_POST["no_ijazah"]);
            } else {
                $error_no_ijazah = "Nomor Ijazah harus terdiri dari 15 digit angka";
            }
        }
        if (empty($_POST["hobi"])) {
            $error_hobi = "Hobi tidak boleh kosong";
        } else {
            $hobi = cek_input($_POST["hobi"]);
        }
        if (empty($_POST["cita_cita"])) {
            $error_cita_cita = "Cita-cita tidak boleh kosong";
        } else {
            $cita_cita = cek_input($_POST["cita_cita"]);
        }
        if (empty($_POST["nama"])) {
            $error_nama = "Nama tidak boleh kosong";
        } else {
            $nama = cek_input($_POST["nama"]);
        }
        if (empty($_POST["jenis_kelamin"])) {
            $error_jenis_kelamin = "Jenis Kelamin tidak boleh kosong";
        } else {
            $jenis_kelamin = cek_input($_POST["jenis_kelamin"]);
        }
        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN tidak boleh kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
        }
        if (empty($_POST["nik"])) {
            $error_nik = "NIK tidak boleh kosong";
        } else {
            if (strlen($_POST["nik"]) == 16) {
                $nik = cek_input($_POST["nik"]);
            } else {
                $error_nik = "NIK harus terdiri dari 16 digit angka";
            }
        }
        if (empty($_POST["tempat_lahir"])) {
            $error_tempat_lahir = "Tempat Lahir tidak boleh kosong";
        } else {
            $tempat_lahir = cek_input($_POST["tempat_lahir"]);
        }
        if (empty($_POST["tanggal_lahir"])) {
            $error_tanggal_lahir = "Tanggal Lahir tidak boleh kosong";
        } else {
            $tanggal_lahir = cek_input($_POST["tanggal_lahir"]);
        }
        if (empty($_POST["agama"])) {
            $error_agama = "Agama tidak boleh kosong";
        } else {
            $agama = cek_input($_POST["agama"]);
        }
        if (empty($_POST["berkebutuhan_khusus"])) {
            $error_berkebutuhan_khusus = "Berkebutuhan Khusus tidak boleh kosong";
        } else {
            $berkebutuhan_khusus = cek_input($_POST["berkebutuhan_khusus"]);
        }
        if (empty($_POST["alamat"])) {
            $error_alamat = "Alamat tidak boleh kosong";
        } else {
            $alamat = cek_input($_POST["alamat"]);
        }
        if (empty($_POST["rt"])) {
            $error_rt = "RT tidak boleh kosong";
        } else {
            $rt = cek_input($_POST["rt"]);
        }
        if (empty($_POST["rw"])) {
            $error_rw = "RW tidak boleh kosong";
        } else {
            $rw = cek_input($_POST["rw"]);
        }
        if (empty($_POST["dusun"])) {
            $error_dusun = "Dusun tidak boleh kosong";
        } else {
            $dusun = cek_input($_POST["dusun"]);
        }
        if (empty($_POST["desa"])) {
            $error_desa = "Desa tidak boleh kosong";
        } else {
            $desa = cek_input($_POST["desa"]);
        }
        if (empty($_POST["kecamatan"])) {
            $error_kecamatan = "Kecamatan tidak boleh kosong";
        } else {
            $kecamatan = cek_input($_POST["kecamatan"]);
        }
        if (empty($_POST["kode_pos"])) {
            $error_kode_pos = "Kode Pos tidak boleh kosong";
        } else {
            if (strlen($_POST["kode_pos"]) == 6) {
                $kode_pos = cek_input($_POST["kode_pos"]);
            } else {
                $error_kode_pos = "Kode pos harus terdiri dari 6 digit angka";
            }
        }
        if (empty($_POST["tempat_tinggal"])) {
            $error_tempat_tinggal = "Tempat Tinggal tidak boleh kosong";
        } else {
            $tempat_tinggal = cek_input($_POST["tempat_tinggal"]);
        }
        if (empty($_POST["transportasi"])) {
            $error_transportasi = "Transportasi tidak boleh kosong";
        } else {
            $transportasi = cek_input($_POST["transportasi"]);
        }
        if (empty($_POST["no_hp"])) {
            $error_no_hp = "No. HP tidak boleh kosong";
        } else {
            $no_hp = cek_input($_POST["no_hp"]);
        }
        if (empty($_POST["no_telp"])) {
            $error_no_telp = "No. Telp tidak boleh kosong";
        } else {
            $no_telp = cek_input($_POST["no_telp"]);
        }
        if (empty($_POST["email"])) {
            $error_email = "Email tidak boleh kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format email tidak valid";
            }
        }
        if (empty($_POST["penerima_kps"])) {
            $error_penerima_kps = "Penerima KPS tidak boleh kosong";
        } else {
            $penerima_kps = cek_input($_POST["penerima_kps"]);
        }
        if ($penerima_kps == "Ya" && empty($_POST["no_kps"])) {
            $error_no_kps = "No. KPS tidak boleh kosong";
        } else {
            if ($penerima_kps == "Ya") {
                $no_kps = cek_input($_POST["no_kps"]);
            }
        }
        if (empty($_POST["kewarganegaraan"])) {
            $error_kewarganegaraan = "Kewarganegaraan tidak boleh kosong";
        } else {
            $kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
        }
        if (empty($_POST["nama_negara"])) {
            $error_nama_negara = "Nama Negara tidak boleh kosong";
        } else {
            $nama_negara = cek_input($_POST["nama_negara"]);
        }
        if (empty($_POST["nama_ayah"])) {
            $error_nama_ayah = "Nama Ayah tidak boleh kosong";
        } else {
            $nama_ayah = cek_input($_POST["nama_ayah"]);
        }
        if (empty($_POST["tahun_lahir_ayah"])) {
            $error_tahun_lahir_ayah = "Tahun Lahir Ayah tidak boleh kosong";
        } else {
            if (strlen($_POST["tahun_lahir_ayah"]) == 4) {
                $tahun_lahir_ayah = cek_input($_POST["tahun_lahir_ayah"]);
            } else {
                $error_tahun_lahir_ayah = "Tahun lahir ayah harus terdiri dari 4 digit angka";
            }
        }
        if (empty($_POST["pendidikan_ayah"])) {
            $error_pendidikan_ayah = "Pendidikan Ayah tidak boleh kosong";
        } else {
            $pendidikan_ayah = cek_input($_POST["pendidikan_ayah"]);
        }
        if (empty($_POST["pekerjaan_ayah"])) {
            $error_pekerjaan_ayah = "Pekerjaan Ayah tidak boleh kosong";
        } else {
            $pekerjaan_ayah = cek_input($_POST["pekerjaan_ayah"]);
        }
        if (empty($_POST["penghasilan_ayah"])) {
            $error_penghasilan_ayah = "Penghasilan Ayah tidak boleh kosong";
        } else {
            $penghasilan_ayah = cek_input($_POST["penghasilan_ayah"]);
        }
        if (empty($_POST["berkebutuhan_khusus_ayah"])) {
            $error_berkebutuhan_khusus_ayah = "Berkebutuhan Khusus Ayah tidak boleh kosong";
        } else {
            $berkebutuhan_khusus_ayah = cek_input($_POST["berkebutuhan_khusus_ayah"]);
        }
        if (empty($_POST["nama_ibu"])) {
            $error_nama_ibu = "Nama Ibu tidak boleh kosong";
        } else {
            $nama_ibu = cek_input($_POST["nama_ibu"]);
        }
        if (empty($_POST["tahun_lahir_ibu"])) {
            $error_tahun_lahir_ibu = "Tahun Lahir Ibu tidak boleh kosong";
        } else {
            if (strlen($_POST["tahun_lahir_ibu"]) == 4) {
                $tahun_lahir_ibu = cek_input($_POST["tahun_lahir_ibu"]);
            } else {
                $error_tahun_lahir_ibu = "Tahun lahir ibu harus terdiri dari 4 digit angka";
            }
        }
        if (empty($_POST["pendidikan_ibu"])) {
            $error_pendidikan_ibu = "Pendidikan Ibu tidak boleh kosong";
        } else {
            $pendidikan_ibu = cek_input($_POST["pendidikan_ibu"]);
        }
        if (empty($_POST["pekerjaan_ibu"])) {
            $error_pekerjaan_ibu = "Pekerjaan Ibu tidak boleh kosong";
        } else {
            $pekerjaan_ibu = cek_input($_POST["pekerjaan_ibu"]);
        }
        if (empty($_POST["penghasilan_ibu"])) {
            $error_penghasilan_ibu = "Penghasilan Ibu tidak boleh kosong";
        } else {
            $penghasilan_ibu = cek_input($_POST["penghasilan_ibu"]);
        }
        if (empty($_POST["berkebutuhan_khusus_ibu"])) {
            $error_berkebutuhan_khusus_ibu = "Berkebutuhan Khusus Ibu tidak boleh kosong";
        } else {
            $berkebutuhan_khusus_ibu = cek_input($_POST["berkebutuhan_khusus_ibu"]);
        }
    }

    function cek_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "my_db";
    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // memproses data yang diinputkan\
    if ($jenis_pendaftaran != '' && $tanggal_masuk != '' && $nis != '' && $nomor_peserta != '' && $pernah_paud != '' && $pernah_tk != '' && $no_skhun != '' && $no_ijazah != '' && $hobi != '' && $cita_cita != '' && $nama != '' && $jenis_kelamin != '' && $nisn != '' && $nik != '' && $tempat_lahir != '' && $tanggal_lahir != '' && $agama != '' && $berkebutuhan_khusus != '' && $alamat != '' && $rt != '' && $rw != '' && $dusun != '' && $desa != '' && $kecamatan != '' && $kode_pos != '' && $tempat_tinggal != '' && $transportasi != '' && $no_hp != '' && $no_telp != '' && $email != '' && $penerima_kps != '' && $kewarganegaraan != '' && $nama_ayah != '' && $tahun_lahir_ayah != '' && $pendidikan_ayah != '' && $pekerjaan_ayah != '' && $penghasilan_ayah != '' && $berkebutuhan_khusus_ayah != '' && $nama_ibu != '' && $tahun_lahir_ibu != '' && $pendidikan_ibu != '' && $pekerjaan_ibu != '' && $penghasilan_ibu != '' && $berkebutuhan_khusus_ibu) {
        $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
        $tanggal_masuk = $_POST['tanggal_masuk'];
        $nis = $_POST['nis'];
        $nomor_peserta = $_POST['nomor_peserta'];
        $pernah_paud = $_POST['pernah_paud'];
        $pernah_tk = $_POST['pernah_tk'];
        $no_skhun = $_POST['no_skhun'];
        $no_ijazah = $_POST['no_ijazah'];
        $hobi = $_POST['hobi'];
        $cita_cita = $_POST['cita_cita'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $nisn = $_POST['nisn'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $agama = $_POST['agama'];
        $berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
        $alamat = $_POST['alamat'];
        $rt = $_POST['rt'];
        $rw = $_POST['rw'];
        $dusun = $_POST['dusun'];
        $desa = $_POST['desa'];
        $kecamatan = $_POST['kecamatan'];
        $kode_pos = $_POST['kode_pos'];
        $tempat_tinggal = $_POST['tempat_tinggal'];
        $transportasi = $_POST['transportasi'];
        $no_hp = $_POST['no_hp'];
        $no_telp = $_POST['no_telp'];
        $email = $_POST['email'];
        $penerima_kps = $_POST['penerima_kps'];
        if(isset($_POST['no_kps'])) {
            $no_kps = $_POST['no_kps'];
        } else {
            $no_kps = '';
        }
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $nama_ayah = $_POST['nama_ayah'];
        $tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
        $pendidikan_ayah = $_POST['pendidikan_ayah'];
        $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
        $penghasilan_ayah = $_POST['penghasilan_ayah'];
        $berkebutuhan_khusus_ayah = $_POST['berkebutuhan_khusus_ayah'];
        $nama_ibu = $_POST['nama_ibu'];
        $tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
        $pendidikan_ibu = $_POST['pendidikan_ibu'];
        $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
        $penghasilan_ibu = $_POST['penghasilan_ibu'];
        $berkebutuhan_khusus_ibu = $_POST['berkebutuhan_khusus_ibu'];

        // query INSERT
        $sql = "INSERT INTO ppdb (jenis_pendaftaran, tanggal_masuk, nis, nomor_peserta, pernah_paud, pernah_tk, no_skhun, no_ijazah, hobi, cita_cita, nama, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat, rt, rw, dusun, desa, kecamatan, kode_pos, tempat_tinggal, transportasi, no_hp, no_telp, email, penerima_kps, no_kps, kewarganegaraan, nama_ayah, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, berkebutuhan_khusus_ayah, nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, berkebutuhan_khusus_ibu)
        VALUES ('$jenis_pendaftaran', '$tanggal_masuk', '$nis', '$nomor_peserta', '$pernah_paud', '$pernah_tk', '$no_skhun', '$no_ijazah', '$hobi', '$cita_cita', '$nama', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat', '$rt', '$rw', '$dusun', '$desa', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$transportasi', '$no_hp', '$no_telp', '$email', '$penerima_kps', '$no_kps', '$kewarganegaraan', '$nama_ayah', '$tahun_lahir_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$berkebutuhan_khusus_ayah', '$nama_ibu', '$tahun_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$berkebutuhan_khusus_ibu');";

        if (mysqli_query($conn, $sql)) {
            echo "<marquee>Data berhasil disimpan</marquee>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // menutup koneksi
    mysqli_close($conn);
    ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card-header bg-secondary">
                <h3 class="text-center">Formulir Pendaftaran Siswa Baru</h3>
            </div>
            <div class="container">
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <fieldset id="fieldset1" style="display:block">
                            <legend>
                                <h5>Registrasi Peserta Didik</h5>
                            </legend>
                            <div class="form-group row">
                                <label for="jenis_pendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                                <div class="col-sm-10">
                                    <select name="jenis_pendaftaran" class="form-control <?php echo ($error_jenis_pendaftaran != "" ? "is-invalid" : ""); ?>" id="jenis_pendaftaran">
                                        <option value="" selected disabled>Pilih Jenis Pendaftaran</option>
                                        <option value="Siswa Baru" <?php if ($jenis_pendaftaran == "Siswa Baru") echo "selected"; ?>>Siswa Baru</option>
                                        <option value="Pindahan" <?php if ($jenis_pendaftaran == "Pindahan") echo "selected"; ?>>Pindahan</option>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $error_jenis_pendaftaran; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggal_masuk" class="form-control <?php echo ($error_tanggal_masuk != "" ? "is-invalid" : ""); ?>" id="tanggal_masuk" placeholder="Tanggal Masuk" value="<?php echo $tanggal_masuk; ?>">
                                    <span class="invalid-feedback"><?php echo $error_tanggal_masuk; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                    <input type="number" name="nis" class="form-control <?php echo ($error_nis != "" ? "is-invalid" : ""); ?>" id="nis" placeholder="Masukkan NIS" value="<?php echo $nis; ?>">
                                    <span class="invalid-feedback"><?php echo $error_nis; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomor_peserta" class="col-sm-2 col-form-label">Nomor Peserta</label>
                                <div class="col-sm-10">
                                    <input type="number" name="nomor_peserta" class="form-control <?php echo ($error_nomor_peserta != "" ? "is-invalid" : ""); ?>" id="nomor_peserta" placeholder="Nomor peserta Ujian adalah 20 Digit yang tertera dalam sertifikat SKHUN SD, diisi bagi peserta didik jenjang SMP" value="<?php echo $nomor_peserta; ?>">
                                    <span class="invalid-feedback"><?php echo $error_nomor_peserta; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pernah_paud" class="col-sm-2 col-form-label">Pernah PAUD</label>
                                <div class="col-sm-4 d-flex justify-content-around">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="pernah_paud" id="pernah_paud_ya" value="Ya" <?php if ($pernah_paud == "Ya") echo "checked"; ?>>
                                        <label class="form-check-label" for="pernah_paud_ya">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="pernah_paud" id="pernah_paud_tidak" value="Tidak" <?php if ($pernah_paud == "Tidak") echo "checked"; ?>>
                                        <label class="form-check-label" for="pernah_paud_tidak">Tidak</label>
                                    </div>
                                    <span class="invalid-feedback"><?php echo $error_pernah_paud; ?></span>
                                </div>
                                <label for="pernah_tk" class="col-sm-2 col-form-label">Pernah TK</label>
                                <div class="col-sm-4 d-flex justify-content-around">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="pernah_tk" id="pernah_tk_ya" value="Ya" <?php if ($pernah_tk == "Ya") echo "checked"; ?>>
                                        <label class="form-check-label" for="pernah_tk_ya">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="pernah_tk" id="pernah_tk_tidak" value="Tidak" <?php if ($pernah_tk == "Tidak") echo "checked"; ?>>
                                        <label class="form-check-label" for="pernah_tk_tidak">Tidak</label>
                                    </div>
                                    <span class="invalid-feedback"><?php echo $error_pernah_tk; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_skhun" class="col-sm-2 col-form-label">No. Seri SKHUN</label>
                                <div class="col-sm-4">
                                    <input type="number" name="no_skhun" class="form-control <?php echo ($error_no_skhun != "" ? "is-invalid" : ""); ?>" id="no_skhun" placeholder="Diisi 15 Digit yang tertera di SKHUN SD" value="<?php echo $no_skhun; ?>">
                                    <span class="invalid-feedback"><?php echo $error_no_skhun; ?></span>
                                </div>
                                <label for="no_ijazah" class="col-sm-2 col-form-label">No. Seri Ijazah</label>
                                <div class="col-sm-4">
                                    <input type="number" name="no_ijazah" class="form-control <?php echo ($error_no_ijazah != "" ? "is-invalid" : ""); ?>" id="no_ijazah" placeholder="Diisi 15 Digit yang tertera di Ijazah SD" value="<?php echo $no_ijazah; ?>">
                                    <span class="invalid-feedback"><?php echo $error_no_ijazah; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
                                <div class="col-sm-10">
                                    <select name="hobi" class="form-control <?php echo ($error_hobi != "" ? "is-invalid" : ""); ?>" id="hobi">
                                        <option value="" selected disabled>Pilih Hobi</option>
                                        <option value="Olahraga" <?php if ($hobi == "Olahraga") echo "selected"; ?>>Olahraga</option>
                                        <option value="Kesenian" <?php if ($hobi == "Kesenian") echo "selected"; ?>>Kesenian</option>
                                        <option value="Membaca" <?php if ($hobi == "Membaca") echo "selected"; ?>>Membaca</option>
                                        <option value="Menulis" <?php if ($hobi == "Menulis") echo "selected"; ?>>Menulis</option>
                                        <option value="Traveling" <?php if ($hobi == "Traveling") echo "selected"; ?>>Traveling</option>
                                        <option value="Lainnya" <?php if ($hobi == "Lainnya") echo "selected"; ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cita_cita" class="col-sm-2 col-form-label">Cita-cita</label>
                                <div class="col-sm-10">
                                    <select name="cita_cita" class="form-control <?php echo ($error_cita_cita != "" ? "is-invalid" : ""); ?>" id="cita_cita">
                                        <option value="" selected disabled>Pilih Cita-Cita</option>
                                        <option value="PNS" <?php if ($cita_cita == "PNS") echo "selected"; ?>>PNS</option>
                                        <option value="TNI/POLRI" <?php if ($cita_cita == "TNI/POLRI") echo "selected"; ?>>TNI/POLRI</option>
                                        <option value="Guru/Dosen" <?php if ($cita_cita == "Guru/Dosen") echo "selected"; ?>>Guru/Dosen</option>
                                        <option value="Dokter" <?php if ($cita_cita == "Dokter") echo "selected"; ?>>Dokter</option>
                                        <option value="Politikus" <?php if ($cita_cita == "Politikus") echo "selected"; ?>>Politikus</option>
                                        <option value="Wiraswasta" <?php if ($cita_cita == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                                        <option value="Seni/Lukis/Artis/Sejenis" <?php if ($cita_cita == "Seni/Lukis/Artis/Sejenis") echo "selected"; ?>>Seni/Lukis/Artis/Sejenis</option>
                                        <option value="Lainnya" <?php if ($cita_cita == "Lainnya") echo "selected"; ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Button Next dan Previous -->
                            <div class="form-group d-flex justify-content-between">
                                <div class="">
                                    <button class="btn btn-disabled" type="button" id="prev1">Previous</button>
                                </div>
                                <div class="">
                                    <button class="btn btn-primary" type="button" id="next1" onclick="changeFieldset(1,2)">Next</button>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset id="fieldset2" style="display: none">
                            <legend>
                                <h5>Data Pribadi</h5>
                            </legend>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control <?php echo ($error_nama != "" ? "is-invalid" : ""); ?>" id="nama" placeholder="Masukkan Nama" value="<?php echo $nama; ?>">
                                    <span class="invalid-feedback"><?php echo $error_nama; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select name="jenis_kelamin" class="form-control <?php echo ($error_jenis_kelamin != "" ? "is-invalid" : ""); ?>" id="jenis_kelamin">
                                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki" <?php if ($jenis_kelamin == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
                                        <option value="Perempuan" <?php if ($jenis_kelamin == "Perempuan") echo "selected"; ?>>Perempuan</option>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $error_jenis_kelamin; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-10">
                                    <input type="number" name="nisn" class="form-control <?php echo ($error_nisn != "" ? "is-invalid" : ""); ?>" id="nisn" placeholder="Masukkan NISN" value="<?php echo $nisn; ?>">
                                    <span class="invalid-feedback"><?php echo $error_nisn; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="number" name="nik" class="form-control <?php echo ($error_nik != "" ? "is-invalid" : ""); ?>" id="nik" placeholder="Masukkan NIK" value="<?php echo $nik; ?>">
                                    <span class="invalid-feedback"><?php echo $error_nik; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir != "" ? "is-invalid" : ""); ?>" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="<?php echo $tempat_lahir; ?>">
                                    <span class="invalid-feedback"><?php echo $error_tempat_lahir; ?></span>
                                </div>
                                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="date" name="tanggal_lahir" class="form-control <?php echo ($error_tanggal_lahir != "" ? "is-invalid" : ""); ?>" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>">
                                    <span class="invalid-feedback"><?php echo $error_tanggal_lahir; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <select name="agama" class="form-control <?php echo ($error_agama != "" ? "is-invalid" : ""); ?>" id="agama">
                                        <option value="" selected disabled>Pilih Agama</option>
                                        <option value="Islam" <?php if ($agama == "Islam") echo "selected"; ?>>Islam</option>
                                        <option value="Kristen" <?php if ($agama == "Kristen") echo "selected"; ?>>Kristen</option>
                                        <option value="Katolik" <?php if ($agama == "Katolik") echo "selected"; ?>>Katolik</option>
                                        <option value="Hindu" <?php if ($agama == "Hindu") echo "selected"; ?>>Hindu</option>
                                        <option value="Buddha" <?php if ($agama == "Buddha") echo "selected"; ?>>Buddha</option>
                                        <option value="Konghucu" <?php if ($agama == "Konghucu") echo "selected"; ?>>Konghucu</option>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $error_agama; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="berkebutuhan_khusus" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
                                <div class="col-sm-10">
                                    <select name="berkebutuhan_khusus" class="form-control <?php echo ($error_berkebutuhan_khusus != "" ? "is-invalid" : ""); ?>" id="berkebutuhan_khusus">
                                        <option value="Tidak" <?php if ($berkebutuhan_khusus == "Tidak") echo "selected"; ?>>Tidak</option>
                                        <option value="Netra" <?php if ($berkebutuhan_khusus == "Netra") echo "selected"; ?>>Netra</option>
                                        <option value="Rungu" <?php if ($berkebutuhan_khusus == "Rungu") echo "selected"; ?>>Rungu</option>
                                        <option value="Grahita Ringan" <?php if ($berkebutuhan_khusus == "Grahita Ringan") echo "selected"; ?>>Grahita Ringan</option>
                                        <option value="Grahita Sedang" <?php if ($berkebutuhan_khusus == "Grahita Sedang") echo "selected"; ?>>Grahita Sedang</option>
                                        <option value="Daksa Ringan" <?php if ($berkebutuhan_khusus == "Daksa Ringan") echo "selected"; ?>>Daksa Ringan</option>
                                        <option value="Daksa Sedang" <?php if ($berkebutuhan_khusus == "Daksa Sedang") echo "selected"; ?>>Daksa Sedang</option>
                                        <option value="Laras" <?php if ($berkebutuhan_khusus == "Laras") echo "selected"; ?>>Laras</option>
                                        <option value="Wicara" <?php if ($berkebutuhan_khusus == "Wicara") echo "selected"; ?>>Wicara</option>
                                        <option value="Tuna Ganda" <?php if ($berkebutuhan_khusus == "Tuna Ganda") echo "selected"; ?>>Tuna Ganda</option>
                                        <option value="Hiper Aktif" <?php if ($berkebutuhan_khusus == "Hiper Aktif") echo "selected"; ?>>Hiper Aktif</option>
                                        <option value="Cerdas Istimewa" <?php if ($berkebutuhan_khusus == "Cerdas Istimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                                        <option value="Bakat Istimewa" <?php if ($berkebutuhan_khusus == "Bakat Istimewa") echo "selected"; ?>>Bakat Istimewa</option>
                                        <option value="Kesulitan Belajar" <?php if ($berkebutuhan_khusus == "Kesulitan Belajar") echo "selected"; ?>>Kesulitan Belajar</option>
                                        <option value="Narkoba" <?php if ($berkebutuhan_khusus == "Narkoba") echo "selected"; ?>>Narkoba</option>
                                        <option value="Indigo" <?php if ($berkebutuhan_khusus == "Indigo") echo "selected"; ?>>Indigo</option>
                                        <option value="Down Sindrome" <?php if ($berkebutuhan_khusus == "Down Sindrome") echo "selected"; ?>>Down Sindrome</option>
                                        <option value="Autis" <?php if ($berkebutuhan_khusus == "Autis") echo "selected"; ?>>Autis</option>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $error_berkebutuhan_khusus; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea name="alamat" class="form-control <?php echo ($error_alamat != "" ? "is-invalid" : ""); ?>" id="alamat" rows="3"><?php echo $alamat; ?></textarea>
                                    <span class="invalid-feedback"><?php echo $error_alamat; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rt" class="col-sm-2 col-form-label">RT</label>
                                <div class="col-sm-1">
                                    <input type="number" name="rt" class="form-control <?php echo ($error_rt != "" ? "is-invalid" : ""); ?>" id="rt" placeholder="00" value="<?php echo $rt; ?>" minlength="1" maxlength="2">
                                    <span class="invalid-feedback"><?php echo $error_rt; ?></span>
                                </div>
                                <label for="rw" class="col-sm-1 col-form-label">RW</label>
                                <div class="col-sm-1">
                                    <input type="number" name="rw" class="form-control <?php echo ($error_rw != "" ? "is-invalid" : ""); ?>" id="rw" placeholder="00" value="<?php echo $rw; ?>" minlength="1" maxlength="2">
                                    <span class="invalid-feedback"><?php echo $error_rw; ?></span>
                                </div>
                                <label for="dusun" class="col-sm-1 col-form-label">Dusun</label>
                                <div class="col-sm-2">
                                    <input type="text" name="dusun" class="form-control <?php echo ($error_dusun != "" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Masukkan Dusun" value="<?php echo $dusun; ?>">
                                    <span class="invalid-feedback"><?php echo $error_dusun; ?></span>
                                </div>
                                <label for="desa" class="col-sm-1 col-form-label">Desa</label>
                                <div class="col-sm-3">
                                    <input type="text" name="desa" class="form-control <?php echo ($error_desa != "" ? "is-invalid" : ""); ?>" id="desa" placeholder="Masukkan Desa" value="<?php echo $desa; ?>">
                                    <span class="invalid-feedback"><?php echo $error_desa; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-6">
                                    <input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan != "" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Masukkan Kecamatan" value="<?php echo $kecamatan; ?>">
                                    <span class="invalid-feedback"><?php echo $error_kecamatan; ?></span>
                                </div>
                                <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                                <div class="col-sm-2">
                                    <input type="number" name="kode_pos" class="form-control <?php echo ($error_kode_pos != "" ? "is-invalid" : ""); ?>" id="kode_pos" placeholder="000000" value="<?php echo $kode_pos; ?>">
                                    <span class="invalid-feedback"><?php echo $error_kode_pos; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempat_tinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
                                <div class="col-sm-10">
                                    <select name="tempat_tinggal" class="form-control <?php echo ($error_tempat_tinggal != "" ? "is-invalid" : ""); ?>" id="tempat_tinggal">
                                        <option value="Bersama Orang Tua" <?php if ($tempat_tinggal == "Bersama Orang Tua") echo "selected"; ?>>Bersama Orang Tua</option>
                                        <option value="Wali" <?php if ($tempat_tinggal == "Wali") echo "selected"; ?>>Wali</option>
                                        <option value="Kos" <?php if ($tempat_tinggal == "Kos") echo "selected"; ?>>Kos</option>
                                        <option value="Asrama" <?php if ($tempat_tinggal == "Asrama") echo "selected"; ?>>Asrama</option>
                                        <option value="Panti Asuhan" <?php if ($tempat_tinggal == "Panti Asuhan") echo "selected"; ?>>Panti Asuhan</option>
                                        <option value="Lainnya" <?php if ($tempat_tinggal == "Lainnya") echo "selected"; ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="transportasi" class="col-sm-2 col-form-label">Transportasi</label>
                                <div class="col-sm-10">
                                    <select name="transportasi" class="form-control <?php echo ($error_transportasi != "" ? "is-invalid" : ""); ?>" id="transportasi">
                                        <option value="Jalan Kaki" <?php if ($transportasi == "Jalan Kaki") echo "selected"; ?>>Jalan Kaki</option>
                                        <option value="Kendaraan Pribadi" <?php if ($transportasi == "Kendaraan Pribadi") echo "selected"; ?>>Kendaraan Pribadi</option>
                                        <option value="Kendaraan Umum" <?php if ($transportasi == "Kendaraan Umum") echo "selected"; ?>>Kendaraan Umum</option>
                                        <option value="Jemputan Sekolah" <?php if ($transportasi == "Jemputan Sekolah") echo "selected"; ?>>Jemputan Sekolah</option>
                                        <option value="Kereta Api" <?php if ($transportasi == "Kereta Api") echo "selected"; ?>>Kereta Api</option>
                                        <option value="Ojek" <?php if ($transportasi == "Ojek") echo "selected"; ?>>Ojek</option>
                                        <option value="Andong/Bendi/Sado/Dokar/Delman/Beca" <?php if ($transportasi == "Andong/Bendi/Sado/Dokar/Delman/Beca") echo "selected"; ?>>Andong/Bendi/Sado/Dokar/Delman/Beca</option>
                                        <option value="Perahu Penyebrangan/Rakit/Getek" <?php if ($transportasi == "Perahu Penyebrangan/Rakit/Getek") echo "selected"; ?>>Perahu Penyebrangan/Rakit/Getek</option>
                                        <option value="Lainnya" <?php if ($transportasi == "Lainnya") echo "selected"; ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                                <div class="col-sm-10">
                                    <input type="number" name="no_hp" class="form-control <?php echo ($error_no_hp != "" ? "is-invalid" : ""); ?>" id="no_hp" placeholder="Masukkan Nomor HP" value="<?php echo $no_hp; ?>">
                                    <span class="invalid-feedback"><?php echo $error_no_hp; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                <div class="col-sm-10">
                                    <input type="number" name="no_telp" class="form-control <?php echo ($error_no_telp != "" ? "is-invalid" : ""); ?>" id="no_telp" placeholder="Masukkan Nomor Telepon" value="<?php echo $no_telp; ?>">
                                    <span class="invalid-feedback"><?php echo $error_no_telp; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" id="email" placeholder="Masukkan Email" value="<?php echo $email; ?>">
                                    <span class="invalid-feedback"><?php echo $error_email; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="penerima_kps" class="col-sm-2 col-form-label">Penerima KPS</label>
                                <div class="col-sm-2 d-flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="penerima_kps" id="penerima_kps_ya" value="Ya" <?php if ($penerima_kps == "Ya") echo "checked"; ?>>
                                        <label class="form-check-label" for="penerima_kps_ya">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="penerima_kps" id="penerima_kps_tidak" value="Tidak" <?php if ($penerima_kps == "Tidak") echo "checked"; ?>>
                                        <label class="form-check-label" for="penerima_kps_tidak">Tidak</label>
                                    </div>
                                    <span class="invalid-feedback"><?php echo $error_penerima_kps; ?></span>
                                </div>
                                <label for="no_kps" class="col-sm-2 col-form-label">Nomor KPS</label>
                                <div class="col-sm-6">
                                    <input type="text" name="no_kps" class="form-control <?php echo ($error_no_kps != "" ? "is-invalid" : ""); ?>" id="no_kps" placeholder="Masukkan Nomor KPS" value="<?php echo $no_kps; ?>" disabled>
                                    <span class="invalid-feedback"><?php echo $error_no_kps; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-10">
                                    <select name="kewarganegaraan" class="form-control <?php echo ($error_kewarganegaraan != "" ? "is-invalid" : ""); ?>" id="kewarganegaraan">
                                        <option value="WNI" <?php if ($kewarganegaraan == "WNI") echo "selected"; ?>>WNI</option>
                                        <option value="WNA" <?php if ($kewarganegaraan == "WNA") echo "selected"; ?>>WNA</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Button Next dan Previous -->
                            <div class="form-group d-flex justify-content-between">
                                <div class="">
                                    <button class="btn btn-primary" type="button" id="prev2" onclick="changeFieldset(2,1)">Previous</button>
                                </div>
                                <div class="">
                                    <button class="btn btn-primary" type="button" id="next2" onclick="changeFieldset(2,3)">Next</button>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset id="fieldset3" style="display: none">
                            <legend>
                                <h5>Data Ayah Kandung</h5>
                            </legend>
                            <div class="form-group row">
                                <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-7">
                                    <input type="text" name="nama_ayah" class="form-control <?php echo ($error_nama_ayah != "" ? "is-invalid" : ""); ?>" id="nama_ayah" placeholder="Masukkan Nama Ayah" value="<?php echo $nama_ayah; ?>">
                                    <span class="invalid-feedback"><?php echo $error_nama_ayah; ?></span>
                                </div>
                                <label for="tahun_lahir_ayah" class="col-sm-2 col-form-label">Tahun Lahir</label>
                                <div class="col-sm-1">
                                    <input type="number" name="tahun_lahir_ayah" class="form-control <?php echo ($error_tahun_lahir_ayah != "" ? "is-invalid" : ""); ?>" id="tahun_lahir_ayah" placeholder="0000" value="<?php echo $tahun_lahir_ayah; ?>" minlength="4" maxlength="4">
                                    <span class="invalid-feedback"><?php echo $error_tahun_lahir_ayah; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan_ayah" class="col-sm-2 col-form-label">Pendidikan</label>
                                <div class="col-sm-4">
                                    <select name="pendidikan_ayah" class="form-control <?php echo ($error_pendidikan_ayah != "" ? "is-invalid" : ""); ?>" id="pendidikan_ayah">
                                        <option value="Tidak Sekolah" <?php if ($pendidikan_ayah == "Tidak Sekolah") echo "selected"; ?>>Tidak Sekolah</option>
                                        <option value="Putus SD" <?php if ($pendidikan_ayah == "Putus SD") echo "selected"; ?>>Putus SD</option>
                                        <option value="SD Sederajat" <?php if ($pendidikan_ayah == "SD Sederajat") echo "selected"; ?>>SD Sederajat</option>
                                        <option value="SMP Sederajat" <?php if ($pendidikan_ayah == "SMP Sederajat") echo "selected"; ?>>SMP Sederajat</option>
                                        <option value="SMA Sederajat" <?php if ($pendidikan_ayah == "SMA Sederajat") echo "selected"; ?>>SMA Sederajat</option>
                                        <option value="D1" <?php if ($pendidikan_ayah == "D1") echo "selected"; ?>>D1</option>
                                        <option value="D2" <?php if ($pendidikan_ayah == "D2") echo "selected"; ?>>D2</option>
                                        <option value="D3" <?php if ($pendidikan_ayah == "D3") echo "selected"; ?>>D3</option>
                                        <option value="D4/S1" <?php if ($pendidikan_ayah == "D4/S1") echo "selected"; ?>>D4/S1</option>
                                        <option value="S2" <?php if ($pendidikan_ayah == "S2") echo "selected"; ?>>S2</option>
                                        <option value="S3" <?php if ($pendidikan_ayah == "S3") echo "selected"; ?>>S3</option>
                                    </select>
                                </div>
                                <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select name="pekerjaan_ayah" class="form-control <?php echo ($error_pekerjaan_ayah != "" ? "is-invalid" : ""); ?>" id="pekerjaan_ayah">
                                        <option value="Tidak Bekerja" <?php if ($pekerjaan_ayah == "Tidak Bekerja") echo "selected"; ?>>Tidak Bekerja</option>
                                        <option value="Nelayan" <?php if ($pekerjaan_ayah == "Nelayan") echo "selected"; ?>>Nelayan</option>
                                        <option value="Petani" <?php if ($pekerjaan_ayah == "Petani") echo "selected"; ?>>Petani</option>
                                        <option value="Peternak" <?php if ($pekerjaan_ayah == "Peternak") echo "selected"; ?>>Peternak</option>
                                        <option value="PNS/TNI/Polri" <?php if ($pekerjaan_ayah == "PNS/TNI/Polri") echo "selected"; ?>>PNS/TNI/Polri</option>
                                        <option value="Karyawan Swasta" <?php if ($pekerjaan_ayah == "Karyawan Swasta") echo "selected"; ?>>Karyawan Swasta</option>
                                        <option value="Pedagang Kecil" <?php if ($pekerjaan_ayah == "Pedagang Kecil") echo "selected"; ?>>Pedagang Kecil</option>
                                        <option value="Pedagang Besar" <?php if ($pekerjaan_ayah == "Pedagang Besar") echo "selected"; ?>>Pedagang Besar</option>
                                        <option value="Wiraswasta" <?php if ($pekerjaan_ayah == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                                        <option value="Wirausaha" <?php if ($pekerjaan_ayah == "Wirausaha") echo "selected"; ?>>Wirausaha</option>
                                        <option value="Buruh" <?php if ($pekerjaan_ayah == "Buruh") echo "selected"; ?>>Buruh</option>
                                        <option value="Pensiunan" <?php if ($pekerjaan_ayah == "Pensiunan") echo "selected"; ?>>Pensiunan</option>
                                        <option value="Lain-lain" <?php if ($pekerjaan_ayah == "Lain-lain") echo "selected"; ?>>Lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="penghasilan_ayah" class="col-sm-2 col-form-label">Penghasilan Bulanan</label>
                                <div class="col-sm-10">
                                    <select name="penghasilan_ayah" class="form-control <?php echo ($error_penghasilan_ayah != "" ? "is-invalid" : ""); ?>" id="penghasilan_ayah">
                                        <option value="Kurang dari Rp. 500.000" <?php if ($penghasilan_ayah == "Kurang dari Rp. 500.000") echo "selected"; ?>>Kurang dari Rp. 500.000</option>
                                        <option value="Rp. 500.000 - Rp. 999.999" <?php if ($penghasilan_ayah == "Rp. 500.000 - Rp. 999.999") echo "selected"; ?>>Rp. 500.000 - Rp. 999.999</option>
                                        <option value="Rp. 1.000.000 - Rp. 1.999.999" <?php if ($penghasilan_ayah == "Rp. 1.000.000 - Rp. 1.999.999") echo "selected"; ?>>Rp. 1.000.000 - Rp. 1.999.999</option>
                                        <option value="Rp. 2.000.000 - Rp. 4.999.999" <?php if ($penghasilan_ayah == "Rp. 2.000.000 - Rp. 4.999.999") echo "selected"; ?>>Rp. 2.000.000 - Rp. 4.999.999</option>
                                        <option value="Rp. 5.000.000 - Rp. 19.999.999" <?php if ($penghasilan_ayah == "Rp. 5.000.000 - Rp. 19.999.999") echo "selected"; ?>>Rp. 5.000.000 - Rp. 19.999.999</option>
                                        <option value="Lebih dari Rp. 20.000.000" <?php if ($penghasilan_ayah == "Lebih dari Rp. 20.000.000") echo "selected"; ?>>Lebih dari Rp. 20.000.000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="berkebutuhan_khusus_ayah" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
                                <div class="col-sm-10">
                                    <select name="berkebutuhan_khusus_ayah" class="form-control <?php echo ($error_berkebutuhan_khusus_ayah != "" ? "is-invalid" : ""); ?>" id="berkebutuhan_khusus_ayah">
                                        <option value="Tidak" <?php if ($berkebutuhan_khusus_ayah == "Tidak") echo "selected"; ?>>Tidak</option>
                                        <option value="Netra" <?php if ($berkebutuhan_khusus_ayah == "Netra") echo "selected"; ?>>Netra</option>
                                        <option value="Rungu" <?php if ($berkebutuhan_khusus_ayah == "Rungu") echo "selected"; ?>>Rungu</option>
                                        <option value="Grahita Ringan" <?php if ($berkebutuhan_khusus_ayah == "Grahita Ringan") echo "selected"; ?>>Grahita Ringan</option>
                                        <option value="Grahita Sedang" <?php if ($berkebutuhan_khusus_ayah == "Grahita Sedang") echo "selected"; ?>>Grahita Sedang</option>
                                        <option value="Daksa Ringan" <?php if ($berkebutuhan_khusus_ayah == "Daksa Ringan") echo "selected"; ?>>Daksa Ringan</option>
                                        <option value="Daksa Sedang" <?php if ($berkebutuhan_khusus_ayah == "Daksa Sedang") echo "selected"; ?>>Daksa Sedang</option>
                                        <option value="Laras" <?php if ($berkebutuhan_khusus_ayah == "Laras") echo "selected"; ?>>Laras</option>
                                        <option value="Wicara" <?php if ($berkebutuhan_khusus_ayah == "Wicara") echo "selected"; ?>>Wicara</option>
                                        <option value="Tuna Ganda" <?php if ($berkebutuhan_khusus_ayah == "Tuna Ganda") echo "selected"; ?>>Tuna Ganda</option>
                                        <option value="Hiper Aktif" <?php if ($berkebutuhan_khusus_ayah == "Hiper Aktif") echo "selected"; ?>>Hiper Aktif</option>
                                        <option value="Cerdas Istimewa" <?php if ($berkebutuhan_khusus_ayah == "Cerdas Istimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                                        <option value="Bakat Istimewa" <?php if ($berkebutuhan_khusus_ayah == "Bakat Istimewa") echo "selected"; ?>>Bakat Istimewa</option>
                                        <option value="Kesulitan Belajar" <?php if ($berkebutuhan_khusus_ayah == "Kesulitan Belajar") echo "selected"; ?>>Kesulitan Belajar</option>
                                        <option value="Narkoba" <?php if ($berkebutuhan_khusus_ayah == "Narkoba") echo "selected"; ?>>Narkoba</option>
                                        <option value="Indigo" <?php if ($berkebutuhan_khusus_ayah == "Indigo") echo "selected"; ?>>Indigo</option>
                                        <option value="Down Sindrome" <?php if ($berkebutuhan_khusus_ayah == "Down Sindrome") echo "selected"; ?>>Down Sindrome</option>
                                        <option value="Autis" <?php if ($berkebutuhan_khusus_ayah == "Autis") echo "selected"; ?>>Autis</option>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $error_berkebutuhan_khusus_ayah; ?></span>
                                </div>
                            </div>
                            <legend class="mt-5">
                                <h5>Data Ibu Kandung</h5>
                            </legend>
                            <div class="form-group row">
                                <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="nama_ibu" class="form-control <?php echo ($error_nama_ibu != "" ? "is-invalid" : ""); ?>" id="nama_ibu" placeholder="Masukkan Nama Ibu" value="<?php echo $nama_ibu; ?>">
                                    <span class="invalid-feedback"><?php echo $error_nama_ibu; ?></span>
                                </div>
                                <label for="tahun_lahir_ibu" class="col-sm-2 col-form-label">Tahun Lahir</label>
                                <div class="col-sm-1">
                                    <input type="number" name="tahun_lahir_ibu" class="form-control <?php echo ($error_tahun_lahir_ibu != "" ? "is-invalid" : ""); ?>" id="tahun_lahir_ibu" placeholder="0000" value="<?php echo $tahun_lahir_ibu; ?>" minlength="4" maxlength="4">
                                    <span class="invalid-feedback"><?php echo $error_tahun_lahir_ibu; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan_ibu" class="col-sm-2 col-form-label">Pendidikan</label>
                                <div class="col-sm-4">
                                    <select name="pendidikan_ibu" class="form-control <?php echo ($error_pendidikan_ibu != "" ? "is-invalid" : ""); ?>" id="pendidikan_ibu">
                                        <option value="Tidak Sekolah" <?php if ($pendidikan_ibu == "Tidak Sekolah") echo "selected"; ?>>Tidak Sekolah</option>
                                        <option value="Putus SD" <?php if ($pendidikan_ibu == "Putus SD") echo "selected"; ?>>Putus SD</option>
                                        <option value="SD Sederajat" <?php if ($pendidikan_ibu == "SD Sederajat") echo "selected"; ?>>SD Sederajat</option>
                                        <option value="SMP Sederajat" <?php if ($pendidikan_ibu == "SMP Sederajat") echo "selected"; ?>>SMP Sederajat</option>
                                        <option value="SMA Sederajat" <?php if ($pendidikan_ibu == "SMA Sederajat") echo "selected"; ?>>SMA Sederajat</option>
                                        <option value="D1" <?php if ($pendidikan_ibu == "D1") echo "selected"; ?>>D1</option>
                                        <option value="D2" <?php if ($pendidikan_ibu == "D2") echo "selected"; ?>>D2</option>
                                        <option value="D3" <?php if ($pendidikan_ibu == "D3") echo "selected"; ?>>D3</option>
                                        <option value="D4/S1" <?php if ($pendidikan_ibu == "D4/S1") echo "selected"; ?>>D4/S1</option>
                                        <option value="S2" <?php if ($pendidikan_ibu == "S2") echo "selected"; ?>>S2</option>
                                        <option value="S3" <?php if ($pendidikan_ibu == "S3") echo "selected"; ?>>S3</option>
                                    </select>
                                </div>
                                <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select name="pekerjaan_ibu" class="form-control <?php echo ($error_pekerjaan_ibu != "" ? "is-invalid" : ""); ?>" id="pekerjaan_ibu">
                                        <option value="Tidak Bekerja" <?php if ($pekerjaan_ibu == "Tidak Bekerja") echo "selected"; ?>>Tidak Bekerja</option>
                                        <option value="Nelayan" <?php if ($pekerjaan_ibu == "Nelayan") echo "selected"; ?>>Nelayan</option>
                                        <option value="Petani" <?php if ($pekerjaan_ibu == "Petani") echo "selected"; ?>>Petani</option>
                                        <option value="Peternak" <?php if ($pekerjaan_ibu == "Peternak") echo "selected"; ?>>Peternak</option>
                                        <option value="PNS/TNI/Polri" <?php if ($pekerjaan_ibu == "PNS/TNI/Polri") echo "selected"; ?>>PNS/TNI/Polri</option>
                                        <option value="Karyawan Swasta" <?php if ($pekerjaan_ibu == "Karyawan Swasta") echo "selected"; ?>>Karyawan Swasta</option>
                                        <option value="Pedagang Kecil" <?php if ($pekerjaan_ibu == "Pedagang Kecil") echo "selected"; ?>>Pedagang Kecil</option>
                                        <option value="Pedagang Besar" <?php if ($pekerjaan_ibu == "Pedagang Besar") echo "selected"; ?>>Pedagang Besar</option>
                                        <option value="Wiraswasta" <?php if ($pekerjaan_ibu == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                                        <option value="Wirausaha" <?php if ($pekerjaan_ibu == "Wirausaha") echo "selected"; ?>>Wirausaha</option>
                                        <option value="Buruh" <?php if ($pekerjaan_ibu == "Buruh") echo "selected"; ?>>Buruh</option>
                                        <option value="Pensiunan" <?php if ($pekerjaan_ibu == "Pensiunan") echo "selected"; ?>>Pensiunan</option>
                                        <option value="Lain-lain" <?php if ($pekerjaan_ibu == "Lain-lain") echo "selected"; ?>>Lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="penghasilan_ibu" class="col-sm-2 col-form-label">Penghasilan Bulanan</label>
                                <div class="col-sm-10">
                                    <select name="penghasilan_ibu" class="form-control <?php echo ($error_penghasilan_ibu != "" ? "is-invalid" : ""); ?>" id="penghasilan_ibu">
                                        <option value="Kurang dari Rp. 500.000" <?php if ($penghasilan_ibu == "Kurang dari Rp. 500.000") echo "selected"; ?>>Kurang dari Rp. 500.000</option>
                                        <option value="Rp. 500.000 - Rp. 999.999" <?php if ($penghasilan_ibu == "Rp. 500.000 - Rp. 999.999") echo "selected"; ?>>Rp. 500.000 - Rp. 999.999</option>
                                        <option value="Rp. 1.000.000 - Rp. 1.999.999" <?php if ($penghasilan_ibu == "Rp. 1.000.000 - Rp. 1.999.999") echo "selected"; ?>>Rp. 1.000.000 - Rp. 1.999.999</option>
                                        <option value="Rp. 2.000.000 - Rp. 4.999.999" <?php if ($penghasilan_ibu == "Rp. 2.000.000 - Rp. 4.999.999") echo "selected"; ?>>Rp. 2.000.000 - Rp. 4.999.999</option>
                                        <option value="Rp. 5.000.000 - Rp. 19.999.999" <?php if ($penghasilan_ibu == "Rp. 5.000.000 - Rp. 19.999.999") echo "selected"; ?>>Rp. 5.000.000 - Rp. 19.999.999</option>
                                        <option value="Lebih dari Rp. 20.000.000" <?php if ($penghasilan_ibu == "Lebih dari Rp. 20.000.000") echo "selected"; ?>>Lebih dari Rp. 20.000.000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="berkebutuhan_khusus_ibu" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
                                <div class="col-sm-10">
                                    <select name="berkebutuhan_khusus_ibu" class="form-control <?php echo ($error_berkebutuhan_khusus_ibu != "" ? "is-invalid" : ""); ?>" id="berkebutuhan_khusus_ibu">
                                        <option value="Tidak" <?php if ($berkebutuhan_khusus_ibu == "Tidak") echo "selected"; ?>>Tidak</option>
                                        <option value="Netra" <?php if ($berkebutuhan_khusus_ibu == "Netra") echo "selected"; ?>>Netra</option>
                                        <option value="Rungu" <?php if ($berkebutuhan_khusus_ibu == "Rungu") echo "selected"; ?>>Rungu</option>
                                        <option value="Grahita Ringan" <?php if ($berkebutuhan_khusus_ibu == "Grahita Ringan") echo "selected"; ?>>Grahita Ringan</option>
                                        <option value="Grahita Sedang" <?php if ($berkebutuhan_khusus_ibu == "Grahita Sedang") echo "selected"; ?>>Grahita Sedang</option>
                                        <option value="Daksa Ringan" <?php if ($berkebutuhan_khusus_ibu == "Daksa Ringan") echo "selected"; ?>>Daksa Ringan</option>
                                        <option value="Daksa Sedang" <?php if ($berkebutuhan_khusus_ibu == "Daksa Sedang") echo "selected"; ?>>Daksa Sedang</option>
                                        <option value="Laras" <?php if ($berkebutuhan_khusus_ibu == "Laras") echo "selected"; ?>>Laras</option>
                                        <option value="Wicara" <?php if ($berkebutuhan_khusus_ibu == "Wicara") echo "selected"; ?>>Wicara</option>
                                        <option value="Tuna Ganda" <?php if ($berkebutuhan_khusus_ibu == "Tuna Ganda") echo "selected"; ?>>Tuna Ganda</option>
                                        <option value="Hiper Aktif" <?php if ($berkebutuhan_khusus_ibu == "Hiper Aktif") echo "selected"; ?>>Hiper Aktif</option>
                                        <option value="Cerdas Istimewa" <?php if ($berkebutuhan_khusus_ibu == "Cerdas Istimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                                        <option value="Bakat Istimewa" <?php if ($berkebutuhan_khusus_ibu == "Bakat Istimewa") echo "selected"; ?>>Bakat Istimewa</option>
                                        <option value="Kesulitan Belajar" <?php if ($berkebutuhan_khusus_ibu == "Kesulitan Belajar") echo "selected"; ?>>Kesulitan Belajar</option>
                                        <option value="Narkoba" <?php if ($berkebutuhan_khusus_ibu == "Narkoba") echo "selected"; ?>>Narkoba</option>
                                        <option value="Indigo" <?php if ($berkebutuhan_khusus_ibu == "Indigo") echo "selected"; ?>>Indigo</option>
                                        <option value="Down Sindrome" <?php if ($berkebutuhan_khusus_ibu == "Down Sindrome") echo "selected"; ?>>Down Sindrome</option>
                                        <option value="Autis" <?php if ($berkebutuhan_khusus_ibu == "Autis") echo "selected"; ?>>Autis</option>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $error_berkebutuhan_khusus_ibu; ?></span>
                                </div>
                            </div>
                            <!-- Button Next dan Previous -->
                            <div class="form-group d-flex justify-content-between">
                                <div class="">
                                    <button class="btn btn-primary" type="button" id="prev4" onclick="changeFieldset(3,2)">Previous</button>
                                </div>
                                <div class="">
                                    <button class="btn btn-success" type="submit" id="submit">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function changeFieldset(currentFieldset, toFieldset) {
            document.getElementById("fieldset" + currentFieldset).style.display = "none";
            document.getElementById("fieldset" + toFieldset).style.display = "block";
        }
        $(document).ready(function() {
            $('input[name="penerima_kps"]').change(function() {
                if ($(this).val() == 'Ya') {
                    $('#no_kps').prop('disabled', false);
                } else {
                    $('#no_kps').prop('disabled', true);
                    $('#no_kps').val('');
                }
            });
        });
    </script>
</body>

</html>