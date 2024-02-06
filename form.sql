-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 02:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_details`
--

CREATE TABLE `form_details` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `conpass` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_details`
--

INSERT INTO `form_details` (`fname`, `lname`, `pass`, `conpass`, `gender`, `email`, `phone`, `address`) VALUES
('asdasd', 'asdasd', 'asdasd', 'asdasdasd', 'Male', 'asdasd@asda', 'asdas', ''),
('qwerty', 'zxcvbnm', 'asdfhdhdgh', 'asdsdasdas', 'Male', 'ivannihilkumar@gmail.com', '1234567344', 'asdasdasdasd'),
('qwerty', 'zxcvbnm', 'asdfhdhdgh', 'asdsdasdas', 'Male', 'ivannihilkumar@gmail.com', '1234567344', 'asdasdasdasd'),
('zxcvbn', 'qwertyio', '1234567890', '987654321', 'male', 'ivannihil.kumard2019@gmail.com', '0987654321', 'india');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
