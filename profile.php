
<?php include('connect.php'); ?>
 <?php 
	$msg="";
	if(isset($_POST['upload'])){
		// path to store the image
		$target="images/".basename($_FILES['image']['name']);
		$image=$_FILES['image']['name'];

		$sql="UPDATE users SET image='$image' where userName='Dinuka'";
		$mySql=mysqli_query($dbc,$sql);
		if (!$mySql) {
			echo "wtffffffffffff!!";
		}
		// move image to images folder
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$msg="uploaded and moved the image";
		}else{
			$msg="uploading unsuccesseed!!";
		}

	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
	<div class="container-fluid">
	<?php include('navbar.php'); ?>
		<form name="" method="post" enctype="multipart/form-data" action="profile.php">
			<div class="row">
				<div class="col-md-7">
					
				</div>
				<div class="col-md-2">
					<h4>insert new picture:</h4>
				</div>
				<div class="col-md-3">
					<input class="file" type="file" name="image" data-show-preview="false">
				</div>
				
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-9">
					
				</div>
				<div class="col-md-3">
					<button class="btn btn-success" name="upload">upload</button>
				</div>
			</div>
		</form>

	</div>
</body>
</html>