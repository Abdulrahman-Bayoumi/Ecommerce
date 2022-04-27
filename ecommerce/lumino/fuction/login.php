<?php 
session_start();

if(isset($_POST['submit']))
{
	include_once 'connection.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
   
	$select_admin = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$result_Admin = $conn->query($select_admin);
	$row_admin = $result_Admin->fetch_assoc();
	$img = $row_admin['image'];
	$count = $result_Admin-> num_rows;
	if($count > 0){
		$_SESSION['username'] = $username;
		$_SESSION['image'] = $img;
        header ("Location:../index.php");
	}
	else
	{
		header("Location:../login.php");
	}
	


}

?>