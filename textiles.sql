-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2023 at 11:21 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_details`
--

DROP TABLE IF EXISTS `address_details`;
CREATE TABLE IF NOT EXISTS `address_details` (
  `address_id` int NOT NULL AUTO_INCREMENT,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `order_id` int DEFAULT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `address_details`
--

INSERT INTO `address_details` (`address_id`, `address`, `city`, `state`, `zip`, `email`, `order_id`) VALUES
(1, 'Deniyaya', 'Matara', 'Sri lanka', 1234, 'randil@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

DROP TABLE IF EXISTS `models`;
CREATE TABLE IF NOT EXISTS `models` (
  `model_no` varchar(50) NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`model_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`model_no`, `model`, `price`) VALUES
('boy_shirt_001', 'Boys Plaid Shirt', '1295.00'),
('boy_shirt_002', 'Boys Hoodie Shirt', '1695.00'),
('boy_shirt_003', 'Boys short sleeves shirt', '895.00'),
('boy_trouser_001', 'Boys Pant', '1495.00'),
('boy_trouser_002', 'Boys Embroidered Pant', '1495.00'),
('boy_tshirt_001', 'Boys Collared T-Shirt', '640.00'),
('boy_tshirt_002', 'Boys T Printed Shirt', '790.00'),
('girl_blouse_001', 'Butterfly Sleeve Blouse', '990.00'),
('girl_blouse_002', 'Floral printed Dress', '790.00'),
('girl_frock_001', 'Lily Smocked Frock', '1195.00'),
('girl_frock_002', 'Lily Sleeve Frock', '1495.00'),
('girl_top_001', 'Lase Detailed Top', '590.00'),
('girl_top_002', 'Long Indian Top', '799.00'),
('girl_top_003', 'Short Printed Top', '690.00'),
('girl_top_004', 'Lase Top', '600.00'),
('men_shirt_001', 'Cotton I', '2695.00'),
('men_shirt_002', 'Cotton II', '2490.00'),
('men_shirt_003', 'Linen', '3051.00'),
('men_trouser_001', 'Cotton I', '2695.00'),
('men_trouser_002', 'Cotton II', '4490.00'),
('men_trouser_003', 'Linen', '3051.00'),
('men_tshirt_001', 'Cotton I', '2695.00'),
('men_tshirt_002', 'Cotton II', '1490.00'),
('men_tshirt_003', 'Linen', '2051.00'),
('women_dress_001', 'Viscose', '8680.00'),
('women_dress_002', 'Linen', '4490.00'),
('women_dress_003', 'Woven', '3051.00'),
('women_saree_001', 'Washed cotton', '8680.00'),
('women_saree_002', 'Linen cotton', '4490.00'),
('women_saree_003', 'Lace', '10950.00'),
('women_top_001', 'Woven I', '880.00'),
('women_top_002', 'Woven I', '790.00'),
('women_top_003', 'Cotton', '1500.00');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `model` varchar(50) DEFAULT NULL,
  `size` varchar(5) DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `colour` varchar(30) DEFAULT NULL,
  `total` decimal(6,2) DEFAULT NULL,
  `usr_id` int DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `usr_id` (`usr_id`),
  KEY `model` (`model`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `model`, `size`, `qty`, `colour`, `total`, `usr_id`) VALUES
(1, 'girl_blouse_001', 'L', 6, 'blue', '5940.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `usr_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `e_mail` varchar(50) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usr_id`, `first_name`, `last_name`, `e_mail`, `pwd`) VALUES
(1, 'Randil', 'Hasanga', 'randil@gmail.com', '331bfca3b3709f0605534fa1cb1f0fb3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `users` (`usr_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`model`) REFERENCES `models` (`model_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
