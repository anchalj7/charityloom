-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 05, 2024 at 01:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charityloom1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `status`, `created_at`) VALUES
(12, 'Charityloom12@gmail.com', '202cb962ac59075b964b07152d234b70', 'Active', '2024-07-09 07:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(9) NOT NULL,
  `donor name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `expiry_date` varchar(50) DEFAULT NULL,
  `mfg_date` varchar(50) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `ngo` varchar(50) DEFAULT NULL,
  `pickup_address` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `donor name`, `email`, `type`, `description`, `expiry_date`, `mfg_date`, `image`, `ngo`, `pickup_address`, `status`, `created_at`) VALUES
(15, 'Saumaya Mihir', 'mihir@gmail.com', 'clothes', 'Here are some clothes to donate it is basically clean .', '0', '0', '550770512donateclothes.jpg', '14', ' 456 Shastri Market, near lajpat nagar, jalandhar', 'completed', '2024-07-13 12:11:55'),
(16, 'Anuska Ranjan', 'anushka@gmail.com', 'food', 'High-quality, long-grain basmati rice, known for its fragrant aroma and fluffy texture, perfect for ', '2024', '2024', '1368404780Food.jpeg', '13', '123 Guru Nanak Dev Nagar, Jalandhar  Near Model Town', 'completed', '2024-07-14 15:35:06'),
(17, 'Saumaya Mihir', 'mihir@gmail.com', 'wheelchair', 'i have total 10 wheelchair', '0', '0', '1540189177HygieneProducts.jpg', '12', '456 Shastri Market, near lajpat nagar, jalandhar', 'completed', '2024-07-18 12:17:42'),
(18, 'user2', 'user2@gmail.com', 'Food', 'food for 5', '2024-08-10', '2024-08-04', '312282390724693786sport-3.jpg', '15', 'abc', 'completed', '2024-08-02 05:43:58'),
(19, 'user2', 'user2@gmail.com', 'Food', 'food for 5', '2024-08-10', '2024-08-04', '312282390724693786sport-3.jpg', '15', 'abc', 'completed', '2024-08-02 05:44:13'),
(20, 'user2', 'user2@gmail.com', 'Food', 'food for 5', '2024-08-10', '2024-08-04', '1051175906724693786sport-3.jpg', NULL, 'abc', 'Pending', '2024-08-02 05:44:42'),
(21, 'user2', 'user2@gmail.com', 'Clothes', 'clothes', '', '', '1619964193', '15', 'jal', 'completed', '2024-08-02 05:45:09'),
(22, 'user2', 'user2@gmail.com', 'Food', 'food for 5', '2024-08-03', '2024-08-05', '184257632790505750apple.png', '15', 'jal', 'completed', '2024-08-02 06:03:22'),
(23, 'user2', 'user2@gmail.com', 'Clothes', 'clothes for kids', '', '', '491166476banner2.jpg', '15', '120 kalia colony', 'completed', '2024-08-05 07:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `message` longtext NOT NULL,
  `subject` mediumtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `message`, `subject`, `status`, `created_at`) VALUES
(1, 'anchal', 'what is the process of donating blood.', 'donation', 'Active', '2024-07-04 16:18:58'),
(4, 'Navya', 'fyugihoi', 'Food', 'Active', '2024-07-06 03:22:35'),
(5, 'testing', 'test msg', 'test', 'Active', '2024-08-02 05:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(9) NOT NULL,
  `ngo_name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `location` mediumtext NOT NULL,
  `address` longtext NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `ngo_name`, `image`, `description`, `location`, `address`, `email`, `password`, `status`, `created_At`) VALUES
(12, 'Pahal NGO', '1727812663PAHAL.png', 'Pahal is the pioneer welfare societies in Jalandhar. It is a charitable organization encouraged by people having similar motto of changing present scenario of society to bring transformation in human life for better tomorrow. It was laid down in the year 1996 by the famous social activist Professor Lakhbir Singh.\r\n\r\nSince then, it has made manifold progress in the field of welfare society and gained many associates such as LIC, NABARD, Punjab State Human Rights Commission, Global Environment Facility, and other such renowned organizations.', 'Jalandhar', ' 36, New Vivekanand Park Maqsudan, Jalandhar - 144008 Tel No: 91 - 181 - 2672784', 'pahal@gmail.com', '2af80482e9626e0e537bb57cbaf46255', 'Active', '2024-07-13 11:54:51'),
(14, 'Saarthi', '1771575698sarthi-ngo.png', 'In the list of famous NGOs in Chandigarh, Saarthi is one of those organizations that work for the cause of educating underprivileged children. It aims at empowering youth to channelize their skills and quality in acquiring better lives for themselves and get better earning options. As the name of the organization suggests it follows its motto of enlightening the pathway of those who have fewer resources to basic education and the basic standard of the livelihood.', 'Chandigarh', '573,  Near Govt. Middle School, Kishangarh, Chandigarh, 160101 ', 'sarthi@gmail.com', '42bc043f834059dcb6ec91e5a90c5460', 'Active', '2024-07-13 12:02:25'),
(15, 'test ngo', '1906469848352105086sport-3.jpg', 'test ngo', 'jalandhars', 'model town', 'tn@gmail.com', '202cb962ac59075b964b07152d234b70', 'Active', '2024-08-02 04:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(9) NOT NULL,
  `ngo_id` int(9) NOT NULL,
  `donation_id` int(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `claimed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `ngo_id`, `donation_id`, `status`, `created_at`, `claimed_at`) VALUES
(1, 0, 9, 'Pending', '2024-07-11 10:29:40', '2024-07-11 10:29:40'),
(19, 13, 16, 'approved', '2024-07-14 15:42:06', '2024-07-14 15:42:06'),
(20, 14, 16, 'approved', '2024-07-15 03:44:07', '2024-07-15 03:44:07'),
(21, 14, 15, 'approved', '2024-07-15 04:20:13', '2024-07-15 04:20:13'),
(22, 14, 15, 'approved', '2024-07-18 12:19:48', '2024-07-18 12:19:48'),
(23, 12, 17, 'rejected', '2024-07-19 03:43:57', '2024-07-19 03:43:57'),
(24, 15, 19, 'approved', '2024-08-02 10:35:57', '2024-08-02 10:35:57'),
(25, 15, 22, 'rejected', '2024-08-02 10:36:00', '2024-08-02 10:36:00'),
(26, 15, 18, 'approved', '2024-08-03 04:39:24', '2024-08-03 04:39:24'),
(27, 15, 23, 'approved', '2024-08-05 08:50:55', '2024-08-05 08:50:55'),
(28, 15, 21, 'rejected', '2024-08-05 08:51:02', '2024-08-05 08:51:02'),
(29, 15, 21, 'rejected', '2024-08-05 08:51:25', '2024-08-05 08:51:25'),
(30, 15, 21, 'approved', '2024-08-05 08:52:54', '2024-08-05 08:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `email`, `password`, `contact`, `address`, `status`, `created_at`) VALUES
(10, 'janki', 'janki@gmail.com', '202cb962ac59075b964b07152d234b70', 98787988990, 'jalandhar', 'Active', '2024-07-04 04:00:56'),
(12, 'Navya', 'navya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 78891010171, 'patna', 'Active', '2024-07-04 16:04:10'),
(15, 'anchal', 'anchal0099@gmail.com', '202cb962ac59075b964b07152d234b70', 9900887766, 'jalandhar', 'Active', '2024-07-09 09:58:24'),
(16, 'Navya jaiswal', 'navya45@gmail.com', '8edd72158ccd2a879f79cb2538568fdc', 12345678990, 'patna', 'Active', '2024-07-09 11:52:40'),
(17, 'Navya jaiswal', 'Navya67@gmail.com', '5726daf2c9ee0f955eca58291c26d2f3', 91881781810, 'patna', 'Active', '2024-07-10 02:55:03'),
(18, 'ragini', 'ragu@gmail.com', '220f3f7883e3d534aba5c54c604f2527', 1234567890, 'patna', 'Active', '2024-07-12 15:14:09'),
(19, 'Anuska Ranjan', 'anushka@gmail.com', 'd8d3139b8d9ec81187ccf64ffb5e70e7', 1234567901, '123 Guru Nanak Dev Nagar, Jalandhar  Near Model Town', 'Active', '2024-07-14 15:33:23'),
(20, 'Saumaya Mihir', 'mihir@gmail.com', 'ceba5843e70d470a18b55e502b83a96c', 12345666667, '456 Shastri Market, near lajpat nagar, jalandhar', 'Active', '2024-07-19 07:24:44'),
(21, 'user1', 'user1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 8787973429, 'jal', 'Active', '2024-08-02 05:20:49'),
(22, 'user2', 'user2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 8787973429, 'jal', 'Active', '2024-08-02 05:33:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ngo_id` (`ngo_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
