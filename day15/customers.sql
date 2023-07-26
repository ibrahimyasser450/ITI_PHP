-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 26, 2023 at 02:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iti_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(128) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `roomNumber` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `roomNumber`, `picture`) VALUES
(2, 'Ibrahim yasser', 'ibrahimyasser450@gmail.com', '$2y$10$oip1rBTNVsHUfL6sMCUpVe0AXO.kxofAy6nmpDyYL301MivMqNeza', 'Application1', 'profile_pictures/my photo 2.jpg'),
(3, 'ahmedali', 'ahmedali22@gmail.com', '$2y$10$sgL7PoRJE/Rj3PRoIBKUtezkfKhZ.jUpB4z68aUrT2.JUXJDAKBDC', 'Application2', 'profile_pictures/my photo.jpeg'),
(4, 'mohmed_hassan', 'mohamedhassan@gmail.com', '$2y$10$UPXVhXOWjQvmBki4tEyhN.jll3xojWmijHCmruoCuttd2Gv2UJVsi', 'Cloud', 'profile_pictures/WhatsApp Image 2022-09-08 at 5.48.26 PM.jpeg'),
(5, 'ayman osama', 'aymanosama@gmail.com', '$2y$10$qNSSVYWiUmP.c2H2a6JIZOuTOpZ8DROdtT5tod5oe0mQz8fdAGoDq', 'Cloud', 'WhatsApp Image 2022-08-21 at 5.06.34 AM (1).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(128) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
