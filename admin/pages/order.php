			<div class="row-fluid ">
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Objednávka #<?php echo $_GET['id'];?></h2>
						
					</div>
					<div class="box-content">
						<?php 
						require "/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/config.php";
$id = $_GET['id'];
$query = "SELECT * FROM orders WHERE id = $id";
if ($result = mysqli_query($link, $query)) {
	 while ($row = mysqli_fetch_assoc($result)) {
	 	echo '<h3>'.$row[name].'</h3>';
		echo '<h3>'.$row[adress].'</h3>';
		echo '<h3>'.$row[telephone].'</h3>';
		echo '<span>'.$row[note].'</span>';
	 	$products = explode(",", $row[products]);
	 	$order_status = $row[order_status];
	 	$send_status = $row[send_status];
	 	$order_status_time = strftime("%T",$row[order_status_time]);
	 	$send_status_time = strftime("%T",$row[send_status_time]);
	 	$time = strftime("%T",$row[time]);
	 } 
	 }     
?>
					</div>
				</div>

				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Produkty #<?php echo $_GET['id'];?></h2>
						
					</div>
					<div class="box-content">
						<?php 
						echo 'Objednávka odoslaná: '.$time;
						require "/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/config.php";
foreach ($products as $prd) {
$query = "SELECT * FROM products WHERE id = $prd";
if ($result = mysqli_query($link, $query)) {
	 while ($row = mysqli_fetch_assoc($result)) {
	 	echo '<h2>'.$row[name].'</h2>';
	 }
}
}
?>
					</div>
				</div><!--/span-->
				<div class="box span2">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Status #<?php echo $_GET['id'];?></h2>
						
					</div>
					<div class="box-content">
						<?php 
				if ($order_status == "0") {
					echo '<a href="index2.php?order_success=1&orderid='.$_GET['id'].'"><button class="btn btn-large btn-success">Vybavená</button>';
				}
				elseif ($order_status = "1") {
					echo "<h3>Objednávka vybavená<br>".$order_status_time."</h3>";
				}
				?>
					</div>
				</div>
				<div class="box span2">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Status #<?php echo $_GET['id'];?></h2>
						
					</div>
					<div class="box-content">
						<?php 

				if ($send_status=="0" && $order_status=="1") {
					echo '<a href="index2.php?send_success=1&orderid='.$_GET['id'].'"><button class="btn btn-large btn-success">Expedovaná</button>';

				}
				elseif ($send_status == "1") {
					echo "<h3>Objednávka bola expedovaná<br>".$send_status_time."</h3>";
				}
				elseif ($send_status=="0" && $order_status=="0") {
					echo "Objednávka musí byť vybavená, až tak expedovaná";
				}
				?>
					</div>
				</div>
			
			</div><!--/row-->