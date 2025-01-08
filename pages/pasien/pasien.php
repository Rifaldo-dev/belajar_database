<?php include("../../config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Klinik Sejahtera</title>
</head>

<body>
    <!-- Header untuk menampilkan judul halaman -->
    <header>
        <h3>List Data Pasien</h3>
    </header>

    <!-- Navigasi untuk menambah pasien baru -->
    <nav>
        <a href="route/daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <!-- Tabel untuk menampilkan data pasien -->
    <table border="1">
        <thead>
            <tr>
                <!-- Header tabel untuk masing-masing kolom -->
                <th>ID. Pasien</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>No. HP</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query SQL untuk mengambil data pasien dari database
            $sql = "SELECT * FROM pasien";

            // Menjalankan query
            $query = mysqli_query($db, $sql);

            // Looping untuk menampilkan data pasien satu per satu
            while ($pasien = mysqli_fetch_array($query)) {
                echo "<tr>";

                // Menampilkan data masing-masing pasien dalam bentuk baris tabel
                echo "<td>" . $pasien['id'] . "</td>";
                echo "<td>" . $pasien['nama_lengkap'] . "</td>";
                echo "<td>" . $pasien['alamat'] . "</td>";
                echo "<td>" . $pasien['tgl_lahir'] . "</td>";
                echo "<td>" . $pasien['jenis_kelamin'] . "</td>";
                echo "<td>" . $pasien['no_hp'] . "</td>";

                // Menambahkan link untuk edit dan hapus data pasien
                echo "<td>";
                echo "<a href='route/edit.php?id=" . $pasien['id'] . "'>Edit</a> | ";
                echo "<a href='route/hapus.php?id=" . $pasien['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Menampilkan jumlah total pasien -->
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>