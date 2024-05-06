-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2024 pada 06.00
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
-- Database: `ecoscore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kandungan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `jenis`, `deskripsi_produk`, `gambar`, `kandungan`) VALUES
(6, 'fitbar', 'makanan', 'fitbar makanan sehat', 'uploads/fitbar.jpeg', 'Excellent'),
(7, 'chitato', 'makanan', 'Chitato Lite adalah camilan kentang yang terbuat dari kentang asli yang dipilih dan dipotong tipis, memberikan sensasi renyah yang memikat setiap kali digigit. Produk ini memiliki profil rasa yang unik, termasuk varian Nori Seaweed yang lezat, yang mening', 'uploads/download.jpeg', 'Bad'),
(8, 'chitato', 'makanan', 'Chitato Lite adalah camilan kentang yang terbuat dari kentang asli yang dipilih dan dipotong tipis, memberikan sensasi renyah yang memikat setiap kali digigit. Produk ini memiliki profil rasa yang unik, termasuk varian Nori Seaweed yang lezat, yang mening', 'uploads/download.jpeg', 'Bad'),
(9, 'chitato', 'makanan', 'Chitato Lite adalah camilan kentang yang terbuat dari kentang asli yang dipilih dan dipotong tipis, memberikan sensasi renyah yang memikat setiap kali digigit. Produk ini memiliki profil rasa yang unik, termasuk varian Nori Seaweed yang lezat, yang mening', 'uploads/download.jpeg', 'Bad'),
(10, 'beng beng', 'makanan', 'Beng-Beng adalah salah satu merk camilan wafer cokelat yang diproduksi oleh Mayora. Dikenal sejak tahun 90an, merk ini jadi pilihan favorit untuk anak-anak dan dewasa karena kombinasi wafer berlapis karamel, rice crispy dan balutan cokelatnya yang lezat.', 'uploads/2017-bengbeng.png', 'Poor'),
(12, 'beng beng', 'makanan', 'beng beng makanan ', 'uploads/2017-bengbeng.png', 'Bad'),
(15, 'ponds facial wash', 'kosmetik', 'sabun cuci muka terbaik', 'uploads/image-0-1595845032943.png', 'Excellent'),
(17, 'fitbar', 'makanan', 'makanan sehat', 'uploads/fitbar.jpeg', 'Excellent');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
