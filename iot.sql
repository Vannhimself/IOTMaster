-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2021 pada 09.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrol`
--

CREATE TABLE `kontrol` (
  `id_device` varchar(20) NOT NULL,
  `nama_device` varchar(20) NOT NULL,
  `status_device` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontrol`
--

INSERT INTO `kontrol` (`id_device`, `nama_device`, `status_device`) VALUES
('L1', 'Lampu Gudang', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitoring`
--

CREATE TABLE `monitoring` (
  `idSensor` varchar(10) NOT NULL,
  `nama_sensor` varchar(20) NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `monitoring`
--

INSERT INTO `monitoring` (`idSensor`, `nama_sensor`, `nilai`, `waktu`) VALUES
('S1', 'Sensor HC-SR04', 70, '2021-04-14 07:00:19'),
('S2', 'Sensor DHT11', 26, '2021-04-14 07:00:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontrol`
--
ALTER TABLE `kontrol`
  ADD PRIMARY KEY (`id_device`);

--
-- Indeks untuk tabel `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`idSensor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
