-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql307.ezyro.com
-- Generation Time: Jun 20, 2018 at 03:10 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ezyro_22067432_resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` varchar(50) NOT NULL,
  `thumbnail` longblob NOT NULL,
  `caption` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offer_id`, `offer_name`, `thumbnail`, `caption`, `description`, `rate`) VALUES
(1, 'Wedding at Orca Beach Resort.', 0x3c3f7068700d0a0d0a2f2f72657175697265205f5f6469725f5f202e272e2f76656e646f722f6175746f6c6f61642e706870273b0d0a726571756972652027636f72652f696e69742e706870273b0d0a0d0a24757365723d206e6577205573657228293b0d0a0d0a24757365722d3e6c6f676f757428293b0d0a0d0a52656469726563743a3a746f28272e2f696e6465782e70687027293b, 'Wedding Package', 'Cobalt blue seas, stunning white sands and lush greenery: the Orca Beach Resort offers one of the worldâ€™s most picturesque settings for a wedding. ', '8000'),
(2, 'Your honeymoon day. As romantic as it gets.', 0x3c3f7068700d0a0d0a2f2f72657175697265205f5f6469725f5f202e272e2f76656e646f722f6175746f6c6f61642e706870273b0d0a726571756972652027636f72652f696e69742e706870273b0d0a0d0a24757365723d206e6577205573657228293b0d0a0d0a24757365722d3e6c6f676f757428293b0d0a0d0a52656469726563743a3a746f28272e2f696e6465782e70687027293b, 'Honeymoon Package', 'Make your honeymoon day as Hollywood as possible. Tailor made couple time to you whether you are newly married or you are planning on celebrating your anniversary.', '5000'),
(3, 'Birthday Party A truly memorable celebration.', 0x3c3f7068700d0a0d0a2f2f72657175697265205f5f6469725f5f202e272e2f76656e646f722f6175746f6c6f61642e706870273b0d0a726571756972652027636f72652f696e69742e706870273b0d0a0d0a24757365723d206e6577205573657228293b0d0a0d0a24757365722d3e6c6f676f757428293b0d0a0d0a52656469726563743a3a746f28272e2f696e6465782e70687027293b, 'Birthday Package', 'Just about any celebration, blue peaceful beach, multi-cuisine restaurant, party decorations, boozing, a mascot for kids etc. all services are at your fingertip.', '2600');

-- --------------------------------------------------------

--
-- Table structure for table `offer_request`
--

CREATE TABLE IF NOT EXISTS `offer_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `request_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  `note` varchar(4000) DEFAULT NULL,
  `guests` int(11) DEFAULT NULL,
  `rate` decimal(10,0) NOT NULL,
  `approval_status` int(11) DEFAULT NULL,
  `approval_timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `requestTimestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `adults` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `request_type` enum('room','special_request') NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `approval_status` int(11) DEFAULT NULL,
  `approval_timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `room_id`, `user_id`, `requestTimestamp`, `check_in`, `check_out`, `adults`, `children`, `request_type`, `rate`, `approval_status`, `approval_timestamp`) VALUES
(42, 3, 46, '2017-11-09 08:07:12.887969', '2017-11-10', '2017-12-04', 2, 0, 'room', '600', NULL, '0000-00-00 00:00:00'),
(43, 2, 50, '2017-11-14 20:04:06.040576', '2017-11-02', '2017-11-04', 2, 0, 'room', '260', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(50) NOT NULL,
  `thumbnail` longblob NOT NULL,
  `caption` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `total_room` int(11) NOT NULL,
  `occupancy` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `view` varchar(500) DEFAULT NULL,
  `rate` decimal(10,0) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `thumbnail`, `caption`, `description`, `total_room`, `occupancy`, `size`, `view`, `rate`) VALUES
(1, 'Cabana - Standard. ', 0x3c3f7068700d0a0d0a2f2f72657175697265205f5f6469725f5f202e272e2f76656e646f722f6175746f6c6f61642e706870273b0d0a726571756972652027636f72652f696e69742e706870273b0d0a0d0a24757365723d206e6577205573657228293b0d0a0d0a24757365722d3e6c6f676f757428293b0d0a0d0a52656469726563743a3a746f28272e2f696e6465782e70687027293b, 'For those who love minimalistic style!', 'The standard Cabana offers a spacious room with a double bed, separate bath and own terrace (about 40mÂ²). If required, an extra bed can be booked. The maximum occupancy of the apartment is 3 people (adults or children). Location is on the first floor and only 35 m from the beach. Already from the terrace you can see the blue of the Indian Ocean.', 3, 2, '20sqft', NULL, '120'),
(2, 'Cabana - Deluxe. ', 0x3c3f7068700d0a0d0a2f2f72657175697265205f5f6469725f5f202e272e2f76656e646f722f6175746f6c6f61642e706870273b0d0a726571756972652027636f72652f696e69742e706870273b0d0a0d0a24757365723d206e6577205573657228293b0d0a0d0a24757365722d3e6c6f676f757428293b0d0a0d0a52656469726563743a3a746f28272e2f696e6465782e70687027293b, 'Luxury in Everything!', 'Our Deluxe Cabana is a bungalow directly on the beach. It has a big room with a double bed, separate bath and its own terrace (about 55mÂ²). The maximum occupancy for the Cabana is 4 people (adults or children). From you terrace you have unrestricted views over the Indian Ocean.\r\n\r\nThe Orca Restaurant is just a few steps away. Here you''ll get beverages, snacks, lunch and dinner from 8:00 to 22:00.', 20, 4, '30sqft', NULL, '260');

-- --------------------------------------------------------

--
-- Table structure for table `room_allocation`
--

CREATE TABLE IF NOT EXISTS `room_allocation` (
  `room_no` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `door_no` varchar(6) DEFAULT NULL,
  `room_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`room_no`,`room_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `room_allocation`
--

INSERT INTO `room_allocation` (`room_no`, `room_id`, `door_no`, `room_status`) VALUES
(21, 1, 'Std 4', 3),
(20, 1, 'Std 3', 1),
(19, 1, 'Std 2', 1),
(18, 1, 'Std 1', 1),
(22, 1, 'Std 5', 1),
(23, 1, 'Std 6', 1),
(24, 1, 'Std 7', 1),
(25, 1, 'Std 8', 1),
(26, 1, 'Std 9', 1),
(27, 1, 'Std 10', 1),
(28, 2, 'Dlx 1', 1),
(29, 2, 'Dlx 2', 1),
(30, 2, 'Dlx 3', 1),
(31, 2, 'Dlx 4', 1),
(32, 2, 'Dlx 5', 1),
(33, 2, 'Dlx 6', 1),
(34, 2, 'Dlx 7', 1),
(35, 2, 'Dlx 8', 1),
(36, 2, 'Dlx 9', 1),
(37, 2, 'Dlx 10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_reservation`
--

CREATE TABLE IF NOT EXISTS `room_reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `room_no` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `requestTimestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `adults` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `rate` decimal(10,0) NOT NULL,
  `check_in_actual` date DEFAULT NULL,
  `check_out_actual` date DEFAULT NULL,
  `adults_actual` int(11) DEFAULT NULL,
  `children_actual` int(11) DEFAULT NULL,
  `breakfast_included` tinyint(1) NOT NULL,
  `total_amount` decimal(10,0) NOT NULL DEFAULT '0',
  `deposit_amount` decimal(10,0) NOT NULL DEFAULT '0',
  `additional_amount` decimal(10,0) NOT NULL,
  `balance_amount` decimal(10,0) NOT NULL DEFAULT '0',
  `check_out_datetime` datetime NOT NULL,
  `card_type` enum('visa','american','master') NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `cvv` int(11) NOT NULL,
  `holders_name` varchar(200) NOT NULL,
  `card_expiry_month` int(11) NOT NULL,
  `card_expiry_year` int(11) NOT NULL,
  `cancelled` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `room_reservation`
--

INSERT INTO `room_reservation` (`reservation_id`, `room_id`, `room_no`, `user_id`, `requestTimestamp`, `check_in`, `check_out`, `adults`, `children`, `rate`, `check_in_actual`, `check_out_actual`, `adults_actual`, `children_actual`, `breakfast_included`, `total_amount`, `deposit_amount`, `additional_amount`, `balance_amount`, `check_out_datetime`, `card_type`, `card_no`, `cvv`, `holders_name`, `card_expiry_month`, `card_expiry_year`, `cancelled`) VALUES
(41, 1, 21, 92, '2018-06-20 19:04:33.768329', '2018-06-08', '2018-06-09', 1, 0, '120', '2018-06-21', '2018-06-22', 3, 1, 0, '240', '144', '15', '111', '2018-06-21 00:26:17', 'visa', '4324234234234234', 0, '324324234', 1, 2017, NULL),
(40, 2, NULL, 92, '2018-06-20 13:34:41.165230', '2018-06-15', '2018-06-16', 2, 0, '260', NULL, NULL, 2, 0, 0, '520', '312', '0', '208', '0000-00-00 00:00:00', 'visa', '4234234234234444', 0, 'Peter Paker', 1, 2017, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salt` char(32) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address_line_one` varchar(100) NOT NULL,
  `address_line_two` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact_no` varchar(16) NOT NULL,
  `role` int(11) NOT NULL,
  `avatar_image` longblob,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email_id`, `password`, `salt`, `firstname`, `lastname`, `address_line_one`, `address_line_two`, `city`, `country`, `contact_no`, `role`, `avatar_image`) VALUES
(59, 'admin@admin.com', 'fd5abe235a670460f0cc889cee392e14c202ad993a340a6c53c80fd93e665f26', '˜M:ê¬ú|æ†ÇMèä~†Ã­Öe FåÊ<\Zl', 'Administrator', 'Boss', '', '', '', 'USA', '009234534653456', 1, NULL),
(93, 'effersonjack@gmail.com', '64d93aa168e2b61e60952430199882aea3ba0fcc4626d24e843b4be1836a82b0', 'iÇ;’H²¸×ÕAAéJÝ—ÒaŠÊ\Zãl£yÏÿÇ', 'Efferson', 'Jack', '', '', 'LA', 'USA', '00128477348374', 2, NULL),
(92, 'robert@hotmail.com', '6eaaa0d406a245ffc9406d2f358904a0f7809f66a004a8057b9484183f65c2b9', '(¾u†õ_°,€„ôÀÅp~0-™T]y©”ÙMtŽ‘I', 'Robert', 'Downey Jr.', '', '', '', 'CA, USA', '001257956766897', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE IF NOT EXISTS `user_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hash` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_session`
--

INSERT INTO `user_session` (`id`, `user_id`, `hash`) VALUES
(4, 47, '77016a781331b21da80d95225f231781'),
(5, 58, '482946f5b2fb2bdc3de2350f0a16643f'),
(13, 93, '4f7d27e828f005b8c1d916cf2e06727d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
