<?php
session_start();
//if(isset($_POST['submit']))
////{
////include_once "connection.php";
////$name = $_POST ['username'];
////setcookie("Username",$name ,time()+3600,"/");
////$pass = $_POST ['password'];
////setcookie("Pass",$pass ,time()+3600,"/");
////if(isset($_COOKIE["Username"])&& isset($_COOKIE["Pass"])){ 
////$select_users= "SELECT * FROM users";
////	$result_users = $conn->query($select_users);
////	$rowu = $result_users->fetch_assoc();
////       if($_COOKIE["Username"]==$rowu['name']&&$_COOKIE["Pass"]==$rowu['password'])
////       {
////        header("Location:../index.php");
////       }else{
////        header("Location:../login.php");
////       }
////    }
////}
////

if(isset($_POST['submit']))
{
	include_once 'connection.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$select_users = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";
	$result_users = $conn->query($select_users);
	$row_users = $result_users->fetch_assoc();
	$count = $result_users-> num_rows;

	$id = $row_users['id'];

	if($count > 0){
		$_SESSION['id'] = $id; 
        header ("Location:../index.php");
	}
	else
	{
		header("Location:../login.php");
	}
	


}

?>