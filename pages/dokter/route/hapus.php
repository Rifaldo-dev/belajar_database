<?php

// Menyertakan file konfigurasi untuk koneksi ke database
include("../../../config.php");

// Mengecek apakah parameter 'id' terdapat dalam URL
if (isset($_GET['id'])) {

    // Mengambil nilai 'id' dari query string
    $id = $_GET['id'];

    // Membuat query untuk menghapus data dokter berdasarkan id
    $sql = "Need Implementation";
    // Menjalankan query
    $query = "Need Implementation";

    // Mengecek apakah query berhasil dieksekusi
    if ($query) {
        // Jika berhasil, mengarahkan pengguna kembali ke halaman daftar dokter
        header('Location: ../dokter.php');
    } else {
        // Jika gagal, menampilkan pesan error
        die("gagal menghapus...");
    }
} else {
    // Jika parameter 'id' tidak ditemukan, menampilkan pesan error
    die("akses dilarang...");
}
