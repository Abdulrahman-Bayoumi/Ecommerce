<?php 

	include 'connection.php';
	$name = $_POST['f_name'];
	$email = $_POST['f_email'];
	$message = $conn->real_escape_string($_POST['f_message']);
	$date = date("Y-m-d h:m:s");

	$insert_message = "INSERT INTO `messade`(`name`, `email`, `message`, `m_data`)
	VALUES ('$name ','$email','$message','$date')";
	$conn->query($insert_message);
	
	echo "Your Message Send Successfully";

?>