<?php
require_once "config.php";
    $User_Name = $_REQUEST["User_Name"];
    $Age = $_REQUEST["Age"];
    $Address = $_REQUEST["Address"];
    $email = $_REQUEST["email"];
    $uname = $_REQUEST["uname"];
    $pwd = $_REQUEST["pwd"];

$sql = "INSERT INTO user1 (User_Name, Age,Address,email,uname,pwd)
VALUES ('".$User_Name. "', '".$Age. "', '".$Address. "','".$email. "','".$uname. "','".$pwd. "')";
$sql1 = "insert into login (uname,pwd) values('".$uname. "','".$pwd. "');";


if ($conn->query($sql)) {

    $conn->query($sql1);
      
	 
	  ?>
				 <script>
					 alert("Successfully Inserted");
					 window.location = 'index.php';
				 </script>
					<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>