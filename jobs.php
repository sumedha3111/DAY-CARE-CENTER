<?php
if(isset($_POST['submit'])){
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Gender = $_POST['gender'];
	$Age = $_POST['age'];
	$Jobtype = $_POST['JobType'];
	$Refer = $_POST['reference'];
	$Description = $_POST['describe'];

		$to='sumedhamoturi31@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Job Application';
		$message="Name :".$Name."\n"."Email ID:".$Email."\n"."Gender :".$Gender."\n"."Age :".$Age."\n"."Job Type :".$Jobtype."\n"."How were you referred to us? :".$Refer."\n"."Describe yourself :"."\n\n".$Description;
		$headers="From: ".$Email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
 echo "<button onclick= \"location.href='index.html'\">Back to Home</button>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>