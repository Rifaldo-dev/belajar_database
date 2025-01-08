<?php

// Menyertakan file konfigurasi untuk koneksi ke database
include("../../../config.php");

// Mengecek apakah tombol "daftar" sudah diklik atau belum
if (isset($_POST['daftar'])) {

    // Mengambil data dari formulir yang dikirim melalui metode POST
    $nama = "Need Implementation";
    $jenis_kelamin = "Need Implementation";
    $tgl_lahir = "Need Implementation";

    // Membuat query SQL untuk menyimpan data administrator ke dalam tabel administrator
    $sql = "Need Implementation";

    // Mengeksekusi query SQL ke database
    $query = "Need Implementation";

    // Mengecek apakah query berhasil dieksekusi
    if ($query) {
        // Jika berhasil, alihkan ke halaman administrator.php dengan parameter status=sukses
        header('Location: ../admin.php?status=sukses');
        exit;
    } else {
        // Jika gagal, alihkan ke halaman administrator.php dengan parameter status=gagal
        header('Location: ../admin.php?status=gagal');
        exit;
    }
} else {
    // Jika tidak ada permintaan POST atau tombol daftar tidak diklik, tampilkan pesan akses dilarang
    die("Akses dilarang...");
}
