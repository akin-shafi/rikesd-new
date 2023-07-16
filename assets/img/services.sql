-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 11:29 AM
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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `item` varchar(255) DEFAULT NULL,
  `page` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `category` int(11) NOT NULL,
  `sub_category` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `item`, `page`, `description`, `category`, `sub_category`, `created_at`, `deleted`) VALUES
(1, 'Academia Research Mobility Program (AIM)', 'aim', 'Prepare to unlock the doors to economic development. The Academia Research Mobility Program acts as a catalyst for knowledge transfer, technological advancements, and entrepreneurial breakthroughs. Your collaboration with industry will drive economic growth, spur innovation, and create a competitive edge. Seamlessly transition research outcomes into marketable products, processes, and intellectual property, igniting entrepreneurship and propelling sustainable economic prosperity.\r\n\r\n<br><br>\r\nAre you ready to embrace the power of collaboration, innovation, and empowerment? Join the Academia Research Mobility Program within the RIkeSD framework today and embark on a transformative journey that will shape the future of academia, industry, and society as a whole. Together, we can make an everlasting impact on our world.', 1, 0, '2023-07-08 17:30:22', 0),
(2, 'Technology Based Skill Intensification Program (T-SIP)', 'sip', 'Introducing the Technology-Based Skill Intensification Program!\r\n<br><br>\r\nStay ahead in the digital age with our cutting-edge program. Gain the skills needed to thrive in today\'s fast-paced world. Our interactive courses and workshops empower you with the latest technological expertise. Whether you\'re a beginner or a seasoned pro, our program caters to all levels. Join us now and unlock your full potential!\r\n<br><br>\r\nEnroll now for updates, Don\'t miss out on this transformative opportunity!', 1, 0, '2023-07-08 17:30:22', 0),
(3, 'Circular Hotspot ', 'circular_hotspot', 'Uncover the fascinating realm of circular hotspots and their applications. Join our immersive program to delve into the principles, techniques, and cutting-edge advancements in circular hotspot technology. Whether you\'re a novice or an expert, our program offers engaging workshops and hands-on experiences to expand your knowledge. Enroll today and embark on a journey of discovery!', 1, 0, '2023-07-08 17:30:22', 0),
(4, 'Reseach Commercialisation ', 'commercialisation', 'Drive Innovation with Research Commercialization\n<br><br>\nHarness the power of research commercialization and turn groundbreaking ideas into real-world solutions. Our program empowers researchers to navigate the complex landscape of technology transfer, intellectual property, and market-driven innovation. Join us to gain the knowledge, tools, and networks necessary to bridge the gap between research and commercial success. Unlock your potential in research commercialization today!\n<br><br>\nEnrollment Form for Research Commercialization Program:', 1, 0, '2023-07-08 17:30:22', 0),
(5, 'Our engagements', 'engagements', 'Join us for our monthly S2B Online Sessions every third Saturday of the month and engage in discussions on economic development roadmaps on Twitter Space.', 1, 0, '2023-07-08 17:30:22', 0),
(6, 'Start a project', 'start-project', '', 2, 0, '2023-07-15 23:19:20', 0),
(7, 'Discover', 'discover', '', 2, 0, '2023-07-15 23:19:20', 0),
(8, 'Market Place', 'marketplace', '🌐 RIKESD Market Place: Empower Research, Connect Globally! 💡  Discover cutting-edge research, collaborate with experts, and shape a brighter future. Explore ! 🚀🌎 ', 2, 0, '2023-07-15 23:19:20', 0),
(9, 'Research Funding', 'research-funding', '', 2, 0, '2023-07-15 23:19:20', 0),
(10, 'Available Funding Opportunities', 'available-funding-opportunities', '🌟 Unlock Boundless Research Opportunities with our Innovative Funding Solutions! 💡 <br><br> Empower your groundbreaking research endeavors with our comprehensive funding program. We believe in the power of knowledge and its potential to shape the future. Whether you\'re an aspiring researcher or an established academic, our funding solutions are designed to fuel your intellectual pursuits. <br><br> 🔬 Discover Limitless Potential: Explore new frontiers of knowledge and push the boundaries of innovation with our generous research funding. <br><br> 💰 Fuel Your Vision: Access the financial resources needed to bring your research projects to life. Our funding program supports diverse disciplines and groundbreaking ideas. <br><br> 🌍 Make an Impact: Drive real-world change and contribute to the betterment of society through your research. We believe in supporting projects that have the potential to make a lasting impact. <br><br> ⚡ Empowerment at Your Fingertips: Unleash your research potential and elevate your academic career with our prestigious funding opportunities. Let your ideas flourish and leave a lasting legacy. <br><br> Seize this chance to advance your research ambitions. Together, we can transform ideas into impactful reality! 💫🚀', 2, 9, '2023-07-15 23:19:20', 0),
(11, 'Funding a research', 'fund-research', '🌟 Invest in Future Discoveries! 🚀 Fund Your Research Passion Today!\r\n<br><br>\r\nJoin our exclusive platform and make a lasting impact with research funding. Empower brilliant minds to unlock groundbreaking solutions for a brighter tomorrow. Our streamlined process connects you with pioneering researchers, driving innovation across diverse fields. \r\n<br><br>\r\nBe part of cutting-edge breakthroughs that shape industries, solve global challenges, and create sustainable progress. Together, let\'s pave the way for transformative advancements and make a difference that echoes through generations. \r\n<br><br>\r\nFunding research has never been this rewarding. Act now and be a catalyst for the next big revolution in science and knowledge! 💡🔬🌍', 2, 9, '2023-07-15 23:19:20', 0),
(12, 'RDI Infrastructure', 'infrastructure', '', 2, 0, '2023-07-15 23:19:20', 0),
(13, 'Institute & Centers \r\n', 'institute', '', 3, 12, '2023-07-16 09:04:11', 0),
(14, 'Equipment Database', 'equipment', '', 3, 12, '2023-07-16 09:04:11', 0),
(15, 'Personnel', 'personnel', '', 3, 12, '2023-07-16 09:04:46', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
