
<?php 
if ($_GET) {
	session_start();
	$product = $_GET['productId'];
	$quantity = $_GET['numberOfProducts'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "e_commerce";
	$customer = $_SESSION['customerId'];
	// $currency = "$";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

	$query =  "INSERT INTO `order_processing`  (quantity, processed, shipped, customer,product)
			VALUES ('$quantity', '0', '0','$customer','$product')";

	$result = mysqli_query($conn, $query);

	if ($result) {
		$query2 = "UPDATE product SET product.quantity_in_stock=( product.quantity_in_stock-'$quantity') WHERE id = '$product'";

		$result2 = mysqli_query($conn, $query2);

		echo "product selected";
	}else{
		echo "Error: " . $result . "<br>" . $conn->error;
	}
}
 ?>