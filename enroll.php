<?php
$Name = $_POST['name'];
$Gender = $_POST['gender'];
$Age = $_POST['age'];
$Address = $_POST['address'];
$City = $_POST['city'];
$Postalcode = $_POST['postalcode'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "daycare";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  $stmt = $conn->prepare("insert into enroll(name, gender, age, address, city, postalcode) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $Name, $Gender, $Age, $Address, $City, $Postalcode);
    $execval = $stmt->execute();
    echo $execval;

  if($execval){
    header("location: enroll1.html");  
  } 
  else {
    echo "$conn->connect_error";   
   $stmt->close();
    $conn->close();
  }
  
  
?>