<!DOCTYPE html>    
    <html>    
    <head>    
        <title>Booking Form</title>    
          
		<script src="myscript2.js"></script>
		<style>
            body{  
        margin: 0;  
        padding: 0;  
        background-color:white;  
        font-family: 'Arial';  
    }  
    .booking{  
            width: 382px;  
            overflow: hidden;  
            margin: auto;  
            margin: 20 0 0 450px;  
            padding: 80px;  
            background:#949494;  
            border-radius: 15px ;  
            bottom:20px;  
			      height:300px;
      
    }  
    h1{  
        text-align: center;  
        color: black;  
        padding: 20px; 
        font-weight: 900; 
		}
		
	  #log1{  
        width: 130px;  
        height: 50px;  
        border: none;  
        border-radius: 17px;  
        padding-left: 7px;  
        color: blue;
		margin-left:50px;
		margin-top:100px;
    }
	
	  #log2{  
        width: 130px;  
        height: 50px;  
        border: none;  
        border-radius: 17px;  
        padding-left: 7px;  
        color: blue; 
		margin-left:20px;
		margin-top:100px;
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

img.avatar {
  width: 100px;
  height:100px;
  border-radius: 50%;
}

#log1:hover {
  background-color:black;
  color: white;
}

#log2:hover {
  background-color:black;
  color: white;
}
        </style>
    </head>    
    <body>    
        
		<video autoplay loop muted id="background-video" >
        <source src="white shirt.mp4" type="video/mp4">
		</video>
		<h1>Log in or Create an account to Fashion Store</h1><br>
		
        <div class="booking"> 
			
		
		
		
        <form id="booking" method="get" action="booking.php" name="bookingForm">
		<div class="image">
			<center><img src="images.png" alt="Avatar" class="avatar"></center>
        </div>     
            <a href="login.php" target="_blank"><input type="button" name="log" id="log1" value="Log In " onclick="check_form()"> </a>      
            <a href="signup.php" target="_blank"><input type="button" name="sign" id="log2" value="Sign Up" onclick="check_form()"></a>       
            <br><br> 
			
                
        </form>     
    </div> 
	
</body>
</html>