-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 12:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rikesd`
--

-- --------------------------------------------------------

--
-- Table structure for table `research_need`
--

CREATE TABLE `research_need` (
  `id` int(11) NOT NULL,
  `need` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research_need`
--

INSERT INTO `research_need` (`id`, `need`, `created_at`, `deleted`) VALUES
(1, 'Funding', '2023-07-06 19:17:21', 0),
(2, 'Collaboration', '2023-07-06 19:17:21', 0),
(3, 'Equipment', '2023-07-06 19:17:21', 0),
(4, 'Facility', '2023-07-06 19:17:21', 0),
(5, 'Supervisor/Partner', '2023-07-06 19:17:21', 0),
(6, 'Investors', '2023-07-06 19:17:21', 0),
(7, 'Scholarship', '2023-07-06 19:18:44', 0),
(8, 'Coach or Mentor', '2023-07-06 19:24:18', 0),
(9, 'Methodology', '2023-07-21 10:16:45', 0),
(10, 'Data', '2023-07-21 10:16:45', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `research_need`
--
ALTER TABLE `research_need`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `research_need`
--
ALTER TABLE `research_need`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
