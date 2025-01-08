-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 03:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";

--
-- Database: `klinik`
CREATE DATABASE IF NOT EXISTS klinik;
USE klinik;
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `administrator` (`id`, `nama_lengkap`, `jenis_kelamin`, `tgl_lahir`) VALUES
(1001, 'Agus Pratama', 'Laki-laki', '1985-07-15'),
(1002, 'Rina Setiawati', 'Perempuan', '1990-03-22'),
(1003, 'Dedi Kurniawan', 'Laki-laki', '1987-11-10'),
(1004, 'Siti Aminah', 'Perempuan', '1995-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `spesialis` varchar(25) DEFAULT NULL,
  `waktu_kerja` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `dokter` (`nama_lengkap`, `tgl_lahir`, `no_hp`, `spesialis`, `waktu_kerja`) VALUES
('Dr. Andi Prasetyo', '1980-06-12', '081234567890', 'Bedah Umum', 'Senin - Jumat, 08:00 - 16:00'),
('Dr. Rina Lestari', '1978-08-25', '082345678901', 'Gigi dan Mulut', 'Senin - Sabtu, 09:00 - 14:00'),
('Dr. Ahmad Fauzi', '1985-02-15', '083456789012', 'Kardiologi', 'Senin - Jumat, 07:00 - 15:00'),
('Dr. Maria Juliana', '1992-04-20', '084567890123', 'Kebidanan dan Kandungan', 'Senin - Jumat, 10:00 - 18:00'),
('Dr. Hendri Santoso', '1983-09-10', '085678901234', 'Pediatri', 'Senin - Sabtu, 08:00 - 14:00');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pasien` (`nama_lengkap`, `alamat`, `tgl_lahir`, `jenis_kelamin`, `no_hp`) VALUES
('Anisa Rahma', 'Jl. Merdeka No. 10, Bandung', '1995-03-12', 'Perempuan', '081212345678'),
('Budi Santoso', 'Jl. Jendral Sudirman No. 25, Jakarta', '1988-07-25', 'Laki-laki', '082212345678'),
('Citra Dewi', 'Jl. Pahlawan No. 30, Surabaya', '1992-11-05', 'Perempuan', '083312345678'),
('Dedi Irawan', 'Jl. Diponegoro No. 45, Medan', '1990-06-18', 'Laki-laki', '084412345678'),
('Eka Pratama', 'Jl. Ahmad Yani No. 50, Yogyakarta', '1994-09-20', 'Laki-laki', '085512345678'),
('Farah Salsabila', 'Jl. Gatot Subroto No. 12, Semarang', '1996-01-08', 'Perempuan', '086612345678');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pasien_dokter`
--

CREATE TABLE `daftar_pasien_dokter` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_dokter` int(20) NOT NULL,
  `id_pasien` int(20) NOT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_dokter`) REFERENCES `dokter`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`id_pasien`) REFERENCES `pasien`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `daftar_pasien_dokter` (`id_dokter`, `id_pasien`, `tanggal_daftar`) VALUES
(1, 1, '2023-03-15'),
(1, 2, '2023-04-10'),
(2, 3, '2023-05-07'),
(3, 4, '2023-06-20'),
(3, 5, '2023-07-05'),
(4, 6, '2023-08-30');

-- --------------------------------------------------------

--
-- View structure
--

CREATE VIEW `view_daftar_pasien_dokter` AS
SELECT 
d.nama_lengkap AS nama_dokter, 
d.no_hp AS no_hp_dokter,
d.spesialis,
d.waktu_kerja,
p.nama_lengkap AS nama_pasien,
p.alamat,
p.no_hp AS no_hp_pasien,
dpd.tanggal_daftar 
FROM daftar_pasien_dokter dpd 
JOIN dokter d ON dpd.id_dokter = d.id 
JOIN pasien p ON dpd.id_pasien = p.id;