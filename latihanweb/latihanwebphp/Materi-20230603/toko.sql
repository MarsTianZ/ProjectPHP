-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 06.11
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kodebr` varchar(15) NOT NULL,
  `namabr` varchar(50) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `hargabeli` double NOT NULL,
  `hargajual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kodebr`, `namabr`, `satuan`, `hargabeli`, `hargajual`) VALUES
('m001', 'cpu x', 'pcs', 2000, 3000),
('m002', 'ram x', 'pcs ', 2000, 5000),
('m003', 'vga x', 'pcs ', 4000, 5000),
('m004', 'nm', 'pcs', 100, 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpermintaan`
--

CREATE TABLE `detailpermintaan` (
  `kodeper` varchar(20) NOT NULL,
  `kodebr` varchar(15) NOT NULL,
  `hargajual` double NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detailpermintaan`
--

INSERT INTO `detailpermintaan` (`kodeper`, `kodebr`, `hargajual`, `jumlah`) VALUES
('20230529055001', 'm001', 3000, 1),
('20230529055001', 'm004', 200, 1),
('20230529055508', 'm001', 3000, 1),
('20230529055508', 'm002', 5000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `masterpermintaan`
--

CREATE TABLE `masterpermintaan` (
  `kodeper` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `konsumen` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `kodekr` varchar(20) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masterpermintaan`
--

INSERT INTO `masterpermintaan` (`kodeper`, `tanggal`, `konsumen`, `telp`, `alamat`, `keterangan`, `kodekr`, `total`) VALUES
('20230529055508', '2023-05-29', '', '081', 'sby', 'ok', '1', 8000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kodebr`);

--
-- Indeks untuk tabel `detailpermintaan`
--
ALTER TABLE `detailpermintaan`
  ADD PRIMARY KEY (`kodeper`,`kodebr`);

--
-- Indeks untuk tabel `masterpermintaan`
--
ALTER TABLE `masterpermintaan`
  ADD PRIMARY KEY (`kodeper`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
