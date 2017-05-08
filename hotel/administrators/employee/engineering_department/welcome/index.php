<?php

    session_start();

    if (isset($_SESSION["engineering_department"]) != 'engineering_department') {
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