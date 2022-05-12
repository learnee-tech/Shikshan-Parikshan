<?php
session_start();
include("include_pg.php");
include("dbcon.php");




?>

<div class="container" id="enroll" >
   
   <div class="row" >
<br><br>
   
   <div class="col-md-7 "> <br>
       <div class="reg_text animate__animated wow animate__bounceInRight animate__slower wow" style="float:left;">About Shiksha Parikshan</div><br>
       <div class="underline"></div>
       <div class="about_text animate__animated wow animate__bounceInRight animate__slower"><br>Inciderint efficiantur his ad. Eum no molestiae voluptatibus.Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.Inciderint efficiantur his ad.Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.Inciderint efficiantur his ad. </div>
       
   </div>
   
       <div class="col-md-5" id="p">
       <br>
           <div class="reg_block animate__animated wow animate__bounceInLeft animate__slower">
               <div class="reg_text">Registration for<br> School</div>
               <form method="post">
               <div class="form-group">
               
                       <input class="form-control" name="school_nm" style="border-radius:20px;padding:25px;" type="text" placeholder="Ex.: School Name"required>
                   
               </div>
               
               <div class="form-group">
               
               <input class="form-control" name="address" style="border-radius:20px;padding:25px;" type="text" placeholder="Address  "required>
           
       </div>  
       
               
                   
                   <div class="form-group">
               
                       <input class="form-control" name="un" style="border-radius:20px;padding:25px;" type="text" placeholder="Set Username"required>
                   
               </div>  <div class="form-group">
               
                       <input class="form-control" name="pass" style="border-radius:20px;padding:25px;" type="text" placeholder="Set Password"required>
                   
               </div>  
               
       
           
               <button type="submit" class="btn btn-primary submit_btn " name="submit_reg">Submit</button>
               <button type="button" class="btn btn-primary submit_btn " onclick="fun()" name="login">Log In</button>

               </form>
           
           </div>
           </div>
       </div>
   </div>

<script>

str='<br>           <div class="reg_block ">                    <div class="reg_text">Login<br><br></div>                    <form action="" method="post">                    <div class="form-group">           <div class="form-group">                                             <input class="form-control" style="border-radius:20px;padding:25px;" type="text" name="uname" placeholder="Username"required></div><div class="form-group">                                                                                              <input class="form-control" style="border-radius:20px;padding:25px;" type="password" name="pass" placeholder="Password"required></div>                                                             <br>                                                  <button type="submit" class="btn btn-primary submit_btn " name="submit_log">Submit</button>';
   
function fun(){
        
        document.getElementById("p").innerHTML=str;
        
        }

        </script>

<?php
if(isset($_POST['submit_log'])){
    echo "ji";
    $un=$_POST['uname'];
    $pass=$_POST['pass'];
    
    $query="select * from school_reg where username='".$un."' and password='".$pass."'";
    
    $res=$con->query($query);
            if(mysqli_num_rows($res)>0){
             
                    $cur=$res->fetch_assoc();
                    $_SESSION['username']=$un; 
                    $_SESSION['school_id']=$cur['Id'];
                echo '<script>
                
               window.location="dashboard.php";
                
                </script>';
            }else{
                echo '
                <script>alert("Incorrect Username or Password");</script>
                
                ';
            }

    
}






if(isset($_POST['submit_reg'])){
$nm=$_POST['school_nm'];
$ad=$_POST['address'];
$username=$_POST['un'];
$pass=($_POST['pass']);
$sql1 = "select count(*) from school_reg where username ='".$username."'";

if(true){

$query= "INSERT INTO `school_reg`( `school_nm`,`address` ,`username`, `password`) VALUES ('$nm','$ad','$username','$pass')";
    
if($con->query($query)){
    echo '<script>
   
    
        alert("Registeration Successful please login. ");
        
   </script>';
}


}
else{

    echo '<script>
   
    
        alert("Registeration already exist ");
        
   </script>';

}
}

?>