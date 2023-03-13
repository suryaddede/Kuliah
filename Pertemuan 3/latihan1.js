// membuat fungsi convert yang akan dipanggil saat tombol Convert ditekan
function convert() {
    // mengambil nilai input dari user
    let nilai = document.getElementById("nilai").value;
    // membuat variabel kosong hasil
    let hasil;
    // melakukan pengecekan nilai dan memberikan huruf yang sesuai
    if (nilai >=0 && nilai <= 40) {
        hasil = "E";
    }
    else if (nilai > 40 && nilai <= 55) {
        hasil = "D";
    }
    else if (nilai > 55 && nilai <= 60) {
        hasil = "C";
    }
    else if (nilai > 60 && nilai <= 65) {
        hasil = "BC";
    }
    else if (nilai > 65 && nilai <= 70) {
        hasil = "B";
    }
    else if (nilai > 70 && nilai <= 80) {
        hasil = "AB";
    }
    else if (nilai > 80 && nilai <= 100) {
        hasil = "A";
    }
    // menangani nilai di luar jangkauan
    else {
        hasil = "tidak dalam jangkauan";
    }
    // menampilkan hasil konversi pada halaman
    document.getElementById("hasil").innerHTML = "Nilai Anda " + hasil;
}