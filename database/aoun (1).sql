-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 04:47 PM
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
-- Database: `aoun`
--
CREATE DATABASE IF NOT EXISTS `aoun` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `aoun`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `isVolunteer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `isVolunteer`) VALUES
(1, 'aaa', 'aaaa@ddwdw.com', 567845854, 111, 1),
(2, 'لإفففقلل', 'vdvd@gmail.com', 3332435, 0, 0),
(3, 'dfghj', 'sarar@email.com', 9785623, 11, 1),
(4, '484', 'sarar@email.com', 9785623, 1, 1),
(5, 'wewe', 'makkah@gmail.com', 8956565, 111, 0),
(6, 'dad', 'aytyrl@gmail.com', 3332435, 1, 1),
(7, 'da', 'vdvd@gmail.com', 3332435, 22, 1),
(8, 'ada', 'vdvd@gmail.com', 3332435, 0, 0),
(9, 'ff', 'sarar@email.com', 9785623, 0, 0),
(10, 'تنت', 'vdvd@gmail.com', 3332435, 777, 1),
(11, 'qqqq', 'abdulrahmanfadhl@gmail.com', 3332435, 1111, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_language`
--

CREATE TABLE `users_language` (
  `id` int(11) NOT NULL,
  `language` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_language`
--

INSERT INTO `users_language` (`id`, `language`, `user_id`) VALUES
(9, 'Bengali | البنغالية', 6),
(10, 'English | الإنجليزية', 6),
(11, 'Dutch | الهولندية', 6),
(12, 'Arabic | العربية', 7),
(13, 'Bengali | البنغالية', 8),
(14, 'Bengali | البنغالية', 9),
(15, 'Arabic | العربية', 10),
(16, 'German | الألمانية', 1),
(17, 'German | الألمانية', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_language`
--
ALTER TABLE `users_language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_language`
--
ALTER TABLE `users_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_language`
--
ALTER TABLE `users_language`
  ADD CONSTRAINT `users_language_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
