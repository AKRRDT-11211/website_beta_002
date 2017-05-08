<?php

    session_start();

    if (isset($_SESSION["authentication_page"]) != 'authentication_page') {
    	header('location: access_denied.php');
    }

    $_SESSION["variable"] = "variable"; 

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
	Employee-Section
</title>


<style>
.button {
    background-color: #7B1FA2; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    border-radius: 20px;
    width: 90%;
    text-align: center;
    height: 230px;
    font-size: 30px;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 10px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 70px 100px 0 rgba(0,0,0,0.19);
}
</style>


<body style="background-color: #0D47A1;">

	<div class="row">

		<div class="col-md-1"></div>
		<div class="col-md-10" style="background-color: #90CAF9; margin-bottom: 200px; margin-top: 100px; font-size: 20px; border-radius: 20px; padding-top: 50px; padding-bottom: 100px; padding-left: 100px; padding-right: 100px;">
			
			<div>

				<div style="font-size: 60px; text-align: center;margin-top: 10px; margin-bottom: 60px;">
					<i><b>Select Your Department</b></i>
					<br>
					<a href="logout.php">
						<button style="border-radius: 20px; width: 25%; height: 70%; font-size: 40px; padding-top: 5px; padding-bottom: 5px; margin-top: 50px;">
							<i>
								<b>
									Logout
								</b>
							</i>
						</button>
					</a>
				</div>
				
				<div class="row" style="margin-bottom: 40px;">
					
					<div class="col-md-3">
						<a href="house_keping/"><button class="button button1 button2"><b><i> House Keeping </i></b></button></a>
					</div>

					<div class="col-md-3">
						<a href="engineering_department/"><button class="button button1 button2"><b><i> Engineering Department </i></b></button></a>
					</div>

					<div class="col-md-3">
						<a href="front_office/"><button class="button button1 button2"><b><i> Front Office </i></b></button></a>
					</div>

					<div class="col-md-3">
						<a href="accounts/"><button class="button button1 button2"><b><i> Accounts </i></b></button></a>
					</div>

				</div>

				<div class="row" style="margin-bottom: 20px; margin-top: 40px;">
					
					<div class="col-md-3">
						<a href="human_resource/"><button class="button button1 button2"><b><i> Human Resource </i></b></button></a>
					</div>

					<div class="col-md-3">
						<a href="security/"><button class="button button1 button2"><b><i> Security </i></b></button></a>
					</div>

					<div class="col-md-3">
						<a href="food_and_bevrages/"><button class="button button1 button2"><b><i> Food and Beverage </i></b></button></a>
					</div>

					<div class="col-md-3">
						<a href="entairtntment/"><button class="button button1 button2"><b><i> Entaritentment </i></b></button></a>
					</div>

				</div>

			</div>

		</div>
		<div class="col-md-1"></div>

	</div>

</body>
</html>