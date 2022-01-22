-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2022 pada 10.28
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket-bioskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `film_id` int(11) NOT NULL,
  `film_nama` varchar(255) NOT NULL,
  `film_genre` int(11) NOT NULL,
  `film_tahun` varchar(255) NOT NULL,
  `film_sinopsis` text NOT NULL,
  `film_trailer` varchar(255) NOT NULL,
  `film_poster` varchar(255) NOT NULL,
  `film_sampul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`film_id`, `film_nama`, `film_genre`, `film_tahun`, `film_sinopsis`, `film_trailer`, `film_poster`, `film_sampul`) VALUES
(1, 'SpiderMan: No Way Home', 1, '2021', 'Identitas Spider-Man sekarang sudah terungkap, dan Peter meminta bantuan Doctor Strange. namun sebuah kesalahan terjadi, dan itu justru mengundang musuh berbahaya dari dunia lain, mereka mulai bermunculan. Hal itu memaksa Peter mencari apa makna sebenarnya menjadi Spider-Man.', 'https://youtu.be/JfVOs4VSpmA', 'https___specials-images.forbesimg.com_imageserve_619445582af2001a65b17a66_0x0.jpg', 'spider-man-no-way-home-1_169.jpeg'),
(12, 'Dune', 4, '2021', 'Perjalanan pahlawan mitis dan emosional, Dune\"menceritakan kisah Paul Atreides, seorang pemuda cerdas dan berbakat yang lahir dalam takdir besar di luar pemahamannya, yang harus melakukan perjalanan ke planet paling berbahaya di alam semesta untuk memastikan masa depannya.', 'https://youtu.be/8g18jFHCLXk', '1642036101_7a3d5d52b5e76b9a172b.jpg', '1642036101_99cc3582bc818f8a7595.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_nama`) VALUES
(1, 'Action'),
(2, 'Romance'),
(3, 'Comedy'),
(4, 'Adventure'),
(6, 'Music');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `jadwal_film` int(11) NOT NULL,
  `jadwal_tanggal` date NOT NULL,
  `jadwal_jam` varchar(255) NOT NULL,
  `jadwal_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`jadwal_id`, `jadwal_film`, `jadwal_tanggal`, `jadwal_jam`, `jadwal_harga`) VALUES
(1, 12, '2022-01-12', '13.00', 35000),
(2, 1, '2022-01-12', '20.00', 20000),
(3, 12, '2022-01-13', '15.00', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `order_id` int(11) NOT NULL,
  `order_user` int(11) NOT NULL,
  `order_film` int(11) NOT NULL,
  `order_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`order_id`, `order_user`, `order_film`, `order_jadwal`) VALUES
(6, 2, 12, 1),
(7, 2, 1, 2),
(8, 4, 12, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'anang', '2326af735beba37279d41c7f0ab62e73', 'user'),
(3, 'bima', 'b8c7e6b803c83426c5f4a7b61b237cb3', 'user'),
(4, 'anangbima', '25d55ad283aa400af464c76d713c07ad', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`film_id`),
  ADD KEY `film_genre` (`film_genre`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`),
  ADD KEY `jadwal_film` (`jadwal_film`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_user` (`order_user`),
  ADD KEY `order_film` (`order_film`),
  ADD KEY `order_jadwal` (`order_jadwal`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`film_genre`) REFERENCES `genre` (`genre_id`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`jadwal_film`) REFERENCES `film` (`film_id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`order_film`) REFERENCES `film` (`film_id`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`order_user`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`order_jadwal`) REFERENCES `jadwal` (`jadwal_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
