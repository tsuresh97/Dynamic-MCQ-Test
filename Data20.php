<?php
session_start();
if(!isset($_SESSION['a'])){
    echo "<script>  window.location.assign('index.php'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Quiz</title>  
</head>
<style>
body {background-color: #F0F8FF;} 
</style>
<body>
  <form method="post" action="Data20.php">
<?php
mysql_connect("localhost", "root", "suresh") or
    die("Could not connect: " . mysql_error());
mysql_select_db("sample");
$result = mysql_query("SELECT * FROM question");
$i=0;
$count=0;
date_default_timezone_set('Asia/Calcutta'); 
$startTime = date('m/d/Y h:i:s a', time());
echo "Welcome Mr./Ms.";
echo $_SESSION['a'];
$serail=1;
while ($row = mysql_fetch_array($result, MYSQL_NUM))
{
    $question[$i]=$row[0];
    $op1[$i]=$row[1];
    $op2[$i]=$row[2];
    $op3[$i]=$row[3];
    $op4[$i]=$row[4];
    $op5[$i]=$row[5];
$serail=$i+1;
    echo "<p>$serail.$question[$i]</p>";

    echo "<div class='radio'>
      <label><input type='radio' name='$i' value='$op1[$i]'>$op1[$i]</label>
    </div>"; 
 echo "<div class='radio'>
      <label><input type='radio' name='$i' value='$op2[$i]'>$op2[$i]</label>
    </div>"; 
 echo "<div class='radio'>
      <label><input type='radio' name='$i' value='$op3[$i]'>$op3[$i]</label>
    </div>"; 
 echo "<div class='radio'>
      <label><input type='radio' name='$i' value='$op4[$i]'>$op4[$i]</label>
    </div>"; 

    $i=$i+1;
}
 echo "<input type='submit' name='btn' value='Submit' class='btn btn-success'>";
 $c1=0;
$name=$_SESSION["a"];
$name1=$_SESSION["b"];
    if (isset($_POST['btn']))
    {            
$endTime = date('m/d/Y h:i:s a', time());
$to_time = strtotime($endTime);
$from_time = strtotime($startTime);
echo round(abs($to_time - $from_time) / 60,2). " minute";
$timeConsumed=round(abs($to_time - $from_time) / 60,2). " minute";
            for($j=0;$j<$i;$j++)
{
    $radioVal[$j] = $_POST[$j];
}

            for($j=0;$j<$i;$j++)
{
    if(strcmp($radioVal[$j],$op5[$j])==0)
{
$c1=$c1+1;
}
}
           echo "<script>";
//mysql_connect("localhost","root","suresh")or die("localhost error");
//mysql_select_db("trb")or die("database error");
//$res=mysql_query("insert into result values('$name','$name1',$c1,$timeConsumed)");
                  echo "alert ('Mr./Ms. $name Your Test Mark is  $c1 out of 15');";
               echo "</script>"; 
session_destroy();

    }  

mysql_free_result($result);

?>
  </form>
</body>
</html>
