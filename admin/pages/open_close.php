<?php
$filename = '/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/open_close.php';
$somecontent = "
	<?php
	\$pondelok_od = 'test';
	\$pondelok_do = 'test';
	\$utorok_od = 'test';
	\$utorok_do= 'test';
	\$streda_od = 'test';
	\$streda_do = 'test';
	\$stvrtok_od = 'test';
	\$stvrtok_do = 'test';
	\$piatok_od = 'test';
	\$piatok_do = 'test';
	\$sobota_od = 'test';
	\$sobota_do = 'test';
	\$nedela_od = 'test';
	\$nedela_do = 'test';
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
<strong>Otváracie hodiny boli aktualizované!</strong>
</div>';
    fclose($handle);
} else {
    echo "The file $filename is not writable";
}
?>