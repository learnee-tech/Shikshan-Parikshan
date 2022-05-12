<?php
session_start();
include("include_pg.php");
include("dbcon.php");
define('TITLE', 'Student Portal : : Login');


?>
<!DOCTYPE html>
<html>

<head>

	<!-- START CSS FILES -->

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Font awsome css -->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">



	<!-- END CSS FILES -->

	<title><?php echo TITLE; ?></title>
<style>
    
    
    
    </style>
</head>

<body>
	<!-- HEADER ONLINE EXAM MANAGEMENT SYSTEM -->
	<div class="jumbotron" style="margin-bottom: 0; padding: 1rem 1rem;">
		<h1 class="text-center">Shiksha Parikshan(Student Portal)</h1>
	</div>

	<div class="container bg">
		<div class="row">
			<div class="col-md-3 ">


			</div>
			<div class="col-md-6" style="margin-top: 20px;">

				<span id="message"></span>
				<div class="card shadow">
					<div class=" card-header">Student Login</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>Enter User Name</label>
								<input type="text" name="uname" id="uname" class="form-control" />
							</div>
							<div class="form-group">
								<label>Enter Password</label>
								<input type="password" name="pass" id="pass" class="form-control" />
							</div><center>
							<div class="form-group">


								<input type="submit" name="admin_login" id="admin_login" class="btn btn-info" value="Login" />
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


	<?php

if(isset($_POST['admin_login'])){
// $emailid=$_POST['uname'];

$username=$_POST['uname'];
$pass=($_POST['pass']);
// $sql1 = "select count(*) from school_registration where User_Name ='".$username."'";

// $res1 = $con->query($sql1);


// if(mysqli_num_rows($res1)==0)

$query="INSERT INTO `student_login`( `User_Name`,`Password`) VALUES ('$username','$pass')";

if($con->query($query)){
    echo '<script>
   
    
        alert("Registeration Successful please login. ");
        
   </script>';
}



else{

    echo '<script>
   
    
        alert("Registeration already exist ");
        
   </script>';

}
}

?>








	<!-- START JAVASCRIPT FILES -->

	<!-- jquery js -->
	<script src="js/jquery.min.js"></script>

	<!-- bootstrap js -->
	<script src="js/bootstrap.min.js"></script>

	<!-- font awsome js -->
	<script src="js/all.min.js"></script>


	<!-- END JAVASCRIPT FILES -->
</body>

</html>





<?php
include 'dbcon.php';

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



