<?php
include '/data/b/a/bazaar-pizza.sk/web/shipping.php';
$actuall_time = time();
$pondelok_od = strtotime("Monday ".$pondelok_od."");
$pondelok_do = strtotime("Monday ".$pondelok_do."");
$utorok_od = strtotime("Tuesday ".$utorok_od."");
$utorok_do = strtotime("Tuesday ".$utorok_do."");
$streda_od = strtotime("Wednesday ".$streda_od."");
$streda_do = strtotime("Wednesday ".$streda_do."");
$stvrtok_od = strtotime("Thursday ".$stvrtok_od."");
$stvrtok_do = strtotime("Thursday ".$stvrtok_do."");
$piatok_od = strtotime("Friday ".$piatok_od."");
$piatok_do = strtotime("Friday ".$piatok_do."");
$sobota_od = strtotime("Saturday ".$sobota_od."");
$sobota_do = strtotime("Saturday ".$sobota_do."");
$nedela_od = strtotime("Sunday ".$nedela_od."");
$nedela_do = strtotime("Sunday ".$nedela_do."");

if ($actuall_time > $pondelok_od && $actuall_time < $pondelok_do) {
	$timeisok = "1";
} elseif ($actuall_time > $utorok_od && $actuall_time < $utorok_do) {
	$timeisok = "1";
} elseif ($actuall_time > $streda_od && $actuall_time < $streda_do) {
	$timeisok = "1";
} elseif ($actuall_time > $stvrtok_od && $actuall_time < $stvrtok_do) {
	$timeisok = "1";
} elseif ($actuall_time > $piatok_od && $actuall_time < $piatok_do) {
	$timeisok = "1";
} elseif ($actuall_time > $sobota_od && $actuall_time < $sobota_do) {
	$timeisok = "1";
} elseif ($actuall_time > $nedela_od && $actuall_time < $nedela_do) {
	$timeisok = "1";
} else {
	$timeisok = "0";
}
//print_r($timeisok);
?>