-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 03:06 AM
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
(14, 'assets/img/coffee/0e6a5860-ec94-4745-b28d-38e67b7d1cb3.jpg', 14),
(15, 'assets/img/coffee/d10ce1e9-19ab-4dfc-abdf-8349bd71be42.jpg', 15),
(16, 'assets/img/coffee/d10ce1e9-19ab-4dfc-abdf-8349bd71be42.jpg', 16),
(17, 'assets/img/coffee/d10ce1e9-19ab-4dfc-abdf-8349bd71be42.jpg', 18),
(18, 'assets/img/coffee/d10ce1e9-19ab-4dfc-abdf-8349bd71be42.jpg', 17),
(19, 'assets/img/coffee/bb.jpg', 19),
(49, 'assets/img/coffee/3dc2b2e0-8bac-45c4-8762-00914dfaea50.jpg', 13),
(50, 'assets/img/coffee/6f4cec39-5e45-45c4-9380-f67c04bba6cb.jpg', 19),
(51, 'assets/img/coffee/9cffa76b-8596-4207-9e2a-a695367748c3.jpg', 20);

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
  `isi_komentar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `member_id_member`, `roaster_id_roaster`, `kopi_id_kopi`, `waktu_komentar`, `isi_komentar`) VALUES
(1, 1, NULL, 14, '2019-07-03 00:00:00', 'ini isi komentar'),
(2, NULL, 3, 14, '2019-07-05 00:00:00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 3, NULL, 14, '2019-07-03 00:00:00', 'Komentar member ketiga'),
(8, NULL, 3, 14, '2019-07-08 00:00:00', 'isi'),
(11, NULL, 3, 13, '2019-07-06 01:45:08', 'ini komentar'),
(12, NULL, 3, 13, '2019-07-06 01:51:19', 'coba'),
(13, NULL, 3, 13, '2019-07-06 01:51:37', 'coba 2');

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
  `deskripsi_kopi` text,
  `roaster_id_roaster` int(11) NOT NULL,
  `roast_prof_id_roast_prof` int(11) NOT NULL,
  `jenis_kopi_id_jenis_kopi` int(2) NOT NULL,
  `proses_kopi_id_proses_kopi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kopi`
--

INSERT INTO `kopi` (`id_kopi`, `nama_kopi`, `acidity`, `sweet`, `bitter`, `savory`, `origin`, `deskripsi_kopi`, `roaster_id_roaster`, `roast_prof_id_roast_prof`, `jenis_kopi_id_jenis_kopi`, `proses_kopi_id_proses_kopi`) VALUES
(3, 'Kopi A', 9, 8, 6, 7, 'Bengkulu', '							This is the description of Kopi A						', 1, 1, 1, 1),
(4, 'Kopi B', 6, 7, 9, 8, 'Bali', '							This is the description of Kopi B						', 1, 2, 3, 2),
(5, 'Kopi C', 5, 7, 1, 6, 'Papua', 'This is the description of Kopi C', 1, 2, 3, 2),
(6, 'asdfqwffqfqf', 4, 4, 4, 4, 'Papua', 'adadasd', 1, 2, 3, 2),
(7, 'asdfqwffqfqfas', 4, 4, 4, 4, 'Papua', 'adadasd', 1, 2, 3, 2),
(9, 'Kopi roaster 2', 2, 2, 2, 2, 'origin', 'alksdjasldk', 1, 4, 2, 3),
(10, 'Kopi roaster 2', 2, 2, 2, 2, 'origin', 'alksdjasldk', 4, 4, 2, 3),
(11, 'Kopi roaster 2', 2, 2, 2, 2, 'origin', 'alksdjasldk', 1, 4, 2, 3),
(12, 'sdsdfds', 4, 4, 4, 4, 'sdfsdf', '							asdassad						', 1, 4, 2, 2),
(13, '', 6, 8, 5, 6, 'Aceh', '																																										This coffee was our attempt in doing non-conventional coffee processing: anaerobic cherry maceration. If not carefully done, this kind of process can be a disaster resulting in coffee that has over-fermented flavor, something																																				', 3, 3, 1, 1),
(14, 'Halu Choco Banana', 3, 5, 7, 4, 'Bali', 'Our coffee from West Java, Halu Pink Banana, has been everybody\'s favorite and in 2018 was one of our best selling coffee. We are working meticulously with the processor that has been working together with us for 3 years now.', 3, 4, 1, 4),
(15, 'Gayo Pantan Musara', 6, 4, 5, 3, 'Aceh', 'Kopi  yang berasal dari Aceh tepatnya di Pantan Musara, Gayo ini ditanam pada ketinggian 1500 - 1700 mdpl ini mempunyai varietas Caturra Abbysinia menghasilkan rasa kopi khas gayo yang tidak pernah anda rasakan sebelumnya', 5, 3, 1, 2),
(16, 'Papandayan Honey', 5, 7, 4, 4, 'Garut', 'Pangauban Red Honey\r\n\r\nRegion : Papandayan, Pangauban, Garut\r\nAltitude : 1400 mdpl\r\nVarietas : Typica, bourbon & Sigararutang \r\nProses : Red Honey\r\nPemroses : Siliwangi Cooperative\r\nRoast Profile : Light To Medium', 5, 2, 1, 4),
(17, 'Papandayan Honey', 5, 7, 4, 4, 'Garut', 'Pangauban Red Honey\r\n\r\nRegion : Papandayan, Pangauban, Garut\r\nAltitude : 1400 mdpl\r\nVarietas : Typica, bourbon & Sigararutang \r\nProses : Red Honey\r\nPemroses : Siliwangi Cooperative\r\nRoast Profile : Light To Medium', 5, 2, 1, 4),
(18, 'Pandan Gayo', 6, 5, 6, 6, 'Garut', 'asdadsad', 5, 2, 1, 4),
(19, 'BLUEBERRY CAKE OF SHEMBATI', 4, 7, 5, 3, 'Shembati, Burundi', '							African coffee other than Ethiopia, usually has this strong characters that remind us of berries, dried fruits and lingering caramel sweetness that has its own cult just because of its unique characters. We found that this coffee sometimes better brewed using immersion method so that it has more crispiness that we feel suitable with the characters.\r\n    Burundi, a small country in Africa only produces comparably small yield of coffee per year. This forces them to pursue into more quality coffee rather than commodity coffee so that it is not surprising if their coffee becoming better and better every year.						', 3, 3, 1, 2),
(20, 'Kopi cobaan', 5, 5, 5, 5, 'coba', 'dffsdfds', 3, 5, 1, 1);

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
(14, 39),
(15, 1);

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
(1, 'Saya member pertama kali', 'member@member.com', 'member1', '1', 'maige.jpg', 'asdasdasdads'),
(2, 'asdsad', 'member2@member.com', 'member2', '1', NULL, 'asdasdasdasdasd'),
(3, 'member ketiga', 'member@member.com', 'member3', '1', 'male3.png', 'ini adalah member ketiga saya'),
(6, 'mail', 'email@email.com', 'member5', '1', NULL, 'q'),
(7, 'Riefat Fatanah', 'riefat.fatanah@gmail', 'frtanah', '1', NULL, 'saya senang kopi, hidup saya bergantung pada kopi'),
(8, 'dgfdg', 'dfg@dfs', '', 'dfgdg', NULL, 'fdgdg');

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
(1, 'Roaster Pertama', 'roaster1', '1', 'ini adlaha roaster pertama', '1', 'https://goo.gl/maps/ERn2ywm36WKCAET49', '1', 'roaster_pertama.jpg', 'roaster@roaster.com'),
(3, 'Space Roastery', 'space', '1', 'Rasakan kopi paling fresh dan berkualitas langsung dari tempat pengolahannya\r\n Roast to Order\r\n· IBC Jury Tested ·\r\n 100% Handmade · \r\nFree Delivery Nationwide', 'Gang Loncang 88, Jalan Magelang KM 4.5 (depan TVRI), Rogoyudan, Sinduadi, Kec. Mlati, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55284', 'https://goo.gl/maps/ERn2ywm36WKCAET49', '0822-8890-9088', 'space_profile.png', 'spaceroastery@gmail.com'),
(4, 'Roaster Kedua', 'roaster2', '1', 'ini adalah Bio roaster kedua', 'alamat roaster kedua', NULL, '0848848', 'female4.png', 'lasdlk'),
(5, 'Maige Coffee', 'maige', '1', 'Menjual Kopi Sangrai Arabica Single Origin dan Espresso Based', 'Blunyah Gede Kota Yogyakarta 55284', 'https://goo.gl/maps/PMX7rufPypuZfabf9', '081252049909', 'maige.jpg', 'maige@gmail.com');

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
(1, 14, '2019-07-02 20:35:42'),
(1, 3, '2019-07-05 12:01:05'),
(1, 3, '2019-07-05 12:02:33'),
(1, 3, '2019-07-05 12:02:54'),
(1, 3, '2019-07-05 12:03:51'),
(1, 3, '2019-07-05 12:04:08'),
(1, 4, '2019-07-05 12:04:48'),
(1, 4, '2019-07-05 12:05:24'),
(1, 4, '2019-07-05 12:05:38'),
(1, 4, '2019-07-05 12:05:49'),
(1, 3, '2019-07-05 12:10:29'),
(1, 3, '2019-07-05 12:12:07'),
(1, 3, '2019-07-05 12:12:24'),
(1, 3, '2019-07-05 12:12:35'),
(1, 3, '2019-07-05 12:13:11'),
(1, 3, '2019-07-05 12:13:58'),
(1, 5, '2019-07-05 12:14:07'),
(1, 3, '2019-07-05 12:15:08'),
(1, 5, '2019-07-05 12:15:14'),
(1, 5, '2019-07-05 12:15:45'),
(1, 5, '2019-07-05 12:15:56'),
(1, 5, '2019-07-05 12:16:03'),
(1, 3, '2019-07-05 12:16:23'),
(1, 5, '2019-07-05 12:16:57'),
(1, 5, '2019-07-05 12:17:32'),
(1, 5, '2019-07-05 12:17:41'),
(1, 5, '2019-07-05 12:17:47'),
(1, 5, '2019-07-05 12:18:21'),
(1, 5, '2019-07-05 12:18:42'),
(1, 3, '2019-07-05 12:19:32'),
(1, 3, '2019-07-05 12:22:17'),
(1, 3, '2019-07-05 12:23:47'),
(1, 3, '2019-07-05 12:24:12'),
(1, 3, '2019-07-05 12:24:44'),
(1, 3, '2019-07-05 12:25:19'),
(1, 3, '2019-07-05 12:25:42'),
(1, 3, '2019-07-05 12:26:07'),
(1, 3, '2019-07-05 12:26:21'),
(1, 3, '2019-07-05 12:26:51'),
(1, 3, '2019-07-05 12:48:01'),
(1, 3, '2019-07-05 12:49:18'),
(1, 3, '2019-07-05 12:49:26'),
(1, 5, '2019-07-05 12:50:10'),
(1, 3, '2019-07-05 15:38:39'),
(1, 3, '2019-07-05 18:04:30'),
(1, 14, '2019-07-05 18:04:40'),
(1, 13, '2019-07-05 18:04:49'),
(1, 12, '2019-07-05 18:05:24'),
(1, 14, '2019-07-05 18:59:35'),
(1, 13, '2019-07-05 20:18:25'),
(1, 14, '2019-07-05 20:40:57'),
(1, 14, '2019-07-05 20:41:50'),
(1, 14, '2019-07-05 22:10:07'),
(1, 14, '2019-07-05 22:29:55'),
(1, 14, '2019-07-05 22:30:19'),
(1, 14, '2019-07-05 22:30:48'),
(1, 14, '2019-07-05 22:35:26'),
(1, 14, '2019-07-05 22:36:09'),
(1, 14, '2019-07-05 22:49:40'),
(1, 14, '2019-07-05 22:54:31'),
(1, 14, '2019-07-05 22:55:04'),
(1, 14, '2019-07-05 22:57:21'),
(1, 14, '2019-07-05 23:01:38'),
(1, 14, '2019-07-05 23:07:37'),
(1, 14, '2019-07-05 23:08:08'),
(1, 14, '2019-07-05 23:09:31'),
(1, 14, '2019-07-05 23:09:49'),
(1, 14, '2019-07-05 23:11:23'),
(1, 14, '2019-07-05 23:16:08'),
(1, 14, '2019-07-05 23:17:33'),
(1, 14, '2019-07-05 23:17:54'),
(1, 14, '2019-07-05 23:18:04'),
(1, 14, '2019-07-05 23:20:35'),
(1, 14, '2019-07-05 23:22:37'),
(1, 14, '2019-07-05 23:23:00'),
(1, 14, '2019-07-05 23:23:10'),
(1, 14, '2019-07-05 23:28:10'),
(1, 14, '2019-07-05 23:48:29'),
(1, 14, '2019-07-05 23:56:51'),
(1, 14, '2019-07-05 23:57:17'),
(1, 14, '2019-07-05 23:58:11'),
(1, 14, '2019-07-05 23:58:36'),
(1, 14, '2019-07-05 23:59:17'),
(1, 14, '2019-07-05 23:59:35'),
(1, 14, '2019-07-05 23:59:47'),
(1, 14, '2019-07-06 00:05:19'),
(1, 14, '2019-07-06 00:09:11'),
(1, 14, '2019-07-06 00:10:22'),
(1, 14, '2019-07-06 00:11:34'),
(1, 14, '2019-07-06 00:18:58'),
(1, 14, '2019-07-06 00:19:33'),
(1, 14, '2019-07-06 00:19:46'),
(1, 14, '2019-07-06 00:20:10'),
(1, 14, '2019-07-06 00:21:32'),
(1, 14, '2019-07-06 00:22:08'),
(1, 14, '2019-07-06 00:22:21'),
(1, 14, '2019-07-06 00:22:24'),
(1, 14, '2019-07-06 00:30:24'),
(1, 14, '2019-07-06 00:30:50'),
(1, 14, '2019-07-06 00:31:56'),
(1, 14, '2019-07-06 00:32:54'),
(1, 14, '2019-07-06 00:36:30'),
(1, 14, '2019-07-06 00:36:53'),
(1, 14, '2019-07-06 00:39:27'),
(1, 14, '2019-07-06 00:40:36'),
(1, 14, '2019-07-06 00:41:23'),
(1, 14, '2019-07-06 00:41:33'),
(1, 14, '2019-07-06 00:41:51'),
(1, 14, '2019-07-06 00:42:07'),
(1, 14, '2019-07-06 00:42:29'),
(1, 14, '2019-07-06 00:43:10'),
(1, 14, '2019-07-06 00:45:01'),
(1, 14, '2019-07-06 00:45:35'),
(1, 14, '2019-07-06 00:45:45'),
(1, 14, '2019-07-06 00:46:08'),
(1, 14, '2019-07-06 00:47:18'),
(1, 14, '2019-07-06 00:47:25'),
(1, 14, '2019-07-06 00:47:57'),
(1, 14, '2019-07-06 00:48:05'),
(1, 14, '2019-07-06 00:49:30'),
(1, 14, '2019-07-06 00:50:21'),
(1, 14, '2019-07-06 00:51:27'),
(1, 14, '2019-07-06 00:51:59'),
(1, 14, '2019-07-06 00:52:59'),
(1, 14, '2019-07-06 00:53:35'),
(1, 14, '2019-07-06 00:53:55'),
(1, 14, '2019-07-06 00:54:01'),
(1, 14, '2019-07-06 00:59:04'),
(1, 14, '2019-07-06 00:59:42'),
(1, 14, '2019-07-06 00:59:54'),
(1, 14, '2019-07-06 01:00:01'),
(1, 14, '2019-07-06 01:00:07'),
(1, 14, '2019-07-06 01:00:11'),
(1, 14, '2019-07-06 01:04:14'),
(1, 14, '2019-07-06 01:04:56'),
(1, 14, '2019-07-06 01:05:10'),
(1, 14, '2019-07-06 01:11:15'),
(3, 10, '2019-07-07 00:00:00'),
(1, 3, '2019-07-09 21:00:57'),
(1, 18, '2019-07-09 21:01:10'),
(1, 15, '2019-07-09 21:01:23'),
(1, 3, '2019-07-09 21:55:00'),
(6, 17, '2019-07-10 19:11:46'),
(1, 3, '2019-07-10 23:20:11'),
(1, 19, '2019-07-15 05:58:47'),
(1, 19, '2019-07-21 10:43:09'),
(1, 19, '2019-07-21 11:50:33'),
(1, 18, '2019-07-21 11:50:46'),
(1, 18, '2019-07-21 11:50:59'),
(1, 19, '2019-07-21 11:51:10'),
(1, 19, '2019-07-21 11:51:20'),
(1, 19, '2019-07-21 11:51:30'),
(1, 18, '2019-07-21 11:51:34'),
(1, 18, '2019-07-21 11:51:45'),
(1, 19, '2019-07-22 08:32:56'),
(1, 19, '2019-07-22 08:34:37'),
(1, 19, '2019-07-22 08:34:52'),
(1, 19, '2019-07-22 08:35:03'),
(1, 19, '2019-07-22 08:35:38'),
(1, 19, '2019-07-22 08:36:18'),
(1, 19, '2019-07-22 08:36:26'),
(1, 19, '2019-07-22 08:36:33'),
(1, 19, '2019-07-22 08:47:54'),
(1, 15, '2019-07-24 02:14:57'),
(1, 14, '2019-07-24 02:15:01'),
(1, 13, '2019-07-24 02:15:06'),
(1, 14, '2019-07-24 02:15:26'),
(1, 19, '2019-07-24 02:47:19'),
(1, 13, '2019-07-24 02:47:24'),
(1, 20, '2019-07-24 02:47:29'),
(1, 19, '2019-07-24 02:47:33'),
(1, 20, '2019-07-24 02:47:45'),
(1, 19, '2019-07-25 03:04:16');

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
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `jenis_kopi`
--
ALTER TABLE `jenis_kopi`
  MODIFY `id_jenis_kopi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id_kopi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proses_kopi`
--
ALTER TABLE `proses_kopi`
  MODIFY `id_proses_kopi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roaster`
--
ALTER TABLE `roaster`
  MODIFY `id_roaster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
