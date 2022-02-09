<?php
$con = mysqli_connect('localhost','root');
// Create connection

mysqli_select_db($con, 'contact_data');

if($con){
	$name = $_POST['name'];
	$Lname = $_POST['Lname'];
	$mail = $_POST['mail'];
	$subject= $_POST['subject'];
	$msg = $_POST['msg'];

	$query ="insert into contact_page_data (first_name, last_name, email, subject, message) values('$name' , '$Lname', '$mail' , '$subject', '$msg')";

	if(mysqli_query($con, $query)){
	
	echo "<h2>Thank You for contacting us. We will respond you soon. Click here <a href='index.php'>Go-BACK</a> </h2>";
	}else{
		
		echo "issue with code";
	}
}
else{
	echo "No connection";
}

$con->close();




?>


