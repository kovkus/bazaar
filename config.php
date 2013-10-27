<?php
$link = mysqli_connect("localhost", "root", "", "bazaar");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
mysqli_set_charset($link, "utf8");

$rq_pass_admin = "48f8ef63f7cbea3c363d7b5f689a6bd7";
$rq_pass_cas = "da16cda5a55781c3e816fe4691fcc98e";
?>