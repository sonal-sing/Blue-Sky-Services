-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2020 at 02:34 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin', 'admin@bsc.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ass`
--

CREATE TABLE `ass` (
  `req_id` int(50) NOT NULL,
  `r_info` text COLLATE utf8_bin NOT NULL,
  `r_desc` text COLLATE utf8_bin NOT NULL,
  `r_name` text COLLATE utf8_bin NOT NULL,
  `r_add1` text COLLATE utf8_bin NOT NULL,
  `r_add2` text COLLATE utf8_bin NOT NULL,
  `r_city` text COLLATE utf8_bin NOT NULL,
  `r_state` text COLLATE utf8_bin NOT NULL,
  `r_zip` bigint(12) NOT NULL,
  `r_email` varchar(20) COLLATE utf8_bin NOT NULL,
  `r_contact` bigint(12) NOT NULL,
  `r_date` date NOT NULL,
  `t_assign` text COLLATE utf8_bin NOT NULL,
  `d_assign` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ass`
--

INSERT INTO `ass` (`req_id`, `r_info`, `r_desc`, `r_name`, `r_add1`, `r_add2`, `r_city`, `r_state`, `r_zip`, `r_email`, `r_contact`, `r_date`, `t_assign`, `d_assign`) VALUES
(6, 'laptop screen is blinking', 'my laptop screen in blinking.', 'Sonam Singh', 'rail road', 'near xyz school', 'ranchi', 'JHARKHAND', 829197, 'sonamsingh@gmail.com', 9876543201, '2020-10-03', 'Sonal Singh', '2020-10-03'),
(7, 'Mouse not working ', 'My mouse is not working something went wrong in its keys.', 'shreyansh singh', 'rail road', 'near xyz school', 'ranchi', 'JHARKHAND', 829197, 'sonamsingh@gmail.com', 9876543201, '2020-10-03', 'Sonal Singh', '2020-10-05'),
(10, 'wireless earphone', 'one of its side is not working properly', 'Avntika Arora', 'kaorl bagh', 'near new city', 'Delhi', 'Delhi', 876543, 'avntika@gmail.com', 9999999999, '2020-10-13', 'Zayan ', '2020-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `cust_id` int(11) NOT NULL,
  `custname` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `custadd` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cpname` text COLLATE utf8_bin NOT NULL,
  `cpquantity` int(5) NOT NULL,
  `cpeach` float NOT NULL,
  `cptotal` double NOT NULL,
  `cpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`cust_id`, `custname`, `custadd`, `cpname`, `cpquantity`, `cpeach`, `cptotal`, `cpdate`) VALUES
(1, 'Arnab', 'Ranchi Jharkhand', 'keyboard', 1, 400, 400, '2020-10-12'),
(2, 'Ravi', 'Kolkata', 'wireless earphones', 2, 1750, 3500, '2020-10-12'),
(3, 'Ayushman Singh', 'xyz road', 'keyboard', 3, 400, 1200, '2020-10-12'),
(4, 'Avntika Arora', 'Karol Bagh Delhi ', 'wireless earphones', 1, 1750, 1750, '2020-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `products_tb`
--

CREATE TABLE `products_tb` (
  `p_id` int(10) NOT NULL,
  `pname` varchar(40) COLLATE utf8_bin NOT NULL,
  `pdop` date NOT NULL,
  `pavail` int(11) NOT NULL,
  `ptotal` float NOT NULL,
  `pcostprice` float NOT NULL,
  `psellingprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products_tb`
--

INSERT INTO `products_tb` (`p_id`, `pname`, `pdop`, `pavail`, `ptotal`, `pcostprice`, `psellingprice`) VALUES
(1, 'keyboard', '2020-10-09', 2, 6, 300, 400),
(3, 'wireless earphones', '2020-10-10', 5, 12, 1500, 1750);

-- --------------------------------------------------------

--
-- Table structure for table `reg_login`
--

CREATE TABLE `reg_login` (
  `r_id` int(50) NOT NULL,
  `r_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `r_email` varchar(25) COLLATE utf8_bin NOT NULL,
  `r_password` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reg_login`
--

INSERT INTO `reg_login` (`r_id`, `r_name`, `r_email`, `r_password`) VALUES
(8, 'Shreyansh Singh', 'shreyansh@gmail.com', '12345678'),
(10, 'Sonal Kumari', 'singhkns.sonal@gmail.com', '12345678'),
(11, 'Sonam Singh', 'sonamsingh@gmail.com', 'sonam'),
(14, 'Ayan Sagar', 'Ayan Sagar', '123'),
(15, 'Sakshi Singhania', 'Sakshi Singhania', '12345'),
(16, 'Avntika Arora', 'avntika@gmail.com', 'avntika');

-- --------------------------------------------------------

--
-- Table structure for table `submit_req`
--

CREATE TABLE `submit_req` (
  `requester_id` int(12) NOT NULL,
  `req_info` text COLLATE utf8_bin NOT NULL,
  `req_desc` text COLLATE utf8_bin NOT NULL,
  `req_name` text COLLATE utf8_bin NOT NULL,
  `req_add1` text COLLATE utf8_bin NOT NULL,
  `req_add2` text COLLATE utf8_bin NOT NULL,
  `city` text COLLATE utf8_bin NOT NULL,
  `state` text COLLATE utf8_bin NOT NULL,
  `zip` int(7) NOT NULL,
  `req_email` varchar(20) COLLATE utf8_bin NOT NULL,
  `contact_no` bigint(11) NOT NULL,
  `r_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submit_req`
--

INSERT INTO `submit_req` (`requester_id`, `req_info`, `req_desc`, `req_name`, `req_add1`, `req_add2`, `city`, `state`, `zip`, `req_email`, `contact_no`, `r_date`) VALUES
(8, 'Mobile Screen ', 'My mobile display screen got damaged . Kindly repair it asap.', 'Ayushman Singh', 'xyz road', 'near abc lake', 'pune', 'maharastra', 829122, 'ayushman@gmail.com', 6205243862, '2020-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `Tech_ID` int(10) NOT NULL,
  `t_name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `t_email` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `t_mobile` bigint(10) NOT NULL,
  `t_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`Tech_ID`, `t_name`, `t_email`, `t_mobile`, `t_address`) VALUES
(1, 'Sonal Singh', 'sonal@bsc.com', 9905738438, 'ramgarh cantt vikash nagar jharkhand'),
(5, 'Zayan', 'zayan@bsc.com', 123456789, 'New Delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `ass`
--
ALTER TABLE `ass`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `products_tb`
--
ALTER TABLE `products_tb`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `reg_login`
--
ALTER TABLE `reg_login`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `submit_req`
--
ALTER TABLE `submit_req`
  ADD PRIMARY KEY (`requester_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`Tech_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ass`
--
ALTER TABLE `ass`
  MODIFY `req_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_tb`
--
ALTER TABLE `products_tb`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reg_login`
--
ALTER TABLE `reg_login`
  MODIFY `r_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `submit_req`
--
ALTER TABLE `submit_req`
  MODIFY `requester_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `Tech_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
