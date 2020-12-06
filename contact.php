<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "daycare";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if($conn->connect_error){
    echo "$conn->connect_error";
    
  } else {
    $stmt = $conn->prepare("insert into contact_form(name, email, subject, message) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $execval = $stmt->execute();
    echo $execval;
    
  //echo '<script language="javascript">';
  //echo 'alert(Appointment booked succesfully)';  //not showing an alert box.
  //echo '</script>';
     echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
     echo( "<button onclick= \"location.href='index.html'\">Back to Home</button>"); 
    
   
    $stmt->close();
    $conn->close();
  }
  
  
?>