<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gendar'];
	$date = date("Y-m-d");
	
	 if($gender=='male'){
		$ch_gander = 0 ;
		}else {
              $ch_gander = 1 ;
		}
	$insert_users = "INSERT INTO `users`(`name`, `password`, `email`, `phone`, `gender`, `u_data`)
    VALUES ('$name','$password','$email','$phone','$ch_gander','$date')";
	$conn->query($insert_users);
	header("Location:../login.php");
}

?>