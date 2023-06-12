<?php
session_start();
?>
<!DOCTYPE html>    
    <html>    
    <head>    
        <title>Login Form</title>    
          
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
            background:#949494;
;  
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
    label{  
        color: black;  
        font-size: 17px;  
    }  
    #email{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
    }  
    #Psw{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
          
    }  
    #log2{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 17px;  
        padding-left: 7px;  
        color: white; 
        background-color:black;
		
      
      
    }

#log2:hover {
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



#sign2{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 17px;  
        padding-left: 7px;  
        color: white;
        background-color:black;
        
}
#sign2:hover {
  background-color:white;
  color: black;
}
#a2 {
  width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 17px; 
        margin-right:82px;
        margin-top:5px;
}

        </style>
    </head>    
    <body>    
        
		<video autoplay loop muted id="background-video" >
        <source src="white shirt.mp4" type="video/mp4">
		</video>
		<h1>Login</h1><br>
        <div class="login">   
		
		
		
        <form id="login" method="POST" action="" name="loginForm"> 
          <br><br>   
            <label><b>E-mail     
            </b><br>
            </label> 
			 
            <input type="text" name="email" id="email" placeholder="Email">    
            <br><br>    
            <label><b>Password     
            </b>    
            </label>    
            <input type="Password" name="Pass" id="Psw" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>    
            <br><br>  
			
            <input type="Submit" name="log2" id="log2" value="Log In Here">     
            
        </form> 
        <a id="a2" href="signup.php"><input type="Submit" name="sign2" id="sign2" value=" Sign up "></a>  
    </div> 

	
    </body>    
    </html>

    <?php
      include "Conn.php";
	  

      mysqli_select_db($link,"textiles");

      if(isset($_POST['log2'])){
        if(!empty($_POST['email'])){
          $email=$_POST['email'];
		  $_SESSION['e_m']=$email;
          if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            die("<center><h2>Invalid E-mail address !</h2></center>");
          }
        }else{
          die("<center><h2>Fill all the fields to continue !</h2></center>");
        }

        if(!empty($_POST['Pass'])){
          $pass=$_POST['Pass'];
          $pwd=md5($pass);
        }else{
          die("<center><h2>Fill all the fields to continue !</h2></center>");
        }

        $result=mysqli_query($link, "SELECT e_mail,pwd FROM users");


        while($row=mysqli_fetch_row($result)){
              if($row[0]==$email){
                if($row[1]==$pwd){
                  header('Location:Home page.php');
                }else{
                  die("<center><h2>Incorrect password !</h2></center>");
                }
              }
          }


        }

        
      
    ?>
