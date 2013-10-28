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
	 	$products = explode(",", $row[products]);
	 	$status = $row[status];
	 	$time = strftime("%T",$row[time]);
	 } 
	 }     
?>
					</div>
				</div>

				<div class="box span6">
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
				if ($status == "0") {
					echo '<a href="index2.php?success=1&orderid='.$_GET['id'].'"><button class="btn btn-large btn-success">Vybavená</button>';
				}
				elseif ($status = "1") {
					echo "<h3>Objednávka vybavená</h3>";
				}
				?>
					</div>
				</div>

			
			</div><!--/row-->