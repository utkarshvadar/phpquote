-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 06:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quote`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `quote` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `quote`, `author`, `likes`) VALUES
(4, ' believe anything that you read on the internet, it may be fake.', 'Abraham Lincoln', 6),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem I psum', 10),
(6, 'The Way Get Started Is To Quit Talking And Begin Doing.', 'Walt Disney', 3),
(8, 'The Pessimist Sees Difficulty In Every Opportunity. The Optimist Sees Opportunity In Every Difficulty.', 'Winston Churchill', 5),
(9, 'Donâ€™t Let Yesterday Take Up Too Much Of Today.', 'Will Rogers', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
