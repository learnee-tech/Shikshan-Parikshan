

<?php
   session_start();

include("navbar.php");
include("dbcon.php");

$arr=array(5);

$v1=$_SESSION['realistic'];
$v2=$_SESSION['social'];
$v3= $_SESSION['enterprising'];
$v4= $_SESSION['conventional'];

echo '
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:900px"></canvas>

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

new Chart("myChart", {
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

</body>
</html>

';
?>