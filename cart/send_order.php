<?php
session_start();
ini_set('display_errors',1); 
 error_reporting(E_ALL);
if (empty($_SESSION['product'])) {
	
	echo "0";
}
else {
	require "/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/config.php";
	$name = $_POST['sopname'];
	$address = $_POST['sopadress'];
	$telephone = $_POST['soptelephone'];
	$payment = $_POST['soppayment'];
	$note = $_POST['sopnote'];
	$products = $_SESSION['product'];
	$products_sql = implode(",", $products);
	$time = time();
	$query = "INSERT INTO orders VALUES (NULL,'$products_sql','$name','$address','$telephone','$payment','$time','$note','0');";
	mysqli_query($link, $query) or die(mysqli_error($link));
	session_destroy();
}
?>