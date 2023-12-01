<?php
// Sertakan file koneksi
include 'koneksi.php';

// Periksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dapatkan nilai dari formulir
    $nama = $_POST['nama'];
    $besaran = $_POST['besaran'];
    $nilai = $_POST['nilai'];
    $tanggal = $_POST['tanggal'];

    // Lakukan kueri SQL untuk menyisipkan data baru ke dalam tabel
    $insertQuery = "INSERT INTO sensor_data (nama, besaran, nilai, tanggal) VALUES ('$nama', '$besaran', $nilai, '$tanggal')";

    if ($conn->query($insertQuery) === TRUE) {
        // Redirect kembali ke halaman welcome.php setelah penyisipan berhasil
        header("Location: welcome.php");
    } else {
        // Redirect dengan pesan kesalahan jika penyisipan gagal
        header("Location: welcome.php?error=2");
    }
} else {
    // Redirect kembali ke halaman welcome.php jika formulir tidak dikirimkan
    header("Location: welcome.php");
}

// Tutup koneksi
$conn->close();
?>
