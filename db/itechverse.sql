-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 02:07 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itechverse_mohit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `created_at`, `status`) VALUES
(1, 'Mohit Kumar', 'mohit.itechverse@gmail.com', 'mohit', '2022-04-20 13:40:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(80) NOT NULL,
  `blog_url` varchar(120) NOT NULL,
  `short_desc` varchar(350) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_url`, `short_desc`, `blog_content`, `blog_img`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Title 1', 'title-1', 'short desc', '   Place <em>some</em> <u>text</u> <strong>here</strong>\n                                            ', 'title-1.jpg', '2022-04-20 16:13:32', '2022-04-20 16:13:32', 1),
(2, 'Title 2', 'title-2', 'short desc', '                                                Place <em>some</em> <u>text</u> <strong>here</strong>\r\n                                            ', 'title-2.jpg', '2022-04-20 16:18:36', '2022-04-20 16:18:36', 1),
(3, 'A better Blogger experience on the web', 'a-better-blogger-experience-on-the-web', 'Since 1999, millions of people have expressed themselves on Blogger. From detailed posts about almost every apple variety you could ever imagine to a blog dedicated to the art of blogging itself, the ability to easily share, publish and express oneself on the web is at the core of Blogger’s mission. As the web constantly evolves, we want to ensure ', '                                                                                                                                                                                                                            <div dir=\"ltr\" style=\"color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 17px; line-height: 1.38; margin-bottom: 0pt; margin-top: 0pt;\"><span id=\"docs-internal-guid-83e698cd-7fff-3537-1fd4-931000cddafb\"><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\">Since 1999, millions of people have expressed themselves on Blogger. From detailed posts about almost every </span><a href=\"https://adamapples.blogspot.com/\" style=\"color: rgb(65, 132, 243);\"><span style=\"color: rgb(17, 85, 204); font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\">apple variety</span></a><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\"> you could ever imagine to a blog dedicated to </span><a href=\"https://howtoblog.krishnainfotron.com/\" style=\"color: rgb(65, 132, 243);\"><span style=\"color: rgb(17, 85, 204); font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\">the art of blogging</span></a><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\"> itself, the ability to easily share, publish and express oneself on the web is at the core of Blogger’s mission. As the web constantly evolves, we want to ensure anyone using Blogger has an easy and intuitive experience publishing their content to the web.</span><span style=\"font-family: arial; font-size: 11pt; font-style: italic; vertical-align: baseline; white-space: pre-wrap;\">&nbsp;&nbsp;</span></span></div><span id=\"docs-internal-guid-83e698cd-7fff-3537-1fd4-931000cddafb\" style=\"color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 17px;\"><br style=\"content: \" \";=\"\" display:=\"\" block;=\"\" padding:=\"\" 4px;\"=\"\"><div dir=\"ltr\" style=\"line-height: 1.38; margin-bottom: 0pt; margin-top: 0pt;\"><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\">That’s why we’ve been slowly introducing an improved web experience for Blogger. Give the fresh interface a spin by clicking “Try the New Blogger” in the left-hand navigation pane.&nbsp;</span></div><div dir=\"ltr\" style=\"line-height: 1.38; margin-bottom: 0pt; margin-top: 0pt;\"><img src=\"http://localhost/techverse/images/blogs/6H.jpg\" style=\"width: 25%;\"><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\"><br></span></div><div dir=\"ltr\" style=\"line-height: 1.38; margin-bottom: 0pt; margin-top: 0pt;\"><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\"><div dir=\"ltr\" style=\"white-space: normal; font-family: Roboto, sans-serif; font-size: 17px; line-height: 1.38; margin-bottom: 0pt; margin-top: 0pt;\"><span id=\"docs-internal-guid-83e698cd-7fff-3537-1fd4-931000cddafb\"><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\">Since 1999, millions of people have expressed themselves on Blogger. From detailed posts about almost every </span><a href=\"https://adamapples.blogspot.com/\" style=\"color: rgb(65, 132, 243);\"><span style=\"color: rgb(17, 85, 204); font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\">apple variety</span></a><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\"> you could ever imagine to a blog dedicated to </span><a href=\"https://howtoblog.krishnainfotron.com/\" style=\"color: rgb(65, 132, 243);\"><span style=\"color: rgb(17, 85, 204); font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\">the art of blogging</span></a><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\"> itself, the ability to easily share, publish and express oneself on the web is at the core of Blogger’s mission. As the web constantly evolves, we want to ensure anyone using Blogger has an easy and intuitive experience publishing their content to the web.</span><span style=\"font-family: arial; font-size: 11pt; font-style: italic; vertical-align: baseline; white-space: pre-wrap;\">&nbsp;&nbsp;</span></span></div><span id=\"docs-internal-guid-83e698cd-7fff-3537-1fd4-931000cddafb\" style=\"white-space: normal; font-family: Roboto, sans-serif; font-size: 17px;\">Hello guys, we recently upgraded to 0.8.18 version of summernote textarea<br \";=\"\" display:=\"\" block;=\"\" padding:=\"\" 4px;\"=\"\"><div dir=\"ltr\" style=\"line-height: 1.38; margin-bottom: 0pt; margin-top: 0pt;\"><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\">That’s why we’ve been slowly introducing an improved web experience for Blogger. Give the fresh interface a spin by clicking “Try the New Blogger” in the left-hand navigation pane.&nbsp;</span></div><ul><li style=\"line-height: 1.38; margin-bottom: 0pt; margin-top: 0pt;\"><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\">This is someting text</span></li></ul><blockquote style=\"line-height: 1.38; margin-bottom: 0pt; margin-top: 0pt;\" class=\"blockquote\"><span style=\"font-family: arial; font-size: 11pt; vertical-align: baseline; white-space: pre-wrap;\">“Her beauty is laced in her strength and interwoven through her flaws. She embodies perfection.”</span></blockquote></span></span></div><div dir=\"ltr\" style=\"line-height: 1.38; margin-bottom: 0pt; margin-top: 0pt;\"></div></span>                                                                                                                                                                                ', 'a-better-blogger-experience-on-the-web.jpg', '2022-04-20 17:43:27', '2022-04-21 17:34:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus_leads`
--

CREATE TABLE `contactus_leads` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus_leads`
--

INSERT INTO `contactus_leads` (`id`, `name`, `email`, `phone`, `subject`, `message`, `added_on`) VALUES
(1, 'Mohit', 'mohit@gmail.com', '7845784548', 'Testing', 'mohitmohit mphitmohintmohiontkmohitmohitmohitmohiitmohitmohiktmohitkmohitmohimtohiontmohiotmohitmohitmohitmohikmohtmohimohitmoihitmohoitoohoit', '2022-04-15 10:31:26'),
(2, 'kaushal Nishad', 'kaushalnishad212@gmail.com', '07985799619', 'sqewryuiop', 'testing', '2022-04-15 14:45:45'),
(3, 'kaushal Nishad', 'kaushalnishad212@gmail.com', '07985799619', 'dretyhtrjdfuygh', 'rtfhrdfhgf', '2022-04-15 14:56:34'),
(4, 'kaushal Nishad', 'kaushalnishad212@gmail.com', '07985799619', 'query', 'stsf', '2022-04-26 12:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `phone`, `added_on`) VALUES
(7, 'kaushal Nishad', 'kaushalnishad212@gmail.com', ' 91798579961', '2022-04-19 15:54:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus_leads`
--
ALTER TABLE `contactus_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus_leads`
--
ALTER TABLE `contactus_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
