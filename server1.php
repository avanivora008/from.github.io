<?php
session_start ();
if(isset($_POST['next'])){
  $_SESSION['email'] =$_POST['email'];
  $_SESSION['pass'] =$_POST['pass'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
*{box-sizing:border-box; margin:0; padding:0; }
body{font-family: 'Open Sans', sans-serif; color:#333; font-size:14px; background-color:#dadada; padding:100px;}
/*form styles*/
#msform {
 width: 400px; margin: 50px auto; text-align: center; position: relative;
}
#msform fieldset {
 background: white; border: 0 none; border-radius: 3px;
 padding: 20px;   width: 80%; margin: 0 10%; position: relative;
}
 
#msform input, #msform textarea {
 padding: 15px; border: 1px solid #ccc; border-radius: 3px;
 margin-bottom: 10px; width: 100%;
 box-sizing: border-box;
 color: #2C3E50;
}
 
#msform .action-button {
 width: 100%;
 background: #16a9ff;
 font-weight: bold;
 color: white;
 border: 0 none;
 border-radius: 1px;
 cursor: pointer;
 padding: 10px;
 margin: 10px 0;
}
#msform .action-button:hover, #msform .action-button:focus {
background-color: #0a7cbe;
}
 
.fs-title {
 font-size: 15px;
 text-transform: uppercase;
 color: #2C3E50;
 margin-bottom: 10px;
}
.fs-subtitle {
 font-weight: normal;
 font-size: 13px;
 color: #666;
 margin-bottom: 20px;
}
</style>
<body>
  <form id="msform" action="server3.php" method="post">
    <fieldset>
     <h2 class="fs-title">Social Profiles</h2>
     <h3 class="fs-subtitle">Your presence on the social network</h3>
     <input type="date" name="twitter" placeholder="Date Of birth" />
     <input type="text" name="facebook" placeholder="Nationality" />
     
     <input type="submit" name="next1" class="next action-button" value="Next" />
   </fieldset>
 </form>
</body>
</html>