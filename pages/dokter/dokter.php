<?php include("../../config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Klinik Sejahtera</title>
</head>

<body>
    <header>
        <h3>List Data Dokter</h3>
    </header>

    <nav>
        <a href="route/daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>ID. Dokter</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>No. HP</th>
                <th>Spesialis</th>
                <th>Waktu Kerja</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM dokter";
            $query = mysqli_query($db, $sql);

            while ($dokter = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $dokter['id'] . "</td>";
                echo "<td>" . $dokter['nama_lengkap'] . "</td>";
                echo "<td>" . $dokter['tgl_lahir'] . "</td>";
                echo "<td>" . $dokter['no_hp'] . "</td>";
                echo "<td>" . $dokter['spesialis'] . "</td>";
                echo "<td>" . $dokter['waktu_kerja'] . "</td>";

                echo "<td>";
                echo "<a href='route/edit.php?id=" . $dokter['id'] . "'>Edit</a> | ";
                echo "<a href='route/hapus.php?id=" . $dokter['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>