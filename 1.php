

<?php
include("navbar.php");
include("dbcon.php");

$arr=array(100);
$query="select Id from questions";
    $res=$con->query($query);
    $i=0;
    while($cur=$res->fetch_assoc()){
        $arr[$i]=$cur['Id'];
        $i++;
}
    
?>

<div class="container">
<br><br><br>
<?php

if(isset($_GET['qid'])){
    $qid=intval($_GET['qid']);
    $query="select * from questions where Id='".$arr[$qid]."'";
    $res=$con->query($query);
    $cur=$res->fetch_assoc();
    echo "p";
  echo '<form action="ch.php?q='.($qid).'?q1="quiz" method="GET"  class="form-horizontal">
  <input type="hidden" name="value" value='.$qid.'>
  
  
';echo $cur['question'].'

<br>

<div class="form-group p-4">


<div class="custom-control p-2 custom-radio">
      <input type="radio" id="customRadio1" name="opt" class="custom-control-input"  value="'.$cur['w1'].'">

  <label class="custom-control-label" for="customRadio1">'.$cur['opt1'].'</label>
</div>

<div class="custom-control p-2 custom-radio">
      <input type="radio" id="customRadio2" name="opt" class="custom-control-input"  value="'.$cur['w2'].'">

  <label class="custom-control-label " for="customRadio2">'.$cur['opt2'].'</label>
</div>


<div class="custom-control p-2 custom-radio">
      <input type="radio" id="customRadio3" name="opt" class="custom-control-input"  value="'.$cur['w3'].'">

  <label class="custom-control-label" for="customRadio3">'.$cur['opt3'].'</label>
</div>


<div class="custom-control p-2 custom-radio">
      <input type="radio" id="customRadio4" name="opt" class="custom-control-input"  value="'.$cur['w4'].'">

  <label class="custom-control-label" for="customRadio4">'.$cur['opt4'].'</label>
</div>



</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-6">
<button type="submit" class="btn  btn-outline-info" name="sub">Submit'.$qid.'</button>
</div>


</form>';



}else{
    
    
    
    
    
    $qid=0;
    
    $query="select * from questions where Id='".$arr[0]."'";
    $res=$con->query($query);
    $cur=$res->fetch_assoc();
echo '<form action="ch.php?q1="quiz"?q=0" method="GET"  class="form-horizontal"><input type="hidden" name="value" value="1">

';echo $cur['question'].'
<button type="submit" name="sub">Submit</button>


</form>';

}
    
    
    ?>