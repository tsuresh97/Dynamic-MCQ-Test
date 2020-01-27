<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MCQ Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

body {background-color: #FFE4C4;}
</style>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
  <p>Enter Your Data to start test.</p>
  <form method=post action=index.php>
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="usr1" required placeholher="Enter Your Name">
    </div>
    <div class="form-group">
      <label for="pwd">District/City:</label>
      <input type="text" class="form-control" id="pwd" name="usr2" required placeholher="Enter Your District/City">
    </div>
<div class="form-group">
      <label for="pwd">NOTE:</label>
</div>

<div class="form-group">
      <label for="pwd">1. Total 15 Questions</label>
</div>

<div class="form-group">
      <label for="pwd">2. No Negative marks</label>
</div>
   <button type="submit">Take test</button>
  </form>

<?php
$name=$_POST["usr1"];
$name1=$_POST["usr2"];
$_SESSION["a"] = "$name";
$_SESSION["b"] = "$name1";

if($name!="")
{
if($name1!="")
{
header("location:Data20.php");
}
}

?>
</div>

</body>
</html>

