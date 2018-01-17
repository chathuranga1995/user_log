<?php

	$dbc = mysqli_connect('localhost','root','');

	if(!$dbc){
		die('Not connected!:'.mysqli_error($dbc));
	 }else{
	 	//echo "working database!"."</br>";  
	 	//echo "redirecting!!"."</br>";
	 }

	 if(!mysqli_select_db($dbc,'union')){
	 	die('not found database :'.mysqli_error($dbc));
	 }
 
	 //."</br>"
?>