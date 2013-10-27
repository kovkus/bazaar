<?php
session_start();
$id = json_decode($_POST['id_product']);
if (empty($_SESSION['product'])) {
 	$array_products = array($id);
}
else {
	$array_products = $_SESSION['product'];
	array_push($array_products, $id);
}
$_SESSION['product'] = $array_products;
?>