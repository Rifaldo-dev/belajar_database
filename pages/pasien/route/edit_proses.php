<?php

// Menghubungkan file konfigurasi untuk koneksi ke database
include("../../../config.php");

// Mengecek apakah tombol 'simpan' sudah diklik
if (isset($_POST['simpan'])) {

    // Mengambil data dari formulir yang dikirim dengan metode POST
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'] ;
    $no_hp = $_POST['no_hp'];

    // Membuat query untuk memperbarui data pasien di database
    $sql = "UPDATE pasien
     SET nama_lengkap='$nama', alamat='$alamat', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', no_hp='$no_hp' 
     WHERE id=$id";

    // Menjalankan query untuk memperbarui data
    $query = mysqli_query($db, $sql);

    // Mengecek apakah query berhasil dijalankan
    if ($query) {
        // Jika berhasil, alihkan pengguna ke halaman pasien.php dengan status sukses
        header('Location: ../pasien.php?status=sukses');
        exit;
    } else {
        // Jika gagal, alihkan pengguna ke halaman pasien.php dengan status gagal
        header('Location: ../pasien.php?status=gagal');
        exit;
    }
} else {
    // Jika formulir tidak dikirim melalui metode POST, tampilkan pesan akses dilarang
    die("Akses dilarang...");
}
