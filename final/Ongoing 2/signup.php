<?php
session_start();
?>
<!DOCTYPE html>    
    <html>    
    <head>    
        <title>Sign up Form</title>    
         
		
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
            margin: auto;  
            margin: 20 0 0 450px;  
            padding: 80px;  
            background: #17A398;  
            border-radius: 15px ;  
            bottom:20px;  
			height:400px;
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
        </style>
    </head>    
    <body>    
        
		<video autoplay loop muted id="background-video" >
        <source src="white shirt.mp4" type="video/mp4">
		</video>
		<h1>Sign Up</h1>
        <div class="signup">   
	
        <form id="Fsignup" method="POST" action="" name="signupForm">    
            <label><b>Frist Name     
            </b>    
            </label>    
            <input type="text" name="fname" id="Fname" placeholder="Fristname">    
            <br><br> 
			 <label><b>Last Name     
            </b>    
            </label>    
            <input type="text" name="lname" id="Lname" placeholder="Lastname">    
            <br><br>
			 <label><b>E-mail    
            </b>    
            </label> <br>   
            <input type="text" name="mail" id="mail" placeholder="mailaddress">    
            <br><br>  
            <label for="psw"><b>Password</b></label>
			<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <br><br> 
			<label for="psw"><b>Confirm Password</b></label>
			<input type="password" id="cpsw" name="cpsw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>    
            <br><br>
            <input type="Submit" name="sign" id="sign" value=" Sign up "><br>
            
        </form>  
        
          <a id="a" href="login.php"><input type="Button" name="login" id="log" value=" Log In "></a> 
            
      </div>

</body>
</html>
<?php

  include "Conn.php";
	mysqli_select_db($link,"textiles");

  if(isset($_POST['sign'])){
    if(!empty($_POST['fname'])){
      $fname=$_POST['fname'];
    }else{
      die("<center><h2>Fill all the fields to continue !</h2></center>");
    }

    if(!empty($_POST['lname'])){
      $lname=$_POST['lname'];
    }else{
      die("<center><h2>Fill all the fields to continue !</h2></center>");
    }

    if(!empty($_POST['mail'])){
      
	  $mail=$_POST['mail'];
      if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        die("<center><b>Invalid email format !</b></center>");
      }
    }else{
        die("<center><h2>Fill all the fields to continue !</h2></center>");
      }
    

    if(!empty($_POST['psw'])){
      $pwd=$_POST['psw'];
    }else{
      die("<center><h2>Fill all the fields to continue !</h2></center>");
    }

    if(!empty($_POST['cpsw'])){
      $cpwd=$_POST['cpsw'];
    }else{
      die("<center><h2>Fill all the fields to continue !</h2></center>");
    }

    if($pwd==$cpwd){
      $password=md5($pwd);
      mysqli_query($link, "INSERT INTO users
                        (first_name,last_name,e_mail,pwd)
                        VALUES
                        ('$fname','$lname','$mail','$password')");
						
					echo '<script>window.location="login.php"</script>'; 
    }else{
      die("<center><b>Password does not match !</b></center>");
    }
  }
?>