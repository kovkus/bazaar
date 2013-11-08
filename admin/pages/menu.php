<?php 
session_start();
$log = $_SESSION['logged'];
if (!$log == "1") {
	die();
	echo "WRONG WAY GUY!!";
}
?>
			<div>
				<a href="#"><button onClick="reload();" class="btn btn-primary">Obnoviť menu na stránke</button></a>
				<br><br><div id="reloaded">Stlačte tlačidlo pre obnovenie menu na webe</div>
			</div>
			