<!DOCTYPE html>
<html>
<head>

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
	            alert( "Please provide your user name!" );
	            document.myForm.userName.focus() ;
	            return false;
	         }
	         
	         if( document.myForm.password.value == "" )
	         {
	            alert( "Please provide your password!" );
	            document.myForm.password.focus() ;
	            return false;
	         }
 			return true;
	      }
	   //-->
	</script>

	<title></title>
</head>
<body>
	<div class="container-fluid" >
		<div class="row">
			<div class="text-center" style="background: gray;padding-top: 5px;padding-bottom: 5px;">
				<h1>Welcome!</h1>
			</div>
		</div>
		<br><br><br><br>
		<form name="myForm"  onsubmit="return validate()" action="userCheck.php" method="post"> 
		<div class="row"> 
			<div class="col-md-4" >
				
			</div>
			<div class="col-md-2" >
				<h4>User name:</h4>
			</div>
			<div class="col-md-2" >
				<input class="form-control small" type="text" name="userName" placeholder="User name">
			</div>
			<div class="col-md-4">
			</div>
		</div>
		<div class="row"> 
			<div class="col-md-4" >
				
			</div>
			<div class="col-md-2" >
				<h4>Password :</h4>
			</div>
			<div class="col-md-2" >
				<input class="form-control small" type="password" name="password" placeholder="Password">
			</div>
			<div class="col-md-4">
			</div>
		</div>
		<div class="row"> 
			<div class="col-md-6" >
				
			</div>
			 
			<div class="col-md-1" >
				<button class="btn btn-primary">Sign in</button>
			</div>
			</form>
			<form action="sign_up.php">
				<div class="col-md-5">
					<button class="btn btn-success">Sign up</button>
				</div>
			</form>
			
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<a href="">Forgot your password?</a>
			</div>
		</div>
	</div>



	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed --> 
      <script src="js/bootstrap.min.js"></script> 
</body>
</html>