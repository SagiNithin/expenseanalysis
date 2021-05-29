<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){

   $Year=$_POST['Year'];
   $Month=$_POST['Month'];
   $Category=$_POST['category'];
   $Expense=$_POST['num'];
    
    }

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    
      $sql = "INSERT INTO expensetable (Year,Month,Category,Expense)
      
      VALUES ('$Year','$Month','$Category','$Expense')";


if ($conn->query($sql) === TRUE) {
    echo "<h1>Successfully Added</h1>";
  
   



    
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
    




?>