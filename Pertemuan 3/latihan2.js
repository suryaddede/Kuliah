function tambah() {
    let bil1 = document.getElementById("bil1").value;
    let bil2 = document.getElementById("bil2").value;
    document.getElementById("hasil").innerHTML = parseFloat(bil1)+parseFloat(bil2);
}
function kurang() {
    let bil1 = document.getElementById("bil1").value;
    let bil2 = document.getElementById("bil2").value;
    document.getElementById("hasil").innerHTML = parseFloat(bil1)-parseFloat(bil2);
}
function kali() {
    let bil1 = document.getElementById("bil1").value;
    let bil2 = document.getElementById("bil2").value;
    document.getElementById("hasil").innerHTML = parseFloat(bil1)*parseFloat(bil2);
}
function bagi() {
    let bil1 = document.getElementById("bil1").value;
    let bil2 = document.getElementById("bil2").value;
    document.getElementById("hasil").innerHTML = parseFloat(bil1)/parseFloat(bil2);
}