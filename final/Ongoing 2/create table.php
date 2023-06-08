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
						
	mysqli_query($link, "CREATE TABLE IF NOT EXISTS models
						(
							model_no VARCHAR(50) PRIMARY KEY,
							model VARCHAR(50),
							price DECIMAL(6,2)
							
						)");
						
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

?>