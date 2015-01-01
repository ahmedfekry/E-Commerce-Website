<?php
	session_start();
	if(!isset($_SESSION['admin']) ||  !isset($_GET['id'])) {
		 header ("Location: index.php"); 
		 exit();
	}
	$productID = $_GET['id']	;
	

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "e_commerce";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	
	$sql = "delete  FROM product WHERE product.id = $productID ";
	$query =  mysqli_query($conn, $sql);
		$affected = $conn -> affected_rows;
		if ($affected == 0)
		echo "failed to delete";
	else
		header ("Location: StorePage.php");

?>