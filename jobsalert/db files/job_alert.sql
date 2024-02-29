-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 02:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_jobalertapplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(211) NOT NULL,
  `password` varchar(212) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `title`, `description`, `image`) VALUES
(1, 'Educator Teaching Jobs', 'posted date 1/6/2021 ,last date for apply is 15/6/2021', 'download (11).jpg'),
(2, 'programing jobs', 'posted date 1/6/2021 ,last date for apply is 15/6/2021', '54308405 (1).jpg'),
(3, 'Textile Engineering Jobs', 'posted date 1/6/2021 ,last date for apply is 15/6/2021', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE `new_user` (
  `type` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Passward` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `register_date` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`type`, `name`, `email`, `Passward`, `mobile`, `city`, `register_date`, `image`, `status`) VALUES
(1, 'usman', 'usman@gmail.com', '12345', '324562346243', 'shorkotcity', '2021-10-28', '30658_CS619_5228_3.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posted_project`
--

CREATE TABLE `posted_project` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `Budject` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `cription` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posted_project`
--

INSERT INTO `posted_project` (`id`, `title`, `type`, `duration`, `Budject`, `category`, `cription`, `image`) VALUES
(4, 'Teaching Jobs', 'Teaching', '6 hours', '400', 'Teaching Jobs', '', 'download (10).jpg'),
(5, 'Teaching Jobs', 'Teaching', '6 hours', '400', 'Teaching Jobs', '', 'download (10).jpg'),
(6, 'Textile Engineering Jobs', 'Teaching', '5 months', '5 lakh', 'Educator Teaching Jobs', '        This job portal is a responsive website which offers users to search different jobs using fi', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resume_cv`
--

CREATE TABLE `resume_cv` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_cv`
--

INSERT INTO `resume_cv` (`id`, `title`, `description`, `image`) VALUES
(1, 'usman', 'usman@gmail.com', '30658_CS619_5228_3 (1).docx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(202) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` varchar(212) NOT NULL,
  `city` varchar(213) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `city`) VALUES
(17, 'kishwar', 'kishwar@gmail.com', '12345', '45566', 'faislabad'),
(18, 'kishwar', 'kishwar@gmail.com', '12345', '89235', 'shorkotcity'),
(19, 'kishwar', 'kishwar@gmail.com', '12345', '89235', 'shorkotcity'),
(20, 'kishwar', 'kishwar@gmail.com', '12345', '89235', 'shorkotcity');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_user`
--
ALTER TABLE `new_user`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `posted_project`
--
ALTER TABLE `posted_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_cv`
--
ALTER TABLE `resume_cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `new_user`
--
ALTER TABLE `new_user`
  MODIFY `type` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posted_project`
--
ALTER TABLE `posted_project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resume_cv`
--
ALTER TABLE `resume_cv`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
