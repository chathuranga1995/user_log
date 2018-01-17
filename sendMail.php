<?php include('connect.php'); ?>
<?php
	
	$username=$_POST['username'];
	//echo $username;
	$Que="SELECT password,email from users where userName='$username'";
	$mySql=mysqli_query($dbc,$Que);
	$num=mysqli_num_rows($mySql);
	//echo $num;
	$row = mysqli_fetch_row($mySql);
	if(!$num==0){
		$password=$row[0];
		$email=$row[1];
		echo $password."</br>";
		echo $email;
	}
	$mailSub="recover password of union!!";
	$mailto=$email;
	$mailMsg=$password;

	require 'PHPMailer_5.2.4/class.phpmailer.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 2;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.yahoo.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "dinuka.chathuranga@yahoo.com";
   $mail ->Password = "drck20141995";
   $mail ->SetFrom("dinuka.chathuranga@yahoo.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }


	//header("Location:sign_in1.php");
?>