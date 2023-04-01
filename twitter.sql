-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 06:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>About Us </strong>to <i>popular</i> belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><strong>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</strong> Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p>&nbsp;</p><p><strong>Contrary</strong> to <i>popular</i> belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><strong>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</strong> Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '2023-03-06 05:49:16', '2023-03-08 10:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Super Admin', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1'),
(2, 'Demo Admin', 'demo@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0'),
(3, 'Jhon Doe', 'doe@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1'),
(4, 'hello admin', 'mehedilrs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(140) COLLATE utf16_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `post_id`, `time`) VALUES
(47, 'test comment line', 62, 736, '2023-02-02 13:36:57'),
(48, 'wow', 62, 745, '2023-02-15 14:06:44'),
(49, 'nice', 62, 745, '2023-02-15 14:06:52'),
(50, 'Hello test', 71, 759, '2023-03-13 17:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE `cookies` (
  `id` int(11) NOT NULL,
  `cookies` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`id`, `cookies`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Cookies </strong>to <i>popular</i> belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><strong>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</strong> Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p>&nbsp;</p><p><strong>Contrary</strong> to <i>popular</i> belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><strong>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</strong> Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '2023-03-04 10:10:17', '2023-03-08 10:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `following_id` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `follower_id`, `following_id`, `time`) VALUES
(0, 64, 2, '2023-03-07 18:51:26'),
(194, 62, 61, '2023-02-02 13:35:35'),
(195, 61, 62, '2023-02-03 11:44:54'),
(197, 63, 62, '2023-02-20 13:36:58'),
(198, 63, 61, '2023-02-20 13:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`) VALUES
(0, 70, 757),
(319, 62, 737),
(320, 61, 737),
(321, 62, 739),
(322, 61, 739),
(323, 61, 739);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `notify_for` int(11) NOT NULL,
  `notify_from` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `type` enum('follow','like','retweet','qoute','comment','reply','mention') COLLATE utf16_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `count` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notify_for`, `notify_from`, `target`, `type`, `time`, `count`, `status`) VALUES
(0, 2, 64, 0, 'follow', '2023-03-07 18:51:26', 0, 0),
(235, 61, 62, 0, 'follow', '2023-02-02 13:35:35', 1, 0),
(236, 61, 62, 737, 'like', '2023-02-02 13:35:53', 1, 0),
(238, 61, 62, 736, 'comment', '2023-02-02 13:36:57', 1, 0),
(239, 62, 61, 0, 'follow', '2023-02-03 11:44:54', 1, 0),
(240, 62, 61, 739, 'retweet', '2023-02-12 12:12:52', 1, 0),
(241, 62, 61, 739, 'like', '2023-02-12 12:12:58', 1, 0),
(242, 62, 61, 739, 'like', '2023-02-12 12:13:02', 1, 0),
(243, 62, 63, 0, 'follow', '2023-02-20 13:36:58', 0, 0),
(244, 61, 63, 0, 'follow', '2023-02-20 13:37:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `polices`
--

CREATE TABLE `polices` (
  `id` int(11) NOT NULL,
  `policy` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `polices`
--

INSERT INTO `polices` (`id`, `policy`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Privacy &amp; Policy 009 </strong>to <i>popular</i> belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin <a href=\"\"><i><strong>professor </strong></i></a>at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><ul><li><strong>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</strong> Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</li></ul><p>&nbsp;</p><ol><li><strong>Contrary</strong> to <i>popular</i> belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</li></ol><p><strong>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</strong> Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '2023-03-04 09:49:48', '2023-03-09 11:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post_on`) VALUES
(736, 61, '2023-02-01 06:41:39'),
(737, 61, '2023-02-01 06:42:26'),
(739, 62, '2023-02-12 09:16:11'),
(740, 62, '2023-02-12 11:43:18'),
(741, 61, '2023-02-12 12:12:52'),
(742, 62, '2023-02-12 15:06:50'),
(745, 62, '2023-02-15 14:06:31'),
(746, 62, '2023-02-15 14:32:48'),
(747, 62, '2023-02-15 14:44:40'),
(748, 63, '2023-02-20 12:46:51'),
(749, 63, '2023-02-20 13:37:49'),
(750, 63, '2023-02-20 13:37:55'),
(751, 65, '2023-03-09 13:13:14'),
(752, 65, '2023-03-09 13:19:04'),
(753, 65, '2023-03-09 15:12:31'),
(754, 65, '2023-03-09 15:15:06'),
(755, 69, '2023-03-13 15:43:39'),
(756, 69, '2023-03-13 15:43:54'),
(757, 70, '2023-03-13 15:51:52'),
(758, 71, '2023-03-13 17:51:32'),
(759, 71, '2023-03-13 17:52:18'),
(760, 71, '2023-03-13 17:53:04'),
(761, 73, '2023-03-13 18:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply` varchar(140) COLLATE utf16_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `retweets`
--

CREATE TABLE `retweets` (
  `post_id` int(11) NOT NULL,
  `retweet_msg` varchar(140) COLLATE utf16_unicode_ci DEFAULT NULL,
  `tweet_id` int(11) DEFAULT NULL,
  `retweet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `retweets`
--

INSERT INTO `retweets` (`post_id`, `retweet_msg`, `tweet_id`, `retweet_id`) VALUES
(746, NULL, 745, NULL),
(750, NULL, 749, NULL),
(754, NULL, 753, NULL),
(760, NULL, 759, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `phone`, `logo`, `banner`, `created_at`, `updated_at`) VALUES
(8, '', '', '', 'logo-52.jpg', 'banner-22.jpg', '2023-02-28 18:14:49', '2023-03-09 11:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `id` int(11) NOT NULL,
  `hashtag` varchar(140) COLLATE utf16_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`id`, `hashtag`, `created_on`) VALUES
(1, 'php', '2021-01-06 05:57:43'),
(4, 'hi', '2021-01-25 21:42:35'),
(5, 'alex', '2021-01-25 21:42:36'),
(6, '7oda', '2021-03-20 23:40:12'),
(9, 'js', '2021-04-02 03:24:28'),
(12, 'bro', '2021-04-02 03:31:38'),
(13, 'mysql', '2022-01-13 16:10:54'),
(14, 'explore', '2022-01-13 16:10:54'),
(15, 'fun', '2022-01-13 16:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `post_id` int(11) NOT NULL,
  `status` varchar(140) COLLATE utf16_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`post_id`, `status`, `img`) VALUES
(748, 'Mehedi Hasan', NULL),
(753, 'My dear', NULL),
(757, 'Hasan tweet', NULL),
(759, 'Test', NULL),
(761, 'This is our tweet', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf16_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf16_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `imgCover` varchar(255) COLLATE utf16_unicode_ci NOT NULL DEFAULT 'cover.png',
  `bio` varchar(140) COLLATE utf16_unicode_ci NOT NULL DEFAULT '',
  `location` varchar(255) COLLATE utf16_unicode_ci NOT NULL DEFAULT '',
  `website` varchar(255) COLLATE utf16_unicode_ci NOT NULL DEFAULT '',
  `status` varchar(255) COLLATE utf16_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `img`, `imgCover`, `bio`, `location`, `website`, `status`) VALUES
(61, 'santosh1', 'admin@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a', 'santosh kumar rout', 'user-63e8bb84b5169.jpg', 'user-63e8bb84b516e.jpg', '', '', '', '1'),
(62, 'test1', 'test@mail.com', '68eacb97d86f0c4621fa2b0e17cabd8c', 'test', 'user-63e8915fac898.jpg', 'user-63e8915fac89d.jpg', '', '', '', '1'),
(63, 'mehedi', 'mehedilrs@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Mehedi Hasan', 'user-63f34fbae1b6b.jpg', 'user-63f34fbae1b73.jpg', '', 'Banani, Dhaka', '', '1'),
(64, 'demo', 'demo@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Demo User', 'default.jpg', 'cover.png', '', '', '', '1'),
(65, 'adim', 'azim@mail.com', '25d55ad283aa400af464c76d713c07ad', 'Azim Khondokar', 'default.jpg', 'cover.png', '', '', '', '0'),
(66, 'Hello', 'hello@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Hello World', 'default.jpg', 'cover.png', '', '', '', '1'),
(67, 'vai', 'vai@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'kire vai', 'default.jpg', 'cover.png', '', '', '', '1'),
(68, 'dbvfd', 'dsgd@gm.com', '25d55ad283aa400af464c76d713c07ad', 'Bangladesh', 'default.jpg', 'cover.png', '', '', '', '0'),
(69, 'stathum', 'stat@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Jhon Stathum', 'default.jpg', 'cover.png', '', '', '', '1'),
(70, 'hasan', 'hasan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Hasan', 'default.jpg', 'cover.png', '', '', '', '1'),
(71, 'chironjit', 'chironjit@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Chironjit Hawlader', 'default.jpg', 'cover.png', '', '', '', '1'),
(72, 'users', 'users@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Demo User', 'default.jpg', 'cover.png', '', '', '', '1'),
(73, 'aliana', 'aliana@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Aliana De Cruze', 'default.jpg', 'cover.png', '', '', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follower_id` (`follower_id`),
  ADD KEY `following_id` (`following_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `likes_ibfk_2` (`post_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_ibfk_1` (`notify_for`),
  ADD KEY `notifications_ibfk_2` (`notify_from`);

--
-- Indexes for table `polices`
--
ALTER TABLE `polices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `retweets`
--
ALTER TABLE `retweets`
  ADD PRIMARY KEY (`post_id`) USING BTREE,
  ADD KEY `retweet_id` (`retweet_id`),
  ADD KEY `retweets_ibfk_2` (`tweet_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trends`
--
ALTER TABLE `trends`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hashtag` (`hashtag`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=762;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
