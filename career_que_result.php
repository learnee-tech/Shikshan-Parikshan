
<?php
   session_start();

include("navbar.php");

include("dbcon.php");

$arr=array(5);
$bussiness=$_SESSION['bussiness'];
    
    $civil=$_SESSION['civil'];
    $arts=$_SESSION['humanity'];

    $commerce=$_SESSION['commerce'];
    $tech=$_SESSION['technical'];
    $mgt=$_SESSION['management'];
    
$space=$_SESSION['space'];
$med=$_SESSION['med_sci'];


echo '
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>
<div class="container"><center>Career Analysis</center>
<canvas id="myChart" style="padding:10px;width:100%;height:400px;"></canvas>
    
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
</div>';
?>