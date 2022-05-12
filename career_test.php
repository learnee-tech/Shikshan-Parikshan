

<?php
session_start();
$s_name=$_SESSION['username'];
include("Admin/user_navbar.php");
include("dbcon.php");
?>
<style>
    form{
        border: 2px solid black;
        padding: 15px;
        border-radius: 10px;
    }
    .p4{
        font-size: 17px;
        padding: 15px;
    }
    
    input.ch{
           width: 50px;
           height: 17px;
       }
    .btn{
        text-align: center;
        color: darkolivegreen;
    }
    radio{
        padding: 15px;
        
    }

</style>
<div class="container">
<div class="row">
    <div class="col-md-2"></div>

    <div class="col-md-8">

<?php
$arr=array(100);
$arr2=array(100);
$query="select Id from career_que where weightage='0';";
    $res=$con->query($query);
    $i=0;
    while($cur=$res->fetch_assoc()){
        $arr[$i]=$cur['Id'];
        
        $i++;
        
}

  
        
              

        




function part2(){
     $query="select Id from career_que where weightage='1';";
    $con= new mysqli('localhost','root','','career_guidance')or die("Could not connect to mysql".mysqli_error($con));

    $res=$con->query($query);
    $i=0;
    while($cur=$res->fetch_assoc()){
        $arr2[$i]=$cur['Id'];
        
        $i++;}
    //fetch array of 2 opt
    
 $_SESSION['p3'] = 2;
 $qid=0;
       // unset($_GET['qid']);

    $query="select * from career_que where Id='".$arr2[0]."'";
    $res=$con->query($query);
    $cur=$res->fetch_assoc();
echo '<form action="ch1.php?q1="quiz"?q=0" method="GET"  class="form-horizontal">
<input type="hidden" name="value" value="0"><br>
<div class="card" style="background-color:#f9fb9f;"><br>&emsp;

';echo $cur['question'].'
<br><br>
</div>
<div class="form-group p-4">


<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="radio" required id="customRadio1" name="opt" class="custom-control-input"  value="'.$cur['w1'].'">

  <label class="custom-control-label" for="customRadio1">'.$cur['opt1'].'</label>
</div></div>

<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="radio" required id="customRadio2" name="opt" class="custom-control-input"  value="'.$cur['w2'].'">

  <label class="custom-control-label " for="customRadio2">'.$cur['opt2'].'</label>
</div>
</div>

</div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<button type="submit" class="btn p-2 btn-block btn-outline-info" name="sub">Submit</button>
</div>


</form>';


    
}
if ($_SESSION['p3']==2) {
   $query="select Id from career_que where weightage='1';";
    $con= new mysqli('localhost','root','','career_guidance')or die("Could not connect to mysql".mysqli_error($con));

    $res=$con->query($query);
    $i=0;
    while($cur=$res->fetch_assoc()){
        $arr2[$i]=$cur['Id'];
        
        $i++;
    }
    $qid=intval($_GET['qid']);
    
   if($arr2[$qid]==""){
      
$_SESSION['p3']=3;       
       header("location:career_test.php");
   }
    $query="select * from career_que where Id='".$arr2[$qid]."'";
    $res=$con->query($query);
    $cur=$res->fetch_assoc();
  echo '<br><form action="ch1.php?q='.($qid).'?q1="quiz" method="GET"  class="form-horizontal">
  <input type="hidden" name="value" value='.$qid.'>
  <br>
    
  <div class="card" style="background-color:#f9fb9f;"><br>&emsp;

';echo $cur['question'].'

<br><br></div><br>

<div class="form-group p-4">


<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="radio" required id="customRadio1" name="opt" class="custom-control-input"  value="'.$cur['w1'].'">

  <label class="custom-control-label" for="customRadio1">'.$cur['opt1'].'</label>
</div>
</div>
<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="radio" required id="customRadio2" name="opt" class="custom-control-input"  value="'.$cur['w2'].'">

  <label class="custom-control-label " for="customRadio2">'.$cur['opt2'].'</label>
</div>
</div>

</div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<button type="submit" class="btn  btn-block btn-outline-info" name="sub">Submit</button>
</div>


</form>';




   
    
    
        
    
    
}
    
?>

<br><br><br>
<?php
if($_SESSION['p3']==1){
    
if(isset($_GET['qid'])){
    
    $qid=intval($_GET['qid']);
    
    
    if($qid==$i){
        part2();
    }else{
    
    $query="select * from career_que where Id='".$arr[$qid]."'";
    $res=$con->query($query);
    $cur=$res->fetch_assoc();
  echo '<form action="ch1.php?q='.($qid).'?q1="quiz" method="GET"  class="form-horizontal">
  <input type="hidden" name="value" value='.$qid.'>
  
  <div class="card" style="background-color:#f9fb9f;"><br>&emsp;

';echo $cur['question'].'

<br><br></div><br>
<div class="form-group p-4">


<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
    
      <input type="radio" required id="customRadio1" name="opt" class="custom-control-input"  value="'.$cur['w1'].'">

  <label class="custom-control-label" for="customRadio1">'.$cur['opt1'].'</label>
</div>
</div>
<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="radio" required id="customRadio2" name="opt" class="custom-control-input"  value="'.$cur['w2'].'">

  <label class="custom-control-label " for="customRadio2">'.$cur['opt2'].'</label>
</div>
</div>

<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="radio" required id="customRadio3" name="opt" class="custom-control-input"  value="'.$cur['w3'].'">

  <label class="custom-control-label" for="customRadio3">'.$cur['opt3'].'</label>
</div>
</div>


<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="radio" required id="customRadio4" name="opt" class="custom-control-input"  value="'.$cur['w4'].'">

  <label class="custom-control-label" for="customRadio4">'.$cur['opt4'].'</label>
</div>

</div>

</div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<button type="submit" class="btn btn-block p-2 btn-outline-info" name="sub">Submit</button>
</div>


</form>';}



}
    else{
    
    
    
    
    
    $qid=0;
    
    $query="select * from career_que where Id='".$arr[0]."'";
    $res=$con->query($query);
    $cur=$res->fetch_assoc();
echo '<form action="ch1.php?q1="quiz"?q=0" method="GET"  class="form-horizontal"><input type="hidden" name="value" value="0">
  <div class="card" style="background-color:#f9fb9f;"><br>&emsp;

';echo $cur['question'].'

<br>
<br></div>
<div class="form-group p-4">


<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
    
      <input type="radio" required id="customRadio1" name="opt" class="custom-control-input"  value="'.$cur['w1'].'">

  <label class="custom-control-label" for="customRadio1">'.$cur['opt1'].'</label>
</div>
</div>
<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="radio" required id="customRadio2" name="opt" class="custom-control-input"  value="'.$cur['w2'].'">

  <label class="custom-control-label " for="customRadio2">'.$cur['opt2'].'</label>
</div>
</div>

<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="radio" required id="customRadio3" name="opt" class="custom-control-input"  value="'.$cur['w3'].'">

  <label class="custom-control-label" for="customRadio3">'.$cur['opt3'].'</label>
</div>
</div>


<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="radio" required id="customRadio4" name="opt" class="custom-control-input"  value="'.$cur['w4'].'">

  <label class="custom-control-label" for="customRadio4">'.$cur['opt4'].'</label>
</div>

</div>

</div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<button type="submit" class="btn btn-block btn-outline-info" name="sub">Submit</button>
</div>


</form>';}

}
        
       
if($_SESSION['p3']==3){
    
    echo '<form action="ch1.php" method="GET"  class="form-horizontal"><input type="hidden" name="value" value="0">
  <div class="card" style="background-color:#f9fb9f;"><br>&emsp;

Select Your hobbies:

<br>
<br></div>
<div class="form-group p-4 p4">


<div class="p-2">
<div class="custom-control  class="card" style="background-color:#;"  custom-radio">



<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
    <input type="checkbox" class="ch"  value="tech">Repairing Devices
</div>
</div>
<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="checkbox" class="ch" name="civil">Helping People
</div>
</div>


<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="checkbox" class="ch" name="mgt">Serving People
</div>
</div>


<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="checkbox" class="ch" name="med_sci">Taking Care of people
</div>
</div>


<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="checkbox" class="ch" name="humanity">Visiting Historical Places</div>
</div>


<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="checkbox" class="ch" name="space">Coloring Space Picture</div>

</div>

<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="checkbox" class="ch" name="commerce">Drawing Graphs</div>

</div>

<div class="custom-control  class="card" style="background-color:#;"  custom-radio">

<div class="custom-control p-2 class="card" style="background-color:#;"  custom-radio">
      <input type="checkbox" class="ch" name="bussiness">Thinking Bussiness ideas</div>

</div>

</div>
</div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<button type="submit" class="btn btn-block btn-outline-info" name="final_submit">Submit</button>
</div>


</form>';
    
}
 
        
        //header("location:dashboard.php");
    ?>