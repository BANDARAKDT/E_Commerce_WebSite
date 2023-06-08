<?php
  include "Conn.php";
  mysqli_query($link, "CREATE DATABASE textiles");
    mysqli_select_db($link,"textiles");

  mysqli_query($link, "CREATE TABLE IF NOT EXISTS users
                      (
                        usr_id INT PRIMARY KEY AUTO_INCREMENT,
                        first_name VARCHAR(20),
                        last_name VARCHAR(20),
                        e_mail VARCHAR(50),
                        pwd VARCHAR(100)
                      )");
					  
	mysqli_query($link, "CREATE TABLE IF NOT EXISTS models
						(
							model_no VARCHAR(50) PRIMARY KEY,
							model VARCHAR(50),
							price DECIMAL(8,2)
							
						)");

	mysqli_query($link, "CREATE TABLE IF NOT EXISTS order_details
						(
						order_id INT PRIMARY KEY AUTO_INCREMENT,
						model VARCHAR(50),
						size VARCHAR(5),
						qty INT,
						colour VARCHAR(30),
						total DECIMAL(6,2),
						usr_id INT,
						FOREIGN KEY(usr_id) REFERENCES users(usr_id),
						FOREIGN KEY(model) REFERENCES models(model_no)
						)");
						
	/*mysqli_query($link, "CREATE TABLE IF NOT EXISTS order_details
						(
							payment_no INT PRIMARY KEY AUTO_INCREMENT,
							model VARCHAR(50),
							size VARCHAR(5),
							qty INT,
							colour VARCHAR(30),
							total DECIMAL(6,2),
							order_id INT,
							usr_id INT,
							FOREIGN KEY(usr_id) REFERENCES users(usr_id),
							FOREIGN KEY(model) REFERENCES models(model_no)
						)");*/
						

						
	mysqli_query($link, "CREATE TABLE IF NOT EXISTS address_details
						(
							address_id INT PRIMARY KEY AUTO_INCREMENT,
							address VARCHAR(50),
							city VARCHAR(50),
							state VARCHAR(50),
							zip INT,
							email VARCHAR(50),
							order_id INT
						)");
	
	mysqli_query($link,"INSERT INTO models
				(model_no,model,price)
				VALUES
				('girl_top_001','Lase Detailed Top',590.00),
				('girl_top_002','Long Indian Top',799.00),
				('girl_top_003','Short Printed Top',690.00),
				('girl_top_004','Lase Top',600.00),
				('boy_shirt_001','Boys Plaid Shirt',1295.00),
				('boy_shirt_002','Boys Hoodie Shirt',1695.00),
				('boy_shirt_003','Boys short sleeves shirt',895.00),
				('girl_blouse_001','Butterfly Sleeve Blouse',990.00),
				('girl_blouse_002','Floral printed Dress',790.00),
				('girl_frock_001','Lily Smocked Frock',1195.00),
				('girl_frock_002','Lily Sleeve Frock',1495.00),
				('boy_trouser_001','Boys Pant',1495.00),
				('boy_trouser_002','Boys Embroidered Pant',1495.00),
				('boy_tshirt_001','Boys Collared T-Shirt',640.00),
				('boy_tshirt_002','Boys T Printed Shirt',790.00),
				('men_shirt_001','Cotton I',2695.00),
				('men_shirt_002','Cotton II',2490.00),
				('men_shirt_003','Linen',3051.00),
				('men_tshirt_001','Cotton I',2695.00),
				('men_tshirt_002','Cotton II',1490.00),
				('men_tshirt_003','Linen',2051.00),
				('men_trouser_001','Cotton I',2695.00),
				('men_trouser_002','Cotton II',4490.00),
				('men_trouser_003','Linen',3051.00),
				('women_dress_001','Viscose',8680.00),
				('women_dress_002','Linen',4490.00),
				('women_dress_003','Woven',3051.00),
				('women_top_001','Woven I',880.00),
				('women_top_002','Woven I',790.00),
				('women_top_003','Cotton',1500.00),
				('women_saree_001','Washed cotton',8680.00),
				('women_saree_002','Linen cotton',4490.00),
				('women_saree_003','Lace',10950.00)");

?>