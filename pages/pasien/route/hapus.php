<?php

// Menyertakan file konfigurasi untuk koneksi ke database
include("../../../config.php");

// Mengecek apakah parameter 'id' terdapat dalam URL
if (isset($_GET['id'])) {

    // Mengambil nilai 'id' dari query string
    $id = $_GET ['id'];

    // Membuat query untuk menghapus data pasien berdasarkan id
    $sql =" DELETE FROM pasien WHERE id = '$id' ";
    // Menjalankan query
    $query = mysqli_query( $db,$sql);

    // Mengecek apakah query berhasil dieksekusi
    if ($query) {
        // Jika berhasil, mengarahkan pengguna kembali ke halaman daftar pasien
        header('Location: ../pasien.php');
    } else {
        // Jika gagal, menampilkan pesan error
        die("gagal menghapus...");
    }
} else {
    // Jika parameter 'id' tidak ditemukan, menampilkan pesan error
    die("akses dilarang...");
}
