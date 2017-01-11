-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2017 at 04:45 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rscomer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_roster`
--

CREATE TABLE IF NOT EXISTS `class_roster` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `class_roster`
--

INSERT INTO `class_roster` (`id`, `first_name`, `last_name`, `photo`) VALUES
(1, 'In Kwon', 'Choi', 'https://instructure-uploads.s3.amazonaws.com/account_290000000098865/thumbnails/59892174/profile_thumb.jpg?AWSAccessKeyId=AKIAJFNFXH2V2O7RPCAA&Expires=1484524569&Signature=MCgExg34FDUj4eJO385bkx4Umto%3D'),
(2, 'Haley', 'Rios', 'images/haley.jpg'),
(3, 'Daniel', 'Gregorczyk', 'https://instructure-uploads.s3.amazonaws.com/account_290000000098865/thumbnails/55200985/profile_thumb.jpg?AWSAccessKeyId=AKIAJFNFXH2V2O7RPCAA&Expires=1484523319&Signature=RS54kFHumVFrqbOpF1YNxGnex7c%3D'),
(4, 'Clinton', 'Jones', 'https://instructure-uploads.s3.amazonaws.com/account_290000000098865/thumbnails/57281146/profile_thumb.jpg?AWSAccessKeyId=AKIAJFNFXH2V2O7RPCAA&Expires=1484537505&Signature=O%2BQPBMOQTu4XpCjsxAIpnIWLfOQ%3D'),
(5, 'Joshua', 'Lane', 'https://instructure-uploads.s3.amazonaws.com/account_290000000098865/thumbnails/59868891/profile_thumb.jpg?AWSAccessKeyId=AKIAJFNFXH2V2O7RPCAA&Expires=1484537505&Signature=oHWWs9zbypChflHmaBEwtcpiItk%3D'),
(6, 'Rhett', 'Miller', 'images/rhett.jpg'),
(7, 'Candace', 'Petty', 'https://instructure-uploads.s3.amazonaws.com/account_290000000098865/thumbnails/55082132/profile_thumb.jpg?AWSAccessKeyId=AKIAJFNFXH2V2O7RPCAA&Expires=1484537505&Signature=7e5jHiJMJENexwK7EuWRjvmQjFM%3D'),
(8, 'Tori', 'Roessler', 'https://instructure-uploads.s3.amazonaws.com/account_290000000098865/thumbnails/54169957/profile_thumb.jpg?AWSAccessKeyId=AKIAJFNFXH2V2O7RPCAA&Expires=1484537506&Signature=75%2BQD9duQLfGZGXulg2QT0Qyh8w%3D'),
(9, 'Thomas', 'Sewell', 'images/thomas.jpg'),
(10, 'Charlie', 'Stanfield', 'https://instructure-uploads.s3.amazonaws.com/account_290000000098865/thumbnails/57194874/profile_thumb.jpg?AWSAccessKeyId=AKIAJFNFXH2V2O7RPCAA&Expires=1484537506&Signature=3b2NLT%2FxZePAJIqVETB2kqVeCZY%3D'),
(11, 'Jaelen', 'Stewart', 'https://instructure-uploads.s3.amazonaws.com/account_290000000098865/thumbnails/54223256/profile_thumb.jpg?AWSAccessKeyId=AKIAJFNFXH2V2O7RPCAA&Expires=1484537505&Signature=aiQjv%2Bib7ZzoefHhDtEUyBTZlXA%3D'),
(12, 'Robert', 'Sunderlin', 'https://instructure-uploads.s3.amazonaws.com/account_290000000098865/thumbnails/55113470/profile_thumb.jpg?AWSAccessKeyId=AKIAJFNFXH2V2O7RPCAA&Expires=1484539326&Signature=9pOL5bP5thi2snvTNqEE2EhDDSU%3D');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
