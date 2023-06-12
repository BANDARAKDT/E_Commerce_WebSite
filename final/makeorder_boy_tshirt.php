<?php
	session_start();
?>
<!DOCTYPE html>    
    <html>    
    <head>    
        <title>Oder</title>    
          
		<script src="myscript.js"></script>
		<script src="jquery-3.6.0.js"></script>
        <style>
            body{  
        margin: 0;  
        padding: 0;  
        background-color:white;  
        font-family: 'Arial';  
    }  
    .login{  
            width: 382px;  
            overflow: hidden;  
            margin: auto;  
            margin: 20 0 0 450px;  
            padding: 80px;  
            background: #949494;
;  
            border-radius: 15px ;  
            bottom:20px;  
			height:350px;
    }  
    h1{  
        text-align: center;  
        color: black;  
        padding: 20px;
        font-weight: 900;   
    }  
    label{  
        color: black;  
        font-size: 17px;  
    }  
    #qty{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
    }  
    #size{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
          
    }  
    #color{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
          
    }
    #next{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 17px;  
        padding-left: 7px;  
        color: white;
		background-color:black;	
		
      
      
    }

#next:hover {
  background-color:white;
  color: black;
}
	
    span{  
        color: white;  
        font-size: 17px;  
    }  
    a{  
        float: right;  
        background-color: grey;  
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

#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "&#10004;";
}

/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "&#10006;";
}

        </style>
    </head>    
    <body>    
        
		<video autoplay loop muted id="background-video" >
        <source src="shopping.mp4" type="video/mp4">
		</video>
		<h1>Place Oder</h1><br>
        <div class="login">   
		
		
		
        <form id="login" method="POST" action="" name="loginForm">    
            <!--<table border="0" name="itemdetails">
                <tr>-->
                    <lable><b>Model:</b></lable>
                    <br>
					
					<select name="model" id="size">
                        <option value="boy_tshirt_001">Boy's Collared T-Shirt</option>
                        <option value="boy_tshirt_002">Boy's T Printed Shirt</option>

                    </select><br><br>
					
					 <lable><b>Size:</b></lable>
					 <br>
                    <select name="size" id="size">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="2XL">2XL</option>
                    </select>
                    <br><br>
                

                
                    <label><b>Quantity:</b></label>
                    <br><input type="text" name="qty" id="qty">
                <br><br>

                
                    <label><b>Colour:</b></label>
                        <br><select name="color" id="color">
                                <option value="red">Red</option>
                                <option value="blue">Blue</option>
                                <option value="black">Black</option>
                                <option value="green">Green</option>
                                <option value="white">White</option>
                            </select>
                        <br><br><br>
                
            
			
            <input type="Submit" name="next" id="next" value="Next">     
            <br><br>       
            <br><br>    
              
        </form>     
    </div> 

	
    </body>    
    </html>
	
	<?php
		include "Conn.php";
		mysqli_select_db($link, "textiles");
		
		if(isset($_POST['next'])){
			if(isset($_POST['size'])){
				$size=$_POST['size'];
				
			}else{
				die("<center><h2>Please fill all the fields !</h2></center>");
			}
			
			if(isset($_POST['model'])){
				$model=$_POST['model'];
				
				
			}else{
				die("<center><h2>Please fill all the fields !</h2></center>");
			}
			
			
			if(!empty($_POST['qty'])){
				$qty=$_POST['qty'];
				
			}else{
				die("<center><h2>Please fill all the fields !</h2></center>");
			}
			
			if(isset($_POST['color'])){
				$color=$_POST['color'];
				
			}else{
				die("<center><h2>Please fill all the fields !</h2></center>");
			}
			
			$em=$_SESSION['e_m'];
			
					
			$result=mysqli_query($link,"SELECT usr_id FROM users WHERE e_mail='".$em."'");
			//print_r($result);
			while($res=mysqli_fetch_row($result)){
				$id=$res[0];
				
			}
			
			$result2=mysqli_query($link, "SELECT price FROM models WHERE model_no = '".$model."'");
			while($res2=mysqli_fetch_row($result2)){
				$price=$res2[0];
				
			}
			
			
				
				
			//print_r($result);
				
			
			
			$total=$price*$qty;
			

			
			//print_r($result2);
			
			mysqli_query($link, "INSERT INTO order_details
								(model,size,qty,colour,total,usr_id)
								VALUES
								('$model','$size','$qty','$color','$total','$id')");
								
			
			$result3=mysqli_query($link,"SELECT order_details.order_id FROM order_details,users,models
										WHERE users.usr_id=order_details.usr_id AND models.model_no=order_details.model AND order_details.model='".$model."' AND order_details.usr_id='".$id."'");
			
			while($res3=mysqli_fetch_row($result3)){
				$O_id=$res3[0];
							
			}
			$_SESSION['oid']=$O_id;
			
			
			
		
			
			echo '<script>window.location="paymentsystem.php"</script>'; 

		}
	?>

