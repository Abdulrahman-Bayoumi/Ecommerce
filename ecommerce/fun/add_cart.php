<?php 
session_start();
if(isset($_SESSION['id'])){
	include 'connection.php';

	$id_user = $_SESSION['id'];
	$id_product = $_POST['id'];
	$price = intval($_POST['price']);
	$count = intval($_POST['count']);

	$total_price = $price * $count ;

	$date = date("Y-m-d");

	$select_cart = "SELECT * FROM cart WHERE id_user = '$id_user' AND id_product = '$id_product'";
	$result_cart = $conn->query($select_cart);
	$row_count = $result_cart-> num_rows;

	if($row_count > 0){
		$update_cart = "UPDATE cart SET count = count + $count , total_price =  total_price + $total_price WHERE id_user = '$id_user' AND id_product = '$id_product'";
		$conn->query($update_cart);

		$update_pro = "UPDATE products SET stock = stock - $count WHERE id = $id_product";
		$conn->query($update_pro);
	}
	else{
		$insert_cart = "INSERT INTO cart(id_product,id_user,count,total_price,c_date)VALUES('$id_product' ,'$id_user' ,'$count' ,'$total_price','$date')";
	$conn->query($insert_cart);

	$update_pro = "UPDATE products SET stock = stock - $count WHERE id = $id_product";
		$conn->query($update_pro);

	}


}

else{
	echo "Redirect";
}