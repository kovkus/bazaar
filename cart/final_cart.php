<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (empty($_SESSION['product'])) {
	
	echo "Vaša objednávka je prázdna.<br>";
}
else {
	echo "<ul>";
$products = $_SESSION['product'];
$price_sub = 0;
require "/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/config.php";
foreach ($products as $prd) {
$query = "SELECT * FROM products WHERE id = $prd";
if ($result = mysqli_query($link, $query)) {
	 while ($row = mysqli_fetch_assoc($result)) {
	 	echo '<li><a href="#" class="li_product tipsy-link" title="'.$row[contains].'">'.$row[name].'</a>&nbsp;'.$row[price].' €</li>';
	 	$price_sub = $row[price] + $price_sub;
	 }
}
}
echo "<li><a href='#'>Donáška</a> 0.6 €</li>";
echo "</ul> <hr> <h2>";
echo $price_sub+0.6;
echo " EUR</h2>";
}
?>