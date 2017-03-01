-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 03:46 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tag` varchar(30) NOT NULL,
  `nama_gambar` varchar(30) DEFAULT NULL,
  `tgl_upload` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `tanggal`, `tag`, `nama_gambar`, `tgl_upload`) VALUES
(85, 'Kali dh ya', ' Mau ', '2017-02-19 12:36:12', 'Dong', NULL, '2017-02-21 10:27:50'),
(86, 'Orioqhgnk', 'Jkdhgskvh', '2017-02-19 12:37:55', 'KJHKSG', NULL, '2017-02-21 10:27:50'),
(87, 'Jkhhsdnmgjk', 'L/.sdgbvnmjkl', '2017-02-19 12:38:16', 'Sdkjghn', NULL, '2017-02-21 10:27:50'),
(88, 'Jksdghj', 'Jksdlhngvnhjk', '2017-02-19 12:39:13', 'Hkdsjhgf', NULL, '2017-02-21 10:27:50'),
(89, 'Jkshyafklm', 'J,mnbdvbm', '2017-02-19 12:39:53', 'Gbnjkm,dhsgbsf', NULL, '2017-02-21 10:27:50'),
(90, 'Hhjkgjygh', 'Kghjb,n.mklfhjbnk', '2017-02-19 12:40:48', 'Rfghbjnmk', NULL, '2017-02-21 10:27:50'),
(91, 'Rthyjk', 'Jlk', '2017-02-19 13:34:46', 'Yhjk', NULL, '2017-02-21 10:27:50'),
(92, 'Rfghbnjmk', 'Ghjkml,', '2017-02-19 13:37:23', 'Hjkl,', NULL, '2017-02-21 10:27:50'),
(93, 'Hkjl;kjbh,', 'Ghjbnfhgjbmn', '2017-02-20 00:38:01', 'Gyhjmklhjk', NULL, '2017-02-21 10:27:50'),
(94, 'Ujklhj,n', 'Ghjkhjbnk', '2017-02-20 00:41:55', 'Ghjk', NULL, '2017-02-21 10:27:50'),
(95, 'Ijkm,.', 'Hjlmk,', '2017-02-20 03:54:11', 'Hjmkl,', NULL, '2017-02-21 10:27:50'),
(96, 'Dfghj', 'Ghjkgfdghj', '2017-02-20 06:24:55', 'Fgvhbjnghj', NULL, '2017-02-21 10:27:50'),
(97, 'F', 'f', '2017-02-20 10:58:18', 'F', NULL, '2017-02-21 10:27:50'),
(98, 'Yhjk', 'Uhjmk,', '2017-02-20 15:27:37', 'Hbjnmk', NULL, '2017-02-21 10:27:50'),
(99, 'Nurmus', 'Nurmur', '2017-02-20 15:28:19', 'Nurmus', NULL, '2017-02-21 10:27:50'),
(100, 'Nurmus2', 'Nurmus', '2017-02-20 15:29:59', 'Nurmus', NULL, '2017-02-21 10:27:50'),
(101, 'Upload foto', 'Foto', '2017-02-20 15:32:43', 'Foto', NULL, '2017-02-21 10:27:50'),
(102, 'Dfhgjkl', 'Sdgfhgj', '2017-02-21 05:06:00', 'Hg', NULL, '2017-02-21 10:27:50'),
(103, 'Hjkl;', 'Uhjlk;', '2017-02-21 10:52:50', 'Hijklm;', NULL, '2017-02-21 10:52:50'),
(104, 'Wiol', 'Ujlkuijk', '2017-02-21 10:58:04', 'Ijk', NULL, '2017-02-21 10:58:04'),
(105, 'Hjk', 'Hjklm', '2017-02-21 11:01:17', 'Hjklm', NULL, '2017-02-21 11:01:17'),
(106, 'Sophia', 'Kll', '2017-02-21 12:17:37', 'Hjknm,', NULL, '2017-02-21 12:17:37'),
(107, 'Andito', 'Klkk', '2017-02-21 12:22:44', 'Lkkl', NULL, '2017-02-21 12:22:44'),
(108, 'Uojl', 'Ujk,m', '2017-02-21 15:06:22', 'Jk,m', NULL, '2017-02-21 15:06:22'),
(109, 'Test ty', 'Tyt', '2017-02-21 17:38:03', 'Tyty', NULL, '2017-02-21 17:38:03'),
(110, 'Tu', 'Tu', '2017-02-21 17:39:36', 'Tu', NULL, '2017-02-21 17:39:36'),
(111, 'Olk', 'Okl', '2017-02-21 17:40:44', 'Okl,', NULL, '2017-02-21 17:40:44'),
(112, 'Eq', 'Eeuue', '2017-02-21 17:43:21', 'Ee', NULL, '2017-02-21 17:43:21'),
(113, 'Ihk', 'Ujk', '2017-02-22 01:44:26', 'Ujk', NULL, '2017-02-22 01:44:26'),
(114, 'Ujk', 'Ujk,m', '2017-02-22 01:45:11', 'Ujkd', NULL, '2017-02-22 01:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(30) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `komentar` varchar(250) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `art_id` int(3) NOT NULL,
  `art_url` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nama`, `email`, `website`, `komentar`, `date`, `art_id`, `art_url`) VALUES
(1, 'hjk', 'hgj@jk', 'hkj', 'hjlkadgsfg\r\nadfjkqr\r\n', '2017-02-21 18:37:38', 1, 'komentar.php'),
(2, 'hjk', 'hgj@jk', 'hkj', 'hjlkadgsfg\r\nadfjkqr\r\n', '2017-02-21 18:37:46', 1, 'komentar.php'),
(3, 'hjk', 'hgj@jk', 'hkj', 'hjlkadgsfg\r\nadfjkqr\r\n', '2017-02-21 18:39:22', 1, 'contoh.php'),
(4, 'hjk', 'hgj@jk', 'hkj', 'hjlkadgsfg\r\nadfjkqr\r\n', '2017-02-21 18:47:22', 1, 'contoh.php'),
(5, 'jklilk', 'jkujkl', 'ihjkujk', 'uhjkhijksd', '2017-02-21 18:47:39', 1, 'komentar.php'),
(6, 'nurmus', 'lk', 'kj', 'kj', '2017-02-21 18:47:51', 1, 'komentar.php'),
(7, 'sophia', 'sop@sop', 'sklj', 'hkhhkhk', '2017-02-21 19:05:33', 1, 'komentar.php'),
(8, 'bariq', 'bariq.2nd.rodriguez@gmail.com', '', 'jk,mujsk,m', '2017-02-21 19:19:59', 1, 'komentar.php'),
(9, 'hjk', 'h', '', 'hnjm', '2017-02-21 19:20:09', 1, 'komentar.php'),
(10, 'yhjk', 'hjn', 'yuhj', 'hjnm', '2017-02-21 19:20:36', 1, 'komentar.php'),
(11, 'andito', '', '', 'blabla', '2017-02-21 19:23:47', 1, 'komentar.php'),
(12, 'dito', 'o', 'jk', 'jkjkkj', '2017-02-21 19:25:03', 1, 'komentar.php'),
(13, 'lagi', 'lagi', 'lagi', 'lagi', '2017-02-21 19:27:58', 1, 'komentar.php'),
(14, 'again', 'again', 'again', 'again', '2017-02-21 19:30:04', 1, 'komentar.php'),
(15, 'coba', 'cobac', 'coba', 'coba', '2017-02-21 19:31:40', 1, 'komentar.php'),
(16, 'cobalg', 'cobacg', 'cobalg', 'cobalg', '2017-02-21 19:33:13', 1, 'komentar.php'),
(17, 'cobalg', 'cobacg', 'cobalg', 'cobalgkj,mhnjm,', '2017-02-21 19:33:22', 1, 'komentar.php'),
(18, 'ayo', 'ayo', 'ayo', 'ayo', '2017-02-21 19:34:14', 1, 'single_index.php'),
(19, 'kali lo', 'jllk', 'jkljkljlk', 'ljkjlkjkl', '2017-02-21 19:39:38', 1, 'single_index.php'),
(20, 'rrr', 'rr', 'rr', 'rrr', '2017-02-21 19:43:34', 1, 'single_index.php'),
(21, 'kagipa', 'kagipa', 'kagipa', 'kagaga', '2017-02-21 22:04:11', 1, 'single_index.php'),
(22, 'jokowi', 'jk', 'hjk', 'jk', '2017-02-22 00:11:26', 1, 'single_index.php'),
(23, 'lklk', 'kllk', 'kllkkl', 'kllkkllk', '2017-02-22 00:13:43', 1, 'single_index.php');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user@gmail.com', 'user'),
(3, 'user2@gmail.com', 'user2'),
(4, 'admin2@gmail.com', 'admin2'),
(5, 'user3@gmail.com', 'user3'),
(6, 'userlagi@gmail.com', 'userlagi'),
(7, 'user2lagi@gmail.com', 'user2lagi'),
(8, 'sendi@user.com', 'sendi'),
(9, 'verry@gmail.com', 'verry'),
(10, 'adminlagi@gmail.com', 'admin'),
(11, 'verry1@gmail.com', 'verry1'),
(12, 'mega@gmail.com', 'mega'),
(13, 'sugos@gmail.com', 'sugos'),
(14, 'admin12@gmail.com', 'admin12'),
(15, 'admin10', 'admin10'),
(16, 'qirab@gmail.com', 'qirab'),
(17, 'admin@gmail.com', 'admin'),
(18, 'luadmin@gmail.com', 'luadmin'),
(19, 'admin@admin', 'admin'),
(20, 'rehan@gmail.com', 'rehan'),
(21, 'pai@gmail.com', 'pai'),
(22, 'aneuser@gmail.com', 'aneuser'),
(23, 'cobalagi@gmail.com', 'cobalagi'),
(24, 'mungkinaja@gmail.com', 'mungkinaja'),
(25, 'lagiah@gmail.com', 'lagiah');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_file`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
