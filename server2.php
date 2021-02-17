<?php
session_start ();
if(isset($_POST['next1'])){
  $_SESSION['twitter'] =$_POST['twitter'];
  $_SESSION['facebook'] =$_POST['facebook'];
  $_SESSION['pass'] =$_POST['pass'];
 
 }
 else if(isset($_POST['Next2'])){
 $_SESSION['status'] = $_POST['status'];
 $_SESSION['study'] = $_POST['study'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
*{box-sizing:border-box; margin:0; padding:0; }
body{font-family: 'Open Sans', sans-serif; color:#333; font-size:14px; background-color:#dadada; padding:100px;}
</style>
<body>
<h4>Here is what you have entered.</h4><br/>
<p>Name: <?php echo $_SESSION['email']; ?> </p>
<p>State issued Divorce Id: <?php echo $_SESSION['pass']; ?></p>
<p>Date Of Birth: <?php echo $_SESSION['twitter'];?></p>
<p>Nationality: <?php echo $_SESSION['facebook'];?></p>
<p>Marital Status: <?php echo $_SESSION['status'];?></p>
<p>Highest Education: <?php echo $_SESSION['study'];?></p>
</body>
</html>