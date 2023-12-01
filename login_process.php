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

// Dapatkan input pengguna dari formulir
$username = $_POST['form-username'];
$password = $_POST['form-password'];

// Lakukan kueri SQL untuk memeriksa kredensial pengguna (ganti 'users' dan 'password' dengan tabel dan kolom Anda yang sebenarnya)
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Pengguna terautentikasi, redirect ke halaman selamat datang atau lakukan tindakan tambahan
    header("Location: welcome.php");
} else {
    // Autentikasi gagal, redirect kembali ke halaman login dengan pesan kesalahan
    header("Location: logineror1.php");
}

$conn->close();
?>