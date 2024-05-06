<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecoscore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

$id_produk = $_GET['id'];

$sql = "DELETE FROM produk WHERE id = $id_produk";

if ($conn->query($sql) === TRUE) {
    echo "Produk berhasil dihapus";
    header('location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>