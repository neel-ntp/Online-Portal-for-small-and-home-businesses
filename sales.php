<?php

  session_start();
   $_SESSION['email'];
   $email=$_SESSION['email'] ;
  require 's_header.php';
  require 's_db_key.php';
  $sql="SELECT * FROM buyer where email='$email'";
  $conn = connect_db();
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $name = $row["name"];

  $sl="SELECT * FROM buyer where email='$email'";
  $conn = connect_db();
  $result = $conn->query($sl);
  $row = $result->fetch_assoc();
  $name = $row["name"];

?>
