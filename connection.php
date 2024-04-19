<?php
	 $co = mysqli_connect("localhost","root","","vehicle");

	 if(!$co){
	 	die('connection error due to notfinding the database'. mysqli_connect_errno());
	 }
?>

