<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Dashbord Rumah Bibit</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        /* Gaya khusus sesuai kebutuhan */
        body {
            background-image: url('https://mdbootstrap.com/img/Photos/new-templates/tables/img2.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            margin-top: 20px;
        }

        th,
        td {
            text-align: left;
        }

        form {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    // Sertakan file koneksi
    include 'koneksi_tabel.php';

    // Lakukan kueri SQL untuk mendapatkan data dari tabel (ganti 'sensor_data' dengan nama tabel yang sebenarnya)
    $sql = "SELECT * FROM sensor_data";
    $result = $conn->query($sql);
    ?>
 
    <div class="container">
        <a href="index.html"><img src="assets/img/keluar.png" align="right" alt="Logo Lukman Sensor" class="logo"></a>
        <h1 class="mt-4">Halaman Dashbord Rumah Bibit</h1> 

        <!-- Formulir untuk memasukkan data baru -->
        <form action="insert_data.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="besaran">Besaran:</label>
                    <input type="text" name="besaran" class="form-control" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nilai">Nilai:</label>
                    <input type="number" name="nilai" step="0.01" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>

        <!-- Tabel untuk menampilkan data -->
        <table class="table mt-4 table-dark">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Besaran</th>
                    <th>Nilai</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterasi melalui hasil kueri dan tampilkan data dalam tabel
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nomor"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["besaran"] . "</td>";
                        echo "<td>" . $row["nilai"] . "</td>";
                        echo "<td>" . $row["tanggal"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    // Tutup koneksi
    $conn->close();
    ?>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
