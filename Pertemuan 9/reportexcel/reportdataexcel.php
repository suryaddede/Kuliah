<?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "root";
$db = "db_siswa";
$koneksi = mysqli_connect($host, $user, $pass, $db);

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1','No');
$sheet->setCellValue('B1','Nama');
$sheet->setCellValue('C1','Kelas');
$sheet->setCellValue('D1','Alamat');

$query = mysqli_query($koneksi,"select * from tb_siswa");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query)){
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['nama']);
    $sheet->setCellValue('C'.$i, $row['kelas']);
    $sheet->setCellValue('D'.$i, $row['alamat']);
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
?>