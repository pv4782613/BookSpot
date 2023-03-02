-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2022 at 06:03 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

DROP TABLE IF EXISTS `admin_registration`;
CREATE TABLE IF NOT EXISTS `admin_registration` (
  `Full_Name` varchar(100) NOT NULL,
  `Mobile` bigint NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

DROP TABLE IF EXISTS `booking_details`;
CREATE TABLE IF NOT EXISTS `booking_details` (
  `Product_ID` int NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Product_qty` int NOT NULL,
  `Product_amt` int NOT NULL,
  `Customer_name` varchar(100) NOT NULL,
  `Customer_phno` bigint NOT NULL,
  `Customer_address` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_registration`
--

DROP TABLE IF EXISTS `buyer_registration`;
CREATE TABLE IF NOT EXISTS `buyer_registration` (
  `Full_Name` varchar(100) NOT NULL,
  `Mobile` bigint NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Bank_Account` varchar(100) NOT NULL,
  `IFSC` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_registration`
--

DROP TABLE IF EXISTS `delivery_registration`;
CREATE TABLE IF NOT EXISTS `delivery_registration` (
  `Full_Name` varchar(100) NOT NULL,
  `Mobile` bigint NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `delivery_registration`
--

INSERT INTO `delivery_registration` (`Full_Name`, `Mobile`, `Email`, `Username`, `Password`, `Branch`, `Photo`) VALUES
('Divyani Rajput', 1212121212, 'abc@gmail.com', 'divyani', 'divyani', 'Pune', 'file_stored/cod.png');

-- --------------------------------------------------------

--
-- Table structure for table `inspect_details`
--

DROP TABLE IF EXISTS `inspect_details`;
CREATE TABLE IF NOT EXISTS `inspect_details` (
  `Product_ID` int NOT NULL,
  `Quality` varchar(100) NOT NULL,
  `Torn` varchar(100) NOT NULL,
  `Blank` varchar(100) NOT NULL,
  `Images` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inspect_details`
--

INSERT INTO `inspect_details` (`Product_ID`, `Quality`, `Torn`, `Blank`, `Images`) VALUES
(111111, 'good', 'No', 'No', 'file_stored/python.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

DROP TABLE IF EXISTS `product_details`;
CREATE TABLE IF NOT EXISTS `product_details` (
  `Product_ID` int NOT NULL,
  `Book_Name` varchar(100) NOT NULL,
  `Price` int NOT NULL,
  `Language` varchar(100) NOT NULL,
  `Book_Type` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Pages` int NOT NULL,
  `Year` int NOT NULL,
  `Quantity` int NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Seller_Name` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Images` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`Product_ID`, `Book_Name`, `Price`, `Language`, `Book_Type`, `Genre`, `Pages`, `Year`, `Quantity`, `Author`, `Seller_Name`, `Designation`, `Images`) VALUES
(111111, 'Python', 310, 'English', 'Old Book', 'Coding', 200, 2001, 1, 'Kashinath kamble', 'Nikita Nair', 'Student', 'file_stored/python.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller_registration`
--

DROP TABLE IF EXISTS `seller_registration`;
CREATE TABLE IF NOT EXISTS `seller_registration` (
  `Full_Name` varchar(100) NOT NULL,
  `Mobile` bigint NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Aadhar` varchar(100) NOT NULL,
  `Pan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seller_registration`
--

INSERT INTO `seller_registration` (`Full_Name`, `Mobile`, `Email`, `Username`, `Password`, `Address`, `Photo`, `Aadhar`, `Pan`) VALUES
('nikita Nair', 9579728500, 'nikita@gmail.com', 'nikita', 'nikita', 'Chikali', 'file_stored/19.jpg', 'file_stored/18.jpg', 'file_stored/18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_details`
--

DROP TABLE IF EXISTS `tracking_details`;
CREATE TABLE IF NOT EXISTS `tracking_details` (
  `Product_id` int NOT NULL,
  `Product_delivered` varchar(100) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Delivery_date` date NOT NULL,
  `Payment_mode` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tracking_details`
--

INSERT INTO `tracking_details` (`Product_id`, `Product_delivered`, `Reason`, `Delivery_date`, `Payment_mode`) VALUES
(111111, 'yes', '', '2022-12-05', 'Cash On delivery');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
