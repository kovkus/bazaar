<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (empty($_SESSION['product'])) {
	
	echo "Vaša objednávka je prázdna.<br>";
}
else {
	echo "<ul>";
$products = $_SESSION['product'];
require "/data/b/a/bazaar-pizza.sk/web/config.php";
foreach ($products as $prd) {
$query = "SELECT * FROM products WHERE id = $prd";
if ($result = mysqli_query($link, $query)) {
	 while ($row = mysqli_fetch_assoc($result)) {
	 	echo '<li><a href="#" class="li_product tipsy-link" title="'.$row[contains].'">'.$row[name].'</a></li>';
	 }
}
}
echo "</ul>";
}
?>