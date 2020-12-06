<?php
$Name = $_POST['name'];
$Relationship = $_POST['relationship'];
$Number = $_POST['num'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$City = $_POST['city'];
$Postalcode = $_POST['postalcode'];
$Employment = $_POST['Employment'];
$Gender = $_POST['gender'];
$Age = $_POST['age'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "daycare";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  $stmt = $conn->prepare("insert into enroll1(name, relationship, number, email, address, city, postalcode, employment, gender, age) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $Name, $Relationship, $Number, $Email, $Address, $City, $Postalcode, $Employment, $Gender, $Age);
    $execval = $stmt->execute();
    echo $execval;

  if($execval){
    header("location: enroll3.html");
  } 
  else {
    echo "$conn->connect_error";   
   $stmt->close();
    $conn->close();
  }
  
  
?>