-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2023 at 12:17 PM
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
-- Database: `culturedev`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(80, 'hetg'),
(98, 'hetg'),
(99, 'hetg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isadmin` tinyint(1) DEFAULT 0,
  `isactive` tinyint(1) DEFAULT 0,
  `token` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `isadmin`, `isactive`, `token`, `password`) VALUES
(9, 'Grady Levy', 'Leroy Mcgowan', 'pewy@mailinator.com', 0, 0, '16963d9667cf98ed1a57e10c9853f391', '$2y$10$W.Q/gVPEs3bmfeT5ISu84.rHKbD90O5gPrGCBUspX7siOb/xsux2q'),
(10, 'Elton Kemp', 'Reed Preston', 'lene@mailinator.com', 0, 0, '7640d46c17a83135ee9fc27c6b426890', '$2y$10$r3cl4eSixfREEL7AlR0vh.aBQbEPwCEEUftUsqZiov0pmRTAvgM4e'),
(11, 'Elton Kemp', 'Reed Preston', 'lene@gmail.com', 0, 0, '55ae27d36f49334efecaadc8db39aac6', '$2y$10$zYT9yWfdpffMwUlleX.61uBVRc/B2g41W83C9QVrlWLXXWQAnCkDC'),
(12, 'Dacey Cleveland', 'Price Ross', 'kehuvyhy@mailinator.com', 0, 0, 'e724022c8bd2bde10f33e6d55667c81e', '$2y$10$gJvr5mVqgzd.AZ1uYPXXxeQfP9nHdik1XgS/QYjsW3XQES0.Y/3Gy'),
(13, 'Dawn Gates', 'Rinah Patrick', 'behedura@mailinator.com', 0, 0, '13ad7bdf6251effb3db9683a3fca03dc', '$2y$10$IVD75kUMboLioLYPUYzyBuI.dcCPH2/L6U03ZA0LA4CGLnhDs.IwK'),
(14, 'Madonna Mcguire', 'Declan Schultz', 'bamu@mailinator.com', 0, 0, '2e4e81966960c72260952bce01f96e49', '$2y$10$TsdVvK.Rv1kW/TufvsO7wOErAqoyOp9ofXk2C9vSaSZHNRy0atPc6'),
(15, 'Drake Barrett', 'Maya Carter', 'xaza@mailinator.com', 0, 0, 'e0ef08951dfe6a9d2f9295c276c28ff6', '$2y$10$itgvRjeBPmsfWApO6240BuksxE6ZPj2lnVvTk9EvtbyK78pZ6KCM6'),
(16, 'Yasir Avery', 'Kameko West', 'wevaxyki@mailinator.com', 0, 0, 'f2041ce2bcb7eb9e2590bc6f7bc6be9c', '$2y$10$XnatRYDsDD3dAvsjUR33puRP0bGzFh.SfTQ34IiOTZHQeWHH.wSK2'),
(17, 'Flynn Vargas', 'Petra Ellison', 'raki@mailinator.com', 0, 0, '4d95ee7b9ed8432e3fe8186b38de4116', '$2y$10$2qwcdtq9j0Vzr12OaWRcHe/EvllefObZFYMtuKTgqsgxSIhsnJggW'),
(18, 'Seth Rutledge', 'Charissa Cooley', 'xohirepusa@mailinator.com', 0, 0, '5a191fe65aeda469e0d6dc89964e3d14', '$2y$10$h1wmkjhIwSCS6FzH7mFatOxfIeJ1fWpxY4Y9TuRocOhPd6JEg5tPq'),
(19, 'Doris Reid', 'Kiona Hopkins', 'palubamuca@mailinator.com', 0, 0, '942b8fe036ca428cafce2870fa4a62dc', '$2y$10$F7U.eQSZzVDZC4p/s.UNauLYKv.ShJTL4Vd9R8BGrR/fM4qt4vEH6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;