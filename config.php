<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "klinik";
$port = 3306;

$db = mysqli_connect($server, $user, $password, $nama_database, $port);

if (!$db) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
