<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
  body {
    background:#F0FFF0;
    font-family: "Nunito", sans-serif;
    padding: 20%;
    
}
table {
  border-collapse: collapse;
  width: 100%;
}

table, th, td {
  border: 1px solid black;
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  height: 50px;
}
td {
  height: 50px;
  vertical-align: bottom;
}
tr:hover {background-color: #f5f5f5;}
tr:nth-child(even) {background-color: #f2f2f2;}

th {
  background-color: #32546e;
  color: white;
}
<div style="overflow-x:auto;">
</style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the Parent Portal.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, activity, rating, feedback FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Activity</th><th>Rating</th><th>Feedback</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["activity"]. "</td><td> " . $row["rating"]. "</td><td>". $row["feedback"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>