<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecoscore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$deskripsi_produk = $_POST['deskripsi_produk'];
$kandungan = $_POST['kandungan'];
$gambar = $_FILES['gambar']['name'];
$gambar_temp = $_FILES['gambar']['tmp_name'];
$gambar_path = "uploads/" . $gambar;


move_uploaded_file($gambar_temp, $gambar_path);

$sql = "INSERT INTO produk (nama, jenis, deskripsi_produk, gambar, kandungan) VALUES ('$nama', '$jenis', '$deskripsi_produk', '$gambar_path', '$kandungan')";

if ($conn->query($sql) === TRUE) {
    echo "Produk berhasil ditambahkan";
    header('location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
