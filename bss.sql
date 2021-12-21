-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 10, 2015 at 08:16 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `bss`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `contactus`
-- 

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `contactus`
-- 

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES 
(1, 'nasir', 'bhati', '99999999999', 'helklo', '2013-09-19 17:56:10'),
(2, '', '', '', '', '2013-09-19 18:00:16'),
(3, '', '', '', '', '2013-09-19 18:00:16'),
(4, 'jugnu kumar', 'gfhd', '4532534345', 'fdsfsfsd', '2013-09-19 18:01:50'),
(5, 'jugnu kumar', 'kumarjugnu51@gmail.com', '', 'hello', '2013-09-20 16:51:01'),
(6, 'xxx xxx', 'fdfdgdsg', '', 'fdgfdgdfg', '2013-09-20 17:02:01'),
(7, '', '', '', '', '2013-10-04 13:07:33'),
(8, '', '', '', '', '2013-10-04 13:08:13'),
(9, '', '', '', '', '2013-11-27 11:55:49'),
(10, '', '', '', '', '2013-11-27 11:57:20'),
(11, '', '', '', '', '2013-11-27 12:50:34'),
(12, '', '', '', '', '2013-11-27 12:51:42');
