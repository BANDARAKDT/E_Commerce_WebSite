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
            margin-top:50px;
            padding: 100px;  
            background: #949494;  
            border-radius: 15px ;  
            bottom:20px;  
			height:400px;
			
    } 
	    h1{  
        text-align: center;  
        color: black;  
        padding: 20px; 
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
		
	
		
	
		</div>	

</body>
</html>