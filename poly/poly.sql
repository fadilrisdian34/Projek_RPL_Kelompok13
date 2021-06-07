-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jun 2021 pada 03.02
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poly`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_rm_bpjs_kis` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `keperluan` varchar(130) NOT NULL,
  `tanggal` date NOT NULL,
  `urut_antrian` int(11) NOT NULL,
  `waktu_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `bpjs` varchar(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `buka` int(11) NOT NULL,
  `urut_antrian` int(11) NOT NULL,
  `waktu_buka` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `buka`, `urut_antrian`, `waktu_buka`) VALUES
(1, 'Idris', 0, 1, '2021-06-07 07:40:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `nim`, `email`, `foto`) VALUES
(1, 'M Fathan Fatazka', 'G64180118', 'fathan_fatazka@apps.ipb.ac.id', ''),
(3, 'Arista Fauzia', 'F34180001', 'arista_aja@apps.ipb.ac.id', ''),
(5, 'Ajis', 'g6480110', 'fathan_check@gmail.com', 'fathan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dalam_antrian` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `dalam_antrian`) VALUES
(1, 'fathan', '$2y$10$6UyL5pyTKpvSa/rT1r3RwuKJDiAljcHsjkYdSRADfwvtxy46g.PSe', 0),
(2, 'arista', '$2y$10$3utXF.4cYaIt1Xaw367R.O8ql/biKSFlzsX6/3/jD/8e.fpkrv0ve', 0),
(3, 'pateng', '$2y$10$66pCkRHK8RvjR2ACnfPva.uZTVMr3Qe8F9KuuXclYleTrUQqR/U4C', 0),
(6, 'pateng123', '$2y$10$JS7enL2NX/Kh5FLzDHj5Jeqya6XzPTD7BI6W8WMe71vn35kg.wYOy', 0),
(7, 'pateng456', '$2y$10$XJpFAcD8pyKvw9q/B2BFfuk7qkxowB1JowOWEsFnjPIE.sppo.px.', 0),
(9, 'ffatazka', '$2y$10$6CHtIJ2le1uMVIqv.7IfL.IHbVaMctWKpTmwRSlbSdHNR2aaDzaj6', 0),
(10, 'fathanfatazka', '$2y$10$mxzrrhc8ZZyH3xmnpcscEOQe0oqx8.OPtQrM3NDBc9ipQn9jsJqkm', 0),
(20, 'reyhan', 'razor\r\n', 0),
(21, 'reihan', '$2y$10$hZFvzuwcQIv0sZllkaFbaO0qC5cq1RW9WnUG.ue54dJD1CZVFd7KS', 1),
(22, '12345', '$2y$10$MfocrYWa7raRAijFOEGXBOEMi2xCnN5c1UphYa6H8Jb...IbK9vD.', 0),
(23, '12', '$2y$10$ZkmymS3Y0HEZAdsHIddMy.wIAvmmhOLjv1laj1v0uOOvilZ4zWzD2', 1),
(24, 'ganteng', '$2y$10$rEHjyvWv7HoTYqQg.ZJCCO1IA3tpWejyb8Zo2SOcxtqEZSvqTBAFS', 1),
(25, 'anjing', '$2y$10$M4Wtal80QDXSN/J3mA4pIOccdYo25MhqsxzwRoaPSdihQYsEY60FW', 1),
(26, 'dokter', '$2y$10$hf64FtP.GPH3Sp0CVKuF8uDuGfDuZLtUTOOefL4cflUaZyMeD2atK', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `antrian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
