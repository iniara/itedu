-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 01:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `playlist` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `date`, `playlist`) VALUES
(1, 'Nanda Tiara Sabina H', 'aranandash22@gmail.com', 'Good!', '2023-12-09 03:38:28', ''),
(2, 'Nanda Tiara Sabina H', 'aranandash22@gmail.com', 'Nice!', '2023-12-09 04:02:44', 'CSS'),
(3, 'Nanda Tiara Sabina H', 'aranandash22@gmail.com', 'Good!', '2023-12-09 04:04:28', 'HTML'),
(4, 'Yuno', 'yuno@example.com', 'Thank you!', '2023-12-09 06:47:38', 'HTML'),
(5, '', '', '', '2023-12-09 06:54:59', 'HTML');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `namayoutube` varchar(255) NOT NULL,
  `materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `teacher`, `namayoutube`, `materi`) VALUES
(4, 'Eko Kurniawan', 'Programmer Zaman Now', '<p>Javascript Tutorial</p>'),
(5, 'Sandhika Galih', 'Web Programming UNPAS', '<p>CSS Tutorial</p>'),
(7, 'Sandhika Galih', 'Web Programming UNPAS', '<p>HTML Tutorial</p>'),
(9, 'Wahidev Academy', 'Wahidev Academy', '<p>React JS Tutorial</p>'),
(10, 'Eko Kurniawan', 'Programmer Zaman Now', '<p>Node JS Tutorial</p>');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `pictures` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `jenis`, `pictures`, `tanggal`) VALUES
(1, 'html', 'teacher_1702039945_html.png', '2023-12-08 12:52:25'),
(2, 'css', 'teacher_1702042775_css.png', '2023-12-08 13:39:35'),
(3, 'js', 'teacher_1702042825_js.png', '2023-12-08 13:40:25'),
(4, 'react', 'teacher_1702042855_reactjs.png', '2023-12-08 13:40:55'),
(5, 'node', 'teacher_1702042880_nodejs.jpg', '2023-12-08 13:41:20'),
(8, 'depan', 'teacher_1702179082_Programming-amico.png', '2023-12-10 03:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `profileteacher`
--

CREATE TABLE `profileteacher` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profileteacher`
--

INSERT INTO `profileteacher` (`id`, `nama`, `foto`, `isi`, `tgl_isi`) VALUES
(1, 'Sandhika Galih', 'teacher_1702036222_pak dhika.jpg', '<p>Web Programming UNPAS</p>', '2023-12-08 11:50:25'),
(2, 'Eko Kurniawan', 'teacher_1702036279_pak eko.jpg', '<p>Programmer Zaman Now</p>', '2023-12-08 11:51:19'),
(3, 'Wahidev Academy', 'teacher_1702036290_wahidev.jpg', '<p>Wahidev Academy</p>', '2023-12-08 11:51:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileteacher`
--
ALTER TABLE `profileteacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profileteacher`
--
ALTER TABLE `profileteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
