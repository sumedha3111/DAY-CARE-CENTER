<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: slogin.php");
    exit;
}
?>
<?php
$Name = $_POST['name'];
$Activity = $_POST['activity'];
$Rating = $_POST['rating'];
$Feedback = $_POST['feedback'];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "staff";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if($conn->connect_error){
    echo "$conn->connect_error";
    
  } else {
    $stmt = $conn->prepare("insert into feedback(name, activity, rating, feedback) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Name, $Activity, $Rating, $Feedback);
    $execval = $stmt->execute();
    echo $execval;
    
  //echo '<script language="javascript">';
  //echo 'alert(Appointment booked succesfully)';  //not showing an alert box.
  //echo '</script>';
    
    
   
    $stmt->close();
    $conn->close();
  }
  
  
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
            font: 14px sans-serif; 
            text-align: center;
    font-family: 'Lato', sans-serif;
    color: #333;
        }
        #title{
    font-weight: 700;
    color:white;
  }
  #description{
    color: white;
  }
  #survey-form{
    max-width:600px;
    margin:auto;
    padding:20px;
    background: #eee;
    border-radius: 5px;
    border:5px solid #666;
  }
  fieldset{
    border:0;
    text-align:left;
    font-size: 1em;
  }
  legend{
    margin-bottom: 10px;
    font-size: 1.2em;
    font-weight: 700;
  }
  input[type="text"], input[type="email"], input[type="number"], textarea, select{
        background: rgba(255,255,255,1);
      border: 0;
      border-radius: 4px;
      font-size: 15px;
      margin: 0;
      outline: 0;
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      background-color: #ccc;
      color: #8a97a0;
      -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
      box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
      margin-bottom: 20px;
  }
  label{
    margin-bottom: 10px;
      display: inline-block;
  }
  ul{
    margin-left: -40px;
      margin-top: 0;
  }
  ul li{
    list-style:none;
  }
  textarea {
      font-family: 'Lato', sans-serif;
  }
 
  #submit{
    background-color: #444;
      border-radius: 18px;
      color: white;
      font-size: 1em;
      margin: 10px;
      border: 0px solid;
      padding: 11px 25px;
  }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the Staff Portal.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="slogout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <form action="swelcome.php" method="post" name="form" id="survey-form">
                  <fieldset>
                    <legend>Feedback</legend>
                    <label for="name" id="name-label">* Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Child's Name *" required>
                    <label for="references">Activity</label>
                    <ul id="references">
                      <li><input type="checkbox" name="activity" id="Play Dough" value="1"> 
                        <label for="Play Dough">Play Dough</label> </li>
                      <li><input type="checkbox" name="activity" id="Colour Mixing" value="2"> 
                        <label for="Colour Mixing">Colour Mixing</label> </li>
                      <li><input type="checkbox" name="activity" id="Finger Painting" value="3"> 
                        <label for="Finger Painting">Finger Painting</label> </li>
                      <li><input type="checkbox" name="activity" id="Paper and Glue" value="4"> 
                        <label for="Paper and Glue">Paper and Glue</label> </li>
                      <li><input type="checkbox" name="activity" id="DIY Craft" value="5"> 
                        <label for="DIY Craft">DIY Craft</label> </li>
                    </ul>
                    <label for="number" id="number-label">* Rating</label>
                    <input type="number" name="rating" id="number" min="1" max="5" placeholder="Rating *" required>
                    <label for="skills">Feedback </label>
                    <textarea name="feedback" placeholder=" Feedback"></textarea>
                  </fieldset>
                  <button id="submit" name="submit" type="submit">Submit</button>
                </form>
</body>
</html>