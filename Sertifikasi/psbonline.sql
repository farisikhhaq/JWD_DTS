-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 03:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pendaftaran`
--

CREATE TABLE `data_pendaftaran` (
  `pendaftaran_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) DEFAULT NULL,
  `pas_foto` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `surat_pernyataan` varchar(255) DEFAULT NULL,
  `status_pendaftaran` enum('Diterima','Cadangan','Tidak Diterima') NOT NULL DEFAULT 'Diterima'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pendaftaran`
--

INSERT INTO `data_pendaftaran` (`pendaftaran_id`, `user_id`, `pendidikan_terakhir`, `pas_foto`, `ijazah`, `surat_pernyataan`, `status_pendaftaran`) VALUES
(20, 10, 'TK', 'pas_foto_20.jpg', 'ijazah_20.pdf', 'surat_pernyataan_20.pdf', 'Diterima'),
(21, 11, 'SMP / MTs', 'pas_foto_21.jpg', 'ijazah_21.pdf', 'surat_pernyataan_21.pdf', 'Tidak Diterima'),
(22, 13, 'SMA / SMK / MA', 'pas_foto_22.jpg', 'ijazah_22.pdf', 'surat_pernyataan_22.pdf', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nisn` varchar(16) DEFAULT NULL,
  `email` varchar(16) NOT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `no_telepon` int(11) NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(11) DEFAULT NULL,
  `nama_ortu` varchar(255) DEFAULT NULL,
  `no_telepon_ortu` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `nama`, `nisn`, `email`, `jenis_kelamin`, `no_telepon`, `tempat_lahir`, `tgl_lahir`, `agama`, `nama_ortu`, `no_telepon_ortu`, `password`, `role`, `alamat`) VALUES
(9, 'Faris Ikhlasul Haq', '194172006', 'admin2@gmail.com', NULL, 2147483647, NULL, NULL, NULL, NULL, NULL, '$2y$10$RFZdD0y0usIfaCVToWhCS.CnhFAW0VC0U9MWiXS8i6LMojIaiIpz.', 1, NULL),
(10, 'User Faris', '194172001', 'user@gmail.com', 'L', 2147483647, 'Nganjuk', '2000-12-26', 'Islam', 'Subhi', 822776321, '$2y$10$DoXwtmrCfguqJdyE7Ang..zLDL1QYg8/3x5wSUurKJq6zYm5Wf8SC', 1, 'Perumahan Griya Indah Kencana'),
(11, 'Rafi Shidqi', '194172002', 'user2@gmail.com', 'L', 2147483647, 'Nganjuk', '2000-12-26', 'Islam', 'JWD', 2147483647, '$2y$10$xOfhVJQL6ank7548UVfTwu39Mx9mdkdWYeySKQemifp.JeZI4eJQi', 0, 'Malang'),
(12, 'Ghani A', '194172005', 'user3@gmail.com', NULL, 2147483647, NULL, NULL, NULL, NULL, NULL, '$2y$10$7Tsjg4dUy8.qQYjBszQZTuQLBys/9m.sgnLryPRwfph8V1IVuOffm', 0, NULL),
(13, 'Faris I', '194172003', 'user5@gmail.com', 'L', 822577413, 'Nganjuk', '2000-09-27', 'Islam', 'Dewi', 2147483647, '$2y$10$3fvLvbbDrkRfDpnnTHolVu9.RZ6824EoOWXS9/8VxWQeSodQU76Mi', 0, 'Malang'),
(14, 'admin3', '11123344', 'admin3@gmail.com', NULL, 82257744, NULL, NULL, NULL, NULL, NULL, '$2y$10$2mSIsDOasncYxOOV0zK7gunEkZAq.wlliq/ZShVvcxeUmGAE32dA2', 0, NULL),
(15, 'Admin4', '11223344', 'admin4@gmail.com', NULL, 82257744, NULL, NULL, NULL, NULL, NULL, '$2y$10$ak241hrNaIx1PfuLJ.Gl0OV8anlZttpH81euKFEFtZFKaUsf7dUH6', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  ADD PRIMARY KEY (`pendaftaran_id`),
  ADD KEY `user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  MODIFY `pendaftaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  ADD CONSTRAINT `user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
