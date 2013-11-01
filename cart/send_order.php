<?php
session_start();
ini_set('display_errors',1); 
 error_reporting(E_ALL);
if (empty($_SESSION['product'])) {
	
	echo "0";
}
else {
	require "/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/config.php";
	$name = mysqli_real_escape_string($link,$_POST['sopname']);
	$address = mysqli_real_escape_string($link,$_POST['sopadress']);
	$telephone = mysqli_real_escape_string($link,$_POST['soptelephone']);
	$payment = mysqli_real_escape_string($link,$_POST['soppayment']);
	$note = mysqli_real_escape_string($link,$_POST['sopnote']);
	$products = $_SESSION['product'];
	$products_sql = implode(",", $products);
	$products_sql = mysqli_real_escape_string($link,$products_sql);
	$time = time();
	$query = "INSERT INTO orders VALUES (NULL,'$products_sql','$name','$address','$telephone','$payment','$time','$note','0','0','0','0');";
	mysqli_query($link, $query) or die(mysqli_error($link));
	session_destroy();
}
?>