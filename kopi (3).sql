-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 08:17 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `password_admin` varchar(225) DEFAULT NULL,
  `username_admin` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `password_admin`, `username_admin`) VALUES
(1, '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `path_foto` varchar(225) NOT NULL,
  `kopi_id_kopi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `path_foto`, `kopi_id_kopi`) VALUES
(1, 'assets/img/coffee/1ff00286-90fd-44e0-b398-06e14f360e9c.jpg', 3),
(2, 'assets/img/coffee/db9b5054-59ac-46ed-bc1b-c49574be8035.jpg', 3),
(3, 'assets/img/coffee/3041ebf4-51ea-4da9-a022-b4d5d053d1fe.jpg', 4),
(4, 'assets/img/coffee/f18b1390-6ac9-46e1-bede-80241b8e2f6e.jpg', 5),
(5, 'assets/img/coffee/f6b84f2d-911c-409f-b92e-50655a7e5265.jpg', 6),
(6, 'assets/img/coffee/c421ce2a-8f70-42a5-a5d5-1b282c90caf9.jpg', 7),
(7, 'assets/img/coffee/7eee151b-f728-460f-9ad8-0bf7d85acaef.jpg', 9),
(8, 'assets/img/coffee/cddc43c7-3576-489d-a1ff-6cb57abc249d.jpg', 10),
(9, 'assets/img/coffee/000d6fb9-c61e-496c-92eb-15185d6fc82a.jpg', 11),
(10, 'assets/img/coffee/d1591551-4478-4726-baf3-bca8aed90317.jpg', 12),
(11, 'assets/img/coffee/d8d54995-b85a-434a-99c1-3d0f41b19ecf.jpg', 13),
(12, 'assets/img/coffee/aa9c691f-df72-4d9f-8e0f-240dcdc38286.jpg', 13),
(13, 'assets/img/coffee/76f74929-49b8-4a92-abb1-45ddc18d7e67.jpg', 13),
(14, 'assets/img/coffee/0e6a5860-ec94-4745-b28d-38e67b7d1cb3.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kopi`
--

CREATE TABLE `jenis_kopi` (
  `id_jenis_kopi` int(2) NOT NULL,
  `jenis_kopi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kopi`
--

INSERT INTO `jenis_kopi` (`id_jenis_kopi`, `jenis_kopi`) VALUES
(1, 'Arabica'),
(2, 'Robusta'),
(3, 'Blend');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `member_id_member` int(11) DEFAULT NULL,
  `roaster_id_roaster` int(11) DEFAULT NULL,
  `kopi_id_kopi` int(11) NOT NULL,
  `waktu_komentar` datetime DEFAULT NULL,
  `isi_komentar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `member_id_member`, `roaster_id_roaster`, `kopi_id_kopi`, `waktu_komentar`, `isi_komentar`) VALUES
(1, 1, 3, 14, '2019-07-03 00:00:00', 'ini isi komentar');

-- --------------------------------------------------------

--
-- Table structure for table `kopi`
--

CREATE TABLE `kopi` (
  `id_kopi` int(11) NOT NULL,
  `nama_kopi` varchar(225) DEFAULT NULL,
  `acidity` int(11) DEFAULT NULL,
  `sweet` int(11) DEFAULT NULL,
  `bitter` int(11) DEFAULT NULL,
  `savory` int(11) DEFAULT NULL,
  `origin` varchar(225) DEFAULT NULL,
  `deskripsi_kopi` varchar(225) DEFAULT NULL,
  `roaster_id_roaster` int(11) NOT NULL,
  `roast_prof_id_roast_prof` int(11) NOT NULL,
  `jenis_kopi_id_jenis_kopi` int(2) NOT NULL,
  `proses_kopi_id_proses_kopi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kopi`
--

INSERT INTO `kopi` (`id_kopi`, `nama_kopi`, `acidity`, `sweet`, `bitter`, `savory`, `origin`, `deskripsi_kopi`, `roaster_id_roaster`, `roast_prof_id_roast_prof`, `jenis_kopi_id_jenis_kopi`, `proses_kopi_id_proses_kopi`) VALUES
(3, 'adasdsad', 2, 3, 4, 5, 'asdasda', 'https://goo.gl/maps/uwnFPe4egm2b7r2C6', 1, 1, 1, 1),
(4, 'kasjdasjdlsakdjlaksdj', 5, 1, 1, 1, 'Papua', 'adadasd', 1, 2, 3, 2),
(5, 'asdada', 4, 4, 4, 4, 'Papua', 'adadasd', 1, 2, 3, 2),
(6, 'asdfqwffqfqf', 4, 4, 4, 4, 'Papua', 'adadasd', 1, 2, 3, 2),
(7, 'asdfqwffqfqfas', 4, 4, 4, 4, 'Papua', 'adadasd', 1, 2, 3, 2),
(9, 'Kopi roaster 2', 2, 2, 2, 2, 'origin', 'alksdjasldk', 1, 4, 2, 3),
(10, 'Kopi roaster 2', 2, 2, 2, 2, 'origin', 'alksdjasldk', 1, 4, 2, 3),
(11, 'Kopi roaster 2', 2, 2, 2, 2, 'origin', 'alksdjasldk', 1, 4, 2, 3),
(12, 'sdsdfds', 4, 4, 4, 4, 'sdfsdf', 'asdassad', 1, 4, 2, 2),
(13, 'Gayo Apple Cider', 6, 8, 5, 6, 'Aceh', 'This coffee was our attempt in doing non-conventional coffee processing: anaerobic cherry maceration. If not carefully done, this kind of process can be a disaster resulting in coffee that has over-fermented flavor, something', 3, 3, 1, 1),
(14, 'Halu Choco Banana', 3, 5, 7, 4, 'Bali', 'Our coffee from West Java, Halu Pink Banana, has been everybody\'s favorite and in 2018 was one of our best selling coffee. We are working meticulously with the processor that has been working together with us for 3 years now.', 3, 4, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kopi_has_tastes`
--

CREATE TABLE `kopi_has_tastes` (
  `kopi_id_kopi` int(11) NOT NULL,
  `tastes_id_tastes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kopi_has_tastes`
--

INSERT INTO `kopi_has_tastes` (`kopi_id_kopi`, `tastes_id_tastes`) VALUES
(12, 2),
(3, 41),
(3, 27),
(3, 41),
(3, 20),
(13, 13),
(14, 39);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(225) DEFAULT NULL,
  `email_member` varchar(20) DEFAULT NULL,
  `username_member` varchar(225) DEFAULT NULL,
  `password_member` varchar(225) DEFAULT NULL,
  `foto_member` varchar(225) DEFAULT NULL,
  `keterangan_member` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `email_member`, `username_member`, `password_member`, `foto_member`, `keterangan_member`) VALUES
(1, 'Saya member pertama', 'member@member.com', 'member1', '1', NULL, 'asdasdasdads'),
(2, 'asdsad', 'member2@member.com', 'member2', '1', NULL, 'asdasdasdasdasd'),
(3, 'member ketiga', 'member@member.com', 'member3', '1', NULL, 'ini adalah member ketiga saya');

-- --------------------------------------------------------

--
-- Table structure for table `proses_kopi`
--

CREATE TABLE `proses_kopi` (
  `id_proses_kopi` int(11) NOT NULL,
  `nama_proses` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proses_kopi`
--

INSERT INTO `proses_kopi` (`id_proses_kopi`, `nama_proses`) VALUES
(1, 'Natural'),
(2, 'Washed'),
(3, 'Semi Washed'),
(4, 'Honey/Mield'),
(5, 'Natural Pulp');

-- --------------------------------------------------------

--
-- Table structure for table `roaster`
--

CREATE TABLE `roaster` (
  `id_roaster` int(11) NOT NULL,
  `nama_roaster` varchar(225) DEFAULT NULL,
  `username_roaster` varchar(225) DEFAULT NULL,
  `password_roaster` varchar(225) DEFAULT NULL,
  `deskripsi_roaster` tinytext,
  `alamat_roaster` tinytext,
  `lokasi` varchar(225) DEFAULT NULL,
  `telp_roaster` varchar(45) DEFAULT NULL,
  `foto_roaster` varchar(225) DEFAULT NULL,
  `email_roaster` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roaster`
--

INSERT INTO `roaster` (`id_roaster`, `nama_roaster`, `username_roaster`, `password_roaster`, `deskripsi_roaster`, `alamat_roaster`, `lokasi`, `telp_roaster`, `foto_roaster`, `email_roaster`) VALUES
(1, 'Roaster Pertama', 'roaster1', '1', 'ini adlaha roaster pertama', '1', NULL, '1', NULL, 'roaster@roaster.com'),
(3, 'Space Roastery', 'space', '1', 'Rasakan kopi paling fresh dan berkualitas langsung dari tempat pengolahannya\r\n Roast to Order\r\n· IBC Jury Tested ·\r\n 100% Handmade · \r\nFree Delivery Nationwide', 'Gang Loncang 88, Jalan Magelang KM 4.5 (depan TVRI), Rogoyudan, Sinduadi, Kec. Mlati, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55284', 'https://goo.gl/maps/ERn2ywm36WKCAET49', '0822-8890-9088', 'space_profile.png', 'spaceroastery@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `roast_prof`
--

CREATE TABLE `roast_prof` (
  `id_roast_prof` int(11) NOT NULL,
  `nama_roast_prof` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roast_prof`
--

INSERT INTO `roast_prof` (`id_roast_prof`, `nama_roast_prof`) VALUES
(1, 'Light'),
(2, 'Light to Medium'),
(3, 'Medium'),
(4, 'Medium to Dark'),
(5, 'Dark');

-- --------------------------------------------------------

--
-- Table structure for table `tastes`
--

CREATE TABLE `tastes` (
  `id_tastes` int(11) NOT NULL,
  `nama_tastes` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tastes`
--

INSERT INTO `tastes` (`id_tastes`, `nama_tastes`) VALUES
(1, 'Fruity'),
(2, 'Blackberry'),
(3, 'Raspberry'),
(4, 'Blueberry'),
(5, 'Strawberry'),
(6, 'Raisin'),
(7, 'Prune'),
(8, 'Coconut'),
(9, 'Cherry'),
(10, 'Pomegrante'),
(11, 'Pineapple'),
(12, 'Grape'),
(13, 'Apple'),
(14, 'Peach'),
(15, 'Pear'),
(16, 'Grapefruit'),
(17, 'Orange'),
(18, 'Lemon'),
(19, 'Lime'),
(20, 'Citric Acid'),
(21, 'Malic Acid'),
(22, 'Winey'),
(23, 'Floral'),
(24, 'Chamomile'),
(25, 'Rose'),
(26, 'Jasmine'),
(27, 'Black Tea'),
(28, 'Sweet'),
(29, 'Vanilin'),
(30, 'Vanilin'),
(31, 'Vanila'),
(32, 'Raisin'),
(33, 'Brownsugar'),
(34, 'Honey'),
(35, 'Caramelized'),
(36, 'Mapple Syrup'),
(37, 'Molasses'),
(38, 'Nutty/Cocoa'),
(39, 'Dark Chocolate'),
(40, 'Chocolate'),
(41, 'Almond'),
(42, 'Hazlenut'),
(43, 'Peanuts'),
(44, 'Spices');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `member_id_member` int(11) NOT NULL,
  `kopi_id_kopi` int(11) NOT NULL,
  `waktu_view` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`member_id_member`, `kopi_id_kopi`, `waktu_view`) VALUES
(1, 3, '2019-06-29 03:33:01'),
(1, 3, '2019-06-29 03:33:39'),
(1, 3, '2019-06-29 03:33:55'),
(1, 3, '2019-06-29 03:34:21'),
(1, 3, '2019-06-29 03:35:34'),
(1, 3, '2019-06-29 03:43:19'),
(1, 3, '2019-06-29 03:44:45'),
(1, 3, '2019-06-29 03:44:48'),
(1, 14, '2019-07-02 19:21:21'),
(1, 14, '2019-07-02 19:25:57'),
(1, 14, '2019-07-02 19:26:31'),
(1, 14, '2019-07-02 19:27:22'),
(1, 14, '2019-07-02 19:27:28'),
(1, 14, '2019-07-02 19:28:10'),
(1, 14, '2019-07-02 19:29:08'),
(1, 14, '2019-07-02 19:29:26'),
(1, 14, '2019-07-02 19:30:05'),
(1, 14, '2019-07-02 19:31:56'),
(1, 14, '2019-07-02 19:32:28'),
(1, 14, '2019-07-02 19:33:17'),
(1, 14, '2019-07-02 19:33:58'),
(1, 14, '2019-07-02 19:34:18'),
(1, 14, '2019-07-02 19:34:59'),
(1, 14, '2019-07-02 19:35:35'),
(1, 14, '2019-07-02 19:37:02'),
(1, 14, '2019-07-02 19:38:36'),
(1, 14, '2019-07-02 19:39:25'),
(1, 14, '2019-07-02 19:40:18'),
(1, 14, '2019-07-02 19:40:54'),
(1, 14, '2019-07-02 19:41:40'),
(1, 14, '2019-07-02 19:41:48'),
(1, 14, '2019-07-02 19:42:02'),
(1, 14, '2019-07-02 19:42:21'),
(1, 14, '2019-07-02 19:43:46'),
(1, 14, '2019-07-02 20:11:29'),
(1, 14, '2019-07-02 20:15:20'),
(1, 14, '2019-07-02 20:18:29'),
(1, 14, '2019-07-02 20:22:08'),
(1, 14, '2019-07-02 20:23:58'),
(1, 14, '2019-07-02 20:34:41'),
(1, 14, '2019-07-02 20:35:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `fk_foto_kopi1_idx` (`kopi_id_kopi`);

--
-- Indexes for table `jenis_kopi`
--
ALTER TABLE `jenis_kopi`
  ADD PRIMARY KEY (`id_jenis_kopi`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `fk_member_has_kopi_kopi1_idx` (`kopi_id_kopi`),
  ADD KEY `fk_member_has_kopi_member1_idx` (`member_id_member`),
  ADD KEY `fk_interaksi_roaster1_idx` (`roaster_id_roaster`);

--
-- Indexes for table `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id_kopi`),
  ADD KEY `fk_kopi_roaster_idx` (`roaster_id_roaster`),
  ADD KEY `fk_kopi_roast_prof1_idx` (`roast_prof_id_roast_prof`),
  ADD KEY `fk_kopi_jenis_kopi1_idx` (`jenis_kopi_id_jenis_kopi`),
  ADD KEY `fk_kopi_proses_kopi1_idx` (`proses_kopi_id_proses_kopi`);

--
-- Indexes for table `kopi_has_tastes`
--
ALTER TABLE `kopi_has_tastes`
  ADD KEY `fk_kopi_has_tastes_tastes1_idx` (`tastes_id_tastes`),
  ADD KEY `fk_kopi_has_tastes_kopi1_idx` (`kopi_id_kopi`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `proses_kopi`
--
ALTER TABLE `proses_kopi`
  ADD PRIMARY KEY (`id_proses_kopi`);

--
-- Indexes for table `roaster`
--
ALTER TABLE `roaster`
  ADD PRIMARY KEY (`id_roaster`);

--
-- Indexes for table `roast_prof`
--
ALTER TABLE `roast_prof`
  ADD PRIMARY KEY (`id_roast_prof`);

--
-- Indexes for table `tastes`
--
ALTER TABLE `tastes`
  ADD PRIMARY KEY (`id_tastes`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD KEY `fk_member_has_kopi_kopi2_idx` (`kopi_id_kopi`),
  ADD KEY `fk_member_has_kopi_member2_idx` (`member_id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jenis_kopi`
--
ALTER TABLE `jenis_kopi`
  MODIFY `id_jenis_kopi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id_kopi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proses_kopi`
--
ALTER TABLE `proses_kopi`
  MODIFY `id_proses_kopi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roaster`
--
ALTER TABLE `roaster`
  MODIFY `id_roaster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roast_prof`
--
ALTER TABLE `roast_prof`
  MODIFY `id_roast_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tastes`
--
ALTER TABLE `tastes`
  MODIFY `id_tastes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_foto_kopi1` FOREIGN KEY (`kopi_id_kopi`) REFERENCES `kopi` (`id_kopi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_interaksi_roaster1` FOREIGN KEY (`roaster_id_roaster`) REFERENCES `roaster` (`id_roaster`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_member_has_kopi_kopi1` FOREIGN KEY (`kopi_id_kopi`) REFERENCES `kopi` (`id_kopi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_member_has_kopi_member1` FOREIGN KEY (`member_id_member`) REFERENCES `member` (`id_member`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kopi`
--
ALTER TABLE `kopi`
  ADD CONSTRAINT `fk_kopi_jenis_kopi1` FOREIGN KEY (`jenis_kopi_id_jenis_kopi`) REFERENCES `jenis_kopi` (`id_jenis_kopi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kopi_proses_kopi1` FOREIGN KEY (`proses_kopi_id_proses_kopi`) REFERENCES `proses_kopi` (`id_proses_kopi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kopi_roast_prof1` FOREIGN KEY (`roast_prof_id_roast_prof`) REFERENCES `roast_prof` (`id_roast_prof`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kopi_roaster` FOREIGN KEY (`roaster_id_roaster`) REFERENCES `roaster` (`id_roaster`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kopi_has_tastes`
--
ALTER TABLE `kopi_has_tastes`
  ADD CONSTRAINT `fk_kopi_has_tastes_kopi1` FOREIGN KEY (`kopi_id_kopi`) REFERENCES `kopi` (`id_kopi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kopi_has_tastes_tastes1` FOREIGN KEY (`tastes_id_tastes`) REFERENCES `tastes` (`id_tastes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `view`
--
ALTER TABLE `view`
  ADD CONSTRAINT `fk_member_has_kopi_kopi2` FOREIGN KEY (`kopi_id_kopi`) REFERENCES `kopi` (`id_kopi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_member_has_kopi_member2` FOREIGN KEY (`member_id_member`) REFERENCES `member` (`id_member`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
