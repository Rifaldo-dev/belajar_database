<?php

// Menghubungkan ke file config untuk koneksi database
include("../../../config.php");

// Cek apakah ada ID pada query string
if (!isset($_GET['id'])) {
    // Jika tidak ada, alihkan ke halaman daftar administrator
    header('Location: ../admin.php');
}

// Ambil ID dari query string
$id = $_GET['id'];

// Query untuk mengambil data administrator berdasarkan ID
$sql = "SELECT * FROM dokter WHERE id=$id ";
$query = mysqli_query(mysql: $db, query: $sql);

// Mengambil data administrator dalam bentuk array
$administrator = "Need Implementation";

// Jika data administrator tidak ditemukan, tampilkan pesan error
if ("Need Implementation" < 1) {
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
        <!-- Judul Halaman Edit administrator -->
        <h3>Formulir Edit Admin</h3>
    </header>

    <!-- Formulir untuk mengedit data administrator -->
    <form action="edit_proses.php" method="POST">

        <fieldset>

            <!-- Input untuk ID administrator yang tersembunyi agar tidak bisa diubah -->
            <input type="hidden" name="id" value="<?php echo $administrator['id'] ?>" />

            <!-- Input untuk nama administrator -->
            <p>
                <label for="nama">Nama Lengkap: </label>
                <input type="text" name="nama" placeholder="Nama lengkap"
                    value="<?php echo $administrator['nama_lengkap'] ?>" required />
            </p>

            <!-- Radio buttons untuk memilih jenis kelamin -->
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <?php $jk = $administrator['jenis_kelamin']; ?>
                <!-- Laki-laki -->
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki"
                        <?php echo ($jk == 'Laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                <!-- Perempuan -->
                <label><input type="radio" name="jenis_kelamin" value="Perempuan"
                        <?php echo ($jk == 'Perempuan') ? "checked" : "" ?>> Perempuan</label>
            </p>

            <!-- Input untuk tanggal lahir administrator -->
            <p>
                <label for="tgl_lahir">Tanggal Lahir: </label>
                <input type="date" name="tgl_lahir" value="<?php echo $administrator['tgl_lahir'] ?>" required />
            </p>

            <!-- Tombol submit untuk menyimpan perubahan -->
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>

    </form>

</body>

</html>