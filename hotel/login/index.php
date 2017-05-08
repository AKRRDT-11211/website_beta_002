<?php

  if(isset($_POST['submit'])){

    $username = $_POST['user-name'];
    $password = $_POST['password'];

    $password = md5($password);


	$servername = "localhost";
	$username_1 = "root";
   	$password_1 = "";
   	$dbname = "hotel_register";
    
    $conn = mysqli_connect($servername , $username_1 , $password_1 , $dbname);
    
    if(!$conn)
   		{ die("Connection failed..!!!!!!!" . mysqli_connect_error()); }
	else
   		{ 	echo "<br>";
   			/* echo "Succssfully connected !!"; */ 
   		}    


   	$sql = "SELECT * FROM user_register WHERE user_name= '$username'";
	$query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $pass = $row['password'];


    if ($pass == $password) {
    	echo "WelCome !";
    }
    else{
    	echo "Login Failed !";
    }

    mysqli_close($conn);

  }

?>




















<!DOCTYPE html>
<html>
<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  
</head>

<title>
  Login Page    
</title>

<body>

  <div class="row" style="background-color: #616161; height: 100%;">
    
  <div class="col-md-3"></div>
  <div class="col-md-6">
    
    <div style="margin-top: 30%; margin-bottom: 30%; padding-top: 5%; padding-bottom: 5%; padding-left: 3%; padding-right: 3%; background-color: #212121; opacity: 0.80; color: #FFFFFF; border-radius: 20px;">
      <form action="index.php" method="post" style="font-size: 27px;padding-left: 50px;padding-right: 50px;">    
        
        <div>
          <b>User-Name</b> 
          <br>
          <input type="text" name="user-name" style="font-size: 22px; border-radius: 7px; padding-left: 15px; width: 100%; margin-top: 10px; color: #000000;">  
        </div>
        
        <br>

        <div>
          <b>Pass-Word</b> 
          <br>
          <input type="password" name="password" style="font-size: 22px; border-radius: 7px; padding-left: 15px; width: 100%; margin-top: 10px; color: #000000;">  
        </div>

        <br>
        <br>

        <div class="row">
          <div class="col-md-6">
            <input type="submit" name="submit" style="width: 100%; padding-top: 5px; padding-bottom: 5px; background-color: #76FF03; color: #000000;">
          </div>
          <div class="col-md-6">
            <input type="reset" name="reset" style="width: 100%; padding-top: 5px; padding-bottom: 5px; background-color: #D50000; color: #000000;">
          </div>
        </div>

      </form>
    </div>

  </div>
  <div class="col-md-3"></div>

  </div>

</body>
</html>