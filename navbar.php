<style src="css/bootstrap.min.css"></style>
<style src="css/all.min.css"></style>
<script src="js/all.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font awsome css -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">


<div class="row bg-dark">
    <!-- start row for navbar -->

    <nav class="navbar navbar-expand-sm bg-transparent  col-md-6 col-sm-6 bg-light"> <!-- start 4 column navbar  -->
        
        <h3 class="justify-content-start p-4 text-white">Shiksha Parikshan School Portal</h3>
       
        <ul class="nav nav-pills p-3">
            <li class="nav-item">
                
            </li>
            
        </ul>
    </nav> <!-- end 4 column navbar  -->

    
    <div class="col-md-6 col-sm-6">
        <div class="dropdown text-right p-5 ">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Change Password</a>
                <a class="dropdown-item" onclick="logout()" href="logout_teacher.php">Logout</a>
            </div>
        </div>
    </div>
    </div>





    <script>
        function logout() {
            alert('Logout Successfully');
            
            <?php
        
            
            
            ?>
        }

        function login() {
        }
    </script>