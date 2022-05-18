-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 05:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw_7`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) NOT NULL,
  `activity_name` varchar(200) NOT NULL,
  `activity_count` varchar(200) NOT NULL,
  `activity_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity_name`, `activity_count`, `activity_icon`) VALUES
(1, 'Active Feature', '200', 'fa fa-address-book'),
(2, 'Active Client', '2093', 'fa fa-users'),
(3, 'Active Project', '100', 'fa fa-briefcase'),
(4, 'Group Member', '34', 'fa fa-user-o'),
(5, 'Experience Year', '10', 'fa fa-balance-scale');

-- --------------------------------------------------------

--
-- Table structure for table `brand_image`
--

CREATE TABLE `brand_image` (
  `id` int(10) NOT NULL,
  `brand_image_name` varchar(200) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_image`
--

INSERT INTO `brand_image` (`id`, `brand_image_name`, `status`) VALUES
(1, '1.png', 'active'),
(2, '2.png', 'active'),
(3, '3.png', 'active'),
(4, '4.png', 'active'),
(5, '5.png', 'active'),
(6, '6.png', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

CREATE TABLE `customer_contact` (
  `id` int(10) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `subject` mediumtext NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_contact`
--

INSERT INTO `customer_contact` (`id`, `customer_name`, `subject`, `customer_email`, `customer_message`) VALUES
(1, 'Kitra Whitfield', 'Quaerat qui voluptas', 'mezenuxot@mailinator.com', 'Consequat Qui dolor'),
(2, 'Hoyt Cervantes', 'Optio provident vo', 'wasuso@mailinator.com', 'Debitis et beatae ac'),
(3, 'Alexandra Arnold', 'Sunt aut et est nih', 'zaxyhisaru@mailinator.com', 'Odio et ullam maxime'),
(4, 'Rhoda Stokes', 'Quam non itaque id ', 'tecut@mailinator.com', 'Quo minim sunt quisq');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` int(10) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `review_details` varchar(200) NOT NULL,
  `customer_position` varchar(200) NOT NULL,
  `customer_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_reviews`
--

INSERT INTO `customer_reviews` (`id`, `customer_name`, `review_details`, `customer_position`, `customer_image`) VALUES
(2, 'Ovijit Karmoker', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professo', 'MERN Stack Developer', '20221650996656285.png'),
(3, 'Himel Srizon', 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat prede', 'Android UI UX Developer', '20221650996823596.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recent_projects`
--

CREATE TABLE `recent_projects` (
  `id` int(10) NOT NULL,
  `project_category` varchar(200) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_image` varchar(200) DEFAULT NULL,
  `project_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recent_projects`
--

INSERT INTO `recent_projects` (`id`, `project_category`, `project_name`, `project_image`, `project_details`) VALUES
(1, 'Voluptatem Voluptat', 'Elliott Heath', '1.jpeg', ''),
(2, 'Et excepteur dolorib', 'Guinevere Stephenson', '2.jpg', ''),
(3, 'Sapiente iste in aut', 'Leroy Noble', '3.png', ''),
(4, 'Accusantium doloremq', 'Davis Robertson', '4.jpg', ''),
(7, 'Excepteur quidem ull', 'Olympia Mueller', '7.jpg', ''),
(8, 'Nihil impedit dolor', 'Brenden Riddle', '8.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta facere earum sequi quo ut. Inventore, ea? Natus necessitatibus minima esse debitis laudantium magnam ad culpa accusamus ut rerum labore voluptate nulla laborum, tempora neque ullam reprehenderit soluta qui amet voluptatem. Adipisci voluptatibus earum qui cumque aut quos eaque aperiam provident. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta facere earum sequi quo ut. Inventore, ea? Natus necessitatibus minima esse debitis laudantium magnam ad culpa accusamus ut rerum labore voluptate nulla laborum, tempora neque ullam reprehenderit soluta qui amet voluptatem. Adipisci voluptatibus earum qui cumque aut quos eaque aperiam provident.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta facere earum sequi quo ut. Inventore, ea? Natus necessitatibus minima esse debitis laudantium magnam ad culpa accusamus ut rerum labore voluptate nulla laborum, tempora neque ullam reprehenderit soluta qui amet voluptatem. Adipisci voluptatibus earum qui cumque aut quos eaque aperiam provident.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta facere earum sequi quo ut. Inventore, ea? Natus necessitatibus minima esse debitis laudantium magnam ad culpa accusamus ut rerum labore voluptate nulla laborum, tempora neque ullam reprehenderit soluta qui amet voluptatem. Adipisci voluptatibus earum qui cumque aut quos eaque aperiam provident.'),
(9, 'Fugiat incididunt po', 'Walker Newman', '9.png', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_details` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `delete_status` varchar(100) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_details`, `icon`, `status`, `delete_status`) VALUES
(1, 'Web Design', 'I am a web designer with 3 years experience', 'fas fa-drafting-compass', 'active', 'no'),
(7, 'Web Developer', 'I am a web developer with 2 years experience', 'fas fa-code', 'active', 'no'),
(9, 'Wayne Gray', 'Sint ipsum cillum ', 'fa fa-beer', 'active', 'no'),
(12, 'Amanda Wilkerson', 'Aute non sed dolore ', 'fa fa-arrow-circle-left', 'active', 'no'),
(13, 'Keelie Johns', 'Dolorem quo deserunt', 'fa fa-bed', 'active', 'no'),
(14, 'Hakeem Rosario', 'Non odit aliquip ab ', 'fa fa-birthday-cake', 'Deactive', 'no'),
(15, 'Guinevere Olsen', 'Ab dolor vel dolorem', 'fa fa-500px', 'active', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `settings_name` varchar(200) NOT NULL,
  `settings_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `settings_name`, `settings_value`) VALUES
(1, 'owner_name', 'Avijit Karmoker'),
(2, 'about_owner', 'As a Beginner Web Developer with 6 months of learning experience in the search for a position where I can enhance my skill set in web technologies to develop and implement solutions to meet business needs'),
(3, 'owner_short_info', 'I am a front-end Junior Web Developer. I am expert in HTML 5, CSS, Bootstrap, JavaScript, ES6 React, React-Router, React-Bootstrap.'),
(4, 'owner_address', 'Dhaka, Bangladesh'),
(5, 'owner_phone', '01771133627'),
(6, 'owner_email', 'ovijit1hsc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sign_in_users`
--

CREATE TABLE `sign_in_users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `profile_photo_name` varchar(200) NOT NULL DEFAULT 'default_profile_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_in_users`
--

INSERT INTO `sign_in_users` (`id`, `name`, `email`, `password`, `phone_no`, `status`, `profile_photo_name`) VALUES
(1, 'Ovijit Karmoker', 'ovijit1hsc@gmail.com', 'fab31ed78f7a0e78992ddd6d6a8343c2', NULL, 'active', 'default_profile_photo.jpg'),
(2, 'viqiq', 'sikysu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(3, 'pytuxe', 'pejov@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(4, 'wyjaru', 'zigikiqad@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(5, 'tafadysany', 'zamikoda@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(6, 'vihuwacuky', 'nurikukig@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(7, 'pafyboso', 'falaj@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(8, 'dyvyhule', 'zukijoxiv@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(9, 'qidiny', 'xynixatul@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(10, 'kyhabit', 'xuvywuz@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(11, 'syryhiq', 'fogy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(12, 'huqot', 'kixer@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(13, 'tubic', 'lefec@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(14, 'redesenyhy', 'piqikox@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(15, 'ruxycaxek', 'pydy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(16, 'pofepyribo', 'waxexy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(17, 'suxexevi', 'zahilamus@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(18, 'musudare', 'zako@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(19, 'mywohyn', 'velo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(20, 'Rupon', 'qevejefi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(21, 'fuwuzumuk', 'melyno@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(22, 'Fahim', 'lidovozy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(23, 'nibyjyk', 'lyki@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(24, 'ruxotesa', 'wopygyrocy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(25, 'Sohan', 'savarizif@mailinator.com', 'cd9fc4843009667b19a08d341c2741fd', NULL, 'active', 'default_profile_photo.jpg'),
(26, 'Ritu', 'fuhy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(27, 'Habibi', 'mijusuge@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(28, 'nedyzuturu', 'kasisofet@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', 'default_profile_photo.jpg'),
(29, 'Moharaj', 'wowewyny@mailinator.com', '42fd4481fef0eedc0b996b5e9f9a5e90', '+1 (117) 921-4824', 'active', 'default_profile_photo.jpg'),
(31, 'Hbibi', 'vezerod@mailinator.com', 'c152ddfdfa3aa1cc86a8f063133aa41a', '+1 (349) 137-7816', 'active', 'default_profile_photo.jpg'),
(32, 'jipujotawe', 'bygul@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (579) 962-8333', 'active', 'default_profile_photo.jpg'),
(33, 'jifykow', 'qufo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (359) 583-3506', 'active', '33.jpg'),
(34, 'Harami', 'nyjyluhivy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (422) 873-1273', 'active', 'default_profile_photo.jpg'),
(35, 'Pocha Maya', 'myci@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (576) 707-3061', 'active', '35.jpg'),
(36, 'corugaqade', 'dawesuda@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (997) 812-1815', 'active', 'default_profile_photo.jpg'),
(37, 'jegus', 'hukyre@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (955) 537-4848', 'active', '37.jpg'),
(38, 'zaxatu', 'foharesi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (152) 337-6318', 'active', 'default_profile_photo.jpg'),
(39, 'tikab', 'pipef@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (839) 581-2466', 'active', 'default_profile_photo.jpg'),
(40, 'bumaryze', 'kuky@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (464) 552-3052', 'active', 'default_profile_photo.jpg'),
(41, 'dakyryfij', 'cixalyquk@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (998) 769-6552', 'active', 'default_profile_photo.jpg'),
(42, 'gepubap', 'jycomoh@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '01609245832', 'active', 'default_profile_photo.jpg'),
(43, 'lowutaxo', 'haraci@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (943) 266-9807', 'active', 'default_profile_photo.jpg'),
(44, 'Avijit', 'coxoco@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (517) 691-2919', 'active', '44.png'),
(45, 'gynoboqyw', 'jona@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (414) 229-7873', 'active', 'default_profile_photo.jpg'),
(46, 'Harami', 'zuzipu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (105) 644-9827', 'active', '46.jpg'),
(47, 'dytaga', 'fici@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (367) 947-1497', 'active', '47.jpg'),
(48, 'navofahony', 'kyvahucuwi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (273) 987-2673', 'active', 'default_profile_photo.jpg'),
(49, 'zalegytedu', 'jyzysogu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (402) 232-5138', 'active', 'default_profile_photo.jpg'),
(50, 'jywewobaty', 'rerojyw@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (676) 979-1749', 'active', 'default_profile_photo.jpg'),
(51, 'sejihu', 'hevawe@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (811) 946-8086', 'active', 'default_profile_photo.jpg'),
(52, 'qehanoly', 'syxenyteja@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (395) 303-8792', 'active', 'default_profile_photo.jpg'),
(53, 'byqura', 'webuvycyle@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (162) 462-2372', 'active', 'default_profile_photo.jpg'),
(54, 'babimakeke', 'xalevotig@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (172) 985-4113', 'active', 'default_profile_photo.jpg'),
(55, 'tinorap', 'tafubipez@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (613) 146-5259', 'active', 'default_profile_photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) NOT NULL,
  `skill_name` varchar(200) NOT NULL,
  `skill_details` longtext NOT NULL,
  `skill_percentage` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `skill_details`, `skill_percentage`) VALUES
(1, 'React JS', 'I am Expert on JavaScript Library React.', '70'),
(2, 'HTML', 'HyperText Markup Lnaguage', '95'),
(3, 'JS', 'I am an expert on JavaScript', '85'),
(4, 'CSS', 'Cascading Style Sheet', '85');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_image`
--
ALTER TABLE `brand_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_contact`
--
ALTER TABLE `customer_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_projects`
--
ALTER TABLE `recent_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_in_users`
--
ALTER TABLE `sign_in_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brand_image`
--
ALTER TABLE `brand_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_contact`
--
ALTER TABLE `customer_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recent_projects`
--
ALTER TABLE `recent_projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sign_in_users`
--
ALTER TABLE `sign_in_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
