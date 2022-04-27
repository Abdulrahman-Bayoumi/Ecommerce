<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$instgram = $_POST['instgram'];

	$image_name1 = $_FILES['img1']['name'];
	$image_temp1 = $_FILES['img1']['tmp_name'];
	move_uploaded_file($image_temp1, "../images/$image_name1");


	$image_name2 = $_FILES['img2']['name'];
	$image_temp2 = $_FILES['img2']['tmp_name'];
	move_uploaded_file($image_temp2, "../images/$image_name2");




	if(!empty($image_name1)){
		$update_image1 = "UPDATE site_info SET img1 = '$image_name1'";
		$conn->query($update_image1); 

	}
	if(!empty($image_name2)){
		$update_image2 = "UPDATE site_info SET img2 = '$image_name2'";
		$conn->query($update_image2); 

	}

	$update_site = "UPDATE site_info SET site_name = '$name' , address = '$address' , phone = '$phone' , facebook = '$facebook',twitter = '$twitter' , instgram = '$instgram'";
	$conn->query($update_site);
	

	header("Location:../site_info.php");
}

?>