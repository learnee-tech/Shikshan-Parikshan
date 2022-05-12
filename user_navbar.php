

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font awsome css -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

<?php
session_start();
if(!isset($_SESSION['username'])){
    echo '<script>
    alert("Please Login");
    
    </script>';
 header("location:index.php");
}else{
    $s_name=$_SESSION['username'];
}


?>
<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>

</html>


    <script>
        function logout() {
            alert('Logout Successfully');
        }

        function login() {
            alert('Login Successfully !!! Welcome <?php echo ucwords($s_name) ?>');
        }
    </script>
    
    
    <style src="css/all.min.css"></style>
<script src="js/all.min.js"></script>
<script src="js/jquery.js"></script>