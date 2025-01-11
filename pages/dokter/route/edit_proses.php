<?php

// Menghubungkan file konfigurasi untuk koneksi ke database
include("../../../config.php");

// Mengecek apakah tombol 'simpan' sudah diklik
if (isset($_POST['simpan'])) {

    // Mengambil data dari formulir yang dikirim dengan metode POST

    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $no_hp = $_POST['no_hp'];
    $spesialis = $_POST[];
    $waktu_kerja = "Need Implementation";

    // Membuat query untuk memperbarui data dokter di database
    $sql = "Need Implementation";

    // Menjalankan query untuk memperbarui data
    $query = "Need Implementation";

    // Mengecek apakah query berhasil dijalankan
    if ($query) {
        // Jika berhasil, alihkan pengguna ke halaman dokter.php dengan status sukses
        header('Location: ../dokter.php?status=sukses');
        exit;
    } else {
        // Jika gagal, alihkan pengguna ke halaman dokter.php dengan status gagal
        header('Location: ../dokter.php?status=gagal');
        exit;
    }
} else {
    // Jika formulir tidak dikirim melalui metode POST, tampilkan pesan akses dilarang
    die("Akses dilarang...");
}
