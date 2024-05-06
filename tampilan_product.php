<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecoscore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);

$data_produk = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data_produk[] = $row;
    }
    echo json_encode($data_produk);
} else {
    echo "0 results";
}
$conn->close();
?>