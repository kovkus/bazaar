<?php
$link = mysqli_connect("localhost", "ozxuu2e3", "pizzadbbazaar", "ozxuu2e3");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
mysqli_set_charset($link, "utf8");
$link->query("update products set name = 'Margherita' where id=1") or die($link->error);

?>
