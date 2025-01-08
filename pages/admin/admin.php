<?php include("../../config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Klinik Sejahtera</title>
</head>

<body>
    <header>
        <h3>List Data Administrator</h3>
    </header>

    <nav>
        <a href="route/daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>ID. Admin</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM administrator";
            $query = mysqli_query($db, $sql);

            while ($administrator = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $administrator['id'] . "</td>";
                echo "<td>" . $administrator['nama_lengkap'] . "</td>";
                echo "<td>" . $administrator['jenis_kelamin'] . "</td>";
                echo "<td>" . $administrator['tgl_lahir'] . "</td>";

                echo "<td>";
                echo "<a href='route/edit.php?id=" . $administrator['id'] . "'>Edit</a> | ";
                echo "<a href='route/hapus.php?id=" . $administrator['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>