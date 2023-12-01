<?php
// Ganti nilai-nilai ini dengan kredensial basis data Anda yang sebenarnya
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lukman_sensor";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
