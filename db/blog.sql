-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2025 at 03:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `day1`
--

CREATE TABLE `day1` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` text NOT NULL,
  `subtitle` text NOT NULL,
  `storyone` text NOT NULL,
  `storytwo` text NOT NULL,
  `imageone` varchar(255) NOT NULL,
  `imagetwo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `day1`
--

INSERT INTO `day1` (`id`, `title`, `date`, `subtitle`, `storyone`, `storytwo`, `imageone`, `imagetwo`) VALUES
(0, 'The Journey Begins: Our Educational Tour', 'March 30, & April 7, 2025', 'Day 0: Preparation and Departure', '\"This is it\" I muttered as the whole batch of BS Information Technology graduat-waiting students strike a smile as the camera flashes for a group photo with our advisers who will be joining the tour. Finally, after months of preparation, we are off for deployment by April 07, 2025. The final orientation took place in the CCS building where our professors gave us an overview on what to expect, what to do, and what to bring during the tour.', 'After 1 week of waiting and preparing for my departure, the day finally came with good weather and atmosphere, but I actually fell ill a day before the tour, good thing I felt relieved after. Meanwhile, Monday of April 07, 2025 came with a very calm air. I hurried to the airport in the morning since my flight was scheduled at 8am. I arrived at the airport and got reumited with my fellow classmates and some professors whose flights were the same as mine. I could not have been more excited! It has been a long time since my last flight. But what is even more fun is that this is a once in a life-time experience where I get to travel with my classmates and we will be taking tours around some parts in manila! I am so looking forward to this day. Make sure to read the rest of the days, I am sure you will be having fun as I am!', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `day2`
--

CREATE TABLE `day2` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` text NOT NULL,
  `subtitle` text NOT NULL,
  `storyone` text NOT NULL,
  `storytwo` text NOT NULL,
  `imageone` varchar(255) NOT NULL,
  `imagetwo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `day2`
--

INSERT INTO `day2` (`id`, `title`, `date`, `subtitle`, `storyone`, `storytwo`, `imageone`, `imagetwo`) VALUES
(0, 'addawvvdv', 'wewewe', 'wewe', 'wewe', 'QWqw', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `title` text NOT NULL,
  `definition` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`title`, `definition`, `id`) VALUES
('Industry Visit & Educational Tour', 'Welcome to my website! Here I am gonna tell you my experiences during the whole tour, feel free to browse around!', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `day1`
--
ALTER TABLE `day1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
