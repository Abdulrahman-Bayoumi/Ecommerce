<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
	$firstname = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$update_user ="UPDATE `users` SET `name`='$firstname','password'='$password',`email`='$email',`phone`='$phone' WHERE id = '$id'";
	$conn->query($update_user);
	header("Location:../users.php");
}

?>