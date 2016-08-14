-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2016 at 01:32 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomertelp` varchar(20) NOT NULL,
  `keangotaan` varchar(100) NOT NULL,
  `konfirmasi` tinyint(4) NOT NULL DEFAULT '0',
  `joindate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastlogin` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`nama_depan`, `nama_belakang`, `email`, `password`, `alamat`, `nomertelp`, `keangotaan`, `konfirmasi`, `joindate`, `lastlogin`, `id`) VALUES
('Test', 'Nama', 'test@mail.com', '1234', 'Test Alamat', '1234567890', 'premium', 0, '2016-06-28 09:11:17', '2016-06-28 11:13:49', 1),
('test', 'kedua', 'testing2@gmail.com', '102938', 'Test Alamat', '102938', 'premium', 0, '2016-06-28 14:39:12', '0000-00-00 00:00:00', 2),
('input', 'nama', 'me@mail.com', '123455', 'alamat inputan', '123455', 'reguler', 0, '2016-06-28 14:49:15', '2016-06-28 12:32:42', 3),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
