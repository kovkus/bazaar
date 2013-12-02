<?php 
session_start();
$log = $_SESSION['logged'];
if (!$log == "1") {
	die();
	echo "WRONG WAY GUY!!";
}
?>
			<div class="row-fluid ">
				<a href="?page=new_product"><button class="btn btn-primary">Nový produkt</button></a>
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> Produkty</h2>
						
					</div>
					<div class="box-content">
						<?php 
						if ($_GET['order_success'] == "1") {
							require "/data/b/a/bazaar-pizza.sk/web/config.php";
							$id = mysqli_real_escape_string($link,$_GET['orderid']);
							$time = time();
							$query = "UPDATE `ozxuu2e3`.`orders` SET `order_status` = '1', `order_status_time` = '$time' WHERE `orders`.`id` = $id;";
							mysqli_query($link, $query) or die(mysqli_error($link));
							echo '
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Objednávka bola označená ako vybavená!</strong>
						</div>';
						}
						if ($_GET['send_success'] == "1") {
							require "/data/b/a/bazaar-pizza.sk/web/config.php";
							$id = mysqli_real_escape_string($link,$_GET['orderid']);
							$time = time();
							$query = "UPDATE `ozxuu2e3`.`orders` SET `send_status` = '1', `send_status_time` = '$time' WHERE `orders`.`id` = $id;";
							mysqli_query($link, $query) or die(mysqli_error($link));
							echo '
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Objednávka bola označená ako expedovaná!</strong>
						</div>';
						}
						?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Názov</th>
								  <th>Kategória</th>
								  <th>Akcie</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
						<?php 
							require "/data/b/a/bazaar-pizza.sk/web/config.php";
							$query = "SELECT * FROM products ORDER BY id";
							if ($result = mysqli_query($link, $query)) {
								while ($row = mysqli_fetch_assoc($result)) {
								if ($row[id_cat] == "1") {
									$cat = "Pizza";
								}
								elseif ($row[id_cat] == "2") {
									$cat = "Maxi Pizza";
								}
								elseif ($row[id_cat] == "3") {
									$cat = "Hamburgery";
								}
								elseif ($row[id_cat] == "4") {
									$cat = "Cestoviny";
								}
								elseif ($row[id_cat] == "5") {
									$cat = "Šaláty";
								}
								elseif ($row[id_cat] == "6") {
									$cat = "Minútky";
								}
								elseif ($row[id_cat] == "7") {
									$cat = "Nápoje";
								}
	 							echo '<tr>
								<td>'.$row[name].'</td>
								<td>'.$cat.'</td>
								<td class="center">
									<a class="btn btn-info" href="?page=product&id='.$row[id].'">
										<i class="icon-edit icon-white"></i>  
										Upraviť                                          
									</a>
									<a class="btn btn-danger" href="?page=delete_product&id='.$row[id].'">
										<i class="icon-trash icon-white"></i> 
										Vymazať
									</a>
									
								</td>
							</tr>';
					        	}
							} 
							
						 ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->