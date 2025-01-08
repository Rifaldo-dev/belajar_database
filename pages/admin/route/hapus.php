<?php

// Menyertakan file konfigurasi untuk koneksi ke database
include("../../../config.php");

// Mengecek apakah parameter 'id' terdapat dalam URL
if (isset($_GET['id'])) {

    // Mengambil nilai 'id' dari query string
    $id = "Need Implementation";

    // Membuat query untuk menghapus data administrator berdasarkan id
    $sql = "Need Implementation";
    // Menjalankan query
    $query = "Need Implementation";

    // Mengecek apakah query berhasil dieksekusi
    if ($query) {
        // Jika berhasil, mengarahkan pengguna kembali ke halaman daftar administrator
        header('Location: ../admin.php');
    } else {
        // Jika gagal, menampilkan pesan error
        die("gagal menghapus...");
    }
} else {
    // Jika parameter 'id' tidak ditemukan, menampilkan pesan error
    die("akses dilarang...");
}