-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2020 at 04:23 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(20) NOT NULL,
  `adim_password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_username`, `adim_password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `Question_id` int(11) NOT NULL AUTO_INCREMENT,
  `Question` text NOT NULL,
  `Option1` text NOT NULL,
  `Option2` text NOT NULL,
  `Option3` text NOT NULL,
  `Option4` text NOT NULL,
  `Right_Option` text NOT NULL,
  PRIMARY KEY (`Question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Question_id`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Right_Option`) VALUES
(2, 'Which of the functions is used to sort an array in descending order in php?', 'asort()', 'sort()', 'rsort()', 'dsort()', 'Option3'),
(1, 'What does SQL stands for?', 'Standard Query Language', 'Structured Query Language ', 'Simple Query Language', 'Symbolic Query Language', 'Option2'),
(3, 'PHP is an example of which scripting language?', 'Server-side', 'Client-Side', 'Browser-side', 'In-side', 'Option1'),
(7, 'The first character of an identifier in C language can contain?', 'only alphabets or underscore', 'only numeric character', 'only special characters', 'all of the above', 'Option1'),
(8, 'Which of the following is not a valid keyword in C language?', 'case', 'register', 'native', 'typedef', 'Option3'),
(9, 'Which key contains only one NULL value?', 'PRIMARY', 'FOREIGN', 'CANDIDATE', 'UNIQUE', 'Option4'),
(10, 'Which one of the following is a wildcast operator in SQL?', 'OR', 'LIKE', 'WHERE', 'AS', 'Option2'),
(11, 'Which of the following function in PHP is used to redirect a page?', 'redirect()', 'reflect()', 'header()', 'None of the Above', 'Option3'),
(12, 'Which operator in PHP is used to check if two values are equal and of same data type?', '!=', '=', '==', '===', 'Option4');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

DROP TABLE IF EXISTS `student_login`;
CREATE TABLE IF NOT EXISTS `student_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_username` varchar(100) NOT NULL,
  `student_password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `student_username`, `student_password`) VALUES
(1, 'user', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `testlist`
--

DROP TABLE IF EXISTS `testlist`;
CREATE TABLE IF NOT EXISTS `testlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Create_test` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testlist`
--

INSERT INTO `testlist` (`id`, `Create_test`) VALUES
(1, 'CSE test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(225) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `email`, `contact_no`, `address`) VALUES
(1, 'Abhishek Gupta', 22, 'abhigupta06121997@gmail.com', '8449801860', 'K-2/2085 Shastri Nagar Meerut'),
(2, 'Kapil34', 21, 'ram123@gmail.com', '8423507712', 'Nai sarak chowk'),
(3, 'Shyam', 19, 'shyamaji78@gmail.com', '9235018821', 'Westt end road meerut cantt area'),
(6, 'Manish Chauhan', 21, 'mani@gmail.com', '9128645090', 'Ghaziabad'),
(10, 'naresh', 18, 'nareshkumar40@gmail.com', '7728989448', 'Surajkund meerutiiiiii'),
(11, 'preeti', 26, 'preeti@gmail.com', '77289894485', 'noida');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
