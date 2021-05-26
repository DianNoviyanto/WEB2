-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 06:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `tanggal`, `nama`, `email`, `nohp`, `pesan`) VALUES
(1, '2021-05-26 05:44:30', 'Dian Noviyanto', 'dian44@noviyanto.com', '0892962171', 'wow sangat bagus'),
(2, '2021-05-26 05:46:18', 'Arina Grey', 'greysi30@gmail.com', '08273638299', 'sangat membantu'),
(3, '2021-05-26 05:46:58', 'Rey Grown', 'reygrwonnn@gmail.com', '08775262828', 'bermanfaat banget kaka makasih banyak ya'),
(4, '2021-05-26 05:47:42', 'Chika Sherr', 'chikanky@gmail.com', '08747482289', 'Terimakasih.. tulisannya sangat bermanfaat..'),
(5, '2021-05-26 05:48:21', 'Andoni', 'andonee@gmail.com', '08929265722', 'Kak bisa tolong kasih koding biar muncul otomatis gk di tabel yg udh ada relasinya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
