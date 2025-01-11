<?php

// Menghubungkan ke file config untuk koneksi database
include("../../../config.php");

// Cek apakah ada ID pada query string
if (!isset($_GET['id'])) {
    // Jika tidak ada, alihkan ke halaman daftar dokter
    header('Location: ../dokter.php');
}

// Ambil ID dari query string
$id = $_GET['id'];

// Query untuk mengambil data dokter berdasarkan ID
$sql = "SELECT * FROM dokter WHERE id=$id ";
$query = mysqli_query(mysql: $db, query: $sql);

// Mengambil data dokter dalam bentuk array
$dokter = mysqli_fetch_assoc(result: $query);

// Jika data dokter tidak ditemukan, tampilkan pesan error
if (mysqli_num_rows(result: $query) < 1) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Klinik Sejahtera</title>
</head>

<body>
    <header>
        <!-- Judul Halaman Edit dokter -->
        <h3>Formulir Edit dokter</h3>
    </header>

    <!-- Formulir untuk mengedit data dokter -->
    <form action="edit_proses.php" method="POST">

        <fieldset>

            <!-- Input untuk ID dokter yang tersembunyi agar tidak bisa diubah -->
            <input type="hidden" name="id" value="<?php echo $dokter['id'] ?>" />

            <!-- Input untuk nama dokter -->
            <p>
                <label for="nama">Nama Lengkap: </label>
                <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $dokter['nama_lengkap'] ?>"
                    required />
            </p>

            <!-- Input untuk tanggal lahir dokter -->
            <p>
                <label for="tgl_lahir">Tanggal Lahir: </label>
                <input type="date" name="tgl_lahir" value="<?php echo $dokter['tgl_lahir'] ?>" required />
            </p>

            <!-- Input untuk nomor handphone dokter -->
            <p>
                <label for="no_hp">Nomor Handphone: </label>
                <input type="text" name="no_hp" placeholder="Nomor Handphone" value="<?php echo $dokter['no_hp'] ?>"
                    required />
            </p>

            <!-- Input untuk spesialis dokter -->
            <p>
                <label for="spesialis">Spesialis: </label>
                <input type="text" name="spesialis" placeholder="Spesialis" value="<?php echo $dokter['spesialis'] ?>"
                    required />
            </p>

            <!-- Input untuk waktu kerja dokter -->
            <p>
                <label for="waktu_kerja">Waktu Kerja: </label>
                <input type="text" name="waktu_kerja" placeholder="Waktu Kerja"
                    value="<?php echo $dokter['waktu_kerja'] ?>" required />
            </p>

            <!-- Tombol submit untuk menyimpan perubahan -->
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>

    </form>

</body>

</html>