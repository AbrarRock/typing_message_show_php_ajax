-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 08:24 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `show_message`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sender_id`, `receiver_id`, `message`, `message_id`) VALUES
(8, 7, 'hello', 23),
(7, 8, 'hy', 24),
(8, 7, 'kya kr rahy ho', 25),
(8, 7, 'kahan ho', 26),
(8, 7, ' bc ', 27),
(7, 8, 'ghr hun yara', 28),
(7, 8, 'kuch ni wela betha hua hun', 29),
(7, 8, 'orr gali na dy', 30),
(7, 8, 'kanjar kahinn k', 31),
(8, 7, 'hahaha', 32),
(8, 7, 'ok', 33),
(8, 7, 'kya hua', 34),
(8, 7, 'oyyy', 35),
(8, 7, 'an', 36),
(8, 7, 'han bol kanjar', 37),
(8, 7, 'hy', 38),
(7, 8, 'hy', 39),
(12, 7, 'hello abrar me arslan', 40),
(8, 12, 'hello', 41),
(8, 12, 'jhbjhgv', 42),
(12, 8, 'hhjjk', 43),
(12, 8, 'israr', 44),
(7, 8, 'abrar', 45),
(7, 12, ' hasdkjahsd', 46),
(12, 7, 'jhhasjdvadsj', 47);

-- --------------------------------------------------------

--
-- Table structure for table `typing_message`
--

CREATE TABLE `typing_message` (
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `typing_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typing_message`
--

INSERT INTO `typing_message` (`sender_id`, `receiver_id`, `typing_message`) VALUES
(0, 7, 'hello'),
(8, 7, ''),
(7, 8, 'abrar'),
(12, 7, 'jhhasjdvadsj'),
(8, 12, ''),
(12, 8, ''),
(7, 12, ' hasdkjahsd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(7, 'abrar', 'abrar'),
(8, 'asrar', 'asrar'),
(12, 'arslan', 'arslan'),
(13, 'select * from yes', 'hdsgaj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
