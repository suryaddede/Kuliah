function tambah() {
    // Mendapatkan nilai dari input dengan id "bil1"
    let bil1 = document.getElementById("bil1").value;
    // Mendapatkan nilai dari input dengan id "bil2"
    let bil2 = document.getElementById("bil2").value;
    // Menampilkan hasil penjumlahan dari kedua bilangan
    document.getElementById("hasil").innerHTML = parseFloat(bil1)+parseFloat(bil2);
}

function kurang() {
    // Mendapatkan nilai dari input dengan id "bil1"
    let bil1 = document.getElementById("bil1").value;
    // Mendapatkan nilai dari input dengan id "bil2"
    let bil2 = document.getElementById("bil2").value;
    // Menampilkan hasil pengurangan dari kedua bilangan
    document.getElementById("hasil").innerHTML = parseFloat(bil1)-parseFloat(bil2);
}

function kali() {
    // Mendapatkan nilai dari input dengan id "bil1"
    let bil1 = document.getElementById("bil1").value;
    // Mendapatkan nilai dari input dengan id "bil2"
    let bil2 = document.getElementById("bil2").value;
    // Menampilkan hasil perkalian dari kedua bilangan
    document.getElementById("hasil").innerHTML = parseFloat(bil1)*parseFloat(bil2);
}

function bagi() {
    // Mendapatkan nilai dari input dengan id "bil1"
    let bil1 = document.getElementById("bil1").value;
    // Mendapatkan nilai dari input dengan id "bil2"
    let bil2 = document.getElementById("bil2").value;
    // Menampilkan hasil pembagian dari kedua bilangan
    document.getElementById("hasil").innerHTML = parseFloat(bil1)/parseFloat(bil2);
}