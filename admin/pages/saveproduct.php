<?php
require "/data/b/a/bazaar-pizza.sk/web/config.php";
$idg = $_GET['id'];
$id = mysqli_real_escape_string($link,$_GET['id']);
$name = mysqli_real_escape_string($link,$_POST['name']);
$contains = mysqli_real_escape_string($link,$_POST['contains']);
$height = mysqli_real_escape_string($link,$_POST['height']);
$type_of_height = mysqli_real_escape_string($link,$_POST['type_of_height']);
$price = mysqli_real_escape_string($link,$_POST['price']);
$category = mysqli_real_escape_string($link,$_POST['category']);

if ($idg == "new") {
	$query = "INSERT INTO `ozxuu2e3`.`products` VALUES (NULL, '$category', '$name', '$height', '$type_of_height', '$contains', '$price')";
}

else {
	$query = "UPDATE `ozxuu2e3`.`products` SET `name` = '$name', `contains` = '$contains', `height` = '$height', `type_height` = '$type_of_height', `price` = '$price', `id_cat` = '$category' WHERE `products`.`id` = '$id';";
}
mysqli_query($link, $query) or die(mysqli_error($link));
echo '
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Dáta boli aktualizované!</strong>
</div>';
?>