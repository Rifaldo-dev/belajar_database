<?php

// Menyertakan file konfigurasi untuk koneksi ke database
include("../../../config.php");

// Mengecek apakah tombol "daftar" sudah diklik atau belum
if (isset($_POST['daftar'])) {

    // Mengambil data dari formulir yang dikirim melalui metode POST
    $nama = $_POST  ['nama'];
    $alamat = $_POST ['alamat'];
    $tgl_lahir = $_POST ['tgl_lahir'];
    $jenis_kelamin = $_POST ['jenis_kelamin'] ;
    $no_hp = $_POST ['no_hp'];

    // Membuat query SQL untuk menyimpan data pasien ke dalam tabel pasien
    $sql =  "INSERT INTO pasien ( nama_lengkap,  alamat, tgl_lahir, jenis_kelamin, no_hp)
     VALUES ('$nama','$alamat','$tgl_lahir','$jenis_kelamin','$no_hp')";


    // Mengeksekusi query SQL ke database
   $query = mysqli_query($db,$sql);

    // Mengecek apakah query berhasil dieksekusi
    if ($query) {
        // Jika berhasil, alihkan ke halaman pasien.php dengan parameter status=sukses
        header('Location: ../pasien.php?status=sukses');
        exit;
    } else {
        // Jika gagal, alihkan ke halaman pasien.php dengan parameter status=gagal
        header('Location: ../pasien.php?status=gagal');
        exit;
    }
} else {
    // Jika tidak ada permintaan POST atau tombol daftar tidak diklik, tampilkan pesan akses dilarang
    die("Akses dilarang...");
}
