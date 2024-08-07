-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 07:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcharity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'guest', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `description3` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(500) NOT NULL,
  `postby` varchar(100) NOT NULL,
  `postdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description1`, `description2`, `description3`, `image`, `category`, `postby`, `postdate`) VALUES
(5, 'Heat and gender: Enhancing her resilience to rising temperatures', 'Extreme heat is one of the deadliest natural hazards, with South Asia seeing over 110,000 heat-related excess deaths a year in the last two decades – a worrisome statistic as 2024 is shaping up to be increasingly likely to be the warmest year on record. While heat is often thought of as an indiscriminate killer, not everyone is impacted by heat equally. Women bear a disproportionate burden of heat’s physical, social, and financial effects as temperatures rise. Women are at higher risk for heat-related illness and have higher death rates than men during heat waves due to physiological differences, disparities in access to electricity and water, and social norms around women as caregivers.\n\nHeat has a profound impact on maternal and neonatal health, with research showing links between heat exposure and pre-term births, miscarriages, and stillbirths. Furthermore, heat often creates a “double burden” for women as they are not only more physically susceptible to its effects but also tend to be expected to care for other heat-vulnerable household members, including children and the elderly. A report by HomeNet South Asia, a regional network of home-based workers, found that 43 percent of women surveyed reported an increase in caregiving due to extreme heat. Lastly, women face bigger proportional income losses from extreme heat, with female-headed households losing 8 percent more of their annual incomes when compared to male-headed households in low and middle-income countries.\n\nThe heightened vulnerability of females necessitates gender-informed heat management solutions, particularly in the following areas:\n\n1. Women tend to have less access to information on the risks of extreme heat. According to Bijal Brahmbhatt, CEO of Mahila Housing Trust, experiential learning can empower women on concepts like heat waves, indoor temperatures, and ventilation. Through their surveillance toolkits distributed to over 25,000 households in 100 informal settlements in India, Bangladesh, and Nepal, women are trained to log data from temperature and humidity sensors three times a day, enabling a better understanding of how heat is distributed in communities. Bushra Afreen, Chief Heat Officer of Dhaka, is developing heat awareness materials with UNICEF and the Bangladesh Red Crescent Society to catalyze public engagement with heat risks and solutions in communities across Dhaka.\n\n2. Women are falling through cracks in existing early warning systems. In her survey of over 13,000 households in Karachi, Nausheen Anwar, professor at IBA and founder of Karachi Urban Lab, found over 50 percent had never received a heat alert of any kind despite an emphasis on early warning systems in Karachi’s heat wave management plan. Similarly, as over 40 percent of Mahila Housing Trust’s female members do not own mobile phones, MHT has directly partnered with India Meteorological Department to disseminate weekly forecast data through its meetings, posters, and radio announcements.\n\n3.Women have limited access to cooling spaces outside the home, while often cooking in dwellings that lack fans, running water, and toilets. According to Afreen, women in Dhaka with inadequate access to sanitation services reduce water consumption to avoid having to urinate, amplifying risks of dehydration on hot days, in line with research probing why women in informal settlements were most at risk in the 2010 Ahmedabad heat wave. Therefore, Afreen is spearheading an initiative to pilot women-friendly cooling zones in Dhaka with shade, water booths, and access to bathrooms.\n\n4.Women need financial protection from extreme heat. Brahmbhatt at the Mahila Housing Trust is piloting a parametric insurance scheme to cover heat-related income losses for women working in India’s informal sector. Insurance is paid out according to pre-set temperature thresholds, allowing members the flexibility to either work more safely or stay home in dangerous temperatures.\n\n5. Despite being disproportionately affected by heat-related issues, women are underrepresented in positions of power that influence decision-making and policies on heat. When asked what their number one priority for alleviating the impacts of extreme heat in South Asia, Anwar answered that she would want “architects, engineers, urban planners, medical doctors, and epidemiologists to sit at the same table to have a profound conversation on what a new urban future in light of global warming trends would look like, with gender right at the heart of these conversations,” while Brahmbhatt similarly emphasized the importance of a “future where women can be part of the conversation in the public and private sectors and influence policies, governance, and budgets.”\n\nLast April, the World Bank released a policy brief on urban heat in South Asia to foster deeper conversations on improving cities\' resilience to extreme heat, with a focus on the large thermal inequities existing within cities. Rising temperatures are shedding an unmistakable light on how women bear a disproportionate burden of heat’s physical, social, and financial effects. With targeted heat management interventions that factor in gender, these risks and impacts can be reduced for South Asia’s women. ', '', '', 'post_blog.webp', 'Education,Health,', 'admin', '2024-08-05'),
(7, 'How to create readable and accessible content', 'How to create readable and accessible content by Denise Atkins\r\nContent design is all about putting the user first. This puts the onus on charities to understand their audiences and make their services and content inclusive \r\nHow to create readable and accessible content\r\n03 May 2023\r\nby Denise Atkins\r\nContent design is all about putting the user first. This puts the onus on charities to understand their audiences and make their services and content inclusive\r\n\r\nHave you ever Googled a recipe? Did you find yourself scrolling past the writer’s life story and a load of adverts before you reached the ingredients list?\r\n\r\n \r\n\r\nThese tactics keep your users tied up far longer than they need to be. That might be good for the website’s advertisers, but it is terrible content design for someone baking a cake in a hurry.\r\n\r\n \r\n\r\nIf you’re selfish with your users’ time, they’re not likely to rush back. It’s also bad for the environment.', 'Contrast that with the Gov.uk website. Their user research told them that users often want to know the date of the next bank holiday.\r\n\r\n \r\n\r\nThey redesigned their UK bank holidays page to show the next date at the top of the page. The full list of dates is below, but many people do not need it. One glance at the page and they are gone.\r\n\r\n \r\n\r\nWhat may have looked like a terrible bounce rate in Google Analytics is a sign of high-quality, accessible content.\r\n\r\nWriting for the web should not be about making people scroll through content they do not need.\r\n\r\n \r\n\r\nPeople want to get to the important stuff.', 'Your information should be available to all. Accessible content helps people with cognitive impairments or learning difficulties. Likewise, it is better for people who speak English as a foreign language.\r\n\r\n \r\n\r\nSome people worry that simple language is ‘dumbing down’. But there’s lots of evidence that readable content benefits everyone. Your most advanced readers might understand complicated prose, but do they need it? Busy people like to get to the point. You’re not patronising, you’re removing barriers.', 'post_blog2.png', 'Education,Science,', 'admin', '2024-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `street` varchar(150) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postalcode` varchar(6) NOT NULL,
  `country` varchar(100) NOT NULL,
  `area_code` varchar(3) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `msg` text NOT NULL,
  `donation_type` varchar(100) NOT NULL,
  `donation_item` varchar(100) NOT NULL,
  `quantity` varchar(1000) NOT NULL,
  `item_image` varchar(300) NOT NULL,
  `item_description` varchar(300) NOT NULL,
  `delivery_method` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `curdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `first_name`, `last_name`, `street`, `city`, `state`, `postalcode`, `country`, `area_code`, `number`, `email`, `msg`, `donation_type`, `donation_item`, `quantity`, `item_image`, `item_description`, `delivery_method`, `amount`, `payment_method`, `curdate`) VALUES
(18, 'bhuwan', 'singh', 'street  njo 9', 'bathinda', 'Punjab', '151001', 'India', '+91', '9988936261', 'sunny1532000@gmail.com', 'sgdshajd', 'Money', '', '', '', '', '', '10000', 'PayPal', '2024-07-11 10:09:02'),
(38, 'sunny', 'verma', 'street no 3', 'pataila', 'Punjab', '151001', 'India', '+91', '7403062000', 'sam1532000@gmail.com', 'sbdhavhds', 'Item', 'Clothes', '8', 'card 6.webp', 'available in size S,M,L,XL,XXL', 'Schedule a pick up', '', '', '2024-07-16 09:19:40'),
(39, 'sunny', 'verma', 'street no 3', 'pataila', 'Punjab', '151001', 'India', '+91', '7403062000', 'sam1532000@gmail.com', 'sbdhavhds', 'Item', 'Clothes', '8', 'card 6.webp', 'available in size S,M,L,XL,XXL', 'Schedule a pick up', '', '', '2024-07-16 09:19:41'),
(40, 'sunny', 'verma', 'street no 3', 'pataila', 'Punjab', '151001', 'India', '+91', '7403062000', 'sam1532000@gmail.com', 'sbdhavhds', 'Item', 'Clothes', '8', 'card 6.webp', 'available in size S,M,L,XL,XXL', 'Schedule a pick up', '', '', '2024-07-16 09:19:42'),
(41, 'sunny', 'verma', 'street no 3', 'pataila', 'Punjab', '151001', 'India', '+91', '7403062000', 'sam1532000@gmail.com', 'sbdhavhds', 'Item', 'Clothes', '8', 'card 6.webp', 'available in size S,M,L,XL,XXL', 'Schedule a pick up', '', '', '2024-07-16 09:19:42'),
(42, 'sunny', 'verma', 'street no 3', 'pataila', 'Punjab', '151001', 'India', '+91', '7403062000', 'sam1532000@gmail.com', 'sbdhavhds', 'Item', 'Clothes', '8', 'card 6.webp', 'available in size S,M,L,XL,XXL', 'Schedule a pick up', '', '', '2024-07-16 09:19:43'),
(43, 'sunny', 'verma', 'street no 3', 'pataila', 'Punjab', '151001', 'India', '+91', '7403062000', 'sam1532000@gmail.com', 'sbdhavhds', 'Item', 'Clothes', '8', 'card 6.webp', 'available in size S,M,L,XL,XXL', 'Schedule a pick up', '', '', '2024-07-16 09:19:44'),
(44, 'sunny', 'verma', 'street no 3', 'pataila', 'Punjab', '151001', 'India', '+91', '7403062000', 'sam1532000@gmail.com', 'sbdhavhds', 'Item', 'Clothes', '8', 'card 6.webp', 'available in size S,M,L,XL,XXL', 'Schedule a pick up', '', '', '2024-07-16 09:19:45'),
(45, 'sunny', 'verma', 'street no 3', 'pataila', 'Punjab', '151001', 'India', '+91', '7403062000', 'sam1532000@gmail.com', 'sbdhavhds', 'Item', 'Clothes', '8', 'card 6.webp', 'available in size S,M,L,XL,XXL', 'Schedule a pick up', '', '', '2024-07-16 09:19:45'),
(46, 'sunny', 'verma', 'street no 3', 'pataila', 'Punjab', '151001', 'India', '+91', '7403062000', 'sam1532000@gmail.com', 'sbdhavhds', 'Item', 'Clothes', '8', 'card 6.webp', 'available in size S,M,L,XL,XXL', 'Schedule a pick up', '', '', '2024-07-16 09:19:46'),
(47, 'sunny', 'verma', 'street no 3', 'pataila', 'Punjab', '151001', 'India', '+91', '7403062000', 'sam1532000@gmail.com', 'sbdhavhds', 'Item', 'Clothes', '8', 'card 6.webp', 'available in size S,M,L,XL,XXL', 'Schedule a pick up', '', '', '2024-07-16 09:19:47'),
(48, 'gunny', 'Verma', '#12909, Street No 3,Parjapat Colony', 'Bathinda', 'Punjab', '151001', 'India', '+91', '9988936261', 'garg1532000@gmail.com', 'asbdh', 'Item', 'Clothes', '18', 'card 1.png', 'asmjh vdhsa hdvsaj \n gvdgsav \n gdjvsahd \n vhjsa vdjhvsah dshadvhavsbdj \n khsavdhvask hdvsahvdh skvdhsavd hksavdvsa hvdhsav hdsavhd jvsahd vhks ajvd hkajs', 'Schedule a pick up', '', '', '2024-07-16 09:51:49'),
(49, 'rahul', 'kumar', 'street no 7', 'bathinda', 'Punjab', '151001', 'India', '+91', '9988936261', 'Rahul@gmail.com', 'sdbhajvfg', 'Item', 'Books', '15', 'post_1.jpg.webp', 'books', '', '', '', '2024-07-18 10:59:39'),
(50, 'shivam', 'mishra', 'street no 0', 'firozpur', 'Punjab', '151001', 'India', '+91', '9988936261', 's@gmail.com', 'shgfdav', 'Item', 'Vegetables', '6', 'blog img5.webp', 'sbshv', 'Schedule a pick up', '', '', '2024-07-19 09:23:11'),
(51, 'dinesh', 'kumar', 'street no 1', 'bathinda', 'Punjab', '151001', 'India', '+91', '9988936261', 'D@gmail.com', 'sbhaj', 'Item', 'Fruits', '10', 'post_5.jpg', 'savg', 'Courier Yourself', '', '', '2024-07-19 09:24:20'),
(52, 'vansh', 'kumar', 'street no 7', 'bathinda', 'Punjab', '151001', 'India', '+91', '9988936261', 'V@gmail.com', 'sbdahg', 'Item', 'Bread', '14', 'post_7.jpg.webp', 'bdhsbk', 'Schedule a pick up', '', '', '2024-07-19 09:25:30'),
(53, 'bhumi', 'datta', 'street no 3', 'bathinda', 'Punjab', '151001', 'India', 'bat', '9988936261', 'B@gmail.com', 'sdg', 'Item', 'Shoes', '13', 'blog.webp', 'sabdh', 'Schedule a pick up', '', '', '2024-07-19 09:26:38'),
(55, 'Sunny', 'Verma', '#12909, Street No 3,Parjapat Colony', 'Bathinda', 'Punjab', '151001', 'India', '+91', '9988936261', 'sam1532000@gmail.com', 'sbdhb', 'Money', '', '', '', '', '', '20000', 'Debit or Credit card', '2024-07-21 19:12:17'),
(56, 'shubham', 'sharma', 'street no 2/3', 'bathinda', 'Punjab', '151001', 'India', '+91', '9988936261', 'shubham@gmail.com', 'sajgd', 'Money', '', '', '', '', '', '', '', '2024-07-22 10:25:39'),
(57, 'shubham', 'sharma', 'street no 2/3', 'bathinda', 'Punjab', '151001', 'India', '+91', '9988936261', 'shubham@gmail.com', 'sajgd', 'Money', '', '', '', '', '', '20000', 'PayPal', '2024-07-22 10:25:57'),
(58, 'sunny', 'verma', 'street no 8', 'bathinda', 'Punjab', '151001', 'India', '+91', '7403062000', 's@gmail.com', 'svdg', 'Money', '', '', '', '', '', '10000', 'Debit or Credit card', '2024-07-22 12:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `curdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `curdate`) VALUES
(2, 'nnn', 'nsidhu779@gmail.com', 'hh', 'okay', '2024-06-24 03:53:17'),
(3, 'bhawna', 'sam1532000@gmail.com', 'new coder', 'sdbvnsgdsaf', '2024-06-28 04:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `donation_id` varchar(1000) NOT NULL,
  `login_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `curdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `donation_id`, `login_id`, `status`, `curdate`) VALUES
(36, '38', '2', 'Approved', '2024-07-17 10:27:38'),
(39, '47', '1', 'Approved', '2024-07-17 10:51:40'),
(40, '48', '1', 'Approved', '2024-07-17 10:51:51'),
(43, '39', '3', 'Approved', '2024-07-18 10:44:01'),
(44, '42', '3', 'Approved', '2024-07-18 10:44:08'),
(45, '40', '1', 'Approved', '2024-07-19 09:29:02'),
(46, '41', '1', 'Approved', '2024-07-19 09:29:05'),
(47, '43', '1', 'Approved', '2024-07-19 09:29:09'),
(48, '44', '1', 'Approved', '2024-07-19 09:29:13'),
(49, '45', '1', 'Approved', '2024-07-19 09:29:16'),
(50, '46', '1', 'Approved', '2024-07-19 09:39:35'),
(51, '49', '1', 'Approved', '2024-07-22 12:44:12'),
(52, '50', '1', 'Approved', '2024-07-22 12:48:52'),
(53, '51', '1', 'Approved', '2024-07-31 09:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `task` text NOT NULL,
  `curdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task`, `curdate`) VALUES
(28, 'add task', '2024-07-22 10:11:11'),
(29, 'task 1', '2024-07-22 10:11:16'),
(30, 'task 4', '2024-07-22 10:11:18'),
(31, 'task 1', '2024-07-22 10:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(11) NOT NULL,
  `signup_username` varchar(50) NOT NULL,
  `signup_email` varchar(150) NOT NULL,
  `signup_mobile` varchar(10) NOT NULL,
  `signup_password` varchar(100) NOT NULL,
  `curdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `signup_username`, `signup_email`, `signup_mobile`, `signup_password`, `curdate`) VALUES
(7, 'test', 'test@test.com', '', '$2y$10$rFAsfeRFTgewaNooUBLd6OPA8gTQIBQcTGr/y6gY1BBkkJvtPGwh.', '2024-08-04 12:52:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
