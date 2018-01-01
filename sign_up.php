<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<script type="text/javascript">
	   <!--
	      // Form validation code will come here.
	      function validate()
	      {
	      
	         if( document.myForm.userName.value == "" )
	         {
	            alert( "Please provide your name!" );
	            document.myForm.userName.focus() ;
	            return false;
	         }
	         
	         if( document.myForm.password.value == "" )
	         {
	            alert( "Please choose password!" );
	            document.myForm.password.focus() ;
	            return false;
	         }

	         if( document.myForm.password.value.length<5 )
	         {
	            alert( "Please choose more strength password!" );
	            document.myForm.password.focus() ;
	            return false;
	         }

	         if( document.myForm.Cpassword.value != document.myForm.password.value )
	         {
	            alert( "Password should be matched!" );
	            document.myForm.Cpassword.focus() ;
	            return false;
	         }

	         if(document.myForm.age.value==""){
	         	alert("Age should be filled!");
	         	document.myForm.age.focus() ;
	         	return false;
	         }

	         if(document.myForm.email.value==""){
	         	alert("email should be filled!");
	         	document.myForm.email.focus() ;
	         	return false;
	         }

	         if(document.myForm.nic.value==""){
	         	alert("NIC should be filled!");
	         	document.myForm.nic.focus() ;
	         	return false;
	         }
 			return true;
	      }
	   //-->
	   function isNumeric(n) {
		    return !isNaN(parseFloat(n)) && isFinite(n);
	   }
	</script>


</head>
<body>
	<div class="container-fluid">
		<div class="text-center" style="background: gray;padding-top: 5px;padding-bottom: 5px;">
			<h2 style="color: blue;">Sign up free!</h2>
		</div>
		<br><br><br>
		<form name="myForm" onsubmit="return validate()" action="insert.php" method="post">
			<div class="row">
				<div class="col-md-2">
					<h4>user name:</h4>
				</div>
				<div class="col-md-2">
					<input class="form-control small" type="text" name="userName">
				</div>
				<div class="col-md-8">
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-2">
					<h4>choose password:</h4>
				</div>
				<div class="col-md-2">
					<input class="form-control small" type="password" name="password">
				</div>
				<div class="col-md-8">
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-2">
					<h4>confirm password:</h4>
				</div>
				<div class="col-md-2">
					<input class="form-control small" type="password" name="Cpassword">
				</div>
				<div class="col-md-8">
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-2">
					<h4>age:</h4>
				</div>
				<div class="col-md-2">
					<input class="form-control small" type="text" name="age">
				</div>
				<div class="col-md-8">
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-2">
					<h4>email:</h4>
				</div>
				<div class="col-md-2">
					<input class="form-control small" type="text" name="email">
				</div>
				<div class="col-md-8">
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-2">
					<h4>NIC :</h4>
				</div>
				<div class="col-md-2">
					<input class="form-control small" type="text" name="nic">
				</div>
				<div class="col-md-8">
				</div>
			</div> <!-- row -->
			<br> 
			<div class="row ">
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
					<input class="btn btn-success" type="submit" name="" value="sign-up">
				</div>
				<div class="col-md-8">
				</div>
			</div> <!-- row -->
		</form> <!-- end of form -->
		
	</div> <!-- container -->
	

	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed --> 
      <script src="js/bootstrap.min.js"></script> 
</body>
</html>