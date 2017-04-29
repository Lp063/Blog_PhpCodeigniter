-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 07:35 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeigniterone`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `createdat`) VALUES
(1, 'business', '2017-02-26 19:48:29'),
(2, 'technology', '2017-02-26 19:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `slug`, `title`, `body`, `post_image`, `created_at`) VALUES
(1, 1, 'Honey', 'Honey', 'BBBBBBBBBBorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae rutrum metus. Maecenas elit quam, consectetur non aliquam in, vestibulum eu sem. Etiam in tristique lectus, sit amet faucibus mi. Morbi ullamcorper efficitur mauris. Aliquam varius, nunc vitae posuere consectetur, urna dolor ornare justo, nec pharetra eros massa ut dui. Etiam sed odio enim. Vestibulum eget lacinia lacus. Sed bibendum eros dui, vitae volutpat sapien aliquam et. Nulla eget quam sem. Praesent quam leo, varius in lorem eget, condimentum hendrerit odio. Vivamus eleifend sapien ut arcu gravida, vel consequat lectus porttitor. Suspendisse potenti. In dui arcu, gravida vel ipsum in, aliquam semper mi. Quisque purus magna, commodo ac felis ac, dapibus convallis nunc.', '', '2016-11-09 20:19:02'),
(2, 1, 'lOREM-iPSUM', 'lOREM iPSUM', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.  The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompani', '', '2017-01-24 17:29:08'),
(4, 2, 'THE-POST', 'THE POST', '<p>THE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POST</p>\r\n\r\n<p>THE POSTTHE POSTTHE POSTTHE POSTTHE POS<strong>TTHE POSTTHE POSTTHE POSTTHE PO</strong>STTHE POSTTHE POSTTHE POSTTHE POSTTHE POST</p>\r\n\r\n<p>THE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POSTTHE POST</p>\r\n', '', '2017-02-19 09:26:56'),
(6, 1, 'Techno-Post', 'Techno Post', '<p>Techno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno PostTechno Post</p>\r\n', '', '2017-03-04 14:55:12'),
(7, 1, '752537', 'POST Image', '<p>POST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST ImagePOST Image</p>\r\n', 'Koala.jpg', '2017-03-04 17:36:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
