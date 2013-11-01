<?php
require "/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/config.php";
$id = mysqli_real_escape_string($link,$_GET['id']);
$name = mysqli_real_escape_string($link,$_POST['name']);
$contains = mysqli_real_escape_string($link,$_POST['contains']);
$height = mysqli_real_escape_string($link,$_POST['height']);
$type_of_height = mysqli_real_escape_string($link,$_POST['type_of_height']);
$price = mysqli_real_escape_string($link,$_POST['price']);
$category = mysqli_real_escape_string($link,$_POST['category']);

$query = "UPDATE `bazaar`.`products` SET `name` = '$name', `contains` = '$contains', `height` = '$height', `type_height` = '$type_of_height', `price` = '$price', `id_cat` = '$category' WHERE `products`.`id` = '$id';";
mysqli_query($link, $query) or die(mysqli_error($link));
echo '
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Dáta boli aktualizované!</strong>
</div>';
?>