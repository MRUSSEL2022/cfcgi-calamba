-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 02:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `created_at`) VALUES
(1, '', '', '', '2023-03-04 21:18:35'),
(2, '', '', '', '2023-03-04 21:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `chat_id` int(11) NOT NULL,
  `FromUser` int(100) NOT NULL,
  `ToUser` int(100) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `comments` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `userId`, `name`, `title`, `content`, `comments`, `created_at`) VALUES
(49, 312, '', '', 'haha', 0, '2023-03-20 22:25:21'),
(50, 21, '', '', 'try nga\r\n', 0, '2023-03-20 22:28:42'),
(51, 3121, '', '', 'parang hindi naman', 0, '2023-03-20 22:29:13'),
(52, 315, '', '', 'ge nga', 0, '2023-03-20 22:35:21'),
(53, 50, '', '', 'isa pa', 0, '2023-03-20 22:37:44'),
(54, 30, '', '', 'ge nga\r\n', 0, '2023-03-20 22:41:53'),
(55, 0, '', '', 'paano na ?', 0, '2023-03-20 22:42:07'),
(56, 0, '', '', 'gas', 0, '2023-03-20 22:49:33'),
(57, 0, '', '', 'sa', 0, '2023-03-20 22:49:55'),
(58, 0, '', '', 'hahaha', 0, '2023-03-20 22:54:32'),
(59, 0, '', '', 'wee', 0, '2023-03-20 23:01:40'),
(60, 0, '', '', 'test', 0, '2023-03-20 23:12:15'),
(61, 30, '', '', 'asdasd', 0, '2023-03-20 23:14:57'),
(62, 30, '', '', 'ruffa\r\n', 0, '2023-03-20 23:15:04'),
(63, 29, '', '', 'ako naman', 0, '2023-03-20 23:17:36'),
(64, 33, '', '', 'di ko na alam gagawin', 0, '2023-03-21 15:16:55'),
(65, 33, '', '', 'ano next? ', 0, '2023-03-22 17:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `postId` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `contact_number` int(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `surname`, `postId`, `email`, `id_number`, `contact_number`, `password`, `role`) VALUES
(32, 'mark topher', 'villaluz', 0, 'villaluzmt05@gmail.com', 'AO-0873', 2147483647, '$2y$10$OMVn7H.0Q7s21vXmh3zHlu5QcpONGvWqZT3884C.wXPbWV.w3fN0a', 'action_officer'),
(33, 'mark topher', 'Villaluz', 0, 'Villlaluzmt05@gmail.com', 'AO-08873', 2147483647, '$2y$10$u6I8fFZ0vLVjLGOYVwaRs.3SP0PCoy51Ewxs.N.sOKlANEHDZSgCS', 'action_officer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `FromUser` (`FromUser`),
  ADD KEY `ToUser` (`ToUser`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`FromUser`) REFERENCES `message` (`chat_id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`ToUser`) REFERENCES `message` (`chat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
