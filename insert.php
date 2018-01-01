
<?php include('connect.php'); ?>
<?php
	$userName=$_POST['userName'];
	 $password=$_POST['password'];
	 $Cpassword=$_POST['Cpassword'];
	 $age=$_POST['age'];
	 $email=$_POST['email'];
	 $nic=$_POST['nic'];

	 $sqlQuery="INSERT INTO users(userName,password,age,email,nic) VALUES('$userName','$password','$age' ,'$email','$nic')";
 
	 if(!mysqli_query($dbc,$sqlQuery)){
 		echo "Not working! :".mysqli_error($dbc);
 	}else{
 		header("Location:sign_in1.php");
 	}


	 

?>