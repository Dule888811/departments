-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 02:42 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `class` smallint(6) NOT NULL,
  `num_strudents` int(11) DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `class`, `num_strudents`, `updated_at`, `created_at`) VALUES
(1, 'matematicko', 66, 3, '2018-11-19 22:26:10', '2018-11-18 02:54:39'),
(5, 'sportsko', 8, 1, '2018-11-18 04:21:50', '2018-11-18 02:54:39'),
(6, 'specijalno', 16, 0, '2018-11-19 22:30:59', '2018-11-18 02:54:39'),
(7, 'informaticko', 13, 0, '2018-11-19 09:48:52', '2018-11-18 01:55:00'),
(9, 'umetnicko', 16, 0, '2018-11-20 00:00:09', '2018-11-20 00:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `f_name` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8_unicode_ci NOT NULL,
  `featured` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `grade_maths` smallint(6) DEFAULT NULL,
  `grade_literature` smallint(6) DEFAULT NULL,
  `grade_biology` smallint(6) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `f_name`, `l_name`, `gender`, `featured`, `grade_maths`, `grade_literature`, `grade_biology`, `department_id`, `created_at`, `updated_at`) VALUES
(11, 'Nikola', 'Nikolic', 'male', 'uploads/students/1542665137kocka.png', 5, 3, 5, 1, '2018-11-19 21:05:37', '2018-11-19 21:05:37'),
(12, 'Marija', 'Pavlovic', 'female', 'uploads/students/1542665164kocka.png', NULL, NULL, NULL, 1, '2018-11-19 21:06:04', '2018-11-19 21:06:04'),
(13, 'Vlade', 'Divac', 'male', 'uploads/students/1542674831slika-za-cv.jpg', 5, 4, 2, 5, '2018-11-19 21:06:51', '2018-11-19 23:47:11'),
(14, 'Nikola', 'Zigic', 'male', 'uploads/students/1542665241kocka.png', 3, 3, 3, 5, '2018-11-19 21:07:21', '2018-11-19 21:07:21'),
(15, 'Nikola', 'Tesla', 'male', 'uploads/students/1542665272kocka.png', 5, 5, 5, 6, '2018-11-19 21:07:52', '2018-11-19 21:07:52'),
(16, 'Mileva', 'Anstajn', 'female', 'uploads/students/1542665312kocka.png', 5, 5, 5, 6, '2018-11-19 21:08:32', '2018-11-19 21:08:32'),
(17, 'Dusan', 'Pavlovic', 'male', 'uploads/students/1542665358slika-za-cv.jpg', 5, 5, 5, 7, '2018-11-19 21:09:18', '2018-11-19 21:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_ibfk_1` (`department_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
