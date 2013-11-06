<?php 
session_start();
$log = $_SESSION['logged'];
if (!$log == "1") {
	die();
	echo "WRONG WAY GUY!!";
}
?>
			<div>
				<a href="index2.php"><button class="btn btn-primary">Obnoviť</button></a>
			</div>
			