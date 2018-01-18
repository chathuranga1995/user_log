
<?php include('connect.php'); ?>

<?php
	$userName=$_POST['userName'];
	$password=$_POST['password'];
	$Que="SELECT password from users where userName='$userName'";

	$mySql=mysqli_query($dbc,$Que);
	$num=mysqli_num_rows($mySql);
	//echo $num;
	$row = mysqli_fetch_row($mySql);
	if(!$num==0){
		 //echo $row[0];
		if($password==$row[0]){
			setcookie('userName',$userName,time()+60*60*24*7);
			session_start();
			$_SESSION['userName']=$userName;
			header("Location:logged_in.php");
		}else{
 
			header("Location:sign_in1.php");
		}
	}else{
		header("Location:sign_in1.php");
	}

?>