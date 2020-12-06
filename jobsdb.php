<?php
$Name = $_POST['name'];
$Email = $_POST['email'];
$Gender = $_POST['gender'];
$Age = $_POST['age'];
$Jobtype = $_POST['JobType'];
$Refer = $_POST['reference'];
$Description = $_POST['describe'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "daycare";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if($conn->connect_error){
    echo "$conn->connect_error";
    
  } else {
    $stmt = $conn->prepare("insert into job_form(name, email, gender, age, jobtype, referredby, description) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $Name, $Email, $Gender, $Age, $Jobtype, $Refer, $Description);
    $execval = $stmt->execute();
    echo $execval;
    
  //echo '<script language="javascript">';
  //echo 'alert(Appointment booked succesfully)';  //not showing an alert box.
  //echo '</script>';
     echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
     echo"<button onclick= \"location.href='index.html'\">Back to Home</button>"; 
    
   
    $stmt->close();
    $conn->close();
  }
  
  
?>