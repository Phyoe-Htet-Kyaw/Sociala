-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2022 at 06:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sociala`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `name`, `country_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Yangon', 1, '2022-07-30 17:35:43', '2022-07-30 19:35:43', NULL),
(2, 'Tokyo', 49, '2022-07-30 12:37:11', NULL, NULL),
(3, 'Bangkok', 4, '2022-07-30 12:47:58', NULL, NULL),
(4, 'Kabul', 34, '2022-07-30 17:41:22', '2022-07-30 19:41:22', NULL),
(5, 'Dhaka', 7, '2022-07-30 13:14:36', NULL, NULL),
(6, 'Santiago', 55, '2022-07-30 22:35:38', NULL, NULL),
(7, 'Cairo', 54, '2022-07-30 22:36:25', NULL, NULL),
(8, 'Port Moresby', 53, '2022-07-30 22:37:13', NULL, NULL),
(9, 'Taipei', 52, '2022-07-30 22:37:39', '2022-08-11 06:40:19', NULL),
(10, 'Seoul', 51, '2022-07-30 22:38:09', NULL, NULL),
(11, 'Pyongyang', 50, '2022-07-30 22:38:42', NULL, NULL),
(12, 'Manila', 48, '2022-07-30 22:38:59', NULL, NULL),
(13, 'Muscat', 47, '2022-07-30 22:39:20', NULL, NULL),
(14, 'Sana\'a', 46, '2022-07-31 03:10:02', '2022-07-31 05:10:02', NULL),
(15, 'Bucharest', 45, '2022-07-30 22:48:13', NULL, NULL),
(16, 'London', 44, '2022-07-30 22:49:06', NULL, NULL),
(17, 'Dublin', 43, '2022-07-30 22:49:41', NULL, NULL),
(18, 'Reykjavik', 42, '2022-07-30 22:50:19', NULL, NULL),
(19, 'Kyiv or Kiev', 41, '2022-07-30 22:51:06', NULL, NULL),
(20, 'Warsaw', 40, '2022-07-30 22:51:35', NULL, NULL),
(21, 'Oslo', 39, '2022-07-30 22:52:51', NULL, NULL),
(22, 'Stockholm', 38, '2022-07-30 22:53:22', NULL, NULL),
(23, 'Helsinki', 37, '2022-07-30 22:54:26', NULL, NULL),
(24, 'Ulaanbaatar', 36, '2022-07-30 22:56:16', NULL, NULL),
(25, 'Nur-Sultan', 35, '2022-07-30 22:56:53', NULL, NULL),
(26, 'Washington DC', 12, '2022-08-11 00:11:46', NULL, NULL),
(27, 'Islamabad', 33, '2022-08-11 04:48:39', '2022-08-11 06:48:39', NULL),
(28, 'Lusaka', 56, '2022-08-11 00:18:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Myanmar', '2022-07-30 14:19:37', NULL, NULL),
(2, 'India', '2022-07-30 11:11:07', NULL, NULL),
(3, 'China', '2022-07-30 11:11:14', '2022-07-30 17:47:18', NULL),
(4, 'Thailand', '2022-07-30 11:17:35', NULL, NULL),
(5, 'Laos', '2022-07-30 11:17:40', NULL, NULL),
(6, 'Cambodia', '2022-07-30 11:17:46', NULL, NULL),
(7, 'Bangladesh', '2022-07-30 11:18:20', NULL, NULL),
(8, 'Vietnam', '2022-07-30 11:18:32', NULL, NULL),
(9, 'Indonesia', '2022-07-30 11:18:39', NULL, NULL),
(10, 'Singapore', '2022-07-30 11:19:41', NULL, NULL),
(11, 'Malaysia', '2022-07-30 11:19:49', NULL, NULL),
(12, 'United States', '2022-08-11 04:36:38', '2022-08-11 06:36:38', NULL),
(13, 'Russia', '2022-07-30 11:21:29', NULL, NULL),
(14, 'Germany', '2022-07-30 11:21:39', NULL, NULL),
(15, 'Italy', '2022-07-30 11:21:46', NULL, NULL),
(16, 'Spain', '2022-07-30 11:21:50', NULL, NULL),
(17, 'Canada', '2022-07-30 11:22:37', NULL, NULL),
(18, 'Turkey', '2022-07-30 11:22:56', NULL, NULL),
(19, 'France', '2022-07-30 11:23:08', NULL, NULL),
(20, 'Australia', '2022-07-30 11:23:41', NULL, NULL),
(21, 'New Zealand', '2022-07-30 11:24:14', NULL, NULL),
(22, 'United Arab Emirates', '2022-07-30 11:25:22', NULL, NULL),
(23, 'Mexico', '2022-07-30 11:26:33', NULL, NULL),
(24, 'Argentina', '2022-07-30 11:26:47', NULL, NULL),
(25, 'Brazil', '2022-07-30 11:26:52', NULL, NULL),
(26, 'Peru', '2022-07-30 11:27:19', NULL, NULL),
(27, 'Colombia', '2022-07-30 11:27:36', NULL, NULL),
(28, 'Paraguay', '2022-07-30 11:27:54', NULL, NULL),
(29, 'Bolivia', '2022-07-30 11:28:24', NULL, NULL),
(30, 'Uruguay', '2022-07-30 11:28:45', NULL, NULL),
(31, 'Iran', '2022-07-30 11:29:11', NULL, NULL),
(32, 'Iraq', '2022-07-30 11:29:17', NULL, NULL),
(33, 'Pakistan', '2022-07-30 11:29:40', NULL, NULL),
(34, 'Afghanistan', '2022-07-30 11:29:56', '2022-07-30 18:12:02', NULL),
(35, 'Kazakhstan', '2022-07-30 11:30:25', NULL, NULL),
(36, 'Mongolia', '2022-07-30 11:30:31', NULL, NULL),
(37, 'Finland', '2022-07-30 11:30:42', NULL, NULL),
(38, 'Sweden', '2022-07-30 11:30:55', NULL, NULL),
(39, 'Norway', '2022-07-30 11:31:11', NULL, NULL),
(40, 'Poland', '2022-07-30 11:31:26', NULL, NULL),
(41, 'Ukraine', '2022-07-30 11:31:44', NULL, NULL),
(42, 'Iceland', '2022-07-30 11:32:02', NULL, NULL),
(43, 'Ireland', '2022-07-30 11:32:14', NULL, NULL),
(44, 'United Kingdom', '2022-07-30 11:32:25', NULL, NULL),
(45, 'Romania', '2022-07-30 11:32:40', '2022-07-31 05:17:42', NULL),
(46, 'Yeman', '2022-07-30 11:33:00', NULL, NULL),
(47, 'Oman', '2022-07-30 11:33:04', NULL, NULL),
(48, 'Philippines', '2022-07-30 11:33:42', NULL, NULL),
(49, 'Japan', '2022-07-30 11:33:54', NULL, NULL),
(50, 'North Korea', '2022-07-30 11:34:08', NULL, NULL),
(51, 'South Korea', '2022-07-30 11:34:15', NULL, NULL),
(52, 'Taiwan', '2022-07-30 11:34:47', NULL, NULL),
(53, 'Papua New Guinea', '2022-07-30 11:35:15', NULL, NULL),
(54, 'Egypt', '2022-07-30 11:35:43', NULL, NULL),
(55, 'Chile', '2022-07-30 11:35:54', NULL, NULL),
(56, 'Zambia', '2022-08-11 00:17:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like`
--

CREATE TABLE `tbl_like` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Chief Executive Officer', '2022-07-30 11:37:43', NULL, NULL),
(2, 'Chief Technical Officer', '2022-07-30 11:37:59', NULL, NULL),
(3, 'Chief Accountant', '2022-07-30 11:37:20', NULL, NULL),
(4, 'Marketing Manager', '2022-07-30 11:37:31', NULL, NULL),
(5, 'IT Manager', '2022-07-30 16:35:16', '2022-07-30 18:35:16', NULL),
(6, 'Sales Manager', '2022-07-30 11:37:09', NULL, NULL),
(7, 'Application Developer', '2022-07-30 11:37:13', NULL, NULL),
(8, 'Web Developer', '2022-07-30 11:37:25', NULL, NULL),
(9, 'System Engineer', '2022-07-30 11:37:07', NULL, NULL),
(10, 'Network Engineer', '2022-07-30 11:37:16', NULL, NULL),
(11, 'Administration Officer', '2022-07-30 11:37:32', NULL, NULL),
(12, 'Security Officer', '2022-07-30 11:37:46', NULL, NULL),
(13, 'Civil Engineer', '2022-07-30 11:37:08', NULL, NULL),
(14, 'Electrical Engineer', '2022-07-30 11:37:25', NULL, NULL),
(15, 'Architect', '2022-07-30 16:43:10', '2022-07-30 18:43:10', NULL),
(16, 'Fashion Designer', '2022-07-30 11:37:58', NULL, NULL),
(17, 'Procurement Manager', '2022-08-11 04:25:55', '2022-08-11 06:25:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `post_type_id` enum('text','photo','video','all') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `user_id`, `description`, `post_type_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id vero sunt voluptas expedita mollitia accusamus aliquid asperiores? Similique doloribus magnam, iure mollitia quas, tempore magni soluta vitae debitis repellat fuga.', 'text', '2022-08-13 23:49:39', NULL, NULL),
(28, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id vero sunt voluptas expedita mollitia accusamus aliquid asperiores? Similique doloribus magnam, iure mollitia quas, tempore magni soluta vitae debitis repellat fuga.', 'photo', '2022-08-13 23:49:59', NULL, NULL),
(29, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id vero sunt voluptas expedita mollitia accusamus aliquid asperiores? Similique doloribus magnam, iure mollitia quas, tempore magni soluta vitae debitis repellat fuga.', 'video', '2022-08-13 23:50:14', NULL, NULL),
(30, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id vero sunt voluptas expedita mollitia accusamus aliquid asperiores? Similique doloribus magnam, iure mollitia quas, tempore magni soluta vitae debitis repellat fuga.', 'all', '2022-08-13 23:50:44', NULL, NULL),
(32, 2, 'This is an updated post right now', 'text', '2022-08-18 16:25:30', '2022-08-18 18:25:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_photo`
--

CREATE TABLE `tbl_post_photo` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post_photo`
--

INSERT INTO `tbl_post_photo` (`id`, `post_id`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 28, 'POST_1660450799_photo-1.jpg', '2022-08-13 23:49:59', NULL, NULL),
(10, 30, 'POST_1660450844_7e91975d-e898-4280-a2c4-6977f46502bb_200x200.PNG', '2022-08-13 23:50:44', NULL, NULL),
(11, 32, 'POST_1660839621_photo-2.jpg', '2022-08-18 11:50:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_video`
--

CREATE TABLE `tbl_post_video` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post_video`
--

INSERT INTO `tbl_post_video` (`id`, `post_id`, `video`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 29, 'POST_1660450814_video-1.mp4', '2022-08-13 23:50:14', NULL, NULL),
(6, 30, 'POST_1660450844_video-2.mp4', '2022-08-13 23:50:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Phyoe', 'Htet Kyaw', 'pphyoe126@gmail.com', '$2y$10$LTh9aSYeqgW8PBBPFkHqjufyek2p.19FkLb75OTMV5dQYPyK2ix6.', NULL, '2022-08-13 04:35:39', NULL, NULL),
(2, 'Min', 'Thurein Kyaw', 'minthureinkyaw@live.com', '$2y$10$/aS/bfkaN391S0te1KUIMeEEVCGDoF/5SUzDfFvKH6ImgfS7pg.72', NULL, '2022-08-15 05:11:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE `tbl_user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `position_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `postcode` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `about_description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_info`
--

INSERT INTO `tbl_user_info` (`id`, `user_id`, `job_title`, `position_id`, `country_id`, `city_id`, `postcode`, `address`, `profile_image`, `cover_photo`, `about_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Senior Web Developer', 8, 1, 1, 101010, 'No(54), Main Road, Red Hill Township', 'profile1.png', 'cover1.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id vero sunt voluptas expedita mollitia accusamus aliquid asperiores? Similique doloribus magnam, iure mollitia quas, tempore magni soluta vitae debitis repellat fuga.', '2022-08-17 16:06:21', NULL, NULL),
(2, 2, 'Junior Web Developer', 8, 12, 26, 123123, '1629 K St Suite 300, N.W', 'profile2.png', 'cover2.png', 'Just an ordinary guy.', '2022-08-17 16:13:59', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_like`
--
ALTER TABLE `tbl_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post_photo`
--
ALTER TABLE `tbl_post_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post_video`
--
ALTER TABLE `tbl_post_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_like`
--
ALTER TABLE `tbl_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_post_photo`
--
ALTER TABLE `tbl_post_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_post_video`
--
ALTER TABLE `tbl_post_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
