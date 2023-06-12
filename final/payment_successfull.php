<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title>Payment successful</title>

<style>
    body{  
        margin: 0;  
        padding: 0;  
        background-color:white;  
        font-family: 'Arial';
	}
	.signup{  
            width: 382px;  
            /*overflow: hidden;*/  
            margin-right:auto; 
			margin-left:auto;	
            margin-top:10px;
            padding: 100px;  
            background: #17A398;  
            border-radius: 15px ;  
            bottom:20px;  
			height:400px;
			
    } 
	    h1{  
        text-align: center;  
        color: black;  
        padding: 0px; 
        font-weight: 1000; 
        font-family: 'Arial';
		text-size:200;	
    }  
	h2{
		text-align: center;  
        color: black;  
        padding: 60px; 
        font-weight:80;
        font-family: 'Arial';
		text-size:200;
	}
	table{
		    margin-right:auto; 
			margin-left:auto;
	}
    label{  
        color: black;  
        font-size: 17px;  
    }  
    #Fname{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
    } 
		
	 #Lname{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
    } 
	
	#mail{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
    } 
	
    #cpsw{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
          
    }  
	
	 #psw{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
          
    }
    #sign{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 17px;  
        padding-left: 7px;  
        color: white; 
        background-color:black;
      
      
    }  
    span{  
        color: white;  
        font-size: 17px;  
    }  
    a{  
        float: right;  
        background-color: grey;  
    }  

#sign:hover {
  background-color:white;
  color: black;
}

#background-video {
  width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
}
#log{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 17px;  
        padding-left: 7px;  
        color: white; 
        background-color:black;
       
}
#a {
  width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 17px; 
        margin-right:82px;
        margin-top:5px;

}  
 #log:hover {
  background-color:white;
  color: black;
         
}
table {
	
	border-collapse: collapse;
	margin-top : -40px;
	background-color: #acecf7;
	
}

table, th, td {
	  border: 1px solid #000;
	  color: #000;
}

th, td {
  padding: 8px;
}
</style>
</head>
<body>

        <video autoplay loop muted id="background-video" >
        <source src="white shirt.mp4" type="video/mp4">
		</video>
		<br><br>
		
        <div class="signup"> 
		
	
		<h1>Payment successful..</h1>
		<h2>Thank you for your payment..</h2><br>
		
			
		<?php
			include "Conn.php";

			// Establish a connection to the database
			$link=mysqli_connect("localhost","root","");

			// Check connection
			if (!$link) {
				die("Connection failed: " . mysqli_connect_error());
			}

			mysqli_select_db($link, "textiles");

			// Check if $_SESSION['oid'] is set
			if (!isset($_SESSION['oid'])) {
				echo "Session variable 'oid' is not set.";
				exit;
			}

			$O_id = $_SESSION['oid'];
			//echo $O_id;

			$query = "SELECT model, size, qty, colour, total FROM order_details WHERE order_id = '".$O_id."'";

			$result = mysqli_query($link, $query);

			while ($row = mysqli_fetch_assoc($result)) {
				echo "<table border = 1>";
				echo "<tr>";
				echo "<td>Model</td>";
				echo "<td>".$row['model']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Size</td>";
				echo "<td>".$row['size']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Quantity</td>";
				echo "<td>".$row['qty']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>color</td>";
				echo "<td>".$row['colour']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Total</td>";
				echo "<td>".$row['total']."</td>";
				echo "</tr>";
				echo "</table>";
			}

			// Close the database connection
			mysqli_close($link);
		?>
</div>

	
		
	
		

</body>
</html>

