
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<!--CSS FILE FOR TEXT ANIMATION -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- roboto font -->
<link rel="stylesheet" href="css/robotocondensed.css">
<!-- josefin sons font -->
<link href="css/josefinfont.css" rel="stylesheet">
    
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

<div class="row shadow" style="background-color:white;border:0px solid black;">
    <!-- start row for navbar -->

    <nav class="navbar navbar-expand-sm bg-transparent p-6 col-md-6 col-sm-6 bg-light"> <!-- start 4 column navbar  -->
        <div class="p-4">
            <img src="img/logo_final1.png" width="190px;" height="110px;"></div>
                <h3 class="justify-content-start p-4 text-dark">Career Friend</h3>

       
    </nav> <!-- end 4 column navbar  -->

    
    <div class="col-md-6 col-sm-6">
        <div class="dropdown text-right p-5 ">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo "Welcome " . ucwords($s_name); ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Change Password</a>
                <a class="dropdown-item" name="log_out">
                <form action="" method="post">
                    <button type="submit" name="log_out" class="btn-primary">Logout
                    </button> 
                
                </form>
                </a>
            </div>
        </div>
    </div>
    </div>





    <script>
        function logout() {
            
        <?php
            
            
            ?>
            alert('Logout Successfully');
        }

        function login() {
            alert('Login Successfully !!! Welcome <?php echo ucwords($s_name) ?>');
        }
        
        <?php
    if(isset($_POST['log_out'])){
        
session_start();
session_unset();
session_destroy();
        
        header("location:index.php");
    }
    
    ?>
    </script>


    <!-- START JAVASCRIPT FILES -->

    <!-- jquery js -->
    <script src="js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="js/popper.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>


    <!-- font awsome js -->
    <script src="js/all.min.js"></script>

