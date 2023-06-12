create database textiles;
use textiles;

CREATE TABLE IF NOT EXISTS `address_details` (
  `address_id` int NOT NULL AUTO_INCREMENT,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `order_id` int DEFAULT NULL,
  PRIMARY KEY (`address_id`)
);



CREATE TABLE IF NOT EXISTS `models` (
  `model_no` varchar(50) NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`model_no`)
);


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
);


CREATE TABLE IF NOT EXISTS `users` (
  `usr_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `e_mail` varchar(50) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
);

ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `users` (`usr_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`model`) REFERENCES `models` (`model_no`);
COMMIT;
