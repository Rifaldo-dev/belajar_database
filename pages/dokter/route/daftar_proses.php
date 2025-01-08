<?php

// Menyertakan file konfigurasi untuk koneksi ke database
include("../../../config.php");

// Mengecek apakah tombol "daftar" sudah diklik atau belum
if (isset($_POST['daftar'])) {

    // Mengambil data dari formulir yang dikirim melalui metode POST
    $nama = "Need Implementation";
    $tgl_lahir = "Need Implementation";
    $no_hp = "Need Implementation";
    $spesialis = "Need Implementation";
    $waktu_kerja = "Need Implementation";

    // Membuat query SQL untuk menyimpan data dokter ke dalam tabel dokter
    $sql = "Need Implementation";

    // Mengeksekusi query SQL ke database
    $query = "Need Implementation";

    // Mengecek apakah query berhasil dieksekusi
    if ($query) {
        // Jika berhasil, alihkan ke halaman dokter.php dengan parameter status=sukses
        header('Location: ../dokter.php?status=sukses');
    } else {
        // Jika gagal, alihkan ke halaman dokter.php dengan parameter status=gagal
        header('Location: ../dokter.php?status=gagal');
    }
} else {
    // Jika tidak ada permintaan POST atau tombol daftar tidak diklik, tampilkan pesan akses dilarang
    die("Akses dilarang...");
}
