-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 02:20 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `name`, `phone`, `city`, `address`, `password`, `status`, `balence`, `last_login`, `token`, `creat_date`, `last_update`) VALUES
(2, 2, 'Ahmed Alhmdany', 0, 'صنعاء ', 'الحصبة', 'test11', 0, 10000, '2020-10-02 01:20:53', '', '2020-10-02 01:20:53', '2020-10-02 01:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `api_url` varchar(255) NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `balence` double NOT NULL,
  `status` int(1) NOT NULL,
  `promotian` double NOT NULL,
  `creat_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `phone`, `address`, `api_url`, `access_token`, `balence`, `status`, `promotian`, `creat_at`, `update_at`) VALUES
(1, 'MTN', 733333333, 'hadda', 'http://localhost/phpmyadmin/tbl_change.php?db=mdb&table=company', '', 50000, 0, 1, '2020-10-02 03:53:20', '2020-10-02 03:53:20'),
(2, 'Sabafon', 711111111, 'AL-Zubairy', 'http://localhost/phpmyadmin/tbl_change.php?db=mdb&amp;table=company', '', 50000, 0, 1, '2020-10-02 03:53:20', '2020-10-02 03:53:20'),
(3, 'YMobile', 777777777, 'AL-Jeraf', 'http://localhost/phpmyadmin/tbl_change.php?db=mdb&amp;table=company', '', 50000, 0, 1, '2020-10-02 03:53:20', '2020-10-02 03:53:20');

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
(2, 'admin', 'admin@gmail.com', 774005157, 'admin', 0, '2020-10-02 01:02:25', '', '2020-10-02 01:02:25', '2020-10-02 01:02:25'),
(3, 'Qutiba', 'Qutiba@gmail.com', 775758845, 'Qutiba', 0, '2020-10-02 01:02:25', '', '2020-10-02 01:02:25', '2020-10-02 01:02:25');

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
(1, 1, 'باقة الطالب 600 ريال', 600, 'باقة الطالب ابو 600 وانت وخراجك', '2020-10-02 06:45:52', '2020-10-02 06:45:52');

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
(2, 2, 3, 1, 350, 775758845, 0, '2020-10-02 00:00:00');

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
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `client_id`, `user_id`, `price`, `creat_at`, `update_at`) VALUES
(1, 2, 2, 1000, '2020-10-02 00:00:00', '2020-10-09 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `man_user`
--
ALTER TABLE `man_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `proccess`
--
ALTER TABLE `proccess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
