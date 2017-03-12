-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 03:16 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rubi_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `os_php_ajax_posts`
--

CREATE TABLE IF NOT EXISTS `os_php_ajax_posts` (
  `id` bigint(25) NOT NULL,
  `wdyw` int(5) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `content` longtext,
  `url` varchar(25) DEFAULT NULL,
  `stock` enum('0','1') DEFAULT '1',
  `total` bigint(25) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `price` int(50) DEFAULT NULL,
  `discount` int(50) DEFAULT NULL,
  `viewer` bigint(25) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` text,
  `image` text,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `level` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `os_php_ajax_posts`
--

INSERT INTO `os_php_ajax_posts` (`id`, `wdyw`, `title`, `description`, `content`, `url`, `stock`, `total`, `category`, `price`, `discount`, `viewer`, `name`, `address`, `image`, `username`, `email`, `password`, `date`, `level`) VALUES
(1, 0, '', '', '', '', '1', NULL, NULL, NULL, NULL, NULL, 'Rubi Jihantoro', 'Jl. Kebenaran', 'rubi.jpg', 'ruby', 'jihantoro8@gmail.com', '$2y$10$JCWfI7JLjaEQ2MzEplbM6.TeV7ow6UqvfWtJHb29b2F3IPHAiUpy6', NULL, 13),
(2, 1, 'Founding Father', 'Kaos ini dibuat dengan bahan baja yang mana sangat lembut ketika di gunakan, kaos ini pun memiliki 4 bolongan agar bisa dipakai oleh si pemakai', 'kaos ini sangat bisa terbakar, maka dari itu disarankan agar jangan membakar kaos ini', 't-shirt-founding-father', '1', NULL, 'kaos-pria', 25000, 20000, NULL, NULL, NULL, 'foundingfathers.jpg', 'ruby', NULL, '', NULL, 0),
(3, 4, '', '', 'baju nya bagus, tetapi tidak cocok dipakai untuk kaki', '', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'ruby', NULL, '', '2017-03-06 12:53:49', 0),
(4, 2, 'Kaos Pria', 'Kaos kaos untuk pria dewasa dan anak anak', '', 'kaos-pria', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '2017-03-06 13:34:55', 0),
(5, 7, '', '', '', 't-shirt-founding-father', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'foundingfathers.jpg', 'ruby', NULL, '', '2017-03-06 17:31:23', 0),
(6, 7, '', '', '', 't-shirt-founding-father', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anez-gak-polos.jpg', 'ruby', NULL, '', '2017-03-06 17:31:23', 0),
(7, 1, 'Glory USA', 'Kaos ini dibuat dengan bahan baja yang mana sangat lembut ketika di gunakan, kaos ini pun memiliki 4 bolongan agar bisa dipakai oleh si pemakai', 'kaos ini sangat bisa terbakar, maka dari itu disarankan agar jangan membakar kaos ini', 't-shirt-glory-usa', '1', NULL, 'kaos-pria', 25000, 20000, NULL, NULL, NULL, 'anez-gak-polos.jpg', 'ruby', NULL, '', NULL, 0),
(8, 8, NULL, NULL, NULL, 't-shirt-founding-father', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ruby', NULL, NULL, '2017-03-10 13:05:11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `os_php_ajax_posts`
--
ALTER TABLE `os_php_ajax_posts`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `os_php_ajax_posts`
--
ALTER TABLE `os_php_ajax_posts`
  MODIFY `id` bigint(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
