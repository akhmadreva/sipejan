-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2021 pada 04.58
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hujan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hujan`
--

CREATE TABLE `data_hujan` (
  `id` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `lima_mnt` decimal(4,2) NOT NULL,
  `sepuluh_mnt` decimal(4,2) NOT NULL,
  `limabelas_mnt` decimal(4,2) NOT NULL,
  `tigapuluh_mnt` decimal(4,2) NOT NULL,
  `empatlima_mnt` decimal(4,2) NOT NULL,
  `enampuluh_mnt` decimal(4,2) NOT NULL,
  `seratusduapuluh` decimal(4,2) NOT NULL,
  `tiga_jm` decimal(4,2) NOT NULL,
  `enam_jm` decimal(4,2) NOT NULL,
  `duabelas_jm` decimal(4,2) NOT NULL,
  `tujuh` decimal(4,2) NOT NULL,
  `delapan` decimal(4,2) NOT NULL,
  `sembilan` decimal(4,2) NOT NULL,
  `sepuluh` decimal(4,2) NOT NULL,
  `sebelas` decimal(4,2) NOT NULL,
  `duabelas` decimal(4,2) NOT NULL,
  `tigabelas` decimal(4,2) NOT NULL,
  `empatbelas` decimal(4,2) NOT NULL,
  `limabelas` decimal(4,2) NOT NULL,
  `enambelas` decimal(4,2) NOT NULL,
  `tujuhbelas` decimal(4,2) NOT NULL,
  `delapanbelas` decimal(4,2) NOT NULL,
  `sembilanbelas` decimal(4,2) NOT NULL,
  `duapuluh` decimal(4,2) NOT NULL,
  `duasatu` decimal(4,2) NOT NULL,
  `duadua` decimal(4,2) NOT NULL,
  `duatiga` decimal(4,2) NOT NULL,
  `duaempat` decimal(4,2) NOT NULL,
  `satu` decimal(4,2) NOT NULL,
  `dua` decimal(4,2) NOT NULL,
  `tiga` decimal(4,2) NOT NULL,
  `empat` decimal(4,2) NOT NULL,
  `lima` decimal(4,2) NOT NULL,
  `enam` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_hujan`
--

INSERT INTO `data_hujan` (`id`, `tanggal`, `lima_mnt`, `sepuluh_mnt`, `limabelas_mnt`, `tigapuluh_mnt`, `empatlima_mnt`, `enampuluh_mnt`, `seratusduapuluh`, `tiga_jm`, `enam_jm`, `duabelas_jm`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duasatu`, `duadua`, `duatiga`, `duaempat`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`) VALUES
(1, '2021-02-12', '1.50', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(2, '2021-02-13', '1.20', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(3, '2021-02-01', '0.30', '0.50', '0.60', '1.00', '1.20', '1.50', '2.80', '3.20', '3.30', '3.30', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.30', '1.30', '0.40', '0.30', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(4, '2021-02-19', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.50', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.50', '1.70', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hujan`
--

CREATE TABLE `hujan` (
  `id` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `lima` decimal(4,2) NOT NULL,
  `sepuluh` decimal(4,2) NOT NULL,
  `limabelas` decimal(4,2) NOT NULL,
  `tigapuluh` decimal(4,2) NOT NULL,
  `empatlima` decimal(4,2) NOT NULL,
  `enampuluh` decimal(4,2) NOT NULL,
  `seratusduapuluh` decimal(4,2) NOT NULL,
  `tigajam` decimal(4,2) NOT NULL,
  `enamjam` decimal(4,2) NOT NULL,
  `duabelasjam` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hujan`
--

INSERT INTO `hujan` (`id`, `tanggal`, `lima`, `sepuluh`, `limabelas`, `tigapuluh`, `empatlima`, `enampuluh`, `seratusduapuluh`, `tigajam`, `enamjam`, `duabelasjam`) VALUES
(1, '0000-00-00', '1.20', '0.30', '0.50', '0.10', '1.10', '1.50', '0.50', '2.00', '3.00', '3.30'),
(2, '0000-00-00', '1.20', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(3, '2021-02-23', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(4, '2021-02-05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(5, '2021-02-05', '1.20', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(6, '2021-02-06', '0.00', '0.00', '0.00', '0.00', '0.50', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hujanperjam`
--

CREATE TABLE `hujanperjam` (
  `id` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `tujuh` decimal(4,2) NOT NULL,
  `delapan` decimal(4,2) NOT NULL,
  `sembilan` decimal(4,2) NOT NULL,
  `sepuluh` decimal(4,2) NOT NULL,
  `sebelas` decimal(4,2) NOT NULL,
  `duabelas` decimal(4,2) NOT NULL,
  `tigabelas` decimal(4,2) NOT NULL,
  `empatbelas` decimal(4,2) NOT NULL,
  `limabelas` decimal(4,2) NOT NULL,
  `enambelas` decimal(4,2) NOT NULL,
  `tujuhbelas` decimal(4,2) NOT NULL,
  `delapanbelas` decimal(4,2) NOT NULL,
  `sembilanbelas` decimal(2,2) NOT NULL,
  `duapuluh` decimal(4,2) NOT NULL,
  `duasatu` decimal(4,2) NOT NULL,
  `duadua` decimal(4,2) NOT NULL,
  `duatiga` decimal(4,2) NOT NULL,
  `duaempat` decimal(4,2) NOT NULL,
  `satu` decimal(4,2) NOT NULL,
  `dua` decimal(4,2) NOT NULL,
  `tiga` decimal(4,2) NOT NULL,
  `empat` decimal(4,2) NOT NULL,
  `lima` decimal(4,2) NOT NULL,
  `enam` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hujanperjam`
--

INSERT INTO `hujanperjam` (`id`, `tanggal`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duasatu`, `duadua`, `duatiga`, `duaempat`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`) VALUES
(1, '2021-02-23', '1.30', '0.50', '3.00', '4.00', '1.30', '2.10', '3.10', '0.30', '0.50', '0.60', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(2, '2021-02-24', '0.40', '0.50', '0.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(3, '2021-02-09', '0.40', '0.50', '0.40', '0.50', '1.40', '1.50', '0.20', '0.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(4, '2021-02-10', '0.40', '0.50', '0.40', '0.50', '1.40', '1.50', '0.20', '0.40', '0.30', '2.10', '1.50', '1.50', '0.00', '1.70', '3.20', '3.30', '2.00', '2.10', '1.30', '1.20', '2.10', '1.40', '1.20', '2.30'),
(5, '2021-02-24', '1.20', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(6, '2021-02-05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.50', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(7, '2021-02-04', '0.00', '0.00', '0.00', '0.00', '1.40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(8, '2021-02-05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(9, '2021-02-05', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `nip` bigint(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nip`, `nama`, `jabatan`, `email`, `password`) VALUES
(1, 0, 'reva', 'manajer', 'kerja', ''),
(2, 0, 'mamad', 'manajer', 'kerja', ''),
(4, 0, 'reva', 'ftfyt', 'ytfytf', ''),
(5, 78656, 'reva', 'manajer', 'mad@google.com', '12345'),
(6, 123141, 'reva', 'direktur', 'mad@mail.com', '12345'),
(7, 12345, 'mamad', 'manajer', 'mad@google.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_hujan`
--
ALTER TABLE `data_hujan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hujan`
--
ALTER TABLE `hujan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hujanperjam`
--
ALTER TABLE `hujanperjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_hujan`
--
ALTER TABLE `data_hujan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `hujan`
--
ALTER TABLE `hujan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `hujanperjam`
--
ALTER TABLE `hujanperjam`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
