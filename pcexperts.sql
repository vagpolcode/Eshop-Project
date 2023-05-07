-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 04:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcexperts`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `title` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `poso` int(11) DEFAULT NULL,
  `timi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `title` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`title`, `foto`) VALUES
('laptop', 'lap.jpg'),
('desktop', 'desk.jpg'),
('comments', 'com.png');

-- --------------------------------------------------------

--
-- Table structure for table `cate_desktop`
--

CREATE TABLE `cate_desktop` (
  `title` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `poso` int(11) DEFAULT NULL,
  `timi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cate_laptop`
--

CREATE TABLE `cate_laptop` (
  `title` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `poso` int(11) DEFAULT NULL,
  `timi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coms`
--

CREATE TABLE `coms` (
  `vid` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `sxolio` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `stars` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coms`
--

INSERT INTO `coms` (`vid`, `date`, `sxolio`, `file`, `stars`) VALUES
('vag', '2020-07-06 03:43:40', 'πολύ καλός υπολογιστής!', 'fut_des.JPG', 4),
('man', '2020-07-06 03:52:11', 'απλό και αθόρυβο. όπως το ήθελα.', 'bla_des.JPG', 5),
('nik', '2020-07-06 03:53:19', 'το καλύτερο pc τις αγοράς!!! <3\r\n', 'end_des.JPG', 5),
('zor', '2020-07-06 04:20:49', 'ελπίζω να βγει καλός', 'fut_des.JPG', 4);

-- --------------------------------------------------------

--
-- Table structure for table `file_click`
--

CREATE TABLE `file_click` (
  `file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_click`
--

INSERT INTO `file_click` (`file`) VALUES
('fut_des.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `logged`
--

CREATE TABLE `logged` (
  `us` text DEFAULT NULL,
  `pa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `second_coms`
--

CREATE TABLE `second_coms` (
  `vid` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `sxolio` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `stars` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `second_coms`
--

INSERT INTO `second_coms` (`vid`, `date`, `sxolio`, `file`, `stars`) VALUES
('jon', '2020-07-06 03:58:53', 'καλό φαινεται', 'fut_des.JPG', 3),
('vag', '2020-07-06 04:02:03', 'θα προτιμούσα κάποιο άλλο', 'fut_des.JPG', 1),
('nik', '2020-07-06 04:04:45', 'εμένα μου φαίνεται πολύ καλό!', 'fut_des.JPG', 4),
('nik', '2020-07-06 04:06:22', 'είναι φανταστικό!!!', 'end_des.JPG', 5),
('vag', '2020-07-06 04:06:48', 'φαίνεται πολύ περίεργο :(', 'end_des.JPG', 3),
('jon', '2020-07-06 04:07:26', 'εμένα μου αρέσει πάντως', 'end_des.JPG', 5),
('zor', '2020-07-06 04:23:19', 'δεν έχω κάποιο παράπονο μέχρι στιγμής', 'fut_des.JPG', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `eponimo` text DEFAULT NULL,
  `onoma` text DEFAULT NULL,
  `mail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `eponimo`, `onoma`, `mail`) VALUES
('vag', 'pol', 'vag', 'pol', 'vag@pol'),
('man', 'nam', 'man', 'man', 'man@nam'),
('zor', 'roz', 'zor', 'roz', 'zor@roz'),
('nik', '101', 'nik', 'pol', 'nik@pol'),
('jon', '102', 'pol', 'jon', 'jon@pol'),
('admin', 'admin', 'admin', 'admin', 'admin@admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
