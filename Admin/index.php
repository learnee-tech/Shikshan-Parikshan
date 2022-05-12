<?php

define('TITLE', 'Teacher Portal : : Login');


?>
<!DOCTYPE html>
<html>

<head>

	<!-- START CSS FILES -->

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<!-- Font awsome css -->
	<link rel="stylesheet" type="text/css" href="../css/all.min.css">



	<!-- END CSS FILES -->

	<title><?php echo TITLE; ?></title>
<style>
    
    
    
    </style>
</head>

<body>
	<!-- HEADER ONLINE EXAM MANAGEMENT SYSTEM -->
	<div class="jumbotron" style="margin-bottom: 0; padding: 1rem 1rem;">
		<h1 class="text-center">Shiksha Parikshan (School Portal)</h1>
	</div>

	<div class="container bg">
		<div class="row">
			<div class="col-md-3 ">


			</div>
			<div class="col-md-6" style="margin-top: 20px;">

				<span id="message"></span>
				<div class="card shadow">
					<div class=" card-header">Login Admin</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>Enter Email Address</label>
								<input type="text" name="teacher_email_address" id="teacher_email_address" class="form-control" />
							</div>
							<div class="form-group">
								<label>Enter Password</label>
								<input type="password" name="teacher_password" id="teacher_password" class="form-control" />
							</div><center>
							<div class="form-group">


								<input type="submit" name="teacher_login" id="admin_login" class="btn btn-info" value="Login" />
							</div></center>
						</form>
						<div align="center">
							<a href="#" class="btn ">Forget Password</a>
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-3">


			</div>


		</div>
	</div>











	<!-- START JAVASCRIPT FILES -->

	<!-- jquery js -->
	<script src="../js/jquery.min.js"></script>

	<!-- bootstrap js -->
	<script src="../js/bootstrap.min.js"></script>

	<!-- font awsome js -->
	<script src="../js/all.min.js"></script>


	<!-- END JAVASCRIPT FILES -->
</body>

</html>





<?php
include '../dbcon.php';

if (isset($_POST['teacher_login'])) {
	$teacher_email_address = $_POST['teacher_email_address'];
	$teacher_password = $_POST['teacher_password'];

	$query = "SELECT * FROM `admin_login` WHERE `username`  = '$teacher_email_address' AND `password` = '$teacher_password' ";

	$run = $con->query($query);
	
	$row = $run->fetch_assoc();
	//echo $row['teacher_id'];
	

	if($row > 1)
	{session_start();
		
		$_SESSION['id'] = "rutu";
		$_SESSION['name']= "rutu";
		header('location: dash.php');
		
	}
	else
	{
		echo "Failed";
	}
}

?>



