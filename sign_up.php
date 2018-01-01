<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<!-- <script type="text/javascript">
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
	</script> -->
	 


</head>
<body>
	<div class="container-fluid">
		<div class="text-center" style="background: gray;padding-top: 5px;padding-bottom: 5px;">
			<h2 style="color: blue;">Sign up free!</h2>
		</div>
		<br><br><br>
		<!-- onsubmit="return validate()"  -->
		<form name="myForm" id="signUp" action="insert.php" method="post">
			<div class="row">
				<div class="col-md-2">
					<h4>user name:</h4>
				</div>
				<div class="col-md-3">
					<input class="form-control  " type="text" id="userName" name="userName">
				</div>
				<div class="col-md-7">
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-2">
					<h4>choose password:</h4>
				</div>
				<div class="col-md-3">
					<input class="form-control small" id="password" type="password" name="password">
				</div>
				<div class="col-md-7">
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-2">
					<h4>confirm password:</h4>
				</div>
				<div class="col-md-3">
					<input class="form-control small" type="password" name="Cpassword">
				</div>
				<div class="col-md-7">
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-2">
					<h4>age:</h4>
				</div>
				<div class="col-md-3">
					<input class="form-control small" type="text" name="age">
				</div>
				<div class="col-md-7">
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-2">
					<h4>email:</h4>
				</div>
				<div class="col-md-3">
					<input class="form-control small" type="text" name="email">
				</div>
				<div class="col-md-7">
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-2">
					<h4>NIC :</h4>
				</div>
				<div class="col-md-3">
					<input class="form-control small" type="text" name="nic">
				</div>
				<div class="col-md-7">
				</div>
			</div> <!-- row -->
			<br> 
			<div class="row ">
				<div class="col-md-2">
				</div>
				<div class="col-md-3">
					<input class="btn btn-success" type="submit" name="" value="sign-up">
				</div>
				<div class="col-md-7">
				</div>
			</div> <!-- row -->
		</form> <!-- end of form -->
		
	</div> <!-- container -->
	
	<!-- jquery plugins -->
	<script
	  src="http://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous">
	  </script>
	  <!-- jquery plugins for validations -->
	  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"> </script>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			$("#signUp").validate({
 				rules: {
 					userName:{
 						required:true,
 						minlength:4

 					},
 					password:{
 						required:true,
 						minlength:5
 					},
 					Cpassword:{
 						required:true,
 						equalTo:"#password"
 					},
 					age:{
 						required:true,
 						number:true,
 						min:10
 					},
 					email:{
 						required:true,
 						email:true
 					},
 					nic:{
 						required:true,
 						minlength:10
 					}
 				},
 				messages:{
 					userName:{
 						required:"user name is required!",
 	
 					},
 					password:{
 						required:"password is required!",
 						 
 					},
 					Cpassword:{
 						required:"confirm your password!",
 						equalTo:"should be matched above!"
 					},
 					age:{
 						required:"Enter your age!",
 						number:"Enter your real age",
 						min:"should be 18+"
 					},
 					 
 					nic:{
 						 
 						minlength:"Enter the valid NIC number"
 					}
 				}


 			});
 		});


 	</script>	
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
      <!-- Include all compiled plugins (below), or include individual files as needed --> 
      <<!-- script src="js/bootstrap.min.js"></script>  -->
</body>
</html>