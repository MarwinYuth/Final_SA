-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2023 at 03:52 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sa-final`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

DROP TABLE IF EXISTS `tbl_book`;
CREATE TABLE IF NOT EXISTS `tbl_book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `publish` date NOT NULL,
  `ordernum` int NOT NULL,
  `active` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `title`, `author`, `category`, `img`, `publish`, `ordernum`, `active`) VALUES
(30, 'Naruto', 'Masashi Kishimoto', 'manga', '9781591163596_p0_v2_s1200x630.jpg', '2023-01-04', 9, '1'),
(28, 'Attack On Titan', 'Isayama', 'manga', 'AOT.jpg', '2023-01-01', 7, '1'),
(29, 'Tokyo Revenger', 'Ken Wakui', 'manga', 'Tokyorevenger.jpg', '2023-01-03', 8, '1'),
(27, 'Demon Slayer ', 'Koyoharu Gotouge', 'manga', 'demon.jpg', '2023-01-02', 6, '1'),
(37, 'ផ្ទះកណ្តាលបឹង', 'Manith', 'novel', 'bB9GZopTDjDd2yLwvbSzBMIqDpOh3Ukx6TTWMyV3.jpeg', '2022-12-31', 10, '1'),
(42, 'ផ្ទះកណ្តាលបឹងវគ្គ២', 'Manith', 'novel', '297998627-605205360961620-1503590801339764031-n.jpg', '2022-12-13', 11, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookaway`
--

DROP TABLE IF EXISTS `tbl_bookaway`;
CREATE TABLE IF NOT EXISTS `tbl_bookaway` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_borrower`
--

DROP TABLE IF EXISTS `tbl_borrower`;
CREATE TABLE IF NOT EXISTS `tbl_borrower` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_borrower`
--

INSERT INTO `tbl_borrower` (`id`, `img`, `title`, `author`, `category`, `username`, `date`, `time`) VALUES
(52, 'bB9GZopTDjDd2yLwvbSzBMIqDpOh3Ukx6TTWMyV3.jpeg', 'ផ្ទះកណ្តាលបឹង', 'Manith', 'novel', 'Levi', '2023-01-12', '22:57:10'),
(51, 'AOT.jpg', 'Attack On Titan', 'Isayama', 'manga', 'Levi', '2023-01-12', '22:55:42'),
(64, 'Tokyorevenger.jpg', 'Tokyo Revenger', 'Ken Wakui', 'manga', 'Yuth Marwin', '2023-01-15', '12:58:35'),
(62, '297998627-605205360961620-1503590801339764031-n.jpg', 'ផ្ទះកណ្តាលបឹងវគ្គ២', 'Manith', 'novel', 'Yuth Marwin', '2023-01-15', '12:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `email`, `username`, `feedback`, `date`, `time`) VALUES
(19, 'Vin@gmail.com', 'Yuth Marwin', 'Hello Admin', '2023-01-13', '14:01:42'),
(18, 'Vin@gmail.com', 'Yuth Marwin', 'Hello', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

DROP TABLE IF EXISTS `tbl_member`;
CREATE TABLE IF NOT EXISTS `tbl_member` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `ordernum` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `name`, `position`, `address`, `Contact`, `img`, `ordernum`) VALUES
(1, 'Yuth Marwin', 'Leader Front-End & Back-End', 'Phnom Penh', 'Facebook,Telegram,Instagram', 'Vin.jpg', 1),
(2, 'Tra', 'Front-End ', 'sihanoukville', 'Facebook,Telegram,Instagram', 'Tra.jpg', 2),
(3, 'Tek Vitu', 'Front-End UX/UI', 'Phnom Penh', 'Facebook,Telegram', 'Tu.jpg', 3),
(4, 'Krech Sokmean', 'Front-End', 'Kompot', 'Facebook,Instagram', 'Sokmean.jpg', 4),
(5, 'Lar Tekmeng', 'Front-End UX/UI', 'Phnom Penh', 'Facebook,Telegram', 'Tekmeng.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `email`, `username`, `password`) VALUES
(1, 'Vin@gmail.com', 'Yuth Marwin', '12345'),
(2, 'Levi@gmail.com', 'Levi', '54321'),
(3, 'sokmean@gmail.com', 'sokmean', '54321'),
(4, 'yaya@gmail.com', 'Yaa', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
