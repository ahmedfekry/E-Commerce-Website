<?php 
	$servername = "localhost";
	$dbname = "e_commerce";
	$password = "";
	$username = "root";

	$orderId = $_GET['orderId'];
	$product = $_GET['productId'];	
	$quantity = $_GET['numberOfProducts2'];
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if (!$conn) {
		die("Connection Field ".mysqli_connect_error());
	}

		$query2 = "UPDATE product SET product.quantity_in_stock=( product.quantity_in_stock+'$quantity') WHERE id = '$product'";
		$result2 = mysqli_query($conn, $query2);

	if (!$result2) {
		die("field");
	}

	$query =  "DELETE FROM order_processing WHERE id = '$orderId' ";

	if ( mysqli_query($conn, $query)) {
		// $query2 = "UPDATE product SET product.quantity_in_stock=( product.quantity_in_stock+'$quantity') WHERE id = '$product'";
		// $result2 = mysqli_query($conn, $query2);

		echo "Deleted".$orderId;
	}else{
		 echo "Error deleting record: " . mysqli_error($conn);
	}

 ?>