-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 09:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimonyyy`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `password`) VALUES
(1, 'priya', 'qwerty'),
(2, 'anu', '123456'),
(3, 'maha', '123');

-- --------------------------------------------------------

--
-- Table structure for table `otpverify`
--

CREATE TABLE `otpverify` (
  `id` int(100) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otpverify`
--

INSERT INTO `otpverify` (`id`, `otp`) VALUES
(1, 61656);

-- --------------------------------------------------------

--
-- Table structure for table `profile_requests`
--

CREATE TABLE `profile_requests` (
  `id` int(11) NOT NULL,
  `req_from` varchar(255) NOT NULL,
  `req_to` varchar(255) NOT NULL,
  `status` enum('pending','accepted','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `profile`, `name`, `gender`, `mobile`, `dob`, `religion`, `mother`, `email`, `password`) VALUES
(0, 'Myself', 'gggggg', '2', 2147483647, '', '', '', '', ''),
(0, 'Myself', 'gggggg', '2', 2147483647, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(100) NOT NULL,
  `req_from` varchar(100) NOT NULL,
  `req_to` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `req_from`, `req_to`, `status`) VALUES
(1, 'ashi@gmail.com', '', ''),
(2, 'nisi@gmail.com', '31', ''),
(3, 'ashi@gmail.com', 'aaa@gmail.com', ''),
(4, 'maha@gmail.com', 'ddd@gmail.com', ''),
(5, 'pri@gmail.com', 'nix@gmail.com', 'accept'),
(6, 'saju@gmail.com', 'a1@gmail.com', ''),
(7, 'saju@gmail.com', 'ttt@gmail.com', 'accept'),
(8, 'nix@gmail.com', 'pri@gmail.com', 'accept'),
(9, 'mijo@gmail.com', 'c1@gmail.com', 'reject'),
(12, 'saju@gmail.com', 'a1@gmail.com', ''),
(15, 'aaa@gmail.com', 'nisi@gmail.com', ''),
(16, 'c1@gmail.com', 'mijo@gmail.com', 'accept'),
(17, 'ttt@gmail.com', 'saju@gmail.com', 'accept'),
(18, 'pri@gmail.com', 'mmm@gmail.com', ''),
(19, 'a2@gmail.com', 'jenshi@gmail.com', 'accept'),
(20, 'jenshi@gmail.com', 'a2@gmail.com', 'reject'),
(21, 'aisha@mail.com', 'ijaas@mail.com', 'accept'),
(22, 'mgsh@gmail.com', 'jeni@gmail.com', 'NULL'),
(23, 'ijaas@mail.com', 'aisha@mail.com', 'accept'),
(24, 'riyaz@mail.com', 'jeni@gmail.com', 'NULL'),
(25, 'riyaz@mail.com', 'maha@gmail.com', 'NULL'),
(26, 'alham@gmail', 'd1@gmail.com', 'NULL'),
(27, 'alham@gmail', 'kow@gmail.com', 'accept'),
(28, 'lan@gmail', 'maha@gmail.com', 'NULL'),
(29, 'lan@gmail', 'jeni@gmail.com', 'NULL'),
(30, 'lan@gmail', 'suji@gmail.com', 'NULL'),
(31, 'kow@gmail.com', 'cris@gmail', 'reject'),
(32, 'kow@gmail.com', 'alham@gmail', 'accept'),
(33, 'cris@gmail', 'kow@gmail.com', 'accept'),
(34, 'kayal@gamil.com', 'lois@gmail', 'NULL'),
(35, 'kali@gmali', 'kayal@gamil.com', 'NULL'),
(36, 'kali@gmali', 'aksya@gmail.com', 'NULL'),
(37, 'jin@gmail.com', 'kow@gmail.com', 'NULL'),
(38, 'cris@gmail', 'd1@gmail.com', 'NULL'),
(39, 'arul@gmail', 'lavan@gmail', 'NULL'),
(40, 'arul@gmail', 'bbb@gmail', 'NULL'),
(41, 'aji@gmail', 'err@gmail', 'NULL'),
(42, 'aji@gmail', 'arul@gmail', 'NULL'),
(43, 'leo@gmail', 'aksya@gmail.com', 'NULL'),
(44, 'gil@gmail', 'pri@gmail.com', 'NULL'),
(45, 'cril@gmail', 'b1@gmail.com', 'NULL'),
(46, 'lavan@gmail', 'arams@gmail.com', 'reject'),
(47, 'kow@gmail.com', 'gsha@gmail', 'accept'),
(48, 'd1@gmail.com', 'jin@gmail.com', 'NULL'),
(49, 'baladhaneesh@gmail.com', 'er@gmail', 'NULL'),
(50, 'gril@gmail.com', 'ijas@gmail.com', 'NULL'),
(51, 'ijas@gmail.com', 'gril@gmail.com', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id` int(11) NOT NULL,
  `select` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `religion` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `subcaste` varchar(100) NOT NULL,
  `gothram` varchar(100) NOT NULL,
  `suddha` varchar(100) NOT NULL,
  `marital` varchar(100) NOT NULL,
  `childrens` varchar(100) NOT NULL,
  `living` varchar(100) NOT NULL,
  `famstatus` varchar(100) NOT NULL,
  `famtype` varchar(100) NOT NULL,
  `famvalue` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `highestedu` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `employed` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `annual` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `comments` varchar(300) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `otp` int(10) NOT NULL,
  `randmcd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `select`, `name`, `gender`, `mobile`, `dob`, `religion`, `mother`, `email`, `password`, `caste`, `subcaste`, `gothram`, `suddha`, `marital`, `childrens`, `living`, `famstatus`, `famtype`, `famvalue`, `disability`, `highestedu`, `education`, `employed`, `occupation`, `annual`, `amount`, `location`, `state`, `comments`, `picture`, `otp`, `randmcd`) VALUES
(97, 'Sister', 'akshayan@gmail.com', 'Male', '9677770893', '2023-10-11', 'Christian', 'Tamil', 'akshayan@gmail.com', '12345', 'MBC', 'Islam', 'Harinama', 'Dont-know', 'Widowed', '3', 'Children living with me', 'Upper Middleclass', 'Nuclear', 'Traditional', 'None', 'B.Sc', 'Private', 'Media and News', 'Engineer', 'Rupees', '0-1 lakhs', 'India', 'Maharastra', 'im a very decent guy', 'b4.jpg', 30546, 'xpg3y1jvz'),
(98, 'Sister', 'rinurai', 'Male', '9677770893', '2023-10-20', 'Hindu', 'Tamil', 'rinuraii@gmail.com', '12345', 'MBC', 'Hindu', 'Harinama', 'Dont-know', 'Never Married', '', '', 'Middleclass', 'Joint', 'Orthodox', 'None', 'BCA', 'Others', 'Media and News', 'Engineer', 'Dollar', '0-1 lakhs', 'China', 'Andhra', 'qwegtsdgwsgr', 'b9.jpg', 453933, 'hqtv3m0i6'),
(99, 'Myself', 'dinesh', 'Male', '9677770893', '2023-10-01', 'Hindu', 'Hindi', 'dinesh1999@gmail.com', '12345', 'BC', 'Hindu', 'Harinama', 'Dont-know', 'Never Married', '', '', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.Tech', 'Others', 'Self Employed', 'Doctor', 'Dollar', '1-2 lakhs', 'India', 'Tamil Nadu', 'dgfwdwfs', 'vadivelu.jpg', 378264, 'sfaxmrh0e'),
(100, 'Myself', 'bala', 'Male', '9677770893', '2023-10-04', 'Hindu', 'English', 'baladhaneesh@gmail.com', '12345', 'MBC', 'Hindu', 'Gautam', 'Dont-know', 'Never Married', '', '', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.Tech', 'Others', 'Media and News', 'Doctor', 'Rupees', '1-2 lakhs', 'India', 'Maharastra', 'stgdfgrttrf', 'b2.jpg', 87171, 'dqjv0f1y9'),
(101, 'Daughter', 'wewe', 'Male', '6556', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '7plrm2yj4'),
(102, 'Daughter', 'wewe', 'Male', '9487381398', '2023-10-07', 'Christian', 'Hindi', 'ef@gmail', '454', 'MBC', 'Christian', 'Garg', 'Yes', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Traditional', 'None', 'B.Tech', 'Private', 'Media and News', 'Doctor', 'Rupees', '1-2 lakhs', 'China', 'Karnataka', 'ertete', 'b3.jpg', 179303, 'iz12u475s'),
(103, 'Sister', 'dfdf', 'Female', '897978987', '2023-09-29', 'Islam', 'Hindi', 'yr@gmail', 'yr', 'MBC', 'Hindu', 'Kaundinya', 'No', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Orthodox', 'Physically challenged', 'B.Tech', 'Government', 'Entertainment', 'Businessman', 'Dollar', '4-5 lakhs', 'USA', 'Tamil Nadu', 'tytytyt', 'b9.jpg', 0, 'ark91pv68'),
(104, 'Brother', 'rter', 'Female', '9677770893', '2023-10-12', 'Islam', 'Hindi', 'er@gmail', '12', 'MBC', 'Hindu', 'Harinama', 'Yes', 'Divorced', '1', 'Children living with me', 'Upper Middleclass', 'Nuclear', 'Orthodox', 'Physically challenged', 'B.Tech', 'Government', 'Entertainment', 'Doctor', 'Rupees', '2-3 lakhs', 'UK', 'Maharastra', '54r544', 'fml6.jpg', 29070, 'dixm21shr'),
(105, 'Friend', 'rtt', 'Female', '45544', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'uo9g65tq3'),
(106, 'Brother', 'rtert', 'Male', '565656', '2023-09-26', 'Christian', 'English', 'ret@gmail.com', 'wew', 'MBC', 'Hindu', 'Garg', 'Yes', 'Widowed', 'None', 'Children living with me', 'Upper Middleclass', 'Nuclear', 'Traditional', 'Physically challenged', 'B.Tech', 'Private', 'Media and News', 'Businessman', 'Rupees', '0-1 lakhs', 'India', 'Andhra', 'efrere', 'b8.jpg', 0, 'ubgw0kt5v'),
(107, 'Son', 'gffg', 'Female', '67565', '2023-09-27', 'Islam', 'English', 'rte@gmail', 'rte', 'OC', 'Islam', 'Haritasya', 'Yes', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Traditional', 'None', 'B.Sc', 'Private', 'Media and News', 'Engineer', 'Dollar', '1-2 lakhs', 'India', 'Karnataka', 'tretr', 'fml7.jpg', 170332, 'zdj2au4ie'),
(108, 'Friend', 'ijas', 'Male', '67567676767', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'jwz3r4cyv'),
(109, 'Friend', 'ijas', 'Male', '5656565', '2023-10-02', 'Hindu', 'Tamil', 'ijas@gmail.com', 'ijij', 'BC', 'Islam', 'Bhrigu', 'Yes', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Traditional', 'None', 'B.Sc', 'Private', 'Self Employed', 'Engineer', 'Dollar', '2-3 lakhs', 'India', 'Karnataka', 'ertrtertr', 'b3.jpg', 299246, 'a59jms8p6'),
(110, 'Friend', 'gril', 'Female', '34556566', '2023-10-08', 'Islam', 'Tamil', 'gril@gmail.com', 'gril', 'BC', 'Islam', 'Bharadwaj', 'Yes', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Traditional', 'None', 'B.Sc', 'Private', 'Media and News', 'Engineer', 'Dollar', '0-1 lakhs', 'India', 'Andhra', 'ewrerrere', 'g2.jpg', 591610, 'kq2vb4jic'),
(111, 'Son', 'rte', 'Male', '67675645', '2023-10-12', 'Christian', 'English', 'gtr@gmail', 'gtr', 'MBC', 'Christian', 'Bhargava', 'No', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Traditional', 'None', 'B.Tech', 'Government', 'Media and News', 'Doctor', 'Dollar', '0-1 lakhs', 'UK', 'Andhra', 'rtrtrtr', 'b9.jpg', 680234, 'g1kza8xwv'),
(112, 'Myself', 'erer', 'Female', '655554656', '2023-09-28', 'Christian', 'Tamil', 'ed@gmail', 'ed', 'BC', 'Christian', 'Angirasa', 'No', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Traditional', 'Physically challenged', 'B.Tech', 'Private', 'Media and News', 'Businessman', 'Dollar', '1-2 lakhs', 'UK', 'Kerala', 'ertreterer', 'b2.jpg', 359945, '9h5wmqb1s'),
(113, 'Son', 'dines', 'Male', '7567676767', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 's07w3lp2g'),
(114, 'Son', 'dines', 'Male', '7567676767', '2023-10-04', 'Christian', 'Hindi', 'din@gmail', 'din', 'MBC', 'Hindu', 'Chandratre', 'Yes', 'Never Married', '', '', 'Middleclass', 'Joint', 'Traditional', 'None', 'B.Sc', 'Others', 'Media and News', 'Doctor', 'Dollar', '1-2 lakhs', 'India', 'Karnataka', 'tyuyuy', 'b13.jpg', 1985, 'pafmd4s7j'),
(115, 'Son', 'xfxdzfg', 'Male', '9677770893', '2023-10-04', 'Hindu', 'Hindi', 'fin@gmail', '754', 'OC', 'Hindu', 'Harinama', 'Dont-know', 'Widowed', '2', 'Children living with me', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.Sc', 'Government', 'Media and News', 'Doctor', 'Dollar', '2-3 lakhs', 'UK', 'Kerala', 'ewrr', 'b3.jpg', 161917, 'g9ikzq8xe'),
(116, 'Relatives', 'grt', 'Male', '9898238883', '2023-09-29', 'Christian', 'Hindi', 'fin23@gmail', '23', 'OC', 'Islam', 'Haritasya', 'No', 'Widowed', 'None', 'Children living with me', 'Middleclass', 'Nuclear', 'Traditional', 'Physically challenged', 'B.Tech', 'Government', 'Self Employed', 'Doctor', 'Dollar', '1-2 lakhs', 'India', 'Andhra', 'rtrtretr', 'NULL', 0, 'clq0ue1h2'),
(117, 'Friend', 'Suraaa', 'Male', '8878567567', '2023-10-01', 'Christian', 'English', 'a@gmail.com', 'aaa', 'OC', 'Hindu', 'Haritasya', 'Dont-know', 'Never Married', '', '', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.Sc', 'Government', 'Media and News', 'Doctor', 'Dollar', '1-2 lakhs', 'China', 'Maharastra', 'Heloooooooooooooooo', 'NULL', 0, '5jdyh73pr'),
(118, 'Son', 'swdw', 'Male', '6380917277', '2023-10-01', 'Hindu', 'English', 'alan@gmail.com', 'alan', 'SC', 'Hindu', 'Bhargava', 'No', 'Never Married', '', '', 'Middleclass', 'Nuclear', 'Orthodox', 'Physically challenged', 'B.Tech', 'Private', 'Media and News', 'Engineer', 'Rupees', '0-1 lakhs', 'USA', 'Kerala', 'annnneeeeeeeeeeeee', 'NULL', 855052, 'wa50jipko'),
(119, 'Son', 'de', 'Male', '1234567891', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'tzdsq82kj'),
(120, 'Sister', 'er', 'Male', '5645465612', '2023-09-26', 'Christian', 'Hindi', 'suru2@gmail.com', '3433443', 'SC', 'Hindu', 'Garg', 'Yes', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Orthodox', 'Physically challenged', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'x6c2m0aks'),
(121, 'Brother', 'wsedw', 'Male', '7667556455', '2023-10-06', 'Hindu', 'Tamil', 'sura@gmail', 'tret433', 'SC', 'Islam', 'Garg', 'No', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Moderate', 'None', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '37t6z2cxw'),
(122, 'Son', 'rtrt', 'Male', '1232323444', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'jfuwo8iqk'),
(123, 'Son', 'rtrt', 'Male', '1234567890', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'w5dxjcups'),
(124, 'Brother', 'wewe', 'Male', '4535434233', '2023-10-10', 'Christian', 'Hindi', 'wqer@gmail.com', '2312122', 'OC', 'Christian', 'Gautam', 'No', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Traditional', 'None', 'B.Sc', 'Private', 'Media and News', 'Doctor', 'Dollar', '0-1 lakhs', 'UK', 'Tamil Nadu', '3r4343', 'b9.jpg', 0, '8uj0gc21e'),
(125, 'Myself', 'dfd', 'Male', '4535245221', '2023-10-04', 'Christian', 'Tamil', 'raj@gmail', '4543431', 'MBC', 'Hindu', 'Gautam', 'Yes', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Traditional', 'None', 'BCA', 'Private', 'Entertainment', 'Doctor', 'Dollar', '1-2 lakhs', 'UK', 'Kerala', '5465656', 'NULL', 0, 'w7dr3kfcx'),
(126, 'Daughter', 'rtgf', 'Female', '7654322311', '2023-10-01', 'Hindu', 'Telugu', '12@gmail', '122112', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '9wxseuk5t'),
(127, 'Sister', 'rttre', 'Female', '6789012345', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'jdth7p2lf'),
(128, 'Daughter', 'err', 'Female', '6775424532', '2023-10-10', 'Christian', 'Tamil', 'k2@gmail.com', '3433444', 'MBC', 'Christian', 'Garg', 'Yes', 'Never Married', '', '', 'Middleclass', 'Nuclear', 'Orthodox', 'Physically challenged', 'B.E', 'Private', 'Media and News', 'Doctor', 'Dollar', '1-2 lakhs', 'India', 'Andhra', 'e4r4', 'b3.jpg', 0, 'x84zelmi5'),
(129, 'Brother', 'yogi', 'Male', '9878778767', '2023-10-06', 'Christian', 'Tamil', 'jh@gmail', 'jhujiii', 'SC', 'Christian', 'Garg', 'Yes', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Traditional', 'None', 'BCA', 'Government', 'Self Employed', 'Doctor', 'Dollar', '2-3 lakhs', 'USA', 'Maharastra', 'tyutryt', 'NULL', 0, '51q8o7vlk'),
(130, 'Daughter', 'rere', 'Female', '6767677556', '0005-06-05', 'Christian', 'English', 'de@gmail', '65344223', 'BC', 'Christian', 'Haritasya', 'No', 'Never Married', '', '', 'Upper Middleclass', 'Joint', 'Traditional', 'None', 'B.Tech', 'Private', 'Entertainment', 'Doctor', 'Euro', '2-3 lakhs', 'USA', 'Maharastra', 'erter', 'NULL', 0, 'r3s4jzmit'),
(131, 'Daughter', 'err', 'Female', '8765665654', '0077-06-07', 'Christian', 'Tamil', 'y5y@gmail', 'erffdfd', 'OC', 'Islam', 'Brihadbala', 'No', 'Never Married', '', '', 'Middleclass', 'Joint', 'Traditional', 'Physically challenged', 'BCA', 'Private', 'Media and News', 'Doctor', 'Dollar', '0-1 lakhs', 'UK', 'Karnataka', 'tytytty', 'NULL', 0, '9j8vr5c6z'),
(132, 'Daughter', 'gh', 'Female', '7878754456', '2023-10-05', 'Christian', 'Tamil', 'gh@gmail.com', '123321', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'cwhxprs3o'),
(133, 'Matrimony Profiles For', 'yt', 'Male', '7877878775', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '7tkgivoqw'),
(134, 'Matrimony Profiles For', 'yt', 'Male', '7877878775', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '2xk0b4eq9'),
(135, 'Daughter', 'rtgr', 'Female', '7883963232', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'vamfscw56'),
(136, 'Daughter', 'rtgr', 'Female', '7883963232', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'kla3ue0vr'),
(137, 'Daughter', 'rtrt', 'Female', '7883963232', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 'ystqp9go7'),
(138, 'Sister', 'tytr', 'Female', '7883963232', '2023-10-21', 'Christian', 'English', 'ttr@gamil', 'uiwrtr', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '0jhc5pzsw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile_requests`
--
ALTER TABLE `profile_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile_requests`
--
ALTER TABLE `profile_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
