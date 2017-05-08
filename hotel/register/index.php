<?php

	if(isset($_POST['submit'])){
	
		$first_name = $_POST['first_name'];
		$second_name = $_POST['second_name'];
		$user_name = $_POST['user_name'];
		$pass_word = $_POST['pass_word'];
		$re_pass_word = $_POST['re_pass_word'];
		$age = $_POST['age'];
		$date_of_birth = $_POST['date_of_birth'];
		$genders = $_POST['genders'];
		$contact_number = $_POST['contact_number'];
		$e_mail = $_POST['e_mail'];
		$country = $_POST['country'];
		$home_state = $_POST['home_state'];
		$rediential_address = $_POST['rediential_address'];
		$current_address = $_POST['current_address'];
		$pin_code = $_POST['pin_code'];

		
		$pass_word = md5($pass_word);
		$re_pass_word = md5($re_pass_word);


		if($pass_word == $re_pass_word){


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


    		$sql = "SELECT * FROM user_register WHERE user_name= '$user_name'";
	    	$query = mysqli_query($conn, $sql);
    		$row = mysqli_fetch_array($query);
    		$id_1 = $row['id'];

    		if($id_1){
       			echo "<br>";
	   			echo "This user name aldredy exist. Please select a new username !!";
    		}
    		else{

    			$sql = "SELECT * FROM user_register WHERE contact_number= '$contact_number'";
		    	$query = mysqli_query($conn, $sql);
    			$row = mysqli_fetch_array($query);
    			$id_1 = $row['id'];

    			if($id_1){
       				echo "<br>";
	   				echo "This contact number is aldredy registered. Please use your existing account !!";
    			}	

    			else{

					$sql = "SELECT * FROM user_register WHERE e_mail= '$e_mail'";
			    	$query = mysqli_query($conn, $sql);
    				$row = mysqli_fetch_array($query);
    				$id_1 = $row['id'];  

					if($id_1){
       					echo "<br>";
	   					echo "This e-mail address is aldredy registered. Please use your existing account !!";
    				}

    				else{  

    					$sql = "INSERT INTO  user_register (first_name, second_name, user_name, password, age, date_of_birth, genders, contact_number, e_mail, country, home_state, residential_address, current_address, pin_code) VALUES ('$first_name', '$second_name', '$user_name', '$pass_word', '$age', '$date_of_birth', '$genders', '$contact_number', '$e_mail', '$country', '$home_state', '$rediential_address', '$current_address', '$pin_code')";  

    					if (mysqli_query($conn , $sql))
						{
							echo "<br>You are succssfully registered !! <br>WELCOME to the AKRRDT family !! <br>";
						}
						else
						{
							echo "<br>Please again register !!<br>". $sql ."<br>". mysqli_error($conn);
						}				  				
				
						mysqli_close($conn);

						/*
						echo $first_name;
						echo "<br>";
						echo $second_name;
						echo "<br>";
						echo $user_name;
						echo "<br>";
						echo $pass_word;
						echo "<br>";
						echo $age;
						echo "<br>";
						echo $date_of_birth;
						echo "<br>";
						echo $genders;
						echo "<br>";
						echo $contact_number;
						echo "<br>";
						echo $e_mail;
						echo "<br>";
						echo $country;
						echo "<br>";
						echo $home_state;
						echo "<br>";
						echo $rediential_address;
						echo "<br>";
						echo $current_address;
						echo "<br>";
						echo $pin_code;
						echo "<br>";
						*/
					}
				}
			}

		}
		else{
			echo "The passwords didnt match. Plz check your password..";
		}
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
	Register
</title>

<style>
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
} 
</style>

<body>

	<div class="row" style="background-color: #9E9E9E; width: 100%;">
		
	<div class="col-md-2"></div>
	<div class="col-md-8" style="background-color: #FFFFFF;z-index: 2;margin-top: 100px; padding-top: 50px; padding-left: 20px; padding-right: 20px; padding-bottom: 100px; margin-bottom: 150px; border-radius: 20px;">
		
		<div style="font-size: 50px;text-align: center;">
			Registration Form
		</div>

		<hr>

		<div style="font-size: 27px; margin-top: 20px; padding-left: 70px; padding-right: 70px; margin-bottom: 50px;">
			<form action="register.php" method="post">
				<div>



					<div class="row" style="margin-top: 20px;">
						
						<div class="col-md-6">
							<div style="padding-top: 20px;">
								<b> First Name *</b>
								<br>
								<input type="text" placeholder="First Name" name="first_name" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;" autocomplete="off" autofocus maxlength="20" required>
							</div>		
						</div>

						<div class="col-md-6">
							<div style="padding-top: 20px;">
								<b> Second Name *</b>
								<br>
								<input type="text" placeholder="Second Name" name="second_name" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;" autocomplete="off" maxlength="20" required>
							</div>		
						</div>
					
					</div>

					

					<div class="row" style="margin-top: 20px;">
						
						<div class="col-md-4">
							<div style="padding-top: 20px;">
								<b> Choose your User Name *</b>
								<br>
								<input type="text" placeholder="User Name" name="user_name" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;" autocomplete="off" minlength="5" required>
							</div>		
						</div>
						
						<div class="col-md-4">
							<div style="padding-top: 20px;">
								<b> Create your Pass Word *</b>
								<br>
								<input type="password" placeholder="Pass Word" name="pass_word" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;" autocomplete="off" required>
							</div>		
						</div>

						<div class="col-md-4">
							<div style="padding-top: 20px;">
								<b> Confirm your Pass Word *</b>
								<br>
								<input type="password" placeholder="Confirm Pass Word" name="re_pass_word" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;" autocomplete="off" required>
							</div>		
						</div>

					</div>



					
					
					<div class="row" style="margin-top: 20px;">
						
						<div class="col-md-4">
							<div style="padding-top: 20px;">
								<b> Your Age *</b>
								<br>
								<input type="number" placeholder="Age" name="age" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;" min="18" max="120" required>
							</div>		
						</div>

						<div class="col-md-4">
							<div style="padding-top: 20px;">
								<b> Date of birth </b>
								<br>
								<input type="date" placeholder="Date of birth" name="date_of_birth" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;" required>
							</div>		
						</div>

						<div class="col-md-4">
							<div style="padding-top: 20px;">
								<b> Gender </b>
								<br>
								<input list="genders" name="genders" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;">
  								<datalist id="genders">
    								<option value="Male">
    								<option value="Fe-male">
    								<option value="Other">							
  								</datalist>
							</div>		
						</div>

					</div>
					

					
					<div class="row" style="margin-top: 20px;">

						<div class="col-md-6">
							<div style="padding-top: 20px;">
								<b> Contact Number *</b>
								<br>
								<input type="number" placeholder="Contact Number" name="contact_number" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;" autocomplete="off" min="0" required>
							</div>
						</div>

						<div class="col-md-6">
							<div style="padding-top: 20px;">
								<b> E-Mail Address *</b>
								<br>
								<input type="email" placeholder="E-Mail Address" name="e_mail" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;" autocomplete="off" required>
							</div>		
						</div>
					
					</div>
					

					
					<div class="row" style="margin-top: 20px;">

						<div class="col-md-6">
							<div style="padding-top: 20px;">
								<b> Country </b>
								<br>
								<input type="text" placeholder="Country" name="country" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;">
							</div>		
						</div>

						<div class="col-md-6">
							<div style="padding-top: 20px;">
								<b> Home State </b>
								<br>
								<input type="text" placeholder="Home-State" name="home_state" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;">
							</div>		
						</div>
					
					</div>
					
					

					<div class="row" style="margin-top: 20px;">

						<div class="col-md-6">
							<div style="padding-top: 20px;">
								<b> Residential Address *</b>
								<br>
								<textarea name="rediential_address" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px;" rows="5" required maxlength="100">
								</textarea>
							</div>		
						</div>

						<div class="col-md-6">
							<div style="padding-top: 20px;">
								<b> Current Address *</b>
								<br>
								<textarea name="current_address" style="width: 100%;text-align: left; font-size: 25px; border-radius: 10px;" rows="5" required maxlength="100">   
								</textarea>
							</div>		
						</div>
					
					</div>

					

					<div style="padding-top: 20px; margin-top: 20px; margin-bottom: 80px;" >
						<b> Pin-Code *</b>
						<br>
						<input type="number" placeholder="Pin-Code" name="pin_code" style="width: 50%;text-align: left; font-size: 25px; border-radius: 10px; padding-left: 20px;" autocomplete="off" required minlength="7"> 
					</div>


					<hr>


					<div class="row" style="margin-top: 50px;">
                  
                  		<div class="col-md-6">
                    		<input type="submit" name="submit" style="width: 100%; height: 70px; font-size: 30px;background-color: #76FF03;">
	                    </div>

                  		<div class="col-md-6">
                    		<input type="reset" style="width: 100%; height: 70px; font-size: 30px;background-color: #F44336;">
                    	</div>

                	</div>



				</div>
			</form>
		</div>

	</div>
	<div class="col-md-2"></div>

	</div>

</body>
</html>