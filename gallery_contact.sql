-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2021 at 07:17 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `message_info`
--

DROP TABLE IF EXISTS `message_info`;
CREATE TABLE IF NOT EXISTS `message_info` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`name`, `email`, `subject`, `message`) VALUES
('Nathan Hacault', 'nathan.hacault@ontariotechu.net', 'Opening hours', 'Hi, I was wondering what time you guys open at?'),
('Gitae Yang', 'gitae.yang@ontariotechu.net', 'Buying art', 'Do you guys have any paintings for sale currently?'),
('Stanley Watemi', 'stanley.watemi@ontariotechu.net', 'Great exhibits', 'I visited today the exhibits were wonderful!'),
('Mary Williams', 'mary@gmail.com', 'Nice art', 'Lovely art here at this gallery'),
('Ann Murphey', 'ann123@hotmail.ca', 'Terrible service', 'The line was long and it was not a fun time'),
('John Green', 'green333@gmail.com', 'Awesome gallery', 'Love this place!');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_emails`
--

DROP TABLE IF EXISTS `newsletter_emails`;
CREATE TABLE IF NOT EXISTS `newsletter_emails` (
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter_emails`
--

INSERT INTO `newsletter_emails` (`email`) VALUES
('nathan.hacault@ontariotechu.net'),
('gitae.yang@ontariotechu.net'),
('stanley.watemi@ontariotechu.net'),
('nathan.hacault@ontariotechu.net'),
('john.gillis@hotmail.com'),
('mary@gmail.com'),
('sam.thornley@gmail.com'),
('ann123@hotmail.ca');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
