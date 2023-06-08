<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Payment Details</title>
    
    <!-- custom css file link  -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}


.container{
  display: flex;
  justify-content: center;
  align-items: center;
   margin-bottom:-50px;
  padding:25px;
  min-height: 100vh;
  /*background: linear-gradient(90deg, #2ecc71 60%, #27ae60 40.1%);*/
}

.container form{
  padding:20px;
  width:700px;
  background: #949494;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
  border-radius: 17px;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
  
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
  
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
   margin-top: 5px;
  cursor: pointer;
  border: none;  
  border-radius: 17px;  
  padding-left: 7px;  
  color: white; 
  background-color:black;
}

.container form .submit-btn:hover{
    background-color:white;
  color: black;
}
    </style>

</head>
<body>


<div class="container">

    <form action="" name="payment" method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="fname" placeholder="Randil Hasanga">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" placeholder="Matara">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="state" placeholder="Sri Lanka">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zip" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="name" placeholder="mr. Randil Hasanga">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="card" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="exp_month" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="exp_year" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" name="sub" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>

<?php
	include "Conn.php";
	mysqli_select_db($link,"textiles");
	
	if(isset($_POST['sub'])){
		if(!empty($_POST['fname'])){
			$fname=$_POST['fname'];
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		if(!empty($_POST['email'])){
			$email=$_POST['email'];
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				die("<center><b>Invalid email format !</b></center>");
			}
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		if(!empty($_POST['address'])){
			$address=$_POST['address'];
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		if(!empty($_POST['city'])){
			$city=$_POST['city'];
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		if(!empty($_POST['state'])){
			$state=$_POST['state'];
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		if(!empty($_POST['zip'])){
			$zip=$_POST['zip'];
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		if(!empty($_POST['name'])){
			$name=$_POST['name'];
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		if(!empty($_POST['card'])){
			$card=$_POST['card'];
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		if(!empty($_POST['exp_month'])){
			$exp_month=$_POST['exp_month'];
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		if(!empty($_POST['exp_year'])){
			$exp_year=$_POST['exp_year'];
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		if(!empty($_POST['cvv'])){
			$cvv=$_POST['cvv'];
		}else{
			die("<center><h2>Fill all the fields to continue !</h2></center>");
		}
		
		
		$O_id=$_SESSION['oid'];
			echo $O_id;
					
		 mysqli_query($link, "INSERT INTO address_details
							(address,city,state,zip,email,order_id)
							VALUES
							('$address','$city','$state','$zip','$email','$O_id')");
			
		
		echo '<script>window.location="payment_successfull.php"</script>';
	}

?>