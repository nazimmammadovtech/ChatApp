<?php
  $hostname = "localhost";
  $username = "nazimcoder";
  $password = "211998";
  $dbname = "chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
