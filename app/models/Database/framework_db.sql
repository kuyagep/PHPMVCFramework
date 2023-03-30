-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 06:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `framework_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `thumbnail` varchar(1024) NOT NULL,
  `about` varchar(2048) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `address` varchar(1024) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `token_expire` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `dob`, `thumbnail`, `about`, `company`, `job`, `country`, `address`, `slug`, `role`, `token`, `token_expire`, `created_at`, `verified`, `deleted`) VALUES
(14, 'Geperson', 'Mamalias', 'geperson@gmail.com', '$2y$10$A8ygSInJoxoE0FVVm6SNBuNOzpCvEmHjkX5EJBfU1jYjCZCam/kc6', '122456789', '', '', 'uploads/images/1679755212profile picture.png', 'sample', 'sample', 'sample', 'sample', 'sample', '', 'user', '', '2023-03-25 02:26:05', '2023-03-25 02:26:05', 0, 1),
(15, 'Ferly', 'Ann', 'ferly@gmail.com', '$2y$10$QWc0xyKaxSu75YQhCCPqCeFeG2zf4UDm0DMF0.sfAK/Iu.uSt4Kp2', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'user', '', '2023-03-25 12:25:24', '2023-03-25 12:25:24', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role`),
  ADD KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;
-- Course Table
CREATE TABLE `courses` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `title` varchar(100) NOT NULL,
                           `description` text NOT NULL,
                           `user_id` int(11) NOT NULL,
                           `category_id` int(11) NOT NULL,
                           `sub_category_id` int(11) NOT NULL,
                           `level_id` int(11) NOT NULL,
                           `language_id` int(11) NOT NULL,
                           `price_id` int(11) NOT NULL,
                           `promo_link` varchar(1024) NOT NULL,
                           `primary_subject` varchar(100) NOT NULL,
                           `date` datetime NOT NULL,
                           `tags` varchar(2048) NOT NULL,
                           `congratulations_message` varchar(2048) NOT NULL,
                           `welcome_message` varchar(2048) NOT NULL,
                           `course_promo_video` varchar(1024) NOT NULL,
                           `course_image` varchar(1024) NOT NULL,
                           PRIMARY KEY (`id`),
                           KEY `title` (`title`),
                           KEY `user_id` (`user_id`),
                           KEY `category_id` (`category_id`),
                           KEY `sub_category_id` (`sub_category_id`),
                           KEY `level_id` (`level_id`),
                           KEY `language_id` (`language_id`),
                           KEY `price_id` (`price_id`),
                           KEY `primary_subject` (`primary_subject`),
                           KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
