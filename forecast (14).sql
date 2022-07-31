-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 24, 2022 at 03:32 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forecast`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `town` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `town`, `lat`, `lng`) VALUES
(1, 'Nairobi', '-1.2864', '36.8172'),
(2, 'Meru', '0.0500', '37.6500'),
(3, 'Mombasa', '-4.0500', '39.6667'),
(4, 'Kisumu', '-0.1000', '34.7500'),
(5, 'Nakuru', '-0.2833', '36.0667'),
(6, 'Eldoret', '0.5167', '35.2833'),
(7, 'Machakos', '-1.5167', '37.2667'),
(8, 'Kisii', '-0.6698', '34.7675'),
(9, 'Mumias', '0.3333', '34.4833'),
(10, 'Thika', '-1.0396', '37.0900'),
(11, 'Nyeri', '-0.4167', '36.9500'),
(12, 'Malindi', '-3.2100', '40.1000'),
(13, 'Kakamega', '0.2833', '34.7500'),
(14, 'Kendu Bay', '-0.3596', '34.6400'),
(15, 'Lodwar', '3.1167', '35.6000'),
(16, 'Athi River', '-1.4500', '36.9833'),
(17, 'Kilifi', '-3.6333', '39.8500'),
(18, 'Sotik', '-0.6796', '35.1200'),
(19, 'Garissa', '-0.4569', '39.6583'),
(20, 'Kitale', '1.0167', '35.0000'),
(21, 'Bungoma', '0.5666', '34.5666'),
(22, 'Isiolo', '0.3500', '37.5833'),
(23, 'Wajir', '1.7500', '40.0667'),
(24, 'Embu', '-0.5333', '37.4500'),
(25, 'Voi', '-3.3696', '38.5700'),
(26, 'Homa Bay', '-0.5167', '34.4500'),
(27, 'Nanyuki', '0.0167', '37.0667'),
(28, 'Busia', '0.4608', '34.1108'),
(29, 'Mandera', '3.9167', '41.8333'),
(30, 'Kericho', '-0.3692', '35.2839'),
(31, 'Kitui', '-1.3667', '38.0167'),
(32, 'Maralal', '1.1000', '36.7000'),
(33, 'Lamu', '-2.2686', '40.9003'),
(34, 'Kapsabet', '0.2000', '35.1000'),
(35, 'Marsabit', '2.3333', '37.9833'),
(36, 'Hola', '-1.5000', '40.0300'),
(37, 'Kiambu', '-1.1714', '36.8356'),
(38, 'Kabarnet', '0.4919', '35.7430'),
(39, 'Migori', '-1.0634', '34.4731'),
(40, 'Kerugoya', '-0.4989', '37.2803'),
(41, 'Iten', '0.6703', '35.5081'),
(42, 'Nyamira', '-0.5633', '34.9358'),
(43, 'Murang’a', '-0.7210', '37.1526'),
(44, 'Sotik Post', '-0.7813', '35.3416'),
(45, 'Siaya', '0.0607', '34.2881'),
(46, 'Kapenguria', '1.2389', '35.1119'),
(47, 'Wote', '-1.7808', '37.6288'),
(48, 'Mwatate', '-3.5050', '38.3772'),
(49, 'Kajiado', '-1.8500', '36.7833'),
(50, 'Ol Kalou', '-0.2643', '36.3788'),
(51, 'Narok', '-1.0833', '35.8667'),
(52, 'Kwale', '-4.1737', '39.4521'),
(53, 'Rumuruti', '0.2725', '36.5381');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'Brenna', 'Nixon', 'mufor@mailinator.com', '325', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '2022-07-03 17:40:14'),
(2, 'Dennis', 'Nelson', 'elviskkirui@gmail.com', '294', '5f4dcc3b5aa765d61d8327deb882cf99', '2022-07-03 17:47:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
