-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 09:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(80) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `email`, `message`, `date`) VALUES
(1, 'Asazad ', '1324566599', 'abc@gmail.com', 'First Message', '2022-02-18 21:04:01'),
(2, 'Asazad ', '1324566599', 'abc@gmail.com', 'First Message', '2022-02-18 21:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbgallery`
--

CREATE TABLE `tbgallery` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbgallery`
--

INSERT INTO `tbgallery` (`id`, `name`, `image`, `date`) VALUES
(5, 'R15', 's2.jpg', '2022-02-18 22:42:51'),
(6, 'Suzuki Motorcycle', 'pexels-abhinav-8532419.jpg', '2022-02-19 00:13:36'),
(7, 'Suzuki Motorcycle', 'pexels-abhinav-7211299.jpg', '2022-02-19 00:13:36'),
(8, 'Suzuki Motorcycle', 'pexels-pichu-5775374.jpg', '2022-02-19 00:13:36'),
(9, 'Suzuki Motorcycle', 'pexels-abhinav-8532459.jpg', '2022-02-19 00:13:36'),
(10, 'Suzuki Motorcycle', 'pexels-rahul-soni-9266266.jpg', '2022-02-19 00:13:36'),
(11, 'R15', 'pexels-axel-681795.jpg', '2022-02-19 00:14:09'),
(12, 'R15', 'pexels-sourav-mishra-1231692 (1).jpg', '2022-02-19 00:14:10'),
(13, 'R15', 'pexels-lilartsy-2747793.jpg', '2022-02-19 00:14:10'),
(14, 'Hero Honda Motor Cycle', 'pexels-sourav-mishra-2949302.jpg', '2022-02-19 00:14:51'),
(15, 'Hero Honda Motor Cycle', 'pexels-vikram-sundaramoorthy-1119796.jpg', '2022-02-19 00:14:51'),
(16, 'Hero Honda Motor Cycle', 'pexels-mohsan-ali-mirza-2377893.jpg', '2022-02-19 00:14:51'),
(17, 'Hero Honda Motor Cycle', 'pexels-nishant-aneja-2393835.jpg', '2022-02-19 00:14:51'),
(18, 'Hero Honda Motor Cycle', 'pexels-pixabay-67557.jpg', '2022-02-19 00:14:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bikes`
--

CREATE TABLE `tb_bikes` (
  `b_id` int(11) NOT NULL,
  `emp_id` varchar(80) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_color` varchar(50) NOT NULL,
  `b_quality` varchar(60) NOT NULL,
  `b_prize` varchar(60) NOT NULL,
  `b_image` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bikes`
--

INSERT INTO `tb_bikes` (`b_id`, `emp_id`, `b_name`, `b_color`, `b_quality`, `b_prize`, `b_image`, `date`) VALUES
(5, '2', 'Suzuki Motorcycle', 'Red', 'A1 Quality', '120000', 'pexels-tim-gouw-240222.jpg', '2022-02-18 20:48:10'),
(6, '2', 'Hero Honda Motor Cycle', 'Blue', 'A1 Quality', '35000', 's1.jpg', '2022-02-18 21:10:49'),
(8, '2', 'R15', 'Blue', 'A1 Quality', '562000', 'pexels-sourav-mishra-3068659.jpg', '2022-02-18 21:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bill`
--

CREATE TABLE `tb_bill` (
  `bill_no` int(11) NOT NULL,
  `emp_id` varchar(80) NOT NULL,
  `cust_name` varchar(80) NOT NULL,
  `quality` varchar(80) NOT NULL,
  `prize` varchar(80) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bill`
--

INSERT INTO `tb_bill` (`bill_no`, `emp_id`, `cust_name`, `quality`, `prize`, `date`) VALUES
(2, '2', 'PQR', 'A1 Quality', '35000', '2022-02-19 00:40:46'),
(3, '2', 'PQR', 'A1 Quality', '562000', '2022-02-19 01:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` varchar(80) NOT NULL,
  `cust_mobile` varchar(12) NOT NULL,
  `cust_email` varchar(20) NOT NULL,
  `cust_password` varchar(50) NOT NULL,
  `cust_state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`cust_id`, `cust_name`, `cust_address`, `cust_mobile`, `cust_email`, `cust_password`, `cust_state`) VALUES
(1, 'PQR', 'PANHALA					', '9896012457', 'a@gmail.com', '15', 'Jammu and Kashmir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_address` varchar(80) NOT NULL,
  `emp_mobile` varchar(12) NOT NULL,
  `emp_email` varchar(30) NOT NULL,
  `emp_password` varchar(30) NOT NULL,
  `emp_salary` varchar(60) NOT NULL,
  `emp_designation` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`emp_id`, `emp_name`, `emp_address`, `emp_mobile`, `emp_email`, `emp_password`, `emp_salary`, `emp_designation`) VALUES
(1, 'John', 'Rajarampuri\r\n\r\n\r\n					', '1324567890', 'xyz@gmail.com', '65ded5353c5ee48d0b7d48c591b8f4', '4856412', 0),
(2, 'YXA', 'Shaupuri					', '123', 'ab@gmail.com', '1234', '12345647', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbgallery`
--
ALTER TABLE `tbgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bikes`
--
ALTER TABLE `tb_bikes`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbgallery`
--
ALTER TABLE `tbgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_bikes`
--
ALTER TABLE `tb_bikes`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_bill`
--
ALTER TABLE `tb_bill`
  MODIFY `bill_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_employee`
--
ALTER TABLE `tb_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
