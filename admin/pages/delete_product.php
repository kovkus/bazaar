<?php
require "/data/b/a/bazaar-pizza.sk/web/config.php";
$id = mysqli_real_escape_string($link,$_GET['id']);
$query = "DELETE FROM `ozxuu2e3`.`products` WHERE `products`.`id` = '$id'";
mysqli_query($link, $query) or die(mysqli_error($link));
echo '
<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Dáta boli vymazané!</strong>
</div>';
?>