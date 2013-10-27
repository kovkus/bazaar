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
		echo '<h3>'.$row[telephone].'</h3>';
	 	echo '<h3>'.$row[adress].'</h3>';
	 	$products = explode(",", $row[products]);
	 } 
	 }     
?>
					</div>
				</div>

				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Objednávka #<?php echo $_GET['id'];?></h2>
						
					</div>
					<div class="box-content">
						<?php 
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
			
			</div><!--/row-->