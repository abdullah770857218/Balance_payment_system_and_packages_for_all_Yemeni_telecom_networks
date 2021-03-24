-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 01:02 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `balence` double NOT NULL,
  `last_login` datetime NOT NULL,
  `token` varchar(255) NOT NULL,
  `creat_date` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `activety` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `name`, `phone`, `city`, `address`, `password`, `status`, `balence`, `last_login`, `token`, `creat_date`, `last_update`, `activety`) VALUES
(2, 3, 'احمد الهمداني', 774809266, 'صنعاء', 'الامانة', '774809266', 1, 48500, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '2020-10-20 00:55:25', 1),
(3, 2, 'qatiba', 775758845, 'sana', 'airport street', '775758845', 1, 51500, '2020-10-22 00:39:58', '', '0000-00-00 00:00:00', '2020-10-20 00:55:33', 1),
(4, 3, 'حمزة', 775570013, '', 'صنعاء', '775570013', 1, 5000, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '2020-10-20 00:20:22', 0),
(8, 2, 'عبدالله الشريف', 770857218, 'صنعاء', 'الستين', '770857218', 1, 5000, '2020-10-20 00:38:58', '', '0000-00-00 00:00:00', '2020-10-20 00:41:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `api_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `access_token` varchar(255) CHARACTER SET utf8 NOT NULL,
  `balence` double NOT NULL,
  `status` int(1) NOT NULL,
  `promotian` double NOT NULL,
  `creat_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `phone`, `address`, `api_url`, `access_token`, `balence`, `status`, `promotian`, `creat_at`, `update_at`) VALUES
(1, 'Y', 70, 'hadda', 'http://localhost/phpmyadmin/tbl_change.php?db=mdb&amp;amp;table=company', '', 50000, 1, 1, '0000-00-00 00:00:00', '2020-10-14 22:00:58'),
(2, 'sabafon', 71, 'الحصبة', '', '', 50000, 1, 1, '0000-00-00 00:00:00', '2020-10-19 02:25:57'),
(3, 'YMobile', 77, 'AL-Jeraf', 'http://localhost/phpmyadmin/tbl_change.php?db=mdb&amp;amp;amp;table=company', '', 50000, 1, 1, '0000-00-00 00:00:00', '2020-10-14 21:41:59'),
(4, 'MTN', 73, 'alzberi', '', '', 48500, 1, 1, '2020-10-15 22:52:59', '2020-10-23 22:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `man_user`
--

CREATE TABLE `man_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `last_login` datetime NOT NULL,
  `token` varchar(255) NOT NULL,
  `creat_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `man_user`
--

INSERT INTO `man_user` (`id`, `name`, `email`, `phone`, `password`, `status`, `last_login`, `token`, `creat_at`, `update_at`) VALUES
(2, 'Ahmed', 'admin@gmail.com', 774809266, '774809266', 1, '2020-10-02 01:02:25', '', '2020-10-02 01:02:25', '2020-10-02 01:02:25'),
(3, 'Qutiba', 'Qutiba@gmail.com', 775758845, '775758845', 1, '2020-10-02 01:02:25', '', '2020-10-02 01:02:25', '2020-10-02 01:02:25'),
(4, 'Abdullah', 'abdulllah@gmail.com', 770857218, '770857218', 1, '2020-10-17 01:46:30', '', '2020-10-20 01:46:30', '2020-10-20 01:46:30'),
(5, 'Hamzah', 'Hamzah77@gmail.com', 775570013, '775570013', 1, '2020-10-20 01:48:08', '', '2020-10-20 01:48:08', '2020-10-21 01:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(255) NOT NULL,
  `creat_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `company_id`, `name`, `price`, `description`, `creat_at`, `update_at`) VALUES
(1, 1, 'مزايا اسبوعية', 600, 'alzra3h', '0000-00-00 00:00:00', '2020-10-17 18:10:30'),
(2, 2, 'عربي', 10, 'عو', '0000-00-00 00:00:00', '2020-10-17 18:16:57'),
(3, 3, 'مزايا', 500, 'iyujthgfsda', '0000-00-00 00:00:00', '2020-10-17 18:03:59'),
(4, 4, 'الطالب', 1500, 'انترنت لا محدود ', '2020-10-13 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 'مكس اسبوعيه', 700, 'انترنت لا محدود ', '2020-10-06 00:00:00', '2020-10-19 23:26:20'),
(6, 4, 'مكس شهريه', 1200, 'اتصال 100د', '0000-00-00 00:00:00', '2020-10-19 23:27:06'),
(7, 4, 'باقه 150 ميغا', 1000, '150ميغا فقط', '2020-10-15 00:00:00', '2020-10-19 23:27:59'),
(11, 3, 'مكس شهريه', 2350, '600ميغا 6000 رساله', '2020-10-01 00:00:00', '0000-00-00 00:00:00'),
(12, 3, 'مزايا شهري 200 ميغا', 1175, '100رساله 200ميغا', '2020-10-18 00:00:00', '2020-10-19 23:36:41'),
(13, 2, '100 وحده', 100, '100وحدة', '2020-10-07 00:00:00', '2020-10-19 23:43:34'),
(14, 2, '40 وحده', 50, '40 وحده', '0000-00-00 00:00:00', '2020-10-19 23:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `proccess`
--

CREATE TABLE `proccess` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `phone_customer` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `creat_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proccess`
--

INSERT INTO `proccess` (`id`, `client_id`, `company_id`, `offer_id`, `price`, `phone_customer`, `status`, `creat_at`) VALUES
(1, 2, 1, 1, 600, 774005157, 1, '2020-10-02 08:38:08'),
(2, 2, 3, 1, 350, 775758845, 0, '2020-10-02 00:00:00'),
(3, 3, 1, 2, 1000, 775758845, 1, '2020-10-02 08:38:08'),
(4, 3, 2, 2, 1350, 712000000, 1, '2020-10-19 01:49:05'),
(5, 3, 1, 1, 600, 700000000, 1, '2020-10-19 02:00:42'),
(6, 3, 1, 1, 600, 700000000, 1, '2020-10-19 02:04:02'),
(7, 3, 3, 3, 500, 777777777, 1, '2020-10-19 21:49:15'),
(8, 3, 2, 2, 1350, 777777777, 1, '2020-10-19 21:51:28'),
(9, 2, 4, 4, 1500, 737304675, 1, '2020-10-20 01:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `purche`
--

CREATE TABLE `purche` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `creat_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purche`
--

INSERT INTO `purche` (`id`, `company_id`, `user_id`, `price`, `creat_at`, `update_at`) VALUES
(1, 1, 3, 10000, '2020-10-02 07:38:45', '2020-10-02 07:38:45'),
(2, 2, 3, 20000, '2020-10-02 07:38:45', '2020-10-02 07:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `creat_at` datetime NOT NULL,
  `type_pay` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `client_id`, `user_id`, `price`, `creat_at`, `type_pay`) VALUES
(1, 2, 2, 1000, '2020-10-02 00:00:00', 127);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `man_user`
--
ALTER TABLE `man_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `proccess`
--
ALTER TABLE `proccess`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `purche`
--
ALTER TABLE `purche`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `man_user`
--
ALTER TABLE `man_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `proccess`
--
ALTER TABLE `proccess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purche`
--
ALTER TABLE `purche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `man_user` (`id`);

--
-- Constraints for table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`);

--
-- Constraints for table `proccess`
--
ALTER TABLE `proccess`
  ADD CONSTRAINT `proccess_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `proccess_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `proccess_ibfk_3` FOREIGN KEY (`offer_id`) REFERENCES `offer` (`id`);

--
-- Constraints for table `purche`
--
ALTER TABLE `purche`
  ADD CONSTRAINT `purche_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `purche_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `man_user` (`id`);

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `man_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
