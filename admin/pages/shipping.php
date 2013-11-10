<?php 
session_start();
$log = $_SESSION['logged'];
if (!$log == "1") {
	die();
	echo "WRONG WAY GUY!!";
}

include '/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/shipping.php';
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Donášková služba</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method=POST action="?page=save_shipping">
						  <table border="0" width="25%" cellpadding="3" cellspacing="3">
						  	<tr><td>Pondelok</td><td><input type="text" style="width:40px;" name="pondelok_od" value="<?php echo $pondelok_od;?>"></td><td><input type="text" style="width:40px;" name="pondelok_do" value="<?php echo $pondelok_do;?>"></td></tr>
						  	<tr><td>Utorok</td><td><input type="text" style="width:40px;" name="utorok_od" value="<?php echo $utorok_od;?>"></td><td><input type="text" style="width:40px;" name="utorok_do" value="<?php echo $utorok_do;?>"></td></tr>
						  	<tr><td>Streda</td><td><input type="text" style="width:40px;" name="streda_od" value="<?php echo $streda_od;?>"></td><td><input type="text" style="width:40px;" name="streda_do" value="<?php echo $streda_do;?>"></td></tr>
						  	<tr><td>Štvrtok</td><td><input type="text" style="width:40px;" name="stvrtok_od" value="<?php echo $stvrtok_od;?>"></td><td><input type="text" style="width:40px;" name="stvrtok_do" value="<?php echo $stvrtok_do;?>"></td></tr>
						  	<tr><td>Piatok</td><td><input type="text" style="width:40px;" name="piatok_od" value="<?php echo $piatok_od;?>"></td><td><input type="text" style="width:40px;" name="piatok_do" value="<?php echo $piatok_do;?>"></td></tr>
							<tr><td>Sobota</td><td><input type="text" style="width:40px;" name="sobota_od" value="<?php echo $sobota_od;?>"></td><td><input type="text" style="width:40px;" name="sobota_do" value="<?php echo $sobota_do;?>"></td></tr>			  					
						  	<tr><td>Nedeľa</td><td><input type="text" style="width:40px;" name="nedela_od" value="<?php echo $nedela_od;?>"></td><td><input type="text" style="width:40px;" name="nedela_do" value="<?php echo $nedela_do;?>"></td></tr>
						  </table>
							  <input type="submit" value="Uložiť">
						  </form>

						</div>
				</div><!--/span-->

			</div><!--/row-->
    