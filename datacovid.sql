-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2022 pada 17.37
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacovid`
--

CREATE TABLE `datacovid` (
  `wilayah` varchar(50) NOT NULL,
  `jml_positif` varchar(20) NOT NULL,
  `jml_dirawat` varchar(20) NOT NULL,
  `jml_sembuh` varchar(20) NOT NULL,
  `jml_meninggal` varchar(20) NOT NULL,
  `nama_operator` varchar(20) NOT NULL,
  `nim_mhs` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datacovid`
--

INSERT INTO `datacovid` (`wilayah`, `jml_positif`, `jml_dirawat`, `jml_sembuh`, `jml_meninggal`, `nama_operator`, `nim_mhs`) VALUES
('Banten', '291.435', '1.963', '286.545', '2.927', 'Putri Esa S', '181011402488');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
