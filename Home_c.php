<?php
session_start();


require "config.php";
$sql1 = "SELECT * FROM user1 where uname= '".$_SESSION['uname']."' ";

$exec = mysqli_query($conn,$sql1); 
$fet = mysqli_fetch_array($exec);
	
	?>
<!DOCTYPE html>
<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
      <h1 style="border:2px solid black;background-image: linear-gradient(to right, rgba(31, 14, 214, 0.86), rgba(189, 187, 220, 0.86));">Welcome</h1>
        
        
<div class="wrapper" >
  <div class="container">
   
      <div class="group">
        <label for="" class="Head">User Name:</label>
          <span  ><?php echo $fet['User_Name']; ?></span>
      </div>
  
  <div class="group">
        <label for="" class="Head">Age:</label>
          <span ><?php echo $fet['Age'];?></span>
      </div>
	  <div class="group">
        <label for="" class="Head">Address :</label>
          <span  ><?php echo $fet['Address'];?></span>
      </div>
	  <div class="group">
        <label for="" class="Head">Email :</label>
          <span  ><?php echo $fet['email'];?></span>
      </div>
	  
	  
	  <a href="logout.php" class="fb-login social-login">
      Logout  
    </a>
  </div>
</div>
        
        
       
    
    </body>
</html>