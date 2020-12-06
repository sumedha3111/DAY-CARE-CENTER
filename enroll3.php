<?php
$Program = $_POST['reference'];
$Care = $_POST['care'];
$t = $_POST['timepicker'];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "daycare";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  $stmt = $conn->prepare("insert into enroll3(program, carerequired, slot) values(?, ?, ?)");
    $stmt->bind_param("sss", $Program, $Care, $t);
    $execval = $stmt->execute();
    echo $execval;

  if($execval){
    header("location: parent.html");
  } 
  else {
    echo "$conn->connect_error";   
   $stmt->close();
    $conn->close();
  }
  
  
?>