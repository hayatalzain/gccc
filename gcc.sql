-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2019 at 01:41 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_three`
--

DROP TABLE IF EXISTS `card_three`;
CREATE TABLE IF NOT EXISTS `card_three` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(150) COLLATE utf8_bin NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `details` varchar(500) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `card_three`
--

INSERT INTO `card_three` (`id`, `image`, `title`, `details`, `created_at`, `updated_at`) VALUES
(3, 'image_1549459852.JPG', 'mahahjhjh', 'mahamhammahamhammahamhammahamhammahamham', '2019-02-06 10:30:09', '2019-02-06 11:30:52'),
(4, 'image_1549459823.JPG', 'fainl test', 'fainl testfainl testfainl test', '2019-02-06 11:30:23', '2019-02-06 11:30:23'),
(5, 'image_1549459889.JPG', 'final', 'finalfinalfinalfinal', '2019-02-06 11:31:29', '2019-02-06 11:31:29'),
(6, 'image_1549459911.JPG', 'new title edit', 'new title editnew title editnew title edit', '2019-02-06 11:31:51', '2019-02-06 11:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `features_slide`
--

DROP TABLE IF EXISTS `features_slide`;
CREATE TABLE IF NOT EXISTS `features_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(150) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `features_slide`
--

INSERT INTO `features_slide` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'image_1549459006.JPG', '2019-02-06 11:06:14', '2019-02-06 11:16:46'),
(5, 'image_1549459677.JPG', '2019-02-06 11:27:57', '2019-02-06 11:27:57'),
(4, 'image_1549458992.JPG', '2019-02-06 11:16:32', '2019-02-06 11:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(200) COLLATE utf8_bin NOT NULL,
  `value` varchar(1000) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'hay', '<p>Initialize the Froala WYSIWYG HTML Editor on a textarea.</p>', '2019-02-09 07:33:47', '2019-02-09 07:33:47'),
(2, 'wasim', '<p>Initialize&nbsp;</p>', '2019-02-09 07:36:45', '2019-02-09 07:36:45'),
(3, 'halaaa', '<p>hala</p>', '2019-02-10 00:01:03', '2019-02-10 00:01:03'),
(4, 'halaaa', '<p>hala</p>', '2019-02-10 00:02:41', '2019-02-10 00:02:41'),
(5, 'test1', '<p>test&nbsp;</p>', '2019-02-10 00:13:19', '2019-02-10 00:13:19'),
(6, 'test 8', '<p>Initializ</p>', '2019-02-10 00:16:21', '2019-02-10 00:16:21'),
(7, 'test 8', '<p>Initializ</p>', '2019-02-10 00:16:44', '2019-02-10 00:16:44'),
(8, 'retan', '<p>HTML Editor on a textarea.</p>', '2019-02-10 00:21:36', '2019-02-10 00:21:36'),
(9, 'halaaa', '<p>dfvsdcscxaz</p>', '2019-02-10 00:29:41', '2019-02-10 00:29:41'),
(10, 'tota', '<p><strong>toto</strong></p>', '2019-02-10 00:30:04', '2019-02-10 00:30:04'),
(11, 'test1', '<p>easfcedsfascas</p>', '2019-02-10 00:30:32', '2019-02-10 00:30:32'),
(12, 'test1', '<p>sqaSDXSAdSA</p>', '2019-02-10 00:31:23', '2019-02-10 00:31:23'),
(13, 'halaaa', '<p><u><em><s>SFCDSCSA</s></em></u></p>', '2019-02-10 00:31:55', '2019-02-10 00:31:55'),
(14, 'ASASSA', '<p>QSWADWSAD</p>', '2019-02-10 00:32:22', '2019-02-10 00:32:22'),
(15, 'D', '<p>ASD<sub>2</sub></p>', '2019-02-10 00:33:05', '2019-02-10 00:33:05'),
(16, 'E', '<h1>dsljksjd</h1>', '2019-02-10 00:33:51', '2019-02-10 00:33:51'),
(17, 'img', '<p><img class=\"fr-fic fr-dii\"></p>', '2019-02-10 00:34:46', '2019-02-10 00:34:46'),
(18, 'halaaa', '<p>hala</p>', '2019-02-10 05:47:32', '2019-02-10 05:47:32'),
(19, 'halaaa', '<p>sSs</p>', '2019-02-10 11:45:08', '2019-02-10 11:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL,
  `image` varchar(200) COLLATE utf8_bin NOT NULL,
  `details` varchar(500) COLLATE utf8_bin NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `read_more` varchar(100) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `date`, `image`, `details`, `type`, `read_more`, `created_at`, `updated_at`) VALUES
(5, 'ggggg', '2019-02-18 22:00:00', 'image_1549884404.JPG', 'ggggggggg', 2, 'ggggggggggg', '2019-02-11 09:17:16', '2019-02-11 10:13:26'),
(2, 'test2', '2019-02-12 22:00:00', 'image_1549874361.JPG', 'dsfdfds', 1, 'TEST1', '2019-02-11 06:39:21', '2019-02-11 06:39:21'),
(3, 'dfdfd', '2019-02-12 22:00:00', 'image_1549878248.JPG', 'sdsdaa', 2, 'TEST1', '2019-02-11 07:44:08', '2019-02-11 07:44:08'),
(4, 'ertweds', '2019-02-02 22:00:00', 'image_1549878391.JPG', 'ssss', 2, 'TEST1', '2019-02-11 07:46:31', '2019-02-11 09:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE IF NOT EXISTS `sponsors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) COLLATE utf8_bin NOT NULL,
  `link_image` varchar(200) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `image`, `link_image`, `created_at`, `updated_at`) VALUES
(62, 'image_1549459744.JPG', 'fainal test', '2019-02-06 11:29:04', '2019-02-06 11:29:04'),
(61, 'image_1549459787.JPG', 'one', '2019-02-06 08:39:22', '2019-02-06 11:29:47'),
(27, 'image_1549441428.JPG', 'c1c2c3', '2019-02-05 09:51:44', '2019-02-06 06:23:48'),
(26, 'image_1549431163.JPG', 'update31', '2019-02-05 09:50:17', '2019-02-06 03:32:43'),
(25, 'image_1549435117.JPG', 'z1z1z', '2019-02-05 09:47:38', '2019-02-06 04:38:37'),
(24, 'image_1549443830.JPG', 'hayat28888', '2019-02-05 09:45:53', '2019-02-06 07:03:50'),
(16, 'image_1549435086.JPG', 'slider', '2019-02-05 06:18:24', '2019-02-06 04:38:06'),
(17, 'image_1549355598.jpg', 'test5', '2019-02-05 06:33:18', '2019-02-05 06:33:18'),
(18, 'image_1549355622.jpg', 'wwwwuhkiuyiu', '2019-02-05 06:33:42', '2019-02-05 06:33:42'),
(19, 'image_1549363229.jpg', 'test99', '2019-02-05 08:40:29', '2019-02-05 08:40:29'),
(20, 'image_1549363268.jpg', 'test44', '2019-02-05 08:41:08', '2019-02-05 08:41:08'),
(21, 'image_1549363375.jpg', 'test44', '2019-02-05 08:42:55', '2019-02-05 08:42:55'),
(22, 'image_1549363439.JPG', 'jdkj', '2019-02-05 08:43:59', '2019-02-05 08:43:59'),
(23, 'image_1549363599.jpg', 'test 5', '2019-02-05 08:46:39', '2019-02-05 08:46:39'),
(42, 'image_1549371620.JPG', 'wwwwuhkiuyiu', '2019-02-05 11:00:20', '2019-02-05 11:00:20'),
(33, 'image_1549367766.jpg', 'wwwwuhkiuyiu', '2019-02-05 09:56:06', '2019-02-05 09:56:06'),
(43, 'image_1549371702.jpg', 'wwwwsw', '2019-02-05 11:01:42', '2019-02-05 11:01:42'),
(35, 'image_1549368887.jpg', 'maha', '2019-02-05 10:14:47', '2019-02-05 10:14:47'),
(37, 'image_1549369122.jpg', 'wwwwswdws', '2019-02-05 10:18:42', '2019-02-05 10:18:42'),
(38, 'image_1549369176.jpg', 'fainal', '2019-02-05 10:19:36', '2019-02-05 10:19:36'),
(39, 'image_1549371264.JPG', 'ww888', '2019-02-05 10:24:09', '2019-02-05 10:54:43'),
(40, 'image_1549369674.jpg', 'wwol8888', '2019-02-05 10:27:54', '2019-02-05 10:52:29'),
(44, 'image_1549371730.jpg', 'wwww', '2019-02-05 11:02:10', '2019-02-05 11:02:10'),
(45, 'image_1549371774.jpg', 'mahaaaa', '2019-02-05 11:02:54', '2019-02-05 11:02:54'),
(46, 'image_1549371828.jpg', 'jjkjhlkj', '2019-02-05 11:03:48', '2019-02-05 11:03:48'),
(47, 'image_1549372012.jpg', 'wqwf', '2019-02-05 11:06:52', '2019-02-05 11:06:52'),
(48, 'image_1549372447.JPG', 'wscs', '2019-02-05 11:14:07', '2019-02-05 11:14:07'),
(49, 'image_1549372500.jpg', 'mahaaaa', '2019-02-05 11:15:00', '2019-02-05 11:15:00'),
(50, 'image_1549372611.JPG', 'wwwwuhkiuyiu', '2019-02-05 11:16:51', '2019-02-05 11:16:51'),
(51, 'image_1549373422.jpg', 'cvvbvb', '2019-02-05 11:30:22', '2019-02-05 11:30:22'),
(52, 'image_1549373504.jpg', 'wwwwuhkiuyiu', '2019-02-05 11:31:44', '2019-02-05 11:31:44'),
(53, 'image_1549373609.jpg', 'wwww', '2019-02-05 11:33:29', '2019-02-05 11:33:29'),
(54, 'image_1549373792.jpg', 'wwwwuhkiuyiu', '2019-02-05 11:36:32', '2019-02-05 11:36:32'),
(55, 'image_1549419507.jpg', 'test n', '2019-02-06 00:18:27', '2019-02-06 00:18:27'),
(56, 'image_1549419695.png', 'final', '2019-02-06 00:21:35', '2019-02-06 00:21:35'),
(59, 'image_1549424810.JPG', 'jjkjhlkj', '2019-02-06 01:46:50', '2019-02-06 01:46:50'),
(60, 'image_1549424906.JPG', 'wwww', '2019-02-06 01:48:26', '2019-02-06 01:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `table_conference`
--

DROP TABLE IF EXISTS `table_conference`;
CREATE TABLE IF NOT EXISTS `table_conference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conference` varchar(50) COLLATE utf8_bin NOT NULL,
  `conference_title` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `table_conference`
--

INSERT INTO `table_conference` (`id`, `conference`, `conference_title`, `date`, `created_at`, `updated_at`) VALUES
(3, 'ppp', 'gg', '2019-02-03', '2019-01-17 09:05:01', '2019-02-11 11:09:28'),
(4, 'sssssss', 'title test1', '2019-02-12', '2019-02-07 09:44:48', '2019-02-11 11:03:44'),
(5, 'test 1jhjh0000', 'title test1', '2019-02-19', '2019-02-07 09:45:22', '2019-02-11 11:10:26'),
(6, 'test 5', 'title test 5', '2019-02-15', '2019-02-07 10:12:04', '2019-02-07 10:12:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
