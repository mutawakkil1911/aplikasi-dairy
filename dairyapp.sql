-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql100.epizy.com
-- Waktu pembuatan: 30 Des 2020 pada 03.27
-- Versi server: 5.6.48-88.0
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27516621_dairyapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dairy`
--

CREATE TABLE `dairy` (
  `id` int(11) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dairy`
--

INSERT INTO `dairy` (`id`, `penulis`, `judul`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Mutawakkil Alallah', 'Alfi bikin hidup orang susah \'-\'', 'Cha, tambah lama aku mikirnya tambah mikir kemana mana, banyak orang orang sekitar yang jadi syetan untuk berfikir negatif semua tentang kamu, tapi aku harus lebih percaya kamu, mulai dari fahmi, musyrif, apalah pokoknya. dan yang lebih parah aku mikir cuma aku yang takut kehilangan, kamunya enggak, nggak tau juga sih, apa kamu juga takut kehilangan, tapi semoga aja begitu. Aku punya pemikiran seperti itu ada sebabnya seh, mungkin kamu kurang peduli akhir-akhir ini (bukan gara-gara kurang komunikasi). Tapi, aku harus percaya kamu dan tugas kamu sekarang bantu aku semangat lagi seperti dulu..............', '2020-12-22 02:51:52', '2020-12-22 02:51:52'),
(2, 'Mutawakkil Alallah', 'Maaf sebelumnya \'<>\'', 'Aku males mau minta kamu ini itu, soalnya aku sadar, masa mau nuntut apa-apa, aku aja belum bisa jadi seperti yang kamu harapkan, terutama dari sisi ibadahnya, aku juga mikir dua kali mau nyuruh-nyuruh kamu, ini aja udah lebih dari cukup, malah mau minta lebih, diam lebih baik, dan alhamdulillah sebagian kamu udah ngasih duluan sebelum aku minta, makasih sebelumnya dan maaf kalo ada salah...!\r\n\r\n', '2020-12-22 03:59:19', '2020-12-22 03:59:19'),
(3, 'Mutawakkil Alallah', 'Bodo amat', 'Cha, kamu tau kan, aku tuh orang yang bodo amat bukan sabar, aku sebenarnya mau marah, cuma males aja. Pertama, gak ada gunanya akhirnya pasti kamu yang paling bener, kedua, pasti kamu ada alasan untuk menghindari kesalahan, dan yang paling bikin aku males kamu tuh main seenaknya aja, kalau kamu gak sibuk ada, coba kalo pas sibuk main ngilang aja...! ', '2020-12-22 11:15:23', '2020-12-22 11:15:23'),
(4, 'Alfi Nurindiana', 'Mianhae :\')', 'Maafku untuk kekhawatiranmu yang tulus.\r\nMaafku untuk keresahan yang terjadi karenaku.\r\nJangan risau lagi, bae.\r\nI don\'t wanna go anywhere. I\'m here. \r\nBig thanks buat kesabaran yang kamu ajarkan.\r\nBaik-baik selalu. Do your best, ikking :\') !!\r\n\r\n\r\n`Chacha', '2020-12-24 11:11:38', '2020-12-24 11:11:38'),
(5, 'Alfi Nurindiana', 'Hope u fine', 'Hai, bae.\r\nKamu baik2 aja kan yaa :)\r\nMaap gabisa selalu ada. \r\nIbadahnya diistiqomahin ya, banyakin belajar, banyakin pengalaman, chacha kgn :\'(', '2020-12-29 14:14:27', '2020-12-29 14:14:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `user`, `pesan`) VALUES
(1, 'Mutawakkil Alallah', 'Cha, udah jadi nih, liat yeh, pakek kacamata, wkwkwk, gak usah baper, bunn'),
(2, 'Mutawakkil Alallah', 'Tapi klo chatan biasa, hari selasa pakek telegram ajah, soalnya ini masih versi beta, belum optimal, ini buat klo ada pesan pas lagi offline ajah.... '),
(3, 'Mutawakkil Alallah', 'Okee,,, paham kan sayang.... Gk paham begooo.... '),
(4, 'Alfi Nurindiana', 'siap ayah..........'),
(5, 'Alfi Nurindiana', 'pinter jet, ntar tak kasih jata bonus buat ayah.......'),
(6, 'Mutawakkil Alallah', 'Uwuuuuu'),
(7, 'Alfi Nurindiana', 'Uwuww, tapi boong'),
(8, 'Mutawakkil Alallah', 'belong, bikin gemezzz, terus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `gambar`, `userid`, `nama`, `username`, `password`) VALUES
(1, 'alfi_user.png', '20020502', 'Alfi Nurindiana', 'alfi@nd.id', 'duamei2002'),
(2, 'akil_user.jpg', '20021119', 'Mutawakkil Alallah', 'mutawakkil@nd.id', 'pasukantusuk');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dairy`
--
ALTER TABLE `dairy`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
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
-- AUTO_INCREMENT untuk tabel `dairy`
--
ALTER TABLE `dairy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
