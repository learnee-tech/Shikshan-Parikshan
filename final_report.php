<style>


.text{
text-align: justify;
    }
    
    .print{
        padding: 15px;
        text-align: right;
    }

</style>

<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
    
    echo '<script>
    
    alert("please Login");
    
    </script>';
}
$s_name=$_SESSION['username'];


include("Admin/user_navbar.php");

include("dbcon.php");
?>
<div class="container-fluid">
<div class="print">
    <button class="btn btn-primary btn-outline-info" onclick="printFunction()">Print Report</button>​
    </div>
    <script>
      function printFunction() { 
        window.print(); 
      }
    </script>

<div class="row">
    <div class="col-md-12">
    <center>
        
        
        <b><h2><br>Your Detail Report is here..!<br>_____</h2></b>
        </center>
    
    
    </div>
    
    
    </div>
<div class="row">
    <div class="col-md-6">

<?php

$v1=$_SESSION['realistic'];
$v2=$_SESSION['social'];
$v3= $_SESSION['enterprising'];
$v4= $_SESSION['conventional'];
        
        
        

echo '
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>

<canvas id="myChart1" style="width:1050px"></canvas>

<script>

var xValues = ["Realistic", "Social", "Enterprising", "Conventional"];
var yValues = ['.$v1.','.$v2.','.$v3.','.$v4.'];
var barColors = [
  "#b91d47",
  "#1e7145",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart1", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Personality Analysis"
    }
  }
});
</script>
</div>
';
?>
        
        
        <div class="col-md-6 text">
        
        <h4>Realistic</h4><p>A realistic personality type enjoys using their hands and eyes to explore the world and accomplish things. This individual likes doing outdoor, mechanical and physical activities and occupations.</p>
        
            
            <h4>Social</h4><p>Social behavior is behavior among two or more organisms within the same species, and encompasses any behavior in which one member affects the other. This is due to an interactionamong those members. </p>
        
            <h4>Enterprising</h4><p>A social enterprise or social business is defined as a business with specific social objectives that serve its primary purpose. Social enterprises seek to maximize profits while maximizing benefits to society and the environment.</p>
        
            
            <h4>Conventional</h4><p>Conventional human behavior is quiet, careful, responsible, well organized and task oriented.</p>
        
        <br><br>
        </div>
                
        <?php
        
        
        $arr=array(5);
$bussiness=$_SESSION['bussiness']+1;
    
    $civil=$_SESSION['civil']+1;
    $arts=$_SESSION['humanity']+1;

    $commerce=$_SESSION['commerce']+1;
    $tech=$_SESSION['technical']+1;
    $mgt=$_SESSION['management']+1;
    
$space=$_SESSION['space']+1;
$med=$_SESSION['med_sci']+1;
echo '

<head>
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Career Analysis",
        fontFamily: "Impact",
        fontWeight: "normal"
      },

      legend:{
        verticalAlign: "bottom",
        horizontalAlign: "center"
      },
      data: [
      {
    startAngle: 15,
       indexLabelFontSize: 20,
       indexLabelFontFamily: "Garamond",
       indexLabelFontColor: "darkgrey",
       indexLabelLineColor: "darkgrey",
       indexLabelPlacement: "outside",
       type: "doughnut",
       showInLegend: true,
       dataPoints: [
       {  y: '.$commerce.', legendText:"Commerce '.$commerce.'%", indexLabel: "Commerce '.$commerce.'%" },
       {  y: '.$tech.', legendText:"Technical '.$tech.'%", indexLabel: "Technical '.$tech.'%" },
       {  y: '.$med.', legendText:"Medical Science '.$med.'%", indexLabel: "Medical Science '.$commerce.'%" },
       {  y: '.$space.', legendText:"Space Technology '.$space.'%", indexLabel: "Space Technology '.$space.'%" },
       {  y: '.$mgt.', legendText:"Management '.$mgt.'%", indexLabel: "Management '.$mgt.'%" },
       {  y: '.$arts.', legendText:"Humanity Arts '.$arts.'%", indexLabel: "Humanity Arts '.$arts.'%" },
       {  y: '.$civil.', legendText:"Civil Services '.$civil.'%", indexLabel: "Civil Services '.$civil.'%" },
       {  y: '.$bussiness.', legendText:"Bussiness '.$bussiness.'%", indexLabel: "Bussiness '.$bussiness.'%" }
       ]
     }
     ]
   });

    chart.render();
  }
  </script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
  <body>
  <div class="col-md-12">
    <div id="chartContainer" style="height: 600px; width: 1400px">
    </div>
  
</div>
';

        
$total=$bussiness+$civil+$arts+$commerce+$tech+$mgt+$space+$med;
    
        $bussiness=(($_SESSION['bussiness']/$total)*100)+$v3;
    
    $civil=(($_SESSION['civil']/$total)*100)+$v2;
    $arts=(($_SESSION['humanity']/$total)*100)+$v2;

    $commerce=(($_SESSION['commerce']/$total)*100)+$v4;
    $tech=(($_SESSION['technical']/$total)*100)+$v1;
    $mgt=(($_SESSION['management']/$total)*100)+$v4;
    
$space=(($_SESSION['space']/$total)*100)+$v1;
$med=(($_SESSION['med_sci']/$total)*100)+$v2;

echo '


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<div class="container"><center><h4><br><br>Overall Career Analysis</h4><br>______</center>
<canvas id="myChart" style="padding:10px;width:90%;height:400px;"></canvas>
    
    <script style="font-size:40px;">
var xValues = ["Bussiness", "Civil Services", "Humanity","Commerce","Technical","Management","Medical Science","Space"];
var yValues = ['.$bussiness.','.$civil.','.$arts.','.$commerce.','.$tech.','.$mgt.','.$med.','.$space.'];
var barColors = ["green","orange","brown","red","blue","grey","black","pink"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: ""
    }
  }
});
</script>
</div>





</body>
</html>

';
        $un=$_SESSION['username'];
        
        $query="select * from regiseration where username='".$un."'";
                $res=$con->query($query);
$cur=$res->fetch_assoc();
        
        $uid=$cur['id'];
        
        $query="select * from career_result where user_id='".$uid."'";
                $res=$con->query($query);
        
                        if(mysqli_num_rows($res)<0){

        $query="INSERT INTO `career_result`(`user_id`, `realistic`, `social`, `conventional`, `enterprising`, `space`, `technical`, `arts`, `commerce`, `medical`, `civil`, `mgt`, `bussiness`) VALUES ('$uid','$v1','$v2','$v4','$v3','$space','$tech','$arts','$commerce','$med','$civil','$mgt','$bussiness');";
            $con->query($query);
                        }
?>
        
    </div></div>
</div><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center><b><h4>Various Careers </h4>______<br><br></b></center>

        </div>
        <div class="row">
        <div class="col-md-4">
        <div class="card" style="width: 100%;">
  <img class="card-img-top" src="img/enginerr.png" style="height:250px;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Technical</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Diploma(2 Years/ 3 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">I.T.I.</li>

  </ul>
  
</div>
        </div>
        
        
        
        <div class="col-md-4">
        <div class="card" style="width: 100%;">
  <img class="card-img-top" src="img/civil.jpeg" style="height:250px;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Civil Services</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Diploma(2 Years/ 3 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">I.T.I.</li>

  </ul>
  
</div>
        </div>
        
        
        
        
        <div class="col-md-4">
        <div class="card" style="width: 100%;">
  <img class="card-img-top" src="img/humanity.png" style="height:250px;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Humanity Arts</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Diploma(2 Years/ 3 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">I.T.I.</li>

  </ul>
  
</div>
        </div>
        
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-4">
        <div class="card" style="width: 100%;">
  <img class="card-img-top" src="img/med.png" style="height:250px;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Medical Science</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Diploma(2 Years/ 3 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">I.T.I.</li>

  </ul>
  
</div>
        </div>
        
        
        
        <div class="col-md-4">
        <div class="card" style="width: 100%;">
  <img class="card-img-top" src="img/space.png" style="height:250px;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Space Technology</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Diploma(2 Years/ 3 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">I.T.I.</li>

  </ul>
  
</div>
        </div>
        
        
        
        
        <div class="col-md-4">
        <div class="card" style="width: 100%;">
  <img class="card-img-top" src="img/mgt.png" style="height:250px;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Management</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Diploma(2 Years/ 3 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">I.T.I.</li>

  </ul>
  
</div>
        </div>
        
    </div>
    <br><br>
    
    <div class="row">
        <div class="col-md-4">
        <div class="card" style="width: 100%;">
  <img class="card-img-top" src="img/commerce.png" style="height:250px;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Commerce</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Diploma(2 Years/ 3 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">I.T.I.</li>

  </ul>
  
</div>
        </div>
        
        
        
        <div class="col-md-4">
        <div class="card" style="width: 100%;">
  <img class="card-img-top" src="img/bussiness.png" style="height:250px;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Bussiness</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Diploma(2 Years/ 3 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">B.Tech(4 Years)</li>
    <li class="list-group-item">I.T.I.</li>

  </ul>
  
</div>
        </div>
        
        
        
       
        
    </div>
    </div>
</div>

        
        
<!--ALL JS FILES FOR NAVigation BAR -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
    <?php echo'l';
        include("footer.php");
        
        ?>