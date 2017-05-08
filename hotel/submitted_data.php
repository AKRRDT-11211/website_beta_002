<?php 

if(isset($_POST['submit'])){
	
	$destination = $_POST['destination'];
	$check_in_date = $_POST['check-in-date'];
	$check_out_date = $_POST['check-out-date'];
	$number_of_rooms = $_POST['number-of-rooms'];
	$adults = $_POST['number-of-adults'];
	$children = $_POST['number-of-children'];

	if (strtotime($check_in_date) > strtotime($check_out_date)) {
		echo "sorry mate !!";
	}

	
}

?>