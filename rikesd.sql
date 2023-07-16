-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 03:49 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profile_img` varchar(191) NOT NULL,
  `hashed_password` varchar(191) NOT NULL,
  `admin_level` int(11) DEFAULT NULL,
  `account_status` int(11) DEFAULT NULL,
  `process_request` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `created_by` int(11) DEFAULT 1,
  `reset_password` varchar(50) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `profile_img`, `hashed_password`, `admin_level`, `account_status`, `process_request`, `created_at`, `updated_at`, `created_by`, `reset_password`, `deleted`) VALUES
(1, 'Admin', 'One', 'super@gmail.com', '', '$2y$10$df9kgE/lDm/j3TyklJyoguf5w0MTfZE8tpJqs1EUINLn7XqZYptka', 1, 1, 1, '2023-07-04 16:05:28', '2023-07-04 15:04:50', 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT 'No title defined',
  `category_id` int(11) NOT NULL,
  `summary` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `main` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `featured` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `deleted`) VALUES
(1, 'category 1', '2023-07-04 16:58:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `discoveries`
--

CREATE TABLE `discoveries` (
  `id` int(11) NOT NULL,
  `discovery_name` varchar(100) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(100) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discoveries`
--

INSERT INTO `discoveries` (`id`, `discovery_name`, `theme`, `image_url`, `date`, `topic`, `deleted`) VALUES
(1, 'Discovery 1', 'Ancient Civilizations', 'discovery_1.jpg', '2024-07-05', 'Unraveling Lost Histories', 0),
(2, 'Discovery 2', 'Space Exploration', 'discovery_2.jpg', '2024-09-12', 'Journey to the Farthest Galaxies', 0),
(3, 'Discovery 3', 'Environmental Conservation', 'discovery_3.jpg', '2024-11-08', 'Preserving Nature for Future Generations', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feature_blog`
--

CREATE TABLE `feature_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT 'No title defined',
  `excerpt` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `main` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `ref_no` varchar(50) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `target_market` varchar(100) DEFAULT NULL,
  `value_proposition` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `researcher_id` int(11) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `other_image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ref_no`, `project_title`, `target_market`, `value_proposition`, `description`, `researcher_id`, `image`, `other_image`, `created_at`, `deleted`) VALUES
(1, 'P0001', 'Evaluating the Adoption of Renewable Energy Solutions in Urban Environments', 'Urban residential consumers in City X', 'This research project aims to assess the adoption of renewable energy solutions among urban residential consumers in City X. By understanding the factors influencing their decision-making process, we aim to provide valuable insights to policymakers, utility companies, and environmental organizations, helping them tailor strategies to promote sustainable energy practices and enhance renewable energy uptake.', 'The world is witnessing an increasing interest in renewable energy sources as a means to combat climate change and reduce reliance on fossil fuels. Urban environments, with their concentrated energy consumption and greenhouse gas emissions, represent a crucial area for implementing renewable energy solutions. This research project will focus on City X, a medium-sized urban center known for its growing population and diverse energy needs. The research will utilize a mixed-methods approach, combining quantitative surveys and qualitative interviews. A random sample of urban households in City X will be surveyed to gather data on their awareness, preferences, and willingness to adopt renewable energy solutions. Additionally, in-depth interviews will be conducted with select participants to gain deeper insights into their decision-making processes and perceived barriers. The research findings will shed light on the current state of renewable energy adoption in City X and provide valuable data to stakeholders, including government bodies, utility companies, and environmental organizations. The results will help formulate targeted campaigns and initiatives to increase awareness, address misconceptions, and incentivize urban residential consumers to embrace sustainable energy solutions.', NULL, 'project_image.png', 'other_image.jpg', '2023-07-15 23:55:22', 0),
(2, 'P0002', 'The Impact of Artificial Intelligence on Customer Service', 'Online shoppers and e-commerce businesses', 'This research project aims to assess the effectiveness and customer satisfaction levels of AI-powered chatbots compared to human customer support in the context of e-commerce. By understanding the advantages and limitations of each approach, we aim to provide insights to e-commerce businesses to improve their customer service strategies and enhance overall user experience.', 'The widespread adoption of artificial intelligence in customer service has led to the emergence of chatbots as an alternative to human support agents. This research will focus on e-commerce platforms, where customer satisfaction and retention are critical. Through surveys and feedback analysis, we will compare user experiences with chatbots and human agents, investigating factors such as response time, issue resolution, and emotional engagement.', NULL, 'ai_customer_service.jpg', 'other_image_1.jpg', '2023-07-15 23:56:52', 0),
(3, 'P0003', 'Exploring the Link between Workplace Diversity and Organizational Performance', 'Tech startups in Silicon Valley', 'This research project aims to analyze the relationship between workplace diversity and the overall performance of tech startups in Silicon Valley. By uncovering potential correlations between diversity metrics and business success, we seek to offer actionable insights for startup leaders to foster a more inclusive and high-performing work environment.', 'Silicon Valley is known as a hub for innovation and entrepreneurship, attracting diverse talent from around the world. This research will examine the impact of diverse teams on various performance indicators, such as productivity, creativity, and profitability. Surveys and interviews with startup founders and employees will provide valuable data to understand the role of diversity in shaping organizational culture and outcomes.', NULL, 'workplace_diversity.jpg', 'other_image_2.jpg', '2023-07-15 23:56:52', 0),
(4, 'P0004', 'The Role of Social Media in Political Campaigns', 'Registered voters in a specific electoral district', 'This research project aims to investigate the influence of social media on voter perceptions and decision-making during political campaigns. By understanding how social media platforms shape political discourse, we aim to offer insights to political parties and candidates to develop more effective communication strategies.', 'In the digital age, social media plays a pivotal role in political communication. This research will focus on a specific electoral district and explore how social media impacts voter opinions, attitudes towards candidates, and voting behavior. Through surveys and sentiment analysis of social media content, we will assess the role of digital campaigning in shaping public opinion.', NULL, 'social_media_politics.jpg', 'other_image_3.jpg', '2023-07-15 23:56:52', 0),
(5, 'P0005', 'Assessing the Environmental Impact of Food Delivery Services', 'Food delivery service providers and consumers', 'This research project aims to conduct a comprehensive life cycle analysis of food delivery services, from food production to packaging waste and transportation. By quantifying the environmental impact, we seek to provide data-driven recommendations to enhance sustainability practices in the food delivery industry.', 'The popularity of food delivery services has surged in recent years, raising concerns about its environmental footprint. This research will employ life cycle assessment methodologies to analyze the carbon emissions, waste generation, and energy consumption associated with food delivery services. The findings will enable stakeholders, including delivery companies and consumers, to make more eco-friendly choices.', NULL, 'food_delivery_environment.jpg', 'other_image_4.jpg', '2023-07-15 23:56:52', 0),
(6, 'P0006', 'Understanding the Effects of Remote Work on Employee Well-being and Job Satisfaction', 'Employees from various industries and organizations', 'This research project aims to explore the impact of remote work on employee well-being and job satisfaction across different industries. By identifying challenges and benefits, we seek to provide evidence-based recommendations for companies transitioning to hybrid or fully remote work models.', 'The COVID-19 pandemic accelerated the adoption of remote work practices worldwide. This research will assess how remote work affects employee mental health, work-life balance, and job satisfaction. Surveys and focus groups will provide insights into the advantages and potential drawbacks of remote work arrangements, helping organizations design policies that promote employee well-being.', NULL, 'remote_work_wellbeing.jpg', 'other_image_5.jpg', '2023-07-15 23:56:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `id` int(11) NOT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professions`
--

INSERT INTO `professions` (`id`, `profession`, `created_at`, `deleted`) VALUES
(1, 'Art and Entertainment', '2023-07-06 05:23:56', 0),
(2, 'Education and Teaching', '2023-07-06 05:23:56', 0),
(3, 'Health and Wellness', '2023-07-06 05:23:56', 0),
(4, 'Business and Finance', '2023-07-06 05:23:56', 0),
(5, 'Science and Engineering', '2023-07-06 05:23:56', 0),
(6, 'Law and Politics', '2023-07-06 05:23:56', 0),
(7, 'Environmental and Conservation', '2023-07-06 05:23:56', 0),
(8, 'Technology and Digital', '2023-07-06 05:23:56', 0),
(9, 'Other Professions', '2023-07-06 05:23:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `topic`, `theme`, `date`, `image_url`, `created_at`, `created_by`, `deleted`) VALUES
(1, '19th Session of STI to business (S2B)', 'Knowledge Enterprise Development for Businesses, Academia, Researchers & Government', 'Knowledge Economy', '2023-07-01', 'program-3.jpeg', '2023-07-15', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_application`
--

CREATE TABLE `project_application` (
  `id` int(11) NOT NULL,
  `need` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_application`
--

INSERT INTO `project_application` (`id`, `need`, `email`, `otp`, `profession`, `specialization`, `firstname`, `lastname`, `phone`, `country`, `state`, `address`, `created_at`, `updated_at`) VALUES
(1, '', 'Sakinropo@gmail.com', '', 'doctor', 'general', 'Shafi', 'Akinropo', '08145360866', 'Nigeria', 'Nigeria', '', '0000-00-00 00:00:00', ''),
(2, '', 'sandsify@gmail.com', '', '2', '56', 'Shafi', 'Akinropo', '08145360866', 'Nigeria', 'Nigeria', '', '2023-07-06 07:22:16', ''),
(3, 'Research Collaboration', 'ade@gmail.com', '', '3', '77', 'Shafi', 'Akinropo', '+2348098290445', 'Nigeria', 'Lagos', '101 Bale Street Olodi Apapa', '2023-07-06 09:05:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

CREATE TABLE `researcher` (
  `id` int(11) NOT NULL,
  `researcher_id` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `preferred_contact_method` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Research Grant', '2023-07-06 19:17:21', 0),
(2, 'Research Collaboration', '2023-07-06 19:17:21', 0),
(3, 'Research Equipment', '2023-07-06 19:17:21', 0),
(4, 'Research Facility', '2023-07-06 19:17:21', 0),
(5, 'Research Material', '2023-07-06 19:17:21', 0),
(6, 'Angel investor', '2023-07-06 19:17:21', 0),
(7, 'scholarship', '2023-07-06 19:18:44', 0),
(8, 'Business Leads', '2023-07-06 19:24:18', 0);

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `item`, `page`, `description`, `category`, `created_at`, `deleted`) VALUES
(1, 'Academia Research Mobility Program (AIM)', 'aim', 'Prepare to unlock the doors to economic development. The Academia Research Mobility Program acts as a catalyst for knowledge transfer, technological advancements, and entrepreneurial breakthroughs. Your collaboration with industry will drive economic growth, spur innovation, and create a competitive edge. Seamlessly transition research outcomes into marketable products, processes, and intellectual property, igniting entrepreneurship and propelling sustainable economic prosperity.\r\n\r\n<br><br>\r\nAre you ready to embrace the power of collaboration, innovation, and empowerment? Join the Academia Research Mobility Program within the RIkeSD framework today and embark on a transformative journey that will shape the future of academia, industry, and society as a whole. Together, we can make an everlasting impact on our world.', 1, '2023-07-08 17:30:22', 0),
(2, 'Technology Based Skill Intensification Program (T-SIP)', 'sip', 'Introducing the Technology-Based Skill Intensification Program!\r\n<br><br>\r\nStay ahead in the digital age with our cutting-edge program. Gain the skills needed to thrive in today\'s fast-paced world. Our interactive courses and workshops empower you with the latest technological expertise. Whether you\'re a beginner or a seasoned pro, our program caters to all levels. Join us now and unlock your full potential!\r\n<br><br>\r\nEnroll now for updates, Don\'t miss out on this transformative opportunity!', 1, '2023-07-08 17:30:22', 0),
(3, 'Circular Hotspot ', 'circular_hotspot', 'Uncover the fascinating realm of circular hotspots and their applications. Join our immersive program to delve into the principles, techniques, and cutting-edge advancements in circular hotspot technology. Whether you\'re a novice or an expert, our program offers engaging workshops and hands-on experiences to expand your knowledge. Enroll today and embark on a journey of discovery!', 1, '2023-07-08 17:30:22', 0),
(4, 'Reseach Commercialisation ', 'commercialisation', 'Drive Innovation with Research Commercialization\n<br><br>\nHarness the power of research commercialization and turn groundbreaking ideas into real-world solutions. Our program empowers researchers to navigate the complex landscape of technology transfer, intellectual property, and market-driven innovation. Join us to gain the knowledge, tools, and networks necessary to bridge the gap between research and commercial success. Unlock your potential in research commercialization today!\n<br><br>\nEnrollment Form for Research Commercialization Program:', 1, '2023-07-08 17:30:22', 0),
(5, 'Our engagements', 'engagements', 'Join us for our monthly S2B Online Sessions every third Saturday of the month and engage in discussions on economic development roadmaps on Twitter Space.', 1, '2023-07-08 17:30:22', 0),
(6, 'Start a project', 'start-project', '', 2, '2023-07-15 23:19:20', 0),
(7, 'Discover', 'discover', '', 2, '2023-07-15 23:19:20', 0),
(8, 'Market Place', 'marketplace', '🌐 RIKESD Market Place: Empower Research, Connect Globally! 💡  Discover cutting-edge research, collaborate with experts, and shape a brighter future. Explore ! 🚀🌎 ', 2, '2023-07-15 23:19:20', 0),
(9, 'Research Funding', 'research-funding', '', 2, '2023-07-15 23:19:20', 0),
(10, 'Available Funding Opportunities', 'available-funding-opportunities', '', 2, '2023-07-15 23:19:20', 0),
(11, 'Funding a research', 'fund-research', '', 2, '2023-07-15 23:19:20', 0),
(12, 'RDI Infrastructure', 'infrastructure', '', 2, '2023-07-15 23:19:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `id` int(11) NOT NULL,
  `sub_profession` varchar(100) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `sub_profession`, `category`, `created_at`, `deleted`) VALUES
(1, 'Comics', 1, '2023-07-06 07:10:00', 0),
(2, 'Crafts', 1, '2023-07-06 07:10:00', 0),
(3, 'Dance', 1, '2023-07-06 07:10:00', 0),
(4, 'Design', 1, '2023-07-06 07:10:00', 0),
(5, 'Fashion', 1, '2023-07-06 07:10:00', 0),
(6, 'Film & Video', 1, '2023-07-06 07:10:00', 0),
(7, 'Music', 1, '2023-07-06 07:10:00', 0),
(8, 'Photography', 1, '2023-07-06 07:10:00', 0),
(9, 'Publishing', 1, '2023-07-06 07:10:00', 0),
(10, 'Theater', 1, '2023-07-06 07:10:00', 0),
(11, 'Animation', 1, '2023-07-06 07:10:00', 0),
(12, 'Illustration', 1, '2023-07-06 07:10:00', 0),
(13, 'Stand-up Comedy', 1, '2023-07-06 07:10:00', 0),
(14, 'Fine Arts', 1, '2023-07-06 07:10:00', 0),
(15, 'Sculpture', 1, '2023-07-06 07:10:00', 0),
(16, 'Calligraphy', 1, '2023-07-06 07:10:00', 0),
(17, 'Magic', 1, '2023-07-06 07:10:00', 0),
(18, 'Tattoo Artistry', 1, '2023-07-06 07:10:00', 0),
(19, 'Videography', 1, '2023-07-06 07:10:00', 0),
(20, 'Podcasting', 1, '2023-07-06 07:10:00', 0),
(21, 'Radio Broadcasting', 1, '2023-07-06 07:10:00', 0),
(22, 'Visual Effects', 1, '2023-07-06 07:10:00', 0),
(23, 'Cinematography', 1, '2023-07-06 07:10:00', 0),
(24, 'Music Production', 1, '2023-07-06 07:10:00', 0),
(25, 'Costume Design', 1, '2023-07-06 07:10:00', 0),
(26, 'Set Design', 1, '2023-07-06 07:10:00', 0),
(27, 'Lighting Design', 1, '2023-07-06 07:10:00', 0),
(28, 'Sound Design', 1, '2023-07-06 07:10:00', 0),
(29, 'Acting', 1, '2023-07-06 07:10:00', 0),
(30, 'Voice Acting', 1, '2023-07-06 07:10:00', 0),
(31, 'Screenwriting', 1, '2023-07-06 07:10:00', 0),
(32, 'Editing', 1, '2023-07-06 07:10:00', 0),
(33, 'Copywriting', 1, '2023-07-06 07:10:00', 0),
(34, 'Grant Writing', 1, '2023-07-06 07:10:00', 0),
(35, 'Art Restoration', 1, '2023-07-06 07:10:00', 0),
(36, 'Fashion Styling', 1, '2023-07-06 07:10:00', 0),
(37, 'Event Management', 1, '2023-07-06 07:10:00', 0),
(38, 'Music Therapy', 1, '2023-07-06 07:10:00', 0),
(39, 'Forensic Science', 1, '2023-07-06 07:10:00', 0),
(40, 'Broadcast Journalism', 1, '2023-07-06 07:10:00', 0),
(41, 'Sports Journalism', 1, '2023-07-06 07:10:00', 0),
(42, 'Investigative Journalism', 1, '2023-07-06 07:10:00', 0),
(43, 'Cartooning', 1, '2023-07-06 07:10:00', 0),
(44, 'Industrial Design', 1, '2023-07-06 07:10:00', 0),
(45, 'Package Design', 1, '2023-07-06 07:10:00', 0),
(46, 'Digital Marketing', 1, '2023-07-06 07:10:00', 0),
(47, 'Copyediting', 1, '2023-07-06 07:10:00', 0),
(48, 'Proofreading', 1, '2023-07-06 07:10:00', 0),
(49, 'Blogging', 1, '2023-07-06 07:10:00', 0),
(50, 'Vlogging', 1, '2023-07-06 07:10:00', 0),
(51, 'Landscape Design', 1, '2023-07-06 07:10:00', 0),
(52, 'Interior Design', 1, '2023-07-06 07:10:00', 0),
(53, 'Video Game Design', 1, '2023-07-06 07:10:00', 0),
(54, 'Architecture', 2, '2023-07-06 07:20:35', 0),
(55, 'Education', 2, '2023-07-06 07:20:35', 0),
(56, 'Language Learning', 2, '2023-07-06 07:20:35', 0),
(57, 'History', 2, '2023-07-06 07:20:35', 0),
(58, 'Parenting', 2, '2023-07-06 07:20:35', 0),
(59, 'Linguistics', 2, '2023-07-06 07:20:35', 0),
(60, 'Translation', 2, '2023-07-06 07:20:35', 0),
(61, 'Language Teaching', 2, '2023-07-06 07:20:35', 0),
(62, 'Sports', 3, '2023-07-06 07:24:50', 0),
(63, 'Fitness', 3, '2023-07-06 07:24:50', 0),
(64, 'Beauty', 3, '2023-07-06 07:24:50', 0),
(65, 'Culinary', 3, '2023-07-06 07:24:50', 0),
(66, 'Psychology', 3, '2023-07-06 07:24:50', 0),
(67, 'Health Coaching', 3, '2023-07-06 07:24:50', 0),
(68, 'Nutrition Coaching', 3, '2023-07-06 07:24:50', 0),
(69, 'Life Coaching', 3, '2023-07-06 07:24:50', 0),
(70, 'Physical Therapy', 3, '2023-07-06 07:24:50', 0),
(71, 'Occupational Therapy', 3, '2023-07-06 07:24:50', 0),
(72, 'Speech Therapy', 3, '2023-07-06 07:24:50', 0),
(73, 'Alternative Medicine', 3, '2023-07-06 07:24:50', 0),
(74, 'Yoga', 3, '2023-07-06 07:24:50', 0),
(75, 'Meditation', 3, '2023-07-06 07:24:50', 0),
(76, 'Therapy', 3, '2023-07-06 07:24:50', 0),
(77, 'Counseling', 3, '2023-07-06 07:24:50', 0),
(78, 'Art Therapy', 3, '2023-07-06 07:24:50', 0),
(79, 'Expressive Arts Therapy', 3, '2023-07-06 07:24:50', 0),
(80, 'Cognitive Behavioral Therapy (CBT)', 3, '2023-07-06 07:24:50', 0),
(81, 'Mindfulness-Based Therapy', 3, '2023-07-06 07:24:50', 0),
(82, 'Speech-Language Pathology', 3, '2023-07-06 07:24:50', 0),
(83, 'Marketing', 4, '2023-07-06 07:26:38', 0),
(84, 'Business', 4, '2023-07-06 07:26:38', 0),
(85, 'Finance', 4, '2023-07-06 07:26:38', 0),
(86, 'Consulting', 4, '2023-07-06 07:26:38', 0),
(87, 'Entrepreneurship', 4, '2023-07-06 07:26:38', 0),
(88, 'Leadership', 4, '2023-07-06 07:26:38', 0),
(89, 'Project Management', 4, '2023-07-06 07:26:38', 0),
(90, 'Market Research', 4, '2023-07-06 07:26:38', 0),
(91, 'Data Analysis', 4, '2023-07-06 07:26:38', 0),
(92, 'Human Resources', 4, '2023-07-06 07:26:38', 0),
(93, 'Risk Management', 4, '2023-07-06 07:26:38', 0),
(94, 'Supply Chain Management', 4, '2023-07-06 07:26:38', 0),
(95, 'Economics', 4, '2023-07-06 07:26:38', 0),
(96, 'Science', 5, '2023-07-06 07:28:42', 0),
(97, 'Engineering', 5, '2023-07-06 07:28:42', 0),
(98, 'Social Work', 5, '2023-07-06 07:28:42', 0),
(99, 'Environmental', 5, '2023-07-06 07:28:42', 0),
(100, 'Charity', 5, '2023-07-06 07:28:42', 0),
(101, 'Forensics', 5, '2023-07-06 07:28:42', 0),
(102, 'Astrophysics', 5, '2023-07-06 07:28:42', 0),
(103, 'Meteorology', 5, '2023-07-06 07:28:42', 0),
(104, 'Geology', 5, '2023-07-06 07:28:42', 0),
(105, 'Archaeology', 5, '2023-07-06 07:28:42', 0),
(106, 'Game Development', 5, '2023-07-06 07:28:42', 0),
(107, 'Ethical Hacking', 5, '2023-07-06 07:28:42', 0),
(108, 'Ethical Investing', 5, '2023-07-06 07:28:42', 0),
(109, 'Photogrammetry', 5, '2023-07-06 07:28:42', 0),
(110, 'Nanotechnology', 5, '2023-07-06 07:28:42', 0),
(111, 'Forestry', 5, '2023-07-06 07:28:42', 0),
(112, 'Biomedical Engineering', 5, '2023-07-06 07:28:42', 0),
(113, 'Chemical Engineering', 5, '2023-07-06 07:28:42', 0),
(114, 'Civil Engineering', 5, '2023-07-06 07:28:42', 0),
(115, 'Electrical Engineering', 5, '2023-07-06 07:28:42', 0),
(116, 'Environmental Engineering', 5, '2023-07-06 07:28:42', 0),
(117, 'Mechanical Engineering', 5, '2023-07-06 07:28:42', 0),
(118, 'Software Engineering', 5, '2023-07-06 07:28:42', 0),
(119, 'Aerospace Engineering', 5, '2023-07-06 07:28:42', 0),
(120, 'Bioinformatics', 5, '2023-07-06 07:28:42', 0),
(121, 'Photovoltaics', 5, '2023-07-06 07:28:42', 0),
(122, 'Wind Energy', 5, '2023-07-06 07:28:42', 0),
(123, 'Renewable Energy', 5, '2023-07-06 07:28:42', 0),
(124, 'Robotics', 5, '2023-07-06 07:28:42', 0),
(125, 'Law', 6, '2023-07-06 07:31:15', 0),
(126, 'Politics', 6, '2023-07-06 07:31:15', 0),
(127, 'Environmental Law', 6, '2023-07-06 07:31:15', 0),
(128, 'Immigration Law', 6, '2023-07-06 07:31:15', 0),
(129, 'Banking Law', 6, '2023-07-06 07:31:15', 0),
(130, 'Criminal Law', 6, '2023-07-06 07:31:15', 0),
(131, 'Entertainment Law', 6, '2023-07-06 07:31:15', 0),
(132, 'Copyright Law', 6, '2023-07-06 07:31:15', 0),
(133, 'Patent Law', 6, '2023-07-06 07:31:15', 0),
(134, 'Corporate Law', 6, '2023-07-06 07:31:15', 0),
(135, 'International Law', 6, '2023-07-06 07:31:15', 0),
(136, 'Human Rights Law', 6, '2023-07-06 07:31:15', 0),
(137, 'Climate Change Policy', 6, '2023-07-06 07:31:15', 0),
(138, 'Conservation', 7, '2023-07-06 07:33:23', 0),
(139, 'Wildlife Conservation', 7, '2023-07-06 07:33:23', 0),
(140, 'Sustainable Living', 7, '2023-07-06 07:33:23', 0),
(141, 'Conservation Biology', 7, '2023-07-06 07:33:23', 0),
(142, 'Marine Conservation', 7, '2023-07-06 07:33:23', 0),
(143, 'Animal Welfare', 7, '2023-07-06 07:33:23', 0),
(144, 'Animal Behavior', 7, '2023-07-06 07:33:23', 0),
(145, 'Sustainable Tourism', 7, '2023-07-06 07:33:23', 0),
(146, 'Adventure Travel', 7, '2023-07-06 07:33:23', 0),
(147, 'Cultural Heritage Preservation', 7, '2023-07-06 07:33:23', 0),
(148, 'Green Building Design', 7, '2023-07-06 07:33:23', 0),
(149, 'Organic Farming', 7, '2023-07-06 07:33:23', 0),
(150, 'Permaculture', 7, '2023-07-06 07:33:23', 0),
(151, 'Aquaponics', 7, '2023-07-06 07:33:23', 0),
(152, 'Agroforestry', 7, '2023-07-06 07:33:23', 0),
(153, 'Technology', 8, '2023-07-06 07:36:04', 0),
(154, 'Web Development', 8, '2023-07-06 07:36:04', 0),
(155, 'Mobile Development', 8, '2023-07-06 07:36:04', 0),
(156, 'Data Science', 8, '2023-07-06 07:36:04', 0),
(157, 'Artificial Intelligence', 8, '2023-07-06 07:36:04', 0),
(158, 'Virtual Reality', 8, '2023-07-06 07:36:04', 0),
(159, 'Augmented Reality', 8, '2023-07-06 07:36:04', 0),
(160, 'Cryptocurrency', 8, '2023-07-06 07:36:04', 0),
(161, 'Blockchain', 8, '2023-07-06 07:36:04', 0),
(162, 'E-commerce', 8, '2023-07-06 07:36:04', 0),
(163, 'Social Media', 8, '2023-07-06 07:36:04', 0),
(164, 'Content Creation', 8, '2023-07-06 07:36:04', 0),
(165, 'Internet of Things (IoT)', 8, '2023-07-06 07:36:04', 0),
(166, '3D Printing', 8, '2023-07-06 07:36:04', 0),
(167, 'AR/VR Development', 8, '2023-07-06 07:36:04', 0),
(168, 'App Development', 8, '2023-07-06 07:36:04', 0),
(169, 'Web Design', 8, '2023-07-06 07:36:04', 0),
(170, 'SEO (Search Engine Optimization)', 8, '2023-07-06 07:36:04', 0),
(171, 'Machine Learning', 8, '2023-07-06 07:36:04', 0),
(172, 'Artificial Intelligence Ethics', 8, '2023-07-06 07:36:04', 0),
(173, 'Machine Learning Ethics', 8, '2023-07-06 07:36:04', 0),
(174, 'Data Privacy', 8, '2023-07-06 07:36:04', 0),
(175, 'Food', 9, '2023-07-06 08:03:17', 0),
(176, 'Journalism', 9, '2023-07-06 08:03:17', 0),
(177, 'Travel', 9, '2023-07-06 08:03:17', 0),
(178, 'Automotive', 9, '2023-07-06 08:03:17', 0),
(179, 'Aviation', 9, '2023-07-06 08:03:17', 0),
(180, 'Marine Biology', 9, '2023-07-06 08:03:17', 0),
(181, 'Astrology', 9, '2023-07-06 08:03:17', 0),
(182, 'Solar Energy', 9, '2023-07-06 08:03:17', 0),
(183, 'Hydropower', 9, '2023-07-06 08:03:17', 0),
(184, 'Public Speaking', 9, '2023-07-06 08:03:17', 0),
(185, 'Conflict Resolution', 9, '2023-07-06 08:03:17', 0),
(186, 'Customer Service', 9, '2023-07-06 08:03:17', 0),
(187, 'Public Relations', 9, '2023-07-06 08:03:17', 0),
(188, 'Instrument Making', 9, '2023-07-06 08:03:17', 0),
(189, 'Writing', 9, '2023-07-06 08:03:17', 0),
(190, 'Public Health', 9, '2023-07-06 08:03:17', 0),
(191, 'Epidemiology', 9, '2023-07-06 08:03:17', 0),
(192, 'Genetics', 9, '2023-07-06 08:03:17', 0),
(193, 'Neuroscience', 9, '2023-07-06 08:03:17', 0),
(194, 'Astronomy', 9, '2023-07-06 08:03:17', 0),
(195, 'Others', 9, '2023-07-06 08:03:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `nda_status` int(11) NOT NULL DEFAULT 1,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL DEFAULT 'male',
  `personality` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `head` int(11) NOT NULL DEFAULT 0,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `brief_biography` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(50) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `category`, `nda_status`, `fullname`, `gender`, `personality`, `position`, `head`, `email`, `phone`, `brief_biography`, `photo`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 0, 1, 'fullname', 'male', 'personality', 'position', 0, 'email', 'phone', 'brief_biography', 'photo', '0000-00-00 00:00:00', 'updated_at', 1),
(2, 1, 1, 'Engr. Mansur Ahmed', 'male', 'ED, Dangote Group/Ex - President, MAN', 'Chairman', 1, 'mansur.ahmed48@gmail.com', '080 3314 3403', '', 'mansur-ahmed.jpg', '0000-00-00 00:00:00', '', 0),
(3, 1, 1, 'Dr Harriet Lonka', 'female', 'Luarea University, Finland', 'Co-Chair', 0, 'Harriet.Lonka@laurea.fi', '358 40 0755475', '', 'harriet.png', '0000-00-00 00:00:00', '', 0),
(4, 1, 1, 'Prof. Bello Shuaib Orchia', 'male', 'UDUS, Sokoto, Nigeria', 'Member', 0, 'oricha.bello@udusok.edu.ng', '8066024503', '', 'oricha.jpg', '0000-00-00 00:00:00', '', 0),
(5, 1, 1, 'Prof. Abubakar Sambo', 'male', 'Nigeria', 'Member', 0, 'assambo@gmail.com', '8033111631', '', 'sambo-2.jpg', '0000-00-00 00:00:00', '', 0),
(6, 1, 1, 'Prof. Abdul-Rasheed Na\'Allah', 'male', 'VC Uni Abuja', 'Member', 0, 'anaallah@hotmail.com', '+234 806 265 0613', '', 'naallah.jpg', '0000-00-00 00:00:00', '', 0),
(7, 2, 1, 'Prof Dr Mohammed Soliman', 'male', 'President, ARC, Egypt', 'Chairman', 1, 'm.soliman41@yahoo.com', '+20 10600441776', '', 'soliman.jpg', '0000-00-00 00:00:00', '', 0),
(8, 2, 1, 'Prof Babatunde Salako', 'male', 'DG, Nigeria Medical Research Institute', 'Co-Chair', 0, 'tundesalako@hotmail.com', '8033832637', '', 'salako.jpg', '0000-00-00 00:00:00', '', 0),
(9, 2, 1, 'Prof Abiodun Aibinu', 'male', 'Vice Chancellor, Summit University Nigeria', 'Member', 0, 'maibinu@gmail.com', '8029494164', '', 'aibinu.jpg', '0000-00-00 00:00:00', '', 0),
(10, 2, 1, 'Prof Charles Ruranga', 'male', 'Director, ACE Data Science, University of Rwanda', 'Member', 0, 'cruranga@gmail.com', '+250 788 484 421', '', 'ruranga.jpg', '0000-00-00 00:00:00', '', 0),
(11, 2, 1, 'Dr Yemi Akinbamijo', 'male', 'FARA, African Union', 'Member', 0, 'yakinbamijo@faraafrica.org', '233 54011 9833', '', 'akinbamijo.jpg', '0000-00-00 00:00:00', '', 0),
(12, 2, 1, 'Ms Joy Owango', 'female', 'Executive Director, TCC, Kenya', 'Member', 0, 'joy.owango@tcc-africa.org', '+254 733 792 316', '', 'owango.jpg', '0000-00-00 00:00:00', '', 0),
(13, 2, 1, 'Sir Henry Eteama', 'male', 'NPC, EU-Horizon Project, Nigeria', 'Member', 0, 'eteamah@gmail.com', '+234 8033153401', '', 'eteama.jpg', '0000-00-00 00:00:00', '', 0),
(14, 2, 1, 'Ass. Prof. Jean Feugang', 'male', 'MSU, USA', 'Member', 0, 'jn181@ads.msstate.edu', '+ 1 662 312 3532', '', 'feugang.jpg', '0000-00-00 00:00:00', '', 0),
(15, 2, 1, 'AVM Jomo Osahor (RTD),', 'male', 'Nigeria', 'Member', 0, 'osahorj@yahoo.com', '8037240049', '', 'osahor.jpg', '0000-00-00 00:00:00', '', 0),
(16, 2, 1, '', 'male', '', '', 0, '', '', '', '', '0000-00-00 00:00:00', '', 1),
(17, 2, 1, 'Dr Seye Awojobi,', 'male', 'Nigeria', 'Member', 0, 'awojoborn@yahoo.com', '8034099894', '', 'awojobi.jpg', '0000-00-00 00:00:00', '', 0),
(18, 3, 1, 'H.E Ambassador Muhammad Makarfi', 'male', 'Nigeria?s Ambassador to Brazil', 'Chairman', 1, 'amakarfi@gmail.com', '+2348035040421, +5561991145064', '', 'makarfi.jpg', '0000-00-00 00:00:00', '', 0),
(19, 3, 1, 'Prof. Ekanem Braide', 'male', 'resident NAS Nigeria', 'Member', 0, 'ekanembraide@hotmail.com', '8033416842', '', 'braide.jpg', '0000-00-00 00:00:00', '', 0),
(20, 3, 1, 'H.E. Ambassador David Doyle', 'male', 'Ambassador to UNESCO', 'Member', 0, 'dpdoyle@orange.fr', '+ 33 628 69 40 40', '', 'david-doyle.jpg', '0000-00-00 00:00:00', '', 0),
(21, 3, 1, 'Prof Atwa Atwa', 'male', 'Director, ARC Egypt', 'Member', 0, 'atwaradwan@yahoo.com', '+20 100 510 9816', '', 'atwa.jpg', '0000-00-00 00:00:00', '', 0),
(22, 3, 1, 'Prof Margaret Khaitsa', 'female', 'MSU, USA', 'Member', 0, 'mkhaitsa@cvm.msstate.edu', '+ 1 701 318 8831', '', 'khaitsa.jpg', '0000-00-00 00:00:00', '', 0),
(23, 3, 1, 'Dr Nick Nwakpa', 'male', 'African Union', 'Member', 0, 'nicknwankpa2004@yahoo.com', '+ 251 929335303', '', 'nwakpa.jpg', '0000-00-00 00:00:00', '', 0),
(24, 3, 1, 'Prof. Conrad Asotie Omonhinmin', 'male', 'Covenant University, Nigeria', 'Member', 0, 'conrad.omonhinmin@covenantuniversity.edu.ng', '8056512546', '', 'conrad.jpg', '0000-00-00 00:00:00', '', 0),
(25, 3, 1, 'Mrs. Rabiat Yetunde Popoola', 'female', 'Nigeria', 'Member', 0, 'physioyetty@gmail.com', '7037375855', '', 'yetunde.png', '0000-00-00 00:00:00', '', 0),
(26, 4, 1, 'Prof. S. E. Bogoro,FAS', 'male', 'Karl Kum University, Nigeria', 'Chairman', 1, 'sbogoro@yahoo.com', '8063479513', '', 'bogoro.jpg', '0000-00-00 00:00:00', '', 0),
(27, 4, 1, 'Prof Muhammed Haruna', 'male', 'EVC/CE NASENI Nigeria', 'Co-Chair', 0, 'msharuna@gmail.com', '8033110257', '', 'haruna.png', '0000-00-00 00:00:00', '', 0),
(28, 4, 1, 'Dr Nicholas Ozor', 'male', 'Executive Director, ATPS, Kenya', 'Member', 0, 'nozor@atpsnet.org', '+254 713 161928', '', 'ozor.jpg', '0000-00-00 00:00:00', '', 0),
(29, 4, 1, 'Dr Rose Gidado', 'male', 'OFAB Country Director, Nigeria', 'Member', 0, 'roxydado91@gmail.com', '8033142898', '', 'gidado.jpg', '0000-00-00 00:00:00', '', 0),
(30, 4, 1, 'Nabil Ksibi', 'male', 'ORCID, South Africa', 'Member', 0, 'n.ksibi@orcid.org', '+ 27 60 5098172', '', 'ksibi.jpg', '0000-00-00 00:00:00', '', 0),
(31, 4, 1, 'Dr. Grace Murilla', 'male', '', 'Member', 0, 'Gmurilla@gmail.com?', '2.54723E+11', '', 'murilla.jpeg', '0000-00-00 00:00:00', '', 0),
(33, 5, 1, 'Dr. Mustapha A. Popoola?', 'male', 'Converner S2B Nigeria', 'Executive Director', 1, 'mpopoola@rikesd.org, honmusty2@gmail.com', '+234 806 630 1780', '', 'map.jpg', '0000-00-00 00:00:00', '', 0),
(34, 5, 1, 'Mr. Shafi Akinropo', 'male', 'CEO. Sandsify Systems', 'Technology Lead', 0, 'sakinropo@gmail.com, sakinropo@rikesd.org', '234 8098290445', '', 'shafi.jpeg', '0000-00-00 00:00:00', '', 0),
(35, 5, 1, 'Barr. Olabisi Olagbemiro', 'female', '', 'Company Secretary/ Legal Lead', 0, 'oolabisi@rikesd.org, bisiolagbemiro@gmail.com', '+234 806 892 8893', '', '', '0000-00-00 00:00:00', '', 0),
(36, 5, 1, 'Mr. Luqman Popoola', 'male', '', 'Strategy Lead', 0, 'lpopoola@rikesd.org, abiolatreasure@gmail.com', '+234 703 938 8978', '', '', '0000-00-00 00:00:00', '', 0),
(37, 5, 1, 'Mrs. Saidat Shonoiki', 'female', '', 'Productivity Lead', 0, 'sshonoiki@rikesd.org,greenskillnaija@gmail.com', '+234 708 201 6126', '', '', '0000-00-00 00:00:00', '', 0),
(38, 5, 1, 'Mrs. Oludolapo Olusanmokun', 'female', '', 'Collaboration and Partnership Lead', 0, 'odolapo@rikesd.org, dolapo.olusanmokun@gmail.com', '+234 703 908 3077', '', 'dolapo.jpg', '0000-00-00 00:00:00', '', 0),
(39, 5, 1, 'Barr. Adio Murtala', 'male', '', 'Corporate Governance Lead', 0, 'madio@rikesd.org,?adtenlaw@yahoo.com', '+234 803 045 2090', '', 'madio.jpg', '0000-00-00 00:00:00', '', 0),
(40, 5, 1, 'Mr. Lukman Kareem', 'male', '', 'Finance Lead', 0, 'abdulkareemlukman@gmail.com, klukman@rikesd.org', '+234 806 224 0438', '', 'lukman_kareem.jpeg', '0000-00-00 00:00:00', '', 0),
(41, 5, 1, 'Ms. Blessing Abani-Elem', 'female', '', 'Communication Lead', 0, 'ablessing@rikesd.org,rikssd22@gmail.com', '+234 8166151488', '', '', '0000-00-00 00:00:00', '', 0),
(42, 5, 1, 'John Paul Mbiimbe', 'male', '', 'New Media & Networking Lead', 0, 'mbiimbe2fon@yahoo.com, jpaul@rikesd.org', '+234 708 547 3382', '', 'john.jpeg', '0000-00-00 00:00:00', '', 0),
(43, 5, 1, 'Mr. Kehinde Salami', 'male', '', 'Human Capital Development & Team Management Servic', 0, 'stakgf@gmail.com, ksalami@rikesd.org', '+234 805 302 1822', '', 'salami.jpg', '0000-00-00 00:00:00', '', 0),
(44, 5, 1, 'Jamaldeen Lawal', 'male', '', 'Product Development Lead', 0, 'jamaldeenlawal@gmail.com, jlawal@rikesd.org', '+234 706 517 4560', '', 'jamal.jpeg', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_category`
--

CREATE TABLE `team_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(50) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_category`
--

INSERT INTO `team_category` (`id`, `name`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'Board of Governors', '2023-07-04 09:22:51', '', 0),
(2, 'Board of Experts', '2023-07-04 09:22:51', '', 0),
(3, 'Board of Advisors', '2023-07-04 09:22:51', '', 0),
(4, 'Board of Financial Trustees', '2023-07-04 09:22:51', '', 0),
(5, 'Executive Management Team', '2023-07-04 09:22:51', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discoveries`
--
ALTER TABLE `discoveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_blog`
--
ALTER TABLE `feature_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_application`
--
ALTER TABLE `project_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researcher`
--
ALTER TABLE `researcher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_need`
--
ALTER TABLE `research_need`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_category`
--
ALTER TABLE `team_category`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discoveries`
--
ALTER TABLE `discoveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature_blog`
--
ALTER TABLE `feature_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_application`
--
ALTER TABLE `project_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `researcher`
--
ALTER TABLE `researcher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research_need`
--
ALTER TABLE `research_need`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `team_category`
--
ALTER TABLE `team_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `specialization`
--
ALTER TABLE `specialization`
  ADD CONSTRAINT `specialization_ibfk_1` FOREIGN KEY (`category`) REFERENCES `professions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
