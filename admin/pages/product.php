<?php 
session_start();
$log = $_SESSION['logged'];
if (!$log == "1") {
	die();
	echo "WRONG WAY GUY!!";
}
require "/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/config.php";
$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = $id";
if ($result = mysqli_query($link, $query)) {
	 while ($row = mysqli_fetch_assoc($result)) {
	 	$name = $row[name];
	 	$contains = $row[contains];
	 	$height = $row[height];
	 	$price = $row[price];

	 	include "/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/pages/switch.php";
	 } 
	 }     
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Produkt: <?php echo $name; ?></h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <div class="control-group">
								<label class="control-label" for="name">Názov</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="name" name="name" type="text" value="<?php echo $name; ?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="contains">Obsahuje</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="contains" type="text" name="contains" value="<?php echo $contains; ?>">
								</div>
							  </div>
						   <div class="control-group">
								<label class="control-label" for="price">Cena</label>
								<div class="controls">
								  <div class="input-append">
									<input id="price" size="16" type="text" name="price" value="<?php echo $price; ?>"><span class="add-on">€</span>
								  </div>
								  <span class="help-inline">Požívajte bodku na oddelenie centov!</span>
								</div>
							</div>
							 <div class="control-group">
								<label class="control-label" for="height">Váha/počet...</label>
								<div class="controls">
								  <div class="input-append">
									<input id="height" size="16" type="text" name="height" value="<?php echo $height; ?>"><span class="add-on"><?php echo $type_height; ?></span>
								  </div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="type_of_height">Jednotka</label>
								<div class="controls">
								  <select id="type_of_height" name="type_of_height">
									<option value="1">gramy</option>
									<option value="3">kilogramy</option>
									<option value="2">militre</option>
									<option value="4">litre</option>
									<option value="5">kusy</option>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="category">Kategória</label>
								<div class="controls">
								  <select id="category" name="category">
									<option value="1">Pizza</option>
									<option value="3">Maxi pizza</option>
									<option value="2">Hambrugery</option>
									<option value="4">Cestoviny</option>
									<option value="5">Šaláty</option>
									<option value="6">Minútky</option>
									<option value="7">Nápoje</option>
								  </select>
								</div>
							  </div>
							  <input type="submit" value="Uložiť">
						  </form>

						</div>
				</div><!--/span-->

			</div><!--/row-->
    