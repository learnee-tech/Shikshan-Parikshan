<!DOCTYPE html>
<?php
session_start();
include("include_pg.php");
include("dbcon.php");

?>
<style>
    .product_cate{
        padding: 20px;
        font-size: 20px;
        font-weight: bold;
    }
    .product_info{
         padding: 20px;
        font-size: 17px;
    }
    .powered{
        color: darkslategray;
        font-size: 17px;
    }
</style>

<head>

<script src="js/wow.min.js"></script>
<style>
    .carousel-item{
    }

    .carousel-caption{
        color: white;
    }
    </style>
</head>
<html>

    
    <div class="col-md-12">
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  style="height:550px;width:100%;" src="img/Untitled.png" alt="First slide">
         <div class="carousel-caption animate__animated wow animate__bounceInLeft animate__slower">
    <h3 class="welcome_text">welcome to e-learning study</h3>
    <div class="big_text">To Transform Your Internal & External Abilities</div>
  </div>
    </div>
    <div class="carousel-item">
      <img style="height:550px;width:100%;" src="img/image1.png" alt="Second slide">
         <div class="carousel-caption animate__animated wow animate__bounceInLeft animate__slower">
    <h3 class="welcome_text">welcome to e-learning study</h3>
    <div class="big_text">Build Conteptional Understanding</div>
  </div>
    </div>
    <div class="carousel-item">
      <img style="height:550px;width:100%;" src="img/commerce.png" alt="Third slide">
         <div class="carousel-caption animate__animated wow animate__bounceInLeft animate__slower">
    <h3 class="welcome_text">welcome to e-learning study</h3>
    <div class="big_text">To Transform Your Internal & External Abilities</div>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    
    </div>
    <div class="container" id="enroll" >
   
        <div class="row" >
     <br><br>
        
        <div class="col-md-7 "> <br>
            <div class="reg_text animate__animated wow animate__bounceInRight animate__slower wow" style="float:left;">About  Career Friend</div><br>
            <div class="underline"></div>
            <div class="about_text animate__animated wow animate__bounceInRight animate__slower"><br>Inciderint efficiantur his ad. Eum no molestiae voluptatibus.Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.Inciderint efficiantur his ad.Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.Inciderint efficiantur his ad. </div>
            
        </div>
        
            <div class="col-md-5" id="p">
            <br>
                <div class="reg_block animate__animated wow animate__bounceInLeft animate__slower">
                    <div class="reg_text">Registration for<br> Enroll</div>
                    <form method="post">
                    <div class="form-group">
                    
                            <input class="form-control" name="name1" style="border-radius:20px;padding:25px;" type="text" placeholder="Ex.: Ruturaj Vasudev"required>
                        
                    </div>
                    
                    <div class="form-group">
                    
                            <input class="form-control" name="mail" style="border-radius:20px;padding:25px;" type="text" placeholder="Email-Id"required>
                        
                    </div>
                    <div class="form-group">
                    
                            <input class="form-control" name="ph" style="border-radius:20px;padding:25px;" type="text" placeholder="Phone Number"required>
                        
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
    
    </div>
    
    
    <div class="container">
    
    <div class="row">
        
        
       
            <div class="col-md-12" id="features">
                 <center><br><br><br>
                <div class="reg_text">Features</div>
            <div class="underline"></div><br></center>
            
              <div class="row">
            <div class="col-md-4 text-center animate__animated wow animate__bounceInRight animate__slower">
                <img src="img/ask.png" width="80px">
                <div class="services_heading">Quality Quesionair</div>
                <div class="service_text">
                Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, gloriatur ius te, id agam omnis evertitur eum
                
                </div>
            
            </div>
             <div class="col-md-4 text-center animate__animated wow animate__bounceInRight animate__slower">
                <img src="img/report.png" width="80px">
                <div class="services_heading">Optimal Report Generation</div>
                <div class="service_text">
                Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, gloriatur ius te, id agam omnis evertitur eum
                
                </div>
            </div>
                 
                  
                  <div class="col-md-4 text-center animate__animated wow animate__bounceInRight animate__slower">
                <img src="img/career-choice.png" width="80px">
                <div class="services_heading">Updated Careers</div>
                <div class="service_text">
                Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, gloriatur ius te, id agam omnis evertitur eum
                
                </div>
            </div> 
                  <div class="row">
                  <div class="col-md-4 text-center animate__animated wow animate__bounceInLeft animate__slower"><br>
                <img src="img/booking.png" width="80px">
                <div class="services_heading">Easy to Use</div>
                <div class="service_text">
                Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, gloriatur ius te, id agam omnis evertitur eum
                
                </div>
            </div> 
                  <div class="col-md-4 text-center animate__animated wow animate__bounceInLeft animate__slower "><br>
                <img src="img/cyber-security.png" width="80px">
                <div class="services_heading">Data Security</div>
                <div class="service_text">
                Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, gloriatur ius te, id agam omnis evertitur eum
                
                </div>
            </div> 
                  <div class="col-md-4 text-center animate__animated wow animate__bounceInLeft animate__slower"><br>
                <img src="img/results.png" width="80px">
                <div class="services_heading">Accurate Career Prediction</div>
                <div class="service_text">
                Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, gloriatur ius te, id agam omnis evertitur eum
                
                </div>
            </div> 
                  </div>
            </div>
            </div>
         
       
    
    
    </div>
        
    </div>
    <div class="row">
        <br><br><br>
        </div>
    
       
            <div class=" know_what_say" id="testimony">
                <div class="center_line">
        <div class="container">
            <div class="row">
        <div class="col-md-6">
                <div class="test_text animate__animated wow animate__bounceInRight animate__slower">Know Our Testimonies</div>
            <div class="p-3">
                <div class="btn btn-danger " style="border-radius:50%;padding:20px;" onclick="previous()"><i class="fas fa-arrow-left "></i> </div>
                <div class="btn btn-danger " style="border-radius:50%;padding:20px;" onclick="previous()"><i class="fas fa-arrow-right "></i> </div>
            </div>
                </div>
        
        <div class="col-md-6 p-3 animate__animated wow animate__bounceInLeft animate__slower">
                <div class="student_say" id="student_sayid">Fift class Vijay Powar build the conteptual understanding of various subjects.Now he is one of the topper Student in class</div><br><br>
                <div class="student_name" id="student_nmid">Ruturaj Vasudev</div>
                <div class="student_location" id="student_loc">Pune</div>
                
                </div>
        
        </div>
            
        </div>
        
        </div>    
        
    </div>
    <div class="bg-light">
                <div class="container">
                
                <div class="row">
                     <div class="col-md-12">
        <center><div id="products" class="explore nimate__animated animate__bounceInLeft animate__slower"><br>Why Us?</div></center>
        </div>
                    <div class="col-md-4 rounded animate__animated wow animate__bounceInRight animate__slower">
                    <br><img src="img/s333.png" width="100%" height="350px">
                    <div class="product_block shadow-sm p-3 mb-5 bg-white rounded">
                        
                        <div class="product_cate p-3">After 12th</div>
                        <div class="product_info">The navbar will stick to the top when you reach its scroll position. The navbar will stick to the top when you reach its scroll position.</div>
                        </div>
                    
                    </div>
                    
                    <div class="col-md-4 rounded animate__animated wow animate__bounceInRight animate__slower">
                    <br><img src="img/cbse.png" width="100%" height="350px">
                    <div class="product_block shadow-sm p-3 mb-5 bg-white rounded">
                        
                        <div class="product_cate p-3">After 10th</div>
                        <div class="product_info">The navbar will stick to the top when you reach its scroll position. The navbar will stick to the top when you reach its scroll position.</div>
                        </div>
                    
                    </div>
                    
                    <div class="col-md-4 rounded animate__animated wow animate__bounceInRight animate__slower ">
                    <br><img src="img/mpsc.png" width="100%" height="350px">
                    <div class="product_block shadow-sm p-3 mb-5 bg-white rounded">
                        
                        <div class="product_cate p-3">Compitetive Exams</div>
                        <div class="product_info">The navbar will stick to the top when you reach its scroll position. The navbar will stick to the top when you reach its scroll position.</div>
                        </div>
                    
                    </div>
                    
                    </div>
                
                
                
                </div>
                
                
    </div>

   <?php

include("footer.php");
?>
 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<script>
        
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
      navbar.classList.add("fixed-top")
  } else {
    navbar.classList.remove("sticky");
            navbar.classList.remove("fixed-top");

  }
}
    
    var student_say=['Fift class Vijay Powar build the conceptual understanding of various subjects.Now he is one of the topper Student in class','Nineth class Roy build the conceptual understanding of compititive exams.Now he is one of the topper Student in class','Tenth CBSE class Vidya Kale build the conteptual understanding of various subjects. Now she is one of the best Student in class'];
    
    var student_nm=['Ruturaj Vasudev','Sumit Khandate','Arpita Khond'];
    var student_loc=['Pune','Solapur','Sangli'];
    var count=0
    
    var say=document.getElementById("student_sayid");
    var nm=document.getElementById("student_nmid");
    var loc=document.getElementById("student_loc");
    
    function next(){
        if(count==2){
            count=0;
        }else{
            count++;
        }
        say.innerHTML=student_say[count];
        nm.innerHTML=student_nm[count];
        loc.innerHTML=student_loc[count];
    }
    
     function previous(){
        if(count==0){
            count=2;
        }else{
            count--;
        }
          say.innerHTML=student_say[count];
        nm.innerHTML=student_nm[count];
                 loc.innerHTML=student_loc[count];

        
    }
    d='dd'
    str='<br>           <div class="reg_block ">                    <div class="reg_text">Login<br><br></div>                    <form action="" method="post">                    <div class="form-group">           <div class="form-group">                                             <input class="form-control" style="border-radius:20px;padding:25px;" type="text" name="uname" placeholder="Username"required></div><div class="form-group">                                                                                              <input class="form-control" style="border-radius:20px;padding:25px;" type="password" name="pass" placeholder="Password"required></div>                                                             <br>                                                  <button type="submit" class="btn btn-primary submit_btn " name="submit_log">Submit</button>';
    
    function fun(){
        
document.getElementById("p").innerHTML=str;

}
</script>
<!--ALL JS FILES FOR NAVigation BAR -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<?php 



    if(isset($_POST['submit_log'])){
    
        $un=$_POST['uname'];
        $pass=$_POST['pass'];
        
        $query="select * from school_reg where username='".$un."' and password='".$pass."'";
        
        $res=$con->query($query);
                if(mysqli_num_rows($res)>0){
                    $cur=$res->fetch_assoc();
                    $_SESSION['username']=$un; 
                    $_SESSION['school_id']=$cur['school_id'];
                   
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
    $nm=$_POST['name1'];
    $phone=$_POST['ph'];
    $mail=$_POST['mail'];
    $username=$_POST['un'];
    $pass=($_POST['pass']);
    
    $query="INSERT INTO `regiseration`( `name`, `phone`, `email`, `username`, `password`) VALUES ('$nm','$phone','$mail','$username','$pass')";
        
    if($con->query($query)){
        echo '<script>
       
        
            alert("Registeration Successful please login. ");
            
       </script>';
    }
    
    
    }
    ?>
</body>
</html>
