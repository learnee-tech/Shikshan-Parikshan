<head>
    <head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
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
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: 'Nunito', sans-serif;
}

.header1 {
  background-color: #f1f1f1;
  
 
}

#navbar {
  overflow: hidden;
  background-color: #333;
   
}

#navbar a {
  float: left;
  display: block;
  color: black;
     font-size: 18px;
  text-align: center;
  padding: 5px 26px;
  text-decoration: none;

}

#navbar a:hover {
 border-bottom: 5px solid red;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
    
      .underline{
         
         padding: 10;
          border-bottom: 4px solid black;
          width: 35px;
      }
    
    
    
    
    
    ul{
        
        padding: 0px 20px;
        overflow:hidden;
        list-style-type: none;
        margin:0;
    }
    
    li{
        color: black;
        font-size:18px;
        float:left;
    }
    .nav_block{
        padding: 15px 20px;
        width:100%;
    }
    li img{
                padding: 0px 10px;

    }
    li a{
        display:block;
        padding: 10px 20px;
        text-align: center;
        color:black;
        text-decoration: none;
    }
    
    li a:hover{
        color:red;
    }
    
    .btn_block{
        float: right;
        
            }
    .btn1{
        background-color: #fd1d1d;
        border-radius: 40px;
        padding: 10px 25px;
        font-size: 18px;
        
    }


.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 30px;
  color: rgb(180,58,173);
color: linear-gradient(90deg, rgba(180,58,173,1) 0%, rgba(253,29,29,1) 57%);

  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 25px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
    
    .btn_design{
        border-radius: 25px;
        padding:15px 50px;
        color: white;
        
    }
    .details{
        color: black;
        font-size: 17px;
        padding: 15px;
        
        
    }
    .welcome_text{
        text-transform: capitalize;
        color: solid black;
        
    }
    .big_text{
        filter: alpha(opacity=100);
        color: black;
        font-weight: bold;
        font-size: 70px;
    }
    .reg_block{
        border-radius: 40px;
        background-color: white;
        padding: 30px;
        padding-bottom: 0px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 100%;
        height: 100%;
       
        
    }
    .reg_text{
        font-size: 30px;
        color: black;
        font-weight: bold;
    }
    .services_heading{
        font-size: 22px;
        font-weight: bold;
        color: #1092e6;
    }
    .about_text{
        font-size:20px;
        color: darkslategray;
        text-align: justify;
        padding-right: 30px;
    }
    .submit_btn{
     
        color: white;
         padding:15px 30px;
        border-radius: 25px;
        
    } .submit_btn:hover{
             color: black;
    }
    
    .service_text{
        font-size: 15px;
        color: darkslategray;
    }
    .explore{
        text-transform: capitalize;
        font-weight: bold;
        font-size: 45px;
    }
    
    .know_what_say{
        width:100%;
        padding: 40px;
        background-color: #1092e6;
        
        
    }
  
    
    .student_name{
        font-size: 25px;
        font-weight: bold;
        color: white;
    }.student_say{
        font-size: 25px;
        color: white;
    }
    .test_text{
        font-weight: 800;
        font-size: 55px;
        color: white;
    }
    .student_location{
        font-size: 20px;
        font-style: italic;
        color:white;
    }
</style>
    
</head>
<body>
 <div class="red header1" id="top_part">
    <!--
        <div class="container">
        <div class="details">
            <i style="color:blue" class="fas fa-phone-alt"></i>&emsp;1234567890&emsp;&emsp;|&emsp;&emsp;
            <i style="color:blue" class="far fa-envelope"></i>&emsp;abcxyzxyz@abcabc.com
            
            <div style="float:right;">Terms and Condition</div>
            </div>
                
            <div class="row " style="margin:auto;">
                
                <div class="col-md-12 col-sm-12 text-center">
                
                    <h2 class="text-danger">Career Friend</h2>
                    <div class="underline" style="margin:auto"></div>
                </div>
            </div>
        
        
        </div>
            
    
    </div>
 
   
<div id="navbar" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

<nav class="navbar-fixed navbar navbar-expand-lg   lighten-1" style=" box-shadow:10px 10px;background-color:white;border-bottom:2px solid white;padding:0px 50px;">
  
    
     <a class="navbar-brand " href="#" style="font-size:20px;padding-right:80px;"><img src="img/logo_final1.png" height="120px"></a>
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" onclick="myFunction1(this)"  aria-expanded="false" aria-label="Toggle navigation">

      <i class="fa fas fa-bars" value="1" id="d2" style="color:blue;" ></i>
      <input type="hidden" value="1" id="d1">
      
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="demo3.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#features">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#products">Why Us?</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#testimony">Testimony</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#enroll">Contact Us</a>
      </li>
       
  </ul>
      <div class="col-md-3">
      
          <a class="nav-link" href="#enroll"><div class="btn btn-primary btn_design" >Enroll</div></a>
      
      </div>
     
    </div>
      
</nav>
    </div>
     -->