<?php 
  if($_POST) {
  
  $servername = "localhost";
  $username = "";
  $password = "";
  $database = "";
   
  // Database Connection
  $conn = new mysqli($servername, $username, $password, $database);
  
  // Check if error
  if($conn->connect_error) {
    echo "Connection Error";
  }
  
  // Username & Password
  $user = $_POST["username"];
  $pass = $_POST["password"];
  
  // Sql Query
  $sql = "INSERT INTO register (username, password) VALUES ('$user', '$pass')";
 
  if($conn->query($sql)) {
   echo "Data stored successfully";
  } else {
   echo "Something went wrong";
  }
   
   $conn->close();
  }
?>	
