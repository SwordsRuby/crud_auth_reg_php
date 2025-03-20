-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: MySQL-8.2
-- Generation Time: Feb 19, 2025 at 12:18 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myBlog`
--
CREATE DATABASE IF NOT EXISTS `myBlog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `myBlog`;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int NOT NULL,
  `title_post` varchar(50) NOT NULL,
  `discription_post` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `title_post`, `discription_post`) VALUES
(1, 'Заголовок1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lacus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non euismod mi, non pharetra ipsum. Aliquam fermentum rutrum maximus. Integer vestibulum interdum augue ut dictum. Curabitur ac vulputate lorem. Donec ac risus efficitur, tristique nisi sed, dapibus justo. Fusce feugiat consequat nisi, gravida sagittis nisl consectetur non. Aenean sodales imperdiet imperdiet.'),
(2, 'Заголовок2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lacus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non euismod mi, non pharetra ipsum. Aliquam fermentum rutrum maximus. Integer vestibulum interdum augue ut dictum. Curabitur ac vulputate lorem. Donec ac risus efficitur, tristique nisi sed, dapibus justo. Fusce feugiat consequat nisi, gravida sagittis nisl consectetur non. Aenean sodales imperdiet imperdiet.'),
(3, 'Заголовок3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lacus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non euismod mi, non pharetra ipsum. Aliquam fermentum rutrum maximus. Integer vestibulum interdum augue ut dictum. Curabitur ac vulputate lorem. Donec ac risus efficitur, tristique nisi sed, dapibus justo. Fusce feugiat consequat nisi, gravida sagittis nisl consectetur non. Aenean sodales imperdiet imperdiet.'),
(4, 'Заголовок4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lacus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non euismod mi, non pharetra ipsum. Aliquam fermentum rutrum maximus. Integer vestibulum interdum augue ut dictum. Curabitur ac vulputate lorem. Donec ac risus efficitur, tristique nisi sed, dapibus justo. Fusce feugiat consequat nisi, gravida sagittis nisl consectetur non. Aenean sodales imperdiet imperdiet.'),
(5, 'Заголовок5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lacus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non euismod mi, non pharetra ipsum. Aliquam fermentum rutrum maximus. Integer vestibulum interdum augue ut dictum. Curabitur ac vulputate lorem. Donec ac risus efficitur, tristique nisi sed, dapibus justo. Fusce feugiat consequat nisi, gravida sagittis nisl consectetur non. Aenean sodales imperdiet imperdiet.'),
(6, 'Заголовок6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac lacus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non euismod mi, non pharetra ipsum. Aliquam fermentum rutrum maximus. Integer vestibulum interdum augue ut dictum. Curabitur ac vulputate lorem. Donec ac risus efficitur, tristique nisi sed, dapibus justo. Fusce feugiat consequat nisi, gravida sagittis nisl consectetur non. Aenean sodales imperdiet imperdiet.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
