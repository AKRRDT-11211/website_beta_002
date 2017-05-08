<?php

    session_start();

    if (isset($_SESSION["food_and_bevarages"]) != 'food_and_bevarages') {
    	header('location: access_denied.php');
    }

?>










<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="logout.php"><button>Logout</button></a>
</body>
</html>