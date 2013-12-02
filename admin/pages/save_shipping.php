<?php
session_start();	
$filename = '/data/b/a/bazaar-pizza.sk/web/shipping.php';
$somecontent = "
	<?php
	\$pondelok_od = '".$_POST['pondelok_od']."';
	\$pondelok_do = '".$_POST['pondelok_do']."';
	\$utorok_od = '".$_POST['utorok_od']."';
	\$utorok_do= '".$_POST['utorok_do']."';
	\$streda_od = '".$_POST['streda_od']."';
	\$streda_do = '".$_POST['streda_do']."';
	\$stvrtok_od = '".$_POST['stvrtok_od']."';
	\$stvrtok_do = '".$_POST['stvrtok_do']."';
	\$piatok_od = '".$_POST['piatok_od']."';
	\$piatok_do = '".$_POST['piatok_do']."';
	\$sobota_od = '".$_POST['sobota_od']."';
	\$sobota_do = '".$_POST['sobota_do']."';
	\$nedela_od = '".$_POST['nedela_od']."';
	\$nedela_do = '".$_POST['nedela_do']."';
	?>
";
if (is_writable($filename)) {
    if (!$handle = fopen($filename, 'w+')) {
         echo "Cannot open file ($filename)";
         exit;
    }
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
    echo '
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Donášková služba bola aktualizovaná!</strong>
</div>';
    fclose($handle);
} else {
    echo "The file $filename is not writable";
}
?>