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

// Dapatkan input pengguna dari formulir pendaftaran
$username = $_POST['form-username'];
$password = $_POST['form-password'];

// Lakukan kueri SQL untuk menyimpan pengguna baru ke dalam tabel (ganti 'users' dan 'password' dengan tabel dan kolom Anda yang sebenarnya)
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    // Pendaftaran berhasil, redirect ke halaman login atau lakukan tindakan tambahan
    header("Location: login.php");
} else {
    // Pendaftaran gagal, redirect kembali ke halaman pendaftaran dengan pesan kesalahan
    header("Location: register.php?error=1");
}

$conn->close();
?>
