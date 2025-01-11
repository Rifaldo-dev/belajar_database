<?php

// Menghubungkan ke file config untuk koneksi database
include("../../../config.php");

// Cek apakah ada ID pada query string
if (!isset($_GET['id'])) {
    // Jika tidak ada, alihkan ke halaman daftar pasien
    header('Location: ../pasien.php');
}

// Ambil ID dari query string
$id = $_GET['id'];

// Query untuk mengambil data pasien berdasarkan ID
$sql = "SELECT * FROM pasien WHERE id=$id ";
$query = mysqli_query(mysql: $db, query: $sql);

// Mengambil data pasien dalam bentuk array
$pasien = mysqli_fetch_assoc(result: $query);

// Jika data pasien tidak ditemukan, tampilkan pesan error
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
        <!-- Judul Halaman Edit Pasien -->
        <h3>Formulir Edit Pasien</h3>
    </header>

    <!-- Formulir untuk mengedit data pasien -->
    <form action="edit_proses.php" method="POST">

        <fieldset>

            <!-- Input untuk ID pasien yang tersembunyi agar tidak bisa diubah -->
            <input type="hidden" name="id" value="<?php echo $pasien['id'] ?>" />

            <!-- Input untuk nama pasien -->
            <p>
                <label for="nama">Nama Lengkap: </label>
                <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $pasien['nama_lengkap'] ?>"
                    required />
            </p>

            <!-- Textarea untuk alamat pasien -->
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" required><?php echo $pasien['alamat'] ?></textarea>
            </p>

            <!-- Input untuk tanggal lahir pasien -->
            <p>
                <label for="tgl_lahir">Tanggal Lahir: </label>
                <input type="date" name="tgl_lahir" value="<?php echo $pasien['tgl_lahir'] ?>" required />
            </p>

            <!-- Radio buttons untuk memilih jenis kelamin -->
    
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <?php $jk = $pasien['jenis_kelamin']; ?>
                <!-- Laki-laki -->
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki"
                        <?php echo ($jk == 'Laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                <!-- Perempuan -->
                <label><input type="radio" name="jenis_kelamin" value="Perempuan"
                        <?php echo ($jk == 'Perempuan') ? "checked" : "" ?>> Perempuan</label>
            </p>

            <!-- Input untuk nomor handphone pasien -->
            <p>
                <label for="no_hp">Nomor Handphone: </label>
                <input type="text" name="no_hp" placeholder="Nomor Handphone" value="<?php echo $pasien['no_hp'] ?>"
                    required />
            </p>

            <!-- Tombol submit untuk menyimpan perubahan -->
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>

    </form>

</body>

</html>