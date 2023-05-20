<?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "root";
$db = "my_db";
$koneksi = mysqli_connect($host, $user, $pass, $db);

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1','No');
$sheet->setCellValue('B1','Jenis Pendaftaran');
$sheet->setCellValue('C1','Tanggal Masuk');
$sheet->setCellValue('D1','NIS');
$sheet->setCellValue('E1','No. Peserta');
$sheet->setCellValue('F1','Pernah PAUD');
$sheet->setCellValue('G1','Pernah TK');
$sheet->setCellValue('H1','No. SKHUN');
$sheet->setCellValue('I1','No. Ijazah');
$sheet->setCellValue('J1','Hobi');
$sheet->setCellValue('K1','Cita-cita');
$sheet->setCellValue('L1','Nama Lengkap');
$sheet->setCellValue('M1','Jenis Kelamin');
$sheet->setCellValue('N1','NISN');
$sheet->setCellValue('O1','NIK');
$sheet->setCellValue('P1','Tempat Lahir');
$sheet->setCellValue('Q1','Tanggal Lahir');
$sheet->setCellValue('R1','Agama');
$sheet->setCellValue('S1','Berkebutuhan Khusus');
$sheet->setCellValue('T1','Alamat');
$sheet->setCellValue('U1','RT');
$sheet->setCellValue('V1','RW');
$sheet->setCellValue('W1','Dusun');
$sheet->setCellValue('X1','Kelurahan/Desa');
$sheet->setCellValue('Y1','Kecamatan');
$sheet->setCellValue('Z1','Kode Pos');
$sheet->setCellValue('AA1','Tempat Tinggal');
$sheet->setCellValue('AB1','Transportasi');
$sheet->setCellValue('AC1','No. HP');
$sheet->setCellValue('AD1','No. Telepon');
$sheet->setCellValue('AE1','Email');
$sheet->setCellValue('AF1','Penerima KPS');
$sheet->setCellValue('AG1','No. KPS');
$sheet->setCellValue('AH1','Kewarganegaraan');
$sheet->setCellValue('AI1','Nama Ayah');
$sheet->setCellValue('AJ1','Tahun Lahir Ayah');
$sheet->setCellValue('AK1','Pendidikan Ayah');
$sheet->setCellValue('AL1','Pekerjaan Ayah');
$sheet->setCellValue('AM1','Penghasilan Ayah');
$sheet->setCellValue('AN1','Berkebutuhan Khusus Ayah');
$sheet->setCellValue('AO1','Nama Ibu');
$sheet->setCellValue('AP1','Tahun Lahir Ibu');
$sheet->setCellValue('AQ1','Pendidikan Ibu');
$sheet->setCellValue('AR1','Pekerjaan Ibu');
$sheet->setCellValue('AS1','Penghasilan Ibu');
$sheet->setCellValue('AT1','Berkebutuhan Khusus Ibu');

$query = mysqli_query($koneksi,"select * from ppdb");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query)){
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['jenis_pendaftaran']);
    $sheet->setCellValue('C'.$i, $row['tanggal_masuk']);
    $sheet->setCellValue('D'.$i, $row['nis']);
    $sheet->setCellValue('E'.$i, $row['nomor_peserta']);
    $sheet->setCellValue('F'.$i, $row['pernah_paud']);
    $sheet->setCellValue('G'.$i, $row['pernah_tk']);
    $sheet->setCellValue('H'.$i, $row['no_skhun']);
    $sheet->setCellValue('I'.$i, $row['no_ijazah']);
    $sheet->setCellValue('J'.$i, $row['hobi']);
    $sheet->setCellValue('K'.$i, $row['cita_cita']);
    $sheet->setCellValue('L'.$i, $row['nama']);
    $sheet->setCellValue('M'.$i, $row['jenis_kelamin']);
    $sheet->setCellValue('N'.$i, $row['nisn']);
    $sheet->setCellValue('O'.$i, $row['nik']);
    $sheet->setCellValue('P'.$i, $row['tempat_lahir']);
    $sheet->setCellValue('Q'.$i, $row['tanggal_lahir']);
    $sheet->setCellValue('R'.$i, $row['agama']);
    $sheet->setCellValue('S'.$i, $row['berkebutuhan_khusus']);
    $sheet->setCellValue('T'.$i, $row['alamat']);
    $sheet->setCellValue('U'.$i, $row['rt']);
    $sheet->setCellValue('V'.$i, $row['rw']);
    $sheet->setCellValue('W'.$i, $row['dusun']);
    $sheet->setCellValue('X'.$i, $row['desa']);
    $sheet->setCellValue('Y'.$i, $row['kecamatan']);
    $sheet->setCellValue('Z'.$i, $row['kode_pos']);
    $sheet->setCellValue('AA'.$i, $row['tempat_tinggal']);
    $sheet->setCellValue('AB'.$i, $row['transportasi']);
    $sheet->setCellValue('AC'.$i, $row['no_hp']);
    $sheet->setCellValue('AD'.$i, $row['no_telp']);
    $sheet->setCellValue('AE'.$i, $row['email']);
    $sheet->setCellValue('AF'.$i, $row['penerima_kps']);
    $sheet->setCellValue('AG'.$i, $row['no_kps']);
    $sheet->setCellValue('AH'.$i, $row['kewarganegaraan']);
    $sheet->setCellValue('AI'.$i, $row['nama_ayah']);
    $sheet->setCellValue('AJ'.$i, $row['tahun_lahir_ayah']);
    $sheet->setCellValue('AK'.$i, $row['pendidikan_ayah']);
    $sheet->setCellValue('AL'.$i, $row['pekerjaan_ayah']);
    $sheet->setCellValue('AM'.$i, $row['penghasilan_ayah']);
    $sheet->setCellValue('AN'.$i, $row['berkebutuhan_khusus_ayah']);
    $sheet->setCellValue('AO'.$i, $row['nama_ibu']);
    $sheet->setCellValue('AP'.$i, $row['tahun_lahir_ibu']);
    $sheet->setCellValue('AQ'.$i, $row['pendidikan_ibu']);
    $sheet->setCellValue('AR'.$i, $row['pekerjaan_ibu']);
    $sheet->setCellValue('AS'.$i, $row['penghasilan_ibu']);
    $sheet->setCellValue('AT'.$i, $row['berkebutuhan_khusus_ibu']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => 'FFFF0000'],
        ],
    ],
];

$i = $i - 1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa.xlsx');

header('Location: http://localhost/tugas/Pertemuan%208/formppdb.php');
echo "<script>alert('Data Berhasil di Export!');document.location='http://localhost/tugas/Pertemuan%208/formppdb.php'</script>";
exit;
?>