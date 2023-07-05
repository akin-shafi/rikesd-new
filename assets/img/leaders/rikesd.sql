-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 02:57 PM
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
(26, 4, 1, 'Prof. S. E. Bogoro,FAS', 'male', 'Karl Kum University, Nigeria', 'Chairman', 0, 'sbogoro@yahoo.com', '8063479513', '', 'bogoro.jpg', '0000-00-00 00:00:00', '', 0),
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
(38, 5, 1, 'Mrs. Dolapo Omolukun', 'female', '', 'Collaboration and Partnership Lead', 0, 'odolapo@rikesd.org, dolapo.olusanmokun@gmail.com', '+234 703 908 3077', '', '', '0000-00-00 00:00:00', '', 0),
(39, 5, 1, 'Barr. Adio Murtala', 'male', '', 'Corporate Governance Lead', 0, 'madio@rikesd.org,?adtenlaw@yahoo.com', '+234 803 045 2090', '', '', '0000-00-00 00:00:00', '', 0),
(40, 5, 1, 'Mr. Lukman Kareem', 'male', '', 'Finance Lead', 0, 'abdulkareemlukman@gmail.com, klukman@rikesd.org', '+234 806 224 0438', '', '', '0000-00-00 00:00:00', '', 0),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
