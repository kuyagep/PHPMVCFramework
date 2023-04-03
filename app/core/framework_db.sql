-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 05:17 PM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `disabled`) VALUES
(15, 'Development', 0),
(16, 'Business', 0),
(17, 'Finance', 0),
(18, 'Design', 0),
(19, 'Marketing', 0),
(20, 'Lifestyle', 0),
(21, 'IT & Software', 0),
(22, 'Health & Fitness', 0),
(23, 'Academics', 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `price_id` int(11) DEFAULT NULL,
  `promo_link` varchar(1024) DEFAULT NULL,
  `primary_subject` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `tags` varchar(2048) DEFAULT NULL,
  `congratulations_message` varchar(2048) DEFAULT NULL,
  `welcome_message` varchar(2048) DEFAULT NULL,
  `course_promo_video` varchar(1024) NOT NULL,
  `course_image` varchar(1024) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `published` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `user_id`, `category_id`, `sub_category_id`, `level_id`, `language_id`, `price_id`, `promo_link`, `primary_subject`, `date`, `tags`, `congratulations_message`, `welcome_message`, `course_promo_video`, `course_image`, `approved`, `published`) VALUES
(1, 'Web Development', NULL, 18, 15, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-31 15:39:16', NULL, NULL, NULL, '', '', 0, 0),
(2, 'Sample Course ', NULL, 18, 16, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-31 15:40:55', NULL, NULL, NULL, '', '', 0, 0),
(3, 'Free Course', NULL, 18, 15, NULL, NULL, NULL, 1, NULL, 'Web Development', '2023-04-01 16:33:41', NULL, NULL, NULL, '', '', 0, 0),
(4, 'this is a test', NULL, 18, 18, NULL, NULL, NULL, 1, NULL, 'Web Development', '2023-04-01 16:35:40', NULL, NULL, NULL, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `name`, `price`, `disabled`) VALUES
(1, 'Free', '0', 0);

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
  `facebook_link` varchar(500) DEFAULT NULL,
  `instagram_link` varchar(500) DEFAULT NULL,
  `twitter_link` varchar(500) DEFAULT NULL,
  `linkedin_link` varchar(500) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `dob`, `thumbnail`, `about`, `company`, `job`, `country`, `address`, `slug`, `facebook_link`, `instagram_link`, `twitter_link`, `linkedin_link`, `role`, `token`, `token_expire`, `created_at`, `verified`, `deleted`) VALUES
(18, 'Admin', 'Account', 'admin@gmail.com', '$2y$10$sjWFFcPiON6yVuCmcQfhMOp6MBC2yKECXGer6z8Jrbm7FYzUKUAA6', '', '', '', 'uploads/images/1680361294what-is-a-web-developer-1184x694.jpg', '', '', '', '', '', '', '', '', '', '', 'user', '', '2023-03-30 13:27:06', '2023-03-30 13:27:06', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `disabled` (`disabled`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `language_id` (`language_id`),
  ADD KEY `price_id` (`price_id`),
  ADD KEY `primary_subject` (`primary_subject`),
  ADD KEY `date` (`date`),
  ADD KEY `approved` (`approved`),
  ADD KEY `published` (`published`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price` (`price`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `name` (`name`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
